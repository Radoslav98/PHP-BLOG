<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e834c0ade1ddd7ae65597f03a2cf8c5f8e0bb2a790cccf725edf6cd472d38336 extends Twig_Template
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
        $__internal_8d71e8f321bc484ede2d628211f1a4ff3f4ed7a54656672f1ae9591ad9e20b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d71e8f321bc484ede2d628211f1a4ff3f4ed7a54656672f1ae9591ad9e20b61->enter($__internal_8d71e8f321bc484ede2d628211f1a4ff3f4ed7a54656672f1ae9591ad9e20b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d71e8f321bc484ede2d628211f1a4ff3f4ed7a54656672f1ae9591ad9e20b61->leave($__internal_8d71e8f321bc484ede2d628211f1a4ff3f4ed7a54656672f1ae9591ad9e20b61_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd4c590f939d8ac7efdde351559c6c70fbb28caa88aa5f8be7601e340974ed31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4c590f939d8ac7efdde351559c6c70fbb28caa88aa5f8be7601e340974ed31->enter($__internal_fd4c590f939d8ac7efdde351559c6c70fbb28caa88aa5f8be7601e340974ed31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd4c590f939d8ac7efdde351559c6c70fbb28caa88aa5f8be7601e340974ed31->leave($__internal_fd4c590f939d8ac7efdde351559c6c70fbb28caa88aa5f8be7601e340974ed31_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f13b4c990e1e79fb156ac8b101db5568baee8ad72fc10e5bd5919ef498da2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f13b4c990e1e79fb156ac8b101db5568baee8ad72fc10e5bd5919ef498da2b2->enter($__internal_6f13b4c990e1e79fb156ac8b101db5568baee8ad72fc10e5bd5919ef498da2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f13b4c990e1e79fb156ac8b101db5568baee8ad72fc10e5bd5919ef498da2b2->leave($__internal_6f13b4c990e1e79fb156ac8b101db5568baee8ad72fc10e5bd5919ef498da2b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04c023636cf686bc587b7edf769d407cd88a8aab4d1cb41ba063779c0bf7b4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c023636cf686bc587b7edf769d407cd88a8aab4d1cb41ba063779c0bf7b4bf->enter($__internal_04c023636cf686bc587b7edf769d407cd88a8aab4d1cb41ba063779c0bf7b4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_04c023636cf686bc587b7edf769d407cd88a8aab4d1cb41ba063779c0bf7b4bf->leave($__internal_04c023636cf686bc587b7edf769d407cd88a8aab4d1cb41ba063779c0bf7b4bf_prof);

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
