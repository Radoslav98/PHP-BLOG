<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c496856d416393db3bd2c1e36040d0693e6236b76b03da26f6b8cfd359874137 extends Twig_Template
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
        $__internal_ab315cfab04e02175b59f28ca16940f3c674a534cbd9411978b2d616c13ab0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab315cfab04e02175b59f28ca16940f3c674a534cbd9411978b2d616c13ab0e4->enter($__internal_ab315cfab04e02175b59f28ca16940f3c674a534cbd9411978b2d616c13ab0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ab315cfab04e02175b59f28ca16940f3c674a534cbd9411978b2d616c13ab0e4->leave($__internal_ab315cfab04e02175b59f28ca16940f3c674a534cbd9411978b2d616c13ab0e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
