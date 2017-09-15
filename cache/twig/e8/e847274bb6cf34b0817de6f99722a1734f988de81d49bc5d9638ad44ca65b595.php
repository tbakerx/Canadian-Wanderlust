<?php

/* item.html.twig */
class __TwigTemplate_9613834f457fcb18e7c0c107a90dc47cb8458a6723382f47d15464b29f75aa86 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "245612527")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
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

\t{% set base_url = page.parent.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.parent.slug %}
    {% endif  %}
   
\t{% block content %}
        {% set blog_image = page.parent.media.images|first %}
        
\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.parent.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
            <h1>{{ page.title }}</h1>
        </div>
        {% endif %}
    
        {% include 'partials/breadcrumbs.html.twig' %}
\t\t
\t\t<div class=\"blog-content-item g-grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"g-block pure-u-2-3\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_9613834f457fcb18e7c0c107a90dc47cb8458a6723382f47d15464b29f75aa86_245612527 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array());
        // line 4
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 6
        if ((($context["base_url"] ?? null) == "/")) {
            // line 7
            $context["base_url"] = "";
        }
        // line 10
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 11
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "media", array()), "images", array()));
        // line 16
        echo "        
\t\t";
        // line 17
        if (($context["blog_image"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background: ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "header", array()), "bg_color", array());
            echo " url(";
            echo $this->getAttribute(($context["blog_image"] ?? null), "url", array());
            echo ") no-repeat right;\">
            <h1>";
            // line 19
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</h1>
        </div>
        ";
        }
        // line 22
        echo "    
        ";
        // line 23
        $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 23)->display($context);
        // line 24
        echo "\t\t
\t\t<div class=\"blog-content-item g-grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"g-block pure-u-2-3\">
\t\t\t    ";
        // line 27
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 27)->display(array_merge($context, array("truncate" => false, "big_header" => true)));
        // line 28
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 30
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 30)->display($context);
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 31,  161 => 30,  157 => 28,  155 => 27,  150 => 24,  148 => 23,  145 => 22,  139 => 19,  132 => 18,  130 => 17,  127 => 16,  124 => 15,  121 => 14,  117 => 1,  114 => 11,  112 => 10,  109 => 7,  107 => 6,  105 => 4,  103 => 3,  19 => 1,);
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

\t{% set base_url = page.parent.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.parent.slug %}
    {% endif  %}
   
\t{% block content %}
        {% set blog_image = page.parent.media.images|first %}
        
\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.parent.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
            <h1>{{ page.title }}</h1>
        </div>
        {% endif %}
    
        {% include 'partials/breadcrumbs.html.twig' %}
\t\t
\t\t<div class=\"blog-content-item g-grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"g-block pure-u-2-3\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/item.html.twig");
    }
}
