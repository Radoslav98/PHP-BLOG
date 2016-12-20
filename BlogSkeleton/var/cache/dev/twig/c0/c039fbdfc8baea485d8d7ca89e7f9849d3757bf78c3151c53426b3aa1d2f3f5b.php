<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_071ab172e043ad7ff165a2dc38fa98367ddfdbdf60c66d39ad415e62f4317621 extends Twig_Template
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
        $__internal_9407bc758c2c15c33abb7ae656fa8462861fdf7d96db12cea2dedd0d937c95f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9407bc758c2c15c33abb7ae656fa8462861fdf7d96db12cea2dedd0d937c95f4->enter($__internal_9407bc758c2c15c33abb7ae656fa8462861fdf7d96db12cea2dedd0d937c95f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_9407bc758c2c15c33abb7ae656fa8462861fdf7d96db12cea2dedd0d937c95f4->leave($__internal_9407bc758c2c15c33abb7ae656fa8462861fdf7d96db12cea2dedd0d937c95f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
