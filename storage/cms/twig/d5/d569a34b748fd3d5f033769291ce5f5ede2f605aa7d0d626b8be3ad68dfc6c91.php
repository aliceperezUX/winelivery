<?php

/* /var/www/html/themes/winelivery/partials/cart.htm */
class __TwigTemplate_2c854aa66529ec4298679a818fcf55d48477a9b96582dcfe01d44ed37b1cf926 extends Twig_Template
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
        echo "<table class=\"table table-cart\" id=\"cart_partial\">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th>Cantidad</th>
      <!-- <th>Act. Cantidad</th> -->
      <th>Precio</th>
      <th>SubTotal</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) ? $context["cart"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 14
            echo "    <tr>
      <td class=\"img-cart\">
        <a href=\"";
            // line 16
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["c"], "product", array()), "id", array())));
            echo "\">
          <img alt=\"Product\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], "product", array()), "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\" class=\"img-thumbnail\">
        </a>
      </td>
      <td>
        <p><a href=\"";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["c"], "product", array()), "id", array())));
            echo "\" class=\"d-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "product", array()), "title", array()), "html", null, true);
            echo "</a></p>
        <!-- <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Comprar despues\"><i class=\"fa fa-refresh\"></i></a>&nbsp; -->
        <a href=\"javascript:;\" onClick=\"deteleFromCart('";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "');\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Borrar\"><i class=\"fa fa-trash-o\"></i></a>
      </td>
      <!-- INPUT QUANTITY -->
      <td class=\"sub\"><input name=\"quantity\" id=\"qNumber";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\" type=\"number\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "quantity", array()), "html", null, true);
            echo "\" class=\"form-control text-center\"/></td>
      <!-- END INPUT QUANTITY -->
      <!-- <td><a href=\"javascript:;\" onClick=\"changeQuantity(";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo ");\">Act. Cantidad</a></td> -->
      <td class=\"unit\">RD\$";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "product", array()), "price", array())), "html", null, true);
            echo "</td>
      <td class=\"sub\">";
            // line 30
            $context["sub"] = ($this->getAttribute($this->getAttribute($context["c"], "product", array()), "price", array()) * $this->getAttribute($context["c"], "quantity", array()));
            echo "RD\$";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sub"]) ? $context["sub"] : null)), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    <tr>
      <td colspan=\"4\" class=\"text-right\">Total</td>
      <td colspan=\"2\"><b>RD\$";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total"]) ? $context["cart_total"] : null)), "html", null, true);
        echo "</b></td>
    </tr>
  </tbody>
</table>

<div id=\"quantityMessage\" style=\"display:none;\" class=\"alert alert-warning\">
  EL INVENTARIO SE HA AGOTADO, NO PUEDES AGREGAR MAS CANTIDADES DE ESTE PRODUCTO. 
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/partials/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  93 => 33,  82 => 30,  78 => 29,  74 => 28,  65 => 26,  59 => 23,  52 => 21,  45 => 17,  41 => 16,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-cart\" id=\"cart_partial\">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th>Cantidad</th>
      <!-- <th>Act. Cantidad</th> -->
      <th>Precio</th>
      <th>SubTotal</th>
    </tr>
  </thead>
  <tbody>
    {% for c in cart %}
    <tr>
      <td class=\"img-cart\">
        <a href=\"{{\"producto-detalle\"|page({id:c.product.id})}}\">
          <img alt=\"Product\" src=\"{{c.product.featured_image.getPath}}\" class=\"img-thumbnail\">
        </a>
      </td>
      <td>
        <p><a href=\"{{\"producto-detalle\"|page({id:c.product.id})}}\" class=\"d-block\">{{c.product.title}}</a></p>
        <!-- <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Comprar despues\"><i class=\"fa fa-refresh\"></i></a>&nbsp; -->
        <a href=\"javascript:;\" onClick=\"deteleFromCart('{{c.id}}');\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Borrar\"><i class=\"fa fa-trash-o\"></i></a>
      </td>
      <!-- INPUT QUANTITY -->
      <td class=\"sub\"><input name=\"quantity\" id=\"qNumber{{c.id}}\" data-id=\"{{c.id}}\" type=\"number\" value=\"{{c.quantity}}\" class=\"form-control text-center\"/></td>
      <!-- END INPUT QUANTITY -->
      <!-- <td><a href=\"javascript:;\" onClick=\"changeQuantity({{c.id}});\">Act. Cantidad</a></td> -->
      <td class=\"unit\">RD\${{c.product.price|number_format}}</td>
      <td class=\"sub\">{% set sub = c.product.price * c.quantity %}RD\${{sub|number_format}}</td>
    </tr>
    {% endfor %}
    <tr>
      <td colspan=\"4\" class=\"text-right\">Total</td>
      <td colspan=\"2\"><b>RD\${{ cart_total|number_format}}</b></td>
    </tr>
  </tbody>
</table>

<div id=\"quantityMessage\" style=\"display:none;\" class=\"alert alert-warning\">
  EL INVENTARIO SE HA AGOTADO, NO PUEDES AGREGAR MAS CANTIDADES DE ESTE PRODUCTO. 
</div>", "/var/www/html/themes/winelivery/partials/cart.htm", "");
    }
}
