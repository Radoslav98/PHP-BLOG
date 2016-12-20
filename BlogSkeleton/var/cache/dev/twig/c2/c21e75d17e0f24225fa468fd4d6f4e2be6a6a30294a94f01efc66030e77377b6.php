<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4f9576e0e2d22856cb77aaace0dec779d1f36349225e8bf1c0f013ba49e9502c extends Twig_Template
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
        $__internal_4ae31adce71cc9165ff715be67ac65e20f28170bc54c023cdb39dfa21935341b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae31adce71cc9165ff715be67ac65e20f28170bc54c023cdb39dfa21935341b->enter($__internal_4ae31adce71cc9165ff715be67ac65e20f28170bc54c023cdb39dfa21935341b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_4ae31adce71cc9165ff715be67ac65e20f28170bc54c023cdb39dfa21935341b->leave($__internal_4ae31adce71cc9165ff715be67ac65e20f28170bc54c023cdb39dfa21935341b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
