<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_3663b2ec8026774c60a7587983b0f5670791ee9ef45a9334006062d3269d7a93 extends Twig_Template
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
        $__internal_3ebb5c2382c9b643648ae4ed0533093337672da2a94108d7468f6c83c0b21451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebb5c2382c9b643648ae4ed0533093337672da2a94108d7468f6c83c0b21451->enter($__internal_3ebb5c2382c9b643648ae4ed0533093337672da2a94108d7468f6c83c0b21451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_3ebb5c2382c9b643648ae4ed0533093337672da2a94108d7468f6c83c0b21451->leave($__internal_3ebb5c2382c9b643648ae4ed0533093337672da2a94108d7468f6c83c0b21451_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
