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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t<div class=\"container menuLog\">
\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"display-3\">Una gauchada!</h1>
\t\t\t<p class=\"lead\">Tu sitio para pedir o realizar una gauchada. Si vos podes hacerlo, nosotros también.</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p class=\"lead\">

\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
        echo "registrar/register/\" role=\"button\">Registrate</a>
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
        return array (  41 => 14,  31 => 6,  28 => 5,  11 => 2,);
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


{% block content %}

\t<div class=\"container menuLog\">
\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"display-3\">Una gauchada!</h1>
\t\t\t<p class=\"lead\">Tu sitio para pedir o realizar una gauchada. Si vos podes hacerlo, nosotros también.</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p class=\"lead\">

\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"{{ dirpath }}registrar/register/\" role=\"button\">Registrate</a>
\t\t\t</p>
\t\t</div>
\t</div>
{% endblock %}", "index.twig", "C:\\xampp\\htdocs\\Una-gauchada\\application\\views\\index.twig");
    }
}
