<?php

/* /home/winelivery/themes/winelivery/pages/inicio.htm */
class __TwigTemplate_f746ab97a14571a5b48a9fea1799755696550582724e6450f0e1365041989329 extends Twig_Template
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
        echo "<!-- Full Slider -->
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"home-slider\" style=\"position:relative\">
            <div class=\"item\">
                <a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("productos", array("cat" => 1, "reg" => 2));
        echo "\"><img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/demo/portada.jpg");
        echo "\" alt=\"Slider\"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Full Slider -->

<!-- Main Content -->
<div class=\"container m-t-2\">
    <div class=\"row\">

        <!-- New Arrivals & Best Selling -->
        <div style=\"margin-top:50px\" class=\"col-md-3 m-b-1\">
            <div class=\"owl-controls-top-offset m-b-2\">
                <div class=\"box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 0, array()), "url", array()), "html", null, true);
        echo "\">
                                <img alt=\"Product\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 0, array()), "featured_image", array()), "Path", array()), "html", null, true);
        echo "\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"owl-controls-top-offset m-b-2\">
                <div class=\"box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 1, array()), "url", array()), "html", null, true);
        echo "\">
                                <img alt=\"Product\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 1, array()), "featured_image", array()), "Path", array()), "html", null, true);
        echo "\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End New Arrivals & Best Selling -->

        <div class=\"clearfix visible-sm visible-xs\"></div>

        <div style=\"margin-top:50px;\" class=\"col-md-9\">

            <!-- Featured -->
            <div class=\"title\"><span>NUEVOS EN LA BODEGA</span></div>
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recentProducts"]) ? $context["recentProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 51
            echo "                <div class=\"col-sm-4 col-lg-3 box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"";
            // line 54
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                <img class=\"wine-box\" alt=\"Product\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                            </a>
                        </div>
                        <h6><a href=\"";
            // line 58
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
            // line 69
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
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
        // line 79
        echo "    
            <!-- End Featured -->

            <div class=\"clearfix visible-sm visible-xs\"></div>

            <!-- Collection -->
            <div class=\"title\"><span>OFERTAS ESPECIALES</span></div>
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialProducts"]) ? $context["specialProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 87
            echo "                <div class=\"col-sm-4 col-lg-3 box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"";
            // line 90
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                <img class=\"wine-box\" alt=\"Product\" src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                            </a>
                        </div>
                        <h6><a href=\"";
            // line 94
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
            // line 105
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
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
        // line 115
        echo "            <!-- End Collection -->

        </div>

    </div>
    <div class=\"title\"><span>VINO DEL MES</span></div>
    <div class=\"col-md-9 col-sm-6\" style=\"margin-top:20px;border:5px solid #000\">
        <div class=\"col-md-2 image-wrapper\">
            <img alt=\"Product\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "featured_image", array()), "thumb", array(0 => 350, 1 => 250), "method"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-md-10\" style=\"padding:20px\">
            <h3>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "title", array()), "html", null, true);
        echo "</h3>
            <p style=\"padding-top:10px\">";
        // line 127
        echo $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "description", array());
        echo "</p>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-half-o\"></i>
                <a href=\"#\">(5 reviews)</a>
            </div>
            <p style=\"padding-top:10px; font-style:Italic\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\". Alice Perez Villanueva</p>
            <div class=\"col-md-4\" style=\"background-color:#c1272d; margin-top:10px; padding:10px 5px 10px 5px; float:right\">
                <div style=\"color:#fff\" class=\"price col-lg-6 \">
                    <div>RD\$";
        // line 139
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "price", array())), "html", null, true);
        echo "<span class=\"label-tags\"></span></div>
                </div>
                <div class=\"col-lg-6\">
                    <a href=\"";
        // line 142
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("wishlist");
        echo "\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                    <a href=\"";
        // line 143
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("cart");
        echo "\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3 col-sm-6 m-b-1\">
        <div class=\"owl-controls-top-offset m-b-2\">
            <div class=\"box-product-outer\">
                <div class=\"box-product\">
                    <div class=\"img-wrapper\">
                        <a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 2, array()), "url", array()), "html", null, true);
        echo "\">
                            <img alt=\"Product\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 2, array()), "featured_image", array()), "Path", array()), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Related Products -->
    <div class=\"row m-t-3\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>Vinos Recomendados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset\">
                ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["randomProducts"]) ? $context["randomProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 170
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"detail.html\">
                                    <img alt=\"Product\" src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                <div class=\"tags\">
                                    <span class=\"label-tags\"><span class=\"label label-danger arrowed\">-10%</span></span>
                                </div>
                            </div>
                            <h6><a href=\"";
            // line 180
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
            // line 191
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo "<span class=\"label-tags\"></span></div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <a href=\"#\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                                    <a href=\"#\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "            </div>
        </div>
    </div>
</div>
<!-- End Related Products -->
</div>

</div>
<!-- End Main Content -->";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/pages/inicio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 201,  313 => 191,  297 => 180,  288 => 174,  282 => 170,  278 => 169,  261 => 155,  257 => 154,  243 => 143,  239 => 142,  233 => 139,  218 => 127,  214 => 126,  208 => 123,  198 => 115,  182 => 105,  166 => 94,  160 => 91,  156 => 90,  151 => 87,  147 => 86,  138 => 79,  122 => 69,  106 => 58,  100 => 55,  96 => 54,  91 => 51,  87 => 50,  69 => 35,  65 => 34,  52 => 24,  48 => 23,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Full Slider -->
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"home-slider\" style=\"position:relative\">
            <div class=\"item\">
                <a href=\"{{\"productos\"|page({cat:1,reg:2})}}\"><img src=\"{{\"assets/images/demo/portada.jpg\"|theme}}\" alt=\"Slider\"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Full Slider -->

<!-- Main Content -->
<div class=\"container m-t-2\">
    <div class=\"row\">

        <!-- New Arrivals & Best Selling -->
        <div style=\"margin-top:50px\" class=\"col-md-3 m-b-1\">
            <div class=\"owl-controls-top-offset m-b-2\">
                <div class=\"box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"{{advertisements.0.url}}\">
                                <img alt=\"Product\" src=\"{{advertisements.0.featured_image.Path}}\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"owl-controls-top-offset m-b-2\">
                <div class=\"box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"{{advertisements.1.url}}\">
                                <img alt=\"Product\" src=\"{{advertisements.1.featured_image.Path}}\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End New Arrivals & Best Selling -->

        <div class=\"clearfix visible-sm visible-xs\"></div>

        <div style=\"margin-top:50px;\" class=\"col-md-9\">

            <!-- Featured -->
            <div class=\"title\"><span>NUEVOS EN LA BODEGA</span></div>
            {% for p in recentProducts %}
                <div class=\"col-sm-4 col-lg-3 box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">
                                <img class=\"wine-box\" alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
                            </a>
                        </div>
                        <h6><a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">{{p.title}}</a></h6>
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
                                <div>RD\${{ p.price|number_format}} <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                <a href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                                <a href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
    
            <!-- End Featured -->

            <div class=\"clearfix visible-sm visible-xs\"></div>

            <!-- Collection -->
            <div class=\"title\"><span>OFERTAS ESPECIALES</span></div>
            {% for p in specialProducts %}
                <div class=\"col-sm-4 col-lg-3 box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">
                                <img class=\"wine-box\" alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
                            </a>
                        </div>
                        <h6><a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">{{p.title}}</a></h6>
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
                                <div>RD\${{ p.price|number_format}} <span class=\"label-tags\"></span></div>
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

        </div>

    </div>
    <div class=\"title\"><span>VINO DEL MES</span></div>
    <div class=\"col-md-9 col-sm-6\" style=\"margin-top:20px;border:5px solid #000\">
        <div class=\"col-md-2 image-wrapper\">
            <img alt=\"Product\" src=\"{{mwine.featured_image.thumb(350,250)}}\">
        </div>
        <div class=\"col-md-10\" style=\"padding:20px\">
            <h3>{{mwine.title}}</h3>
            <p style=\"padding-top:10px\">{{mwine.description|raw}}</p>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-half-o\"></i>
                <a href=\"#\">(5 reviews)</a>
            </div>
            <p style=\"padding-top:10px; font-style:Italic\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\". Alice Perez Villanueva</p>
            <div class=\"col-md-4\" style=\"background-color:#c1272d; margin-top:10px; padding:10px 5px 10px 5px; float:right\">
                <div style=\"color:#fff\" class=\"price col-lg-6 \">
                    <div>RD\${{ mwine.price|number_format}}<span class=\"label-tags\"></span></div>
                </div>
                <div class=\"col-lg-6\">
                    <a href=\"{{\"wishlist\"|page}}\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                    <a href=\"{{\"cart\"|page}}\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3 col-sm-6 m-b-1\">
        <div class=\"owl-controls-top-offset m-b-2\">
            <div class=\"box-product-outer\">
                <div class=\"box-product\">
                    <div class=\"img-wrapper\">
                        <a href=\"{{advertisements.2.url}}\">
                            <img alt=\"Product\" src=\"{{advertisements.2.featured_image.Path}}\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Related Products -->
    <div class=\"row m-t-3\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>Vinos Recomendados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset\">
                {% for p in randomProducts %}
                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"detail.html\">
                                    <img alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
                                </a>
                                <div class=\"tags\">
                                    <span class=\"label-tags\"><span class=\"label label-danger arrowed\">-10%</span></span>
                                </div>
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
                                    <a href=\"#\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                                    <a href=\"#\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
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
<!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/inicio.htm", "");
    }
}
