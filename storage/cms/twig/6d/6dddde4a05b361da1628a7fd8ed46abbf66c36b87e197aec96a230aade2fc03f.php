<?php

/* /var/www/html/themes/winelivery/pages/checkout2.htm */
class __TwigTemplate_0ad240362fc9a018b924143bb9bd871d45c0dca15b645fe5fde4e44a71f17fb4 extends Twig_Template
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
        <div class=\"title\"><span>Recibo de pago</span></div>
        <div class=\"alert alert-success\" role=\"alert\">Tu pedido fue realizado correctamente. Para reclamaciones o devoluciones llamanos al 809-636-1208 o escribenos a  wineliveryrd@gmail.com</div>
        <!-- Shopping Cart List -->
        <div class=\"col-md-8\">

          <div class=\"table-responsive\">
            <table class=\"table table-cart\">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th>SubTotal</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 22
            echo "                <tr>
                  <td class=\"img-cart\">
                    <a href=\"";
            // line 24
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["p"], "product", array()), "id", array())));
            echo "\">
                      <img alt=\"Product\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "product", array()), "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\" class=\"img-thumbnail\">
                    </a>
                  </td>
                  <td>
                    <p><a href=\"";
            // line 29
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["p"], "product", array()), "id", array())));
            echo "\" class=\"d-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "product", array()), "title", array()), "html", null, true);
            echo "</a></p>
                  </td>
                   <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "quantity", array()), "html", null, true);
            echo "</td>
                   <td class=\"unit\">RD\$";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "product", array()), "price", array())), "html", null, true);
            echo "</td>
                   <td class=\"sub\">";
            // line 33
            $context["sub"] = ($this->getAttribute($this->getAttribute($context["p"], "product", array()), "price", array()) * $this->getAttribute($context["p"], "quantity", array()));
            echo "RD\$";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sub"]) ? $context["sub"] : null)), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "              </tbody>
            </table>
            <div class=\"alert alert-warning\">
            <p style=\"font-size: 15px\">*Nuestro horario de entrega es de Martes a Sábado de 02:00 PM a 12:00 AM y los Domingos de 02:00 PM a 10:00 PM, si realizas tu orden fuera de este horario será entregada inmediatamente nuestro servicio de delivery este disponible.</p>
            </div>
          </div>
        </div>
        <!-- End Shopping Cart List -->
        <div class=\"col-md-3 cart-detailbox\">
          <h4>Orden de Compra</h4>
          <p class=\"detailbox-items\">Dirección:<span class=\"detailbox-content\">  ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "address_id", array()), "html", null, true);
        echo "</span></p>
          <p class=\"detailbox-items\">Total items:<span class=\"detailbox-content\"> ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["cart_counter2"]) ? $context["cart_counter2"] : null), "html", null, true);
        echo "</span></p>
          <p class=\"detailbox-items\">Costo:<span class=\"detailbox-content\" > RD\$ ";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total"]) ? $context["cart_total"] : null)), "html", null, true);
        echo "</span></p>
          <p class=\"detailbox-items\">Costo de Envío:<span class=\"detailbox-content\"> \$90</span></p>
          <p class=\"detailbox-items\">Costo Total:<span class=\"detailbox-content\"> RD\$ ";
        // line 50
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total_envio"]) ? $context["cart_total_envio"] : null)), "html", null, true);
        echo "</span></p>
          <p class=\"detailbox-items\" style=\"font-size: 14px; color:black\">Servicio al cliente: <i class=\"fa fa-whatsapp\" aria-hidden=\"true\"></i> (849)-259-4658</p>  
        </div>

      </div>
    </div>
    

<!-- Lightbox para la pagina -->
<div class=\"modal fade\" id=\"userguidemodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\" style=\"background-color: #C1272D\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\" style=\"color: white\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" style=\"height: 200px; padding-top:0px\">
        <div class=\"col-md-9\" style=\"padding-top: 15px\">
          <div>
            <div class=\"col-md-1 col-sm-3\" style=\"left;padding: 4px 0px 0px 0px\">
                <img src=\"";
        // line 71
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/check.png");
        echo "\" style=\"width: 40px; height: 40px\">
            </div>
            <div class=\"col-md-10 col-sm-6\">
              <h6 style=\"color:#C1272D; font-size: 16px; padding-left: 10px\">TU ORDEN HA SIDO REALIZADA EXITOSAMENTE</h6>
            </div>
            
          </div>
          ";
        // line 78
        if (($this->getAttribute((isset($context["orderData"]) ? $context["orderData"] : null), "pago", array()) == "Tarjeta")) {
            // line 79
            echo "          <p>Nuestro delivery se presentará al lugar de destino con un verifone, debe estar presente el titular del plastico para realizar la transacción.</p>
          ";
        } else {
            // line 81
            echo "          <p>Nuestro delivery se presentará al lugar de destino con los productos y dinero efectivo para devolverle.</p>
          ";
        }
        // line 83
        echo "          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" style=\"background-color: #FEB500; border-radius: 100px; padding: 5px 25px 5px 25px; font-weight: 700; color: black; font-size: 12px\">ENTENDIDO</button>
        </div>
        <div class=\"col-md-3 hidden-xs\">
          <img class=\"img-responsive\" style=\"width: 80px;height: 180px\" src=\"";
        // line 86
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/wine.png");
        echo "\">   
        </div>
      </div>
    </div>
</div>

<!-- Lightbox para la pagina -->

";
        // line 94
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 95
        echo "<script>
    \$( document ).ready(function() {
        \$(\"#userguidemodal\").modal('show');
    });
</script>
";
        // line 94
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/checkout2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 94,  173 => 95,  171 => 94,  160 => 86,  155 => 83,  151 => 81,  147 => 79,  145 => 78,  135 => 71,  111 => 50,  106 => 48,  102 => 47,  98 => 46,  86 => 36,  75 => 33,  71 => 32,  67 => 31,  60 => 29,  53 => 25,  49 => 24,  45 => 22,  41 => 21,  19 => 1,);
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
        <div class=\"title\"><span>Recibo de pago</span></div>
        <div class=\"alert alert-success\" role=\"alert\">Tu pedido fue realizado correctamente. Para reclamaciones o devoluciones llamanos al 809-636-1208 o escribenos a  wineliveryrd@gmail.com</div>
        <!-- Shopping Cart List -->
        <div class=\"col-md-8\">

          <div class=\"table-responsive\">
            <table class=\"table table-cart\">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th>SubTotal</th>
                </tr>
              </thead>
              <tbody>
                {% for p in products %}
                <tr>
                  <td class=\"img-cart\">
                    <a href=\"{{\"producto-detalle\"|page({id:p.product.id})}}\">
                      <img alt=\"Product\" src=\"{{p.product.featured_image.getPath}}\" class=\"img-thumbnail\">
                    </a>
                  </td>
                  <td>
                    <p><a href=\"{{\"producto-detalle\"|page({id:p.product.id})}}\" class=\"d-block\">{{p.product.title}}</a></p>
                  </td>
                   <td>{{p.quantity}}</td>
                   <td class=\"unit\">RD\${{p.product.price|number_format}}</td>
                   <td class=\"sub\">{% set sub = p.product.price * p.quantity %}RD\${{sub|number_format}}</td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
            <div class=\"alert alert-warning\">
            <p style=\"font-size: 15px\">*Nuestro horario de entrega es de Martes a Sábado de 02:00 PM a 12:00 AM y los Domingos de 02:00 PM a 10:00 PM, si realizas tu orden fuera de este horario será entregada inmediatamente nuestro servicio de delivery este disponible.</p>
            </div>
          </div>
        </div>
        <!-- End Shopping Cart List -->
        <div class=\"col-md-3 cart-detailbox\">
          <h4>Orden de Compra</h4>
          <p class=\"detailbox-items\">Dirección:<span class=\"detailbox-content\">  {{order.address_id}}</span></p>
          <p class=\"detailbox-items\">Total items:<span class=\"detailbox-content\"> {{cart_counter2}}</span></p>
          <p class=\"detailbox-items\">Costo:<span class=\"detailbox-content\" > RD\$ {{ cart_total|number_format}}</span></p>
          <p class=\"detailbox-items\">Costo de Envío:<span class=\"detailbox-content\"> \$90</span></p>
          <p class=\"detailbox-items\">Costo Total:<span class=\"detailbox-content\"> RD\$ {{ cart_total_envio|number_format}}</span></p>
          <p class=\"detailbox-items\" style=\"font-size: 14px; color:black\">Servicio al cliente: <i class=\"fa fa-whatsapp\" aria-hidden=\"true\"></i> (849)-259-4658</p>  
        </div>

      </div>
    </div>
    

<!-- Lightbox para la pagina -->
<div class=\"modal fade\" id=\"userguidemodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\" style=\"background-color: #C1272D\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\" style=\"color: white\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" style=\"height: 200px; padding-top:0px\">
        <div class=\"col-md-9\" style=\"padding-top: 15px\">
          <div>
            <div class=\"col-md-1 col-sm-3\" style=\"left;padding: 4px 0px 0px 0px\">
                <img src=\"{{\"assets/images/check.png\"|theme}}\" style=\"width: 40px; height: 40px\">
            </div>
            <div class=\"col-md-10 col-sm-6\">
              <h6 style=\"color:#C1272D; font-size: 16px; padding-left: 10px\">TU ORDEN HA SIDO REALIZADA EXITOSAMENTE</h6>
            </div>
            
          </div>
          {% if orderData.pago == \"Tarjeta\" %}
          <p>Nuestro delivery se presentará al lugar de destino con un verifone, debe estar presente el titular del plastico para realizar la transacción.</p>
          {% else %}
          <p>Nuestro delivery se presentará al lugar de destino con los productos y dinero efectivo para devolverle.</p>
          {% endif %}
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" style=\"background-color: #FEB500; border-radius: 100px; padding: 5px 25px 5px 25px; font-weight: 700; color: black; font-size: 12px\">ENTENDIDO</button>
        </div>
        <div class=\"col-md-3 hidden-xs\">
          <img class=\"img-responsive\" style=\"width: 80px;height: 180px\" src=\"{{\"assets/images/wine.png\"|theme}}\">   
        </div>
      </div>
    </div>
</div>

<!-- Lightbox para la pagina -->

{% put scripts %}
<script>
    \$( document ).ready(function() {
        \$(\"#userguidemodal\").modal('show');
    });
</script>
{% endput %}", "/var/www/html/themes/winelivery/pages/checkout2.htm", "");
    }
}
