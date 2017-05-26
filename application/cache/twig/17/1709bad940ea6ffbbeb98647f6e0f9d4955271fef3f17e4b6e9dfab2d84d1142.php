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
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "assets/styles/css/login.css\">

";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "\t    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t      \t<ul class=\"nav navbar-nav navbar-right \">
\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Registrate</a></li>
\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Entrar</a></li>

\t\t\t\t";
        // line 12
        if ( !(null === (isset($context["info"]) ? $context["info"] : null))) {
            // line 13
            echo "\t\t\t\t<div class=\"alert alert-success\" role=\"alert\">  Sesion cerrada correctametne</div>
\t\t\t\t";
        }
        // line 15
        echo "
\t\t\t</ul>
\t    </div>
\t  \t</div>
\t</nav>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<h3>Una gauchada te ayuda a encontrar a la persona indicada para esos trabajos que no podes realizar.</h3>
\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "assets/images/logo.png\" alt=\"\">
\t</div>
\t<div class=\"col-md-6 loginBox\">
\t\t\t<h4>Iniciar sesion</h4>
\t <div class=\"loginForm\">
\t\t\t";
        // line 32
        if (array_key_exists("noExiste", $context)) {
            // line 33
            echo "\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, (isset($context["noExiste"]) ? $context["noExiste"] : null), "html", null, true);
            echo "</div>

\t\t\t\t<form  data-toggle=\"validator\" role=\"form\" class=\"form-horizontal\" method=\"POST\" id=\"login\" action= '?/login/check' >
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t\t\t<div class=\" col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" pattern=\"[a-z0-9A-Z]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" data-pattern-error=\"coloque un email valido\" placeholder=\"Email\" data-error=\"completa este campo\" required >
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t

\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputPassword\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"password\" pattern=\"[a-z0-9A-Z]{6,12}\$\" data-pattern-error=\"minimo de 6 y maximo 12\" class=\"form-control\" id=\"inputPassword\" name=\"password\" placeholder=\"Password\" required>
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<button type=\"submit\"class=\"btn btn-default\">Entrar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Recordar
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t";
        } elseif (        // line 73
array_key_exists("passwordIncorrecta", $context)) {
            // line 74
            echo "\t\t\t\t<form  data-toggle=\"validator\" role=\"form\" class=\"form-horizontal\" method=\"POST\" id=\"login\" action= '?/login/check' >
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t\t\t<div class=\" col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" pattern=\"[a-z0-9A-Z]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" data-pattern-error=\"coloque un email valido\" placeholder=\"Email\" data-error=\"completa este campo\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "\" required >
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t
\t\t\t\t\t";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["passwordIncorrecta"]) ? $context["passwordIncorrecta"] : null), "html", null, true);
            echo "
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputPassword\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"password\" pattern=\"[a-z0-9A-Z]{6,12}\$\" data-pattern-error=\"minimo de 6 y maximo 12\" class=\"form-control\" id=\"inputPassword\" name=\"password\" placeholder=\"Password\" required>
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<button type=\"submit\"class=\"btn btn-default\">Entrar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Recordar
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</form>

\t\t\t";
        } elseif ((        // line 112
(isset($context["limpio"]) ? $context["limpio"] : null) == true)) {
            // line 113
            echo "\t\t\t\t<form  data-toggle=\"validator\" role=\"form\" class=\"form-horizontal\" method=\"POST\" id=\"login\" action= '?/login/check' >
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t\t\t<div class=\" col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" pattern=\"[a-z0-9A-Z]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" data-pattern-error=\"coloque un email valido\" placeholder=\"Email\" data-error=\"completa este campo\" required >
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t

\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputPassword\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"password\" pattern=\"[a-z0-9A-Z]{6,12}\$\" data-pattern-error=\"minimo de 6 y maximo 12\" class=\"form-control\" id=\"inputPassword\" name=\"password\" placeholder=\"Password\" required>
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<button type=\"submit\"class=\"btn btn-default\">Entrar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Recordar
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</form>
\t\t\t\t";
        } else {
            // line 151
            echo "\t\t\t\t\t<form  data-toggle=\"validator\" role=\"form\" class=\"form-horizontal\" method=\"POST\" id=\"login\" action= '?/login/check' >

\t\t\t\t\t";
            // line 153
            echo twig_escape_filter($this->env, (isset($context["emailMensaje"]) ? $context["emailMensaje"] : null), "html", null, true);
            echo "
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t\t\t<div class=\" col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" pattern=\"[a-z0-9A-Z]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" data-pattern-error=\"coloque un email valido\" placeholder=\"Email\" data-error=\"completa este campo\" value=\"";
            // line 157
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "\" required >
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t
\t\t\t\t\t <p>";
            // line 163
            echo twig_escape_filter($this->env, (isset($context["passwordMensaje"]) ? $context["passwordMensaje"] : null), "html", null, true);
            echo "</p>
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputPassword\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"password\" pattern=\"[a-z0-9A-Z]{6,12}\$\" data-pattern-error=\"minimo de 6 y maximo 12\" class=\"form-control\" id=\"inputPassword\" name=\"password\" placeholder=\"Password\" value=\"";
            // line 167
            echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
            echo "\" required>
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<button type=\"submit\"class=\"btn btn-default\">Entrar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Recordar
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</form>
\t\t\t\t";
        }
        // line 191
        echo "\t\t\t\t<p> No tenes cuenta ? <a href=\"#\">Registrate</a> es gratis.</p>

\t</div>
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
        return array (  273 => 191,  246 => 167,  239 => 163,  230 => 157,  223 => 153,  219 => 151,  179 => 113,  177 => 112,  146 => 84,  137 => 78,  131 => 74,  129 => 73,  85 => 33,  83 => 32,  75 => 27,  69 => 23,  66 => 22,  57 => 15,  53 => 13,  51 => 12,  44 => 7,  41 => 6,  33 => 3,  30 => 2,  11 => 1,);
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
{% block head %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path }}assets/styles/css/login.css\">

{% endblock %}
{% block header %}
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
\t\t<h3>Una gauchada te ayuda a encontrar a la persona indicada para esos trabajos que no podes realizar.</h3>
\t<img src=\"{{ path }}assets/images/logo.png\" alt=\"\">
\t</div>
\t<div class=\"col-md-6 loginBox\">
\t\t\t<h4>Iniciar sesion</h4>
\t <div class=\"loginForm\">
\t\t\t{% if  noExiste  is defined %}
\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\"> {{ noExiste }}</div>

\t\t\t\t<form  data-toggle=\"validator\" role=\"form\" class=\"form-horizontal\" method=\"POST\" id=\"login\" action= '?/login/check' >
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t\t\t<div class=\" col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" pattern=\"[a-z0-9A-Z]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" data-pattern-error=\"coloque un email valido\" placeholder=\"Email\" data-error=\"completa este campo\" required >
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t

\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputPassword\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"password\" pattern=\"[a-z0-9A-Z]{6,12}\$\" data-pattern-error=\"minimo de 6 y maximo 12\" class=\"form-control\" id=\"inputPassword\" name=\"password\" placeholder=\"Password\" required>
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<button type=\"submit\"class=\"btn btn-default\">Entrar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Recordar
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t{% elseif passwordIncorrecta is defined %}
\t\t\t\t<form  data-toggle=\"validator\" role=\"form\" class=\"form-horizontal\" method=\"POST\" id=\"login\" action= '?/login/check' >
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t\t\t<div class=\" col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" pattern=\"[a-z0-9A-Z]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" data-pattern-error=\"coloque un email valido\" placeholder=\"Email\" data-error=\"completa este campo\" value=\"{{ email }}\" required >
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t
\t\t\t\t\t{{ passwordIncorrecta }}
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputPassword\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"password\" pattern=\"[a-z0-9A-Z]{6,12}\$\" data-pattern-error=\"minimo de 6 y maximo 12\" class=\"form-control\" id=\"inputPassword\" name=\"password\" placeholder=\"Password\" required>
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<button type=\"submit\"class=\"btn btn-default\">Entrar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Recordar
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</form>

\t\t\t{% elseif limpio == true %}
\t\t\t\t<form  data-toggle=\"validator\" role=\"form\" class=\"form-horizontal\" method=\"POST\" id=\"login\" action= '?/login/check' >
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t\t\t<div class=\" col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" pattern=\"[a-z0-9A-Z]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" data-pattern-error=\"coloque un email valido\" placeholder=\"Email\" data-error=\"completa este campo\" required >
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t

\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputPassword\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"password\" pattern=\"[a-z0-9A-Z]{6,12}\$\" data-pattern-error=\"minimo de 6 y maximo 12\" class=\"form-control\" id=\"inputPassword\" name=\"password\" placeholder=\"Password\" required>
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<button type=\"submit\"class=\"btn btn-default\">Entrar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Recordar
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</form>
\t\t\t\t{% else %}
\t\t\t\t\t<form  data-toggle=\"validator\" role=\"form\" class=\"form-horizontal\" method=\"POST\" id=\"login\" action= '?/login/check' >

\t\t\t\t\t{{ emailMensaje }}
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t\t\t<div class=\" col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" pattern=\"[a-z0-9A-Z]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" data-pattern-error=\"coloque un email valido\" placeholder=\"Email\" data-error=\"completa este campo\" value=\"{{ email }}\" required >
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t
\t\t\t\t\t <p>{{ passwordMensaje }}</p>
\t\t\t\t\t<div class=\"form-group has-feedback\">
\t\t\t\t\t\t<label for=\"inputPassword\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4 input-group\">
\t\t\t\t\t\t\t<input type=\"password\" pattern=\"[a-z0-9A-Z]{6,12}\$\" data-pattern-error=\"minimo de 6 y maximo 12\" class=\"form-control\" id=\"inputPassword\" name=\"password\" placeholder=\"Password\" value=\"{{ password }}\" required>
\t\t\t\t\t\t<span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<div class=\"help-block with-errors\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<button type=\"submit\"class=\"btn btn-default\">Entrar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Recordar
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</form>
\t\t\t\t{% endif %}
\t\t\t\t<p> No tenes cuenta ? <a href=\"#\">Registrate</a> es gratis.</p>

\t</div>
\t</div>
</div>

 {% endblock %}", "login.twig", "/var/www/html/Una-gauchada/application/views/login.twig");
    }
}
