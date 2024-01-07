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

/* SendMail.html.twig */
class __TwigTemplate_296b9263951cd8b7090caa799b9b63a096b2c035779b1f754bd526e63057ba00 extends Template
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
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "SendMail.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <br/>
    <br/>
    <br/>
";
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"container\" style=\"margin-top: -60px;\">
        <div class=\"row\">
            <div class=\"col-12\">
                <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 32), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\"
                      onsubmit=\"animateSpinner('add')\">
                    ";
        // line 34
        echo $this->env->getFunction('formToken')->getCallable()();
        echo "
                    <input type=\"hidden\" name=\"action\" value=\"send\"/>
                    <div class=\"card shadow\">
                        <div class=\"card-body\">
                            <h1 class=\"h3 mb-3\">
                                <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("send-mail"), "html", null, true);
        echo "
                            </h1>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("from"), "html", null, true);
        echo "</span>
                                    </div>
                                    <select class=\"custom-select\" name=\"email-from\">
                                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 47), "getAvailableMailboxes", [], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["emailFrom"]) {
            // line 48
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["emailFrom"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["emailFrom"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailFrom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("to"), "html", null, true);
        echo "</span>
                                    </div>
                                    ";
        // line 58
        $context["emails"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 58), "getToAddresses", [], "method", false, false, false, 58))) ? ("") : ((twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 58), "getToAddresses", [], "method", false, false, false, 58), ",") . ", ")));
        // line 59
        echo "                                    <input type=\"text\" id=\"email\" name=\"email\" value=\"";
        echo twig_escape_filter($this->env, ($context["emails"] ?? null), "html", null, true);
        echo "\" class=\"form-control\"
                                           placeholder=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("email-to"), "html", null, true);
        echo "\" required/>
                                    <div class=\"input-group-append\">
                                        <button type=\"button\" class=\"btn btn-outline-secondary\"
                                                title=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("email-cc"), "html", null, true);
        echo "\" onclick=\"\$('#fgCC').show();
                                                \$(this).hide();\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cc"), "html", null, true);
        echo "
                                        </button>
                                        <button type=\"button\" class=\"btn btn-outline-secondary\"
                                                title=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("email-bcc"), "html", null, true);
        echo "\" onclick=\"\$('#fgBCC').show();
                                                \$(this).hide();\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("bcc"), "html", null, true);
        echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id=\"fgCC\" class=\"form-group\" style=\"display: none;\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("cc"), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" id=\"email-cc\" name=\"email-cc\" class=\"form-control\"
                                           placeholder=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("email-cc"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div id=\"fgBCC\" class=\"form-group\" style=\"display: none;\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("bcc"), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" id=\"email-bcc\" name=\"email-bcc\" class=\"form-control\"
                                           placeholder=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("email-bcc"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("subject"), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" name=\"subject\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 96), "title", [], "any", false, false, false, 96), "html", null, true);
        echo "\"
                                           class=\"form-control\" placeholder=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("subject"), "html", null, true);
        echo "\" required/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"body\" rows=\"5\"
                                          class=\"form-control\">";
        // line 102
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 102), "text", [], "any", false, false, false, 102);
        echo "</textarea>
                            </div>
                            ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 104), "signature", [], "any", false, false, false, 104)) {
            // line 105
            echo "                                <div class=\"form-group\">
                                    ";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("email-signature"), "html", null, true);
            echo "
                                    <textarea rows=\"3\" class=\"form-control\"
                                              readonly>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 108), "signature", [], "any", false, false, false, 108), "html", null, true);
            echo "</textarea>
                                </div>
                            ";
        }
        // line 111
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 111), "getAttachmentNames", [], "method", false, false, false, 111));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 112
            echo "                                <p>
                                    <i class=\"fas fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
            // line 113
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
                                </p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                            <div id=\"email-attachments\">
                                <div class=\"form-group\">
                                    <input type=\"file\" name=\"uploads[]\" onclick=\"addAnotherInputFile()\"/>
                                </div>
                            </div>
                            <div class=\"row align-items-end\">
                                <div class=\"col-sm-6\">
                                    ";
        // line 123
        if (twig_in_filter($this->env->getFunction('settings')->getCallable()("email", "replytouseremail", "1"), ["1", "0"])) {
            // line 124
            echo "                                        ";
            $context["check"] = (((0 === twig_compare($this->env->getFunction('settings')->getCallable()("email", "replytouseremail"), "1"))) ? ("checked") : (""));
            // line 125
            echo "                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" name=\"replyto\" value=\"1\" ";
            // line 126
            echo twig_escape_filter($this->env, ($context["check"] ?? null), "html", null, true);
            echo "
                                                   class=\"form-check-input\" id=\"replytoCheck\"/>
                                            <label class=\"form-check-label\" for=\"replytoCheck\">
                                                ";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("email-replies-to", ["%email%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 129), "email", [], "any", false, false, false, 129)]), "html", null, true);
            echo "
                                            </label>
                                        </div>
                                    ";
        }
        // line 133
        echo "                                </div>
                                <div class=\"col-sm-6 text-right\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-spin-action\">
                                        <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("send"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    // line 148
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery-ui-dist/jquery-ui.min.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 153
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery-ui-dist/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        function addAnotherInputFile() {
            let input = document.createElement('div');
            input.className = 'form-group';

            let file = document.createElement('input');
            file.type = 'file';
            file.name = 'uploads[]';
            file.onclick = addAnotherInputFile;
            input.appendChild(file);

            document.getElementById('email-attachments').appendChild(input);
        }

        function extractLast(term) {
            return split(term).pop();
        }

        function split(val) {
            return val.split(/,\\s*/);
        }

        \$(document).ready(function () {
            let cacheQuery = {};
            \$(\"#email,#email-cc,#email-bcc\").on(\"keydown\", function (event) {
                if (event.keyCode === \$.ui.keyCode.TAB && \$(this).autocomplete(\"instance\").menu.active) {
                    event.preventDefault();
                }
            }).autocomplete({
                minLength: 0,
                source: function (request, response) {
                    // Avoid re-query the same
                    let term = request.term;
                    if (term in cacheQuery) {
                        response(cacheQuery[term]);
                        return;
                    }

                    \$.getJSON(\"SendMail\", {
                        action: 'autocomplete',
                        source: 'contactos',
                        field: 'email',
                        title: 'email',
                        term: extractLast(request.term)
                    }, function (data) {
                        cacheQuery[term] = data;
                        response(data);
                    });
                },
                focus: function () {
                    // Prevent value inserted on focus
                    return false;
                },
                select: function (event, ui) {
                    let terms = split(this.value);
                    // Remove the current input
                    terms.pop();
                    // Add the selected item
                    terms.push(ui.item.value);
                    // Add placeholder to get the comma-and-space at the end
                    terms.push(\"\");
                    this.value = terms.join(\", \");
                    return false;
                }
            });
        });
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "SendMail.html.twig";
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
        return array (  321 => 155,  316 => 154,  312 => 153,  306 => 150,  301 => 149,  297 => 148,  282 => 136,  277 => 133,  270 => 129,  264 => 126,  261 => 125,  258 => 124,  256 => 123,  247 => 116,  238 => 113,  235 => 112,  230 => 111,  224 => 108,  219 => 106,  216 => 105,  214 => 104,  209 => 102,  201 => 97,  197 => 96,  192 => 94,  183 => 88,  177 => 85,  168 => 79,  162 => 76,  151 => 68,  147 => 67,  141 => 64,  137 => 63,  131 => 60,  126 => 59,  124 => 58,  119 => 56,  111 => 50,  100 => 48,  96 => 47,  90 => 44,  82 => 39,  74 => 34,  69 => 32,  64 => 29,  60 => 28,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "SendMail.html.twig", "/var/www/html/Dinamic/View/SendMail.html.twig");
    }
}
