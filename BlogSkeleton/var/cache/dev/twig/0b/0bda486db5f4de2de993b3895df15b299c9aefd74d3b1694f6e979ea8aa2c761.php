<?php

/* user/profile.html.twig */
class __TwigTemplate_f2db0eedccd7efef0d1e361511d897f79e4fdb3bbe39dee51e38dfcd617bc3fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7fea6cdb050dc0a9e9c86f2504a0b11b54ead468b787667e059fb02e53286a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fea6cdb050dc0a9e9c86f2504a0b11b54ead468b787667e059fb02e53286a9->enter($__internal_a7fea6cdb050dc0a9e9c86f2504a0b11b54ead468b787667e059fb02e53286a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7fea6cdb050dc0a9e9c86f2504a0b11b54ead468b787667e059fb02e53286a9->leave($__internal_a7fea6cdb050dc0a9e9c86f2504a0b11b54ead468b787667e059fb02e53286a9_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_77cfdc8fe80b4ddf9710506309bac6a74afb0dbfb416f8dcf6c4adb8f6474713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cfdc8fe80b4ddf9710506309bac6a74afb0dbfb416f8dcf6c4adb8f6474713->enter($__internal_77cfdc8fe80b4ddf9710506309bac6a74afb0dbfb416f8dcf6c4adb8f6474713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_77cfdc8fe80b4ddf9710506309bac6a74afb0dbfb416f8dcf6c4adb8f6474713->leave($__internal_77cfdc8fe80b4ddf9710506309bac6a74afb0dbfb416f8dcf6c4adb8f6474713_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_4298894b8b24e9100a2891f81945edf3b6b970510bb10d389c6887a76b9aeef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4298894b8b24e9100a2891f81945edf3b6b970510bb10d389c6887a76b9aeef3->enter($__internal_4298894b8b24e9100a2891f81945edf3b6b970510bb10d389c6887a76b9aeef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
";
        
        $__internal_4298894b8b24e9100a2891f81945edf3b6b970510bb10d389c6887a76b9aeef3->leave($__internal_4298894b8b24e9100a2891f81945edf3b6b970510bb10d389c6887a76b9aeef3_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.email }}
        <br>
        {{ user.fullName }}
    </div>
{% endblock %}
";
    }
}
