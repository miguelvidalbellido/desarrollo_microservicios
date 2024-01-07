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

/* Email/NewTemplate.html.twig */
class __TwigTemplate_a2214c01614dd6950d3345d30c775999306b09d65beb3f5bdaf0ea9ebb4c877c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style type=\"text/css\">
            ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 82
        echo "        </style>
        ";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 85
        echo "    </head>
    <body>
        <div id=\"body\">
            ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "        </div>
    </body>
</html>";
    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                #body {
                    background-color: #f6f9fc;
                    color: black;
                }
                .container {
                    background-color: #FFFFFF;
                    border-radius: 5px;
                    color: black;
                    font-size: 1em;
                    padding: 10px;
                }
                .w-100 {
                    width: 100%;
                }
                .mb-15 {
                    margin-bottom: 15px;
                }
                .block {
                    border: 3px solid #e3e9ef;
                    border-radius: 5px;
                    color: black;
                    font-size: 1em;
                    padding: 10px;
                }
                .company {
                    color: #3D67AC;
                    font-size: 2em;
                    font-weight: bold;
                }
                .footer {
                    font-size: 10px;
                    color: black;
                    padding: 10px;
                }
                .btn {
                    border-radius: 5px;
                    background-color: #2E7EFA;
                    color: #FFFFFF;
                }
                .btn a {
                    padding: 10px;
                    font-family: Helvetica, Arial, sans-serif;
                    font-size: 14px;
                    border-radius: 5px;
                    background-color: #2E7EFA;
                    color: #FFFFFF;
                    text-decoration: none;
                    font-weight: bold;
                    display: inline-block;
                }
                .company a {
                    color: #3D67AC;
                    text-decoration: none;
                }
                .text-center {
                    text-align: center;
                }
                .table {
                    border: 1px solid #e3e9ef;
                    border-collapse: collapse;
                }
                .table th {
                    font-weight: bold;
                    background-color: #e3e9ef;
                }
                .table th, .table td {
                    text-align: left;
                    padding: 5px;
                }
                .table td {
                    border-top: 1px solid #e3e9ef;
                }
            ";
    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "        ";
    }

    // line 88
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                <table style=\"width:100%; background-color:#f6f9fc; color:black\" >
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td style=\"padding:10px\">
                            <h3 class=\"company\" style=\"text-align:center; color:#3D67AC; font-size:2em; font-weight:bold\">
                                ";
        // line 94
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "web", [], "any", false, false, false, 94))) {
            // line 95
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "nombrecorto", [], "any", false, false, false, 95), "html", null, true);
            echo "
                                ";
        } else {
            // line 97
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "web", [], "any", false, false, false, 97), "html", null, true);
            echo "\" style=\"text-decoration:none\">
                                        ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "nombrecorto", [], "any", false, false, false, 98), "html", null, true);
            echo "
                                    </a>
                                ";
        }
        // line 101
        echo "                            </h3>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td class=\"container\" style=\"background-color: #FFFFFF; border-radius: 5px; color: black; font-size: 1em; padding:10px\">
                            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mainBlocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 109
            echo "                                ";
            echo twig_get_attribute($this->env, $this->source, $context["block"], "render", [], "method", false, false, false, 109);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td class=\"footer\" style=\"font-size:10px; color:black; padding:10px\">
                            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["footerBlocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 118
            echo "                                ";
            echo twig_get_attribute($this->env, $this->source, $context["block"], "render", [], "method", false, false, false, 118);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                        </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                </table>
            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Email/NewTemplate.html.twig";
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
        return array (  233 => 120,  224 => 118,  220 => 117,  212 => 111,  203 => 109,  199 => 108,  190 => 101,  184 => 98,  179 => 97,  173 => 95,  171 => 94,  164 => 89,  160 => 88,  156 => 84,  152 => 83,  76 => 9,  72 => 8,  66 => 125,  64 => 88,  59 => 85,  57 => 83,  54 => 82,  52 => 8,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Email/NewTemplate.html.twig", "/var/www/html/Dinamic/View/Email/NewTemplate.html.twig");
    }
}
