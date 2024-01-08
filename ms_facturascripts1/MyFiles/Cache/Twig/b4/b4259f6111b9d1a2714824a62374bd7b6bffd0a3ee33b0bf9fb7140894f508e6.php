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

/* Tab/DocFiles.html.twig */
class __TwigTemplate_db293f29b1e959f8d3374c14b426d61154749988d71805f81b4e83f9e107a49b extends Template
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
        $context["doc"] = twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 2);
        // line 3
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 3);
        // line 4
        echo "
<div class=\"container-fluid\">
    <div class=\"form-row\">
        <div class=\"col-sm-12\">
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "permissions", [], "any", false, false, false, 8), "allowUpdate", [], "any", false, false, false, 8)) {
            // line 9
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["doc"] ?? null), "url", [], "method", false, false, false, 9), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\"
                      onsubmit=\"animateSpinner('add')\">
                    <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 11), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"action\" value=\"add-file\"/>
                    ";
            // line 13
            echo $this->env->getFunction('formToken')->getCallable()();
            echo "
                    <div class=\"card border-success shadow mb-3\">
                        <div class=\"card-body p-3\">
                            <h5 class=\"card-title\">
                                <i class=\"fas fa-folder-plus fa-fw\"></i> ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
            echo "
                            </h5>
                            <div class=\"form-group\">
                                <textarea name=\"observations\" class=\"form-control\"
                                          placeholder=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("observations"), "html", null, true);
            echo "\"></textarea>
                            </div>
                            <div class=\"form-row align-items-end\">
                                <div class=\"col\">
                                    <input type=\"file\" name=\"new-files[]\" class=\"form-control-file\" multiple required/>
                                    <p class=\"text-muted mb-0\">
                                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 27), "getMaxFileUpload", [], "method", false, false, false, 27)]), "html", null, true);
            echo "
                                    </p>
                                </div>
                                <div class=\"col text-right\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            ";
        }
        // line 40
        echo "
            <div class=\"card-columns\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["docfile"]) {
            // line 43
            echo "                    ";
            $context["file"] = twig_get_attribute($this->env, $this->source, $context["docfile"], "getFile", [], "method", false, false, false, 43);
            // line 44
            echo "                    <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["doc"] ?? null), "url", [], "method", false, false, false, 44), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\"
                          onsubmit=\"animateSpinner('add')\">
                        <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 46), "html", null, true);
            echo "\"/>
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docfile"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\"/>
                        <input type=\"hidden\" name=\"action\" value=\"\"/>
                        ";
            // line 49
            echo $this->env->getFunction('formToken')->getCallable()();
            echo "
                        <div class=\"card shadow mb-3\">
                            ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "isImage", [], "method", false, false, false, 51)) {
                // line 52
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "url", ["download-permanent"], "method", false, false, false, 52), "html", null, true);
                echo "\" target=\"_blank\">
                                    <img src=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "url", ["download"], "method", false, false, false, 53), "html", null, true);
                echo "\" class=\"card-img-top\"
                                         alt=\"";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "filename", [], "any", false, false, false, 54), "html", null, true);
                echo "\">
                                </a>
                            ";
            } else {
                // line 57
                echo "                                <div class=\"pl-3 pt-3 pr-3\">
                                    <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "url", ["download-permanent"], "method", false, false, false, 58), "html", null, true);
                echo "\" target=\"_blank\"
                                       class=\"btn btn-block btn-lg btn-secondary\">
                                        ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "isPdf", [], "method", false, false, false, 60)) {
                    // line 61
                    echo "                                            <i class=\"far fa-file-pdf fa-fw\"></i>
                                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 62
($context["file"] ?? null), "isVideo", [], "method", false, false, false, 62)) {
                    // line 63
                    echo "                                            <i class=\"far fa-file-video fa-fw\"></i>
                                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 64
($context["file"] ?? null), "isArchive", [], "method", false, false, false, 64)) {
                    // line 65
                    echo "                                            <i class=\"far fa-file-archive fa-fw\"></i>
                                        ";
                } else {
                    // line 67
                    echo "                                            <i class=\"far fa-file fa-fw\"></i>
                                        ";
                }
                // line 69
                echo "                                        ";
                echo twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "filename", [], "any", false, false, false, 69);
                echo "
                                    </a>
                                </div>
                            ";
            }
            // line 73
            echo "                            <div class=\"card-body p-3\">
                                <div class=\"form-group\">
                                <textarea name=\"observations\" class=\"form-control\"
                                          placeholder=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("observations"), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["docfile"], "observations", [], "any", false, false, false, 76);
            echo "</textarea>
                                </div>
                                <p class=\"card-text text-muted\">
                                    ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, $context["docfile"], "nick", [], "any", false, false, false, 79)) {
                // line 80
                echo "                                        <i class=\"fas fa-user\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docfile"], "nick", [], "any", false, false, false, 80), "html", null, true);
                echo "
                                    ";
            }
            // line 82
            echo "                                    <i class=\"fas fa-calendar-alt ml-3\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docfile"], "creationdate", [], "any", false, false, false, 82), "html", null, true);
            echo "
                                </p>
                            </div>
                            <div class=\"card-footer p-2\">
                                ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "permissions", [], "any", false, false, false, 86), "allowUpdate", [], "any", false, false, false, 86)) {
                // line 87
                echo "                                    <button type=\"button\" class=\"btn btn-sm btn-primary float-right\"
                                            onclick=\"this.form.action.value='edit-file';this.form.onsubmit();this.form.submit();\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
                echo "
                                    </button>
                                ";
            }
            // line 92
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "permissions", [], "any", false, false, false, 92), "allowDelete", [], "any", false, false, false, 92)) {
                // line 93
                echo "                                    <div class=\"btn-group\">
                                        <div class=\"dropdown\">
                                            <button class=\"btn btn-sm btn-outline-danger dropdown-toggle\" type=\"button\"
                                                    data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                                    aria-expanded=\"false\">
                                                <i class=\"fas fa-trash-alt\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <button type=\"button\"
                                                        onclick=\"this.form.action.value='unlink-file';this.form.onsubmit();this.form.submit();\"
                                                        class=\"dropdown-item\" href=\"#\">
                                                    <i class=\"fas fa-unlink fa-fw\"></i> ";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("unlink-file"), "html", null, true);
                echo "
                                                </button>
                                                <div class=\"dropdown-divider\"></div>
                                                <button type=\"button\"
                                                        onclick=\"this.form.action.value='delete-file';this.form.submit();\"
                                                        class=\"dropdown-item\" href=\"#\">
                                                    <i class=\"far fa-trash-alt fa-fw\"></i> ";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("delete-file"), "html", null, true);
                echo "
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            // line 116
            echo "                            </div>
                        </div>
                    </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "            </div>
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Tab/DocFiles.html.twig";
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
        return array (  272 => 120,  263 => 116,  254 => 110,  245 => 104,  232 => 93,  229 => 92,  223 => 89,  219 => 87,  217 => 86,  209 => 82,  203 => 80,  201 => 79,  193 => 76,  188 => 73,  180 => 69,  176 => 67,  172 => 65,  170 => 64,  167 => 63,  165 => 62,  162 => 61,  160 => 60,  155 => 58,  152 => 57,  146 => 54,  142 => 53,  137 => 52,  135 => 51,  130 => 49,  125 => 47,  121 => 46,  115 => 44,  112 => 43,  108 => 42,  104 => 40,  93 => 32,  85 => 27,  76 => 21,  69 => 17,  62 => 13,  57 => 11,  51 => 9,  49 => 8,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/DocFiles.html.twig", "/var/www/html/Dinamic/View/Tab/DocFiles.html.twig");
    }
}
