<?php

/* /home/winelivery/themes/winelivery/pages/direcciones.htm */
class __TwigTemplate_8f1a306793d19b5b25bf620e93a8caba2feda696980ca1fa21576fa1d069abe9 extends Twig_Template
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
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <form id=\"addressesForm\">
            <div class=\"form-group\">
              <label >Sector</label>
              <select id=\"sectors\" name=\"sector\" class=\"form-control\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sectors"]) ? $context["sectors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 17
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "title", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label>Calle</label>
              <input name=\"calle\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Residencial y Edificio</label>
              <input name=\"residencial\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Apto/No</label>
              <input name=\"numero\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Telefono</label>
              <input name=\"telefono\" type=\"text\" class=\"form-control phone\" >
            </div>
            <div class=\"form-group\">
              <label>Celular</label>
              <input name=\"celular\" type=\"text\" class=\"form-control phone\" >
            </div>
            <div class=\"form-group\">
              <label>Proximo a</label>
              <textarea name=\"proximo\" class=\"form-control\" rows=\"5\"></textarea>
            </div>
            <input name=\"id_control\" type=\"hidden\" value=\"\">
            <button onClick=\"addressesForm();\" type=\"button\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> Guardar direcci&oacute;n</button>
          </form>
        </div>
      </div>
    </div>
    <!-- End My Address Content -->
    <!-- My Address Content -->
    <div class=\"col-sm-8 col-md-12\">
      <div class=\"title m-b-2\"><span>Direcciones guardadas</span></div>
      <div id=\"updateAddresses\" class=\"row\">
          ";
        // line 56
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['addresses'] = (isset($context["addresses"]) ? $context["addresses"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("addresses"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "      </div>
    </div>
    <!-- End My Address Content -->

  </div>
</div>
<!-- End Main Content -->
";
        // line 64
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 65
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
    \t} 
    \telse { return false; }
    }
</script>
";
        // line 64
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/pages/direcciones.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 64,  111 => 65,  109 => 64,  100 => 57,  95 => 56,  56 => 19,  45 => 17,  41 => 16,  29 => 6,  25 => 5,  19 => 1,);
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
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <form id=\"addressesForm\">
            <div class=\"form-group\">
              <label >Sector</label>
              <select id=\"sectors\" name=\"sector\" class=\"form-control\">
                {% for s in sectors %}
                    <option value=\"{{s.title}}\">{{s.title}}</option>
                {% endfor %}
              </select>
            </div>
            <div class=\"form-group\">
              <label>Calle</label>
              <input name=\"calle\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Residencial y Edificio</label>
              <input name=\"residencial\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Apto/No</label>
              <input name=\"numero\" type=\"text\" class=\"form-control\" >
            </div>
            <div class=\"form-group\">
              <label>Telefono</label>
              <input name=\"telefono\" type=\"text\" class=\"form-control phone\" >
            </div>
            <div class=\"form-group\">
              <label>Celular</label>
              <input name=\"celular\" type=\"text\" class=\"form-control phone\" >
            </div>
            <div class=\"form-group\">
              <label>Proximo a</label>
              <textarea name=\"proximo\" class=\"form-control\" rows=\"5\"></textarea>
            </div>
            <input name=\"id_control\" type=\"hidden\" value=\"\">
            <button onClick=\"addressesForm();\" type=\"button\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> Guardar direcci&oacute;n</button>
          </form>
        </div>
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
    \t} 
    \telse { return false; }
    }
</script>
{% endput %}", "/home/winelivery/themes/winelivery/pages/direcciones.htm", "");
    }
}
