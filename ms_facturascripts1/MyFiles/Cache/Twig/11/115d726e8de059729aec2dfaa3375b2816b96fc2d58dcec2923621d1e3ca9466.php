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

/* AdminPlugins.html.twig */
class __TwigTemplate_5b1a58343046acc5c97be90ab6114b018141602497fcbd7f931c9e3d3c83162c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "AdminPlugins.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 28), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 31
        if ((0 === twig_compare((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 31), "homepage", [], "any", false, false, false, 31)))) {
            // line 32
            echo "                        <a class=\"btn btn-sm btn-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 32), "html", null, true);
            echo "?defaultPage=FALSE\"
                           title=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("marked-as-homepage"), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 37
            echo "                        <a class=\"btn btn-sm btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 37), "html", null, true);
            echo "?defaultPage=TRUE\"
                           title=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("mark-as-homepage"), "html", null, true);
            echo "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 42
        echo "                </div>
                ";
        // line 43
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 44
            echo "                    <button class=\"btn btn-spin-action btn-sm btn-success\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalAddPlugin\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 50
        echo "                <div class=\"btn-group\">
                    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 51), "html", null, true);
        echo "?action=rebuild&multireqtoken=";
        echo $this->env->getFunction('formToken')->getCallable()(false);
        echo "\"
                       onclick=\"animateSpinner('add')\"
                       class=\"btn btn-spin-action btn-sm btn-warning\">
                        <i class=\"fas fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("rebuild"), "html", null, true);
        echo "</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 61
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getFunction('trans')->getCallable()((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 61)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["title"] ?? null) : null))), "html", null, true);
        echo "
                    <i class=\"";
        // line 62
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 62)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("installed-plugins"), "html", null, true);
        echo "
                ";
        // line 71
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 71)), 0))) {
            // line 72
            echo "                    <span class=\"badge badge-secondary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 72)), "html", null, true);
            echo "</span>
                ";
        }
        // line 74
        echo "            </a>
        </li>
        ";
        // line 76
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 77
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fas fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("more-plugins"), "html", null, true);
            echo "</span>
                    ";
            // line 81
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 81)), 0))) {
                // line 82
                echo "                        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 82)), "html", null, true);
                echo "</span>
                    ";
            }
            // line 84
            echo "                </a>
            </li>
        ";
        }
        // line 87
        echo "    </ul>
";
    }

    // line 90
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            ";
        // line 94
        echo twig_call_macro($macros["_self"], "macro_showInstalledPlugins", [($context["fsc"] ?? null)], 94, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 96
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 97
            echo "            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                ";
            // line 98
            echo twig_call_macro($macros["_self"], "macro_showAllPlugins", [($context["fsc"] ?? null)], 98, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 101
        echo "    </div>

    ";
        // line 104
        echo "    ";
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 105
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 105), "html", null, true);
            echo "\" name=\"upload-plugins\" method=\"post\" class=\"form\" enctype=\"multipart/form-data\"
              onsubmit=\"animateSpinner('add')\">
            ";
            // line 107
            echo $this->env->getFunction('formToken')->getCallable()();
            echo "
            <input type=\"hidden\" name=\"action\" value=\"upload\"/>
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("add-new-plugin"), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-label=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        ";
            // line 119
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 119), 99))) {
                // line 120
                echo "                            <div class=\"alert alert-warning mb-0\">
                                ";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 121)]), "html", null, true);
                echo "
                            </div>
                        ";
            }
            // line 124
            echo "                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                ";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("select-plugin-zip-file"), "html", null, true);
            echo "
                                <input type=\"file\" name=\"plugin[]\" multiple=\"\" accept=\"application/zip\" required/>
                                ";
            // line 128
            if ((0 <= twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 128), 99))) {
                // line 129
                echo "                                    <small class=\"form-text text-muted\">
                                        ";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 130)]), "html", null, true);
                echo "
                                    </small>
                                ";
            }
            // line 133
            echo "                            </div>
                            <div class=\"text-right mt-5\">
                                <button type=\"button\" class=\"btn btn-spin-action btn-secondary\"
                                        data-dismiss=\"modal\">";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            echo "</button>
                                <button type=\"submit\"
                                        class=\"btn btn-spin-action btn-primary\">";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("continue"), "html", null, true);
            echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
    }

    // line 148
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 150
        if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
            // line 151
            echo "        <script>
            function deletePlugin(pluginName) {
                bootbox.confirm({
                    title: \"";
            // line 154
            echo $this->env->getFunction('trans')->getCallable()("confirm-delete");
            echo "\",
                    message: \"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
            echo "\",
                    closeButton: false,
                    buttons: {
                        cancel: {
                            label: \"<i class='fas fa-times'></i> ";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            echo "\"
                        },
                        confirm: {
                            label: \"<i class='fas fa-check'></i> ";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            echo "\",
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            animateSpinner('add');
                            window.location = \"";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 169), "html", null, true);
            echo "?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName
                                + \"\\u0026\" + \"multireqtoken=";
            // line 170
            echo $this->env->getFunction('formToken')->getCallable()(false);
            echo "\";
                        }
                    }
                });
            }
        </script>
    ";
        }
    }

    // line 179
    public function macro_healthStatus($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 180
            echo "    ";
            if ((-1 === twig_compare(($context["value"] ?? null), 1))) {
                // line 181
                echo "        <i class=\"fas fa-heart-broken\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 186
($context["value"] ?? null), 2))) {
                // line 187
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 192
($context["value"] ?? null), 3))) {
                // line 193
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 198
($context["value"] ?? null), 4))) {
                // line 199
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 204
($context["value"] ?? null), 5))) {
                // line 205
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } else {
                // line 211
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 219
    public function macro_showAllPlugins($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 220
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th>";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("name"), "html", null, true);
            echo "</th>
                <th>";
            // line 225
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 229));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 230
                echo "                ";
                $context["extraClass"] = (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 230), 2))) ? ("table-success") : ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 230), 0))) ? ("table-danger") : ("table-warning"))));
                // line 231
                echo "                <tr class=\"clickableRow ";
                echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "url", [], "any", false, false, false, 231), "html", null, true);
                echo "\" data-target=\"_blank\">
                    <td>
                        <div class=\"h6\">";
                // line 233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 233), "html", null, true);
                echo "</div>
                        <span class=\"mr-1 text-secondary\" title=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("health"), "html", null, true);
                echo "\">
                            ";
                // line 235
                echo twig_call_macro($macros["_self"], "macro_healthStatus", [twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 235)], 235, $context, $this->getSourceContext());
                echo "
                        </span>
                        v";
                // line 237
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 237), "html", null, true);
                echo "
                    </td>
                    <td>";
                // line 239
                echo twig_nl2br(twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 239), 0, 300), "html", null, true));
                echo "</td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 242
                echo "                <tr class=\"table-warning\">
                    <td colspan=\"2\">";
                // line 243
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 251
    public function macro_showInstalledPlugins($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 252
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th>";
            // line 256
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("name"), "html", null, true);
            echo "</th>
                <th class=\"text-right\">";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("version"), "html", null, true);
            echo "</th>
                <th>";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
            echo "</th>
                <th class=\"text-right pr-3\">";
            // line 259
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("actions"), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 263
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 263));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 264
                echo "                ";
                $context["trClass"] = "table-danger";
                // line 265
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 265)) {
                    // line 266
                    echo "                    ";
                    $context["trClass"] = "table-success";
                    // line 267
                    echo "                ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["plugin"], "compatible", [], "any", false, false, false, 267)) {
                    // line 268
                    echo "                    ";
                    $context["trClass"] = "";
                    // line 269
                    echo "                ";
                }
                // line 270
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["trClass"] ?? null), "html", null, true);
                echo "\">
                    <td>";
                // line 271
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 271), "html", null, true);
                echo "</td>
                    <td class=\"text-right\">
                        ";
                // line 273
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 273), 0))) {
                    // line 274
                    echo "                            <span class=\"text-danger\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 274), "html", null, true);
                    echo "</span>
                        ";
                } elseif ((-1 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 275
$context["plugin"], "version", [], "any", false, false, false, 275), 1))) {
                    // line 276
                    echo "                            <span class=\"text-warning\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 276), "html", null, true);
                    echo "</span>
                        ";
                } else {
                    // line 278
                    echo "                            v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 278), "html", null, true);
                    echo "
                        ";
                }
                // line 280
                echo "                    </td>
                    <td>
                        ";
                // line 282
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 282), "html", null, true));
                echo "
                        ";
                // line 283
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "forja", ["url", ""], "method", false, false, false, 283)) {
                    // line 284
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "forja", ["url", ""], "method", false, false, false, 284), "html", null, true);
                    echo "\" target=\"_blank\" class=\"ml-2\">
                                ";
                    // line 285
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("more"), "html", null, true);
                    echo " <i class=\"fas fa-external-link-alt\"></i>
                            </a>
                        ";
                }
                // line 288
                echo "                        <br/>
                        ";
                // line 289
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["plugin"], "require", [], "any", false, false, false, 289));
                foreach ($context['_seq'] as $context["_key"] => $context["requiredPluginName"]) {
                    // line 290
                    echo "                            <div class=\"badge badge-secondary\">
                                ";
                    // line 291
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("plugin-needed", ["%pluginName%" => $context["requiredPluginName"]]), "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requiredPluginName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 294
                echo "                    </td>
                    <td class=\"text-right text-nowrap\">
                        ";
                // line 296
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "hasUpdate", [], "method", false, false, false, 296)) {
                    // line 297
                    echo "                            <a href=\"Updater\" class=\"btn btn-spin-action btn-sm btn-info mr-1\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("updater"), "html", null, true);
                    echo "\">
                                <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                            </a>
                        ";
                }
                // line 301
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 301)) {
                    // line 302
                    echo "                            <a class=\"btn btn-sm btn-secondary btn-spin-action\" onclick=\"animateSpinner('add');\"
                               href=\"";
                    // line 303
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 303), "html", null, true);
                    echo "?action=disable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 303), "html", null, true);
                    echo "&amp;multireqtoken=";
                    echo $this->env->getFunction('formToken')->getCallable()(false);
                    echo "\">
                                <i class=\"fas fa-times\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 305
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("disable"), "html", null, true);
                    echo "</span>
                            </a>
                            <br/>
                            <small>";
                    // line 308
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("plugin-order", ["%num%" => twig_get_attribute($this->env, $this->source, $context["plugin"], "order", [], "any", false, false, false, 308)]), "html", null, true);
                    echo "</small>
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 309
$context["plugin"], "compatible", [], "any", false, false, false, 309)) {
                    // line 310
                    echo "                            ";
                    if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
                        // line 311
                        echo "                                <a class=\"btn btn-sm btn-danger mr-1 btn-spin-action\" href=\"#\"
                                   title=\"";
                        // line 312
                        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
                        echo "\" onclick=\"deletePlugin('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 312), "html", null, true);
                        echo "');\">
                                    <i class=\"fas fa-trash-alt\" aria-hidden=\"true\"></i>
                                </a>
                            ";
                    }
                    // line 316
                    echo "                            <a class=\"btn btn-sm btn-success btn-spin-action\" onclick=\"animateSpinner('add');\"
                               href=\"";
                    // line 317
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 317), "html", null, true);
                    echo "?action=enable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 317), "html", null, true);
                    echo "&amp;multireqtoken=";
                    echo $this->env->getFunction('formToken')->getCallable()(false);
                    echo "\">
                                <i class=\"fas fa-check\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 319
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                    echo "</span>
                            </a>
                        ";
                } else {
                    // line 322
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "compatibilityDescription", [], "method", false, false, false, 322), "html", null, true);
                    echo "
                        ";
                }
                // line 324
                echo "                    </td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 327
                echo "                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>";
                // line 328
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
                echo "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AdminPlugins.html.twig";
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
        return array (  769 => 331,  760 => 328,  757 => 327,  750 => 324,  744 => 322,  738 => 319,  729 => 317,  726 => 316,  717 => 312,  714 => 311,  711 => 310,  709 => 309,  705 => 308,  699 => 305,  690 => 303,  687 => 302,  684 => 301,  676 => 297,  674 => 296,  670 => 294,  661 => 291,  658 => 290,  654 => 289,  651 => 288,  645 => 285,  640 => 284,  638 => 283,  634 => 282,  630 => 280,  624 => 278,  618 => 276,  616 => 275,  611 => 274,  609 => 273,  604 => 271,  599 => 270,  596 => 269,  593 => 268,  590 => 267,  587 => 266,  584 => 265,  581 => 264,  576 => 263,  569 => 259,  565 => 258,  561 => 257,  557 => 256,  551 => 252,  538 => 251,  526 => 246,  517 => 243,  514 => 242,  506 => 239,  501 => 237,  496 => 235,  492 => 234,  488 => 233,  480 => 231,  477 => 230,  472 => 229,  465 => 225,  461 => 224,  455 => 220,  442 => 219,  427 => 211,  419 => 205,  417 => 204,  410 => 199,  408 => 198,  401 => 193,  399 => 192,  392 => 187,  390 => 186,  383 => 181,  380 => 180,  367 => 179,  355 => 170,  351 => 169,  341 => 162,  335 => 159,  328 => 155,  324 => 154,  319 => 151,  317 => 150,  312 => 149,  308 => 148,  295 => 138,  290 => 136,  285 => 133,  279 => 130,  276 => 129,  274 => 128,  269 => 126,  265 => 124,  259 => 121,  256 => 120,  254 => 119,  247 => 115,  242 => 113,  233 => 107,  227 => 105,  224 => 104,  220 => 101,  214 => 98,  211 => 97,  209 => 96,  204 => 94,  197 => 91,  193 => 90,  188 => 87,  183 => 84,  177 => 82,  175 => 81,  171 => 80,  166 => 77,  164 => 76,  160 => 74,  154 => 72,  152 => 71,  148 => 70,  137 => 62,  133 => 61,  124 => 55,  115 => 51,  112 => 50,  106 => 47,  101 => 44,  99 => 43,  96 => 42,  89 => 38,  84 => 37,  77 => 33,  72 => 32,  70 => 31,  62 => 28,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminPlugins.html.twig", "/var/www/html/Dinamic/View/AdminPlugins.html.twig");
    }
}
