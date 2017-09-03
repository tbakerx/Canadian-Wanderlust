<?php

/* partials/social.html.twig */
class __TwigTemplate_593bc09034774dcdda07b75710facd38d4a85e03962b7b5f9722ae67b11898c3 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "partials/social.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
<ul class=\"social-icons\">
    {% for social in site.social %}
        <li>
            <a href=\"{{ social.url }}\">
                {% if social.icon %}<i class=\"fa fa-{{ social.icon }}\"></i>{% endif %}
            </a>
        </li>
    {% endfor %}
</ul>
#}
", "partials/social.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/partials/social.html.twig");
    }
}
