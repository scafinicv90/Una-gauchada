<?php

/* footer.twig */
class __TwigTemplate_8e9a73cf8acd39e93ca70fef67b1e7846c48e572d01f71cf8f615bc1f82e3977 extends Twig_Template
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
\t\t<li><a href=\"\" title=\"\">Inicio</a></li>
\t\t<li><a href=\"\" title=\"\">ventas</a></li>
\t\t<li><a href=\"\" title=\"contacto\">contacto</a></li>
\t\t</ul>
  \t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "footer.twig";
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
        return new Twig_Source("<div class=\"row footer\">
\t<div class=\"col-xs-6\">
\t\t<p>G24</p>
\t</div>
\t<div class=\"col-xs-6\"><ul class=\"list-inline text-right\">
\t\t<li><a href=\"\" title=\"\">Inicio</a></li>
\t\t<li><a href=\"\" title=\"\">ventas</a></li>
\t\t<li><a href=\"\" title=\"contacto\">contacto</a></li>
\t\t</ul>
  \t</div>

</div>
", "footer.twig", "/home/cristian/Escritorio/catedra/application/views/footer.twig");
    }
}
