from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
from typing import List
from datetime import datetime, timedelta
from statsmodels.tsa.arima.model import ARIMA
import pandas as pd

class Event(BaseModel):
    EventID: int
    UserID: int
    event_type: str
    event_timestamp: datetime
    UserIP: str
    event_details: str
    user_agent: str

app = FastAPI()

def preprocess_data(events: List[Event]) -> pd.DataFrame:
    df = pd.DataFrame([event.dict() for event in events])
    df['date'] = pd.to_datetime(df['event_timestamp']).dt.date
    df['action'] = df['event_type']
    return df

def fit_arima(df, action_type):
    df_action = df[df['action'] == action_type]
    df_counts = df_action.groupby('date').size()
    idx = pd.date_range(min(df_counts.index), max(df_counts.index))
    df_counts = df_counts.reindex(idx, fill_value=0)
    model = ARIMA(df_counts, order=(5,1,1))
    model_fit = model.fit()
    return model_fit

def generate_predictions_with_dates(predictions, start_date):
    forecast_dates = pd.date_range(start=start_date, periods=len(predictions))
    return [{"day": day.strftime('%Y-%m-%d'), "value": value} for day, value in zip(forecast_dates, predictions)]

@app.post("/predict/")
async def predict(events: List[Event]):
    if not events:
        raise HTTPException(status_code=400, detail="No data provided")

    df = preprocess_data(events)

    try:
        model_login = fit_arima(df, 'LOGIN')
        predictions_login = model_login.get_forecast(steps=7).predicted_mean
    except Exception as e:
        raise HTTPException(status_code=500, detail=f"Failed to fit ARIMA model for LOGIN: {e}")

    try:
        model_logout = fit_arima(df, 'LOGOUT')
        predictions_logout = model_logout.get_forecast(steps=7).predicted_mean
    except Exception as e:
        raise HTTPException(status_code=500, detail=f"Failed to fit ARIMA model for LOGOUT: {e}")

    # Calcula la fecha de inicio para las predicciones
    start_date = df['date'].max() + timedelta(days=1)

    login_predictions_with_dates = generate_predictions_with_dates(predictions_login, start_date)
    logout_predictions_with_dates = generate_predictions_with_dates(predictions_logout, start_date)

    return {
        "login_predictions": login_predictions_with_dates,
        "logout_predictions": logout_predictions_with_dates
    }

@app.get("/")
async def root():
    return {"message": "Hello World"}
