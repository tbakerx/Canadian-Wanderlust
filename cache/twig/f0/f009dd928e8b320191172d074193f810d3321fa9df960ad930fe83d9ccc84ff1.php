<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_0e5461a118787a16e3c98c7bb4de89745891c855d07f72b85bd04bc10b939e62 extends Twig_Template
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
        echo "<div class=\"list-item\">

    <div class=\"list-blog-header\">
        ";
        // line 4
        if (($context["big_header"] ?? null)) {
            // line 5
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropResize", array(0 => 900, 1 => 600), "method"), "html", array());
            echo "
        ";
        } else {
            // line 7
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 900, 1 => 300), "method"), "html", array());
            echo "
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 11
            echo "            <h4>
                ";
            // line 12
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 13
                echo "                <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 15
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 18
            echo "            <h4><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h4>
        ";
        }
        // line 20
        echo "
        <span class=\"list-blog-date\">
            <i class=\"fa fa-calendar\"></i>
            ";
        // line 23
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d");
        echo ", ";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M");
        echo "
        </span>
        ";
        // line 25
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array())) {
            // line 26
            echo "        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            ";
            // line 28
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array());
            echo "
        </span>
        ";
        }
        // line 31
        echo "       ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 32
            echo "        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 35
                echo "            <li><a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </ul>
        ";
        }
        // line 39
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 44
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 45
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "</p>
        ";
            // line 46
            if ( !($context["truncate"] ?? null)) {
                // line 47
                echo "        ";
                $context["show_prev_next"] = true;
                // line 48
                echo "        ";
            }
            // line 49
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 50
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "</p>
        <p><a href=\"";
            // line 51
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 52
($context["truncate"] ?? null)) {
            // line 53
            echo "        <p>";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", array()), 550);
            echo "</p>
        <p><a href=\"";
            // line 54
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 56
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "</p>
        ";
            // line 57
            $context["show_prev_next"] = true;
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if (($context["show_prev_next"] ?? null)) {
            // line 61
            echo "
        <p class=\"prev-next\">
            ";
            // line 63
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 64
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Previous Post</a>
            ";
            }
            // line 66
            echo "
            ";
            // line 67
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 68
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\">Next Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 70
            echo "        </p>
    ";
        }
        // line 72
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 72,  208 => 70,  202 => 68,  200 => 67,  197 => 66,  191 => 64,  189 => 63,  185 => 61,  183 => 60,  180 => 59,  177 => 58,  175 => 57,  170 => 56,  165 => 54,  160 => 53,  158 => 52,  154 => 51,  149 => 50,  146 => 49,  143 => 48,  140 => 47,  138 => 46,  133 => 45,  131 => 44,  124 => 39,  120 => 37,  106 => 35,  102 => 34,  98 => 32,  95 => 31,  89 => 28,  85 => 26,  83 => 25,  76 => 23,  71 => 20,  63 => 18,  54 => 15,  48 => 13,  46 => 12,  43 => 11,  41 => 10,  38 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item\">

    <div class=\"list-blog-header\">
        {% if big_header %}
            {{ page.media.images|first.cropResize(900,600).html }}
        {% else %}
            {{ page.media.images|first.cropZoom(900,300).html }}
        {% endif %}

        {% if page.header.link %}
            <h4>
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h4>
        {% else %}
            <h4><a href=\"{{ page.url }}\">{{ page.title }}</a></h4>
        {% endif %}

        <span class=\"list-blog-date\">
            <i class=\"fa fa-calendar\"></i>
            {{ page.date|date(\"d\") }}, {{ page.date|date(\"M\") }}
        </span>
        {% if page.header.author %}
        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            {{ page.header.author }}
        </span>
        {% endif %}
       {% if page.taxonomy.tag %}
        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            {% for tag in page.taxonomy.tag %}
            <li><a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></li>
            {% endfor %}
        </ul>
        {% endif %}

    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <p>{{ page.content }}</p>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <p>{{ page.summary }}</p>
        <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% elseif truncate %}
        <p>{{ page.content|truncate(550) }}</p>
        <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% else %}
        <p>{{ page.content }}</p>
        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Previous Post</a>
            {% endif %}

            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\">Next Post <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/partials/blog_item.html.twig");
    }
}
