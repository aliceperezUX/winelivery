<?php

/* /home/winelivery/themes/winelivery/pages/carrito.htm */
class __TwigTemplate_c1305b1dad09922dbd7a678f873450d03d42258da3b711015008fdac9fba9926 extends Twig_Template
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
      <div class=\"title\"><span>CARRITO DE COMPRA</span></div>
      <div class=\"table-responsive\">
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['cart'] = (isset($context["cart"]) ? $context["cart"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("cart"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "      </div>
    </div>
    <!-- End Shopping Cart List -->
    <div class=\"col-md-3 cart-detailbox\">
      <h4>Orden de Compra</h4>
      <p class=\"detailbox-items\">Total Productos:<span class=\"detailbox-content\">  ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cart_counter"]) ? $context["cart_counter"] : null), "html", null, true);
        echo "</span></p>
      <p class=\"detailbox-items\">Costo:<span class=\"detailbox-content\" > RD\$";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total"]) ? $context["cart_total"] : null)), "html", null, true);
        echo "</span></p>
      <p class=\"detailbox-items\">Costo de Envío:<span class=\"detailbox-content\"> RD\$90</span></p>
      <p class=\"detailbox-items\">Costo Total:<span class=\"detailbox-content\"> RD\$";
        // line 18
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total_envio"]) ? $context["cart_total_envio"] : null)), "html", null, true);
        echo "</span></p>
      <p></p>IMPUESTOS INCLUIDOS</p>
      <a ";
        // line 20
        if ((isset($context["now"]) ? $context["now"] : null)) {
            echo " class=\"btn btn-theme\" data-toggle=\"modal\" data-target=\"#horario_minimo\" ";
        } elseif (((isset($context["cart_total"]) ? $context["cart_total"] : null) < 1100)) {
            echo " data-toggle=\"modal\" data-target=\"#consumo_minimo\" ";
        } else {
            echo " href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("checkout");
            echo "\" ";
        }
        echo " class=\"btn btn-theme col-md-12\">Procesar Orden</a>
    </div>
    <!-- Related Products -->
    <div class=\"row m-t-3\">
      <div class=\"col-xs-12\">
        <div class=\"title\"><span>PODRIA INTERESARTE</span></div>
        <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["randomProducts"]) ? $context["randomProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 28
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
            // line 31
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                    <img alt=\"Product\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                <!-- <div class=\"tags\">
                                    <span class=\"label-tags\"><span class=\"label label-danger arrowed\">-10%</span></span>
                                </div> -->
                            </div>
                            <div class=\"name-box\"><h6><a href=\"";
            // line 38
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a></h6></div>
                            <div class=\"rating\">
                                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["p"], "total_stars", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 41
                echo "                                    <i class=\"fa fa-star\"></i>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                                ";
            if (($this->getAttribute($context["p"], "total_stars", array()) < 5)) {
                // line 44
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["p"], "total_stars", array()), (5 - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 45
                    echo "                                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                                ";
            }
            // line 48
            echo "                                <a href=\"#\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
            echo " reviews)</a>
                            </div>
                           <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\$";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
            // line 55
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 56
            echo "                            </div>
                        </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        Debes tener una orden de un minimo de RD \$1,500 pesos para ser procesada.
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
        Nuestros pedidos se realizan de Lunes a Domingo de 12:00 pm a 10:00 pm. Vulve a intentarlo mas tarde
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
        return "/home/winelivery/themes/winelivery/pages/carrito.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 61,  150 => 56,  145 => 55,  139 => 52,  131 => 48,  128 => 47,  121 => 45,  116 => 44,  113 => 43,  106 => 41,  102 => 40,  95 => 38,  86 => 32,  82 => 31,  77 => 28,  73 => 27,  55 => 20,  50 => 18,  45 => 16,  41 => 15,  34 => 10,  29 => 9,  19 => 1,);
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
      <div class=\"title\"><span>CARRITO DE COMPRA</span></div>
      <div class=\"table-responsive\">
        {% partial \"cart\" cart = cart %}
      </div>
    </div>
    <!-- End Shopping Cart List -->
    <div class=\"col-md-3 cart-detailbox\">
      <h4>Orden de Compra</h4>
      <p class=\"detailbox-items\">Total Productos:<span class=\"detailbox-content\">  {{cart_counter}}</span></p>
      <p class=\"detailbox-items\">Costo:<span class=\"detailbox-content\" > RD\${{ cart_total|number_format}}</span></p>
      <p class=\"detailbox-items\">Costo de Envío:<span class=\"detailbox-content\"> RD\$90</span></p>
      <p class=\"detailbox-items\">Costo Total:<span class=\"detailbox-content\"> RD\${{ cart_total_envio|number_format}}</span></p>
      <p></p>IMPUESTOS INCLUIDOS</p>
      <a {% if now %} class=\"btn btn-theme\" data-toggle=\"modal\" data-target=\"#horario_minimo\" {% elseif cart_total < 1100 %} data-toggle=\"modal\" data-target=\"#consumo_minimo\" {% else %} href=\"{{\"checkout\"|page}}\" {% endif %} class=\"btn btn-theme col-md-12\">Procesar Orden</a>
    </div>
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
        Debes tener una orden de un minimo de RD \$1,500 pesos para ser procesada.
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
        Nuestros pedidos se realizan de Lunes a Domingo de 12:00 pm a 10:00 pm. Vulve a intentarlo mas tarde
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- Lightbox -->", "/home/winelivery/themes/winelivery/pages/carrito.htm", "");
    }
}
