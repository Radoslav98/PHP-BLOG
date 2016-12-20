<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a39442505bad83901b5e752ea4b38af3dc24bf350019d6436d4e12dad1cd9966 extends Twig_Template
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
        $__internal_39ce39cc63e699836ec5e55c522b1bb2dae4efb969ef0df5f62dac390a82b2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ce39cc63e699836ec5e55c522b1bb2dae4efb969ef0df5f62dac390a82b2ac->enter($__internal_39ce39cc63e699836ec5e55c522b1bb2dae4efb969ef0df5f62dac390a82b2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_39ce39cc63e699836ec5e55c522b1bb2dae4efb969ef0df5f62dac390a82b2ac->leave($__internal_39ce39cc63e699836ec5e55c522b1bb2dae4efb969ef0df5f62dac390a82b2ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
