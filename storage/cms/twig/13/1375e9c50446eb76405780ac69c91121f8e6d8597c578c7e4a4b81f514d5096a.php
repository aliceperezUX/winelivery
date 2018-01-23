<?php

/* /var/www/html/themes/winelivery/partials/comments.htm */
class __TwigTemplate_f3f425157857e9c9a85d53648116a0696c99f7c61d2ea871f748c0c2cf535bdc extends Twig_Template
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
        echo "<div class=\"comments\" style=\"padding: 20px; margin-bottom: 60px\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 3
            echo "    <div class=\"col-md-12\" style=\"margin-bottom: 30px\" >
        <p style=\"font-weight: 700; margin-bottom: -3px\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "user", array()), "name", array()), "html", null, true);
            echo "</p>
        <p style=\"color:#ccc; font-size: 10px;\">";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "created_at", array()), "Y-m-d"), "html", null, true);
            echo "</p>
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "comment", array()), "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "     
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/partials/comments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  37 => 6,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"comments\" style=\"padding: 20px; margin-bottom: 60px\">
    {% for c in comments %}
    <div class=\"col-md-12\" style=\"margin-bottom: 30px\" >
        <p style=\"font-weight: 700; margin-bottom: -3px\">{{c.user.name}}</p>
        <p style=\"color:#ccc; font-size: 10px;\">{{c.created_at|date(\"Y-m-d\")}}</p>
        {{c.comment}}
    </div>
    {% endfor %}     
</div>", "/var/www/html/themes/winelivery/partials/comments.htm", "");
    }
}
