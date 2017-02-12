<?php

/* /home/winelivery/themes/winelivery/partials/wishlistt.htm */
class __TwigTemplate_9470070af0e3ea229bc2abfbc9e5662aa4e4e9ade2daaa539276295d8c454960 extends Twig_Template
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
        echo "<tbody id=\"wishlist\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wishlist"]) ? $context["wishlist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 3
            echo "    <tr>
      <td class=\"img-cart\">
        <a href=\"";
            // line 5
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["w"], "product", array()), "id", array())));
            echo "\">
          <img alt=\"Product\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["w"], "product", array()), "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\" class=\"img-thumbnail\">
        </a>
      </td>
      <td>
        <p><a href=\"";
            // line 10
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["w"], "product", array()), "id", array())));
            echo "\" class=\"d-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["w"], "product", array()), "title", array()), "html", null, true);
            echo "</a></p>
        <p><small>";
            // line 11
            echo twig_slice($this->env, $this->getAttribute($this->getAttribute($context["w"], "product", array()), "description", array()), 0, 125);
            echo "</small></p>
      </td>
      <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["w"], "created_at", array()), "Y-m-d"), "html", null, true);
            echo "</td>
      <td><span class=\"label label-success arrowed\">En la bodega</span></td>
      <td class=\"unit\">RD\$";
            // line 15
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["w"], "product", array()), "price", array())), "html", null, true);
            echo "</td>
      <td class=\"action\">
        <!-- <a onClick=\"addToCart('";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["w"], "product", array()), "id", array()), "html", null, true);
            echo "');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>&nbsp; -->
        <a href=\"javascript:;\" onClick=\"deteleFromWishlist('";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "id", array()), "html", null, true);
            echo "');\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"eliminar\"><i class=\"fa fa-trash-o\"></i></a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</tbody>";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/partials/wishlistt.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  66 => 18,  62 => 17,  57 => 15,  52 => 13,  47 => 11,  41 => 10,  34 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tbody id=\"wishlist\">
    {% for w in wishlist %}
    <tr>
      <td class=\"img-cart\">
        <a href=\"{{\"producto-detalle\"|page({id:w.product.id})}}\">
          <img alt=\"Product\" src=\"{{w.product.featured_image.getPath}}\" class=\"img-thumbnail\">
        </a>
      </td>
      <td>
        <p><a href=\"{{\"producto-detalle\"|page({id:w.product.id})}}\" class=\"d-block\">{{w.product.title}}</a></p>
        <p><small>{{w.product.description[:125]|raw}}</small></p>
      </td>
      <td>{{w.created_at|date(\"Y-m-d\")}}</td>
      <td><span class=\"label label-success arrowed\">En la bodega</span></td>
      <td class=\"unit\">RD\${{w.product.price|number_format}}</td>
      <td class=\"action\">
        <!-- <a onClick=\"addToCart('{{w.product.id}}');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i style=\"color:#fff; font-size:18px\" class=\"fa fa-shopping-cart\"></i></a>&nbsp; -->
        <a href=\"javascript:;\" onClick=\"deteleFromWishlist('{{w.id}}');\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"eliminar\"><i class=\"fa fa-trash-o\"></i></a>
      </td>
    </tr>
    {% endfor %}
</tbody>", "/home/winelivery/themes/winelivery/partials/wishlistt.htm", "");
    }
}
