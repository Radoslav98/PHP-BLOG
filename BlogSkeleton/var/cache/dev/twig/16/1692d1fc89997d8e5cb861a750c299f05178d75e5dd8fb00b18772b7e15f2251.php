<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_952e2519775a9c8bdb7b31b393986fafd6131ce5b8f80826ea5618cf0eded3ef extends Twig_Template
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
        $__internal_624c093129a3b913cdd499a3de1f9b4389c59113d5bb53beec0fe9370d558535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624c093129a3b913cdd499a3de1f9b4389c59113d5bb53beec0fe9370d558535->enter($__internal_624c093129a3b913cdd499a3de1f9b4389c59113d5bb53beec0fe9370d558535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_624c093129a3b913cdd499a3de1f9b4389c59113d5bb53beec0fe9370d558535->leave($__internal_624c093129a3b913cdd499a3de1f9b4389c59113d5bb53beec0fe9370d558535_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
";
    }
}
