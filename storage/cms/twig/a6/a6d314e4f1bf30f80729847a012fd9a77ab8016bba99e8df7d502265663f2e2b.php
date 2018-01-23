<?php

/* /var/www/html/themes/winelivery/pages/busqueda.htm */
class __TwigTemplate_20a6d8d25217a400bfd047c7ea027004d6b71593d39e80abfa5b57f8fd9c9587 extends Twig_Template
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
    <!-- Product List -->
    <div class=\"col-sm-12\">
      <div class=\"title\"><span>Coincidencias de busqueda</span></div>
      <!-- End Product Sorting Bar -->

      <!-- Collection -->
      ";
        // line 10
        if ( !twig_test_empty((isset($context["products_search"]) ? $context["products_search"] : null))) {
            // line 11
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products_search"]) ? $context["products_search"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 12
                echo "          <div class=\"col-sm-4 col-lg-2 box-product-outer\">
              <div class=\"box-product\">
                  <div class=\"img-wrapper\">
                      <a href=\"";
                // line 15
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
                echo "\">
                          <img alt=\"Product\" src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
                echo "\">
                      </a>
                      ";
                // line 18
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['p'] = $context["p"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("stock"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 19
                echo "                  </div>
                  <h6><a href=\"";
                // line 20
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
                echo "</a></h6>
                  <div class=\"rating\">
                    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["p"], "total_stars", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 23
                    echo "                        <i class=\"fa fa-star\"></i>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                    ";
                if (($this->getAttribute($context["p"], "total_stars", array()) < 5)) {
                    // line 26
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["p"], "total_stars", array()), (5 - 1)));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 27
                        echo "                        <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                    ";
                }
                // line 30
                echo "                     <a href=\"#\">(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
                echo " reviews)</a>
                  </div>
                  <div style=\"background-color:#c1272d; margin-top:10px; padding:10px 5px 30px 0px\">
                      <div style=\"color:#fff\" class=\"price col-lg-6 \">
                          <div>RD\$";
                // line 34
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
                echo "<span class=\"label-tags\"></span></div>
                      </div>
                      <div class=\"col-lg-6\">
                          <a onClick=\"addToWishlist('";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
                echo "');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                          <a onClick=\"addToCart('";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
                echo "');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      
      ";
        } else {
            // line 46
            echo "            <div class=\"col-md-12\" style=\"text-align: center\"><img style=\"width: 600px\" src=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/search.png");
            echo "\"></div>
    ";
        }
        // line 48
        echo "      <!-- End Collection -->
      <div class=\"col-xs-12 text-center\">
        <nav aria-label=\"Page navigation\">
          ";
        // line 51
        echo $this->getAttribute((isset($context["products_search"]) ? $context["products_search"] : null), "render", array());
        echo "
        </nav>
      </div>
    </div>
    <!-- End Product List -->

  </div>
</div>
<!-- End Main Content -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/busqueda.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 51,  135 => 48,  129 => 46,  125 => 44,  113 => 38,  109 => 37,  103 => 34,  95 => 30,  92 => 29,  85 => 27,  80 => 26,  77 => 25,  70 => 23,  66 => 22,  59 => 20,  56 => 19,  51 => 18,  46 => 16,  42 => 15,  37 => 12,  32 => 11,  30 => 10,  19 => 1,);
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
    <!-- Product List -->
    <div class=\"col-sm-12\">
      <div class=\"title\"><span>Coincidencias de busqueda</span></div>
      <!-- End Product Sorting Bar -->

      <!-- Collection -->
      {% if products_search is not empty %}
      {% for p in products_search %}
          <div class=\"col-sm-4 col-lg-2 box-product-outer\">
              <div class=\"box-product\">
                  <div class=\"img-wrapper\">
                      <a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">
                          <img alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
                      </a>
                      {% partial \"stock\" p = p %}
                  </div>
                  <h6><a href=\"{{\"producto-detalle\"|page({id:p.id})}}\">{{p.title}}</a></h6>
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
                  <div style=\"background-color:#c1272d; margin-top:10px; padding:10px 5px 30px 0px\">
                      <div style=\"color:#fff\" class=\"price col-lg-6 \">
                          <div>RD\${{ p.price|number_format}}<span class=\"label-tags\"></span></div>
                      </div>
                      <div class=\"col-lg-6\">
                          <a onClick=\"addToWishlist('{{p.id}}');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                          <a onClick=\"addToCart('{{p.id}}');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      {% endfor %}
      
      {% else %}
            <div class=\"col-md-12\" style=\"text-align: center\"><img style=\"width: 600px\" src=\"{{\"assets/images/search.png\"|theme}}\"></div>
    {% endif %}
      <!-- End Collection -->
      <div class=\"col-xs-12 text-center\">
        <nav aria-label=\"Page navigation\">
          {{ products_search.render|raw }}
        </nav>
      </div>
    </div>
    <!-- End Product List -->

  </div>
</div>
<!-- End Main Content -->", "/var/www/html/themes/winelivery/pages/busqueda.htm", "");
    }
}
