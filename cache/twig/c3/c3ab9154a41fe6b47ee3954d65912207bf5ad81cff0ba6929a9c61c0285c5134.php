<?php

/* modular/form.html.twig */
class __TwigTemplate_1a972bf31d12cb077ca9c1965f0e6516ad3f5e6f14f44dcc093cfed64bade73e extends Twig_Template
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
        echo "<div class=\"modular-row contact ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
    <div class=\"g-grid pure-g-r\">
        <div id=\"listing\" class=\"g-block pure-u-2-3\">
            ";
        // line 4
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 4)->display($context);
        // line 5
        echo "        </div>
        <div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
            ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  28 => 5,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row contact {{ page.header.class }}\">
    <div class=\"g-grid pure-g-r\">
        <div id=\"listing\" class=\"g-block pure-u-2-3\">
            {% include \"forms/form.html.twig\" %}
        </div>
        <div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
            {{ page.content }}
        </div>
    </div>
</div>
", "modular/form.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/modular/form.html.twig");
    }
}
