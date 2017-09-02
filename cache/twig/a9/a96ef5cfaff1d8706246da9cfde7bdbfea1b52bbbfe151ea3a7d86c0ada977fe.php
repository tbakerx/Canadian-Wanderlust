<?php

/* modular/portfolio.html.twig */
class __TwigTemplate_7803e232ab4400d263f1c831ee32535b55e6328086aee1ec100ce303d6b07109 extends Twig_Template
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
        echo "<div class=\"modular-row portfolio\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array())) {
            // line 4
            echo "        <div class=\"notebooks\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array()), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 6
                echo "                <div class=\"notebook-row\">
                    ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
                    // line 8
                    echo "                        <div class=\"notebook\">
                            <div class=\"desc\">
                                <h4>";
                    // line 10
                    echo $this->getAttribute($context["portfolio"], "title", array());
                    echo "</h4>
                                <p>";
                    // line 11
                    echo $this->getAttribute($context["portfolio"], "desc", array());
                    echo "</p>
                            </div>
                            <a href=\"#portfolioModal";
                    // line 13
                    echo $this->getAttribute($context["portfolio"], "modalid", array());
                    echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
                                <div class='screen'><div class=\"screen-content\" style=\"background-image: url(";
                    // line 14
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["portfolio"], "image", array()), array(), "array"), "url", array());
                    echo ")\" ></div><div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div></div>
                            </a>
                            <div class='keyboard'></div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
    ";
        }
        // line 23
        echo "</div>

";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 26
            echo "    <div class=\"portfolio-modal modal\" id=\"portfolioModal";
            echo $this->getAttribute($context["portfolio"], "modalid", array());
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
            <div class=\"modal-body\">
                <h1>";
            // line 30
            echo $this->getAttribute($context["portfolio"], "title", array());
            echo "</h1>
                <a href=\"";
            // line 31
            echo $this->getAttribute($context["portfolio"], "url", array());
            echo "\">
                    <img src=\"";
            // line 32
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["portfolio"], "image", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive img-centered\" alt=\"";
            echo $this->getAttribute($context["portfolio"], "alt", array());
            echo "\">
                </a>
                <p>";
            // line 34
            echo $this->getAttribute($context["portfolio"], "desc", array());
            echo "</p>
                <ul class=\"client-details\">
                    <li>Client:
                        <strong>
                            <a href=\"";
            // line 38
            echo $this->getAttribute($context["portfolio"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["portfolio"], "client", array());
            echo "</a>
                        </strong>
                    </li>
                    <li>Date:
                        <strong>
                            ";
            // line 43
            echo $this->getAttribute($context["portfolio"], "date", array());
            echo "
                        </strong>
                    </li>
                    <li>Service:
                        <strong>
                            ";
            // line 48
            echo $this->getAttribute($context["portfolio"], "category", array());
            echo "
                        </strong>
                    </li>
                </ul>
                <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  129 => 43,  119 => 38,  112 => 34,  105 => 32,  101 => 31,  97 => 30,  89 => 26,  85 => 25,  81 => 23,  77 => 21,  70 => 19,  59 => 14,  55 => 13,  50 => 11,  46 => 10,  42 => 8,  38 => 7,  35 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row portfolio\">
    {{ content }}
    {% if page.header.portfolio %}
        <div class=\"notebooks\">
            {% for row in page.header.portfolio|batch(4) %}
                <div class=\"notebook-row\">
                    {% for portfolio in row %}
                        <div class=\"notebook\">
                            <div class=\"desc\">
                                <h4>{{ portfolio.title }}</h4>
                                <p>{{ portfolio.desc }}</p>
                            </div>
                            <a href=\"#portfolioModal{{ portfolio.modalid }}\" class=\"portfolio-link\" data-toggle=\"modal\">
                                <div class='screen'><div class=\"screen-content\" style=\"background-image: url({{ page.media[portfolio.image].url }})\" ></div><div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div></div>
                            </a>
                            <div class='keyboard'></div>
                        </div>
                    {% endfor %}
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>

{% for portfolio in page.header.portfolio %}
    <div class=\"portfolio-modal modal\" id=\"portfolioModal{{ portfolio.modalid }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
            <div class=\"modal-body\">
                <h1>{{ portfolio.title }}</h1>
                <a href=\"{{ portfolio.url }}\">
                    <img src=\"{{ page.media[portfolio.image].url }}\" class=\"img-responsive img-centered\" alt=\"{{ portfolio.alt }}\">
                </a>
                <p>{{ portfolio.desc }}</p>
                <ul class=\"client-details\">
                    <li>Client:
                        <strong>
                            <a href=\"{{ portfolio.url }}\">{{ portfolio.client }}</a>
                        </strong>
                    </li>
                    <li>Date:
                        <strong>
                            {{ portfolio.date }}
                        </strong>
                    </li>
                    <li>Service:
                        <strong>
                            {{ portfolio.category }}
                        </strong>
                    </li>
                </ul>
                <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
            </div>
        </div>
    </div>
{% endfor %}
", "modular/portfolio.html.twig", "/home/timbaker/Documents/dev/CanadianWanderlust/user/themes/deliver/templates/modular/portfolio.html.twig");
    }
}
