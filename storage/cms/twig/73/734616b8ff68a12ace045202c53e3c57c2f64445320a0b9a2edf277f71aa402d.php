<?php

/* /home/winelivery/themes/winelivery/pages/busqueda.htm */
class __TwigTemplate_fdd017eed45580da35353fedee13ec10732d56e3dcc4dba336601032fcd77a4a extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_search"]) ? $context["products_search"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 11
            echo "          <div class=\"col-sm-4 col-lg-2 box-product-outer\">
              <div class=\"box-product\">
                  <div class=\"img-wrapper\">
                      <a href=\"detail.html\">
                          <img alt=\"Product\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                      </a>
                  </div>
                  <h6><a href=\"";
            // line 18
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a></h6>
                  <div class=\"rating\">
                      <i class=\"fa fa-star\"></i>
                      <i class=\"fa fa-star\"></i>
                      <i class=\"fa fa-star\"></i>
                      <i class=\"fa fa-star\"></i>
                      <i class=\"fa fa-star-half-o\"></i>
                      <a href=\"#\">(5 reviews)</a>
                  </div>
                  <div style=\"background-color:#c1272d; margin-top:10px; padding:10px 5px 30px 0px\">
                      <div style=\"color:#fff\" class=\"price col-lg-6 \">
                          <div>RD\$";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo "<span class=\"label-tags\"></span></div>
                      </div>
                      <div class=\"col-lg-6\">
                          <a href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                          <a href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "      <!-- End Collection -->
      <div class=\"col-xs-12 text-center\">
        <nav aria-label=\"Page navigation\">
          ";
        // line 42
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
        return "/home/winelivery/themes/winelivery/pages/busqueda.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 42,  78 => 39,  62 => 29,  46 => 18,  40 => 15,  34 => 11,  30 => 10,  19 => 1,);
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
      {% for p in products_search %}
          <div class=\"col-sm-4 col-lg-2 box-product-outer\">
              <div class=\"box-product\">
                  <div class=\"img-wrapper\">
                      <a href=\"detail.html\">
                          <img alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
                      </a>
                  </div>
                  <h6><a href=\"{{\"producto-detalle\"|page({id:p.id})}}\">{{p.title}}</a></h6>
                  <div class=\"rating\">
                      <i class=\"fa fa-star\"></i>
                      <i class=\"fa fa-star\"></i>
                      <i class=\"fa fa-star\"></i>
                      <i class=\"fa fa-star\"></i>
                      <i class=\"fa fa-star-half-o\"></i>
                      <a href=\"#\">(5 reviews)</a>
                  </div>
                  <div style=\"background-color:#c1272d; margin-top:10px; padding:10px 5px 30px 0px\">
                      <div style=\"color:#fff\" class=\"price col-lg-6 \">
                          <div>RD\${{ p.price|number_format}}<span class=\"label-tags\"></span></div>
                      </div>
                      <div class=\"col-lg-6\">
                          <a href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                          <a href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      {% endfor %}
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
<!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/busqueda.htm", "");
    }
}
