<?php

/* /home/winelivery/themes/winelivery/pages/checkout2.htm */
class __TwigTemplate_2abdafedec0d39af78bea1bb4083fe72041400135ddd846e50b3752338c99b59 extends Twig_Template
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
        <div class=\"title\"><span>recibo de pago</span></div>
        <div class=\"alert alert-success\" role=\"alert\">tu pedido fue realizado correctamente</div>
        <!-- Shopping Cart List -->
        <div class=\"col-md-8\">

          <div class=\"table-responsive\">
            <table class=\"table table-cart\">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th>SubTotal</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 22
            echo "                <tr>
                  <td class=\"img-cart\">
                    <a href=\"";
            // line 24
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["p"], "product", array()), "id", array())));
            echo "\">
                      <img alt=\"Product\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "product", array()), "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\" class=\"img-thumbnail\">
                    </a>
                  </td>
                  <td>
                    <p><a href=\"";
            // line 29
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["p"], "product", array()), "id", array())));
            echo "\" class=\"d-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "product", array()), "title", array()), "html", null, true);
            echo "</a></p>
                  </td>
                   <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "quantity", array()), "html", null, true);
            echo "</td>
                   <td class=\"unit\">RD\$";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "product", array()), "price", array())), "html", null, true);
            echo "</td>
                   <td class=\"sub\">";
            // line 33
            $context["sub"] = ($this->getAttribute($this->getAttribute($context["p"], "product", array()), "price", array()) * $this->getAttribute($context["p"], "quantity", array()));
            echo "RD\$";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sub"]) ? $context["sub"] : null)), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "              </tbody>
            </table>
          </div>
        </div>
        <!-- End Shopping Cart List -->
        <div class=\"col-md-3 cart-detailbox\">
          <h4>orden de compra</h4>
          <p class=\"detailbox-items\">direccion:<span class=\"detailbox-content\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "sector", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "calle", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "residencial", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "numero", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "telefono", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "celular", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "proximo", array()), "html", null, true);
        echo "</span></p>
          <p class=\"detailbox-items\">Total items:<span class=\"detailbox-content\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["cart_counter"]) ? $context["cart_counter"] : null), "html", null, true);
        echo "</span></p>
          <p class=\"detailbox-items\">costo:<span class=\"detailbox-content\" >RD\$";
        // line 45
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total"]) ? $context["cart_total"] : null)), "html", null, true);
        echo "</span></p>
          <p class=\"detailbox-items\">costo de envio:<span class=\"detailbox-content\"> \$90</span></p>
          <p class=\"detailbox-items\">costo total:<span class=\"detailbox-content\">RD\$";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total_envio"]) ? $context["cart_total_envio"] : null)), "html", null, true);
        echo "</span></p>

        </div>

      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/pages/checkout2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  115 => 45,  111 => 44,  95 => 43,  86 => 36,  75 => 33,  71 => 32,  67 => 31,  60 => 29,  53 => 25,  49 => 24,  45 => 22,  41 => 21,  19 => 1,);
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
        <div class=\"title\"><span>recibo de pago</span></div>
        <div class=\"alert alert-success\" role=\"alert\">tu pedido fue realizado correctamente</div>
        <!-- Shopping Cart List -->
        <div class=\"col-md-8\">

          <div class=\"table-responsive\">
            <table class=\"table table-cart\">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th>SubTotal</th>
                </tr>
              </thead>
              <tbody>
                {% for p in products %}
                <tr>
                  <td class=\"img-cart\">
                    <a href=\"{{\"producto-detalle\"|page({id:p.product.id})}}\">
                      <img alt=\"Product\" src=\"{{p.product.featured_image.getPath}}\" class=\"img-thumbnail\">
                    </a>
                  </td>
                  <td>
                    <p><a href=\"{{\"producto-detalle\"|page({id:p.product.id})}}\" class=\"d-block\">{{p.product.title}}</a></p>
                  </td>
                   <td>{{p.quantity}}</td>
                   <td class=\"unit\">RD\${{p.product.price|number_format}}</td>
                   <td class=\"sub\">{% set sub = p.product.price * p.quantity %}RD\${{sub|number_format}}</td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Shopping Cart List -->
        <div class=\"col-md-3 cart-detailbox\">
          <h4>orden de compra</h4>
          <p class=\"detailbox-items\">direccion:<span class=\"detailbox-content\">{{address.sector}} {{address.calle}} {{address.residencial}} {{address.numero}} {{address.telefono}} {{address.celular}} {{address.proximo}}</span></p>
          <p class=\"detailbox-items\">Total items:<span class=\"detailbox-content\">{{cart_counter}}</span></p>
          <p class=\"detailbox-items\">costo:<span class=\"detailbox-content\" >RD\${{ cart_total|number_format}}</span></p>
          <p class=\"detailbox-items\">costo de envio:<span class=\"detailbox-content\"> \$90</span></p>
          <p class=\"detailbox-items\">costo total:<span class=\"detailbox-content\">RD\${{ cart_total_envio|number_format}}</span></p>

        </div>

      </div>
    </div>", "/home/winelivery/themes/winelivery/pages/checkout2.htm", "");
    }
}
