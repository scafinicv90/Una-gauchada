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
\t\t\t";
        // line 3
        if (array_key_exists("succes", $context)) {
            // line 4
            echo "\t\t\t\t<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-check\"></i> ";
            // line 6
            echo twig_escape_filter($this->env, ($context["succes"] ?? null), "html", null, true);
            echo "!</h4>
            \t\tGracias por confiar en nosotros.
              </div>
\t\t\t";
        }
        // line 10
        echo "\t\t\t";
        if (array_key_exists("creditoInsuficiente", $context)) {
            // line 11
            echo "\t\t\t\t<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-check\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, ($context["creditoInsuficiente"] ?? null), "html", null, true);
            echo "!</h4>
                <p class=\"lead\">
\t\t          <a class=\"btn btn-primary btn-lg\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
            echo "comprarCredito/mostrarFormulario/\" role=\"button\">Comprar creditos</a>
\t\t          <a class=\"btn btn-danger btn-lg\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
            echo "home/\" role=\"button\">Ver Inicio</a>
\t\t        </p>
\t\t        <br>
            \t\tGracias por confiar en nosotros.
              </div>
\t\t\t";
        }
        // line 22
        echo "
\t\t\t<div class=\"migas-de-pan\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li>Inicio</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t<!-- end breadcrum -->
\t\t\t<!--  aside de busqueda -->
\t\t\t<div class=\" col-md-4\">
\t\t\t\t<div class=\"aside\">
\t\t\t\t\t<h2>Busqueda</h2>
\t\t\t\t    <form class=\" navbar-left\" name=\"buscador\" method=\"POST\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
        echo "busqueda/busqueda/\" >
\t\t\t\t  \t\t<div class=\"form-group\">
\t\t\t\t    \t\t<input type=\"text\" class=\"form-control\" name=\"busqueda\" placeholder=\"Buscar\">
\t\t\t\t  \t\t<button type=\"submit\" class=\"btn btn-default\">Buscar</button>
\t\t\t\t  \t\t</div>

\t\t\t\t\t\t";
        // line 40
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<h4 class=\"\">Categoria</h4>
\t\t    \t\t\t\t<select class=\"form-control\"  name=\"categoria\" id=\"Categoria\">
\t\t        \t\t\t<option>Selecciona</option>
\t\t        \t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 45
            echo "\t\t        \t\t\t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</option>
\t\t  \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t  \t\t\t\t\t</select>
\t\t  \t\t\t\t</div> <br>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<h4 class=\"\">Ciudad</h4>
\t\t    \t\t\t\t<select class=\"form-control select2\" name=\"ciudad\" id=\"Ciudad\">
\t\t    \t\t\t\t<option>Selecciona</option>
\t\t        \t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ciudades"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 54
            echo "\t\t        \t\t\t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "localidad", array()), "html", null, true);
            echo "</option>
\t\t  \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t  \t\t\t\t\t</select>
\t\t  \t\t\t\t</div>
\t\t  \t\t\t\t";
        // line 59
        echo "\t\t  \t\t\t\t\t";
        // line 60
        echo "\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- begin post -->
\t\t\t<section class=\"posts col-md-8\">
\t\t\t\t";
        // line 65
        if ((($context["favores"] ?? null) == false)) {
            // line 66
            echo "\t\t\t\t\t<article class=\"post clearfix\">
\t\t             \t<div class=\"box\">
\t\t             \t\t<h2 class=\"post-title\">No hay posts </h2>
\t\t             \t</div>

\t            \t</article>
\t\t\t\t";
        }
        // line 73
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["favor"]) {
            // line 74
            echo "\t\t\t\t";
            if (($this->getAttribute($context["favor"], "email", array()) != $this->getAttribute(($context["usuario"] ?? null), "email", array()))) {
                // line 75
                echo "\t\t\t\t\t<article class=\"post clearfix\">
\t             \t<div class=\"box\">
\t             \t\t<a href=\"";
                // line 77
                echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
                echo "favor/ver/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "id_favor", array()), "html", null, true);
                echo "\" class=\"thumb pull-left\"><img class=\"img-thumbnail\" src = '";
                echo twig_escape_filter($this->env, ($context["pathimg"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["imagenes"] ?? null), $this->getAttribute($context["favor"], "id_favor", array()), array(), "array"), 0, array(), "array"), "img", array()), "html", null, true);
                echo "'  /></a>
\t\t             \t<h2 class=\"post-title\">";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "titulo", array()), "html", null, true);
                echo "</h2>
\t\t             \t<p>Fecha limite: <span class=\"post-fecha\">";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "fecha_limite", array()), "html", null, true);
                echo "</span>
\t\t             \tPublicado por: <span  class=\"post-autor\"><a href=\"#\">";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "nombre", array()), "html", null, true);
                echo "</a></span></p>
\t\t             \t<p class=\"post-contenido text-justify\">
\t\t                          ";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "descripcion", array()), "html", null, true);
                echo "
\t\t             \t</p>
\t             \t</div>
\t             \t<div class=\"contenedor-botones\">
\t             \t\t<a href=\"";
                // line 86
                echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
                echo "favor/ver/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["favor"], "id_favor", array()), "html", null, true);
                echo "\" class=\"btn btn-primary \">Leer mas </a>
\t             \t\t";
                // line 87
                if (($this->getAttribute($context["favor"], "email", array()) == $this->getAttribute(($context["usuario"] ?? null), "email", array(), "array"))) {
                    // line 88
                    echo "\t             \t\t<a href=\"";
                    echo twig_escape_filter($this->env, ($context["dirpath"] ?? null), "html", null, true);
                    echo "favor/verMisGauchadas/\" class=\"btn btn-success\">Ver mis favores</a> 
\t             \t\t ";
                }
                // line 90
                echo "\t             \t</div>

\t            \t</article>
\t\t\t\t";
            }
            // line 94
            echo "\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t    </section>
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
        return array (  214 => 95,  208 => 94,  202 => 90,  196 => 88,  194 => 87,  188 => 86,  181 => 82,  176 => 80,  172 => 79,  168 => 78,  159 => 77,  155 => 75,  152 => 74,  147 => 73,  138 => 66,  136 => 65,  129 => 60,  127 => 59,  123 => 56,  114 => 54,  110 => 53,  102 => 47,  93 => 45,  89 => 44,  83 => 40,  74 => 33,  61 => 22,  52 => 16,  48 => 15,  43 => 13,  39 => 11,  36 => 10,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
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
\t\t\t{% if succes is defined %}
\t\t\t\t<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-check\"></i> {{ succes }}!</h4>
            \t\tGracias por confiar en nosotros.
              </div>
\t\t\t{% endif %}
\t\t\t{% if creditoInsuficiente is defined %}
\t\t\t\t<div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-check\"></i> {{ creditoInsuficiente }}!</h4>
                <p class=\"lead\">
\t\t          <a class=\"btn btn-primary btn-lg\" href=\"{{dirpath}}comprarCredito/mostrarFormulario/\" role=\"button\">Comprar creditos</a>
\t\t          <a class=\"btn btn-danger btn-lg\" href=\"{{ dirpath }}home/\" role=\"button\">Ver Inicio</a>
\t\t        </p>
\t\t        <br>
            \t\tGracias por confiar en nosotros.
              </div>
\t\t\t{% endif %}

\t\t\t<div class=\"migas-de-pan\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li>Inicio</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t\t<!-- end breadcrum -->
\t\t\t<!--  aside de busqueda -->
\t\t\t<div class=\" col-md-4\">
\t\t\t\t<div class=\"aside\">
\t\t\t\t\t<h2>Busqueda</h2>
\t\t\t\t    <form class=\" navbar-left\" name=\"buscador\" method=\"POST\" action=\"{{ dirpath }}busqueda/busqueda/\" >
\t\t\t\t  \t\t<div class=\"form-group\">
\t\t\t\t    \t\t<input type=\"text\" class=\"form-control\" name=\"busqueda\" placeholder=\"Buscar\">
\t\t\t\t  \t\t<button type=\"submit\" class=\"btn btn-default\">Buscar</button>
\t\t\t\t  \t\t</div>

\t\t\t\t\t\t{# <h2>Filtrado por</h2> #}
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<h4 class=\"\">Categoria</h4>
\t\t    \t\t\t\t<select class=\"form-control\"  name=\"categoria\" id=\"Categoria\">
\t\t        \t\t\t<option>Selecciona</option>
\t\t        \t\t\t{% for categoria in categorias %}
\t\t        \t\t\t<option>{{categoria.nombre}}</option>
\t\t  \t\t\t\t\t{% endfor %}
\t\t  \t\t\t\t\t</select>
\t\t  \t\t\t\t</div> <br>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<h4 class=\"\">Ciudad</h4>
\t\t    \t\t\t\t<select class=\"form-control select2\" name=\"ciudad\" id=\"Ciudad\">
\t\t    \t\t\t\t<option>Selecciona</option>
\t\t        \t\t\t{% for ciudad in ciudades %}
\t\t        \t\t\t<option>{{ciudad.localidad}}</option>
\t\t  \t\t\t\t\t{% endfor %}
\t\t  \t\t\t\t\t</select>
\t\t  \t\t\t\t</div>
\t\t  \t\t\t\t{# <input type=\"submit\" class=\"btn btn-primary btn-lg\"  value=\"Buscar\"> #}
\t\t  \t\t\t\t\t{# <button type=\"submit\" class=\"btn btn-default\">Buscar</button> #}
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- begin post -->
\t\t\t<section class=\"posts col-md-8\">
\t\t\t\t{% if favores == false %}
\t\t\t\t\t<article class=\"post clearfix\">
\t\t             \t<div class=\"box\">
\t\t             \t\t<h2 class=\"post-title\">No hay posts </h2>
\t\t             \t</div>

\t            \t</article>
\t\t\t\t{% endif %}
\t\t\t{% for favor in favores %}
\t\t\t\t{% if  favor.email != usuario.email %}
\t\t\t\t\t<article class=\"post clearfix\">
\t             \t<div class=\"box\">
\t             \t\t<a href=\"{{ dirpath }}favor/ver/{{favor.id_favor}}\" class=\"thumb pull-left\"><img class=\"img-thumbnail\" src = '{{pathimg}}{{ imagenes[favor.id_favor][0].img }}'  /></a>
\t\t             \t<h2 class=\"post-title\">{{favor.titulo}}</h2>
\t\t             \t<p>Fecha limite: <span class=\"post-fecha\">{{favor.fecha_limite}}</span>
\t\t             \tPublicado por: <span  class=\"post-autor\"><a href=\"#\">{{ favor.nombre}}</a></span></p>
\t\t             \t<p class=\"post-contenido text-justify\">
\t\t                          {{favor.descripcion}}
\t\t             \t</p>
\t             \t</div>
\t             \t<div class=\"contenedor-botones\">
\t             \t\t<a href=\"{{ dirpath }}favor/ver/{{favor.id_favor}}\" class=\"btn btn-primary \">Leer mas </a>
\t             \t\t{% if (favor.email == usuario['email']) %}
\t             \t\t<a href=\"{{ dirpath }}favor/verMisGauchadas/\" class=\"btn btn-success\">Ver mis favores</a> 
\t             \t\t {% endif %}
\t             \t</div>

\t            \t</article>
\t\t\t\t{% endif %}
\t        {% endfor %}
\t    </section>
\t</div>", "sectionPrincipal.twig", "C:\\xampp\\htdocs\\Una-gauchada\\application\\views\\sectionPrincipal.twig");
    }
}
