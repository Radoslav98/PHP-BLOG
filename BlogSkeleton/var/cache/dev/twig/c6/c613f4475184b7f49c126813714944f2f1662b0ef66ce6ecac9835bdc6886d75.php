<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_49f85ad605623d1071654b47137ad9d9fd4bca68da0e7cd03f8cbbde0c034f9d extends Twig_Template
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
        $__internal_a62e2084e8177b283acd5d123414b3c17cb09dd839d2ccd8c42917708bfd41c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62e2084e8177b283acd5d123414b3c17cb09dd839d2ccd8c42917708bfd41c2->enter($__internal_a62e2084e8177b283acd5d123414b3c17cb09dd839d2ccd8c42917708bfd41c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a62e2084e8177b283acd5d123414b3c17cb09dd839d2ccd8c42917708bfd41c2->leave($__internal_a62e2084e8177b283acd5d123414b3c17cb09dd839d2ccd8c42917708bfd41c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
