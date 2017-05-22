<?php

/* indexLog.twig */
class __TwigTemplate_d68d84c8acdf55cf51df83292cf38b756719b837dc7c8c033dc3d70815cfa3a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "indexLog.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<nav class=\"navbar navbar-inverse\">
\t  \t<div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <div class=\"thumb pull-left\">
\t\t\t\t<a href=\"#\"><img src=\"http://localhost/catedra/application/assets/images/logo.png\" class=\"pull-left \" alt=\"logo\"></a>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"navbar-brand pull-right\">Una gauchada</a>
\t    </div>
\t    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t      \t<ul class=\"nav navbar-nav navbar-right \">
\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Usuario</a></li>
\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Salir</a></li>
\t\t\t</ul>
\t    </div>
\t  \t</div>
\t</nav>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "\t";
        $this->loadTemplate("sectionPrincipal.twig", "indexLog.twig", 28)->display($context);
        // line 29
        echo "
";
    }

    public function getTemplateName()
    {
        return "indexLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 29,  60 => 28,  57 => 27,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% block header %}
\t<nav class=\"navbar navbar-inverse\">
\t  \t<div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <div class=\"thumb pull-left\">
\t\t\t\t<a href=\"#\"><img src=\"http://localhost/catedra/application/assets/images/logo.png\" class=\"pull-left \" alt=\"logo\"></a>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"navbar-brand pull-right\">Una gauchada</a>
\t    </div>
\t    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t      \t<ul class=\"nav navbar-nav navbar-right \">
\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Usuario</a></li>
\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Salir</a></li>
\t\t\t</ul>
\t    </div>
\t  \t</div>
\t</nav>
{% endblock %}

{% block content %}
\t{% include 'sectionPrincipal.twig' %}

{% endblock %}", "indexLog.twig", "/var/www/html/Una-gauchada/application/views/indexLog.twig");
    }
}
