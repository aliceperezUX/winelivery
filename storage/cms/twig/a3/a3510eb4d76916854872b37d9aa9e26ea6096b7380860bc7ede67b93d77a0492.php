<?php

/* /var/www/html/themes/winelivery/pages/detalle-orden.htm */
class __TwigTemplate_2e9f7624e79ff1e160a3e8c63989c2acfbc7d4a2de07b2b83864eb25d08ca50a extends Twig_Template
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
        echo "<div class=\"container m-t-3\">
  <div class=\"row\">
  <div class=\"alert alert-danger\">
    \t<p style=\"font-size: 15px\"><STRONG><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> IMPORTANTE:</STRONG> Nuestro horario de entrega es de <strong> Martes a Sábado de 02:00 PM a 12:00 AM y los Domingos de 02:00 PM a 10:00 PM</strong>, si realizas tu orden fuera de este horario será entregada inmediatamente nuestro servicio de delivery este disponible.</p>
    </div>
    ";
        // line 6
        if (((isset($context["ResponseCode"]) ? $context["ResponseCode"] : null) == "ISO8583")) {
            // line 7
            echo "    <div class=\"alert alert-danger\">
    \t<p style=\"font-size: 15px\"><STRONG><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> SU TRANSACCIÓN HA SIDO RECHAZADA.</STRONG></p>
    </div>
    ";
        }
        // line 11
        echo "    <div class=\"title\"><span>Orden Creada, Proceder a Pagar.</span></div>
    <!-- Shopping Cart List -->
    <div class=\"col-md-8\">

      <div class=\"table-responsive\">
        <table class=\"table table-cart\">
          <thead>
            <tr>
              <th></th>
              <th></th>

              <th>Precio</th>
              <th>SubTotal</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 28
            echo "                <tr>
                  <td class=\"img-cart\">
                      <img alt=\"Product\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "product", array()), "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\" style=\"max-width: initial;\" class=\"img-thumbnail\">
                  </td>
                  <td>
                    <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "product", array()), "title", array()), "html", null, true);
            echo "</p>
                  </td>
                  <td class=\"unit\">RD\$";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "product", array()), "price", array())), "html", null, true);
            echo "</td>
                  <td class=\"sub\">";
            // line 36
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
        // line 39
        echo "          </tbody>
        </table>
        <div class=\"alert alert-warning\">
        <p style=\"font-size: 15px\">*Nuestro horario de entrega es de Martes a Sábado de 02:00 PM a 12:00 AM y los Domingos de 02:00 PM a 10:00 PM, si realizas tu orden fuera de este horario será entregada inmediatamente nuestro servicio de delivery este disponible.</p>
        </div>
       
      </div>
    </div>
    <!-- End Shopping Cart List -->
    <div class=\"col-md-3 cart-detailbox\">
      <h4>Orden de Compras</h4>
      <p class=\"detailbox-items\">Dirección:<span class=\"detailbox-content\"> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "address_id", array()), "html", null, true);
        echo "</span></p>
      <p class=\"detailbox-items\">Total items:<span class=\"detailbox-content\"> ";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["cart_counter"]) ? $context["cart_counter"] : null), "html", null, true);
        echo "</span></p>
      <p class=\"detailbox-items\">Costo:<span class=\"detailbox-content\" > RD\$ ";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total"]) ? $context["cart_total"] : null)), "html", null, true);
        echo "</span></p>
      <p class=\"detailbox-items\">Costo de Envío:<span class=\"detailbox-content\"> \$90</span></p>
      <p class=\"detailbox-items\">Costo Total:<span class=\"detailbox-content\"> RD\$ ";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total_envio"]) ? $context["cart_total_envio"] : null)), "html", null, true);
        echo "</span></p><br>
      ";
        // line 55
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) != "Completada")) {
            // line 56
            echo "      <div class=\"alert alert-info\" style=\"font-size:12px;\">*PARA FACTURAS CON RNC COMPLETAR EL SIGUIENTE CAMPO.</div>
      <form id=\"rncForm\" method=\"POST\">
          <input type=\"text\" name=\"rnc\" class=\"form-control rnc\" placeholder=\"RNC\"/> <br>
          <p class=\"detailbox-items\">Pagar con:</p>
          <input type=\"radio\" name=\"payment\" value=\"1\" style=\"display: inline\" checked> Tarjeta <br>
          <input type=\"radio\" name=\"payment\" value=\"2\" style=\"display: inline\"> Efectivo <br>
          <input type=\"text\" name=\"cambio\" class=\"form-control rnc\" placeholder=\"Cambio\" style=\"display: none\"/> <br>
          <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" id=\"scheduleCheckbox\"> He leido y acepto el horario de entregas.
          </label>
        </div>
        <div id=\"scheduleMessage\" style=\"display:none;\" class=\"alert alert-danger\">
          DEBES ACEPTAR EL HORARIO DE ENTREGA
        </div>
          <button type=\"submit\" class=\"btn btn-theme col-md-12\" onClick=\"pagarButton(); return false;\">Completar Orden</button>
      </form>
      
        <!-- <form id=\"azulForm\" action=\"https://pagos.azul.com.do/paymentpage/default.aspx\" method=\"post\">
            <input type=\"hidden\" id=\"MerchantId\" name=\"MerchantId\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["MerchantId"]) ? $context["MerchantId"] : null), "html", null, true);
            echo "\" >
            <input type=\"hidden\" id=\"MerchantName\" name=\"MerchantName\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["MerchantName"]) ? $context["MerchantName"] : null), "html", null, true);
            echo "\" >
            <input type=\"hidden\" id=\"MerchantType\" name=\"MerchantType\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["MerchantType"]) ? $context["MerchantType"] : null), "html", null, true);
            echo "\" >
            <input type=\"hidden\" id=\"CurrencyCode\" name=\"CurrencyCode\" value=\"\$\" >
            <input type=\"hidden\" id=\"OrderNumber\" name=\"OrderNumber\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
            echo "\" >
            <input type=\"hidden\" id=\"Amount\" name=\"Amount\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["ammount"]) ? $context["ammount"] : null), "html", null, true);
            echo "\" >
            <input type=\"hidden\" id=\"Itbis\" name=\"Itbis\" value=\"0000\" >
            <input type=\"hidden\" id=\"ApprovedUrl\" name=\"ApprovedUrl\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["ApprovedUrl"]) ? $context["ApprovedUrl"] : null), "html", null, true);
            echo "\" >
            <input type=\"hidden\" id=\"DeclinedUrl\" name=\"DeclinedUrl\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["DeclinedUrl"]) ? $context["DeclinedUrl"] : null), "html", null, true);
            echo "\" >
            <input type=\"hidden\" id=\"CancelUrl\" name=\"CancelUrl\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["CancelUrl"]) ? $context["CancelUrl"] : null), "html", null, true);
            echo "\" >
            <input type=\"hidden\" id=\"ResponsePostUrl\" name=\"ResponsePostUrl\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["ResponsePostUrl"]) ? $context["ResponsePostUrl"] : null), "html", null, true);
            echo "\" >
            <input type=\"hidden\" id=\"UseCustomField1\" name=\"UseCustomField1\" value=\"0\" >
            <input type=\"hidden\" id=\"CustomField1Label\" name=\"CustomField1Label\" value=\"Custom1\" >
            <input type=\"hidden\" id=\"CustomField1Value\" name=\"CustomField1Value\" value=\"Value1\" >
            <input type=\"hidden\" id=\"UseCustomField2\" name=\"UseCustomField2\" value=\"0\" >
            <input type=\"hidden\" id=\"CustomField2Label\" name=\"CustomField2Label\" value=\"Custom2\" >
            <input type=\"hidden\" id=\"CustomField2Value\" name=\"CustomField2Value\" value=\"Value2\" >
            <input type=\"hidden\" id=\"AuthHash\" name=\"AuthHash\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["AuthHash"]) ? $context["AuthHash"] : null), "html", null, true);
            echo "\" >
            <input type=\"hidden\" id=\"ShowTransactionResult\" name=\"ShowTransactionResult\" value=\"0\">
            <button type=\"button\" class=\"btn btn-theme col-md-12\" onClick=\"pagarButton();\">Pagar</button>
        </form> -->
        ";
        }
        // line 97
        echo "    </div>
  </div>
</div>

";
        // line 101
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 102
        echo "<script>
    \$( document ).ready(function() {
        \$('.rnc').mask('00000000000');
        \$('input[name=payment]').change(function(){
            if(\$('input[name=payment]:checked').val() == \"2\"){
                \$('input[name=cambio]').fadeIn('fast');
            } else {
                \$('input[name=cambio]').fadeOut('fast');
            }
        });
    });

    function pagarButton()
    {
        if(\$('#scheduleCheckbox').is(\":checked\")){
            var r = confirm(\"¿Esta seguro que desea completar esta orden?\");
            if (r == true) {
                \$('#rncForm').request('onRncForm', {data: \$('#rncForm').serialize(),
            \t    success: function(data){
            \t        location.href = \"/checkout2/";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo "\";
            \t    }
        \t    });
            }
        } else {
            \$(\"#scheduleMessage\").fadeIn(\"fast\");
        }
    }
</script>
";
        // line 101
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/detalle-orden.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 101,  220 => 121,  199 => 102,  197 => 101,  191 => 97,  183 => 92,  173 => 85,  169 => 84,  165 => 83,  161 => 82,  156 => 80,  152 => 79,  147 => 77,  143 => 76,  139 => 75,  118 => 56,  116 => 55,  112 => 54,  107 => 52,  103 => 51,  99 => 50,  86 => 39,  75 => 36,  71 => 35,  66 => 33,  60 => 30,  56 => 28,  52 => 27,  34 => 11,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container m-t-3\">
  <div class=\"row\">
  <div class=\"alert alert-danger\">
    \t<p style=\"font-size: 15px\"><STRONG><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> IMPORTANTE:</STRONG> Nuestro horario de entrega es de <strong> Martes a Sábado de 02:00 PM a 12:00 AM y los Domingos de 02:00 PM a 10:00 PM</strong>, si realizas tu orden fuera de este horario será entregada inmediatamente nuestro servicio de delivery este disponible.</p>
    </div>
    {% if ResponseCode == \"ISO8583\" %}
    <div class=\"alert alert-danger\">
    \t<p style=\"font-size: 15px\"><STRONG><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i> SU TRANSACCIÓN HA SIDO RECHAZADA.</STRONG></p>
    </div>
    {% endif %}
    <div class=\"title\"><span>Orden Creada, Proceder a Pagar.</span></div>
    <!-- Shopping Cart List -->
    <div class=\"col-md-8\">

      <div class=\"table-responsive\">
        <table class=\"table table-cart\">
          <thead>
            <tr>
              <th></th>
              <th></th>

              <th>Precio</th>
              <th>SubTotal</th>
            </tr>
          </thead>
          <tbody>
            {% for p in products %}
                <tr>
                  <td class=\"img-cart\">
                      <img alt=\"Product\" src=\"{{p.product.featured_image.getPath}}\" style=\"max-width: initial;\" class=\"img-thumbnail\">
                  </td>
                  <td>
                    <p>{{p.product.title}}</p>
                  </td>
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
      <h4>Orden de Compras</h4>
      <p class=\"detailbox-items\">Dirección:<span class=\"detailbox-content\"> {{order.address_id}}</span></p>
      <p class=\"detailbox-items\">Total items:<span class=\"detailbox-content\"> {{cart_counter}}</span></p>
      <p class=\"detailbox-items\">Costo:<span class=\"detailbox-content\" > RD\$ {{ cart_total|number_format}}</span></p>
      <p class=\"detailbox-items\">Costo de Envío:<span class=\"detailbox-content\"> \$90</span></p>
      <p class=\"detailbox-items\">Costo Total:<span class=\"detailbox-content\"> RD\$ {{ cart_total_envio|number_format}}</span></p><br>
      {% if order.status != \"Completada\" %}
      <div class=\"alert alert-info\" style=\"font-size:12px;\">*PARA FACTURAS CON RNC COMPLETAR EL SIGUIENTE CAMPO.</div>
      <form id=\"rncForm\" method=\"POST\">
          <input type=\"text\" name=\"rnc\" class=\"form-control rnc\" placeholder=\"RNC\"/> <br>
          <p class=\"detailbox-items\">Pagar con:</p>
          <input type=\"radio\" name=\"payment\" value=\"1\" style=\"display: inline\" checked> Tarjeta <br>
          <input type=\"radio\" name=\"payment\" value=\"2\" style=\"display: inline\"> Efectivo <br>
          <input type=\"text\" name=\"cambio\" class=\"form-control rnc\" placeholder=\"Cambio\" style=\"display: none\"/> <br>
          <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" id=\"scheduleCheckbox\"> He leido y acepto el horario de entregas.
          </label>
        </div>
        <div id=\"scheduleMessage\" style=\"display:none;\" class=\"alert alert-danger\">
          DEBES ACEPTAR EL HORARIO DE ENTREGA
        </div>
          <button type=\"submit\" class=\"btn btn-theme col-md-12\" onClick=\"pagarButton(); return false;\">Completar Orden</button>
      </form>
      
        <!-- <form id=\"azulForm\" action=\"https://pagos.azul.com.do/paymentpage/default.aspx\" method=\"post\">
            <input type=\"hidden\" id=\"MerchantId\" name=\"MerchantId\" value=\"{{MerchantId}}\" >
            <input type=\"hidden\" id=\"MerchantName\" name=\"MerchantName\" value=\"{{MerchantName}}\" >
            <input type=\"hidden\" id=\"MerchantType\" name=\"MerchantType\" value=\"{{MerchantType}}\" >
            <input type=\"hidden\" id=\"CurrencyCode\" name=\"CurrencyCode\" value=\"\$\" >
            <input type=\"hidden\" id=\"OrderNumber\" name=\"OrderNumber\" value=\"{{order.id}}\" >
            <input type=\"hidden\" id=\"Amount\" name=\"Amount\" value=\"{{ammount}}\" >
            <input type=\"hidden\" id=\"Itbis\" name=\"Itbis\" value=\"0000\" >
            <input type=\"hidden\" id=\"ApprovedUrl\" name=\"ApprovedUrl\" value=\"{{ApprovedUrl}}\" >
            <input type=\"hidden\" id=\"DeclinedUrl\" name=\"DeclinedUrl\" value=\"{{DeclinedUrl}}\" >
            <input type=\"hidden\" id=\"CancelUrl\" name=\"CancelUrl\" value=\"{{CancelUrl}}\" >
            <input type=\"hidden\" id=\"ResponsePostUrl\" name=\"ResponsePostUrl\" value=\"{{ResponsePostUrl}}\" >
            <input type=\"hidden\" id=\"UseCustomField1\" name=\"UseCustomField1\" value=\"0\" >
            <input type=\"hidden\" id=\"CustomField1Label\" name=\"CustomField1Label\" value=\"Custom1\" >
            <input type=\"hidden\" id=\"CustomField1Value\" name=\"CustomField1Value\" value=\"Value1\" >
            <input type=\"hidden\" id=\"UseCustomField2\" name=\"UseCustomField2\" value=\"0\" >
            <input type=\"hidden\" id=\"CustomField2Label\" name=\"CustomField2Label\" value=\"Custom2\" >
            <input type=\"hidden\" id=\"CustomField2Value\" name=\"CustomField2Value\" value=\"Value2\" >
            <input type=\"hidden\" id=\"AuthHash\" name=\"AuthHash\" value=\"{{ AuthHash }}\" >
            <input type=\"hidden\" id=\"ShowTransactionResult\" name=\"ShowTransactionResult\" value=\"0\">
            <button type=\"button\" class=\"btn btn-theme col-md-12\" onClick=\"pagarButton();\">Pagar</button>
        </form> -->
        {% endif %}
    </div>
  </div>
</div>

{% put scripts %}
<script>
    \$( document ).ready(function() {
        \$('.rnc').mask('00000000000');
        \$('input[name=payment]').change(function(){
            if(\$('input[name=payment]:checked').val() == \"2\"){
                \$('input[name=cambio]').fadeIn('fast');
            } else {
                \$('input[name=cambio]').fadeOut('fast');
            }
        });
    });

    function pagarButton()
    {
        if(\$('#scheduleCheckbox').is(\":checked\")){
            var r = confirm(\"¿Esta seguro que desea completar esta orden?\");
            if (r == true) {
                \$('#rncForm').request('onRncForm', {data: \$('#rncForm').serialize(),
            \t    success: function(data){
            \t        location.href = \"/checkout2/{{ order.id }}\";
            \t    }
        \t    });
            }
        } else {
            \$(\"#scheduleMessage\").fadeIn(\"fast\");
        }
    }
</script>
{% endput %}", "/var/www/html/themes/winelivery/pages/detalle-orden.htm", "");
    }
}
