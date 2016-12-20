<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8f531ba88faa3405d385ffff50a922d64d197293878f31453f530a72a6ca7fcd extends Twig_Template
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
        $__internal_e209dfb7d3f34f6f47a7c80023b6ab4ffc594bb0678cd1eab655eeb981106999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e209dfb7d3f34f6f47a7c80023b6ab4ffc594bb0678cd1eab655eeb981106999->enter($__internal_e209dfb7d3f34f6f47a7c80023b6ab4ffc594bb0678cd1eab655eeb981106999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e209dfb7d3f34f6f47a7c80023b6ab4ffc594bb0678cd1eab655eeb981106999->leave($__internal_e209dfb7d3f34f6f47a7c80023b6ab4ffc594bb0678cd1eab655eeb981106999_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
