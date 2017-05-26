<?php

/* layout.twig */
class __TwigTemplate_a2edd508a504e6e8fedb5db3a7a189c5b390783bdaae96faaf68e596f9e5b6ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>

";
        // line 6
        $this->loadTemplate("head.twig", "layout.twig", 6)->display($context);
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "
</head>

<body>
    <header >
        ";
        // line 14
        $this->loadTemplate("loginModal.twig", "layout.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->loadTemplate("header.twig", "layout.twig", 15)->display($context);
        // line 16
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "    </header>
    <section class=\"main container\">
        ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "    </section>

    <footer >
    <div class=\"container-fluid footer-cont\">
        <div class=\"container\">
            ";
        // line 28
        $this->loadTemplate("footer.twig", "layout.twig", 28)->display($context);
        // line 29
        echo "        </div>
    </div>
    </footer>

</body>

</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "        ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  86 => 20,  82 => 17,  79 => 16,  74 => 7,  63 => 29,  61 => 28,  54 => 23,  52 => 20,  48 => 18,  45 => 16,  42 => 15,  40 => 14,  33 => 9,  31 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">

<head>

{% include 'head.twig' %}
{% block head %}
{% endblock %}

</head>

<body>
    <header >
        {% include 'loginModal.twig' %}
        {% include 'header.twig' %}
        {% block header %}
        {% endblock %}
    </header>
    <section class=\"main container\">
        {% block content %}

        {% endblock %}
    </section>

    <footer >
    <div class=\"container-fluid footer-cont\">
        <div class=\"container\">
            {% include 'footer.twig' %}
        </div>
    </div>
    </footer>

</body>

</html>
", "layout.twig", "/var/www/html/Una-gauchada/application/views/layout.twig");
    }
}
