<?php

/* /home/winelivery/themes/winelivery/pages/password.htm */
class __TwigTemplate_a2b5efd3af8af874cd09a75af8b308e3f4b350cdea73bedfbf5d5fba05c1ffef extends Twig_Template
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
      <div class=\"title m-b-2\"><span>Cambiar contrase&ntilde;a</span></div>
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <form>
            <div class=\"form-group\">
              <label for=\"oldInputPasswd\">Contrase&ntilde;a antigua</label>
              <input type=\"password\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label for=\"newInputPasswd\">Nueva contrase&ntilde;a</label>
              <input type=\"password\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label for=\"retypeInputPasswd\">Confirmar contrase&ntilde;a</label>
              <input type=\"password\" class=\"form-control\" id=\"\">
            </div>
            <button type=\"submit\" class=\"btn btn-default btn-theme\"><i class=\"fa fa-check\"></i> Guardar cambios</button>
          </form>
        </div>
      </div>
    </div>
    <!-- End My Profile Content -->

  </div>
</div>
<!-- End Main Content -->";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/pages/password.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
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
      <div class=\"title m-b-2\"><span>Cambiar contrase&ntilde;a</span></div>
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <form>
            <div class=\"form-group\">
              <label for=\"oldInputPasswd\">Contrase&ntilde;a antigua</label>
              <input type=\"password\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label for=\"newInputPasswd\">Nueva contrase&ntilde;a</label>
              <input type=\"password\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label for=\"retypeInputPasswd\">Confirmar contrase&ntilde;a</label>
              <input type=\"password\" class=\"form-control\" id=\"\">
            </div>
            <button type=\"submit\" class=\"btn btn-default btn-theme\"><i class=\"fa fa-check\"></i> Guardar cambios</button>
          </form>
        </div>
      </div>
    </div>
    <!-- End My Profile Content -->

  </div>
</div>
<!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/password.htm", "");
    }
}
