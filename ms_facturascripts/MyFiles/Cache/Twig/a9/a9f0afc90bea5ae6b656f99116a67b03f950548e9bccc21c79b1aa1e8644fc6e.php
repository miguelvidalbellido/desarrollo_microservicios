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

/* Macro/Toasts.html.twig */
class __TwigTemplate_61a1000fcd9cab05835aed5fde429c038aa952cc611dcbb41c5b9634c635c373 extends Template
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
        echo "<div id=\"messages-toasts\" style=\"z-index: 9999; position: fixed; bottom: 0; left: 50%; transform: translateX(-50%);\"></div>

<script>
    function setToast(message, style = 'info', title = '', time = 10000) {
        let icon = '';
        let styleBorder = '';
        let styleHeader = '';
        let role = 'status';
        let live = 'polite';
        let delay = time > 0 ? 'data-delay=\"' + time + '\"' : 'data-autohide=\"false\"';

        switch (style) {
            case 'completed':
                styleHeader = 'bg-success text-white';
                styleBorder = 'border border-success';
                icon = '<i class=\"fas fa-check-circle mr-1\"></i>';
                title = title !== '' ? title : '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("completed"), "html", null, true);
        echo "';
                break;

            case 'danger':
                role = 'alert';
                live = 'assertive';
                styleHeader = 'bg-danger text-white';
                styleBorder = 'border border-danger';
                icon = '<i class=\"fas fa-times-circle mr-1\"></i>';
                title = title !== '' ? title : '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("common-error"), "html", null, true);
        echo "';
                break;

            case 'info':
                styleHeader = 'bg-info text-white';
                styleBorder = 'border border-info';
                icon = '<i class=\"fas fa-info-circle mr-1\"></i>';
                title = title !== '' ? title : '";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("info"), "html", null, true);
        echo "';
                break;

            case 'spinner':
                styleHeader = 'bg-info text-white';
                styleBorder = 'border border-info';
                icon = '<i class=\"fa-solid fa-circle-notch fa-spin mr-1\"></i>';
                title = title !== '' ? title : '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("processing"), "html", null, true);
        echo "';
                break;

            case 'notice':
            case 'success':
                styleHeader = 'bg-success text-white';
                styleBorder = 'border border-success';
                icon = '<i class=\"fas fa-check-circle mr-1\"></i>';
                title = title !== '' ? title : '";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("success"), "html", null, true);
        echo "';
                break;

            case 'warning':
                styleHeader = 'bg-warning';
                styleBorder = 'border border-warning';
                icon = '<i class=\"fas fa-exclamation-circle mr-1\"></i>';
                title = title !== '' ? title : '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("warning"), "html", null, true);
        echo "';
                break;
        }

        if (message === '') {
            styleHeader += ' border-bottom-0';
        }

        let html = '<div class=\"toast toast-' + style + ' ' + styleBorder + '\" style=\"margin: 15px auto 0 auto;\" role=\"' + role + '\" aria-live=\"' + live + '\" aria-atomic=\"true\" ' + delay + '>'
            + '<div class=\"toast-header ' + styleHeader + '\">'
            + '<strong class=\"mr-auto\">' + icon + title + '</strong>'
            + '<button type=\"button\" class=\"ml-4 btn close ' + styleHeader + '\" data-dismiss=\"toast\" aria-label=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
        echo "\">'
            + '<span aria-hidden=\"true\">&times;</span>'
            + '</button>'
            + '</div>';

            if (message !== '') {
                html += '<div class=\"toast-body\">' + message + '</div>';
            }

            html += '</div>';

        // eliminamos los toast con la clase hide
        \$('#messages-toasts .toast.hide').remove();

        // agregamos el toast al div
        \$('#messages-toasts').append(html);

        // mostramos los toast
        \$('#messages-toasts .toast').toast('show');
    }
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Macro/Toasts.html.twig";
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
        return array (  122 => 66,  108 => 55,  98 => 48,  87 => 40,  77 => 33,  67 => 26,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/Toasts.html.twig", "/var/www/html/Dinamic/View/Macro/Toasts.html.twig");
    }
}
