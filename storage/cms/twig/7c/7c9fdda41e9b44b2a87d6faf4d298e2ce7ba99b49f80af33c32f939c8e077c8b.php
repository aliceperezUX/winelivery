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
          <form>
            <div class=\"form-group\">
              <label >Sector</label>
              <select class=\"form-control\">
                <option>Ens. Naco</option>
                <option>Piantini</option>
                <option>Gazcue</option>
              </select>
            </div>
            <div class=\"form-group\">
              <label>Calle</label>
              <input type=\"text\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label>Apto/No</label>
              <input type=\"email\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label>Telefono</label>
              <input type=\"email\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label>Proximo a</label>
              <textarea class=\"form-control\" rows=\"5\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> Guardar direcci&oacute;n</button>
          </form>
        </div>
      </div>
    </div>
    <!-- End My Address Content -->
    <!-- My Address Content -->
    <div class=\"col-sm-8 col-md-12\">
      <div class=\"title m-b-2\"><span>Direcciones guardadas</span></div>
      <div class=\"row\">
        <div class=\"col-xs-12 col-md-4\">
          <form>
            <p>8400 NW 25TH ST STE 100
            DORAL, FL 33198-1534
            United States</p>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn btn-theme\">Editar</button>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn  pull-right\">Eliminar</button>
          </form>
        </div>
        <div class=\"col-xs-12 col-md-4\" >
          <form>
            <p>8400 NW 25TH ST STE 100
            DORAL, FL 33198-1534
            United States</p>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn btn-theme\">Editar</button>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn  pull-right\">Eliminar</button>
          </form>
        </div>
        <div class=\"col-xs-12 col-md-4\">
          <form>
            <p>8400 NW 25TH ST STE 100
            DORAL, FL 33198-1534
            United States</p>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn btn-theme\">Editar</button>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn pull-right\">Eliminar</button>
          </form>
        </div>
      </div>
    </div>
    <!-- End My Address Content -->

  </div>
</div>
<!-- End Main Content -->";
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
   
    <!-- My Address Content -->
    <div class=\"col-sm-8 col-md-9\">
      <div class=\"title m-b-2\"><span>Nueva direcci&oacute;n</span></div>
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <form>
            <div class=\"form-group\">
              <label >Sector</label>
              <select class=\"form-control\">
                <option>Ens. Naco</option>
                <option>Piantini</option>
                <option>Gazcue</option>
              </select>
            </div>
            <div class=\"form-group\">
              <label>Calle</label>
              <input type=\"text\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label>Apto/No</label>
              <input type=\"email\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label>Telefono</label>
              <input type=\"email\" class=\"form-control\" id=\"\">
            </div>
            <div class=\"form-group\">
              <label>Proximo a</label>
              <textarea class=\"form-control\" rows=\"5\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-theme pull-right\"><i class=\"fa fa-pencil\"></i> Guardar direcci&oacute;n</button>
          </form>
        </div>
      </div>
    </div>
    <!-- End My Address Content -->
    <!-- My Address Content -->
    <div class=\"col-sm-8 col-md-12\">
      <div class=\"title m-b-2\"><span>Direcciones guardadas</span></div>
      <div class=\"row\">
        <div class=\"col-xs-12 col-md-4\">
          <form>
            <p>8400 NW 25TH ST STE 100
            DORAL, FL 33198-1534
            United States</p>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn btn-theme\">Editar</button>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn  pull-right\">Eliminar</button>
          </form>
        </div>
        <div class=\"col-xs-12 col-md-4\" >
          <form>
            <p>8400 NW 25TH ST STE 100
            DORAL, FL 33198-1534
            United States</p>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn btn-theme\">Editar</button>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn  pull-right\">Eliminar</button>
          </form>
        </div>
        <div class=\"col-xs-12 col-md-4\">
          <form>
            <p>8400 NW 25TH ST STE 100
            DORAL, FL 33198-1534
            United States</p>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn btn-theme\">Editar</button>
            <button style=\"width: 150px\" type=\"submit\" class=\"btn pull-right\">Eliminar</button>
          </form>
        </div>
      </div>
    </div>
    <!-- End My Address Content -->

  </div>
</div>
<!-- End Main Content -->", "/home/winelivery/themes/winelivery/pages/direcciones.htm", "");
    }
}
