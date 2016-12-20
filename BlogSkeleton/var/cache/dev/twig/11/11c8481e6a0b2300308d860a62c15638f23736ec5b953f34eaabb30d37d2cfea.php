<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_4dd8e4a56ccc2f3e290140cff45e9ca9a95e9103cb66159fb4cd36448300627e extends Twig_Template
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
        $__internal_fd7550344724ca5ef2f2bbad1c9219cbe3f89e7406361b109f1c02725d62f761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7550344724ca5ef2f2bbad1c9219cbe3f89e7406361b109f1c02725d62f761->enter($__internal_fd7550344724ca5ef2f2bbad1c9219cbe3f89e7406361b109f1c02725d62f761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fd7550344724ca5ef2f2bbad1c9219cbe3f89e7406361b109f1c02725d62f761->leave($__internal_fd7550344724ca5ef2f2bbad1c9219cbe3f89e7406361b109f1c02725d62f761_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
