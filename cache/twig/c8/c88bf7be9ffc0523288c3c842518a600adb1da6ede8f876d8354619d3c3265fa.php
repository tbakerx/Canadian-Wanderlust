<?php

/* @Var:{{ form.value.email }} */
class __TwigTemplate_f1a42c24a0dd6a21b63cc6fcf1c8924a49575ea320bb90073a572d6691e64c36 extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "email", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ form.value.email }}";
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
        return new Twig_Source("{{ form.value.email }}", "@Var:{{ form.value.email }}", "");
    }
}
