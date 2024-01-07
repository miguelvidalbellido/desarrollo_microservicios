<?php 

namespace FacturaScripts\Plugins\ObtenerFacturaUrl\Controller;

use FacturaScripts\Core\Lib\Controller\Controller;
use FacturaScripts\Core\Template\ApiController;
use FacturaScripts\Core\Model\FacturaCliente;
use FacturaScripts\Dinamic\Lib\Export\PDFExport;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

class ApiObtenerFacturaUrlController extends ApiController
{
    public function runResource() : void
    {

        // Obtenemos el ID del cliente
        $idCliente = $this->request->query->get('idcliente', '');

        if (empty($idCliente)) {
            $respuesta = [
                'msg_status' => 'ERROR_CLIENTE',
                'facturas_pdf' => []
            ];

            echo json_encode($respuesta);
            return;
        }

        $facturas = new FacturaCliente();
        $where = [new DataBaseWhere('codcliente', $idCliente)];
        $todasLasFacturas = $facturas->all($where);

        $data = [];
        foreach ($todasLasFacturas as $facturas) {
            $pdfContent = $this->generarPDF($facturas);

            if($pdfContent) {
                $pdfBase64 = "data:application/pdf;base64,".base64_encode($pdfContent);
                $pdf = $pdfBase64;
            } else {
                $pdf = '';
            }

            $data[] = [
                'id' => $facturas->idfactura,
                'pdf' => $pdf
            ];
        }

        $respuesta = [
            'msg_status' => 'OK',
            'facturas_pdf' => $data
        ];

        echo json_encode($respuesta);
    }

    private function generarPDF($factura)
    {
        $pdf = new PDFExport();
        $pdf->addBusinessDocPage($factura);

        return $pdf->getDoc();
    }
}