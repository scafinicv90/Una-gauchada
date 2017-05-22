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
        echo "
<nav class=\"navbar navbar-default\" role=\"navigation\">
\t  \t<div class=\"container\">
\t\t    <div class=\"navbar-header\">
\t\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navegaciong24\" aria-expanded=\"false\">
\t\t        <span class=\"sr-only\">Desplegar / Ocultar menu</span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t      </button>
\t\t      <a class=\"navbar-brand\" href=\"#\">Una Gauchada</a>
\t\t\t</div>

\t\t    <!-- inicia menu -->
\t\t    <div class=\"collapse navbar-collapse\" id=\"navegaciong24\">
\t\t      <ul class=\"nav navbar-nav\">
\t\t        <li class=\"active\"><a href=\"#\">link <span class=\"sr-only\">(current)</span></a></li>
\t\t        <li><a href=\"#\">Link</a></li>
\t\t        <li class=\"dropdown\">
\t\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
\t\t          <ul class=\"dropdown-menu\">
\t\t            <li><a href=\"#\">Action</a></li>
\t\t            <li><a href=\"#\">Another action</a></li>
\t\t            <li><a href=\"#\">Something else here</a></li>
\t\t            <li role=\"separator\" class=\"divider\"></li>
\t\t            <li><a href=\"#\">Separated link</a></li>
\t\t            <li role=\"separator\" class=\"divider\"></li>
\t\t            <li><a href=\"#\">One more separated link</a></li>
\t\t          </ul>
\t\t        </li>
\t\t      </ul>

\t\t      <ul class=\"nav navbar-nav navbar-right\">
\t\t        <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
\t\t        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->
\t\t</div><!-- /.container -->
\t</nav>";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
<nav class=\"navbar navbar-default\" role=\"navigation\">
\t  \t<div class=\"container\">
\t\t    <div class=\"navbar-header\">
\t\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navegaciong24\" aria-expanded=\"false\">
\t\t        <span class=\"sr-only\">Desplegar / Ocultar menu</span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t      </button>
\t\t      <a class=\"navbar-brand\" href=\"#\">Una Gauchada</a>
\t\t\t</div>

\t\t    <!-- inicia menu -->
\t\t    <div class=\"collapse navbar-collapse\" id=\"navegaciong24\">
\t\t      <ul class=\"nav navbar-nav\">
\t\t        <li class=\"active\"><a href=\"#\">link <span class=\"sr-only\">(current)</span></a></li>
\t\t        <li><a href=\"#\">Link</a></li>
\t\t        <li class=\"dropdown\">
\t\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
\t\t          <ul class=\"dropdown-menu\">
\t\t            <li><a href=\"#\">Action</a></li>
\t\t            <li><a href=\"#\">Another action</a></li>
\t\t            <li><a href=\"#\">Something else here</a></li>
\t\t            <li role=\"separator\" class=\"divider\"></li>
\t\t            <li><a href=\"#\">Separated link</a></li>
\t\t            <li role=\"separator\" class=\"divider\"></li>
\t\t            <li><a href=\"#\">One more separated link</a></li>
\t\t          </ul>
\t\t        </li>
\t\t      </ul>

\t\t      <ul class=\"nav navbar-nav navbar-right\">
\t\t        <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
\t\t        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->
\t\t</div><!-- /.container -->
\t</nav>", "header.twig", "/home/cristian/Escritorio/catedra/application/views/header.twig");
    }
}
