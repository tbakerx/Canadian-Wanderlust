<?php

/* blog.html.twig */
class __TwigTemplate_13d7ea761b26e8a5aef12e33228d5579fd326af7a72bf85fcbb318cf5ecdf2cf extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1809339463")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% set collection = page.collection() %}
{% set base_url = page.url %}
{% set feed_url = base_url %}

{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
{% set blog_image = page.media.images|first %}

{% if blog_image %}
<div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
\t{% else %}
\t<div class=\"blog-header\">
\t\t{% endif %}
\t\t{{ page.content }}
\t</div>

\t{% if config.plugins.breadcrumbs.enabled %}
\t{% include 'partials/breadcrumbs.html.twig' %}
\t{% endif %}

\t<div class=\"content-wrapper blog-content-list g-grid pure-g-r\">
\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
\t\t\t{% for child in collection %}
\t\t\t{% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
\t\t\t{% endfor %}

\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t{% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
\t\t\t{% endif %}
\t\t</div>
\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t</div>
\t</div>
\t{% endblock %}

\t{% endembed %}
", "blog.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_13d7ea761b26e8a5aef12e33228d5579fd326af7a72bf85fcbb318cf5ecdf2cf_1809339463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 4
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
        // line 5
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 7
        if ((($context["base_url"] ?? null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 12
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 17
        echo "
";
        // line 18
        if (($context["blog_image"] ?? null)) {
            // line 19
            echo "<div class=\"flush-top blog-header blog-header-image\" style=\"background: ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "bg_color", array());
            echo " url(";
            echo $this->getAttribute(($context["blog_image"] ?? null), "url", array());
            echo ") no-repeat right;\">
\t";
        } else {
            // line 21
            echo "\t<div class=\"blog-header\">
\t\t";
        }
        // line 23
        echo "\t\t";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t</div>

\t";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 27
            echo "\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 27)->display($context);
            // line 28
            echo "\t";
        }
        // line 29
        echo "
\t<div class=\"content-wrapper blog-content-list g-grid pure-g-r\">
\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 33
            echo "\t\t\t";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 33)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 34
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t\t\t";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 37
            echo "\t\t\t";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 37)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 38
            echo "\t\t\t";
        }
        // line 39
        echo "\t\t</div>
\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t";
        // line 41
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 41)->display($context);
        // line 42
        echo "\t\t</div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 42,  225 => 41,  221 => 39,  218 => 38,  215 => 37,  213 => 36,  210 => 35,  196 => 34,  193 => 33,  176 => 32,  171 => 29,  168 => 28,  165 => 27,  163 => 26,  156 => 23,  152 => 21,  144 => 19,  142 => 18,  139 => 17,  137 => 16,  134 => 15,  130 => 1,  127 => 12,  125 => 11,  122 => 8,  120 => 7,  118 => 5,  116 => 4,  114 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% set collection = page.collection() %}
{% set base_url = page.url %}
{% set feed_url = base_url %}

{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
{% set blog_image = page.media.images|first %}

{% if blog_image %}
<div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
\t{% else %}
\t<div class=\"blog-header\">
\t\t{% endif %}
\t\t{{ page.content }}
\t</div>

\t{% if config.plugins.breadcrumbs.enabled %}
\t{% include 'partials/breadcrumbs.html.twig' %}
\t{% endif %}

\t<div class=\"content-wrapper blog-content-list g-grid pure-g-r\">
\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
\t\t\t{% for child in collection %}
\t\t\t{% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
\t\t\t{% endfor %}

\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t{% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
\t\t\t{% endif %}
\t\t</div>
\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t</div>
\t</div>
\t{% endblock %}

\t{% endembed %}
", "blog.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/blog.html.twig");
    }
}
