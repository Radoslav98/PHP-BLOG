<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_30c97513f58f3c6c368bc45975233c15e3e0324e72dfc555b44b44c161b7d575 extends Twig_Template
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
        $__internal_ac6f7e75b50d8ef57e9365c5aa9aa4898e2a707b5b6b0df00f946fd5bb1fc5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6f7e75b50d8ef57e9365c5aa9aa4898e2a707b5b6b0df00f946fd5bb1fc5eb->enter($__internal_ac6f7e75b50d8ef57e9365c5aa9aa4898e2a707b5b6b0df00f946fd5bb1fc5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac6f7e75b50d8ef57e9365c5aa9aa4898e2a707b5b6b0df00f946fd5bb1fc5eb->leave($__internal_ac6f7e75b50d8ef57e9365c5aa9aa4898e2a707b5b6b0df00f946fd5bb1fc5eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39cf4cdacfd3fb96f84c453040423a682bc490a6763c8e6612dc781e587327fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cf4cdacfd3fb96f84c453040423a682bc490a6763c8e6612dc781e587327fb->enter($__internal_39cf4cdacfd3fb96f84c453040423a682bc490a6763c8e6612dc781e587327fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_39cf4cdacfd3fb96f84c453040423a682bc490a6763c8e6612dc781e587327fb->leave($__internal_39cf4cdacfd3fb96f84c453040423a682bc490a6763c8e6612dc781e587327fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e93bc4aae4f3d9df1a06beb41cf5f0b237d7980d67b49dd4ca714cda0f6ed69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e93bc4aae4f3d9df1a06beb41cf5f0b237d7980d67b49dd4ca714cda0f6ed69->enter($__internal_3e93bc4aae4f3d9df1a06beb41cf5f0b237d7980d67b49dd4ca714cda0f6ed69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e93bc4aae4f3d9df1a06beb41cf5f0b237d7980d67b49dd4ca714cda0f6ed69->leave($__internal_3e93bc4aae4f3d9df1a06beb41cf5f0b237d7980d67b49dd4ca714cda0f6ed69_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9597e0d39c0a302bc425508aaa11dea1e156f4a2d2cfd0f622ef7c8a077a7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9597e0d39c0a302bc425508aaa11dea1e156f4a2d2cfd0f622ef7c8a077a7bc->enter($__internal_b9597e0d39c0a302bc425508aaa11dea1e156f4a2d2cfd0f622ef7c8a077a7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b9597e0d39c0a302bc425508aaa11dea1e156f4a2d2cfd0f622ef7c8a077a7bc->leave($__internal_b9597e0d39c0a302bc425508aaa11dea1e156f4a2d2cfd0f622ef7c8a077a7bc_prof);

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
