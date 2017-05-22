<?php

/* loginModel.twig */
class __TwigTemplate_bb94ee089befcfa68a3478130a231914e38d4e240fa2de537af4d067b7a5e685 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Iniciar sesión en Una gauchada</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<form class=\"form-horizontal\" method=\"post\" action=\"index.php/home/login\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4\">
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
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

\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "loginModel.twig";
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
        return new Twig_Source("<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Iniciar sesión en Una gauchada</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<form class=\"form-horizontal\" method=\"post\" action=\"index.php/home/login\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
\t\t\t\t\t\t<div class=\"col-sm-10 col-md-4\">
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
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

\t\t\t</div>
\t\t</div>
\t</div>
</div>", "loginModel.twig", "/home/cristian/Escritorio/catedra/application/views/loginModel.twig");
    }
}
