<?php

/* sectionPrincipal.twig */
class __TwigTemplate_20ee85f4da0aeeb96b36e01554d58b600c23ead5fb013661c5e9f1af79e2754e extends Twig_Template
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
\t<div class=\"row main\">

\t\t\t<div class=\"migas-de-pan\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li>Inicio</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t<!-- end breadcrum -->
\t\t\t<!--  aside de busqueda -->
\t\t\t<div class=\" col-md-4\">
\t\t\t\t";
        // line 44
        echo "\t\t\t</div>
\t\t\t<!-- begin post -->
\t\t\t

\t\t\t<section class=\"posts col-md-8\">
\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["favor"]) {
            // line 50
            echo "\t\t\t\t<article class=\"post clearfix\">
\t             \t<div class=\"box\">
\t             \t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
            echo "favor/ver/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "id", array()), "html", null, true);
            echo "\" class=\"thumb pull-left\"><img class=\"img-thumbnail\" src = '";
            echo twig_escape_filter($this->env, ($context["pathimg"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "img", array()), "html", null, true);
            echo "'  /></a>
\t             \t<h2 class=\"post-title\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "titulo", array()), "html", null, true);
            echo "</h2>
\t             \t<p>Fecha limite: <span class=\"post-fecha\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "fec_lim", array()), "html", null, true);
            echo "</span>
\t             \tPublicado por: <span  class=\"post-autor\"><a href=\"#\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "nombre", array()), "html", null, true);
            echo "</a></span></p>
\t             \t<p class=\"post-contenido text-justify\">
\t                          ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "descripcion", array()), "html", null, true);
            echo "
\t             \t</p>
\t             \t</div>
\t             \t<div class=\"contenedor-botones\">
\t             \t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
            echo "favor/ver/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary \">Leer mas </a>
\t             \t\t";
            // line 62
            if (($this->getAttribute($context["favor"], "email", array()) == $this->getAttribute(($context["usuario"] ?? null), "email", array(), "array"))) {
                // line 63
                echo "\t             \t\t<a href=\"";
                echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
                echo "favor/verMisGauchadas/\" class=\"btn btn-success\">Ver mis favores</a> 
\t             \t\t ";
            }
            // line 65
            echo "\t             \t</div>
\t             \t

\t            </article>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t        </section>
\t</div>";
    }

    public function getTemplateName()
    {
        return "sectionPrincipal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 70,  90 => 65,  84 => 63,  82 => 62,  76 => 61,  69 => 57,  64 => 55,  60 => 54,  56 => 53,  47 => 52,  43 => 50,  39 => 49,  32 => 44,  19 => 1,);
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
\t<div class=\"row main\">

\t\t\t<div class=\"migas-de-pan\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li>Inicio</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t<!-- end breadcrum -->
\t\t\t<!--  aside de busqueda -->
\t\t\t<div class=\" col-md-4\">
\t\t\t\t{# <div class=\"display\">
\t\t\t\t\t<h2>Busqueda</h2>
\t\t\t    <form class=\"navbar-form navbar-left\" role=\"search\">
\t\t\t  \t\t<div class=\"form-group\">
\t\t\t    \t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t  \t\t</div>
\t\t\t  \t\t<button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t\t\t\t</form>

\t\t\t\t<h2>Filtrado por</h2>
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<a href=\"#\" class=\"list-group-item \">
\t\t\t\t\t<h4 class=\"list-group-item-heading\">Categoria</h4>
    \t\t\t\t<select class=\"form-control\"  id=\"Categoria\">
        \t\t\t{% for categoria in categorias %}
        \t\t\t<option>{{categoria['nombre']}}</option>
  \t\t\t\t\t{% endfor %}
  \t\t\t\t\t</select>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">Tiempo</h4>
\t\t\t\t\t\t<a href=\"#\"><p class=\"list-group-item-text\">largo</p></a>
\t\t\t\t\t\t<a href=\"#\"><p class=\"list-group-item-text\">medio</p></a>
\t\t\t\t\t\t<a href=\"#\"><p class=\"list-group-item-text\">corto</p></a>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">Ubicacion</h4>
\t\t\t\t\t\t<a href=\"#\"><p class=\"list-group-item-text\">la plata</p></a>
\t\t\t\t\t\t<a href=\"#\"><p class=\"list-group-item-text\">Villa elisa</p></a>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t</div> #}
\t\t\t</div>
\t\t\t<!-- begin post -->
\t\t\t

\t\t\t<section class=\"posts col-md-8\">
\t\t\t{% for favor in favores %}
\t\t\t\t<article class=\"post clearfix\">
\t             \t<div class=\"box\">
\t             \t\t<a href=\"{{ dirpath }}favor/ver/{{favor.id}}\" class=\"thumb pull-left\"><img class=\"img-thumbnail\" src = '{{pathimg}}{{ favor.img }}'  /></a>
\t             \t<h2 class=\"post-title\">{{favor.titulo}}</h2>
\t             \t<p>Fecha limite: <span class=\"post-fecha\">{{favor.fec_lim}}</span>
\t             \tPublicado por: <span  class=\"post-autor\"><a href=\"#\">{{ favor.nombre}}</a></span></p>
\t             \t<p class=\"post-contenido text-justify\">
\t                          {{favor.descripcion}}
\t             \t</p>
\t             \t</div>
\t             \t<div class=\"contenedor-botones\">
\t             \t\t<a href=\"{{ dirpath }}favor/ver/{{favor.id}}\" class=\"btn btn-primary \">Leer mas </a>
\t             \t\t{% if (favor.email == usuario['email']) %}
\t             \t\t<a href=\"{{ dirpath }}favor/verMisGauchadas/\" class=\"btn btn-success\">Ver mis favores</a> 
\t             \t\t {% endif %}
\t             \t</div>
\t             \t

\t            </article>
\t        {% endfor %}
\t        </section>
\t</div>", "sectionPrincipal.twig", "C:\\xampp\\htdocs\\Una-gauchada\\application\\views\\sectionPrincipal.twig");
    }
}
