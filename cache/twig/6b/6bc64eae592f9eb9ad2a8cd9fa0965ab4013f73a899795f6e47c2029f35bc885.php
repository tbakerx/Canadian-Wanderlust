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
        // line 1
        echo "<ul class=\"social-icons\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 3
            echo "        <li>
            <a href=\"";
            // line 4
            echo $this->getAttribute($context["social"], "url", array());
            echo "\">
                ";
            // line 5
            if ($this->getAttribute($context["social"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["social"], "icon", array());
                echo "\"></i>";
            }
            // line 6
            echo "            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>  
";
    }

    public function getTemplateName()
    {
        return "partials/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  39 => 6,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"social-icons\">
    {% for social in site.social %}
        <li>
            <a href=\"{{ social.url }}\">
                {% if social.icon %}<i class=\"fa fa-{{ social.icon }}\"></i>{% endif %}
            </a>
        </li>
    {% endfor %}
</ul>  
", "partials/social.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/partials/social.html.twig");
    }
}
