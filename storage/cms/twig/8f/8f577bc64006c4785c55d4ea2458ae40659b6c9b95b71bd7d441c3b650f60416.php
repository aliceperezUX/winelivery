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
                <select id=\"regionFilter\" class=\"selectpicker\" data-width=\"100%\">
                  <option value=\"0\">Todas las Regiones</option>
                  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 13
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
        // line 15
        echo "                </select>
              </li>
            </ul>
          </div>
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
                  <option ";
        // line 41
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "ASC")) {
            echo " selected ";
        }
        echo " value=\"ASC\">Precio Ascendente</option>
                  <option ";
        // line 42
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
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country_title"]) ? $context["country_title"] : null), "name", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title", array()), "html", null, true);
        echo "</span></div>
          <!-- End Product Sorting Bar -->

          <!-- Collection -->
          ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_by_cat"]) ? $context["products_by_cat"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
            // line 57
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["pp"]);
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 58
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 59
                    echo "                ";
                    if (($this->getAttribute($context["r"], "id", array()) == $this->getAttribute($context["p"], "region_id", array()))) {
                        // line 60
                        echo "                    <div class=\"col-sm-4 col-lg-3 box-product-outer box-product-fixed\">
                      <div class=\"box-product\">
                          <div class=\"img-wrapper\">
                              <a href=\"";
                        // line 63
                        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
                        echo "\">
                                  <img alt=\"Product\" src=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
                        echo "\">
                              </a>
                              ";
                        // line 66
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['p'] = $context["p"]                        ;
                        echo $this->env->getExtension('CMS')->partialFunction("stock"                        , $context['__cms_partial_params']                        );
                        unset($context['__cms_partial_params']);
                        // line 67
                        echo "                          </div>
                          <div class=\"name-box\"><h6><a href=\"";
                        // line 68
                        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
                        echo "</a></h6></div>
                          <div class=\"rating\">
                              ";
                        // line 70
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["p"], "total_stars", array())));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 71
                            echo "                                    <i class=\"fa fa-star\"></i>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 73
                        echo "                                ";
                        if (($this->getAttribute($context["p"], "total_stars", array()) < 5)) {
                            // line 74
                            echo "                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["p"], "total_stars", array()), (5 - 1)));
                            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                                // line 75
                                echo "                                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 77
                            echo "                                ";
                        }
                        // line 78
                        echo "                                <a href=\"#\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
                        echo " reviews)</a>
                          </div>
                          <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\$";
                        // line 82
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
                        echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
                        // line 85
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['p'] = $context["p"]                        ;
                        echo $this->env->getExtension('CMS')->partialFunction("botones"                        , $context['__cms_partial_params']                        );
                        unset($context['__cms_partial_params']);
                        // line 86
                        echo "                            </div>
                        </div>
                      </div>
                    </div>
                ";
                    }
                    // line 91
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "          <!-- End Collection -->
          <div class=\"col-xs-12 text-center\">
            <nav aria-label=\"Page navigation\">
              ";
        // line 97
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
        // line 106
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 107
        echo "<script>
\$('#regionFilter').on('change', function() {
    var value = this.value;
    if(value === 0){value = \"\"}
    location.href='/productos/";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "country", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "category", array()), "html", null, true);
        echo "/'+value;
})
\$('#priceFilter').on('change', function() {
    location.href='/productos/";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "country", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "category", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "region", array()), "html", null, true);
        echo "?order='+this.value;
})
\$('#priceRangeFilter').on('change', function() {
    location.href='/productos/";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "country", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "category", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "region", array()), "html", null, true);
        echo "'+this.value;
})
</script>
";
        // line 106
        echo $this->env->getExtension('CMS')->endBlock(true        );
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
        return array (  281 => 106,  271 => 117,  261 => 114,  253 => 111,  247 => 107,  245 => 106,  233 => 97,  228 => 94,  222 => 93,  216 => 92,  210 => 91,  203 => 86,  198 => 85,  192 => 82,  184 => 78,  181 => 77,  174 => 75,  169 => 74,  166 => 73,  159 => 71,  155 => 70,  148 => 68,  145 => 67,  140 => 66,  135 => 64,  131 => 63,  126 => 60,  123 => 59,  118 => 58,  113 => 57,  109 => 56,  100 => 52,  85 => 42,  79 => 41,  51 => 15,  36 => 13,  32 => 12,  19 => 1,);
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
                <select id=\"regionFilter\" class=\"selectpicker\" data-width=\"100%\">
                  <option value=\"0\">Todas las Regiones</option>
                  {% for r in regions %}
                      <option {% if this.param.region == r.id %} selected {% endif %} value=\"{{r.id}}\">{{r.title}}</option>
                  {% endfor %}
                </select>
              </li>
            </ul>
          </div>
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
</script>
{% endput %}", "/home/winelivery/themes/winelivery/pages/productos.htm", "");
    }
}
