<?php

/* /home/winelivery/themes/winelivery/pages/login.htm */
class __TwigTemplate_caf993ce780f462e03d80d2f566985da107f5f42dff0c38150beb58003fb4e83 extends Twig_Template
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
<div class=\"container m-t-3 col-md-offset-4 col-md-4 col-sm-12 col-xs-12\">
  <div style=\"border:1px solid #ccc;border-radius:5px;padding:20px\" class=\" row\">
    <!-- Login Form -->

      <div class=\"\">
          <img alt=\"Logo\" src=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/winelivery-01.png");
        echo "\" style=\"width:50%;margin:0 auto;\" class=\"img-responsive\" />
      </div>
      <HR>
        <h4>Iniciar Sesión</h4>
      <form data-request=\"onLoginForm\">
        <div class=\"form-group\">
          <label for=\"emailInputLogin\">Correo</label>
          <input name=\"email\" type=\"email\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label for=\"passwordInputLogin\">Contraseña</label>
          <input name=\"password\" type=\"password\" class=\"form-control\">
        </div>
        <button type=\"submit\" class=\"btn btn-default btn-theme pull-right col-md-12\">Iniciar Sesión</button>
      </form>
      <div style=\"margin-top:100px\">
        <HR>
          <p>¿Aun no tienes una cuenta?</p>
          <a href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("registro");
        echo "\" class=\"btn btn-default btn-theme1 col-md-12\">Crear Cuenta</a>
      </div>
    </div>
    <!-- End Login Form -->

  </div>
</div>
<!-- End Main Content -->";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 25,  27 => 7,  19 => 1,);
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
<div class=\"container m-t-3 col-md-offset-4 col-md-4 col-sm-12 col-xs-12\">
  <div style=\"border:1px solid #ccc;border-radius:5px;padding:20px\" class=\" row\">
    <!-- Login Form -->

      <div class=\"\">
          <img alt=\"Logo\" src=\"{{\"assets/images/winelivery-01.png\"|theme}}\" style=\"width:50%;margin:0 auto;\" class=\"img-responsive\" />
      </div>
      <HR>
        <h4>Iniciar Sesión</h4>
      <form data-request=\"onLoginForm\">
        <div class=\"form-group\">
          <label for=\"emailInputLogin\">Correo</label>
          <input name=\"email\" type=\"email\" class=\"form-control\" >
        </div>
        <div class=\"form-group\">
          <label for=\"passwordInputLogin\">Contraseña</label>
          <input name=\"password\" type=\"password\" class=\"form-control\">
        </div>
        <button type=\"submit\" class=\"btn btn-default btn-theme pull-right col-md-12\">Iniciar Sesión</button>
      </form>
      <div style=\"margin-top:100px\">
        <HR>
          <p>¿Aun no tienes una cuenta?</p>
          <a href=\"{{\"registro\"|page}}\" class=\"btn btn-default btn-theme1 col-md-12\">Crear Cuenta</a>
      </div>
    </div>
    <!-- End Login Form -->

  </div>
</div>
<!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/login.htm", "");
    }
}
