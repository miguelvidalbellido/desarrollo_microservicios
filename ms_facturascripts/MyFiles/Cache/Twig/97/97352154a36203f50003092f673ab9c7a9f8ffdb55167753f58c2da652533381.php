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

/* Master/EditView.html.twig */
class __TwigTemplate_3e35ae80a4d18ebcc010788b1ce3a6879cb03f9f55ae09f3403cc5c03261007b extends Template
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
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["action"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 21), "exists", [], "method", false, false, false, 21)) ? ("edit") : ("insert"));
        // line 22
        $context["fieldCount"] = 0;
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 24
            echo "    ";
            $context["fieldCount"] = (($context["fieldCount"] ?? null) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "columns", [], "any", false, false, false, 24)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
<script>
    function editViewDelete(viewName) {
        bootbox.confirm({
            title: \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("confirm-delete"), "html", null, true);
        echo "\",
            message: \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
        echo "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        echo "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("confirm"), "html", null, true);
        echo "',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#form\" + viewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#form\" + viewName).submit();
                }
            }
        });

        return false;
    }
</script>

";
        // line 55
        echo "<div class=\"row\">
    ";
        // line 56
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 56);
        // line 57
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 57), "", ($context["fsc"] ?? null)], "method", false, false, false, 57);
        echo "
</div>

<form id=\"form";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 60), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
    ";
        // line 61
        echo $this->env->getFunction('formToken')->getCallable()();
        echo "
    <input type=\"hidden\" name=\"action\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 63), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 64), "primaryColumnValue", [], "method", false, false, false, 64), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 65
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 65), "card", [], "any", false, false, false, 65)) ? ("card shadow") : (""));
        echo "\">
        <div class=\"";
        // line 66
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 66), "card", [], "any", false, false, false, 66)) ? ("card-body") : ("container-fluid"));
        echo "\">
            <div class=\"row\">
                <div class=\"col-12 text-right\">
                    ";
        // line 70
        echo "                    ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 70);
        // line 71
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [($context["fsc"] ?? null)], "method", false, false, false, 71);
        echo "
                    ";
        // line 72
        if (((1 === twig_compare(($context["fieldCount"] ?? null), 30)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 72), "btnSave", [], "any", false, false, false, 72))) {
            // line 73
            echo "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 78
        echo "                </div>
            </div>
            <div class=\"form-row\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 82
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 82)], "method", false, false, false, 82);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </div>
        </div>
        <div class=\"";
        // line 86
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 86), "card", [], "any", false, false, false, 86)) ? ("card-footer p-2") : ("container-fluid"));
        echo "\">
            <div class=\"form-row\">
                ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 88) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 88), "btnDelete", [], "any", false, false, false, 88))) {
            // line 89
            echo "                    <div class=\"col-auto\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                onclick=\"editViewDelete('";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 91), "html", null, true);
            echo "');\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            echo "</span>
                        </button>
                    </div>
                ";
        }
        // line 97
        echo "                ";
        $context["extraClass"] = (((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 97) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 97), "btnDelete", [], "any", false, false, false, 97))) ? ("text-center") : (""));
        // line 98
        echo "                <div class=\"col ";
        echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 100
        echo "                    ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 100);
        // line 101
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [false, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 101)], "method", false, false, false, 101);
        echo "
                </div>
                <div class=\"col-auto\">
                    ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 104), "btnUndo", [], "any", false, false, false, 104)) {
            // line 105
            echo "                        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                            <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("undo"), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 110
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 110), "btnSave", [], "any", false, false, false, 110)) {
            // line 111
            echo "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 116
        echo "                </div>
            </div>
        </div>
    </div>
</form>

<br/>

";
        // line 125
        echo "<div class=\"row\">
    ";
        // line 126
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 126);
        // line 127
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 127), "", ($context["fsc"] ?? null)], "method", false, false, false, 127);
        echo "
</div>

";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 131));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 132
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 132), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 132)], "method", false, false, false, 132);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Master/EditView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 132,  268 => 131,  261 => 127,  259 => 126,  256 => 125,  246 => 116,  240 => 113,  236 => 111,  233 => 110,  227 => 107,  223 => 105,  221 => 104,  214 => 101,  211 => 100,  206 => 98,  203 => 97,  196 => 93,  191 => 91,  187 => 89,  185 => 88,  180 => 86,  176 => 84,  167 => 82,  163 => 81,  158 => 78,  152 => 75,  148 => 73,  146 => 72,  141 => 71,  138 => 70,  132 => 66,  128 => 65,  124 => 64,  120 => 63,  116 => 62,  112 => 61,  108 => 60,  101 => 57,  99 => 56,  96 => 55,  77 => 38,  71 => 35,  64 => 31,  60 => 30,  54 => 26,  47 => 24,  43 => 23,  41 => 22,  39 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditView.html.twig", "/var/www/html/Dinamic/View/Master/EditView.html.twig");
    }
}
