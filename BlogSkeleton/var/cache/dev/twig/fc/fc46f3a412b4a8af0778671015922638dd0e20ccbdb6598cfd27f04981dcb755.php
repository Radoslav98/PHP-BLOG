<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_038657112362e7c305b703fd1648a7389d81a06dc27d690e19f7dcce5650bec6 extends Twig_Template
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
        $__internal_64363e75048682dfdc3bfdd8c212fa09c326fd9aebb9439c84d2616e3dd1a07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64363e75048682dfdc3bfdd8c212fa09c326fd9aebb9439c84d2616e3dd1a07c->enter($__internal_64363e75048682dfdc3bfdd8c212fa09c326fd9aebb9439c84d2616e3dd1a07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64363e75048682dfdc3bfdd8c212fa09c326fd9aebb9439c84d2616e3dd1a07c->leave($__internal_64363e75048682dfdc3bfdd8c212fa09c326fd9aebb9439c84d2616e3dd1a07c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3257b5fbe53fb87bebd846f6e8fe8db278b31c9abf64e578754d89a10e8eac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3257b5fbe53fb87bebd846f6e8fe8db278b31c9abf64e578754d89a10e8eac2->enter($__internal_f3257b5fbe53fb87bebd846f6e8fe8db278b31c9abf64e578754d89a10e8eac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3257b5fbe53fb87bebd846f6e8fe8db278b31c9abf64e578754d89a10e8eac2->leave($__internal_f3257b5fbe53fb87bebd846f6e8fe8db278b31c9abf64e578754d89a10e8eac2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5dae214bae002c6e8ab103a3dfb01f64020735ac3e5e2b2ac7a1594bdacb598e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dae214bae002c6e8ab103a3dfb01f64020735ac3e5e2b2ac7a1594bdacb598e->enter($__internal_5dae214bae002c6e8ab103a3dfb01f64020735ac3e5e2b2ac7a1594bdacb598e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5dae214bae002c6e8ab103a3dfb01f64020735ac3e5e2b2ac7a1594bdacb598e->leave($__internal_5dae214bae002c6e8ab103a3dfb01f64020735ac3e5e2b2ac7a1594bdacb598e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ac4be34cc6a92a7f4fec50570af9bca19aabc962252c141575ce8dabcd69d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac4be34cc6a92a7f4fec50570af9bca19aabc962252c141575ce8dabcd69d79->enter($__internal_9ac4be34cc6a92a7f4fec50570af9bca19aabc962252c141575ce8dabcd69d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ac4be34cc6a92a7f4fec50570af9bca19aabc962252c141575ce8dabcd69d79->leave($__internal_9ac4be34cc6a92a7f4fec50570af9bca19aabc962252c141575ce8dabcd69d79_prof);

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
