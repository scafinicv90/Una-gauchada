<?php

/* home.twig */
class __TwigTemplate_8d0f0681e0aab469ccca37b35d0a35c7678c248253c40bc5e333496997e0795d extends Twig_Template
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
";
        // line 2
        $this->loadTemplate("head.twig", "home.twig", 2)->display($context);
        // line 3
        echo "
<body>
<header>
\t<nav class=\"navbar navbar-default\" role=\"navigation\">
\t  \t<div class=\"container\">
\t\t    <div class=\"navbar-header\">
\t\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navegaciong24\" aria-expanded=\"false\">
\t\t        <span class=\"sr-only\">Desplegar / Ocultar menu</span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t      </button>
\t\t      <a class=\"navbar-brand\" href=\"#\">Una Gauchada</a>
\t\t\t</div>

\t\t    <!-- inicia menu -->
\t\t    <div class=\"collapse navbar-collapse\" id=\"navegaciong24\">
\t\t      <ul class=\"nav navbar-nav\">
\t\t        <li class=\"active\"><a href=\"#\">link <span class=\"sr-only\">(current)</span></a></li>
\t\t        <li><a href=\"#\">Link</a></li>
\t\t        <li class=\"dropdown\">
\t\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
\t\t          <ul class=\"dropdown-menu\">
\t\t            <li><a href=\"#\">Action</a></li>
\t\t            <li><a href=\"#\">Another action</a></li>
\t\t            <li><a href=\"#\">Something else here</a></li>
\t\t            <li role=\"separator\" class=\"divider\"></li>
\t\t            <li><a href=\"#\">Separated link</a></li>
\t\t            <li role=\"separator\" class=\"divider\"></li>
\t\t            <li><a href=\"#\">One more separated link</a></li>
\t\t          </ul>
\t\t        </li>
\t\t      </ul>

\t\t      <ul class=\"nav navbar-nav navbar-right\">
\t\t        <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
\t\t        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->
\t\t</div><!-- /.container -->
\t</nav>
</header>
<section class=\"main container\">
\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Login</h4>
\t      </div>
\t      <div class=\"modal-body\">

\t        <form class=\"form-horizontal\">
\t            <div class=\"form-group\">
\t                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
\t            <div class=\"col-sm-10 col-md-4\">
\t                <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
\t            </div>
\t            </div>
\t            <div class=\"form-group\">
\t                <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
\t            <div class=\"col-sm-10 col-md-4\">
\t                <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
\t            </div>
\t            </div>
\t        <div class=\"form-group\">
\t            <div class=\"col-sm-offset-2 col-sm-10\">
\t                <div class=\"checkbox\">
\t                <label>
\t                    <input type=\"checkbox\"> Remember me
\t                </label>
\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"form-group\">
\t            <div class=\"col-sm-offset-2 col-sm-10\">
\t                <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
\t            </div>
\t        </div>
\t        </form>

\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- -  -->
\t<div class=\"row\">
\t\t<div class=\"col-md-3\">
\t\t\t    <form class=\"navbar-form navbar-left\" role=\"search\">
\t\t\t  \t\t<div class=\"form-group\">
\t\t\t    \t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t  \t\t</div>
\t\t\t  \t\t<button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t\t\t\t</form>
\t\t</div>
\t\t<section class=\"post col-md-9\">
\t\t\t\t<article class=\"post clearfix col-xs-12 col-sm-8 col-md-8\">
\t             \t<a href=\"#\" class=\"thum pull-left\"><img src=\"\" alt=\"hot\"></a>
\t             \t<h2 class=\"post-title\">primer gauchada</h2>
\t             \t<p>
\t                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum inventore beatae, <a href=\"\t\"></a>expedita tenetur doloremque consequatur aliquid voluptates magnam labore accusamus, recusandae ipsam architecto eos ex. Voluptate deleniti ipsa doloribus.
\t             \t</p>
\t            </article>
\t            <aside class=\"post clearfix col-xs-12 col-sm-4 col-md-2\">
\t             \t    <h4>Categorias</h4>
\t             \t    <div class=\"list-group\">
\t             \t    \t<a href=\"\" class=\"list-group-item\">mas vistos</a>
\t             \t    \t<a href=\"\" class=\"list-group-item\">lo mas buscado</a>
\t             \t    \t<a href=\"\" class=\"list-group-item\">lo ultimo</a>
\t             \t    </div>
\t             \t    <h4>Articulos recietnes</h4>
\t             \t    <a class=\"list-group-item\">
\t             \t    \t<h5 class=\"list-group-item-heading\"> Transporte de muebles</h5>
\t             \t    \t<p class=\"list-group-item-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t             \t    \t</p>
\t             \t    </a>
\t             \t    <a class=\"list-group-item\">
\t             \t    \t<h5 class=\"list-group-item-heading\"> Transporte de animales</h5>
\t             \t    \t<p class=\"list-group-item-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t             \t    \t</p>
\t             \t    </a>
\t            </aside>
\t\t</section>
\t</div>
</section>

<footer>
 <div class=\"container\">
  <div class=\"row\">
\t<div class=\"col-xs-6\"><p>G24</p></div>
\t<div class=\"col-xs-6\"><ul class=\"list-inline text-right\">
\t\t<li><a href=\"\" title=\"\">Inicio</a></li>
\t\t<li><a href=\"\" title=\"\">ventas</a></li>
\t\t<li><a href=\"\" title=\"contacto\">contacto</a></li>
  </div>
</div>
</footer>


</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
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
{% include 'head.twig' %}

<body>
<header>
\t<nav class=\"navbar navbar-default\" role=\"navigation\">
\t  \t<div class=\"container\">
\t\t    <div class=\"navbar-header\">
\t\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navegaciong24\" aria-expanded=\"false\">
\t\t        <span class=\"sr-only\">Desplegar / Ocultar menu</span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t      </button>
\t\t      <a class=\"navbar-brand\" href=\"#\">Una Gauchada</a>
\t\t\t</div>

\t\t    <!-- inicia menu -->
\t\t    <div class=\"collapse navbar-collapse\" id=\"navegaciong24\">
\t\t      <ul class=\"nav navbar-nav\">
\t\t        <li class=\"active\"><a href=\"#\">link <span class=\"sr-only\">(current)</span></a></li>
\t\t        <li><a href=\"#\">Link</a></li>
\t\t        <li class=\"dropdown\">
\t\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
\t\t          <ul class=\"dropdown-menu\">
\t\t            <li><a href=\"#\">Action</a></li>
\t\t            <li><a href=\"#\">Another action</a></li>
\t\t            <li><a href=\"#\">Something else here</a></li>
\t\t            <li role=\"separator\" class=\"divider\"></li>
\t\t            <li><a href=\"#\">Separated link</a></li>
\t\t            <li role=\"separator\" class=\"divider\"></li>
\t\t            <li><a href=\"#\">One more separated link</a></li>
\t\t          </ul>
\t\t        </li>
\t\t      </ul>

\t\t      <ul class=\"nav navbar-nav navbar-right\">
\t\t        <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
\t\t        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->
\t\t</div><!-- /.container -->
\t</nav>
</header>
<section class=\"main container\">
\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t        <h4 class=\"modal-title\" id=\"myModalLabel\">Login</h4>
\t      </div>
\t      <div class=\"modal-body\">

\t        <form class=\"form-horizontal\">
\t            <div class=\"form-group\">
\t                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
\t            <div class=\"col-sm-10 col-md-4\">
\t                <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
\t            </div>
\t            </div>
\t            <div class=\"form-group\">
\t                <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
\t            <div class=\"col-sm-10 col-md-4\">
\t                <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
\t            </div>
\t            </div>
\t        <div class=\"form-group\">
\t            <div class=\"col-sm-offset-2 col-sm-10\">
\t                <div class=\"checkbox\">
\t                <label>
\t                    <input type=\"checkbox\"> Remember me
\t                </label>
\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"form-group\">
\t            <div class=\"col-sm-offset-2 col-sm-10\">
\t                <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
\t            </div>
\t        </div>
\t        </form>

\t      </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- -  -->
\t<div class=\"row\">
\t\t<div class=\"col-md-3\">
\t\t\t    <form class=\"navbar-form navbar-left\" role=\"search\">
\t\t\t  \t\t<div class=\"form-group\">
\t\t\t    \t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t  \t\t</div>
\t\t\t  \t\t<button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t\t\t\t</form>
\t\t</div>
\t\t<section class=\"post col-md-9\">
\t\t\t\t<article class=\"post clearfix col-xs-12 col-sm-8 col-md-8\">
\t             \t<a href=\"#\" class=\"thum pull-left\"><img src=\"\" alt=\"hot\"></a>
\t             \t<h2 class=\"post-title\">primer gauchada</h2>
\t             \t<p>
\t                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum inventore beatae, <a href=\"\t\"></a>expedita tenetur doloremque consequatur aliquid voluptates magnam labore accusamus, recusandae ipsam architecto eos ex. Voluptate deleniti ipsa doloribus.
\t             \t</p>
\t            </article>
\t            <aside class=\"post clearfix col-xs-12 col-sm-4 col-md-2\">
\t             \t    <h4>Categorias</h4>
\t             \t    <div class=\"list-group\">
\t             \t    \t<a href=\"\" class=\"list-group-item\">mas vistos</a>
\t             \t    \t<a href=\"\" class=\"list-group-item\">lo mas buscado</a>
\t             \t    \t<a href=\"\" class=\"list-group-item\">lo ultimo</a>
\t             \t    </div>
\t             \t    <h4>Articulos recietnes</h4>
\t             \t    <a class=\"list-group-item\">
\t             \t    \t<h5 class=\"list-group-item-heading\"> Transporte de muebles</h5>
\t             \t    \t<p class=\"list-group-item-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t             \t    \t</p>
\t             \t    </a>
\t             \t    <a class=\"list-group-item\">
\t             \t    \t<h5 class=\"list-group-item-heading\"> Transporte de animales</h5>
\t             \t    \t<p class=\"list-group-item-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t             \t    \t</p>
\t             \t    </a>
\t            </aside>
\t\t</section>
\t</div>
</section>

<footer>
 <div class=\"container\">
  <div class=\"row\">
\t<div class=\"col-xs-6\"><p>G24</p></div>
\t<div class=\"col-xs-6\"><ul class=\"list-inline text-right\">
\t\t<li><a href=\"\" title=\"\">Inicio</a></li>
\t\t<li><a href=\"\" title=\"\">ventas</a></li>
\t\t<li><a href=\"\" title=\"contacto\">contacto</a></li>
  </div>
</div>
</footer>


</body>
</html>
", "home.twig", "/home/cristian/Escritorio/catedra/application/views/home.twig");
    }
}
