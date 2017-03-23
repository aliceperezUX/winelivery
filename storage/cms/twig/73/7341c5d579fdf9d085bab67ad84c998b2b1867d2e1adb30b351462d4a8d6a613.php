<?php

/* /home/winelivery/themes/winelivery/pages/producto-detalle.htm */
class __TwigTemplate_cbc609bfdc822e1d16ed5a7f2b3ebb36b44a493d4641abc98901e7498d2aa9d5 extends Twig_Template
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
        <!-- Image List -->
        <div class=\"col-sm-4 col-md-4 \">
            <div style=\"width: 350px; height:500px\" class=\"image-detail\">
                ";
        // line 7
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['p'] = (isset($context["product"]) ? $context["product"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("stock"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "featured_image", array()), "getPath", array()), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "featured_image", array()), "getPath", array()), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
        <!-- End Image List -->
        <div class=\"col-sm-8 col-md-8\">
            <div class=\"title\"><span>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "</span></div>
            <p>Precio: <span style=\"color: #c1272d;font-size:20px;font-weight:400\" >RD\$";
        // line 14
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array())), "html", null, true);
        echo " </span></p>
            <p class=\"detail\">Tipo: <span class=\"detail-content\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "category", array()), "title", array()), "html", null, true);
        echo "</span></p>
            <p class=\"detail\">Productor: <span class=\"detail-content\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "productor", array()), "html", null, true);
        echo "</span></p>
            <p class=\"detail\">Pais: <span class=\"detail-content\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "region", array()), "country", array()), "name", array()), "html", null, true);
        echo "</span></p>
            <p class=\"detail\">Región: <span class=\"detail-content\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "region", array()), "title", array()), "html", null, true);
        echo "</span></p>
            <p class=\"detail\">Uvas: <span class=\"detail-content\">";
        // line 19
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
        // line 20
        echo "            </span></p>
            <p class=\"detail\">Capacidad: <span class=\"detail-content\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "capacity", array()), "html", null, true);
        echo "</span></p>
            <p class=\"detail\">Volumen de alcohol: <span class=\"detail-content\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "volume", array()), "html", null, true);
        echo "%</span></p>
            <p class=\"detail\">Maridaje: <span class=\"detail-content\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "maridaje", array()), "html", null, true);
        echo "</span></p>
            
            
            ";
        // line 26
        if ((isset($context["loggedIn"]) ? $context["loggedIn"] : null)) {
            // line 27
            echo "            <button type=\"button\" ";
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "stock", array()) > 0)) {
                echo " onClick=\"addToCart('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
                echo "');\" ";
            }
            echo " class=\"btn btn-theme m-b-1\" type=\"button\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>Agregar al carrito</button>
            <button type=\"button\" ";
            // line 28
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "stock", array()) > 0)) {
                echo " onClick=\"addToWishlist('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
                echo "');\" ";
            }
            echo " class=\"btn btn-theme1 m-b-1\" type=\"button\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i>Agregar a la lista de deseos</button>
            ";
        } else {
            // line 30
            echo "            <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" class=\"btn btn-theme m-b-1\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>Agregar al carrito</a>
            <a href=\"";
            // line 31
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
            echo "\" class=\"btn btn-theme1 m-b-1\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i>Agregar a la lista de deseos</a>
            ";
        }
        // line 33
        echo "
            
        </div>
</div>
<div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"\">
                <!-- Description Tab Content -->
                <div id=\"desc\">
                    <div class=\"well\">
                        <h4>Nota de cata</h4>
                        <p>
                            ";
        // line 45
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array());
        echo "
                        </p>
                    </div>
                </div>
                <!-- End Description Tab Content -->
                <!-- Review Tab Content -->
                <div class=\"\">
                    <div class=\"title\"><span>Review de catadores</span></div>
                    <div class=\"well\">
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 55
            echo "                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a href=\"javascript:;\">
                                    <img style=\"width: 76px; height: 76px\" class=\"media-object img-thumbnail\" alt=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "taste", array()), "name", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "taste", array()), "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                <div class=\"product-rating\">
                                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["r"], "stars", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 62
                echo "                                        <i class=\"fa fa-star\"></i>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                                </div>
                            </div>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>";
            // line 67
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
        // line 71
        echo "                    </div>
                </div>
                <!-- End Review Tab Content -->

            </div>
            <!-- End Tab panes -->

        </div>
    </div>

<div>
    <div class=\"title\"><span>Evalua este vino</span></div>
        <div class=\"col-md-12\" style=\"margin-bottom: 50px\">
            <form id=\"starForm\" class=\"evaluacion-detalle\">
              <p class=\"clasificacion\">
                <input ";
        // line 86
        if (($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "stars", array()) == 5)) {
            echo "checked";
        }
        echo " class=\"stars\" id=\"radio1\" type=\"radio\" name=\"estrellas\" value=\"5\"><!--
                --><label for=\"radio1\">★</label><!--
                --><input ";
        // line 88
        if (($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "stars", array()) == 4)) {
            echo "checked";
        }
        echo " class=\"stars\" id=\"radio2\" type=\"radio\" name=\"estrellas\" value=\"4\"><!--
                --><label for=\"radio2\">★</label><!--
                --><input ";
        // line 90
        if (($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "stars", array()) == 3)) {
            echo "checked";
        }
        echo " class=\"stars\" id=\"radio3\" type=\"radio\" name=\"estrellas\" value=\"3\"><!--
                --><label for=\"radio3\">★</label><!--
                --><input ";
        // line 92
        if (($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "stars", array()) == 2)) {
            echo "checked";
        }
        echo " class=\"stars\" id=\"radio4\" type=\"radio\" name=\"estrellas\" value=\"2\"><!--
                --><label for=\"radio4\">★</label><!--
                --><input ";
        // line 94
        if (($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "stars", array()) == 1)) {
            echo "checked";
        }
        echo " class=\"stars\" id=\"radio5\" type=\"radio\" name=\"estrellas\" value=\"1\"><!--
                --><label for=\"radio5\">★</label>
              </p>
              <input name=\"product_id\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "id", array()), "html", null, true);
        echo "\" type=\"hidden\">
            <a ";
        // line 98
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
        
        <div class=\"col-md-4\">
            <br>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <a href=\"javascript:;\" style=\"pointer-events: none;\">(";
        // line 110
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
        // line 117
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
        // line 123
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
        // line 128
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
        // line 132
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
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "id", array()), "html", null, true);
        echo "\" type=\"hidden\">
        <div class=\"form-group col-md-12\">
            <a ";
        // line 142
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
        // line 146
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['comments'] = (isset($context["comments"]) ? $context["comments"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("comments"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 147
        echo "   </div>
</div>

    <!-- Related Products -->
    <div class=\"row m-t-3\">
        <div class=\"col-xs-12\">
            <div style=\"padding-top:15px;\" class=\"title\"><span>Vinos Recomendados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset box-product-fixed\">
                ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["randomProducts"]) ? $context["randomProducts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 156
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"";
            // line 159
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">
                                    <img alt=\"Product\" src=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                ";
            // line 162
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("stock"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 163
            echo "                            </div>
                            <div class=\"name-box\"><h6><a href=\"";
            // line 164
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($context["p"], "id", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</a></h6></div>
                            <div class=\"rating\">
                                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($context["p"], "total_stars", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 167
                echo "                                    <i class=\"fa fa-star\"></i>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                                <a href=\"#\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "comments", array()), "count", array()), "html", null, true);
            echo " reviews)</a>
                            </div>
                            <div class=\"price-box\">
                                <div style=\"color:#fff\" class=\"price col-lg-6 \">
                                    <div>RD\$";
            // line 173
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["p"], "price", array())), "html", null, true);
            echo " <span class=\"label-tags\"></span></div>
                                </div>
                                <div class=\"col-lg-6\">
                                    ";
            // line 176
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['p'] = $context["p"]            ;
            echo $this->env->getExtension('CMS')->partialFunction("botones"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 177
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "            </div>
        </div>
    </div>
</div>
<!-- End Related Products -->

</div>
<!-- End Main Content -->

";
        // line 191
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 192
        echo "<script>
    function starForm()
    {
        var error = true;
    \tif(!\$('.stars').is(\":checked\")){error = false;}
    \tif(error)
    \t{
    \t\t\$('#starForm').request('onStarsForm', {data: \$('#starForm').serialize()});
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
        // line 191
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/pages/producto-detalle.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 191,  487 => 192,  485 => 191,  474 => 182,  464 => 177,  459 => 176,  453 => 173,  445 => 169,  438 => 167,  434 => 166,  427 => 164,  424 => 163,  419 => 162,  414 => 160,  410 => 159,  405 => 156,  401 => 155,  391 => 147,  386 => 146,  373 => 142,  368 => 140,  352 => 132,  340 => 128,  327 => 123,  313 => 117,  298 => 110,  277 => 98,  273 => 97,  265 => 94,  258 => 92,  251 => 90,  244 => 88,  237 => 86,  220 => 71,  208 => 67,  203 => 64,  196 => 62,  192 => 61,  184 => 58,  179 => 55,  175 => 54,  163 => 45,  149 => 33,  144 => 31,  139 => 30,  130 => 28,  121 => 27,  119 => 26,  113 => 23,  109 => 22,  105 => 21,  102 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  32 => 8,  27 => 7,  19 => 1,);
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
        <!-- Image List -->
        <div class=\"col-sm-4 col-md-4 \">
            <div style=\"width: 350px; height:500px\" class=\"image-detail\">
                {% partial \"stock\" p = product %}
                <img src=\"{{product.featured_image.getPath}}\" data-zoom-image=\"{{product.featured_image.getPath}}\" alt=\"\">
            </div>
        </div>
        <!-- End Image List -->
        <div class=\"col-sm-8 col-md-8\">
            <div class=\"title\"><span>{{product.title}}</span></div>
            <p>Precio: <span style=\"color: #c1272d;font-size:20px;font-weight:400\" >RD\${{product.price|number_format}} </span></p>
            <p class=\"detail\">Tipo: <span class=\"detail-content\">{{product.category.title}}</span></p>
            <p class=\"detail\">Productor: <span class=\"detail-content\">{{product.productor}}</span></p>
            <p class=\"detail\">Pais: <span class=\"detail-content\">{{product.region.country.name}}</span></p>
            <p class=\"detail\">Región: <span class=\"detail-content\">{{product.region.title}}</span></p>
            <p class=\"detail\">Uvas: <span class=\"detail-content\">{% for u in product.uvas %}{{u.title}}{% if loop.last %}.{% else %},&nbsp;{% endif %}{% endfor %}
            </span></p>
            <p class=\"detail\">Capacidad: <span class=\"detail-content\">{{product.capacity}}</span></p>
            <p class=\"detail\">Volumen de alcohol: <span class=\"detail-content\">{{product.volume}}%</span></p>
            <p class=\"detail\">Maridaje: <span class=\"detail-content\">{{product.maridaje}}</span></p>
            
            
            {% if loggedIn %}
            <button type=\"button\" {% if product.stock > 0 %} onClick=\"addToCart('{{product.id}}');\" {% endif %} class=\"btn btn-theme m-b-1\" type=\"button\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>Agregar al carrito</button>
            <button type=\"button\" {% if product.stock > 0 %} onClick=\"addToWishlist('{{product.id}}');\" {% endif %} class=\"btn btn-theme1 m-b-1\" type=\"button\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i>Agregar a la lista de deseos</button>
            {% else %}
            <a href=\"{{\"login\"|page}}\" class=\"btn btn-theme m-b-1\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>Agregar al carrito</a>
            <a href=\"{{\"login\"|page}}\" class=\"btn btn-theme1 m-b-1\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i>Agregar a la lista de deseos</a>
            {% endif %}

            
        </div>
</div>
<div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"\">
                <!-- Description Tab Content -->
                <div id=\"desc\">
                    <div class=\"well\">
                        <h4>Nota de cata</h4>
                        <p>
                            {{product.description|raw}}
                        </p>
                    </div>
                </div>
                <!-- End Description Tab Content -->
                <!-- Review Tab Content -->
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
                <!-- End Review Tab Content -->

            </div>
            <!-- End Tab panes -->

        </div>
    </div>

<div>
    <div class=\"title\"><span>Evalua este vino</span></div>
        <div class=\"col-md-12\" style=\"margin-bottom: 50px\">
            <form id=\"starForm\" class=\"evaluacion-detalle\">
              <p class=\"clasificacion\">
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
            <div style=\"padding-top:15px;\" class=\"title\"><span>Vinos Recomendados</span></div>
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
<script>
    function starForm()
    {
        var error = true;
    \tif(!\$('.stars').is(\":checked\")){error = false;}
    \tif(error)
    \t{
    \t\t\$('#starForm').request('onStarsForm', {data: \$('#starForm').serialize()});
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
{% endput %}", "/home/winelivery/themes/winelivery/pages/producto-detalle.htm", "");
    }
}
