<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0c0d13b4229fd366832b53cf90f36e2ff80cc31420bce3fdee78a7412e657943 extends Twig_Template
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
        $__internal_ceb8a7d8b5501a2fe69093ca538dee4f4e789b77a8352cb5deb3bf5183c838e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb8a7d8b5501a2fe69093ca538dee4f4e789b77a8352cb5deb3bf5183c838e3->enter($__internal_ceb8a7d8b5501a2fe69093ca538dee4f4e789b77a8352cb5deb3bf5183c838e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ceb8a7d8b5501a2fe69093ca538dee4f4e789b77a8352cb5deb3bf5183c838e3->leave($__internal_ceb8a7d8b5501a2fe69093ca538dee4f4e789b77a8352cb5deb3bf5183c838e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
