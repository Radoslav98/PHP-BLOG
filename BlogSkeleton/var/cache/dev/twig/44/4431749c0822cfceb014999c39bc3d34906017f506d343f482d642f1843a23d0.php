<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_36e82e8392b62e6f578dc82e3224a350cae21b717dd799d6acbdcb044499ed26 extends Twig_Template
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
        $__internal_d46451ab08ceff0efac9970ffcf3453877310854a8b4a7418790e98f13e4151d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46451ab08ceff0efac9970ffcf3453877310854a8b4a7418790e98f13e4151d->enter($__internal_d46451ab08ceff0efac9970ffcf3453877310854a8b4a7418790e98f13e4151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d46451ab08ceff0efac9970ffcf3453877310854a8b4a7418790e98f13e4151d->leave($__internal_d46451ab08ceff0efac9970ffcf3453877310854a8b4a7418790e98f13e4151d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
