<?php

/* footer.twig */
class __TwigTemplate_699bf86d9c333d940c5d5c78a8c7f5412bbbaa8790c89d234ee640a8b89eb70f extends Twig_Template
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
        echo "<div class=\"row footer\">
\t<div class=\"col-xs-6\">
\t\t<p>G24</p>
\t</div>
\t<div class=\"col-xs-6\"><ul class=\"list-inline text-right\">
\t\t<li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
        echo "home/\" title=\"\">Inicio</a></li>
\t\t<li><a href=\"\" title=\"\">Ventas</a></li>
\t\t<li><a href=\"\" title=\"contacto\">Contacto</a></li>
\t\t</ul>
  \t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row footer\">
\t<div class=\"col-xs-6\">
\t\t<p>G24</p>
\t</div>
\t<div class=\"col-xs-6\"><ul class=\"list-inline text-right\">
\t\t<li><a href=\"{{ dirpath }}home/\" title=\"\">Inicio</a></li>
\t\t<li><a href=\"\" title=\"\">Ventas</a></li>
\t\t<li><a href=\"\" title=\"contacto\">Contacto</a></li>
\t\t</ul>
  \t</div>

</div>
", "footer.twig", "C:\\xampp\\htdocs\\Una-gauchada\\application\\views\\footer.twig");
    }
}
