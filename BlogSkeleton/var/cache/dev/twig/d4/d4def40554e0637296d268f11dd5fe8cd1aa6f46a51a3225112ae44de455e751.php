<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0f437092103fdea9749781fb4f3df50eb93e1657815648a85ae18da3758c059d extends Twig_Template
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
        $__internal_c132560b2f80b303529d94bb69cfd190f33de71f52cb6cc969ed47db99472ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c132560b2f80b303529d94bb69cfd190f33de71f52cb6cc969ed47db99472ff0->enter($__internal_c132560b2f80b303529d94bb69cfd190f33de71f52cb6cc969ed47db99472ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_c132560b2f80b303529d94bb69cfd190f33de71f52cb6cc969ed47db99472ff0->leave($__internal_c132560b2f80b303529d94bb69cfd190f33de71f52cb6cc969ed47db99472ff0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
