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
                <img src=\"";
        // line 8
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "country", array()), "name", array()), "html", null, true);
        echo "</span></p>
            <p class=\"detail\">Uvas: <span class=\"detail-content\">";
        // line 18
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
        // line 19
        echo "            </span></p>
            <p class=\"detail\">Capacidad: <span class=\"detail-content\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "capacity", array()), "html", null, true);
        echo "</span></p>
            <p class=\"detail\">Volumen de alcohol: <span class=\"detail-content\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "volume", array()), "html", null, true);
        echo "%</span></p>
            <p class=\"detail\">Maridaje: <span class=\"detail-content\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "maridaje", array()), "html", null, true);
        echo "</span></p>
            <button class=\"btn btn-theme m-b-1\" type=\"button\">
       <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>  Agregar al carrito</button>
            <button class=\"btn btn-theme1 m-b-1\" type=\"button\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> Agregar a la lista de deseos</button>
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
        // line 36
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
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a href=\"#\">
                                    <img class=\"media-object img-thumbnail\" alt=\"64x64\" src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+\">
                                </a>
                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-half-o\"></i>
                                </div>
                            </div>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>John Thor</strong></h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a href=\"#\">
                                    <img class=\"media-object img-thumbnail\" alt=\"64x64\" src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+\">
                                </a>
                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-half-o\"></i>
                                    <i class=\"fa fa-star-o\"></i>
                                </div>
                            </div>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>Michael</strong></h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Review Tab Content -->

            </div>
            <!-- End Tab panes -->

        </div>
    </div>
    <div>
        <div class=\"title\"><span>Evalua este vino</span></div>
        <form role=\"form\">
            <div class=\"form-group col-md-12\">
                <label>Rating</label>
                <div class=\"clearfix\"></div>
                <div class=\"input-rating\"></div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"><p >50% (50 review)</p></div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 20%\"><p >20% (50 review)</p></div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 20%\"><p >20% (50 review)</p></div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 5%\"><p >5% (50 review)</p></div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 5%\"><p >5% (50 review)</p></div>
                </div>
            </div>

            <div class=\"form-group col-md-12\">
                <label for=\"Review\">Deja tu comentario</label>
                <textarea id=\"Review\" class=\"form-control\" rows=\"5\"></textarea>
            </div>
            <div class=\"form-group col-md-12\">
                <button type=\"submit\" class=\"btn btn-theme\">Enviar review</button>
            </div>
        </form>
    </div>
    <!-- Related Products -->
    <div class=\"row m-t-3\">
        <div class=\"col-xs-12\">
            <div class=\"title\"><span>Productos relacionados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset\">
                ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 131
            echo "                    <div class=\"box-product-outer\">
                        <div class=\"box-product\">
                            <div class=\"img-wrapper\">
                                <a href=\"detail.html\">
                                    <img alt=\"Product\" src=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\">
                                </a>
                                <div class=\"tags\">
                                    <span class=\"label-tags\"><span class=\"label label-danger arrowed\">-10%</span></span>
                                </div>
                            </div>
                            <h6><a href=\"";
            // line 141
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
            // line 152
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
        // line 162
        echo "            </div>
        </div>
    </div>
</div>
<!-- End Related Products -->

</div>
<!-- End Main Content -->";
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
        return array (  269 => 162,  253 => 152,  237 => 141,  228 => 135,  222 => 131,  218 => 130,  121 => 36,  104 => 22,  100 => 21,  96 => 20,  93 => 19,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  28 => 8,  19 => 1,);
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
                <img src=\"{{product.featured_image.getPath}}\" data-zoom-image=\"{{product.featured_image.getPath}}\" alt=\"\">
            </div>
        </div>
        <!-- End Image List -->
        <div class=\"col-sm-8 col-md-8\">
            <div class=\"title\"><span>{{product.title}}</span></div>
            <p>Precio: <span style=\"color: #c1272d;font-size:20px;font-weight:400\" >RD\${{product.price|number_format}} </span></p>
            <p class=\"detail\">Tipo: <span class=\"detail-content\">{{product.category.title}}</span></p>
            <p class=\"detail\">Productor: <span class=\"detail-content\">{{product.productor}}</span></p>
            <p class=\"detail\">Pais: <span class=\"detail-content\">{{product.country.name}}</span></p>
            <p class=\"detail\">Uvas: <span class=\"detail-content\">{% for u in product.uvas %}{{u.title}}{% if loop.last %}.{% else %},&nbsp;{% endif %}{% endfor %}
            </span></p>
            <p class=\"detail\">Capacidad: <span class=\"detail-content\">{{product.capacity}}</span></p>
            <p class=\"detail\">Volumen de alcohol: <span class=\"detail-content\">{{product.volume}}%</span></p>
            <p class=\"detail\">Maridaje: <span class=\"detail-content\">{{product.maridaje}}</span></p>
            <button class=\"btn btn-theme m-b-1\" type=\"button\">
       <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>  Agregar al carrito</button>
            <button class=\"btn btn-theme1 m-b-1\" type=\"button\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> Agregar a la lista de deseos</button>
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
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a href=\"#\">
                                    <img class=\"media-object img-thumbnail\" alt=\"64x64\" src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+\">
                                </a>
                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-half-o\"></i>
                                </div>
                            </div>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>John Thor</strong></h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <div class=\"media\">
                            <div class=\"media-left\">
                                <a href=\"#\">
                                    <img class=\"media-object img-thumbnail\" alt=\"64x64\" src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+\">
                                </a>
                                <div class=\"product-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star-half-o\"></i>
                                    <i class=\"fa fa-star-o\"></i>
                                </div>
                            </div>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\"><strong>Michael</strong></h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Review Tab Content -->

            </div>
            <!-- End Tab panes -->

        </div>
    </div>
    <div>
        <div class=\"title\"><span>Evalua este vino</span></div>
        <form role=\"form\">
            <div class=\"form-group col-md-12\">
                <label>Rating</label>
                <div class=\"clearfix\"></div>
                <div class=\"input-rating\"></div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"><p >50% (50 review)</p></div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 20%\"><p >20% (50 review)</p></div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 20%\"><p >20% (50 review)</p></div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 5%\"><p >5% (50 review)</p></div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 5%\"><p >5% (50 review)</p></div>
                </div>
            </div>

            <div class=\"form-group col-md-12\">
                <label for=\"Review\">Deja tu comentario</label>
                <textarea id=\"Review\" class=\"form-control\" rows=\"5\"></textarea>
            </div>
            <div class=\"form-group col-md-12\">
                <button type=\"submit\" class=\"btn btn-theme\">Enviar review</button>
            </div>
        </form>
    </div>
    <!-- Related Products -->
    <div class=\"row m-t-3\">
        <div class=\"col-xs-12\">
            <div class=\"title\"><span>Productos relacionados</span></div>
            <div class=\"related-product-slider owl-controls-top-offset\">
                {% for p in products %}
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
<!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/producto-detalle.htm", "");
    }
}
