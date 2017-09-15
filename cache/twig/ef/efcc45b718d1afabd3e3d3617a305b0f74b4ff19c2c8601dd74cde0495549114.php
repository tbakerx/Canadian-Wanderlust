<?php

/* modular/showcase.html.twig */
class __TwigTemplate_41c8ee7332b277d6f72c5e2000f776877a97390170a687d29f5abf0975bfc27b extends Twig_Template
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
        echo "<div id=\"content-slide\">
  <div class=\"slideme\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 4
            echo "       <div class=\"modular-row showcase flush-top\" ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["slide"], "image", array()), array(), "array")) {
                echo "style=\"background-image: url(";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["slide"], "image", array()), array(), "array"), "brightness", array(0 =>  -75), "method"), "url", array());
                echo ");\"";
            }
            echo ">
          <div><img src=\"user/themes/deliver/images/logoWhite.png\"></img></div>
          <h1>";
            // line 6
            echo $this->getAttribute($context["slide"], "heading", array());
            echo "</h1>
          <!--<h2>";
            // line 7
            echo $this->getAttribute($context["slide"], "subheading", array());
            echo "</h2> -->
          <a class=\"button\" href=\"";
            // line 8
            echo $this->getAttribute($context["slide"], "button_url", array());
            echo "\">";
            echo $this->getAttribute($context["slide"], "button_text", array());
            echo "</a>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>
</div>

";
        // line 14
        echo ($context["content"] ?? null);
        echo "

<script type=\"text/javascript\">
\$('#content-slide').slideme({
  arrows: ";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", array()), "arrows", array());
        echo ",
  autoslide: ";
        // line 19
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", array()), "autoslide", array());
        echo ",
  autoslideHoverStop: ";
        // line 20
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", array()), "autoslideHoverStop", array());
        echo ",
  interval: ";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", array()), "interval", array());
        echo ",
  loop: ";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", array()), "loop", array());
        echo ",
  pagination: \"numbers\",
  transition : '";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", array()), "transition", array());
        echo "',
  itemsForSlide: ";
        // line 25
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", array()), "itemsForSlide", array());
        echo ",
  touch: ";
        // line 26
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", array()), "touch", array());
        echo ",
  swipe: ";
        // line 27
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header_options", array()), "swipe", array());
        echo ",

});
</script>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  97 => 26,  93 => 25,  89 => 24,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  61 => 14,  56 => 11,  45 => 8,  41 => 7,  37 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"content-slide\">
  <div class=\"slideme\">
    {% for slide in page.header.slides %}
       <div class=\"modular-row showcase flush-top\" {% if page.media[slide.image] %}style=\"background-image: url({{ page.media[slide.image].brightness(-75).url }});\"{% endif %}>
          <div><img src=\"user/themes/deliver/images/logoWhite.png\"></img></div>
          <h1>{{ slide.heading }}</h1>
          <!--<h2>{{ slide.subheading }}</h2> -->
          <a class=\"button\" href=\"{{ slide.button_url }}\">{{ slide.button_text }}</a>
      </div>
  {% endfor %}
</div>
</div>

{{ content }}

<script type=\"text/javascript\">
\$('#content-slide').slideme({
  arrows: {{ site.header_options.arrows }},
  autoslide: {{ site.header_options.autoslide }},
  autoslideHoverStop: {{ site.header_options.autoslideHoverStop }},
  interval: {{ site.header_options.interval }},
  loop: {{ site.header_options.loop }},
  pagination: \"numbers\",
  transition : '{{ site.header_options.transition }}',
  itemsForSlide: {{ site.header_options.itemsForSlide }},
  touch: {{ site.header_options.touch }},
  swipe: {{ site.header_options.swipe }},

});
</script>
", "modular/showcase.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/modular/showcase.html.twig");
    }
}
