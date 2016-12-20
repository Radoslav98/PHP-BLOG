<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_56768d9afe1625d2157c27844b2ceb85474b7a48086e944549be96016d9e4069 extends Twig_Template
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
        $__internal_0e90fd44ab5bc98b4b7699c47767c7b5c0ab99dba40a51cab20ccefdd8a83487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e90fd44ab5bc98b4b7699c47767c7b5c0ab99dba40a51cab20ccefdd8a83487->enter($__internal_0e90fd44ab5bc98b4b7699c47767c7b5c0ab99dba40a51cab20ccefdd8a83487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0e90fd44ab5bc98b4b7699c47767c7b5c0ab99dba40a51cab20ccefdd8a83487->leave($__internal_0e90fd44ab5bc98b4b7699c47767c7b5c0ab99dba40a51cab20ccefdd8a83487_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
