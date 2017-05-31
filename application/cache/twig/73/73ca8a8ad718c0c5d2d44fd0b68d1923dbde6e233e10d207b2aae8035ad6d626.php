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
\t\t\t\t\t<li><a href=\"#\">inicio</a></li>
\t\t\t\t\t<li><a href=\"#\">categoria</a></li>
\t\t\t\t\t<li><a href=\"?/crearFavor/crear\">favor</a></li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t<!-- end breadcrum -->
\t\t\t<!--  aside de busqueda -->
\t\t\t<div class=\"busqueda col-md-3\">
\t\t\t\t<h2>Busqueda</h2>
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
        \t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoria"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["datosCat"]) {
            // line 28
            echo "        \t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["datosCat"]);
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 29
                echo "        \t\t\t<option hidden=\"true\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "id", array(), "array"), "html", null, true);
                echo "</option>
        \t\t\t<option>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array(), "array"), "html", null, true);
                echo "</option>
  \t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "  \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datosCat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  \t\t\t\t\t</select>
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
\t\t\t</div>
\t\t\t<!-- begin post -->
\t\t\t<section class=\"posts col-md-9\">
\t\t\t
\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favor"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["datosFavor"]) {
            // line 52
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["datosFavor"]);
            foreach ($context['_seq'] as $context["_key"] => $context["favor"]) {
                // line 53
                echo "        
  
\t\t\t\t<article class=\"post clearfix\">
\t             \t<a href=\"#\" class=\"thumb pull-left\"><img class=\"img-thumbnail\" src=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "assets/images/logo.png\" alt=\"favor\"></a>
\t             \t<h2 class=\"post-title\"><a href=\"#\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "titulo", array(), "array"), "html", null, true);
                echo "</a></h2>
\t             \t<p>Fecha limite: <span class=\"post-fecha\">";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "fec_lim", array(), "array"), "html", null, true);
                echo "</span> 
\t             \tPublicado por: <span  class=\"post-autor\"><a href=\"#\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "id_usuario", array(), "array"), "html", null, true);
                echo "</a></span></p>
\t             \t<p class=\"post-contenido text-justify\">
\t                          ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "descripcion", array(), "array"), "html", null, true);
                echo "
\t             \t</p> 
\t             \t<div class=\"contenedor-botones\">
\t             \t\t<a href=\"#\" class=\"btn btn-primary \">Leer mas </a>
\t             \t\t<a href=\"#\" class=\"btn btn-success\">comentarios <span class=\"badge\">20</span></a>
\t             \t</div>
\t            </article>
\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datosFavor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t            </section>
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
        return array (  146 => 70,  140 => 69,  126 => 61,  121 => 59,  117 => 58,  113 => 57,  109 => 56,  104 => 53,  99 => 52,  95 => 51,  75 => 33,  69 => 32,  61 => 30,  56 => 29,  51 => 28,  47 => 27,  19 => 1,);
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
\t\t\t\t\t<li><a href=\"#\">inicio</a></li>
\t\t\t\t\t<li><a href=\"#\">categoria</a></li>
\t\t\t\t\t<li><a href=\"?/crearFavor/crear\">favor</a></li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t<!-- end breadcrum -->
\t\t\t<!--  aside de busqueda -->
\t\t\t<div class=\"busqueda col-md-3\">
\t\t\t\t<h2>Busqueda</h2>
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
        \t\t\t{% for datosCat in categoria %}
        \t\t\t{% for categoria in datosCat %}
        \t\t\t<option hidden=\"true\">{{categoria['id']}}</option>
        \t\t\t<option>{{categoria['nombre']}}</option>
  \t\t\t\t\t{% endfor %}
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
\t\t\t</div>
\t\t\t<!-- begin post -->
\t\t\t<section class=\"posts col-md-9\">
\t\t\t
\t\t\t{% for datosFavor in favor %}
\t\t\t{% for favor in datosFavor %}
        
  
\t\t\t\t<article class=\"post clearfix\">
\t             \t<a href=\"#\" class=\"thumb pull-left\"><img class=\"img-thumbnail\" src=\"{{ path }}assets/images/logo.png\" alt=\"favor\"></a>
\t             \t<h2 class=\"post-title\"><a href=\"#\">{{favor['titulo']}}</a></h2>
\t             \t<p>Fecha limite: <span class=\"post-fecha\">{{favor['fec_lim']}}</span> 
\t             \tPublicado por: <span  class=\"post-autor\"><a href=\"#\">{{favor['id_usuario']}}</a></span></p>
\t             \t<p class=\"post-contenido text-justify\">
\t                          {{favor['descripcion']}}
\t             \t</p> 
\t             \t<div class=\"contenedor-botones\">
\t             \t\t<a href=\"#\" class=\"btn btn-primary \">Leer mas </a>
\t             \t\t<a href=\"#\" class=\"btn btn-success\">comentarios <span class=\"badge\">20</span></a>
\t             \t</div>
\t            </article>
\t            {% endfor %}
\t            {% endfor %}
\t            </section>
\t</div>", "sectionPrincipal.twig", "C:\\xampp\\htdocs\\Una-gauchada\\application\\views\\sectionPrincipal.twig");
    }
}
