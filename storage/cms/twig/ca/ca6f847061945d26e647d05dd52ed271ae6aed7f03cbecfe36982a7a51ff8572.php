<?php

/* /var/www/html/themes/winelivery/layouts/layout_mobile.htm */
class __TwigTemplate_e853517a4441f7f8c5627d7712cc089dccf494001f65eb5f5f2058d9cb57d82b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home - Winelivery</title>
    ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()) == "")) {
            // line 12
            echo "    <link href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/bootstrap/css/bootstrap.css", 1 => "assets/css/font-awesome.css", 2 => "assets/css/bootstrap-select.css", 3 => "assets/css/owl.carousel.css", 4 => "assets/css/owl.theme.default.css", 5 => "assets/css/style.teal.flat.css", 6 => "assets/css/animate.css", 7 => "assets/css/full-width-pics.css"));
            // line 22
            echo "\" rel=\"stylesheet\">
    ";
        } else {
            // line 24
            echo "    <link href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/bootstrap/css/bootstrap.css", 1 => "assets/css/font-awesome.css", 2 => "assets/css/bootstrap-select.css", 3 => "assets/css/owl.carousel.css", 4 => "assets/css/owl.theme.default.css", 5 => "assets/css/style.teal.flat.css", 6 => "assets/css/animate.css", 7 => "assets/css/full-width-pics.css"));
            // line 33
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 35
        echo "    <style>
        Size para miniatura
        .wine-thumbnail
        {
        \twidth: 160px; 
        \theight: 200px;
        }
        
        Size para detail
        .wine-detail-box
        {
        \tmargin-bottom: 50px; 
        \tpadding: 20px;
        }
        .size-img-detail
        {
        \twidth: 350px; 
        \theight:500px;
        }
        .evaluacion {
          width: 160px;
          height: 20px;
        }
       .evaluacion p {
        }

        .evaluacion label {
          font-size:14px;
          padding-right: 1px;
     
        }

        input[type=\"radio\"] {
          display: none;
        }
        .clasificacion {
          direction: rtl;
          unicode-bidi: bidi-override;
          float: left;
        }

        label {
          color: #ccc;

        }

        label:hover,
        label:hover ~ label {
          color: orange;
        }

        input[type=\"radio\"]:checked ~ label {
          color: orange;
        }
        
        .evaluacion-detalle {
              width: 160px;
              height: 20px;
            }

            .evaluacion-detalle label {
              font-size:20px;
              padding-right: 3px;
         
            }
              .evaluacion-detalle p {
              
            }

            input[type=\"radio\"] {
              display: none;
            }
            .clasificacion {
              direction: rtl;
              unicode-bidi: bidi-override;
              float: left;
            }

            label {
              color: #ccc;

            }

            label:hover,
            label:hover ~ label {
              color: orange;
            }

            input[type=\"radio\"]:checked ~ label {
              color: orange;
            }
    </style>
</head>
<body>
    ";
        // line 129
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 130
        echo "    <script src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "@jquery", 1 => "@framework", 2 => "@framework.extras"));
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 131
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.ez-plus.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 132
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.bootstrap-touchspin.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 133
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.raty-fa.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 134
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/bootstrap/js/bootstrap.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 135
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap-select.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 136
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/owl.carousel.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 137
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/nouislider.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 138
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mimity.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 139
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mimity.detail.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 140
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mimity.filter-sidebar.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 141
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.mask.js");
        echo "\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"";
        // line 142
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jqFunctions.js?v=1");
        echo "\"></script>
    ";
        // line 143
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 144
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/winelivery/layouts/layout_mobile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 144,  201 => 143,  197 => 142,  193 => 141,  189 => 140,  185 => 139,  181 => 138,  177 => 137,  173 => 136,  169 => 135,  165 => 134,  161 => 133,  157 => 132,  153 => 131,  148 => 130,  146 => 129,  50 => 35,  46 => 33,  43 => 24,  39 => 22,  36 => 12,  34 => 11,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"{{\"assets/images/favicon.ico\"|theme}}\" type=\"image/x-icon\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home - Winelivery</title>
    {% if this.page.title == \"\" %}
    <link href=\"{{ [
        'assets/bootstrap/css/bootstrap.css',
        'assets/css/font-awesome.css',
        'assets/css/bootstrap-select.css',
        'assets/css/owl.carousel.css',
        'assets/css/owl.theme.default.css',
        'assets/css/style.teal.flat.css',
        'assets/css/animate.css',
        'assets/css/full-width-pics.css'
        
    ]|theme }}\" rel=\"stylesheet\">
    {% else %}
    <link href=\"{{ [
        'assets/bootstrap/css/bootstrap.css',
        'assets/css/font-awesome.css',
        'assets/css/bootstrap-select.css',
        'assets/css/owl.carousel.css',
        'assets/css/owl.theme.default.css',
        'assets/css/style.teal.flat.css',
        'assets/css/animate.css',
        'assets/css/full-width-pics.css'
    ]|theme }}\" rel=\"stylesheet\">
    {% endif %}
    <style>
        Size para miniatura
        .wine-thumbnail
        {
        \twidth: 160px; 
        \theight: 200px;
        }
        
        Size para detail
        .wine-detail-box
        {
        \tmargin-bottom: 50px; 
        \tpadding: 20px;
        }
        .size-img-detail
        {
        \twidth: 350px; 
        \theight:500px;
        }
        .evaluacion {
          width: 160px;
          height: 20px;
        }
       .evaluacion p {
        }

        .evaluacion label {
          font-size:14px;
          padding-right: 1px;
     
        }

        input[type=\"radio\"] {
          display: none;
        }
        .clasificacion {
          direction: rtl;
          unicode-bidi: bidi-override;
          float: left;
        }

        label {
          color: #ccc;

        }

        label:hover,
        label:hover ~ label {
          color: orange;
        }

        input[type=\"radio\"]:checked ~ label {
          color: orange;
        }
        
        .evaluacion-detalle {
              width: 160px;
              height: 20px;
            }

            .evaluacion-detalle label {
              font-size:20px;
              padding-right: 3px;
         
            }
              .evaluacion-detalle p {
              
            }

            input[type=\"radio\"] {
              display: none;
            }
            .clasificacion {
              direction: rtl;
              unicode-bidi: bidi-override;
              float: left;
            }

            label {
              color: #ccc;

            }

            label:hover,
            label:hover ~ label {
              color: orange;
            }

            input[type=\"radio\"]:checked ~ label {
              color: orange;
            }
    </style>
</head>
<body>
    {% page %}
    <script src=\"{{ ['@jquery','@framework','@framework.extras']|theme }}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/jquery.ez-plus.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/jquery.bootstrap-touchspin.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/jquery.raty-fa.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/bootstrap/js/bootstrap.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/bootstrap-select.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/owl.carousel.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/nouislider.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/mimity.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/mimity.detail.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/mimity.filter-sidebar.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/jquery.mask.js\"|theme}}\"></script>
    <script language=\"JavaScript\" type=\"text/javascript\" src=\"{{\"assets/js/jqFunctions.js?v=1\"|theme}}\"></script>
    {% scripts %}
</body>
</html>", "/var/www/html/themes/winelivery/layouts/layout_mobile.htm", "");
    }
}
