<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c5e2444018dbb2122764783c67fa53fd2776a2ef1ee6b84bab5e763b0f0c9ecc extends Twig_Template
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
        $__internal_5b062f92342e9398227f7a5ed521b85a56abf78d7c0033d88bb4fcaed12b991d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b062f92342e9398227f7a5ed521b85a56abf78d7c0033d88bb4fcaed12b991d->enter($__internal_5b062f92342e9398227f7a5ed521b85a56abf78d7c0033d88bb4fcaed12b991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5b062f92342e9398227f7a5ed521b85a56abf78d7c0033d88bb4fcaed12b991d->leave($__internal_5b062f92342e9398227f7a5ed521b85a56abf78d7c0033d88bb4fcaed12b991d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
