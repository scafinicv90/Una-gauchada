<?php

/* head.twig */
class __TwigTemplate_bbebb055796f5b6d94e484a3b3056dba8fa3cb4ade3ca98b842401307574a1e4 extends Twig_Template
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
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        Una Gauchada
    </title>
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\" ></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" ></script>
    <!--  -->

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.9.0/validator.min.js\" ></script>


    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
    <!--  -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/styles/css/layout.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/styles/css/btnHeader.css\">
    <script defer type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/styles/js/date.js\"></script>


<script>document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')</script>";
    }

    public function getTemplateName()
    {
        return "head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 21,  43 => 20,  39 => 19,  19 => 1,);
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
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        Una Gauchada
    </title>
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\" ></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" ></script>
    <!--  -->

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.9.0/validator.min.js\" ></script>


    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
    <!--  -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path }}assets/styles/css/layout.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path }}assets/styles/css/btnHeader.css\">
    <script defer type=\"text/javascript\" src=\"{{ path }}assets/styles/js/date.js\"></script>


<script>document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')</script>", "head.twig", "C:\\xampp\\htdocs\\Una-gauchada\\application\\views\\head.twig");
    }
}
