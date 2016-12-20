<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ab44ec9d88925bcfcef7611df077b113fdbafad4c73e722e5d599dd30160b628 extends Twig_Template
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
        $__internal_a006cdc753944349d3722255fe5f7ba9d448e4f29976339b5a20b975deb58cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a006cdc753944349d3722255fe5f7ba9d448e4f29976339b5a20b975deb58cd8->enter($__internal_a006cdc753944349d3722255fe5f7ba9d448e4f29976339b5a20b975deb58cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a006cdc753944349d3722255fe5f7ba9d448e4f29976339b5a20b975deb58cd8->leave($__internal_a006cdc753944349d3722255fe5f7ba9d448e4f29976339b5a20b975deb58cd8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
