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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("productos", array("country" => 2, "category" => 1));
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
                                <img class=\"wine-box wine-thumbnail\" alt=\"Product\" src=\"";
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
                                ";
            // line 72
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 73
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    
            <!-- End Featured -->

            <div class=\"clearfix visible-sm visible-xs\"></div>

            <!-- Collection -->
            <div class=\"title\"><span>OFERTAS ESPECIALES</span></div>
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialProducts"]) ? $context["specialProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 86
            echo "                <div class=\"col-sm-4 col-lg-3 box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"";
            // line 89
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                <img class=\"wine-box\" alt=\"Product\" src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                            </a>
                        </div>
                        <h6><a href=\"";
            // line 93
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
            // line 104
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
            // line 107
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 108
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            <!-- End Collection -->

        </div>

    </div>
    <div class=\"title\"><span>VINO DEL MES</span></div>
    <div class=\"col-md-9 col-sm-6\" style=\"margin-top:20px;border:5px solid #000\">
        <div class=\"col-md-2 image-wrapper\">
            <img alt=\"Product\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "featured_image", array()), "thumb", array(0 => 350, 1 => 250), "method"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-md-10\" style=\"padding:20px\">
            <h3>";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "title", array()), "html", null, true);
        echo "</h3>
            <p style=\"padding-top:10px\">";
        // line 125
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
        // line 137
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "price", array())), "html", null, true);
        echo "<span class=\"label-tags\"></span></div>
                </div>
                <div class=\"col-lg-6\">
                    ";
        // line 140
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            // line 141
            echo "                    <a onClick=\"addToWishlist('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "id", array()), "html", null, true);
            echo "');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                    <a onClick=\"addToCart('";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "id", array()), "html", null, true);
            echo "');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                    ";
        } else {
            // line 144
            echo "                    <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                    <a href=\"";
            // line 145
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                    ";
        }
        // line 147
        echo "                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3 col-sm-6 m-b-1\">
        <div class=\"owl-controls-top-offset m-b-2\">
            <div class=\"box-product-outer\">
                <div class=\"box-product\">
                    <div class=\"img-wrapper\">
                        <a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 2, array()), "url", array()), "html", null, true);
        echo "\">
                            <img alt=\"Product\" src=\"";
        // line 158
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
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["randomProducts"]) ? $context["randomProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 173
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
            // line 176
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                    <img alt=\"Product\" src=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                <!-- <div class=\"tags\">
                                    <span class=\"label-tags\"><span class=\"label label-danger arrowed\">-10%</span></span>
                                </div> -->
                            </div>
                            <h6><a href=\"";
            // line 183
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
            // line 194
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo "<span class=\"label-tags\"></span></div>
                                </div>
                                <div class=\"col-lg-6\">
                                    ";
            // line 197
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 198
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
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
        return array (  363 => 203,  353 => 198,  348 => 197,  342 => 194,  326 => 183,  317 => 177,  313 => 176,  308 => 173,  304 => 172,  287 => 158,  283 => 157,  271 => 147,  266 => 145,  261 => 144,  256 => 142,  251 => 141,  249 => 140,  243 => 137,  228 => 125,  224 => 124,  218 => 121,  208 => 113,  198 => 108,  193 => 107,  187 => 104,  171 => 93,  165 => 90,  161 => 89,  156 => 86,  152 => 85,  143 => 78,  133 => 73,  128 => 72,  122 => 69,  106 => 58,  100 => 55,  96 => 54,  91 => 51,  87 => 50,  69 => 35,  65 => 34,  52 => 24,  48 => 23,  26 => 6,  19 => 1,);
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
                <a href=\"{{\"productos\"|page({country:2,category:1})}}\"><img src=\"{{\"assets/images/demo/portada.jpg\"|theme}}\" alt=\"Slider\"></a>
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
                                <img class=\"wine-box wine-thumbnail\" alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
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
                                {% partial \"botones\" p = p %}
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
                                {% partial \"botones\" p = p %}
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
                    {% if loggedIn %}
                    <a onClick=\"addToWishlist('{{mwine.id}}');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                    <a onClick=\"addToCart('{{mwine.id}}');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                    {% else %}
                    <a href=\"{{\"login\"|page}}\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                    <a href=\"{{\"login\"|page}}\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                    {% endif %}
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
<!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/inicio.htm", "");
    }
}
