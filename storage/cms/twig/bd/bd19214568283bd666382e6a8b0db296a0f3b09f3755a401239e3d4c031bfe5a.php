<?php

/* /home/winelivery/themes/winelivery/pages/perfil.htm */
class __TwigTemplate_fb2e7c0cc00191eed372b364428bb6cf8d35e00c3cc48d90547172ea1151549b extends Twig_Template
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
          <form>
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
            <button type=\"submit\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> Editar perfil</button>
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
        return "/home/winelivery/themes/winelivery/pages/perfil.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 23,  47 => 19,  40 => 15,  29 => 6,  25 => 5,  19 => 1,);
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
          <form>
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
            <button type=\"submit\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> Editar perfil</button>
          </form>
        </div>
      </div>
    </div>
    <!-- End My Profile Content -->

  </div>
</div>
<!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/perfil.htm", "");
    }
}
