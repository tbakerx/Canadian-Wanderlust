<?php

/* @Var:{{ config.plugins.email.from }} */
class __TwigTemplate_d7e09f0c376bcbe09a48a5a3f8e725672449ba8be0cac4c342097532e96ca86f extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "email", array()), "from", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ config.plugins.email.from }}";
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
        return new Twig_Source("{{ config.plugins.email.from }}", "@Var:{{ config.plugins.email.from }}", "");
    }
}
