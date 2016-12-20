<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_01ac2961c321bba8d6cef1d03eb7bc8306ae3b4e3dc2f393da6e7a0120fd8670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_137d21eb2e570e113782ca766d2845d97218d487bea4990321a5acf08762c140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137d21eb2e570e113782ca766d2845d97218d487bea4990321a5acf08762c140->enter($__internal_137d21eb2e570e113782ca766d2845d97218d487bea4990321a5acf08762c140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_137d21eb2e570e113782ca766d2845d97218d487bea4990321a5acf08762c140->leave($__internal_137d21eb2e570e113782ca766d2845d97218d487bea4990321a5acf08762c140_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b7087d2a01b7cf3a7db21d614b3bf0cff075ea6d6cac8d78d2a762b182524ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7087d2a01b7cf3a7db21d614b3bf0cff075ea6d6cac8d78d2a762b182524ae->enter($__internal_5b7087d2a01b7cf3a7db21d614b3bf0cff075ea6d6cac8d78d2a762b182524ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5b7087d2a01b7cf3a7db21d614b3bf0cff075ea6d6cac8d78d2a762b182524ae->leave($__internal_5b7087d2a01b7cf3a7db21d614b3bf0cff075ea6d6cac8d78d2a762b182524ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db9af90a722df53d2821fb5542fa8ffeded5697e46d02fcc2eab553538e6d63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9af90a722df53d2821fb5542fa8ffeded5697e46d02fcc2eab553538e6d63a->enter($__internal_db9af90a722df53d2821fb5542fa8ffeded5697e46d02fcc2eab553538e6d63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db9af90a722df53d2821fb5542fa8ffeded5697e46d02fcc2eab553538e6d63a->leave($__internal_db9af90a722df53d2821fb5542fa8ffeded5697e46d02fcc2eab553538e6d63a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
