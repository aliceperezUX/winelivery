<?php

/* /var/www/html/themes/winelivery/pages/direcciones.htm */
class __TwigTemplate_78bd417acea4be70a5203ed82e3ecaab7dcf5c81f33e64e1c9bb4e91bc555db8 extends Twig_Template
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

   ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("perfilmenu"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "   
    <!-- My Address Content -->
    <div class=\"col-sm-8 col-md-9\">
      <div class=\"title m-b-2\"><span>Nueva direcci&oacute;n</span></div>
      <div class=\"alert alert-info\" role=\"alert\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>  Si tu sector no esta en la lista es porque se sale de nuestro poligono de entregas. <strong>Disculpa los incovenientes.</strong></div>
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <form id=\"addressesForm\">
            <div class=\"form-group\">
              <label >Sector</label>
              <select id=\"sectors\" name=\"sector\" class=\"form-control\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sectors"]) ? $context["sectors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 18
            echo "                    <option ";
            if (($this->getAttribute($context["s"], "title", array()) == $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "sector", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "title", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label>Calle</label>
              <input value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "calle", array()), "html", null, true);
        echo "\" name=\"calle\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Residencial y Edificio</label>
              <input value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "residencial", array()), "html", null, true);
        echo "\" name=\"residencial\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Apto/No</label>
              <input value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "numero", array()), "html", null, true);
        echo "\" name=\"numero\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Telefono</label>
              <input name=\"telefono\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "telefono", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control phone\" >
            </div>
            <div class=\"form-group\">
              <label>Celular</label>
              <input name=\"celular\" type=\"text\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "celular", array()), "html", null, true);
        echo "\" class=\"form-control phone\" >
            </div>
            <div class=\"form-group\">
              <label>Proximo a</label>
              <textarea name=\"proximo\" class=\"form-control\" rows=\"5\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "proximo", array()), "html", null, true);
        echo "</textarea>
            </div>
            <input name=\"id_control\" type=\"hidden\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "id", array()), "html", null, true);
        echo "\">
            ";
        // line 47
        if ((isset($context["address"]) ? $context["address"] : null)) {
            // line 48
            echo "                <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("checkout");
            echo "\" class=\"btn btn-theme pull-left\">Volver al Checkout</a>
            ";
        }
        // line 50
        echo "            <button onClick=\"addressesForm();\" type=\"button\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> Guardar direcci&oacute;n</button>
          </form>
        </div>
      </div><br>
      <div style=\"display:none;\" id=\"addressesFormMessage\" class=\"alert alert-success\">
          Direcci&oacute;n agregada correctamente.
      </div>
    </div>
    <!-- End My Address Content -->
    <!-- My Address Content -->
    <div class=\"col-sm-8 col-md-12\">
      <div class=\"title m-b-2\"><span>Direcciones guardadas</span></div>
      <div id=\"updateAddresses\" class=\"row\">
          ";
        // line 63
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['addresses'] = (isset($context["addresses"]) ? $context["addresses"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("addresses"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "      </div>
    </div>
    <!-- End My Address Content -->

  </div>
</div>
<!-- End Main Content -->
";
        // line 71
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 72
        echo "<script>
    \$( document ).ready(function() {
        \$('.phone').mask('000-000-0000');
    });
    
    function eliminarAddress(id)
    {
        \$.request('onDeleteAddress', {data: {id:id}});
    }
    
    function editAddress(id, sector, calle, residencial, numero, telefono, celular, proximo)
    {
        console.log(id);
        console.log(sector);
        console.log(calle);
        console.log(residencial);
        console.log(numero);
        console.log(telefono);
        console.log(celular);
        console.log(proximo);
        \$(\"input[name=id_control]\").val(id);
        \$(\"#sectors\").val(sector);
        \$(\"input[name=calle]\").val(calle);
        \$(\"input[name=residencial]\").val(residencial);
        \$(\"input[name=numero]\").val(numero);
        \$(\"input[name=telefono]\").val(telefono);
        \$(\"input[name=celular]\").val(celular);
        \$(\"textarea[name=proximo]\").val(proximo);
        //\$(\"#addressesForm\").reset();
    }
    function addressesForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        
    \tif(\$('input[name=calle]').val() === ''){\$('input[name=calle]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=calle]').css('border', '');}
    \t
    \tif(\$('input[name=numero]').val() === ''){\$('input[name=numero]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=numero]').css('border', '');}
    \t
    \tif(\$('input[name=telefono]').val() === ''){\$('input[name=telefono]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=telefono]').css('border', '');}
    \t
    \tif(\$('textarea[name=proximo]').val() === ''){\$('textarea[name=proximo]').css('border', '1px solid red');error = false;} 
    \telse{\$('textarea[name=proximo]').css('border', '');}
    
    \tif(error)
    \t{
    \t\t\$('#addressesForm').request('onAddressesForm', {data: \$('#addressesForm').serialize()});
    \t\t\$(\"#addressesFormMessage\").fadeIn(\"fast\");
    \t} 
    \telse { return false; }
    }
</script>
";
        // line 71
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/direcciones.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 71,  150 => 72,  148 => 71,  139 => 64,  134 => 63,  119 => 50,  113 => 48,  111 => 47,  107 => 46,  102 => 44,  95 => 40,  88 => 36,  81 => 32,  74 => 28,  67 => 24,  61 => 20,  46 => 18,  42 => 17,  29 => 6,  25 => 5,  19 => 1,);
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

   {% partial \"perfilmenu\" %}
   
    <!-- My Address Content -->
    <div class=\"col-sm-8 col-md-9\">
      <div class=\"title m-b-2\"><span>Nueva direcci&oacute;n</span></div>
      <div class=\"alert alert-info\" role=\"alert\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>  Si tu sector no esta en la lista es porque se sale de nuestro poligono de entregas. <strong>Disculpa los incovenientes.</strong></div>
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <form id=\"addressesForm\">
            <div class=\"form-group\">
              <label >Sector</label>
              <select id=\"sectors\" name=\"sector\" class=\"form-control\">
                {% for s in sectors %}
                    <option {% if s.title == address.sector %} selected {% endif %} value=\"{{s.title}}\">{{s.title}}</option>
                {% endfor %}
              </select>
            </div>
            <div class=\"form-group\">
              <label>Calle</label>
              <input value=\"{{address.calle}}\" name=\"calle\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Residencial y Edificio</label>
              <input value=\"{{address.residencial}}\" name=\"residencial\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Apto/No</label>
              <input value=\"{{address.numero}}\" name=\"numero\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Telefono</label>
              <input name=\"telefono\" value=\"{{address.telefono}}\" type=\"text\" class=\"form-control phone\" >
            </div>
            <div class=\"form-group\">
              <label>Celular</label>
              <input name=\"celular\" type=\"text\" value=\"{{address.celular}}\" class=\"form-control phone\" >
            </div>
            <div class=\"form-group\">
              <label>Proximo a</label>
              <textarea name=\"proximo\" class=\"form-control\" rows=\"5\">{{address.proximo}}</textarea>
            </div>
            <input name=\"id_control\" type=\"hidden\" value=\"{{address.id}}\">
            {% if address %}
                <a href=\"{{\"checkout\"|page}}\" class=\"btn btn-theme pull-left\">Volver al Checkout</a>
            {% endif %}
            <button onClick=\"addressesForm();\" type=\"button\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> Guardar direcci&oacute;n</button>
          </form>
        </div>
      </div><br>
      <div style=\"display:none;\" id=\"addressesFormMessage\" class=\"alert alert-success\">
          Direcci&oacute;n agregada correctamente.
      </div>
    </div>
    <!-- End My Address Content -->
    <!-- My Address Content -->
    <div class=\"col-sm-8 col-md-12\">
      <div class=\"title m-b-2\"><span>Direcciones guardadas</span></div>
      <div id=\"updateAddresses\" class=\"row\">
          {% partial \"addresses\" addresses = addresses %}
      </div>
    </div>
    <!-- End My Address Content -->

  </div>
</div>
<!-- End Main Content -->
{% put scripts %}
<script>
    \$( document ).ready(function() {
        \$('.phone').mask('000-000-0000');
    });
    
    function eliminarAddress(id)
    {
        \$.request('onDeleteAddress', {data: {id:id}});
    }
    
    function editAddress(id, sector, calle, residencial, numero, telefono, celular, proximo)
    {
        console.log(id);
        console.log(sector);
        console.log(calle);
        console.log(residencial);
        console.log(numero);
        console.log(telefono);
        console.log(celular);
        console.log(proximo);
        \$(\"input[name=id_control]\").val(id);
        \$(\"#sectors\").val(sector);
        \$(\"input[name=calle]\").val(calle);
        \$(\"input[name=residencial]\").val(residencial);
        \$(\"input[name=numero]\").val(numero);
        \$(\"input[name=telefono]\").val(telefono);
        \$(\"input[name=celular]\").val(celular);
        \$(\"textarea[name=proximo]\").val(proximo);
        //\$(\"#addressesForm\").reset();
    }
    function addressesForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        
    \tif(\$('input[name=calle]').val() === ''){\$('input[name=calle]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=calle]').css('border', '');}
    \t
    \tif(\$('input[name=numero]').val() === ''){\$('input[name=numero]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=numero]').css('border', '');}
    \t
    \tif(\$('input[name=telefono]').val() === ''){\$('input[name=telefono]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=telefono]').css('border', '');}
    \t
    \tif(\$('textarea[name=proximo]').val() === ''){\$('textarea[name=proximo]').css('border', '1px solid red');error = false;} 
    \telse{\$('textarea[name=proximo]').css('border', '');}
    
    \tif(error)
    \t{
    \t\t\$('#addressesForm').request('onAddressesForm', {data: \$('#addressesForm').serialize()});
    \t\t\$(\"#addressesFormMessage\").fadeIn(\"fast\");
    \t} 
    \telse { return false; }
    }
</script>
{% endput %}", "/var/www/html/themes/winelivery/pages/direcciones.htm", "");
    }
}
