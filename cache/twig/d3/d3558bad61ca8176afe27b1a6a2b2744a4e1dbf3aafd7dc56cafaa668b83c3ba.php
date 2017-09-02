<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_250a9aa77d4e6e33d22737a41831d693121cf70d888501df240b11fabcc6023a extends Twig_Template
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
        echo "<input type=\"text\" placeholder=\"Search...\" value=\"";
        echo ($context["query"] ?? null);
        echo "\" data-searchsidebar-input=\"";
        echo ($context["base_url_relative"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\" />
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-searchsidebar-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('searchsidebar-input') + ':' + input.val();
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<input type=\"text\" placeholder=\"Search...\" value=\"{{ query }}\" data-searchsidebar-input=\"{{ base_url_relative }}{{ config.plugins.simplesearch.route}}/query\" />
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-searchsidebar-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('searchsidebar-input') + ':' + input.val();
        }
    });
});
</script>
", "partials/simplesearch_searchbox.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/partials/simplesearch_searchbox.html.twig");
    }
}
