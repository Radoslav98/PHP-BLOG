<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08ef1902fba3b43dc558cd306dfed7dd8a6343bd5cf75bcab0c7c3de5356b056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dfeef7afd574668f5b62f403348dc9d6e4abc79b663e3ad96b8ffc43be476c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfeef7afd574668f5b62f403348dc9d6e4abc79b663e3ad96b8ffc43be476c4->enter($__internal_7dfeef7afd574668f5b62f403348dc9d6e4abc79b663e3ad96b8ffc43be476c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dfeef7afd574668f5b62f403348dc9d6e4abc79b663e3ad96b8ffc43be476c4->leave($__internal_7dfeef7afd574668f5b62f403348dc9d6e4abc79b663e3ad96b8ffc43be476c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7dbd05a3fb19880b9aedfd73bdef608f17b45f57f04b3c3a1e0eca5503bebdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbd05a3fb19880b9aedfd73bdef608f17b45f57f04b3c3a1e0eca5503bebdff->enter($__internal_7dbd05a3fb19880b9aedfd73bdef608f17b45f57f04b3c3a1e0eca5503bebdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7dbd05a3fb19880b9aedfd73bdef608f17b45f57f04b3c3a1e0eca5503bebdff->leave($__internal_7dbd05a3fb19880b9aedfd73bdef608f17b45f57f04b3c3a1e0eca5503bebdff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cef1a17b3e139b3dd65284fff611dea3ba3a1be96888da99b94640601029ea17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef1a17b3e139b3dd65284fff611dea3ba3a1be96888da99b94640601029ea17->enter($__internal_cef1a17b3e139b3dd65284fff611dea3ba3a1be96888da99b94640601029ea17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cef1a17b3e139b3dd65284fff611dea3ba3a1be96888da99b94640601029ea17->leave($__internal_cef1a17b3e139b3dd65284fff611dea3ba3a1be96888da99b94640601029ea17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6f013dba72980d2cfa108884ee12768aa8f7c53a804a84d73af0296db6ac14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f013dba72980d2cfa108884ee12768aa8f7c53a804a84d73af0296db6ac14f->enter($__internal_e6f013dba72980d2cfa108884ee12768aa8f7c53a804a84d73af0296db6ac14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6f013dba72980d2cfa108884ee12768aa8f7c53a804a84d73af0296db6ac14f->leave($__internal_e6f013dba72980d2cfa108884ee12768aa8f7c53a804a84d73af0296db6ac14f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
