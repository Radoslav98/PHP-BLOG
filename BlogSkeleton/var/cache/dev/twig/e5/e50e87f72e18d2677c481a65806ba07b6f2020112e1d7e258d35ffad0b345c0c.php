<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4914bbc9c93e46d871abf015d3a53a0ddf35f614d64026f98ce6a3407a522aa3 extends Twig_Template
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
        $__internal_c2e1fee6b6e00dabb48521c997c91f26367288523709539711cf78cbd2d344c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e1fee6b6e00dabb48521c997c91f26367288523709539711cf78cbd2d344c0->enter($__internal_c2e1fee6b6e00dabb48521c997c91f26367288523709539711cf78cbd2d344c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2e1fee6b6e00dabb48521c997c91f26367288523709539711cf78cbd2d344c0->leave($__internal_c2e1fee6b6e00dabb48521c997c91f26367288523709539711cf78cbd2d344c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9a4e08c27ced1564755494dc18ba71de3e1e25cd13d7ba82da9914061bf6bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a4e08c27ced1564755494dc18ba71de3e1e25cd13d7ba82da9914061bf6bb2->enter($__internal_c9a4e08c27ced1564755494dc18ba71de3e1e25cd13d7ba82da9914061bf6bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c9a4e08c27ced1564755494dc18ba71de3e1e25cd13d7ba82da9914061bf6bb2->leave($__internal_c9a4e08c27ced1564755494dc18ba71de3e1e25cd13d7ba82da9914061bf6bb2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_84af3e8640863f898be32699a6a71bd717a839f3b064c5f4bdab42b53a5a31da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84af3e8640863f898be32699a6a71bd717a839f3b064c5f4bdab42b53a5a31da->enter($__internal_84af3e8640863f898be32699a6a71bd717a839f3b064c5f4bdab42b53a5a31da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_84af3e8640863f898be32699a6a71bd717a839f3b064c5f4bdab42b53a5a31da->leave($__internal_84af3e8640863f898be32699a6a71bd717a839f3b064c5f4bdab42b53a5a31da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5e0b5acdb50580f679a255daad8ef713dfca0b7ffbe2eab509ccaa6e53a6ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e0b5acdb50580f679a255daad8ef713dfca0b7ffbe2eab509ccaa6e53a6ab2->enter($__internal_f5e0b5acdb50580f679a255daad8ef713dfca0b7ffbe2eab509ccaa6e53a6ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f5e0b5acdb50580f679a255daad8ef713dfca0b7ffbe2eab509ccaa6e53a6ab2->leave($__internal_f5e0b5acdb50580f679a255daad8ef713dfca0b7ffbe2eab509ccaa6e53a6ab2_prof);

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
