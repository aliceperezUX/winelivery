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
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
          <!-- Indicators -->
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class=\"carousel-inner\" role=\"listbox\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slideshows"]) ? $context["slideshows"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 15
            echo "            <div class=\"item ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo " active ";
            }
            echo "\">
              <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "images", array()), "getPath", array()), "html", null, true);
            echo "\" alt=\"...\">
              <div class=\"carousel-caption\">
                   ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "caption", array()), "html", null, true);
            echo "
              </div>
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "          </div>

          <!-- Controls -->
          <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
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
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 0, array()), "url", array()), "html", null, true);
        echo "\">
                                <img alt=\"Product\" src=\"";
        // line 49
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
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 1, array()), "url", array()), "html", null, true);
        echo "\">
                                <img alt=\"Product\" src=\"";
        // line 60
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recentProducts"]) ? $context["recentProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 76
            echo "                <div class=\"col-sm-4 col-lg-3 box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"";
            // line 79
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                <img class=\"wine-box wine-thumbnail\" alt=\"Product\" src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                            </a>
                            ";
            // line 82
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("stock"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 83
            echo "                        </div>
                        <h6><a href=\"";
            // line 84
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
            // line 95
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
            // line 98
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 99
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    
            <!-- End Featured -->

            <div class=\"clearfix visible-sm visible-xs\"></div>

            <!-- Collection -->
            <div class=\"title\"><span>OFERTAS ESPECIALES</span></div>
            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialProducts"]) ? $context["specialProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 112
            echo "                <div class=\"col-sm-4 col-lg-3 box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"";
            // line 115
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                <img class=\"wine-box\" alt=\"Product\" src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                            </a>
                        </div>
                        <h6><a href=\"";
            // line 119
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
            // line 130
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
            // line 133
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 134
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "            <!-- End Collection -->

        </div>

    </div>
    <div class=\"title\"><span>VINO DEL MES</span></div>
    <div class=\"col-md-9 col-sm-6\" style=\"margin-top:20px;border:5px solid #000\">
        <div class=\"col-md-2 image-wrapper\">
            <img alt=\"Product\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "featured_image", array()), "thumb", array(0 => 350, 1 => 250), "method"), "html", null, true);
        echo "\">
        </div>
        ";
        // line 149
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['p'] = (isset($context["mwine"]) ? $context["mwine"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("stock"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 150
        echo "        <div class=\"col-md-10\" style=\"padding:20px\">
            <h3>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "title", array()), "html", null, true);
        echo "</h3>
            <p style=\"padding-top:10px\">";
        // line 152
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
        // line 164
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "price", array())), "html", null, true);
        echo "<span class=\"label-tags\"></span></div>
                </div>
                <div class=\"col-lg-6\">
                    ";
        // line 167
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            // line 168
            echo "                    <a onClick=\"addToWishlist('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "id", array()), "html", null, true);
            echo "');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                    <a onClick=\"addToCart('";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "id", array()), "html", null, true);
            echo "');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                    ";
        } else {
            // line 171
            echo "                    <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                    <a href=\"";
            // line 172
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                    ";
        }
        // line 174
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
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 2, array()), "url", array()), "html", null, true);
        echo "\">
                            <img alt=\"Product\" src=\"";
        // line 185
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
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["randomProducts"]) ? $context["randomProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 200
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
            // line 203
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                    <img alt=\"Product\" src=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                ";
            // line 206
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("stock"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 207
            echo "                            </div>
                            <h6><a href=\"";
            // line 208
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
            // line 219
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo "<span class=\"label-tags\"></span></div>
                                </div>
                                <div class=\"col-lg-6\">
                                    ";
            // line 222
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 223
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
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
        return array (  442 => 228,  432 => 223,  427 => 222,  421 => 219,  405 => 208,  402 => 207,  397 => 206,  392 => 204,  388 => 203,  383 => 200,  379 => 199,  362 => 185,  358 => 184,  346 => 174,  341 => 172,  336 => 171,  331 => 169,  326 => 168,  324 => 167,  318 => 164,  303 => 152,  299 => 151,  296 => 150,  291 => 149,  286 => 147,  276 => 139,  266 => 134,  261 => 133,  255 => 130,  239 => 119,  233 => 116,  229 => 115,  224 => 112,  220 => 111,  211 => 104,  201 => 99,  196 => 98,  190 => 95,  174 => 84,  171 => 83,  166 => 82,  161 => 80,  157 => 79,  152 => 76,  148 => 75,  130 => 60,  126 => 59,  113 => 49,  109 => 48,  81 => 22,  63 => 18,  58 => 16,  51 => 15,  34 => 14,  19 => 1,);
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
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
          <!-- Indicators -->
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class=\"carousel-inner\" role=\"listbox\">
            {% for s in slideshows %}
            <div class=\"item {% if loop.index == 1 %} active {% endif %}\">
              <img src=\"{{s.images.getPath}}\" alt=\"...\">
              <div class=\"carousel-caption\">
                   {{s.caption}}
              </div>
            </div>
            {% endfor %}
          </div>

          <!-- Controls -->
          <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
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
                            {% partial \"stock\" p = p %}
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
        {% partial \"stock\" p = mwine %}
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
                                {% partial \"stock\" p = p %}
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
