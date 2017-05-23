<?php

/* index.twig */
class __TwigTemplate_3cf4da0e836ec3afe4efb3c3b4203f10aeada0486cba9ccaed9bac70ec1b7194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 2);
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

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "\t<nav class=\"navbar navbar-inverse\">
\t  \t<div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <div class=\"thumb pull-left\">
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "/assets/images/logo.png\" class=\"pull-left\" alt=\"logo\"></a>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"navbar-brand pull-right\">Una gauchada</a>
\t    </div>
\t    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t      \t<ul class=\"nav navbar-nav navbar-right \">
\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Registrate</a></li>
\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Entrar</a></li>

\t\t\t\t";
        // line 25
        if ( !(null === ($context["info"] ?? null))) {
            // line 26
            echo "\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">  Sesion cerrada correctametne</div>
\t\t\t\t";
        }
        // line 28
        echo "
\t\t\t</ul>
\t    </div>
\t  \t</div>
\t</nav>
";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "
\t<div class=\"container menuLog\">
\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"display-3\">Una gauchada!</h1>
\t\t\t<p class=\"lead\">tu sitio para pedir o realizar una gauchada. si vos podes hacerlo nosotros tambien</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Registrate</a>
\t\t\t</p>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 37,  70 => 36,  61 => 28,  57 => 26,  55 => 25,  43 => 16,  32 => 7,  29 => 6,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'layout.twig' %}



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
\t\t\t\t<a href=\"#\"><img src=\"{{path}}/assets/images/logo.png\" class=\"pull-left\" alt=\"logo\"></a>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"navbar-brand pull-right\">Una gauchada</a>
\t    </div>
\t    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t      \t<ul class=\"nav navbar-nav navbar-right \">
\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Registrate</a></li>
\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Entrar</a></li>

\t\t\t\t{% if info is not null  %}
\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">  Sesion cerrada correctametne</div>
\t\t\t\t{% endif %}

\t\t\t</ul>
\t    </div>
\t  \t</div>
\t</nav>
{% endblock %}


{% block content %}

\t<div class=\"container menuLog\">
\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"display-3\">Una gauchada!</h1>
\t\t\t<p class=\"lead\">tu sitio para pedir o realizar una gauchada. si vos podes hacerlo nosotros tambien</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Registrate</a>
\t\t\t</p>
\t\t</div>
\t</div>
{% endblock %}", "index.twig", "C:\\xampp\\htdocs\\Una-gauchada\\application\\views\\index.twig");
    }
}
