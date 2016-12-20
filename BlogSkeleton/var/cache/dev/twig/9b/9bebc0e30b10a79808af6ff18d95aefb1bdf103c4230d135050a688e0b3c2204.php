<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4f1e49b35f4c9890684f09e0e12593d03a6537ca06cacebe8c013c4a6b1b6fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_aa12a339d222ebcc61c76b948c6f09c3800c850732a97d9f45fd5f74dd361137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa12a339d222ebcc61c76b948c6f09c3800c850732a97d9f45fd5f74dd361137->enter($__internal_aa12a339d222ebcc61c76b948c6f09c3800c850732a97d9f45fd5f74dd361137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa12a339d222ebcc61c76b948c6f09c3800c850732a97d9f45fd5f74dd361137->leave($__internal_aa12a339d222ebcc61c76b948c6f09c3800c850732a97d9f45fd5f74dd361137_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_418d2183ae51071ff39b1735f97ae80614bc1b33f2be3e7c9f3dbe33ebcfcf6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418d2183ae51071ff39b1735f97ae80614bc1b33f2be3e7c9f3dbe33ebcfcf6c->enter($__internal_418d2183ae51071ff39b1735f97ae80614bc1b33f2be3e7c9f3dbe33ebcfcf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_418d2183ae51071ff39b1735f97ae80614bc1b33f2be3e7c9f3dbe33ebcfcf6c->leave($__internal_418d2183ae51071ff39b1735f97ae80614bc1b33f2be3e7c9f3dbe33ebcfcf6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2bbbf01303de78546238b30254b1821c9e1a1dd5206f505042293a1d7bd9847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bbbf01303de78546238b30254b1821c9e1a1dd5206f505042293a1d7bd9847->enter($__internal_b2bbbf01303de78546238b30254b1821c9e1a1dd5206f505042293a1d7bd9847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2bbbf01303de78546238b30254b1821c9e1a1dd5206f505042293a1d7bd9847->leave($__internal_b2bbbf01303de78546238b30254b1821c9e1a1dd5206f505042293a1d7bd9847_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9a66832a8a5701c09a76db3b90e30ab534cd30441612a2ce1d5f3afe0e1aa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a66832a8a5701c09a76db3b90e30ab534cd30441612a2ce1d5f3afe0e1aa77->enter($__internal_d9a66832a8a5701c09a76db3b90e30ab534cd30441612a2ce1d5f3afe0e1aa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d9a66832a8a5701c09a76db3b90e30ab534cd30441612a2ce1d5f3afe0e1aa77->leave($__internal_d9a66832a8a5701c09a76db3b90e30ab534cd30441612a2ce1d5f3afe0e1aa77_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
