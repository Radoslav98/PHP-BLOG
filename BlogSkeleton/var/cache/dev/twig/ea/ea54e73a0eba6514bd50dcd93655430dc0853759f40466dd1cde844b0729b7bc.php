<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b1227f9026c3b63c69ed90edc42f9625b713724df6842f31cdd887fb8607c104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de538cabf82ded5301c82eb87bcfe582c61cd441c3e7ab4263489b0510d2170d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de538cabf82ded5301c82eb87bcfe582c61cd441c3e7ab4263489b0510d2170d->enter($__internal_de538cabf82ded5301c82eb87bcfe582c61cd441c3e7ab4263489b0510d2170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_de538cabf82ded5301c82eb87bcfe582c61cd441c3e7ab4263489b0510d2170d->leave($__internal_de538cabf82ded5301c82eb87bcfe582c61cd441c3e7ab4263489b0510d2170d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
