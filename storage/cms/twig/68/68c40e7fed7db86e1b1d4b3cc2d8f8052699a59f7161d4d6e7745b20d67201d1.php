<?php

/* /var/www/html/themes/winelivery/partials/addresses.htm */
class __TwigTemplate_eb6df46093e5babdd98e16e16f46bd8917c8b0679062f4d418095445440041d6 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 2
            echo " <div class=\"col-xs-12 col-md-4\">
    <form>
        <p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "sector", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "calle", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "residencial", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "numero", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "telefono", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "celular", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "proximo", array()), "html", null, true);
            echo "</p>
        <button onClick=\"editAddress('";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "sector", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "calle", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "residencial", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "numero", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "telefono", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "celular", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "proximo", array()), "html", null, true);
            echo "');\" style=\"width: 150px\" type=\"button\" class=\"btn btn-theme\">Editar</button>
        <button onClick=\"eliminarAddress('";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "');\" style=\"width: 150px\" type=\"button\" class=\"btn  pull-right\">Eliminar</button>
    </form>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/partials/addresses.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  43 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for a in addresses %}
 <div class=\"col-xs-12 col-md-4\">
    <form>
        <p>{{a.sector}} {{a.calle}} {{a.residencial}} {{a.numero}} {{a.telefono}} {{a.celular}} {{a.proximo}}</p>
        <button onClick=\"editAddress('{{a.id}}','{{a.sector}}','{{a.calle}}','{{a.residencial}}','{{a.numero}}','{{a.telefono}}','{{a.celular}}','{{a.proximo}}');\" style=\"width: 150px\" type=\"button\" class=\"btn btn-theme\">Editar</button>
        <button onClick=\"eliminarAddress('{{a.id}}');\" style=\"width: 150px\" type=\"button\" class=\"btn  pull-right\">Eliminar</button>
    </form>
</div>
{% endfor %}", "/var/www/html/themes/winelivery/partials/addresses.htm", "");
    }
}
