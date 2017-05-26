<?php

/* header.twig */
class __TwigTemplate_845b4ac9dc8a88f5bf92260bfbaefd64b565f470488421a8535a8db1afdcb363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
\t  \t<div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#myNavbar\" aria-expanded=\"false\">
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <div class=\"thumb pull-left\">
\t\t\t\t<a href=\"?home/\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "assets/images/logo.png\" class=\"pull-left\" alt=\"logo\"></a>
\t\t\t</div>
\t\t\t<a href=\"?home/\" class=\"navbar-brand pull-right\">Una gauchada</a>
\t    </div>
\t    ";
        // line 15
        echo "\t     <div class=\"collapse navbar-collapse \" id=\"myNavbar\" >
\t      \t<ul class=\"nav navbar-nav navbar-right dropdown\">
\t      \t\t";
        // line 17
        if (((isset($context["tipo"]) ? $context["tipo"] : null) == 1)) {
            // line 18
            echo "\t\t\t\t";
            // line 19
            echo "\t\t\t\t<li><button class=\"btn btn-link bdropdown-toggle btn-header\" type=\"button\" id=\"\" data-toggle=\"\"><a href=\"#\">Estadisticas</a></button></li>
\t\t\t\t<li><button class=\"btn btn-link bdropdown-toggle btn-header\" type=\"button\" id=\"\" data-toggle=\"\"><a href=\"#\">Another case</a></button></li>
\t\t\t\t<li><button class=\"btn btn-link bdropdown-toggle btn-header\" type=\"button\" id=\"\" data-toggle=\"\"><a href=\"#\">Another case2</a></button></li>

\t      \t\t";
        }
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 19,  43 => 18,  41 => 17,  37 => 15,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\">
\t  \t<div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#myNavbar\" aria-expanded=\"false\">
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <div class=\"thumb pull-left\">
\t\t\t\t<a href=\"?home/\"><img src=\"{{path}}assets/images/logo.png\" class=\"pull-left\" alt=\"logo\"></a>
\t\t\t</div>
\t\t\t<a href=\"?home/\" class=\"navbar-brand pull-right\">Una gauchada</a>
\t    </div>
\t    {# logo end #}
\t     <div class=\"collapse navbar-collapse \" id=\"myNavbar\" >
\t      \t<ul class=\"nav navbar-nav navbar-right dropdown\">
\t      \t\t{% if tipo == 1  %}
\t\t\t\t{#  opciones del administrador #}
\t\t\t\t<li><button class=\"btn btn-link bdropdown-toggle btn-header\" type=\"button\" id=\"\" data-toggle=\"\"><a href=\"#\">Estadisticas</a></button></li>
\t\t\t\t<li><button class=\"btn btn-link bdropdown-toggle btn-header\" type=\"button\" id=\"\" data-toggle=\"\"><a href=\"#\">Another case</a></button></li>
\t\t\t\t<li><button class=\"btn btn-link bdropdown-toggle btn-header\" type=\"button\" id=\"\" data-toggle=\"\"><a href=\"#\">Another case2</a></button></li>

\t      \t\t{% endif %}", "header.twig", "/var/www/html/Una-gauchada/application/views/header.twig");
    }
}
