<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_2ba8dc84700eba7ab4cf470ba425fc3678934625508ba2e389f1b06bc782507b extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 2
            echo "<div class=\"sidebar-content\">
    <h4>SimpleSearch</h4>
    ";
            // line 4
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 4)->display($context);
            // line 5
            echo "</div>
";
        }
        // line 7
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 8
            echo "<div class=\"sidebar-content\">
    <h4>Related Posts</h4>
    ";
            // line 10
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 10)->display($context);
            // line 11
            echo "</div>
";
        }
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 14
            echo "<div class=\"sidebar-content\">
\t<h4>Random Article</h4>
\t<a class=\"button\" href=\"";
            // line 16
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
";
        }
        // line 19
        echo "            <!-- <div class=\"sidebar-content\">
            \t<h4>Some Text Widget</h4>
            \t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>  -->

";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 25
            echo "<div class=\"sidebar-content\">
    <h4>Popular Tags</h4>
    ";
            // line 27
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 27)->display(array_merge($context, array("taxonomy" => "tag")));
            // line 28
            echo "</div>
";
        }
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 31
            echo "<div class=\"sidebar-content\">
    <h4>Archives</h4>
\t";
            // line 33
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 33)->display($context);
            // line 34
            echo "</div>
";
        }
        // line 36
        echo "          <!--";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 37
            echo "          <div class=\"sidebar-content syndicate\">
              <h4>Syndicate</h4>
              <a class=\"button\" href=\"";
            // line 39
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
              <a class=\"button\" href=\"";
            // line 40
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
          </div>
          ";
        }
        // line 42
        echo "  -->
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 42,  97 => 40,  93 => 39,  89 => 37,  86 => 36,  82 => 34,  80 => 33,  76 => 31,  74 => 30,  70 => 28,  68 => 27,  64 => 25,  62 => 24,  55 => 19,  49 => 16,  45 => 14,  43 => 13,  39 => 11,  37 => 10,  33 => 8,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    <h4>SimpleSearch</h4>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
<div class=\"sidebar-content\">
    <h4>Related Posts</h4>
    {% include 'partials/relatedpages.html.twig' %}
</div>
{% endif %}
{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
\t<h4>Random Article</h4>
\t<a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
{% endif %}
            <!-- <div class=\"sidebar-content\">
            \t<h4>Some Text Widget</h4>
            \t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>  -->

{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <h4>Popular Tags</h4>
    {% include 'partials/taxonomylist.html.twig' with {'taxonomy':'tag'} %}
</div>
{% endif %}
{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <h4>Archives</h4>
\t{% include 'partials/archives.html.twig' %}
</div>
{% endif %}
          <!--{% if config.plugins.feed.enabled %}
          <div class=\"sidebar-content syndicate\">
              <h4>Syndicate</h4>
              <a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
              <a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
          </div>
          {% endif %}  -->
", "partials/sidebar.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/partials/sidebar.html.twig");
    }
}
