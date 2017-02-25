<?php

/* /home/winelivery/themes/winelivery/partials/wishlist.htm */
class __TwigTemplate_a9f399e29e77a0fd778e3fc7c2531f941a4a8bf8a81ac9dbe778e6dd446c89c9 extends Twig_Template
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
        echo "<table class=\"table table-cart\" id=\"wishlist_partial\">
    <thead>
        <tr>
          <th></th>
          <th>Producto</th>
          <th>Fecha</th>
          <th>Disponibilidad</th>
          <th>Precio</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wishlist"]) ? $context["wishlist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 14
            echo "        <tr>
            <td class=\"img-cart\">
                <a href=\"";
            // line 16
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["w"], "product", array()), "id", array())));
            echo "\">
                    <img alt=\"Product\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["w"], "product", array()), "featured_image", array()), "getPath", array()), "html", null, true);
            echo "\" class=\"img-thumbnail\">
                </a>
            </td>
            <td>
                <p><a href=\"";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("producto-detalle", array("id" => $this->getAttribute($this->getAttribute($context["w"], "product", array()), "id", array())));
            echo "\" class=\"d-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["w"], "product", array()), "title", array()), "html", null, true);
            echo "</a></p>
                <p><small>";
            // line 22
            echo twig_slice($this->env, $this->getAttribute($this->getAttribute($context["w"], "product", array()), "description", array()), 0, 125);
            echo "</small></p>
            </td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["w"], "created_at", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 26
            if (($this->getAttribute($this->getAttribute($context["w"], "product", array()), "stock", array()) >= 1)) {
                // line 27
                echo "                    <span class=\"label label-success arrowed\">En La Bodega</span>
                ";
            } else {
                // line 29
                echo "                    <span class=\"label label-success arrowed\">Agotado</span>
                ";
            }
            // line 31
            echo "            </td>
            <td class=\"unit\">RD\$";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["w"], "product", array()), "price", array())), "html", null, true);
            echo "</td>
            <td class=\"action\">
            <a onClick=\"moveToCart('";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "id", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["w"], "product", array()), "id", array()), "html", null, true);
            echo "');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a>&nbsp;
            <a href=\"javascript:;\" onClick=\"deteleFromWishlist('";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "id", array()), "html", null, true);
            echo "');\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"eliminar\"><i class=\"fa fa-trash-o\"></i></a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "/home/winelivery/themes/winelivery/partials/wishlist.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  92 => 35,  86 => 34,  81 => 32,  78 => 31,  74 => 29,  70 => 27,  68 => 26,  63 => 24,  58 => 22,  52 => 21,  45 => 17,  41 => 16,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-cart\" id=\"wishlist_partial\">
    <thead>
        <tr>
          <th></th>
          <th>Producto</th>
          <th>Fecha</th>
          <th>Disponibilidad</th>
          <th>Precio</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
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
            <td>
                {% if w.product.stock >= 1 %}
                    <span class=\"label label-success arrowed\">En La Bodega</span>
                {% else %}
                    <span class=\"label label-success arrowed\">Agotado</span>
                {% endif %}
            </td>
            <td class=\"unit\">RD\${{w.product.price|number_format}}</td>
            <td class=\"action\">
            <a onClick=\"moveToCart('{{w.id}}','{{w.product.id}}');\" href=\"javascript:;\" data-toggle=\"tooltip\" title=\"Agregar al carrito\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a>&nbsp;
            <a href=\"javascript:;\" onClick=\"deteleFromWishlist('{{w.id}}');\" class=\"text-danger\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"eliminar\"><i class=\"fa fa-trash-o\"></i></a>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>", "/home/winelivery/themes/winelivery/partials/wishlist.htm", "");
    }
}
