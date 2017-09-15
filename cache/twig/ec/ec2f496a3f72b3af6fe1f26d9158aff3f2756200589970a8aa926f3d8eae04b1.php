<?php

/* partials/base.html.twig */
class __TwigTemplate_b6887a52f45e34f4f5e27d681fdbafdbda90c096b9e49a3a7b985d5547886feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'social' => array($this, 'block_social'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "</head>
<body id=\"top\" class=\"";
        // line 47
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('showcase', $context, $blocks);
        // line 69
        echo "
        ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 83
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 83)->display($context);
        // line 84
        echo "        </div>
    </div>
    ";
        // line 86
        $this->displayBlock('bottom', $context, $blocks);
        // line 99
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "\t      ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/global.css", 1 => 100), "method");
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/slideme.css"), "method");
        // line 20
        echo "        ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 10))) {
            // line 21
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 24
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 26
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 27
            echo "        ";
        }
        // line 28
        echo "    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/deliver.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.slideme2.js"), "method");
        // line 37
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sticky_menu", array()), "enabled", array())) {
            // line 38
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery-scrolltofixed-min.js"), "method");
            // line 39
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/fixed-header.js"), "method");
            // line 40
            echo "        ";
        }
        // line 41
        echo "\t      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 42
        echo "    ";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "        <header id=\"header\">
                <div class=\"logo\">
                  <h3><a href=\"";
        // line 52
        echo ($context["base_url_absolute"] ?? null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "</a></h3>
                    ";
        // line 53
        $this->displayBlock('social', $context, $blocks);
        // line 56
        echo "                </div>
                <div id=\"navbar\">
                    ";
        // line 58
        $this->displayBlock('header_extra', $context, $blocks);
        // line 59
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 62
        echo "                    ";
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 62)->display($context);
        // line 63
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 53
    public function block_social($context, array $blocks = array())
    {
        // line 54
        echo "                        ";
        $this->loadTemplate("partials/social.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "                    ";
    }

    // line 58
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 59
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 60
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "                    ";
    }

    // line 68
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "        <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "
            ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 77
        echo "        </section>
        ";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
        echo "            ";
        $this->loadTemplate("modular/footer.html.twig", "partials/base.html.twig", 75)->display($context);
        // line 76
        echo "            ";
    }

    // line 86
    public function block_bottom($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 87,  313 => 86,  309 => 76,  306 => 75,  303 => 74,  298 => 72,  293 => 77,  291 => 74,  288 => 73,  286 => 72,  281 => 71,  278 => 70,  273 => 68,  269 => 61,  266 => 60,  263 => 59,  258 => 58,  254 => 55,  251 => 54,  248 => 53,  241 => 63,  238 => 62,  235 => 59,  233 => 58,  229 => 56,  227 => 53,  221 => 52,  217 => 50,  214 => 49,  210 => 42,  207 => 41,  204 => 40,  201 => 39,  198 => 38,  195 => 37,  192 => 36,  189 => 35,  186 => 34,  183 => 33,  180 => 32,  177 => 31,  173 => 28,  170 => 27,  167 => 26,  164 => 25,  161 => 24,  158 => 23,  155 => 22,  152 => 21,  149 => 20,  146 => 19,  143 => 18,  140 => 17,  137 => 16,  134 => 15,  131 => 14,  128 => 13,  125 => 12,  117 => 43,  115 => 31,  109 => 29,  107 => 12,  102 => 10,  99 => 9,  97 => 8,  89 => 7,  86 => 6,  83 => 5,  77 => 99,  75 => 86,  71 => 84,  69 => 83,  63 => 79,  61 => 70,  58 => 69,  56 => 68,  53 => 67,  51 => 49,  46 => 47,  43 => 46,  41 => 5,  36 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />

    {% block stylesheets %}
\t      {% do assets.addCss('theme://css-compiled/global.css',100) %}
        {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}
        {% do assets.addCss('theme://css-compiled/template.css',101) %}
        {% do assets.addCss('theme://css/custom.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}
        {% do assets.addCss('theme://css/slideme.css') %}
        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}
            {% do assets.addCss('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.add('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/deliver.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
        {% do assets.addJs('theme://js/jquery.slideme2.js') %}
        {% if theme_config.sticky_menu.enabled %}
            {% do assets.addJs('theme://js/jquery-scrolltofixed-min.js') %}
            {% do assets.addJs('theme://js/fixed-header.js') %}
        {% endif %}
\t      {% do assets.addJs('theme://js/bootstrap.min.js',100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
                <div class=\"logo\">
                  <h3><a href=\"{{ base_url_absolute }}\">{{ config.site.title }}</a></h3>
                    {% block social %}
                        {% include 'partials/social.html.twig' %}
                    {% endblock %}
                </div>
                <div id=\"navbar\">
                    {% block header_extra %}{% endblock %}
                    {% block header_navigation %}
                    {% include 'partials/navigation.html.twig' %}
                    {% endblock %}
                    {% include 'partials/search.html.twig' %}
                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}

            {% block footer %}
            {% include 'modular/footer.html.twig' %}
            {% endblock %}
        </section>
        {% endblock %}

    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
    {{ assets.js('bottom') }}
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/partials/base.html.twig");
    }
}
