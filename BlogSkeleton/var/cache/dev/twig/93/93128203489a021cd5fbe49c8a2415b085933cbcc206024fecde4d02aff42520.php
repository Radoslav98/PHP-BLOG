<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4d5d6d788674ee3ea1a5c55afd2268fa0e2f31591025478f2970efe1f2e1bb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_579dd9d717e6719728382ed21adab42c433f4975a5c7234083d62c1d31e8c8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579dd9d717e6719728382ed21adab42c433f4975a5c7234083d62c1d31e8c8b1->enter($__internal_579dd9d717e6719728382ed21adab42c433f4975a5c7234083d62c1d31e8c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_579dd9d717e6719728382ed21adab42c433f4975a5c7234083d62c1d31e8c8b1->leave($__internal_579dd9d717e6719728382ed21adab42c433f4975a5c7234083d62c1d31e8c8b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36e78b32082b2abaf0034fde0d9e7d7e957beffe96707cd261e8809f9ae60777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e78b32082b2abaf0034fde0d9e7d7e957beffe96707cd261e8809f9ae60777->enter($__internal_36e78b32082b2abaf0034fde0d9e7d7e957beffe96707cd261e8809f9ae60777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_36e78b32082b2abaf0034fde0d9e7d7e957beffe96707cd261e8809f9ae60777->leave($__internal_36e78b32082b2abaf0034fde0d9e7d7e957beffe96707cd261e8809f9ae60777_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd0a4d479c04ca424a3eb7c3346c2f5d87b4c3dfa9b39a381d166d6c8a4f6b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0a4d479c04ca424a3eb7c3346c2f5d87b4c3dfa9b39a381d166d6c8a4f6b71->enter($__internal_dd0a4d479c04ca424a3eb7c3346c2f5d87b4c3dfa9b39a381d166d6c8a4f6b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dd0a4d479c04ca424a3eb7c3346c2f5d87b4c3dfa9b39a381d166d6c8a4f6b71->leave($__internal_dd0a4d479c04ca424a3eb7c3346c2f5d87b4c3dfa9b39a381d166d6c8a4f6b71_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
