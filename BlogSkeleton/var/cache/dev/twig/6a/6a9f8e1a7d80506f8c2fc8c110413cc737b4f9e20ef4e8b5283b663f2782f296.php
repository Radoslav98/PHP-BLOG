<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_adea7d12eebb5fc95c09b66363c83a6e748f173def472014d78e6da7cb341fba extends Twig_Template
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
        $__internal_70d0b2b8b8c5a84f5edaec601dc79a5a3cbdd9d4b462af4d840d22b153422aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d0b2b8b8c5a84f5edaec601dc79a5a3cbdd9d4b462af4d840d22b153422aee->enter($__internal_70d0b2b8b8c5a84f5edaec601dc79a5a3cbdd9d4b462af4d840d22b153422aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_70d0b2b8b8c5a84f5edaec601dc79a5a3cbdd9d4b462af4d840d22b153422aee->leave($__internal_70d0b2b8b8c5a84f5edaec601dc79a5a3cbdd9d4b462af4d840d22b153422aee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
