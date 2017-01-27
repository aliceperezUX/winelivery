<?php

/* /home/winelivery/themes/winelivery/pages/registro.htm */
class __TwigTemplate_1feefe5dd5d7437ce89831f145388c834f4bcb2c069e4c34c8e43e66ebe25bec extends Twig_Template
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
<div style=\"width:40%; margin:0 auto;\" class=\"container m-t-3\">
  <div style=\"border:1px solid #ccc;border-radius:5px;padding:20px\" class=\" row\">
    <!-- Login Form -->
      <div class=\"\">
          <img alt=\"Logo\" src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/winelivery-01.png");
        echo "\" style=\"width:50%;margin:0 auto;\" class=\"img-responsive\" />
      </div>
      <HR>
        <h4>Crear cuenta</h4>
      <form id=\"registerForm\">
        <div class=\"form-group\">
          <label >nombre</label>
          <input name=\"name\" type=\"text\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label >apellido</label>
          <input name=\"last_name\" type=\"text\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label >correo</label>
          <input name=\"email\" type=\"email\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label >contraseña</label>
          <input name=\"password\" type=\"password\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
          <label>confirmar contraseña</label>
          <input name=\"password_confirmation\" type=\"password\" class=\"form-control\">
        </div>
        <button onClick=\"onRegisterForm();\" type=\"button\" class=\"btn btn-default btn-theme pull-right col-md-12\">Crear cuenta</button>
      </form>
      <div style=\"margin-top:100px\">
        <HR>
          <p>ya tienes una cuenta?</p>
          <button type=\"button\" class=\"btn btn-default btn-theme1 col-md-12\">iniciar sesion</button>
      </div>
    </div>
    <!-- End Login Form -->

  </div>
</div>
<!-- End Main Content -->
";
        // line 44
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 45
        echo "<script>
    function onRegisterForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        
    \tif(\$('input[name=name]').val() === ''){\$('input[name=name]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=name]').css('border', '');}
    \t
    \tif(\$('input[name=last_name]').val() === ''){\$('input[name=last_name]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=last_name]').css('border', '');}
    
    \tif(!regex.test(\$('input[name=email]').val())){\$('input[name=email]').css('border', '1px solid red');error = false;} 
    \telse {\$('input[name=email]').css('border', '');}
    \t
    \tif(error)
    \t{
    \t\t\$('#registerForm').request('onRegisterForm', {data: \$('#registerForm').serialize()});
    \t} 
    \telse { return false; }
    }
</script>
";
        // line 44
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/pages/registro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 44,  69 => 45,  67 => 44,  26 => 6,  19 => 1,);
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
<div style=\"width:40%; margin:0 auto;\" class=\"container m-t-3\">
  <div style=\"border:1px solid #ccc;border-radius:5px;padding:20px\" class=\" row\">
    <!-- Login Form -->
      <div class=\"\">
          <img alt=\"Logo\" src=\"{{\"assets/images/winelivery-01.png\"|theme}}\" style=\"width:50%;margin:0 auto;\" class=\"img-responsive\" />
      </div>
      <HR>
        <h4>Crear cuenta</h4>
      <form id=\"registerForm\">
        <div class=\"form-group\">
          <label >nombre</label>
          <input name=\"name\" type=\"text\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label >apellido</label>
          <input name=\"last_name\" type=\"text\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label >correo</label>
          <input name=\"email\" type=\"email\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label >contraseña</label>
          <input name=\"password\" type=\"password\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
          <label>confirmar contraseña</label>
          <input name=\"password_confirmation\" type=\"password\" class=\"form-control\">
        </div>
        <button onClick=\"onRegisterForm();\" type=\"button\" class=\"btn btn-default btn-theme pull-right col-md-12\">Crear cuenta</button>
      </form>
      <div style=\"margin-top:100px\">
        <HR>
          <p>ya tienes una cuenta?</p>
          <button type=\"button\" class=\"btn btn-default btn-theme1 col-md-12\">iniciar sesion</button>
      </div>
    </div>
    <!-- End Login Form -->

  </div>
</div>
<!-- End Main Content -->
{% put scripts %}
<script>
    function onRegisterForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        
    \tif(\$('input[name=name]').val() === ''){\$('input[name=name]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=name]').css('border', '');}
    \t
    \tif(\$('input[name=last_name]').val() === ''){\$('input[name=last_name]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=last_name]').css('border', '');}
    
    \tif(!regex.test(\$('input[name=email]').val())){\$('input[name=email]').css('border', '1px solid red');error = false;} 
    \telse {\$('input[name=email]').css('border', '');}
    \t
    \tif(error)
    \t{
    \t\t\$('#registerForm').request('onRegisterForm', {data: \$('#registerForm').serialize()});
    \t} 
    \telse { return false; }
    }
</script>
{% endput %}", "/home/winelivery/themes/winelivery/pages/registro.htm", "");
    }
}
