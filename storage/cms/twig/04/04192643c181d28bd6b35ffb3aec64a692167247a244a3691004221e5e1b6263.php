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
      <h4>orden de compra</h4>
      <p class=\"detailbox-items\">Total items:<span class=\"detailbox-content\">  ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cart_counter"]) ? $context["cart_counter"] : null), "html", null, true);
        echo "</span></p>
      <p class=\"detailbox-items\">costo:<span class=\"detailbox-content\" > RD\$";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total"]) ? $context["cart_total"] : null)), "html", null, true);
        echo "</span></p>
      <p class=\"detailbox-items\">costo de envio:<span class=\"detailbox-content\"> RD\$90</span></p>
      <p class=\"detailbox-items\">costo total:<span class=\"detailbox-content\"> RD\$";
        // line 18
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total_envio"]) ? $context["cart_total_envio"] : null)), "html", null, true);
        echo "</span></p>
      <a ";
        // line 19
        if (((isset($context["cart_total"]) ? $context["cart_total"] : null) < 1500)) {
            echo " data-toggle=\"modal\" data-target=\"#consumo_minimo\" ";
        } else {
            echo " href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("checkout");
            echo "\" ";
        }
        echo " class=\"btn btn-theme col-md-12\">procesar orden</a>
    </div>
    <!-- Related Products -->
    <div class=\"row m-t-3\">
      <div class=\"col-xs-12\">
        <div class=\"title\"><span>PODRIA INTERESARTE</span></div>
        <div class=\"related-product-slider owl-controls-top-offset\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["randomProducts"]) ? $context["randomProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 27
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
            // line 30
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                    <img alt=\"Product\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                <!-- <div class=\"tags\">
                                    <span class=\"label-tags\"><span class=\"label label-danger arrowed\">-10%</span></span>
                                </div> -->
                            </div>
                            <h6><a href=\"";
            // line 37
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a></a></h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half-o\"></i>
                                <a href=\"#\">(5 reviews)</a>
                            </div>
                            <div style=\"background-color:#c1272d; margin-top:10px; padding:10px 2px 30px 5px\">
                                <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                    <div>RD\$";
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo "<span class=\"label-tags\"></span></div>
                                </div>
                                <div class=\"col-lg-6\">
                                    ";
            // line 51
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 52
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return array (  129 => 57,  119 => 52,  114 => 51,  108 => 48,  92 => 37,  83 => 31,  79 => 30,  74 => 27,  70 => 26,  54 => 19,  50 => 18,  45 => 16,  41 => 15,  34 => 10,  29 => 9,  19 => 1,);
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
      <h4>orden de compra</h4>
      <p class=\"detailbox-items\">Total items:<span class=\"detailbox-content\">  {{cart_counter}}</span></p>
      <p class=\"detailbox-items\">costo:<span class=\"detailbox-content\" > RD\${{ cart_total|number_format}}</span></p>
      <p class=\"detailbox-items\">costo de envio:<span class=\"detailbox-content\"> RD\$90</span></p>
      <p class=\"detailbox-items\">costo total:<span class=\"detailbox-content\"> RD\${{ cart_total_envio|number_format}}</span></p>
      <a {% if cart_total < 1500 %} data-toggle=\"modal\" data-target=\"#consumo_minimo\" {% else %} href=\"{{\"checkout\"|page}}\" {% endif %} class=\"btn btn-theme col-md-12\">procesar orden</a>
    </div>
    <!-- Related Products -->
    <div class=\"row m-t-3\">
      <div class=\"col-xs-12\">
        <div class=\"title\"><span>PODRIA INTERESARTE</span></div>
        <div class=\"related-product-slider owl-controls-top-offset\">
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
                            <h6><a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">{{p.title}}</a></a></h6>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star-half-o\"></i>
                                <a href=\"#\">(5 reviews)</a>
                            </div>
                            <div style=\"background-color:#c1272d; margin-top:10px; padding:10px 2px 30px 5px\">
                                <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                    <div>RD\${{ p.price|number_format}}<span class=\"label-tags\"></span></div>
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
<!-- Lightbox -->", "/home/winelivery/themes/winelivery/pages/carrito.htm", "");
    }
}
