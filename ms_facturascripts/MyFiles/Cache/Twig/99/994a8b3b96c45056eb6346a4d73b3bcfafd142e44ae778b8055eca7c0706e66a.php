<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Tab\EmailSentHtml.html.twig */
class __TwigTemplate_3059e0f5ec343b9a437969e9cacad7fd28270eee62bd61c6b8c235239af55f4a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 1));
        // line 2
        $context["model"] = twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 2);
        // line 3
        echo "
<div class=\"card shadow mb-4\" id=\"email-html\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-12 text-center mb-4\">
                <h4>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("loading"), "html", null, true);
        echo "</h4>
                <i class=\"fas fa-circle-notch fa-5x fa-spin\"></i>
            </div>
        </div>
    </div>
</div>

<script>
    let formData = new FormData();
    formData.append('action', 'getHtml');
    formData.append('code', '";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumnValue", [], "method", false, false, false, 18), "html", null, true);
        echo "');

    fetch('";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 20), "html", null, true);
        echo "', {
        method: 'POST',
        body: formData,
    }).then(function (response) {
        if (response.ok) {
            return response.json();
        }
        return Promise.reject(response);
    }).then(function (data) {
        if (data.getHtml) {
            \$('#email-html').html('');

            // creamos un div
            let div = document.createElement('div');
            div.className = 'message-content';
            \$('#email-html').prepend(div);

            // obtenemos el div con la clase message-content
            let content = document.querySelector('#email-html div.message-content');

            // obtenemos el shadow del div
            let shadow = content.attachShadow({mode: \"open\"});

            // creamos un elemento html
            let html = document.createElement('html');
            html.innerHTML = data.html;

            // añadimos el html al shadow
            shadow.appendChild(html);

            // al hacer clic en cualquier enlace dentro del email
            // se debe abrir en una nueva pestaña
            \$(shadow).find('a').attr('target', '_blank');
        }
    }).catch(function (error) {
        alert('error getHtml');
        console.warn(error);
    });
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Tab\\EmailSentHtml.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  66 => 20,  61 => 18,  48 => 8,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab\\EmailSentHtml.html.twig", "/var/www/html/Dinamic/View/Tab/EmailSentHtml.html.twig");
    }
}
