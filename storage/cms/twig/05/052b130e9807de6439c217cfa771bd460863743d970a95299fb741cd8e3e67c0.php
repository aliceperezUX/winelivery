<?php

/* /var/www/html/themes/winelivery/pages/recuperar.htm */
class __TwigTemplate_11866643887fc3d3a4c32f9a4f5488cd4decdc4340207eea533ce5bbf7dee769 extends Twig_Template
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
        echo "<div class=\"container m-t-3 col-md-offset-4 col-md-4 col-sm-12 col-xs-12\">
  <div style=\"border:1px solid #ccc;padding:20px\" class=\" row\">
    <!-- Login Form -->

      <div class=\"\">
          <img alt=\"Logo\" src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/winelivery-01.png");
        echo "\" style=\"width:50%;margin:0 auto;\" class=\"img-responsive\" />
      </div>
      <HR>
        <h4>¿Olvidaste tu contrase&ntilde;a?</h4>
        <div id=\"passwordResetMessage\" style=\"display:none;\" class=\"alert alert-success\" role=\"alert\">Se ha enviado un correo con instrucciones para recuperar tu contrase&ntilde;a a la siguiente direccion <span id=\"spanEmail\">aliceperezvilla@gmail.com</span> </div>
      <form id=\"recuperarForm\">
        <div class=\"form-group\">
          <label for=\"emailInputLogin\">Correo</label>
          <input name=\"email\" type=\"email\" class=\"form-control\" >
        </div>
        <button onClick=\"onRecuperarForm();\" type=\"button\" class=\"btn btn-default btn-theme pull-right col-md-6\">Enviar instrucciones</button>
      </form>
      <div style=\"margin-top:100px; text-align: center;\">
      <hr>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
        echo "\">Cancelar</a>
      </div>
    </div>
    <!-- End Login Form -->
  </div>
</div>

";
        // line 27
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 28
        echo "<script>
    function onRecuperarForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
    
    \tif(!regex.test(\$('input[name=email]').val())){\$('input[name=email]').css('border', '1px solid red');error = false;} 
    \telse {\$('input[name=email]').css('border', '');}
    \t
    \tif(error)
    \t{
    \t    \$(\"#spanEmail\").text(\$('input[name=email]').val());
    \t\t\$('#recuperarForm').request('onRecuperarForm', {data: \$('#recuperarForm').serialize()});
    \t\t\$(\"#passwordResetMessage\").fadeIn();
    \t} 
    \telse { return false; }
    }
</script>
";
        // line 27
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/recuperar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  55 => 28,  53 => 27,  43 => 20,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container m-t-3 col-md-offset-4 col-md-4 col-sm-12 col-xs-12\">
  <div style=\"border:1px solid #ccc;padding:20px\" class=\" row\">
    <!-- Login Form -->

      <div class=\"\">
          <img alt=\"Logo\" src=\"{{\"assets/images/winelivery-01.png\"|theme}}\" style=\"width:50%;margin:0 auto;\" class=\"img-responsive\" />
      </div>
      <HR>
        <h4>¿Olvidaste tu contrase&ntilde;a?</h4>
        <div id=\"passwordResetMessage\" style=\"display:none;\" class=\"alert alert-success\" role=\"alert\">Se ha enviado un correo con instrucciones para recuperar tu contrase&ntilde;a a la siguiente direccion <span id=\"spanEmail\">aliceperezvilla@gmail.com</span> </div>
      <form id=\"recuperarForm\">
        <div class=\"form-group\">
          <label for=\"emailInputLogin\">Correo</label>
          <input name=\"email\" type=\"email\" class=\"form-control\" >
        </div>
        <button onClick=\"onRecuperarForm();\" type=\"button\" class=\"btn btn-default btn-theme pull-right col-md-6\">Enviar instrucciones</button>
      </form>
      <div style=\"margin-top:100px; text-align: center;\">
      <hr>
            <a href=\"{{\"login\"|page}}\">Cancelar</a>
      </div>
    </div>
    <!-- End Login Form -->
  </div>
</div>

{% put scripts %}
<script>
    function onRecuperarForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
    
    \tif(!regex.test(\$('input[name=email]').val())){\$('input[name=email]').css('border', '1px solid red');error = false;} 
    \telse {\$('input[name=email]').css('border', '');}
    \t
    \tif(error)
    \t{
    \t    \$(\"#spanEmail\").text(\$('input[name=email]').val());
    \t\t\$('#recuperarForm').request('onRecuperarForm', {data: \$('#recuperarForm').serialize()});
    \t\t\$(\"#passwordResetMessage\").fadeIn();
    \t} 
    \telse { return false; }
    }
</script>
{% endput %}", "/var/www/html/themes/winelivery/pages/recuperar.htm", "");
    }
}
