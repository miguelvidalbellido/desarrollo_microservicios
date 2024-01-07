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

/* Tab\EmailSentAttachment.html.twig */
class __TwigTemplate_0293ea39257e48460426631f013bebfcc38a00d22bf42a83e33a68a89aaf4866 extends Template
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
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 4
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center justify-content-between\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fa-solid fa-paperclip text-secondary mr-1\"></i>
                    <span class=\"d-inline-block text-truncate\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
                </div>
                <div class=\"d-flex align-items-center\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "path", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-primary ml-1\" target=\"_blank\" download>
                        ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getFunction('bytes')->getCallable()(twig_get_attribute($this->env, $this->source, $context["attachment"], "size", [], "any", false, false, false, 13)), "html", null, true);
            echo " <i class=\"fa-solid fa-download ml-1\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Tab\\EmailSentAttachment.html.twig";
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
        return array (  63 => 13,  59 => 12,  53 => 9,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab\\EmailSentAttachment.html.twig", "/var/www/html/Dinamic/View/Tab/EmailSentAttachment.html.twig");
    }
}
