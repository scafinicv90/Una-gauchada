<?php

/* layout.twig */
class __TwigTemplate_a5059196f0289867ea8450e63a7fbb5fda5333dfc14d7e1a06e371e4e5a14baf extends Twig_Template
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
        $this->loadTemplate("loginModel.twig", "layout.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "    </header>
    <section class=\"main container\">
        ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "    </section>

    <footer >
    <div class=\"container-fluid footer-cont\">
        <div class=\"container\">
            ";
        // line 27
        $this->loadTemplate("footer.twig", "layout.twig", 27)->display($context);
        // line 28
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

    // line 15
    public function block_header($context, array $blocks = array())
    {
        // line 16
        echo "        ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
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
        return array (  86 => 20,  83 => 19,  79 => 16,  76 => 15,  71 => 7,  60 => 28,  58 => 27,  51 => 22,  49 => 19,  45 => 17,  42 => 15,  40 => 14,  33 => 9,  31 => 7,  29 => 6,  22 => 1,);
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
        {% include 'loginModel.twig' %}
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
", "layout.twig", "C:\\xampp\\htdocs\\Una-gauchada\\application\\views\\layout.twig");
    }
}
