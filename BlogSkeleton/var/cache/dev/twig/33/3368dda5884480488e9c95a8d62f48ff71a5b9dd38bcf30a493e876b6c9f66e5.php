<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6c782d9409c96d1fdb0d44da4f9862b044a2b932105fd5a0538106e5e33fcacf extends Twig_Template
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
        $__internal_e639dd6295d61e096fd38294a4d299f65eadca1d040790c21f6ab364db3b0a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e639dd6295d61e096fd38294a4d299f65eadca1d040790c21f6ab364db3b0a43->enter($__internal_e639dd6295d61e096fd38294a4d299f65eadca1d040790c21f6ab364db3b0a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e639dd6295d61e096fd38294a4d299f65eadca1d040790c21f6ab364db3b0a43->leave($__internal_e639dd6295d61e096fd38294a4d299f65eadca1d040790c21f6ab364db3b0a43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
