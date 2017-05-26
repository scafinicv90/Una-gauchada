<?php

/* indexLog.twig */
class __TwigTemplate_d68d84c8acdf55cf51df83292cf38b756719b837dc7c8c033dc3d70815cfa3a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "indexLog.twig", 1);
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
\t\t\t\t<li>
\t\t\t\t\t<button class=\"btn btn-link bdropdown-toggle btn-header\" type=\"button\" id=\"menut\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\"></span> ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : null), "html", null, true);
        echo " <span class=\"caret\"></span></button>
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menut\">
\t\t\t\t      <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Ver perfil</a></li>
\t\t\t\t      <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Crear gauchada</a></li>
\t\t\t\t      <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Comprar creditos</a></li>
\t\t\t\t      <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Configuracion</a></li>
\t\t\t\t      <li role=\"presentation\" class=\"divider\"></li>
\t\t\t\t      <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Sobre nosotros</a></li>
\t\t\t\t    </ul>
\t\t\t\t</li>
\t\t\t\t<li><button class=\"btn btn-link bdropdown-toggle btn-header\" type=\"button\" id=\"\" data-toggle=\"\"><a href=\"?/login/logout\">Salir</a></button></li>
\t\t\t</ul>
\t    </div>

\t  </div>
\t</nav>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t";
        $this->loadTemplate("sectionPrincipal.twig", "indexLog.twig", 25)->display($context);
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "indexLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 26,  60 => 25,  57 => 24,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
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

\t\t\t\t<li>
\t\t\t\t\t<button class=\"btn btn-link bdropdown-toggle btn-header\" type=\"button\" id=\"menut\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-user\"></span> {{ nombre }} <span class=\"caret\"></span></button>
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menut\">
\t\t\t\t      <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Ver perfil</a></li>
\t\t\t\t      <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Crear gauchada</a></li>
\t\t\t\t      <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Comprar creditos</a></li>
\t\t\t\t      <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Configuracion</a></li>
\t\t\t\t      <li role=\"presentation\" class=\"divider\"></li>
\t\t\t\t      <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Sobre nosotros</a></li>
\t\t\t\t    </ul>
\t\t\t\t</li>
\t\t\t\t<li><button class=\"btn btn-link bdropdown-toggle btn-header\" type=\"button\" id=\"\" data-toggle=\"\"><a href=\"?/login/logout\">Salir</a></button></li>
\t\t\t</ul>
\t    </div>

\t  </div>
\t</nav>
{% endblock %}

{% block content %}
\t{% include 'sectionPrincipal.twig' %}

{% endblock %}", "indexLog.twig", "/var/www/html/Una-gauchada/application/views/indexLog.twig");
    }
}
