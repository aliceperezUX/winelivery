<?php

/* /home/winelivery/themes/winelivery/pages/productos.htm */
class __TwigTemplate_be0bb8a85d0fa4f12e0a8786d9261318e4cca0dbf9e45cc06186c92bd7fb98f6 extends Twig_Template
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

        <!-- Filter Sidebar -->
        <div class=\"col-sm-3\">
          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Regi&oacute;n</span></div>
            <ul>
              <li>
                <select class=\"selectpicker\" data-width=\"100%\">
                  <option value=\"0\">All Options</option>
                  <option value=\"1\">Option 1</option>
                  <option value=\"2\">Option 2</option>
                  <option value=\"3\">Option 3</option>
                </select>
              </li>
            </ul>
          </div>
          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Price Range</span></div>
            <div id=\"range-value\">Range: <span id=\"min-price\"></span> - <span id=\"max-price\"></span></div>
            <input type=\"hidden\" name=\"min-price\" value=\"\">
            <input type=\"hidden\" name=\"max-price\" value=\"\">
            <div class=\"price-range\">
              <div id=\"price\"></div>
            </div>
          </div>
          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Ordenar por:</span></div>
            <ul>
              <li>
                <select class=\"selectpicker\" data-width=\"100%\">
                  <option selected value=\"1\">Precio Ascendente</option>
                  <option value=\"2\">Precio Descendente</option>
                </select>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Filter Sidebar -->

        <!-- Product List -->
        <div class=\"col-sm-9\">
          <div class=\"title\"><span>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country_title"]) ? $context["country_title"] : null), "name", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title", array()), "html", null, true);
        echo "</span></div>
          <!-- End Product Sorting Bar -->

          <!-- Collection -->
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_by_cat"]) ? $context["products_by_cat"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
            // line 50
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["pp"]);
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 51
                echo "              <div class=\"col-sm-4 col-lg-3 box-product-outer\">
                  <div class=\"box-product\">
                      <div class=\"img-wrapper\">
                          <a href=\"";
                // line 54
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
                echo "\">
                              <img alt=\"Product\" src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
                echo "\">
                          </a>
                          ";
                // line 57
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['p'] = $context["p"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("stock"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 58
                echo "                      </div>
                      <h6><a href=\"";
                // line 59
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
                      <div style=\"background-color:#c1272d; margin-top:10px; padding:10px 5px 30px 5px\">
                          <div style=\"color:#fff\" class=\"price col-lg-6 \">
                              <div>RD\$";
                // line 70
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
                echo " <span class=\"label-tags\"></span></div>
                          </div>
                          <div class=\"col-lg-6\">
                              ";
                // line 73
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['p'] = $context["p"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("botones"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 74
                echo "                          </div>
                      </div>
                  </div>
              </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "          <!-- End Collection -->
          <div class=\"col-xs-12 text-center\">
            <nav aria-label=\"Page navigation\">
              ";
        // line 83
        echo $this->getAttribute((isset($context["products_by_cat"]) ? $context["products_by_cat"] : null), "render", array());
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
        return "/home/winelivery/themes/winelivery/pages/productos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 83,  148 => 80,  142 => 79,  132 => 74,  127 => 73,  121 => 70,  105 => 59,  102 => 58,  97 => 57,  92 => 55,  88 => 54,  83 => 51,  78 => 50,  74 => 49,  65 => 45,  19 => 1,);
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

        <!-- Filter Sidebar -->
        <div class=\"col-sm-3\">
          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Regi&oacute;n</span></div>
            <ul>
              <li>
                <select class=\"selectpicker\" data-width=\"100%\">
                  <option value=\"0\">All Options</option>
                  <option value=\"1\">Option 1</option>
                  <option value=\"2\">Option 2</option>
                  <option value=\"3\">Option 3</option>
                </select>
              </li>
            </ul>
          </div>
          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Price Range</span></div>
            <div id=\"range-value\">Range: <span id=\"min-price\"></span> - <span id=\"max-price\"></span></div>
            <input type=\"hidden\" name=\"min-price\" value=\"\">
            <input type=\"hidden\" name=\"max-price\" value=\"\">
            <div class=\"price-range\">
              <div id=\"price\"></div>
            </div>
          </div>
          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Ordenar por:</span></div>
            <ul>
              <li>
                <select class=\"selectpicker\" data-width=\"100%\">
                  <option selected value=\"1\">Precio Ascendente</option>
                  <option value=\"2\">Precio Descendente</option>
                </select>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Filter Sidebar -->

        <!-- Product List -->
        <div class=\"col-sm-9\">
          <div class=\"title\"><span>{{country_title.name}} / {{category.title}}</span></div>
          <!-- End Product Sorting Bar -->

          <!-- Collection -->
          {% for pp in products_by_cat %}
          {% for p in pp%}
              <div class=\"col-sm-4 col-lg-3 box-product-outer\">
                  <div class=\"box-product\">
                      <div class=\"img-wrapper\">
                          <a href=\"{{\"producto-detalle\"|page({id:p.id})}}\">
                              <img alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
                          </a>
                          {% partial \"stock\" p = p %}
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
                      <div style=\"background-color:#c1272d; margin-top:10px; padding:10px 5px 30px 5px\">
                          <div style=\"color:#fff\" class=\"price col-lg-6 \">
                              <div>RD\${{p.price|number_format}} <span class=\"label-tags\"></span></div>
                          </div>
                          <div class=\"col-lg-6\">
                              {% partial \"botones\" p = p %}
                          </div>
                      </div>
                  </div>
              </div>
          {% endfor %}
          {% endfor %}
          <!-- End Collection -->
          <div class=\"col-xs-12 text-center\">
            <nav aria-label=\"Page navigation\">
              {{ products_by_cat.render|raw }}
            </nav>
          </div>
        </div>
        <!-- End Product List -->

      </div>
    </div>
    <!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/productos.htm", "");
    }
}
