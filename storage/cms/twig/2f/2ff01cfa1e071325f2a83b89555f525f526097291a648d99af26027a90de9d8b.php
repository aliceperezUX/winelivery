<?php

/* /var/www/html/themes/winelivery/pages/producto-detalle.htm */
class __TwigTemplate_467bf472e97c283776c1856c23324338bc6e0afe2d8c4a2c3a2cd524ebe4e0e9 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 2
        echo "<title>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "\" /> 
<!-- Schema.org markup for Google+ --> 
<meta itemprop=\"name\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "\"> 
<meta itemprop=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "\"> 
<meta name=\"keywords\" itemprop=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "\" />
<meta itemprop=\"image\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "featured_image", array()), "getPath", array()), "html", null, true);
        echo "\"> 
<!-- Twitter Card data --> 
<meta name=\"twitter:card\" content=\"summary_large_image\"> 
<meta name=\"twitter:site\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"> 
<meta name=\"twitter:title\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "\"> 
<meta name=\"twitter:description\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "\"> 
<!-- Twitter summary card with large image must be at least 280x150px --> 
<meta name=\"twitter:image:src\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "featured_image", array()), "getPath", array()), "html", null, true);
        echo "\"> 
<!-- Open Graph data --> 
<meta property=\"og:title\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "\" /> 
<meta property=\"og:type\" content=\"website\" /> 
<meta property=\"og:url\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" /> 
<meta property=\"og:image\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "featured_image", array()), "getPath", array()), "html", null, true);
        echo "\" /> 
<meta property=\"og:description\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "\" /> 
<meta property=\"og:site_name\" content=\"WineliveryRD\" />
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 24
        echo "
<!-- Main Content -->
<div class=\"container m-t-3\">
    <div class=\"row\">
        <!-- Image List -->
        <div class=\"col-sm-4 col-md-4 \">
            <div style=\"width: 350px; height:500px; \" class=\"image-detail\">
                ";
        // line 31
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['p'] = (isset($context["product"]) ? $context["product"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("stock"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "                <img style=\"z-index:1\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "featured_image", array()), "getPath", array()), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "featured_image", array()), "getPath", array()), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
        <!-- End Image List -->
        <div class=\"col-sm-8 col-md-8\">
            <div class=\"title\"><span>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "</span></div>
            <p>Precio: <span style=\"color: #c1272d;font-size:20px;font-weight:400\" >RD\$";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array())), "html", null, true);
        echo " </span></p>
            ";
        // line 39
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type", array()) == 1)) {
            // line 40
            echo "            <p class=\"detail\">Tipo: <span class=\"detail-content\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "category", array()), "title", array()), "html", null, true);
            echo "</span></p>
            <p class=\"detail\">Productor: <span class=\"detail-content\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "productor", array()), "html", null, true);
            echo "</span></p>
            <p class=\"detail\">País: <span class=\"detail-content\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "region", array()), "country", array()), "name", array()), "html", null, true);
            echo "</span></p>
            <p class=\"detail\">Región: <span class=\"detail-content\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "region", array()), "title", array()), "html", null, true);
            echo "</span></p>
            <p class=\"detail\">Uvas: <span class=\"detail-content\">";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "uvas", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "title", array()), "html", null, true);
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo ".";
                } else {
                    echo ",&nbsp;";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </span></p>
            <p class=\"detail\">Capacidad: <span class=\"detail-content\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "capacity", array()), "html", null, true);
            echo "</span></p>
            <p class=\"detail\">Volumen de alcohol: <span class=\"detail-content\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "volume", array()), "html", null, true);
            echo "%</span></p>
            <p class=\"detail\">Maridaje: <span class=\"detail-content\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "maridaje", array()), "html", null, true);
            echo "</span></p>
            ";
        } elseif (($this->getAttribute(        // line 49
(isset($context["product"]) ? $context["product"] : null), "type", array()) == 2)) {
            // line 50
            echo "            <p class=\"detail\">Peso: <span class=\"detail-content\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "peso", array()), "html", null, true);
            echo "</span></p>
            ";
        } elseif (($this->getAttribute(        // line 51
(isset($context["product"]) ? $context["product"] : null), "type", array()) == 3)) {
            // line 52
            echo "            <p class=\"detail\">Capacidad: <span class=\"detail-content\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "capacity", array()), "html", null, true);
            echo "</span></p>
            ";
        }
        // line 54
        echo "            
            ";
        // line 55
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            // line 56
            echo "            <button type=\"button\" ";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "stock", array()) > 0)) {
                echo " onClick=\"addToCart('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
                echo "');\" ";
            }
            echo " class=\"btn btn-theme m-b-1\" type=\"button\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>Agregar al carrito</button>
            <button type=\"button\" ";
            // line 57
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "stock", array()) > 0)) {
                echo " onClick=\"addToWishlist('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
                echo "');\" ";
            }
            echo " class=\"btn btn-theme1 m-b-1\" type=\"button\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i>Agregar a la lista de deseos</button>
            ";
        } else {
            // line 59
            echo "            <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" class=\"btn btn-theme m-b-1\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>Agregar al carrito</a>
            <a href=\"";
            // line 60
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" class=\"btn btn-theme1 m-b-1\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i>Agregar a la lista de deseos</a>
            ";
        }
        // line 62
        echo "            <a href=\"javascript:;\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" data-image=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "featured_image", array()), "getPath", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "\" data-desc=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "\" class=\"btnShare\"><i style=\"color:#3B5998;font-size:32px;padding:10px\" class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a>
            <a class=\"icon-twitter\" href=\"https://twitter.com/intent/tweet?text=";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "&url=";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\"><i style=\"color:#1dcaff; font-size:32px;\" class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a>
            
        </div>
        
        
</div>
";
        // line 69
        if ( !twig_test_empty((isset($context["embutidos"]) ? $context["embutidos"] : null))) {
            // line 70
            echo " <!-- Related Embutidos -->
    <div class=\"row m-t-3\" style=\"display:;\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>Embutidos Recomendados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["embutidos"]) ? $context["embutidos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 76
                echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
                // line 79
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
                echo "\">
                                    <img src=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
                echo "\">
                                </a>
                                ";
                // line 82
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['p'] = $context["p"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("stock"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 83
                echo "                            </div>
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
                $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($context["p"], "total_stars", array()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 87
                    echo "                                    <i class=\"fa fa-star\"></i>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                                <a href=\"#\">(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
                echo " reviews)</a>
                            </div>
                            <div class=\"price-box\">
                                <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                    <div>RD\$";
                // line 93
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
                echo " <span class=\"label-tags\"></span></div>
                                </div>
                                <div class=\"col-lg-6\">
                                    ";
                // line 96
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['p'] = $context["p"]                ;
                echo $this->env->getExtension('CMS')->partialFunction("botones"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 97
                echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "            </div>
        </div>
    </div>
<!-- End Related Embutidos -->
";
        }
        // line 107
        echo "
<div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"\">
                <!-- Description Tab Content -->
                ";
        // line 112
        if ( !twig_test_empty($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()))) {
            // line 113
            echo "                <div id=\"desc\">
                    <div class=\"well\">
                        <h4>";
            // line 115
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type", array()) == 1)) {
                echo "Nota de cata ";
            } else {
                echo "Descripción";
            }
            echo "</h4>
                        <p>
                            ";
            // line 117
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array());
            echo "
                        </p>
                    </div>
                </div>
                ";
        }
        // line 122
        echo "                <!-- End Description Tab Content -->
                <!-- Review Tab Content -->
                ";
        // line 124
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            // line 125
            echo "                <div class=\"\">
                    <div class=\"title\"><span>Review de catadores</span></div>
                    <div class=\"well\">
                        ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 129
                echo "                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a href=\"javascript:;\">
                                    <img style=\"width: 76px; height: 76px\" class=\"media-object img-thumbnail\" alt=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "taste", array()), "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "taste", array()), "featured_image", array()), "getPath", array()), "html", null, true);
                echo "\">
                                </a>
                                <div class=\"product-rating\">
                                    ";
                // line 135
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["r"], "stars", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 136
                    echo "                                        <i class=\"fa fa-star\"></i>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "                                </div>
                            </div>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "taste", array()), "name", array()), "html", null, true);
                echo "</strong></h5> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "comment", array()), "html", null, true);
                echo "
                            </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                    </div>
                </div>
                ";
        }
        // line 148
        echo "                <!-- End Review Tab Content -->

            </div>
            <!-- End Tab panes -->

        </div>
    </div>

<div>
    <div class=\"title\"><span>Evalua este producto</span></div>
        <div class=\"col-md-12\" style=\"margin-bottom: 50px\">
            <form id=\"starForm\" class=\"evaluacion-detalle\">
              <p class=\"clasificacion\" id=\"pstars\">
                <input ";
        // line 161
        if (($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "stars", array()) == 5)) {
            echo "checked";
        }
        echo " class=\"stars\" id=\"radio1\" type=\"radio\" name=\"estrellas\" value=\"5\"><!--
                --><label for=\"radio1\">★</label><!--
                --><input ";
        // line 163
        if (($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "stars", array()) == 4)) {
            echo "checked";
        }
        echo " class=\"stars\" id=\"radio2\" type=\"radio\" name=\"estrellas\" value=\"4\"><!--
                --><label for=\"radio2\">★</label><!--
                --><input ";
        // line 165
        if (($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "stars", array()) == 3)) {
            echo "checked";
        }
        echo " class=\"stars\" id=\"radio3\" type=\"radio\" name=\"estrellas\" value=\"3\"><!--
                --><label for=\"radio3\">★</label><!--
                --><input ";
        // line 167
        if (($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "stars", array()) == 2)) {
            echo "checked";
        }
        echo " class=\"stars\" id=\"radio4\" type=\"radio\" name=\"estrellas\" value=\"2\"><!--
                --><label for=\"radio4\">★</label><!--
                --><input ";
        // line 169
        if (($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "stars", array()) == 1)) {
            echo "checked";
        }
        echo " class=\"stars\" id=\"radio5\" type=\"radio\" name=\"estrellas\" value=\"1\"><!--
                --><label for=\"radio5\">★</label>
              </p>
              <input name=\"product_id\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "id", array()), "html", null, true);
        echo "\" type=\"hidden\">
            <a ";
        // line 173
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            echo " href=\"javascript:;\" onClick=\"starForm();\" ";
        } else {
            echo " href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" ";
        }
        echo " class=\"btn btn-theme\">Votar</a>
            </form>
        </div>
        <p style=\"display:none;\" id=\"voteMessage\">¡Gracias por tu voto!</p>
        <div class=\"col-md-4\">
            <br>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">(";
        // line 185
        if ((isset($context["stars5"]) ? $context["stars5"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["stars5"]) ? $context["stars5"] : null), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo " Votos)</a>
            </div>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">(";
        // line 192
        if ((isset($context["stars4"]) ? $context["stars4"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["stars4"]) ? $context["stars4"] : null), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo " Votos)</a>
            </div>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">(";
        // line 198
        if ((isset($context["stars3"]) ? $context["stars3"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["stars3"]) ? $context["stars3"] : null), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo " Votos)</a>
            </div>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">(";
        // line 203
        if ((isset($context["stars2"]) ? $context["stars2"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["stars2"]) ? $context["stars2"] : null), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo " Votos)</a>
            </div>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">(";
        // line 207
        if ((isset($context["stars1"]) ? $context["stars1"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["stars1"]) ? $context["stars1"] : null), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo " Votos)</a>
            </div><br><br>
        </div>
    <form id=\"commentForm\">
        <div class=\"form-group col-md-12\">
            <label for=\"Review\">Deja tu comentario</label>
            <textarea name=\"comment\" id=\"Review\" class=\"form-control\" rows=\"5\"></textarea>
        </div>
        <input name=\"product_id\" value=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "id", array()), "html", null, true);
        echo "\" type=\"hidden\">
        <div class=\"form-group col-md-12\">
            <a ";
        // line 217
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            echo " href=\"javascript:;\" onClick=\"commentForm();\" ";
        } else {
            echo " href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" ";
        }
        echo " class=\"btn btn-theme\">Enviar Review</a>
        </div>
    </form>
   <div id=\"comment\">
   ";
        // line 221
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['comments'] = (isset($context["comments"]) ? $context["comments"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("comments"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 222
        echo "   </div>
</div>

    <!-- Related Products -->
    <div class=\"row m-t-3\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>Productos Recomendados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["randomProducts"]) ? $context["randomProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 231
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
            // line 234
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                    <img alt=\"Product\" src=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                ";
            // line 237
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("stock"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 238
            echo "                            </div>
                            <div class=\"name-box\"><h6><a href=\"";
            // line 239
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a></h6></div>
                            <div class=\"rating\">
                                ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($context["p"], "total_stars", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 242
                echo "                                    <i class=\"fa fa-star\"></i>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "                                <a href=\"#\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
            echo " reviews)</a>
                            </div>
                            <div class=\"price-box\">
                                <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                    <div>RD\$";
            // line 248
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                                </div>
                                <div class=\"col-lg-6\">
                                    ";
            // line 251
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 252
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "            </div>
        </div>
    </div>
</div>
<!-- End Related Products -->

</div>
<!-- End Main Content -->

";
        // line 266
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 267
        echo "<script type=\"text/javascript\" async src=\"https://platform.twitter.com/widgets.js\"></script>
<script>
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '734329210061473',
      xfbml      : true,
      version    : 'v2.8'
    });
    };
    
    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = \"//connect.facebook.net/en_US/sdk.js\";
     fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    
    function postToFeed() 
    {
        // calling the API ...
        var obj = {
          method: 'feed',
          redirect_uri:elem.data('url'),
          link:elem.data('url'),
          picture: elem.data('image'),
          name: elem.data('title'),
          caption: 'Reference Documentation',
          description: elem.data('desc')
        };
        FB.ui(obj);
    }
      
    function starForm()
    {
        var error = true;
    \tif(!\$('.stars').is(\":checked\")){error = false;}
    \tif(error)
    \t{
    \t    \$(\"#pstars\").addClass(\"animated pulse\");
    \t\t\$('#starForm').request('onStarsForm', {data: \$('#starForm').serialize()});
    \t\t\$(\"#voteMessage\").fadeIn(\"fast\");
    \t} 
    \telse { return false; }
    }
    
    function commentForm()
    {
        var error = true;
    \tif(\$('textarea[name=comment]').val() === ''){\$('textarea[name=comment]').css('border', '1px solid red');error = false;} 
    \telse{\$('textarea[name=comment]').css('border', '');}
    \tif(error)
    \t{
    \t\t\$('#commentForm').request('onCommentForm', {data: \$('#commentForm').serialize()});
    \t\t\$('#commentForm')[0].reset();
    \t} 
    \telse { return false; }
    }
</script>
";
        // line 266
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/producto-detalle.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  765 => 266,  704 => 267,  702 => 266,  691 => 257,  681 => 252,  676 => 251,  670 => 248,  662 => 244,  655 => 242,  651 => 241,  644 => 239,  641 => 238,  636 => 237,  631 => 235,  627 => 234,  622 => 231,  618 => 230,  608 => 222,  603 => 221,  590 => 217,  585 => 215,  569 => 207,  557 => 203,  544 => 198,  530 => 192,  515 => 185,  494 => 173,  490 => 172,  482 => 169,  475 => 167,  468 => 165,  461 => 163,  454 => 161,  439 => 148,  434 => 145,  422 => 141,  417 => 138,  410 => 136,  406 => 135,  398 => 132,  393 => 129,  389 => 128,  384 => 125,  382 => 124,  378 => 122,  370 => 117,  361 => 115,  357 => 113,  355 => 112,  348 => 107,  341 => 102,  331 => 97,  326 => 96,  320 => 93,  312 => 89,  305 => 87,  301 => 86,  294 => 84,  291 => 83,  286 => 82,  281 => 80,  277 => 79,  272 => 76,  268 => 75,  261 => 70,  259 => 69,  248 => 63,  237 => 62,  232 => 60,  227 => 59,  218 => 57,  209 => 56,  207 => 55,  204 => 54,  198 => 52,  196 => 51,  191 => 50,  189 => 49,  185 => 48,  181 => 47,  177 => 46,  174 => 45,  139 => 44,  135 => 43,  131 => 42,  127 => 41,  122 => 40,  120 => 39,  116 => 38,  112 => 37,  101 => 32,  96 => 31,  87 => 24,  85 => 1,  80 => 21,  76 => 20,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  53 => 12,  49 => 11,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put scripts %}
<title>{{product.title}}</title>
<meta name=\"description\" content=\"{{product.description}}\" /> 
<!-- Schema.org markup for Google+ --> 
<meta itemprop=\"name\" content=\"{{product.title}}\"> 
<meta itemprop=\"description\" content=\"{{product.description}}\"> 
<meta name=\"keywords\" itemprop=\"keywords\" content=\"{{product.title}}\" />
<meta itemprop=\"image\" content=\"{{product.featured_image.getPath}}\"> 
<!-- Twitter Card data --> 
<meta name=\"twitter:card\" content=\"summary_large_image\"> 
<meta name=\"twitter:site\" content=\"{{url}}\"> 
<meta name=\"twitter:title\" content=\"{{product.title}}\"> 
<meta name=\"twitter:description\" content=\"{{product.description}}\"> 
<!-- Twitter summary card with large image must be at least 280x150px --> 
<meta name=\"twitter:image:src\" content=\"{{product.featured_image.getPath}}\"> 
<!-- Open Graph data --> 
<meta property=\"og:title\" content=\"{{product.title}}\" /> 
<meta property=\"og:type\" content=\"website\" /> 
<meta property=\"og:url\" content=\"{{url}}\" /> 
<meta property=\"og:image\" content=\"{{product.featured_image.getPath}}\" /> 
<meta property=\"og:description\" content=\"{{product.description}}\" /> 
<meta property=\"og:site_name\" content=\"WineliveryRD\" />
{% endput %}

<!-- Main Content -->
<div class=\"container m-t-3\">
    <div class=\"row\">
        <!-- Image List -->
        <div class=\"col-sm-4 col-md-4 \">
            <div style=\"width: 350px; height:500px; \" class=\"image-detail\">
                {% partial \"stock\" p = product %}
                <img style=\"z-index:1\" src=\"{{product.featured_image.getPath}}\" data-zoom-image=\"{{product.featured_image.getPath}}\" alt=\"\">
            </div>
        </div>
        <!-- End Image List -->
        <div class=\"col-sm-8 col-md-8\">
            <div class=\"title\"><span>{{product.title}}</span></div>
            <p>Precio: <span style=\"color: #c1272d;font-size:20px;font-weight:400\" >RD\${{product.price|number_format}} </span></p>
            {% if product.type == 1 %}
            <p class=\"detail\">Tipo: <span class=\"detail-content\">{{product.category.title}}</span></p>
            <p class=\"detail\">Productor: <span class=\"detail-content\">{{product.productor}}</span></p>
            <p class=\"detail\">País: <span class=\"detail-content\">{{product.region.country.name}}</span></p>
            <p class=\"detail\">Región: <span class=\"detail-content\">{{product.region.title}}</span></p>
            <p class=\"detail\">Uvas: <span class=\"detail-content\">{% for u in product.uvas %}{{u.title}}{% if loop.last %}.{% else %},&nbsp;{% endif %}{% endfor %}
            </span></p>
            <p class=\"detail\">Capacidad: <span class=\"detail-content\">{{product.capacity}}</span></p>
            <p class=\"detail\">Volumen de alcohol: <span class=\"detail-content\">{{product.volume}}%</span></p>
            <p class=\"detail\">Maridaje: <span class=\"detail-content\">{{product.maridaje}}</span></p>
            {% elseif product.type == 2 %}
            <p class=\"detail\">Peso: <span class=\"detail-content\">{{product.peso}}</span></p>
            {% elseif product.type == 3 %}
            <p class=\"detail\">Capacidad: <span class=\"detail-content\">{{product.capacity}}</span></p>
            {% endif %}
            
            {% if loggedIn %}
            <button type=\"button\" {% if product.stock > 0 %} onClick=\"addToCart('{{product.id}}');\" {% endif %} class=\"btn btn-theme m-b-1\" type=\"button\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>Agregar al carrito</button>
            <button type=\"button\" {% if product.stock > 0 %} onClick=\"addToWishlist('{{product.id}}');\" {% endif %} class=\"btn btn-theme1 m-b-1\" type=\"button\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i>Agregar a la lista de deseos</button>
            {% else %}
            <a href=\"{{\"login\"|page}}\" class=\"btn btn-theme m-b-1\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>Agregar al carrito</a>
            <a href=\"{{\"login\"|page}}\" class=\"btn btn-theme1 m-b-1\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i>Agregar a la lista de deseos</a>
            {% endif %}
            <a href=\"javascript:;\" data-url=\"{{url}}\" data-image=\"{{product.featured_image.getPath}}\" data-title=\"{{product.title}}\" data-desc=\"{{product.description}}\" class=\"btnShare\"><i style=\"color:#3B5998;font-size:32px;padding:10px\" class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a>
            <a class=\"icon-twitter\" href=\"https://twitter.com/intent/tweet?text={{product.title}}&url={{url}}\"><i style=\"color:#1dcaff; font-size:32px;\" class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a>
            
        </div>
        
        
</div>
{% if embutidos is not empty %}
 <!-- Related Embutidos -->
    <div class=\"row m-t-3\" style=\"display:;\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>Embutidos Recomendados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                {% for p in embutidos %}
                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">
                                    <img src=\"{{p.featured_image.getPath}}\">
                                </a>
                                {% partial \"stock\" p = p %}
                            </div>
                            <div class=\"name-box\"><h6><a href=\"{{\"producto-detalle\"|page({id: p.id})}}\">{{p.title}}</a></h6></div>
                            <div class=\"rating\">
                                {% for i in 0..p.total_stars -1 %}
                                    <i class=\"fa fa-star\"></i>
                                {% endfor %}
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
<!-- End Related Embutidos -->
{% endif %}

<div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"\">
                <!-- Description Tab Content -->
                {% if product.description is not empty  %}
                <div id=\"desc\">
                    <div class=\"well\">
                        <h4>{% if product.type == 1 %}Nota de cata {% else %}Descripción{% endif %}</h4>
                        <p>
                            {{product.description|raw}}
                        </p>
                    </div>
                </div>
                {% endif %}
                <!-- End Description Tab Content -->
                <!-- Review Tab Content -->
                {% if reviews %}
                <div class=\"\">
                    <div class=\"title\"><span>Review de catadores</span></div>
                    <div class=\"well\">
                        {% for r in reviews %}
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a href=\"javascript:;\">
                                    <img style=\"width: 76px; height: 76px\" class=\"media-object img-thumbnail\" alt=\"{{r.taste.name}}\" src=\"{{r.taste.featured_image.getPath}}\">
                                </a>
                                <div class=\"product-rating\">
                                    {% for i in 1..r.stars %}
                                        <i class=\"fa fa-star\"></i>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>{{r.taste.name}}</strong></h5> {{r.comment}}
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
                {% endif %}
                <!-- End Review Tab Content -->

            </div>
            <!-- End Tab panes -->

        </div>
    </div>

<div>
    <div class=\"title\"><span>Evalua este producto</span></div>
        <div class=\"col-md-12\" style=\"margin-bottom: 50px\">
            <form id=\"starForm\" class=\"evaluacion-detalle\">
              <p class=\"clasificacion\" id=\"pstars\">
                <input {% if rating.stars == 5 %}checked{% endif %} class=\"stars\" id=\"radio1\" type=\"radio\" name=\"estrellas\" value=\"5\"><!--
                --><label for=\"radio1\">★</label><!--
                --><input {% if rating.stars == 4 %}checked{% endif %} class=\"stars\" id=\"radio2\" type=\"radio\" name=\"estrellas\" value=\"4\"><!--
                --><label for=\"radio2\">★</label><!--
                --><input {% if rating.stars == 3 %}checked{% endif %} class=\"stars\" id=\"radio3\" type=\"radio\" name=\"estrellas\" value=\"3\"><!--
                --><label for=\"radio3\">★</label><!--
                --><input {% if rating.stars == 2 %}checked{% endif %} class=\"stars\" id=\"radio4\" type=\"radio\" name=\"estrellas\" value=\"2\"><!--
                --><label for=\"radio4\">★</label><!--
                --><input {% if rating.stars == 1 %}checked{% endif %} class=\"stars\" id=\"radio5\" type=\"radio\" name=\"estrellas\" value=\"1\"><!--
                --><label for=\"radio5\">★</label>
              </p>
              <input name=\"product_id\" value=\"{{this.param.id}}\" type=\"hidden\">
            <a {% if loggedIn %} href=\"javascript:;\" onClick=\"starForm();\" {% else %} href=\"{{\"login\"|page}}\" {% endif %} class=\"btn btn-theme\">Votar</a>
            </form>
        </div>
        <p style=\"display:none;\" id=\"voteMessage\">¡Gracias por tu voto!</p>
        <div class=\"col-md-4\">
            <br>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">({% if stars5 %}{{stars5}} {% else %} 0 {% endif %} Votos)</a>
            </div>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">({% if stars4 %}{{stars4}} {% else %} 0 {% endif %} Votos)</a>
            </div>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">({% if stars3 %}{{stars3}} {% else %} 0 {% endif %} Votos)</a>
            </div>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">({% if stars2 %}{{stars2}} {% else %} 0 {% endif %} Votos)</a>
            </div>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">({% if stars1 %}{{stars1}} {% else %} 0 {% endif %} Votos)</a>
            </div><br><br>
        </div>
    <form id=\"commentForm\">
        <div class=\"form-group col-md-12\">
            <label for=\"Review\">Deja tu comentario</label>
            <textarea name=\"comment\" id=\"Review\" class=\"form-control\" rows=\"5\"></textarea>
        </div>
        <input name=\"product_id\" value=\"{{this.param.id}}\" type=\"hidden\">
        <div class=\"form-group col-md-12\">
            <a {% if loggedIn %} href=\"javascript:;\" onClick=\"commentForm();\" {% else %} href=\"{{\"login\"|page}}\" {% endif %} class=\"btn btn-theme\">Enviar Review</a>
        </div>
    </form>
   <div id=\"comment\">
   {% partial \"comments\" comments=comments %}
   </div>
</div>

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
                                {% for i in 0..p.total_stars -1 %}
                                    <i class=\"fa fa-star\"></i>
                                {% endfor %}
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
<!-- End Main Content -->

{% put scripts %}
<script type=\"text/javascript\" async src=\"https://platform.twitter.com/widgets.js\"></script>
<script>
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '734329210061473',
      xfbml      : true,
      version    : 'v2.8'
    });
    };
    
    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = \"//connect.facebook.net/en_US/sdk.js\";
     fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    
    function postToFeed() 
    {
        // calling the API ...
        var obj = {
          method: 'feed',
          redirect_uri:elem.data('url'),
          link:elem.data('url'),
          picture: elem.data('image'),
          name: elem.data('title'),
          caption: 'Reference Documentation',
          description: elem.data('desc')
        };
        FB.ui(obj);
    }
      
    function starForm()
    {
        var error = true;
    \tif(!\$('.stars').is(\":checked\")){error = false;}
    \tif(error)
    \t{
    \t    \$(\"#pstars\").addClass(\"animated pulse\");
    \t\t\$('#starForm').request('onStarsForm', {data: \$('#starForm').serialize()});
    \t\t\$(\"#voteMessage\").fadeIn(\"fast\");
    \t} 
    \telse { return false; }
    }
    
    function commentForm()
    {
        var error = true;
    \tif(\$('textarea[name=comment]').val() === ''){\$('textarea[name=comment]').css('border', '1px solid red');error = false;} 
    \telse{\$('textarea[name=comment]').css('border', '');}
    \tif(error)
    \t{
    \t\t\$('#commentForm').request('onCommentForm', {data: \$('#commentForm').serialize()});
    \t\t\$('#commentForm')[0].reset();
    \t} 
    \telse { return false; }
    }
</script>
{% endput %}", "/var/www/html/themes/winelivery/pages/producto-detalle.htm", "");
    }
}
