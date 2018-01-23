<?php

/* /var/www/html/themes/winelivery/pages/carrito.htm */
class __TwigTemplate_da6b05c6a7d5264a359a389663367fa0c8ccb44700cc4404c08b0ee0aae4b574 extends Twig_Template
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
        echo "<!-- Main Content -->
<div class=\"container m-t-3\">
  <div class=\"row\">

    <!-- Shopping Cart List -->
    <div class=\"col-md-8\">
    ";
        // line 7
        if ( !twig_test_empty((isset($context["cart"]) ? $context["cart"] : null))) {
            // line 8
            echo "        <div class=\"title\"><span>CARRITO DE COMPRA</span></div>
        <div class=\"alert alert-danger\">
        \t<p style=\"font-size: 15px\"><STRONG><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>IMPORTANTE:</STRONG> Nuestro horario de entrega es de <strong> Martes a Sábado de 02:00 PM a 12:00 AM y los Domingos de 02:00 PM a 10:00 PM</strong>, si realizas tu orden fuera de este horario será entregada inmediatamente nuestro servicio de delivery este disponible.</p>
        </div>
        <div class=\"table-responsive\">
            ";
            // line 13
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['cart'] = (isset($context["cart"]) ? $context["cart"] : null)            ;
            echo $this->env->getExtension('CMS')->partialFunction("cart"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "        </div>
    ";
        }
        // line 16
        echo "    </div>
    
    ";
        // line 18
        if (twig_test_empty((isset($context["cart"]) ? $context["cart"] : null))) {
            // line 19
            echo "        <div class=\"col-md-12\">
            <div class=\"title\"><span>CARRITO DE COMPRA</span></div>
            <div style=\"text-align: center\" ><img style=\"width: 600px; \" src=\"";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/cart.png");
            echo "\"></div> 
        </div>
    ";
        }
        // line 24
        echo "        
    <!-- End Shopping Cart List -->
    ";
        // line 26
        if ( !twig_test_empty((isset($context["cart"]) ? $context["cart"] : null))) {
            // line 27
            echo "    <div id=\"cart_total_id\">
        ";
            // line 28
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("cart_total"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 29
            echo "    </div>
    ";
        }
        // line 31
        echo "    
    ";
        // line 32
        if ( !twig_test_empty((isset($context["cart"]) ? $context["cart"] : null))) {
            // line 33
            echo "    <!-- Related Embutidos -->
    <div class=\"row m-t-3\" style=\"display:;\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>EMBUTIDOS RECOMENDADOS</span></div>
            <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inlay_products"]) ? $context["inlay_products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 39
                echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
                // line 42
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
                echo "\">
                                    <img alt=\"Product\" src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
                echo "\">
                                </a>
                                ";
                // line 45
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['p'] = $context["p"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("stock"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 46
                echo "                            </div>
                            <div class=\"name-box\"><h6><a href=\"";
                // line 47
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
                echo "</a></h6></div>
                            <div class=\"rating\">
                                ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["p"], "total_stars", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 50
                    echo "                                    <i class=\"fa fa-star\"></i>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                                ";
                if (($this->getAttribute($context["p"], "total_stars", array()) < 5)) {
                    // line 53
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["p"], "total_stars", array()), (5 - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 54
                        echo "                                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "                                ";
                }
                // line 57
                echo "                                <a href=\"#\">(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
                echo " reviews)</a>
                            </div>
                            <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\$";
                // line 61
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
                echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
                // line 64
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['p'] = $context["p"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("botones"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 65
                echo "                            </div>
                        </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "            </div>
        </div>
    </div>
<!-- End Related Embutidos -->
";
        }
        // line 75
        echo "    <!-- Related Products -->
    <div class=\"row m-t-3\">
      <div class=\"col-xs-12\">
        <div class=\"title\"><span>PODRIA INTERESARTE</span></div>
        <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["randomProducts"]) ? $context["randomProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 81
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
            // line 84
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                    <img alt=\"Product\" src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                <!-- <div class=\"tags\">
                                    <span class=\"label-tags\"><span class=\"label label-danger arrowed\">-10%</span></span>
                                </div> -->
                            </div>
                            <div class=\"name-box\"><h6><a href=\"";
            // line 91
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a></h6></div>
                            <div class=\"rating\">
                                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["p"], "total_stars", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 94
                echo "                                    <i class=\"fa fa-star\"></i>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                                ";
            if (($this->getAttribute($context["p"], "total_stars", array()) < 5)) {
                // line 97
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["p"], "total_stars", array()), (5 - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 98
                    echo "                                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                                ";
            }
            // line 101
            echo "                                <a href=\"#\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
            echo " reviews)</a>
                            </div>
                           <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\$";
            // line 105
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
            // line 108
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 109
            echo "                            </div>
                        </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </div>
        </div>
      </div>
    </div>
    <!-- End Related Products -->

  </div>
</div>
<!-- End Main Content -->

<!-- Lightbox -->
<div class=\"modal fade\" id=\"consumo_minimo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Aviso</h4>
      </div>
      <div class=\"modal-body\">
        Debes tener una orden de un minimo de RD \$1,100 pesos para ser procesada.
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- Lightbox -->

<!-- Lightbox -->
<div class=\"modal fade\" id=\"horario_minimo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Aviso</h4>
      </div>
      <div class=\"modal-body\">
        Nuestros pedidos se realizan de Lunes a Domingo de 12:00 pm a 11:30 pm. Vulve a intentarlo mas tarde
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- Lightbox -->

<!-- Lightbox -->
<div class=\"modal fade\" id=\"consumo_maximo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Aviso</h4>
      </div>
      <div class=\"modal-body\">
        Lo sentimos pero una orden no puede ser procesada por mas de RD\$20,000.00
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- Lightbox -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/carrito.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 114,  272 => 109,  267 => 108,  261 => 105,  253 => 101,  250 => 100,  243 => 98,  238 => 97,  235 => 96,  228 => 94,  224 => 93,  217 => 91,  208 => 85,  204 => 84,  199 => 81,  195 => 80,  188 => 75,  181 => 70,  171 => 65,  166 => 64,  160 => 61,  152 => 57,  149 => 56,  142 => 54,  137 => 53,  134 => 52,  127 => 50,  123 => 49,  116 => 47,  113 => 46,  108 => 45,  103 => 43,  99 => 42,  94 => 39,  90 => 38,  83 => 33,  81 => 32,  78 => 31,  74 => 29,  70 => 28,  67 => 27,  65 => 26,  61 => 24,  55 => 21,  51 => 19,  49 => 18,  45 => 16,  41 => 14,  36 => 13,  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Main Content -->
<div class=\"container m-t-3\">
  <div class=\"row\">

    <!-- Shopping Cart List -->
    <div class=\"col-md-8\">
    {% if cart is not empty %}
        <div class=\"title\"><span>CARRITO DE COMPRA</span></div>
        <div class=\"alert alert-danger\">
        \t<p style=\"font-size: 15px\"><STRONG><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>IMPORTANTE:</STRONG> Nuestro horario de entrega es de <strong> Martes a Sábado de 02:00 PM a 12:00 AM y los Domingos de 02:00 PM a 10:00 PM</strong>, si realizas tu orden fuera de este horario será entregada inmediatamente nuestro servicio de delivery este disponible.</p>
        </div>
        <div class=\"table-responsive\">
            {% partial \"cart\" cart = cart %}
        </div>
    {% endif %}
    </div>
    
    {% if cart is empty %}
        <div class=\"col-md-12\">
            <div class=\"title\"><span>CARRITO DE COMPRA</span></div>
            <div style=\"text-align: center\" ><img style=\"width: 600px; \" src=\"{{\"assets/images/cart.png\"|theme}}\"></div> 
        </div>
    {% endif %}
        
    <!-- End Shopping Cart List -->
    {% if cart is not empty %}
    <div id=\"cart_total_id\">
        {% partial \"cart_total\" %}
    </div>
    {% endif %}
    
    {% if cart is not empty %}
    <!-- Related Embutidos -->
    <div class=\"row m-t-3\" style=\"display:;\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>EMBUTIDOS RECOMENDADOS</span></div>
            <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                {% for p in inlay_products %}
                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">
                                    <img alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
                                </a>
                                {% partial \"stock\" p = p %}
                            </div>
                            <div class=\"name-box\"><h6><a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">{{p.title}}</a></h6></div>
                            <div class=\"rating\">
                                {% for i in 1..p.total_stars %}
                                    <i class=\"fa fa-star\"></i>
                                {% endfor %}
                                {% if p.total_stars < 5 %}
                                {% for j in p.total_stars..5 - 1 %}
                                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                                {% endfor %}
                                {% endif %}
                                <a href=\"#\">({{p.comments.count}} reviews)</a>
                            </div>
                            <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\${{ p.price|number_format}} <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                {% partial \"botones\" p = p %}
                            </div>
                        </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
<!-- End Related Embutidos -->
{% endif %}
    <!-- Related Products -->
    <div class=\"row m-t-3\">
      <div class=\"col-xs-12\">
        <div class=\"title\"><span>PODRIA INTERESARTE</span></div>
        <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                {% for p in randomProducts %}
                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">
                                    <img alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
                                </a>
                                <!-- <div class=\"tags\">
                                    <span class=\"label-tags\"><span class=\"label label-danger arrowed\">-10%</span></span>
                                </div> -->
                            </div>
                            <div class=\"name-box\"><h6><a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">{{p.title}}</a></h6></div>
                            <div class=\"rating\">
                                {% for i in 1..p.total_stars %}
                                    <i class=\"fa fa-star\"></i>
                                {% endfor %}
                                {% if p.total_stars < 5 %}
                                {% for j in p.total_stars..5 - 1 %}
                                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                                {% endfor %}
                                {% endif %}
                                <a href=\"#\">({{p.comments.count}} reviews)</a>
                            </div>
                           <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\${{ p.price|number_format}} <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                {% partial \"botones\" p = p %}
                            </div>
                        </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
      </div>
    </div>
    <!-- End Related Products -->

  </div>
</div>
<!-- End Main Content -->

<!-- Lightbox -->
<div class=\"modal fade\" id=\"consumo_minimo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Aviso</h4>
      </div>
      <div class=\"modal-body\">
        Debes tener una orden de un minimo de RD \$1,100 pesos para ser procesada.
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- Lightbox -->

<!-- Lightbox -->
<div class=\"modal fade\" id=\"horario_minimo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Aviso</h4>
      </div>
      <div class=\"modal-body\">
        Nuestros pedidos se realizan de Lunes a Domingo de 12:00 pm a 11:30 pm. Vulve a intentarlo mas tarde
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- Lightbox -->

<!-- Lightbox -->
<div class=\"modal fade\" id=\"consumo_maximo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Aviso</h4>
      </div>
      <div class=\"modal-body\">
        Lo sentimos pero una orden no puede ser procesada por mas de RD\$20,000.00
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- Lightbox -->", "/var/www/html/themes/winelivery/pages/carrito.htm", "");
    }
}
