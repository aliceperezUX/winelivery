<?php

/* /var/www/html/themes/winelivery/pages/productos.htm */
class __TwigTemplate_68fe8262b9afd8d26c4852d99783d09eca4dbe4565f622aae9f32c0546d5e262 extends Twig_Template
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
          ";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "category", array()) != 3)) {
            // line 7
            echo "          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Regi&oacute;n</span></div>
            <ul>
              <li>
                <select id=\"regionFilter\" class=\"selectpicker\" data-width=\"100%\">
                  <option value=\"0\">Todas las Regiones</option>
                  ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 14
                echo "                      <option ";
                if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "region", array()) == $this->getAttribute($context["r"], "id", array()))) {
                    echo " selected ";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "title", array()), "html", null, true);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                </select>
              </li>
            </ul>
          </div>
          ";
        }
        // line 21
        echo "          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Rango de Precio</span></div>
            <ul>
              <li>
                <select id=\"priceRangeFilter\" class=\"selectpicker\" data-width=\"100%\">
                  <option value=\"0\">Todos los Precios</option>
                  <option value=\"?desde=1&hasta=500\">RD\$1 - RD\$500</option>
                  <option value=\"?desde=501&hasta=1000\">RD\$501 - RD\$1,000</option>
                  <option value=\"?desde=1001&hasta=2000\">RD\$1,001 - RD\$2,000</option>
                  <option value=\"?desde=2001&hasta=3000\">RD\$2,001- RD\$3,000</option>
                  <option value=\"?desde=3001&hasta=4000\">RD\$3,001- RD\$4,000</option>
                  <option value=\"?desde=4001&hasta=5000\">RD\$4,001- RD\$5,000</option>
                   <option value=\"?desde=5001&hasta=100000\">RD\$5,001 +</option>
                </select>
              </li>
            </ul>
          </div>
          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Ordenar por:</span></div>
            <ul>
              <li>
                <select id=\"priceFilter\" class=\"selectpicker\" data-width=\"100%\">
                  <option ";
        // line 43
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "ASC")) {
            echo " selected ";
        }
        echo " value=\"ASC\">Precio Ascendente</option>
                  <option ";
        // line 44
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "DESC")) {
            echo " selected ";
        }
        echo " value=\"DESC\">Precio Descendente</option>
                </select>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Filter Sidebar -->

        <!-- Product List -->
        <div class=\"col-sm-9\">
          <div class=\"title\"><span>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country_title"]) ? $context["country_title"] : null), "name", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title", array()), "html", null, true);
        echo "</span></div>
          <!-- End Product Sorting Bar -->

          <!-- Collection -->
          ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_by_cat"]) ? $context["products_by_cat"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
            // line 59
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["pp"]);
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 60
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 61
                    echo "                ";
                    if (($this->getAttribute($context["r"], "id", array()) == $this->getAttribute($context["p"], "region_id", array()))) {
                        // line 62
                        echo "                    <div class=\"col-sm-4 col-lg-3 box-product-outer box-product-fixed\">
                      <div class=\"box-product\">
                          <div class=\"img-wrapper\">
                              <a href=\"";
                        // line 65
                        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
                        echo "\">
                                  <img alt=\"Product\" src=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
                        echo "\">
                              </a>
                              ";
                        // line 68
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['p'] = $context["p"]                        ;
                        echo $this->env->getExtension('CMS')->partialFunction("stock"                        , $context['__cms_partial_params']                        );
                        unset($context['__cms_partial_params']);
                        // line 69
                        echo "                          </div>
                          <div class=\"name-box\"><h6><a href=\"";
                        // line 70
                        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
                        echo "</a></h6></div>
                          <div class=\"rating\">
                              ";
                        // line 72
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["p"], "total_stars", array())));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 73
                            echo "                                    <i class=\"fa fa-star\"></i>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 75
                        echo "                                ";
                        if (($this->getAttribute($context["p"], "total_stars", array()) < 5)) {
                            // line 76
                            echo "                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["p"], "total_stars", array()), (5 - 1)));
                            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                                // line 77
                                echo "                                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 79
                            echo "                                ";
                        }
                        // line 80
                        echo "                                <a href=\"#\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
                        echo " reviews)</a>
                          </div>
                          <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\$";
                        // line 84
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
                        echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
                        // line 87
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['p'] = $context["p"]                        ;
                        echo $this->env->getExtension('CMS')->partialFunction("botones"                        , $context['__cms_partial_params']                        );
                        unset($context['__cms_partial_params']);
                        // line 88
                        echo "                            </div>
                        </div>
                      </div>
                    </div>
                ";
                    }
                    // line 93
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "          <!-- End Collection -->
          <div class=\"col-xs-12 text-center\">
            <nav aria-label=\"Page navigation\">
              ";
        // line 99
        echo $this->getAttribute((isset($context["products_by_cat"]) ? $context["products_by_cat"] : null), "render", array());
        echo "
            </nav>
          </div>
        </div>
        <!-- End Product List -->

      </div>
    </div>
    <!-- End Main Content -->
";
        // line 108
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 109
        echo "<script>
setTimeout(function(){
  \$('#regionFilter').on('change', function() {
    var value = this.value;
    if(value === 0){value = \"\"}
    location.href='/productos/";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "country", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "category", array()), "html", null, true);
        echo "/'+value;
    })
    \$('#priceFilter').on('change', function() {
        location.href='/productos/";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "country", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "category", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "region", array()), "html", null, true);
        echo "?order='+this.value;
    })
    \$('#priceRangeFilter').on('change', function() {
        location.href='/productos/";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "country", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "category", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "region", array()), "html", null, true);
        echo "'+this.value;
    })
}, 1000);
</script>
";
        // line 108
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/productos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 108,  279 => 120,  269 => 117,  261 => 114,  254 => 109,  252 => 108,  240 => 99,  235 => 96,  229 => 95,  223 => 94,  217 => 93,  210 => 88,  205 => 87,  199 => 84,  191 => 80,  188 => 79,  181 => 77,  176 => 76,  173 => 75,  166 => 73,  162 => 72,  155 => 70,  152 => 69,  147 => 68,  142 => 66,  138 => 65,  133 => 62,  130 => 61,  125 => 60,  120 => 59,  116 => 58,  107 => 54,  92 => 44,  86 => 43,  62 => 21,  55 => 16,  40 => 14,  36 => 13,  28 => 7,  26 => 6,  19 => 1,);
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
          {% if this.param.category != 3 %}
          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Regi&oacute;n</span></div>
            <ul>
              <li>
                <select id=\"regionFilter\" class=\"selectpicker\" data-width=\"100%\">
                  <option value=\"0\">Todas las Regiones</option>
                  {% for r in regions %}
                      <option {% if this.param.region == r.id %} selected {% endif %} value=\"{{r.id}}\">{{r.title}}</option>
                  {% endfor %}
                </select>
              </li>
            </ul>
          </div>
          {% endif%}
          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Rango de Precio</span></div>
            <ul>
              <li>
                <select id=\"priceRangeFilter\" class=\"selectpicker\" data-width=\"100%\">
                  <option value=\"0\">Todos los Precios</option>
                  <option value=\"?desde=1&hasta=500\">RD\$1 - RD\$500</option>
                  <option value=\"?desde=501&hasta=1000\">RD\$501 - RD\$1,000</option>
                  <option value=\"?desde=1001&hasta=2000\">RD\$1,001 - RD\$2,000</option>
                  <option value=\"?desde=2001&hasta=3000\">RD\$2,001- RD\$3,000</option>
                  <option value=\"?desde=3001&hasta=4000\">RD\$3,001- RD\$4,000</option>
                  <option value=\"?desde=4001&hasta=5000\">RD\$4,001- RD\$5,000</option>
                   <option value=\"?desde=5001&hasta=100000\">RD\$5,001 +</option>
                </select>
              </li>
            </ul>
          </div>
          <div class=\"filter-sidebar\">
            <div class=\"title\"><span>Ordenar por:</span></div>
            <ul>
              <li>
                <select id=\"priceFilter\" class=\"selectpicker\" data-width=\"100%\">
                  <option {% if orderBy == \"ASC\" %} selected {% endif %} value=\"ASC\">Precio Ascendente</option>
                  <option {% if orderBy == \"DESC\" %} selected {% endif %} value=\"DESC\">Precio Descendente</option>
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
                {% for r in regions %}
                {% if r.id == p.region_id %}
                    <div class=\"col-sm-4 col-lg-3 box-product-outer box-product-fixed\">
                      <div class=\"box-product\">
                          <div class=\"img-wrapper\">
                              <a href=\"{{\"producto-detalle\"|page({id:p.id})}}\">
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
                {% endif %}
                {% endfor %}
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
    <!-- End Main Content -->
{% put scripts %}
<script>
setTimeout(function(){
  \$('#regionFilter').on('change', function() {
    var value = this.value;
    if(value === 0){value = \"\"}
    location.href='/productos/{{this.param.country}}/{{this.param.category}}/'+value;
    })
    \$('#priceFilter').on('change', function() {
        location.href='/productos/{{this.param.country}}/{{this.param.category}}/{{this.param.region}}?order='+this.value;
    })
    \$('#priceRangeFilter').on('change', function() {
        location.href='/productos/{{this.param.country}}/{{this.param.category}}/{{this.param.region}}'+this.value;
    })
}, 1000);
</script>
{% endput %}", "/var/www/html/themes/winelivery/pages/productos.htm", "");
    }
}
