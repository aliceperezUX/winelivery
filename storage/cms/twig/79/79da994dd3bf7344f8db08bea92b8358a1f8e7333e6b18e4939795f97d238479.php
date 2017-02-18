<?php

/* /home/winelivery/themes/winelivery/layouts/layout.htm */
class __TwigTemplate_512197f519e59ce8c9933586ae75226f01d2503ad42cef7a6d28c2aa97c388c9 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home - Winelivery</title>
    <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/bootstrap/css/bootstrap.css", 1 => "assets/css/font-awesome.css", 2 => "assets/css/bootstrap-select.css", 3 => "assets/css/owl.carousel.css", 4 => "assets/css/owl.theme.default.css", 5 => "assets/css/style.teal.flat.css", 6 => "assets/css/animate.css"));
        // line 20
        echo "\" rel=\"stylesheet\">
    <style>
        Size para miniatura
        .wine-thumbnail
        {
        \twidth: 160px; 
        \theight: 200px;
        }
        
        Size para detail
        .wine-detail-box
        {
        \tmargin-bottom: 50px; 
        \tpadding: 20px;
        }
        .size-img-detail
        {
        \twidth: 350px; 
        \theight:500px;
        }
    </style>
</head>

<body>
    <!-- Middle Header -->
    <div class=\"middle-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2 \">
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("inicio");
        echo "\"><img alt=\"Logo\" src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/winelivery-01.png");
        echo "\" class=\"img-responsive\" /></a>
                </div>
                <div class=\"col-sm-8 col-md-6 search-box m-t-2\">
                  <form method=\"POST\" action=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("busqueda");
        echo "\">
                    <div class=\"input-group\">
                        <input name=\"search\" type=\"text\" class=\"form-control\" aria-label=\"Encuentra tus vinos...\" placeholder=\"Encuentra tus vinos...\">
                        <div class=\"input-group-btn\">
                            <button type=\"submit\" class=\"btn btn-default btn-search\"><i class=\"fa fa-search\"></i></button>
                        </div>
                    </div>
                  </form>
                </div>
                <div class=\"col-sm-4 col-md-4  hidden-xs m-t-2\">
                    <ul class=\"list-unstyled; list-inline\" style=\"font-size:12px;\">
                        <li><a href=\"";
        // line 63
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("nosotros");
        echo "\">Sobre nosotros</a></li>
                        <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("terminos");
        echo "\">Terminos y condiciones</a></li>
                        <li ";
        // line 65
        if ((isset($context["user"]) ? $context["user"] : null)) {
            echo " class=\"hidden\" ";
        }
        echo "><a style=\"font-size:12px;background-color:#c1272d;border-color:transparent; color:#fff\" class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("registro");
        echo "\">Registrate</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Middle Header -->

    <!-- Navigation Bar -->
    <nav class=\"navbar navbar-default shadow-navbar\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-ex1-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
            </div>
            <div class=\"collapse navbar-collapse col-md-6\" id=\"navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav\">
                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 87
            echo "                        <li class=\"dropdown\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "title", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["c"], "countries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 91
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("productos", array("country" => $this->getAttribute($context["r"], "id", array()), "category" => $this->getAttribute($context["c"], "id", array())));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                            </ul>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                </ul>
            </div>
            <div style=\"float:right;\" class=\"col-md-6\">
                <ul class=\"list-inline nav navbar-nav\">
                    ";
        // line 100
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            // line 101
            echo "                    <li class=\"dropdown\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle white\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-user\"></i> Hola, ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "surname", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu white\">
                            <li><a href=\"";
            // line 105
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("perfil");
            echo "\">Editar mi perfil</a></li>
                            <li><a href=\"";
            // line 106
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("password");
            echo "\">Cambiar contrase&ntilde;a</a></li>
                            <li><a href=\"";
            // line 107
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("direcciones");
            echo "\">Editar informacion de envio</a></li>
                            <li><a href=\"";
            // line 108
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("historial");
            echo "\">Historial de compras</a></li>
                            <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/good-bye'\">Salir</a></li>
                        </ul>
                    </li>
                    ";
        } else {
            // line 113
            echo "                       <li>
                           <a style=\"border-color:transparent;color:#fff;padding:3px 15px; margin-top:5px; hover:color:#c1272d;\" href=\"";
            // line 114
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\"> Iniciar Sesi&oacute;n</a>
                       </li>
                    ";
        }
        // line 117
        echo "
                    <!-- <li class=\"club\"><a style=\"background-color:#fff;border-color:transparent;color:#c1272d; border-radius:25px; padding:3px 15px; margin-top:5px; hover:color:#c1272d;\" href=\"\">¡Unete al club de vinos!</a></li> -->
                    <li id=\"wishlist_update_quantity\" class=\"white\">
                        ";
        // line 120
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['wishlist_counter'] = (isset($context["wishlist_counter"]) ? $context["wishlist_counter"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("quantity_wishlist"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 121
        echo "                    </li>
                    <li id=\"cart_update_quantity\" class=\"white\">
                        ";
        // line 123
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['cart_counter'] = (isset($context["cart_counter"]) ? $context["cart_counter"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("quantity_cart"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 124
        echo "                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation Bar -->

    ";
        // line 131
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 132
        echo "
    <!-- Footer -->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Sobre nosotros</span></div>
                    <ul>
                        <li>
                            Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloremmagna aliqua. Ut enim ad minim... <a href=\"#\">ver m&aacute;s</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Informaci&oacute;n</span></div>
                    <ul>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Preguntas frecuentes</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Politicas de privacidad</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Terminos y condiciones</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Metodo de envio</a></li>
                    </ul>
                </div>
                <div class=\"clearfix visible-sm-block\"></div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Categorias</span></div>
                    <ul>
                        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 159
            echo "                            <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "title", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Noticias</span></div>
                    <p>
                        Suscribete y recibe noticias sobre tus vinos favoritos.
                    </p>
                    <form id=\"newsletterForm\">
                        <div class=\"input-group\">
                            <input name=\"email_newsletter\" class=\"form-control\" type=\"text\" placeholder=\"Correo\">
                            <span class=\"input-group-btn\"><button onClick=\"onNewsletterForm();\" class=\"btn btn-default subscribe-button\" type=\"button\">Suscribete</button></span>
                        </div><br>
                         <div style=\"display:none;\" id=\"newsletterMessageSuccess\" class=\"alert alert-success\">Te has suscrito exitosamente.</div>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Contacto</span></div>
                    <ul class=\"footer-icon\">
                        <li><span><i class=\"fa fa-map-marker\"></i></span> 212 Lorem Ipsum. Dolor Sit, Amet</li>
                        <li><span><i class=\"fa fa-phone\"></i></span> (809)-456-789</li>
                        <li><span><i class=\"fa fa-envelope\"></i></span> <a href=\"\">correo@domain.com</a></li>
                    </ul>
                </div>
                <div class=\"clearfix visible-sm-block\"></div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>M&eacute;todos de pago</span></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, soluta, tempora, ipsa voluptatibus porro vel laboriosam</p>
                    <img src=\"";
        // line 190
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/payment-1.png");
        echo "\" alt=\"Payment-1\">
                    <img src=\"";
        // line 191
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/payment-2.png");
        echo "\" alt=\"Payment-2\">
                    <img src=\"";
        // line 192
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/payment-4.png");
        echo "\" alt=\"Payment-4\">
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Mi cuenta</span></div>
                    <ul>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Ordenes</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Direcci&oacute;n</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Perfil</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Salir</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"text-center copyright\">
            Copyright &copy; ";
        // line 206
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "Y"), "html", null, true);
        echo " Winelivery All right reserved
        </div>
    </div>
    <!-- End Footer -->

    <a href=\"#top\" class=\"back-top text-center\" onclick=\"\$('body,html').animate({scrollTop:0},500); return false\">
        <i class=\"fa fa-angle-double-up\"></i>
    </a>

    <script src=\"";
        // line 215
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "@jquery", 1 => "@framework", 2 => "@framework.extras"));
        echo "\"></script>
    <script src=\"";
        // line 216
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/bootstrap/js/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 217
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap-select.js");
        echo "\"></script>
    <script src=\"";
        // line 218
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/owl.carousel.js");
        echo "\"></script>
    <script src=\"";
        // line 219
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.ez-plus.js");
        echo "\"></script>
    <script src=\"";
        // line 220
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.bootstrap-touchspin.js");
        echo "\"></script>
    <script src=\"";
        // line 221
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.raty-fa.js");
        echo "\"></script>
    <script src=\"";
        // line 222
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/nouislider.js");
        echo "\"></script>
    <script src=\"";
        // line 223
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mimity.js");
        echo "\"></script>
    <script src=\"";
        // line 224
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mimity.detail.js");
        echo "\"></script>
    <script src=\"";
        // line 225
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mimity.filter-sidebar.js");
        echo "\"></script>
    <script src=\"";
        // line 226
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.mask.js");
        echo "\"></script>
    <script src=\"";
        // line 227
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jqFunctions.js");
        echo "\"></script>
    ";
        // line 228
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 229
        echo "    <script>
    \$('.fa-shopping-cart').click(function(){
        \$(this).addClass('animated bounceIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function() {
          \$(this).removeClass('animated bounceIn');
        
        });;
    });
    \$('.fa-heart').click(function(){
        \$(this).addClass('animated bounceIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function() {
          \$(this).removeClass('animated bounceIn');
        
        });;
    });

    function onNewsletterForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        
    \tif(!regex.test(\$('input[name=email_newsletter]').val())){\$('input[name=email_newsletter]').css('border', '1px solid red');error = false;} 
    \telse {\$('input[name=email_newsletter]').css('border', '');}
    \t
    \tif(error)
    \t{
    \t\t\$('#newsletterForm').request('onNewsletterForm', {data: \$('#newsletterForm').serialize()});
    \t\t\$(\"#newsletterMessageSuccess\").fadeIn(\"fast\");
    \t} 
    \telse { return false; }
    }
    </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/layouts/layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 229,  400 => 228,  396 => 227,  392 => 226,  388 => 225,  384 => 224,  380 => 223,  376 => 222,  372 => 221,  368 => 220,  364 => 219,  360 => 218,  356 => 217,  352 => 216,  348 => 215,  336 => 206,  319 => 192,  315 => 191,  311 => 190,  280 => 161,  271 => 159,  267 => 158,  239 => 132,  237 => 131,  228 => 124,  223 => 123,  219 => 121,  214 => 120,  209 => 117,  203 => 114,  200 => 113,  192 => 108,  188 => 107,  184 => 106,  180 => 105,  173 => 103,  169 => 101,  167 => 100,  161 => 96,  153 => 93,  142 => 91,  138 => 90,  133 => 88,  130 => 87,  126 => 86,  98 => 65,  94 => 64,  90 => 63,  76 => 52,  68 => 49,  37 => 20,  35 => 12,  29 => 9,  19 => 1,);
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
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"{{\"assets/images/favicon.ico\"|theme}}\" type=\"image/x-icon\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home - Winelivery</title>
    <link href=\"{{ [
        'assets/bootstrap/css/bootstrap.css',
        'assets/css/font-awesome.css',
        'assets/css/bootstrap-select.css',
        'assets/css/owl.carousel.css',
        'assets/css/owl.theme.default.css',
        'assets/css/style.teal.flat.css',
        'assets/css/animate.css'
    ]|theme }}\" rel=\"stylesheet\">
    <style>
        Size para miniatura
        .wine-thumbnail
        {
        \twidth: 160px; 
        \theight: 200px;
        }
        
        Size para detail
        .wine-detail-box
        {
        \tmargin-bottom: 50px; 
        \tpadding: 20px;
        }
        .size-img-detail
        {
        \twidth: 350px; 
        \theight:500px;
        }
    </style>
</head>

<body>
    <!-- Middle Header -->
    <div class=\"middle-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2 \">
                    <a href=\"{{\"inicio\"|page}}\"><img alt=\"Logo\" src=\"{{\"assets/images/winelivery-01.png\"|theme}}\" class=\"img-responsive\" /></a>
                </div>
                <div class=\"col-sm-8 col-md-6 search-box m-t-2\">
                  <form method=\"POST\" action=\"{{\"busqueda\"|page}}\">
                    <div class=\"input-group\">
                        <input name=\"search\" type=\"text\" class=\"form-control\" aria-label=\"Encuentra tus vinos...\" placeholder=\"Encuentra tus vinos...\">
                        <div class=\"input-group-btn\">
                            <button type=\"submit\" class=\"btn btn-default btn-search\"><i class=\"fa fa-search\"></i></button>
                        </div>
                    </div>
                  </form>
                </div>
                <div class=\"col-sm-4 col-md-4  hidden-xs m-t-2\">
                    <ul class=\"list-unstyled; list-inline\" style=\"font-size:12px;\">
                        <li><a href=\"{{\"nosotros\"|page}}\">Sobre nosotros</a></li>
                        <li><a href=\"{{\"terminos\"|page}}\">Terminos y condiciones</a></li>
                        <li {% if user %} class=\"hidden\" {% endif %}><a style=\"font-size:12px;background-color:#c1272d;border-color:transparent; color:#fff\" class=\"btn btn-default\" href=\"{{\"registro\"|page}}\">Registrate</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Middle Header -->

    <!-- Navigation Bar -->
    <nav class=\"navbar navbar-default shadow-navbar\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-ex1-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
            </div>
            <div class=\"collapse navbar-collapse col-md-6\" id=\"navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav\">
                    {% for c in categories %}
                        <li class=\"dropdown\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{c.title}}<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                {% for r in c.countries %}
                                    <li><a href=\"{{\"productos\"|page({country: r.id, category: c.id})}}\">{{r.name}}</a></li>
                                {% endfor %}
                            </ul>
                        </li>
                    {% endfor %}
                </ul>
            </div>
            <div style=\"float:right;\" class=\"col-md-6\">
                <ul class=\"list-inline nav navbar-nav\">
                    {% if loggedIn %}
                    <li class=\"dropdown\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle white\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-user\"></i> Hola, {{ user.name }} {{user.surname}} <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu white\">
                            <li><a href=\"{{\"perfil\"|page}}\">Editar mi perfil</a></li>
                            <li><a href=\"{{\"password\"|page}}\">Cambiar contrase&ntilde;a</a></li>
                            <li><a href=\"{{\"direcciones\"|page}}\">Editar informacion de envio</a></li>
                            <li><a href=\"{{\"historial\"|page}}\">Historial de compras</a></li>
                            <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/good-bye'\">Salir</a></li>
                        </ul>
                    </li>
                    {% else %}
                       <li>
                           <a style=\"border-color:transparent;color:#fff;padding:3px 15px; margin-top:5px; hover:color:#c1272d;\" href=\"{{\"login\"|page}}\"> Iniciar Sesi&oacute;n</a>
                       </li>
                    {% endif %}

                    <!-- <li class=\"club\"><a style=\"background-color:#fff;border-color:transparent;color:#c1272d; border-radius:25px; padding:3px 15px; margin-top:5px; hover:color:#c1272d;\" href=\"\">¡Unete al club de vinos!</a></li> -->
                    <li id=\"wishlist_update_quantity\" class=\"white\">
                        {% partial \"quantity_wishlist\" wishlist_counter = wishlist_counter %}
                    </li>
                    <li id=\"cart_update_quantity\" class=\"white\">
                        {% partial \"quantity_cart\"  cart_counter = cart_counter %}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation Bar -->

    {% page %}

    <!-- Footer -->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Sobre nosotros</span></div>
                    <ul>
                        <li>
                            Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloremmagna aliqua. Ut enim ad minim... <a href=\"#\">ver m&aacute;s</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Informaci&oacute;n</span></div>
                    <ul>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Preguntas frecuentes</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Politicas de privacidad</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Terminos y condiciones</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Metodo de envio</a></li>
                    </ul>
                </div>
                <div class=\"clearfix visible-sm-block\"></div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Categorias</span></div>
                    <ul>
                        {% for c in categories %}
                            <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">{{c.title}}</a></li>
                        {% endfor %}
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Noticias</span></div>
                    <p>
                        Suscribete y recibe noticias sobre tus vinos favoritos.
                    </p>
                    <form id=\"newsletterForm\">
                        <div class=\"input-group\">
                            <input name=\"email_newsletter\" class=\"form-control\" type=\"text\" placeholder=\"Correo\">
                            <span class=\"input-group-btn\"><button onClick=\"onNewsletterForm();\" class=\"btn btn-default subscribe-button\" type=\"button\">Suscribete</button></span>
                        </div><br>
                         <div style=\"display:none;\" id=\"newsletterMessageSuccess\" class=\"alert alert-success\">Te has suscrito exitosamente.</div>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Contacto</span></div>
                    <ul class=\"footer-icon\">
                        <li><span><i class=\"fa fa-map-marker\"></i></span> 212 Lorem Ipsum. Dolor Sit, Amet</li>
                        <li><span><i class=\"fa fa-phone\"></i></span> (809)-456-789</li>
                        <li><span><i class=\"fa fa-envelope\"></i></span> <a href=\"\">correo@domain.com</a></li>
                    </ul>
                </div>
                <div class=\"clearfix visible-sm-block\"></div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>M&eacute;todos de pago</span></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, soluta, tempora, ipsa voluptatibus porro vel laboriosam</p>
                    <img src=\"{{\"assets/images/payment-1.png\"|theme}}\" alt=\"Payment-1\">
                    <img src=\"{{\"assets/images/payment-2.png\"|theme}}\" alt=\"Payment-2\">
                    <img src=\"{{\"assets/images/payment-4.png\"|theme}}\" alt=\"Payment-4\">
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"title-footer\"><span>Mi cuenta</span></div>
                    <ul>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Ordenes</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Direcci&oacute;n</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Perfil</a></li>
                        <li><i class=\"fa fa-angle-double-right\"></i> <a href=\"#\">Salir</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"text-center copyright\">
            Copyright &copy; {{date|date(\"Y\")}} Winelivery All right reserved
        </div>
    </div>
    <!-- End Footer -->

    <a href=\"#top\" class=\"back-top text-center\" onclick=\"\$('body,html').animate({scrollTop:0},500); return false\">
        <i class=\"fa fa-angle-double-up\"></i>
    </a>

    <script src=\"{{ ['@jquery','@framework','@framework.extras']|theme }}\"></script>
    <script src=\"{{\"assets/bootstrap/js/bootstrap.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/bootstrap-select.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/owl.carousel.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/jquery.ez-plus.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/jquery.bootstrap-touchspin.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/jquery.raty-fa.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/nouislider.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/mimity.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/mimity.detail.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/mimity.filter-sidebar.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/jquery.mask.js\"|theme}}\"></script>
    <script src=\"{{\"assets/js/jqFunctions.js\"|theme}}\"></script>
    {% scripts %}
    <script>
    \$('.fa-shopping-cart').click(function(){
        \$(this).addClass('animated bounceIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function() {
          \$(this).removeClass('animated bounceIn');
        
        });;
    });
    \$('.fa-heart').click(function(){
        \$(this).addClass('animated bounceIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function() {
          \$(this).removeClass('animated bounceIn');
        
        });;
    });

    function onNewsletterForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        
    \tif(!regex.test(\$('input[name=email_newsletter]').val())){\$('input[name=email_newsletter]').css('border', '1px solid red');error = false;} 
    \telse {\$('input[name=email_newsletter]').css('border', '');}
    \t
    \tif(error)
    \t{
    \t\t\$('#newsletterForm').request('onNewsletterForm', {data: \$('#newsletterForm').serialize()});
    \t\t\$(\"#newsletterMessageSuccess\").fadeIn(\"fast\");
    \t} 
    \telse { return false; }
    }
    </script>
</body>
</html>", "/home/winelivery/themes/winelivery/layouts/layout.htm", "");
    }
}
