<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_9685a31f9f3d7924aebfc51cb87abdda4c0723db8992c758b8a850ddab8f2b6c extends Twig_Template
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
        $__internal_cbdec7fb885e8b5b11e8bc0f6888ba9a5aa6b9f2fa7e4720e966bf304eb06e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdec7fb885e8b5b11e8bc0f6888ba9a5aa6b9f2fa7e4720e966bf304eb06e7f->enter($__internal_cbdec7fb885e8b5b11e8bc0f6888ba9a5aa6b9f2fa7e4720e966bf304eb06e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cbdec7fb885e8b5b11e8bc0f6888ba9a5aa6b9f2fa7e4720e966bf304eb06e7f->leave($__internal_cbdec7fb885e8b5b11e8bc0f6888ba9a5aa6b9f2fa7e4720e966bf304eb06e7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
";
    }
}
