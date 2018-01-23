<?php

/* /var/www/html/themes/winelivery/pages/perfil.htm */
class __TwigTemplate_2ea9f126fa80cd9bff3000a53ce2e627f61552041a389c2ccf9d229e200ebe24 extends Twig_Template
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
    <!-- My Profile Content -->
    <div class=\"col-sm-8 col-md-9\">
      <div class=\"title m-b-2\"><span>Mi perfil</span></div>
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <form id=\"profileForm\">
            <div class=\"form-group\">
              <label for=\"exampleInputEmail1\">Nombre</label>
              <input name=\"name\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label for=\"exampleInputEmail1\">Apellido</label>
              <input name=\"surname\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "surname", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label for=\"exampleInputEmail1\">Correo</label>
              <input name=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\" type=\"email\" class=\"form-control\" id=\"\">
            </div>
            <button onClick=\"profileForm();\" type=\"button\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> Editar perfil</button>
          </form>
        </div>
      </div>
       <br>
        <div id=\"profileFormMessage\" style=\"display:none;\" class=\"alert alert-success\">
            Los datos se actualizaron correctamente.
        </div>
    </div>
    <!-- End My Profile Content -->
  </div>
</div>
<!-- End Main Content -->
";
        // line 38
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 39
        echo "<script>
    function profileForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        
    \tif(\$('input[name=name]').val() === ''){\$('input[name=name]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=name]').css('border', '');}
    \t
    \tif(\$('input[name=surname]').val() === ''){\$('input[name=surname]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=surname]').css('border', '');}
    
    \tif(!regex.test(\$('input[name=email]').val())){\$('input[name=email]').css('border', '1px solid red');error = false;} 
    \telse {\$('input[name=email]').css('border', '');}
    \t
    \tif(error)
    \t{
    \t\t\$('#profileForm').request('onProfileForm', {data: \$('#profileForm').serialize()});
    \t\t\$(\"#profileFormMessage\").fadeIn(\"fast\");
    \t} 
    \telse { return false; }
    }
</script>
";
        // line 38
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/perfil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  74 => 39,  72 => 38,  54 => 23,  47 => 19,  40 => 15,  29 => 6,  25 => 5,  19 => 1,);
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

    <!-- My Profile Content -->
    <div class=\"col-sm-8 col-md-9\">
      <div class=\"title m-b-2\"><span>Mi perfil</span></div>
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <form id=\"profileForm\">
            <div class=\"form-group\">
              <label for=\"exampleInputEmail1\">Nombre</label>
              <input name=\"name\" value=\"{{user.name}}\" type=\"text\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label for=\"exampleInputEmail1\">Apellido</label>
              <input name=\"surname\" value=\"{{user.surname}}\" type=\"text\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label for=\"exampleInputEmail1\">Correo</label>
              <input name=\"email\" value=\"{{user.email}}\" type=\"email\" class=\"form-control\" id=\"\">
            </div>
            <button onClick=\"profileForm();\" type=\"button\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> Editar perfil</button>
          </form>
        </div>
      </div>
       <br>
        <div id=\"profileFormMessage\" style=\"display:none;\" class=\"alert alert-success\">
            Los datos se actualizaron correctamente.
        </div>
    </div>
    <!-- End My Profile Content -->
  </div>
</div>
<!-- End Main Content -->
{% put scripts %}
<script>
    function profileForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        
    \tif(\$('input[name=name]').val() === ''){\$('input[name=name]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=name]').css('border', '');}
    \t
    \tif(\$('input[name=surname]').val() === ''){\$('input[name=surname]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=surname]').css('border', '');}
    
    \tif(!regex.test(\$('input[name=email]').val())){\$('input[name=email]').css('border', '1px solid red');error = false;} 
    \telse {\$('input[name=email]').css('border', '');}
    \t
    \tif(error)
    \t{
    \t\t\$('#profileForm').request('onProfileForm', {data: \$('#profileForm').serialize()});
    \t\t\$(\"#profileFormMessage\").fadeIn(\"fast\");
    \t} 
    \telse { return false; }
    }
</script>
{% endput %}", "/var/www/html/themes/winelivery/pages/perfil.htm", "");
    }
}
