<?php

/* /var/www/html/themes/winelivery/pages/reiniciar.htm */
class __TwigTemplate_465a99911f8676f278ef724faee12303cae2c1e07ac953c3f70cb95535a164ca extends Twig_Template
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
      <div id=\"passwordResetMessage2\" style=\"display:none;\" class=\"alert alert-danger\" role=\"alert\">Las contrase&ntilde;as no coinciden. Vuelve a intentarlo</div>
      <form id=\"reiniciarForm\">
         <div class=\"form-group\">
          <label for=\"emailInputLogin\">Código</label>
          <input name=\"code\" type=\"text\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label for=\"emailInputLogin\">Nueva contrase&ntilde;a</label>
          <input name=\"password\" type=\"password\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label for=\"emailInputLogin\">Confirmar contrase&ntilde;a</label>
          <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" >
          <input type=\"hidden\" name=\"email\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "email", array()), "html", null, true);
        echo "\" class=\"form-control\" >
        </div>
        <button onClick=\"onReiniciarForm();\" type=\"button\" class=\"btn btn-default btn-theme pull-right col-md-6\">Restablecer contrase&ntilde;a</button>
      </form>
    </div>
    <!-- End Login Form -->
  </div>
</div>

";
        // line 31
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 32
        echo "<script>
    function onReiniciarForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        
        if(\$('input[name=code]').val() === '' || \$('input[name=code]').val().length < 6){\$('input[name=code]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=code]').css('border', '');}
    \t
    \tif(\$('input[name=password]').val() === \"\" || \$('input[name=password]').val() !== \$('input[name=password_confirmation]').val())
    \t{
    \t    \$('#passwordResetMessage2').fadeIn();
    \t    error = false;
    \t}
    \telse
    \t{
    \t    \$('#passwordResetMessage2').fadeOut();
    \t}
    \t
    \tif(error)
    \t{
    \t\t\$('#reiniciarForm').request('onReiniciarForm', {data: \$('#reiniciarForm').serialize()});
    \t} 
    \telse { return false; }
    }
</script>
";
        // line 31
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/pages/reiniciar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  59 => 32,  57 => 31,  45 => 22,  26 => 6,  19 => 1,);
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
      <div id=\"passwordResetMessage2\" style=\"display:none;\" class=\"alert alert-danger\" role=\"alert\">Las contrase&ntilde;as no coinciden. Vuelve a intentarlo</div>
      <form id=\"reiniciarForm\">
         <div class=\"form-group\">
          <label for=\"emailInputLogin\">Código</label>
          <input name=\"code\" type=\"text\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label for=\"emailInputLogin\">Nueva contrase&ntilde;a</label>
          <input name=\"password\" type=\"password\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label for=\"emailInputLogin\">Confirmar contrase&ntilde;a</label>
          <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" >
          <input type=\"hidden\" name=\"email\" value=\"{{this.param.email}}\" class=\"form-control\" >
        </div>
        <button onClick=\"onReiniciarForm();\" type=\"button\" class=\"btn btn-default btn-theme pull-right col-md-6\">Restablecer contrase&ntilde;a</button>
      </form>
    </div>
    <!-- End Login Form -->
  </div>
</div>

{% put scripts %}
<script>
    function onReiniciarForm()
    {
        var error = true; var regex = /^([a-zA-Z0-9_\\.\\-\\+])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
        
        if(\$('input[name=code]').val() === '' || \$('input[name=code]').val().length < 6){\$('input[name=code]').css('border', '1px solid red');error = false;} 
    \telse{\$('input[name=code]').css('border', '');}
    \t
    \tif(\$('input[name=password]').val() === \"\" || \$('input[name=password]').val() !== \$('input[name=password_confirmation]').val())
    \t{
    \t    \$('#passwordResetMessage2').fadeIn();
    \t    error = false;
    \t}
    \telse
    \t{
    \t    \$('#passwordResetMessage2').fadeOut();
    \t}
    \t
    \tif(error)
    \t{
    \t\t\$('#reiniciarForm').request('onReiniciarForm', {data: \$('#reiniciarForm').serialize()});
    \t} 
    \telse { return false; }
    }
</script>
{% endput %}", "/var/www/html/themes/winelivery/pages/reiniciar.htm", "");
    }
}
