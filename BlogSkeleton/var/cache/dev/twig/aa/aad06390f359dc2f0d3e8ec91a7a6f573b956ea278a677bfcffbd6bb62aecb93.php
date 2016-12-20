<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ff3e48db08e4640ffd50320f4b822f4a2ce7143e32e126a177552b4da851cbb1 extends Twig_Template
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
        $__internal_dfad57635cc787caf7abc71c98e735cabf624e6b1cdbb6b5bfb831ae734491c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfad57635cc787caf7abc71c98e735cabf624e6b1cdbb6b5bfb831ae734491c0->enter($__internal_dfad57635cc787caf7abc71c98e735cabf624e6b1cdbb6b5bfb831ae734491c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dfad57635cc787caf7abc71c98e735cabf624e6b1cdbb6b5bfb831ae734491c0->leave($__internal_dfad57635cc787caf7abc71c98e735cabf624e6b1cdbb6b5bfb831ae734491c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
