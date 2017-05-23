<?php

/* login.twig */
class __TwigTemplate_158adda9b3aac3eea24db65cfbed1b80c2be43f0cd91a5ecacdcb67365bc659d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "login.twig", 1);
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

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "
\t<nav class=\"navbar navbar-inverse\">
\t  \t<div class=\"container\">
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <div class=\"thumb pull-left\">
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/assets/images/logo.png\" class=\"pull-left\" alt=\"logo\"></a>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"navbar-brand pull-right\">Una gauchada</a>
\t    </div>
\t    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t      \t<ul class=\"nav navbar-nav navbar-right \">
\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Registrate</a></li>
\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Entrar</a></li>

\t\t\t\t";
        // line 22
        if ( !(null === (isset($context["info"]) ? $context["info"] : null))) {
            // line 23
            echo "\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">  Sesion cerrada correctametne</div>
\t\t\t\t";
        }
        // line 25
        echo "
\t\t\t</ul>
\t    </div>
\t  \t</div>
\t</nav>
";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "
<div class=\"row\">
\t<div class=\"col-md-6\">
\t</div>
\t<div class=\"col-md-6\">
\t\t\t";
        // line 38
        if (array_key_exists("datos_error", $context)) {
            // line 39
            echo "\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, (isset($context["datos_error"]) ? $context["datos_error"] : null), "html", null, true);
            echo "</div>

\t\t\t";
        }
        // line 42
        echo "\t\t\t\t<form class=\"form-horizontal\" method=\"POST\" action=\"?/login/check/\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t<div class=\"col-sm-10 col-md-4\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputEmail3\" name=\"email\" placeholder=\"Email\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t<div class=\"col-sm-10 col-md-4\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"inputPassword3\" name=\"password\" placeholder=\"Password\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t<button type=\"submit\"class=\"btn btn-default\">Entrar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\"> Recordar
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</form>
\t</div>
</div>

 ";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  83 => 39,  81 => 38,  74 => 33,  71 => 32,  62 => 25,  58 => 23,  56 => 22,  44 => 13,  32 => 3,  29 => 2,  11 => 1,);
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

<div class=\"row\">
\t<div class=\"col-md-6\">
\t</div>
\t<div class=\"col-md-6\">
\t\t\t{% if datos_error is defined %}
\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\"> {{ datos_error}}</div>

\t\t\t{% endif %}
\t\t\t\t<form class=\"form-horizontal\" method=\"POST\" action=\"?/login/check/\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t<div class=\"col-sm-10 col-md-4\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inputEmail3\" name=\"email\" placeholder=\"Email\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t<div class=\"col-sm-10 col-md-4\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"inputPassword3\" name=\"password\" placeholder=\"Password\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t<button type=\"submit\"class=\"btn btn-default\">Entrar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\"> Recordar
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</form>
\t</div>
</div>

 {% endblock %}", "login.twig", "/var/www/html/Una-gauchada/application/views/login.twig");
    }
}
