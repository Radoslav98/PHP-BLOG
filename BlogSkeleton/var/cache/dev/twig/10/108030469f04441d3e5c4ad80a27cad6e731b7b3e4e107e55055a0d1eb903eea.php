<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1f19a99d89587dc5a11b99185bf05ad090bf95763acdf0f3a134bc4ab067d7a8 extends Twig_Template
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
        $__internal_56ea8053dcbdc7280c4666f8f23a348beda2620cbaceb6c25e9a4df8402e199b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ea8053dcbdc7280c4666f8f23a348beda2620cbaceb6c25e9a4df8402e199b->enter($__internal_56ea8053dcbdc7280c4666f8f23a348beda2620cbaceb6c25e9a4df8402e199b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_56ea8053dcbdc7280c4666f8f23a348beda2620cbaceb6c25e9a4df8402e199b->leave($__internal_56ea8053dcbdc7280c4666f8f23a348beda2620cbaceb6c25e9a4df8402e199b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
