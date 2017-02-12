<?php

/* /home/winelivery/themes/winelivery/partials/cart.htm */
class __TwigTemplate_018679ecdb71e698e833272b1fe154805c87eab29864ec064ba43f7a44dbf560 extends Twig_Template
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
      <th>Precio</th>
      <th>SubTotal</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) ? $context["cart"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 13
            echo "    <tr>
      <td class=\"img-cart\">
        <a href=\"";
            // line 15
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["c"], "product", array()), "id", array())));
            echo "\">
          <img alt=\"Product\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["c"], "product", array()), "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\" class=\"img-thumbnail\">
        </a>
      </td>
      <td>
        <p><a href=\"";
            // line 20
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["c"], "product", array()), "id", array())));
            echo "\" class=\"d-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "product", array()), "title", array()), "html", null, true);
            echo "</a></p>
        <!-- <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Comprar despues\"><i class=\"fa fa-refresh\"></i></a>&nbsp; -->
        <a href=\"javascript:;\" onClick=\"deteleFromCart('";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "');\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Borrar\"><i class=\"fa fa-trash-o\"></i></a>
      </td>
      <td class=\"input-qty\"><input type=\"text\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "quantity", array()), "html", null, true);
            echo "\" class=\"form-control text-center\"/></td>
      <td class=\"unit\">RD\$";
            // line 25
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "product", array()), "price", array())), "html", null, true);
            echo "</td>
      <td class=\"sub\">";
            // line 26
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
        // line 29
        echo "    <tr>
      <td colspan=\"4\" class=\"text-right\">Total</td>
      <td colspan=\"2\"><b>RD\$";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total"]) ? $context["cart_total"] : null)), "html", null, true);
        echo "</b></td>
    </tr>
  </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/partials/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  82 => 29,  71 => 26,  67 => 25,  63 => 24,  58 => 22,  51 => 20,  44 => 16,  40 => 15,  36 => 13,  32 => 12,  19 => 1,);
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
      <td class=\"input-qty\"><input type=\"text\" value=\"{{c.quantity}}\" class=\"form-control text-center\"/></td>
      <td class=\"unit\">RD\${{c.product.price|number_format}}</td>
      <td class=\"sub\">{% set sub = c.product.price * c.quantity %}RD\${{sub|number_format}}</td>
    </tr>
    {% endfor %}
    <tr>
      <td colspan=\"4\" class=\"text-right\">Total</td>
      <td colspan=\"2\"><b>RD\${{ cart_total|number_format}}</b></td>
    </tr>
  </tbody>
</table>", "/home/winelivery/themes/winelivery/partials/cart.htm", "");
    }
}