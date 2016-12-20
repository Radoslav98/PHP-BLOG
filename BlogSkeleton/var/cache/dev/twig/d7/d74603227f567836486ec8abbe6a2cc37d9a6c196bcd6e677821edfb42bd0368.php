<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d01277d77ebcefae082b04cc36eee54525f99fbc180b813d88db63064072a50d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_22d8314580905770055b2b5a4065441eff6290dc3f60f8a79bfc0a610180f2d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d8314580905770055b2b5a4065441eff6290dc3f60f8a79bfc0a610180f2d4->enter($__internal_22d8314580905770055b2b5a4065441eff6290dc3f60f8a79bfc0a610180f2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22d8314580905770055b2b5a4065441eff6290dc3f60f8a79bfc0a610180f2d4->leave($__internal_22d8314580905770055b2b5a4065441eff6290dc3f60f8a79bfc0a610180f2d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8a26df3c1e1b50ea39c722bbdd9ba74dbba87642930e33b041ad54058c19456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a26df3c1e1b50ea39c722bbdd9ba74dbba87642930e33b041ad54058c19456->enter($__internal_e8a26df3c1e1b50ea39c722bbdd9ba74dbba87642930e33b041ad54058c19456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e8a26df3c1e1b50ea39c722bbdd9ba74dbba87642930e33b041ad54058c19456->leave($__internal_e8a26df3c1e1b50ea39c722bbdd9ba74dbba87642930e33b041ad54058c19456_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7f3ae8567236c560d2f657b458b05ed8469acc2257ffc2323ef76b2266c6e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f3ae8567236c560d2f657b458b05ed8469acc2257ffc2323ef76b2266c6e3b->enter($__internal_a7f3ae8567236c560d2f657b458b05ed8469acc2257ffc2323ef76b2266c6e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a7f3ae8567236c560d2f657b458b05ed8469acc2257ffc2323ef76b2266c6e3b->leave($__internal_a7f3ae8567236c560d2f657b458b05ed8469acc2257ffc2323ef76b2266c6e3b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf2af629850f45bf3eaf8385ac373d8a4b8b54de4e70bebf7217fd1c91f2caff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2af629850f45bf3eaf8385ac373d8a4b8b54de4e70bebf7217fd1c91f2caff->enter($__internal_bf2af629850f45bf3eaf8385ac373d8a4b8b54de4e70bebf7217fd1c91f2caff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bf2af629850f45bf3eaf8385ac373d8a4b8b54de4e70bebf7217fd1c91f2caff->leave($__internal_bf2af629850f45bf3eaf8385ac373d8a4b8b54de4e70bebf7217fd1c91f2caff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
