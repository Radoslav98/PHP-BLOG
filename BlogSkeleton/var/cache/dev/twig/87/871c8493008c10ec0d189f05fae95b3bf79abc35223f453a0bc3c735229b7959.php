<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_155b052524628885460b2196f0b271d42416d87cc97361901c1202273e369c66 extends Twig_Template
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
        $__internal_edcebeb41922483889dac2d881907a36ef0ea75b27fdf99c3bc9a3e82b536c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edcebeb41922483889dac2d881907a36ef0ea75b27fdf99c3bc9a3e82b536c39->enter($__internal_edcebeb41922483889dac2d881907a36ef0ea75b27fdf99c3bc9a3e82b536c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_edcebeb41922483889dac2d881907a36ef0ea75b27fdf99c3bc9a3e82b536c39->leave($__internal_edcebeb41922483889dac2d881907a36ef0ea75b27fdf99c3bc9a3e82b536c39_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
