<?php

/* /home/winelivery/themes/winelivery/pages/checkout.htm */
class __TwigTemplate_87cd140325b9435af380aa4ca88a46bc5a322e7ca55fc161001701e431dc858b extends Twig_Template
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
    <!-- My Address Content -->
        <div class=\"col-sm-12 col-md-12\">
          <div class=\"title m-b-2\"><span>Direcciones guardadas</span></div>
          <div class=\"row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 10
            echo "                <div class=\"col-xs-12 col-md-4\">
                  <form>
                    <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "sector", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "calle", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "residencial", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "numero", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "telefono", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "celular", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "proximo", array()), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 13
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("checkout2", array("id" => $this->getAttribute($context["a"], "id", array())));
            echo "\" style=\"margin-bottom:10px\" class=\"btn btn-theme col-md-12\">Enviar a esta direccion</a>
                    <a class=\"btn btn-theme1 col-md-12\" href=\"";
            // line 14
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("direcciones", array("id" => $this->getAttribute($context["a"], "id", array())));
            echo "\">Editar</a>
                  </form>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            
          </div>
        </div>
        <!-- End My Address Content -->
  </div>
  <!-- My Address Content -->
    <div class=\"row\" style=\"margin-top:50px\">
      <div  class=\"col-sm-8 col-md-12\">
        <div class=\"title m-b-2\"><span>Nueva direcci&oacute;n</span></div>
      <div class=\"col-xs-12\">
        <form id=\"addressesForm\">
            <div class=\"form-group\">
              <label >Sector</label>
              <select id=\"sectors\" name=\"sector\" class=\"form-control\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sectors"]) ? $context["sectors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 33
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
        // line 35
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
            <!-- <div class=\"checkbox\">
                <label>
                  <input name=\"guardar\" type=\"checkbox\" value=\"1\"><span> Guardar esta direcci&oacute;n para usar despues</span>
                </label>
            </div> -->
            <input name=\"id_control\" type=\"hidden\" value=\"\">
            <button onClick=\"addressesForm();\" type=\"button\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> enviar  a esta direcci&oacute;n</button>
          </form>
      </div>
    </div>
  </div>
  <!-- End My Address Content -->
</div>
<!-- End Main Content -->
";
        // line 75
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 76
        echo "<script>
    \$( document ).ready(function() {
        \$('.phone').mask('000-000-0000');
    });

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
    \t\t\$('#addressesForm').request('onCheckoutAddressesForm', {data: \$('#addressesForm').serialize()});
    \t} 
    \telse { return false; }
    }
</script>
";
        // line 75
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/pages/checkout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 75,  142 => 76,  140 => 75,  98 => 35,  87 => 33,  83 => 32,  67 => 18,  57 => 14,  53 => 13,  37 => 12,  33 => 10,  29 => 9,  19 => 1,);
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
    <!-- My Address Content -->
        <div class=\"col-sm-12 col-md-12\">
          <div class=\"title m-b-2\"><span>Direcciones guardadas</span></div>
          <div class=\"row\">
            {% for a in addresses %}
                <div class=\"col-xs-12 col-md-4\">
                  <form>
                    <p>{{a.sector}} {{a.calle}} {{a.residencial}} {{a.numero}} {{a.telefono}} {{a.celular}} {{a.proximo}}</p>
                    <a href=\"{{\"checkout2\"|page({id:a.id})}}\" style=\"margin-bottom:10px\" class=\"btn btn-theme col-md-12\">Enviar a esta direccion</a>
                    <a class=\"btn btn-theme1 col-md-12\" href=\"{{\"direcciones\"|page({id:a.id})}}\">Editar</a>
                  </form>
                </div>
            {% endfor %}
            
          </div>
        </div>
        <!-- End My Address Content -->
  </div>
  <!-- My Address Content -->
    <div class=\"row\" style=\"margin-top:50px\">
      <div  class=\"col-sm-8 col-md-12\">
        <div class=\"title m-b-2\"><span>Nueva direcci&oacute;n</span></div>
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
            <!-- <div class=\"checkbox\">
                <label>
                  <input name=\"guardar\" type=\"checkbox\" value=\"1\"><span> Guardar esta direcci&oacute;n para usar despues</span>
                </label>
            </div> -->
            <input name=\"id_control\" type=\"hidden\" value=\"\">
            <button onClick=\"addressesForm();\" type=\"button\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> enviar  a esta direcci&oacute;n</button>
          </form>
      </div>
    </div>
  </div>
  <!-- End My Address Content -->
</div>
<!-- End Main Content -->
{% put scripts %}
<script>
    \$( document ).ready(function() {
        \$('.phone').mask('000-000-0000');
    });

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
    \t\t\$('#addressesForm').request('onCheckoutAddressesForm', {data: \$('#addressesForm').serialize()});
    \t} 
    \telse { return false; }
    }
</script>
{% endput %}", "/home/winelivery/themes/winelivery/pages/checkout.htm", "");
    }
}
