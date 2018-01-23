<?php

/* /var/www/html/themes/winelivery/pages/inicio.htm */
class __TwigTemplate_8aec42615dc31b474904e2da9b019a68d54debc23ff663375ad02d72830a895b extends Twig_Template
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
              <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "url", array()), "html", null, true);
            echo "\">
              <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "images", array()), "getPath", array()), "html", null, true);
            echo "\" alt=\"...\">
              </a>
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
        // line 21
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
        <div style=\"margin-top:50px\" class=\"col-md-3  m-b-1\">
            <div class=\"col-sm-12 col-xs-6\">
                <div class=\"box-product-outer \">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a target=\"_blank\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 0, array()), "url", array()), "html", null, true);
        echo "\">
                                <img alt=\"Product\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 0, array()), "featured_image", array()), "Path", array()), "html", null, true);
        echo "\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 col-xs-6\">
                <div class=\"box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a target=\"_blank\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 1, array()), "url", array()), "html", null, true);
        echo "\">
                                <img alt=\"Product\" src=\"";
        // line 59
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
            <!--
            <div class=\"title\"><span>NUEVOS EN LA BODEGA</span></div>
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recentProducts"]) ? $context["recentProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 76
            echo "                <div class=\"col-sm-4 col-lg-3 box-product-outer box-product-fixed\">
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
                        <div class=\"name-box\"><h6><a href=\"";
            // line 84
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a></h6></div>
                        <div class=\"rating\">
                            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["p"], "total_stars", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 87
                echo "                                <i class=\"fa fa-star\"></i>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                            ";
            if (($this->getAttribute($context["p"], "total_stars", array()) < 5)) {
                // line 90
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["p"], "total_stars", array()), (5 - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 91
                    echo "                                <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                            ";
            }
            // line 94
            echo "                            <a href=\"#\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
            echo " reviews)</a>
                        </div>
                        <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\$";
            // line 98
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
            // line 101
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 102
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            -->
            <!-- End Featured -->

            <div class=\"clearfix visible-sm visible-xs\"></div>

            <!-- Collection -->
            <div class=\"title\"><span>OFERTAS ESPECIALES</span></div>
            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialProducts"]) ? $context["specialProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 115
            echo "                <div class=\"col-sm-4 col-lg-3 box-product-outer box-product-fixed\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"";
            // line 118
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                <img class=\"wine-box\" alt=\"Product\" src=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                            </a>
                        </div>
                        <div class=\"name-box\"><h6><a href=\"";
            // line 122
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a></h6></div>
                        <div class=\"rating\">
                            ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["p"], "total_stars", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 125
                echo "                                <i class=\"fa fa-star\"></i>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                            ";
            if (($this->getAttribute($context["p"], "total_stars", array()) < 5)) {
                // line 128
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["p"], "total_stars", array()), (5 - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 129
                    echo "                                <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                            ";
            }
            // line 132
            echo "                            <a href=\"#\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
            echo " reviews)</a>
                        </div>
                        <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\$";
            // line 136
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
            // line 139
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 140
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "            <!-- End Collection -->

        </div>

    </div>
    <div class=\"title\"><span>VINO DEL MES</span></div>
    <div class=\"col-md-9 col-sm-6\" style=\"margin-top:20px;border:5px solid #000\">
        <div class=\"col-md-2 image-wrapper\" style=\"width: 200px; text-align: center;\">
           <a href=\"";
        // line 153
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "id", array())));
        echo "\"><img style=\"width:230px; height: 300px\" alt=\"Product\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "featured_image", array()), "thumb", array(0 => 350, 1 => 250), "method"), "html", null, true);
        echo "\"></a>
        </div>
        ";
        // line 155
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['p'] = (isset($context["mwine"]) ? $context["mwine"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("stock"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 156
        echo "        <div class=\"col-md-8\" style=\"padding:20px 0px 20px 0px\">
            <h3><a href=\"";
        // line 157
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "id", array())));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "title", array()), "html", null, true);
        echo "</a></h3>
            <p style=\"padding-top:10px\">";
        // line 158
        echo $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "description", array());
        echo "</p>
            <div class=\"rating\">
                ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "total_stars", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 161
            echo "                    <i class=\"fa fa-star\"></i>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                ";
        if (($this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "total_stars", array()) < 5)) {
            // line 164
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "total_stars", array()), (5 - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 165
                echo "                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                ";
        }
        // line 168
        echo "                <a href=\"#\">(";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "comments", array()), "count", array()), "html", null, true);
        echo " reviews)</a>
            </div>
            <!-- <p style=\"padding-top:10px; font-style:Italic\">";
        // line 170
        echo $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "description", array());
        echo "</p> -->
            <div class=\"col-md-4\" style=\"background-color:#c1272d; margin-top:10px; padding:10px 5px 10px 5px; float:right\">
                <div style=\"color:#fff\" class=\"price col-lg-6 \">
                    <div>RD\$";
        // line 173
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "price", array())), "html", null, true);
        echo "<span class=\"label-tags\"></span></div>
                </div>
                <div class=\"col-lg-6\">
                    ";
        // line 176
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            // line 177
            echo "                    <a onClick=\"addToWishlist('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "id", array()), "html", null, true);
            echo "');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                    <a onClick=\"addToCart('";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mwine"]) ? $context["mwine"] : null), "id", array()), "html", null, true);
            echo "');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                    ";
        } else {
            // line 180
            echo "                    <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" data-toggle=\"tooltip\" title=\"Agregar a la lista de deseos\" class=\"wishlist\"><i style=\"color:#fff; padding-right:8px; font-size:16px\" class=\"fa fa-heart\"></i></a>
                    <a href=\"";
            // line 181
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>
                    ";
        }
        // line 183
        echo "                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3 col-sm-6 m-b-1\">
        <div class=\"owl-controls-top-offset m-b-2\">
            <div class=\"box-product-outer\">
                <div class=\"box-product\">
                    <div class=\"img-wrapper\">
                        <a target=\"_blank\" href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 2, array()), "url", array()), "html", null, true);
        echo "\">
                            <img alt=\"Product\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["advertisements"]) ? $context["advertisements"] : null), 2, array()), "featured_image", array()), "Path", array()), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
         <!-- Related Products -->
    <div class=\"row m-t-3\" style=\"display:;\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>Embutidos Recomendados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["embutidos"]) ? $context["embutidos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 208
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
            // line 211
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                    <img alt=\"Product\" src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                ";
            // line 214
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("stock"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 215
            echo "                            </div>
                            <div class=\"name-box\"><h6><a href=\"";
            // line 216
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a></h6></div>
                            <div class=\"rating\">
                                ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["p"], "total_stars", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 219
                echo "                                    <i class=\"fa fa-star\"></i>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                                ";
            if (($this->getAttribute($context["p"], "total_stars", array()) < 5)) {
                // line 222
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["p"], "total_stars", array()), (5 - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 223
                    echo "                                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 225
                echo "                                ";
            }
            // line 226
            echo "                                <a href=\"#\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
            echo " reviews)</a>
                            </div>
                            <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\$";
            // line 230
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
            // line 233
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 234
            echo "                            </div>
                        </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "            </div>
        </div>
    </div>
<!-- End Related Products -->


    <!-- Related Products -->
    <div class=\"row m-t-3\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>Productos Recomendados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["randomProducts"]) ? $context["randomProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 251
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
            // line 254
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                    <img alt=\"Product\" src=\"";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                ";
            // line 257
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("stock"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 258
            echo "                            </div>
                            <div class=\"name-box\"><h6><a href=\"";
            // line 259
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a></h6></div>
                            <div class=\"rating\">
                                ";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["p"], "total_stars", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 262
                echo "                                    <i class=\"fa fa-star\"></i>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "                                ";
            if (($this->getAttribute($context["p"], "total_stars", array()) < 5)) {
                // line 265
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($context["p"], "total_stars", array()), (5 - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 266
                    echo "                                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 268
                echo "                                ";
            }
            // line 269
            echo "                                <a href=\"#\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
            echo " reviews)</a>
                            </div>
                            <div class=\"price-box\">
                            <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                <div>RD\$";
            // line 273
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                            </div>
                            <div class=\"col-lg-6\">
                                ";
            // line 276
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 277
            echo "                            </div>
                        </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "            </div>
        </div>
    </div>
</div>
<!-- End Related Products -->
</div>

</div>
<!-- End Main Content -->


<!-- Modal Banner -->
";
        // line 294
        if (($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "type", array()) == 0)) {
            // line 295
            echo "<div id=\"bannersModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <a href=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "url", array()), "html", null, true);
            echo "\" style=\"text-decoration:none;\"><h4 class=\"modal-title text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "title", array()), "html", null, true);
            echo "</h4></a>
      </div>
      <div class=\"modal-body\">
          <a href=\"";
            // line 303
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "url", array()), "html", null, true);
            echo "\" style=\"text-decoration:none;\"><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "featured_image", array()), "thumb", array(0 => 560, 1 => 460), "method"), "html", null, true);
            echo "\" alt=\"\"></a>
      </div>
      <div class=\"modal-body text-center\">
        <a href=\"";
            // line 306
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "url", array()), "html", null, true);
            echo "\" style=\"text-decoration:none;\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "description", array()), "html", null, true);
            echo "</p></a>
      </div>
    </div>
  </div>
</div>
";
        } else {
            // line 312
            echo "<div id=\"bannersModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <!-- <a href=\"";
            // line 317
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array()), "id", array())));
            echo "\" style=\"text-decoration:none;\"><h4 class=\"modal-title text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array()), "title", array()), "html", null, true);
            echo "</h4></a> -->
            <h2 style=\"color:#c1272d;text-align:center \" >¡Oferta del día!</h2>
        </div>
        <div class=\"modal-body\">
          <center><a href=\"";
            // line 321
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array()), "id", array())));
            echo "\"><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array()), "featured_image", array()), "thumb", array(0 => 400, 1 => 400), "method"), "html", null, true);
            echo "\" alt=\"\"></a></center>
           <a href=\"";
            // line 322
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array()), "id", array())));
            echo "\" style=\"text-decoration:none;\"><h4 class=\"modal-title text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array()), "title", array()), "html", null, true);
            echo "</h4></a>  
        </div>
         <center><h5 style=\"color:#c1272d;font-size:20px;\"><div>RD\$";
            // line 324
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array()), "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div></h5></center>
        <div class=\"modal-body text-center\">
            <center><a href=\"";
            // line 326
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array()), "id", array())));
            echo "\" style=\"text-decoration:none;\"><p>";
            echo $this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array()), "description", array());
            echo "</p></a>
        </div>
        <div class=\"modal-body\">
           
            <div class=\"price-box\">
                <div style=\"color:#fff; width:43%;\" class=\"price col-lg-6\">
                    <!-- <div>RD\$";
            // line 332
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array()), "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div> -->
                </div>
                <div style=\"color:#fff;\"  class=\"col-lg-6 price\">
                    ";
            // line 335
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $this->getAttribute((isset($context["modal"]) ? $context["modal"] : null), "product", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 336
            echo "                </div>
            </div>
        </div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/inicio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  770 => 336,  765 => 335,  759 => 332,  748 => 326,  743 => 324,  736 => 322,  730 => 321,  721 => 317,  714 => 312,  703 => 306,  695 => 303,  687 => 300,  680 => 295,  678 => 294,  664 => 282,  654 => 277,  649 => 276,  643 => 273,  635 => 269,  632 => 268,  625 => 266,  620 => 265,  617 => 264,  610 => 262,  606 => 261,  599 => 259,  596 => 258,  591 => 257,  586 => 255,  582 => 254,  577 => 251,  573 => 250,  560 => 239,  550 => 234,  545 => 233,  539 => 230,  531 => 226,  528 => 225,  521 => 223,  516 => 222,  513 => 221,  506 => 219,  502 => 218,  495 => 216,  492 => 215,  487 => 214,  482 => 212,  478 => 211,  473 => 208,  469 => 207,  453 => 194,  449 => 193,  437 => 183,  432 => 181,  427 => 180,  422 => 178,  417 => 177,  415 => 176,  409 => 173,  403 => 170,  397 => 168,  394 => 167,  387 => 165,  382 => 164,  379 => 163,  372 => 161,  368 => 160,  363 => 158,  357 => 157,  354 => 156,  349 => 155,  342 => 153,  332 => 145,  322 => 140,  317 => 139,  311 => 136,  303 => 132,  300 => 131,  293 => 129,  288 => 128,  285 => 127,  278 => 125,  274 => 124,  267 => 122,  261 => 119,  257 => 118,  252 => 115,  248 => 114,  239 => 107,  229 => 102,  224 => 101,  218 => 98,  210 => 94,  207 => 93,  200 => 91,  195 => 90,  192 => 89,  185 => 87,  181 => 86,  174 => 84,  171 => 83,  166 => 82,  161 => 80,  157 => 79,  152 => 76,  148 => 75,  129 => 59,  125 => 58,  112 => 48,  108 => 47,  80 => 21,  62 => 17,  58 => 16,  51 => 15,  34 => 14,  19 => 1,);
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
              <a href=\"{{s.url}}\">
              <img src=\"{{s.images.getPath}}\" alt=\"...\">
              </a>
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
        <div style=\"margin-top:50px\" class=\"col-md-3  m-b-1\">
            <div class=\"col-sm-12 col-xs-6\">
                <div class=\"box-product-outer \">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a target=\"_blank\" href=\"{{advertisements.0.url}}\">
                                <img alt=\"Product\" src=\"{{advertisements.0.featured_image.Path}}\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 col-xs-6\">
                <div class=\"box-product-outer\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a target=\"_blank\" href=\"{{advertisements.1.url}}\">
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
            <!--
            <div class=\"title\"><span>NUEVOS EN LA BODEGA</span></div>
            {% for p in recentProducts %}
                <div class=\"col-sm-4 col-lg-3 box-product-outer box-product-fixed\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">
                                <img class=\"wine-box wine-thumbnail\" alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
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
            {% endfor %}
            -->
            <!-- End Featured -->

            <div class=\"clearfix visible-sm visible-xs\"></div>

            <!-- Collection -->
            <div class=\"title\"><span>OFERTAS ESPECIALES</span></div>
            {% for p in specialProducts %}
                <div class=\"col-sm-4 col-lg-3 box-product-outer box-product-fixed\">
                    <div class=\"box-product\">
                        <div class=\"img-wrapper\">
                            <a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">
                                <img class=\"wine-box\" alt=\"Product\" src=\"{{p.featured_image.getPath}}\">
                            </a>
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
            <!-- End Collection -->

        </div>

    </div>
    <div class=\"title\"><span>VINO DEL MES</span></div>
    <div class=\"col-md-9 col-sm-6\" style=\"margin-top:20px;border:5px solid #000\">
        <div class=\"col-md-2 image-wrapper\" style=\"width: 200px; text-align: center;\">
           <a href=\"{{\"producto-detalle\"|page({id: mwine.id})}}\"><img style=\"width:230px; height: 300px\" alt=\"Product\" src=\"{{mwine.featured_image.thumb(350,250)}}\"></a>
        </div>
        {% partial \"stock\" p = mwine %}
        <div class=\"col-md-8\" style=\"padding:20px 0px 20px 0px\">
            <h3><a href=\"{{\"producto-detalle\"|page({id: mwine.id})}}\">{{mwine.title}}</a></h3>
            <p style=\"padding-top:10px\">{{mwine.description|raw}}</p>
            <div class=\"rating\">
                {% for i in 1..mwine.total_stars %}
                    <i class=\"fa fa-star\"></i>
                {% endfor %}
                {% if mwine.total_stars < 5 %}
                {% for j in mwine.total_stars..5 - 1 %}
                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                {% endfor %}
                {% endif %}
                <a href=\"#\">({{mwine.comments.count}} reviews)</a>
            </div>
            <!-- <p style=\"padding-top:10px; font-style:Italic\">{{mwine.description|raw}}</p> -->
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
                        <a target=\"_blank\" href=\"{{advertisements.2.url}}\">
                            <img alt=\"Product\" src=\"{{advertisements.2.featured_image.Path}}\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
         <!-- Related Products -->
    <div class=\"row m-t-3\" style=\"display:;\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>Embutidos Recomendados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                {% for p in embutidos %}
                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">
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
                {% endfor %}
            </div>
        </div>
    </div>
<!-- End Related Products -->


    <!-- Related Products -->
    <div class=\"row m-t-3\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>Productos Recomendados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                {% for p in randomProducts %}
                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">
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
                {% endfor %}
            </div>
        </div>
    </div>
</div>
<!-- End Related Products -->
</div>

</div>
<!-- End Main Content -->


<!-- Modal Banner -->
{% if modal.type == 0 %}
<div id=\"bannersModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <a href=\"{{modal.url}}\" style=\"text-decoration:none;\"><h4 class=\"modal-title text-center\">{{modal.title}}</h4></a>
      </div>
      <div class=\"modal-body\">
          <a href=\"{{modal.url}}\" style=\"text-decoration:none;\"><img class=\"img-responsive\" src=\"{{modal.featured_image.thumb(560, 460)}}\" alt=\"\"></a>
      </div>
      <div class=\"modal-body text-center\">
        <a href=\"{{modal.url}}\" style=\"text-decoration:none;\"><p>{{modal.description}}</p></a>
      </div>
    </div>
  </div>
</div>
{% else %}
<div id=\"bannersModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <!-- <a href=\"{{\"producto-detalle\"|page({id: modal.product.id})}}\" style=\"text-decoration:none;\"><h4 class=\"modal-title text-center\">{{modal.product.title}}</h4></a> -->
            <h2 style=\"color:#c1272d;text-align:center \" >¡Oferta del día!</h2>
        </div>
        <div class=\"modal-body\">
          <center><a href=\"{{\"producto-detalle\"|page({id: modal.product.id})}}\"><img class=\"img-responsive\" src=\"{{modal.product.featured_image.thumb(400, 400)}}\" alt=\"\"></a></center>
           <a href=\"{{\"producto-detalle\"|page({id: modal.product.id})}}\" style=\"text-decoration:none;\"><h4 class=\"modal-title text-center\">{{modal.product.title}}</h4></a>  
        </div>
         <center><h5 style=\"color:#c1272d;font-size:20px;\"><div>RD\${{ modal.product.price|number_format}} <span class=\"label-tags\"></span></div></h5></center>
        <div class=\"modal-body text-center\">
            <center><a href=\"{{\"producto-detalle\"|page({id: modal.product.id})}}\" style=\"text-decoration:none;\"><p>{{modal.product.description|raw}}</p></a>
        </div>
        <div class=\"modal-body\">
           
            <div class=\"price-box\">
                <div style=\"color:#fff; width:43%;\" class=\"price col-lg-6\">
                    <!-- <div>RD\${{ modal.product.price|number_format}} <span class=\"label-tags\"></span></div> -->
                </div>
                <div style=\"color:#fff;\"  class=\"col-lg-6 price\">
                    {% partial \"botones\" p = modal.product %}
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
{% endif %}", "/var/www/html/themes/winelivery/pages/inicio.htm", "");
    }
}
