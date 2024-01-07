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

/* Updater.html.twig */
class __TwigTemplate_96ae8b05010f8e6603013970a81c5729b2de7d4daaaaefc3fd15c792d9993ba2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Updater.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->loadTemplate("Macro/Toasts.html.twig", "Updater.html.twig", 23)->display($context);
        // line 24
        echo "    ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Updater.html.twig", 24)->unwrap();
        // line 25
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 28
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["error", "critical"], "danger"], 28, $context, $this->getSourceContext());
        echo "
                ";
        // line 29
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["warning"], "warning"], 29, $context, $this->getSourceContext());
        echo "
                ";
        // line 30
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["notice"], "success"], 30, $context, $this->getSourceContext());
        echo "
                ";
        // line 31
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["info"], "info"], 31, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a href=\"AdminPlugins\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("plugins"), "html", null, true);
        echo " </span>
                    </a>
                    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 46), "html", null, true);
        echo "\" class=\"btn btn-sm btn-secondary\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 50), "ready", [], "method", false, false, false, 50)) {
            // line 51
            echo "                    <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("manage-installation"), "html", null, true);
            echo " </span>
                    </button>
                ";
        } else {
            // line 57
            echo "                    <button class=\"btn btn-sm btn-warning\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 63
        echo "            </div>
            <div class=\"col-sm-6 text-right\">
                <h1 class=\"h3\">
                    ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("updater"), "html", null, true);
        echo "
                    <small class=\"text-info\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 67), "html", null, true);
        echo "</small>
                    <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("component"), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-right\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("action"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 83));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 84
            echo "                <tr class=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "stable", [], "any", false, false, false, 84)) ? ("table-success") : ("table-warning"));
            echo "\">
                    <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                    <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                    <td class=\"text-right\">
                        ";
            // line 88
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "mincore", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 88)))) {
                // line 89
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("requires-core", ["%version%" => twig_get_attribute($this->env, $this->source, $context["item"], "mincore", [], "any", false, false, false, 89)]), "html", null, true);
                echo "
                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 90
$context["item"], "downloaded", [], "any", false, false, false, 90)) {
                // line 91
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 91), "html", null, true);
                echo "?action=update&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 91), "html", null, true);
                echo "\" class=\"btn btn-spin-action btn-sm btn-success\" onclick=\"animateSpinner('add')\">
                                <i class=\"fas fa-rocket fa-fw\" aria-hidden=\"true\"></i> ";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("update"), "html", null, true);
                echo "
                            </a>
                            <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 94), "html", null, true);
                echo "?action=cancel&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 94), "html", null, true);
                echo "\" class=\"btn btn-spin-action btn-sm btn-warning\" onclick=\"animateSpinner('add')\">
                                <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i> ";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
                echo "
                            </a>
                        ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 97
$context["item"], "name", [], "any", false, false, false, 97), "CORE")) && twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 97))) {
                // line 98
                echo "                            <button type=\"button\" class=\"btn btn-spin-action btn-warning\" data-toggle=\"modal\"
                                    data-target=\"#coreWarningModal\">";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                echo "
                            </button>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 101
$context["item"], "stable", [], "any", false, false, false, 101)) {
                // line 102
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 102), "html", null, true);
                echo "?action=download&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 102), "html", null, true);
                echo "\"
                               class=\"btn btn-spin-action btn-sm btn-secondary\" onclick=\"animateSpinner('add')\">";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                echo "
                            </a>
                        ";
            } else {
                // line 106
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 106), "html", null, true);
                echo "?action=download&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 106), "html", null, true);
                echo "\"
                               class=\"btn btn-spin-action btn-sm btn-outline-warning\" onclick=\"animateSpinner('add')\">";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("beta"), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 110
            echo "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 113
            echo "                <tr class=\"table-warning\">
                    <td colspan=\"3\"><b>";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
            echo "</b></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "            </tbody>
        </table>
    </div>
    <div class=\"modal fade\" id=\"modalTelemetry\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 123
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 123), "ready", [], "method", false, false, false, 123)) {
            // line 124
            echo "                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("registered-installation", ["%number%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 125), "id", [], "method", false, false, false, 125)]), "html", null, true);
            echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            echo "\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <p>";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("registered-installation-p"), "html", null, true);
            echo "</p>
                        <p>";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("telemetry-data-to-send"), "html", null, true);
            echo "</p>
                        <div class=\"form-row\">
                            <div class=\"col\">
                                <a class=\"btn btn-primary\" href=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 135), "html", null, true);
            echo "?action=claim-install\" target=\"_blank\">
                                    ";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("manage"), "html", null, true);
            echo "
                                </a>
                            </div>
                            <div class=\"col text-right\">
                                <form action=\"";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 140), "html", null, true);
            echo "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
                                    <input type=\"hidden\" name=\"action\" value=\"unlink\"/>
                                    <button type=\"submit\" class=\"btn btn-spin-action btn-danger\">
                                        ";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("unlink"), "html", null, true);
            echo "
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 150
            echo "                    <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 150), "html", null, true);
            echo "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
                        <input type=\"hidden\" name=\"action\" value=\"register\"/>
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-label=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <p>";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("register-installation-p"), "html", null, true);
            echo "</p>
                            <p>";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("telemetry-data-to-send"), "html", null, true);
            echo "</p>
                            <button type=\"submit\" class=\"btn btn-spin-action btn-primary\">
                                ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            echo "
                            </button>
                        </div>
                    </form>
                ";
        }
        // line 168
        echo "            </div>
        </div>
    </div>
    ";
        // line 171
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 171)) {
            // line 172
            echo "        <div class=\"modal fade\" id=\"coreWarningModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-exclamation-triangle mr-1\" aria-hidden=\"true\"></i>
                            ";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("core-update-warning"), "html", null, true);
            echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"mb-0\">
                            ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 186));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 187
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 192));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 193
                echo "                            ";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 193), "CORE")) && twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 193))) {
                    // line 194
                    echo "                                <div class=\"btn-group\">
                                    <a href=\"";
                    // line 195
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 195), "html", null, true);
                    echo "?action=download&item=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 195), "html", null, true);
                    echo "&disable=";
                    echo twig_escape_filter($this->env, twig_join_filter(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 195)), ","), "html", null, true);
                    echo "\"
                                       class=\"btn btn-spin-action btn-warning\" onclick=\"animateSpinner('add')\">";
                    // line 196
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                    echo "
                                    </a>
                                    <button type=\"button\" class=\"btn btn-spin-action btn-warning dropdown-toggle dropdown-toggle-split\"
                                            data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">";
                    // line 200
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("options"), "html", null, true);
                    echo "</span>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"";
                    // line 203
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 203), "html", null, true);
                    echo "?action=download&item=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 203), "html", null, true);
                    echo "\"
                                           class=\"btn btn-warning\" onclick=\"animateSpinner('add')\">";
                    // line 204
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("do-not-disable-plugins"), "html", null, true);
                    echo "
                                        </a>
                                    </div>
                                </div>
                            ";
                }
                // line 209
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Updater.html.twig";
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
        return array (  472 => 210,  466 => 209,  458 => 204,  452 => 203,  446 => 200,  439 => 196,  431 => 195,  428 => 194,  425 => 193,  421 => 192,  416 => 189,  407 => 187,  403 => 186,  392 => 178,  384 => 172,  382 => 171,  377 => 168,  369 => 163,  364 => 161,  360 => 160,  352 => 155,  347 => 153,  340 => 150,  330 => 143,  324 => 140,  317 => 136,  313 => 135,  307 => 132,  303 => 131,  295 => 126,  291 => 125,  288 => 124,  286 => 123,  278 => 117,  269 => 114,  266 => 113,  259 => 110,  253 => 107,  246 => 106,  240 => 103,  233 => 102,  231 => 101,  226 => 99,  223 => 98,  221 => 97,  216 => 95,  210 => 94,  205 => 92,  198 => 91,  196 => 90,  191 => 89,  189 => 88,  184 => 86,  180 => 85,  175 => 84,  170 => 83,  163 => 79,  159 => 78,  155 => 77,  142 => 67,  138 => 66,  133 => 63,  127 => 60,  122 => 57,  116 => 54,  111 => 51,  109 => 50,  100 => 46,  95 => 44,  87 => 38,  83 => 37,  74 => 31,  70 => 30,  66 => 29,  62 => 28,  57 => 25,  54 => 24,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Updater.html.twig", "/var/www/html/Dinamic/View/Updater.html.twig");
    }
}
