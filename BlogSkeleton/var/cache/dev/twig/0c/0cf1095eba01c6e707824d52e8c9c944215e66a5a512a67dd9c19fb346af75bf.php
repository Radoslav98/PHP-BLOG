<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_54b41fa6d19f46bbafa8ca2c01d26a074c1c742d2c1f6a81b5beab1044368ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a4e09f0a0039fbf74b3870e4da065005cd4a1c9c8e52a449727f5d292230174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4e09f0a0039fbf74b3870e4da065005cd4a1c9c8e52a449727f5d292230174->enter($__internal_2a4e09f0a0039fbf74b3870e4da065005cd4a1c9c8e52a449727f5d292230174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4e09f0a0039fbf74b3870e4da065005cd4a1c9c8e52a449727f5d292230174->leave($__internal_2a4e09f0a0039fbf74b3870e4da065005cd4a1c9c8e52a449727f5d292230174_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10725a5495b1d8a80bf496e83d66b0f65c09bf7e71bff1d53a055c0c1f0437b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10725a5495b1d8a80bf496e83d66b0f65c09bf7e71bff1d53a055c0c1f0437b1->enter($__internal_10725a5495b1d8a80bf496e83d66b0f65c09bf7e71bff1d53a055c0c1f0437b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_10725a5495b1d8a80bf496e83d66b0f65c09bf7e71bff1d53a055c0c1f0437b1->leave($__internal_10725a5495b1d8a80bf496e83d66b0f65c09bf7e71bff1d53a055c0c1f0437b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a50a4b44e267c7c49676c3e9c6db3a1895df5c1d10d95dbde85674eb32103291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50a4b44e267c7c49676c3e9c6db3a1895df5c1d10d95dbde85674eb32103291->enter($__internal_a50a4b44e267c7c49676c3e9c6db3a1895df5c1d10d95dbde85674eb32103291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a50a4b44e267c7c49676c3e9c6db3a1895df5c1d10d95dbde85674eb32103291->leave($__internal_a50a4b44e267c7c49676c3e9c6db3a1895df5c1d10d95dbde85674eb32103291_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b556c42252366c7d43f213af3368b9728f7bfc09527eac042589cb4199d4a756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b556c42252366c7d43f213af3368b9728f7bfc09527eac042589cb4199d4a756->enter($__internal_b556c42252366c7d43f213af3368b9728f7bfc09527eac042589cb4199d4a756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b556c42252366c7d43f213af3368b9728f7bfc09527eac042589cb4199d4a756->leave($__internal_b556c42252366c7d43f213af3368b9728f7bfc09527eac042589cb4199d4a756_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
