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
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        Una Gauchada
    </title>
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!--  -->
    <script src=\"http://code.jquery.com/jquery.min.js\"></script>
    <link href=\"http://getbootstrap.com/dist/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"http://getbootstrap.com/dist/js/bootstrap.js\"></script>
    <script src=\"http://1000hz.github.io/bootstrap-validator/dist/validator.min.js\"></script>
    <!--  -->
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/styles/js/jqBootstrapValidation.js\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/styles/js/jsValidate.js\" type=\"text/javascript\" ></script>
    <!--  -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <!-- fin  -->
    <!-- validation script -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script> 
    <!-- fin -->
    <!-- jquey -->
    <script src=\"https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js\" type=\"text/javascript\"></script>
    <!-- fin jquery -->
    <!--  -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
        echo "assets/styles/css/layout.css\">


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
        return array (  56 => 30,  41 => 18,  37 => 17,  19 => 1,);
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
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        Una Gauchada
    </title>
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!--  -->
    <script src=\"http://code.jquery.com/jquery.min.js\"></script>
    <link href=\"http://getbootstrap.com/dist/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"http://getbootstrap.com/dist/js/bootstrap.js\"></script>
    <script src=\"http://1000hz.github.io/bootstrap-validator/dist/validator.min.js\"></script>
    <!--  -->
    <script src=\"{{ path }}assets/styles/js/jqBootstrapValidation.js\"></script>
    <script src=\"{{ path }}assets/styles/js/jsValidate.js\" type=\"text/javascript\" ></script>
    <!--  -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <!-- fin  -->
    <!-- validation script -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script> 
    <!-- fin -->
    <!-- jquey -->
    <script src=\"https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js\" type=\"text/javascript\"></script>
    <!-- fin jquery -->
    <!--  -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path }}assets/styles/css/layout.css\">


<script>document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')</script>", "head.twig", "C:\\xampp\\htdocs\\Una-gauchada\\application\\views\\head.twig");
    }
}
