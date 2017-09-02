<?php

/* modular/team.html.twig */
class __TwigTemplate_525649244c0e3729cb2ca0faae00fe3a682e665dbeb665eacf6ccb37bf30e992 extends Twig_Template
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
        echo "<div class=\"modular-row team\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    <div class=\"members\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "members", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 5
            echo "        <div class=\"member\">
            <img src=\"";
            // line 6
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["member"], "image", array()), array(), "array"), "url", array());
            echo "\" alt=\"\">
            <h4>";
            // line 7
            echo $this->getAttribute($context["member"], "name", array());
            echo "</h4>
            <span>";
            // line 8
            echo $this->getAttribute($context["member"], "title", array());
            echo "</span>
            <hr>
            <p>";
            // line 10
            echo $this->getAttribute($context["member"], "info", array());
            echo "</p>
            <ul class=\"social-icons\">
                <li>
                    <a href=\"";
            // line 13
            echo $this->getAttribute($context["member"], "social_twitter", array());
            echo "\">
                        <i class=\"fa fa-twitter\"></i></a>
                </li>
                <li>
                    <a href=\"";
            // line 17
            echo $this->getAttribute($context["member"], "social_facebook", array());
            echo "\">
                        <i class=\"fa fa-facebook\"></i></a>
                </li>
                <li>
                    <a href=\"";
            // line 21
            echo $this->getAttribute($context["member"], "social_feed", array());
            echo "\">
                        <i class=\"fa fa-rss\"></i></a>
                </li>
            </ul>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
    <div class=\"callout-line\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  67 => 21,  60 => 17,  53 => 13,  47 => 10,  42 => 8,  38 => 7,  34 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row team\">
    {{ content }}
    <div class=\"members\">
        {% for member in page.header.members %}
        <div class=\"member\">
            <img src=\"{{page.media[member.image].url}}\" alt=\"\">
            <h4>{{ member.name }}</h4>
            <span>{{ member.title }}</span>
            <hr>
            <p>{{ member.info }}</p>
            <ul class=\"social-icons\">
                <li>
                    <a href=\"{{ member.social_twitter }}\">
                        <i class=\"fa fa-twitter\"></i></a>
                </li>
                <li>
                    <a href=\"{{ member.social_facebook }}\">
                        <i class=\"fa fa-facebook\"></i></a>
                </li>
                <li>
                    <a href=\"{{ member.social_feed }}\">
                        <i class=\"fa fa-rss\"></i></a>
                </li>
            </ul>
        </div>
        {% endfor %}
    </div>
    <div class=\"callout-line\"></div>
</div>
", "modular/team.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/modular/team.html.twig");
    }
}
