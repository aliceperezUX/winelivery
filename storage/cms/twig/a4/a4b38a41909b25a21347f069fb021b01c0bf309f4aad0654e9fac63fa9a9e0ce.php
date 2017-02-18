<?php

/* /home/winelivery/themes/winelivery/partials/perfilmenu.htm */
class __TwigTemplate_ebbced392effef4b9105d6e1bcb8d29edd994f927097e1739601eb6585f379af extends Twig_Template
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
        echo "<!-- Account Sidebar -->
    <div class=\"col-sm-4 col-md-3 m-b-3\">
      <ul class=\"nav nav-pills nav-stacked\">
        <li role=\"presentation\" ";
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()) == "Perfil")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("perfil");
        echo "\">Mi perfil</a></li>
        <li role=\"presentation\" ";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()) == "Direcciones")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("direcciones");
        echo "\">Informaci&oacute;n de envio</a></li>
        <li role=\"presentation\" ";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()) == "Password")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("password");
        echo "\">Cambiar contraseña</a></li>
        <li role=\"presentation\" ";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()) == "Historial")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("historial");
        echo "\">Historial de compras</a></li>
      </ul>
    </div>
<!-- End Account Sidebar -->";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/partials/perfilmenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  40 => 6,  32 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Account Sidebar -->
    <div class=\"col-sm-4 col-md-3 m-b-3\">
      <ul class=\"nav nav-pills nav-stacked\">
        <li role=\"presentation\" {% if this.page.title == \"Perfil\" %}class=\"active\"{% endif %}><a href=\"{{\"perfil\"|page}}\">Mi perfil</a></li>
        <li role=\"presentation\" {% if this.page.title == \"Direcciones\" %}class=\"active\"{% endif %}><a href=\"{{\"direcciones\"|page}}\">Informaci&oacute;n de envio</a></li>
        <li role=\"presentation\" {% if this.page.title == \"Password\" %}class=\"active\"{% endif %}><a href=\"{{\"password\"|page}}\">Cambiar contraseña</a></li>
        <li role=\"presentation\" {% if this.page.title == \"Historial\" %}class=\"active\"{% endif %}><a href=\"{{\"historial\"|page}}\">Historial de compras</a></li>
      </ul>
    </div>
<!-- End Account Sidebar -->", "/home/winelivery/themes/winelivery/partials/perfilmenu.htm", "");
    }
}
