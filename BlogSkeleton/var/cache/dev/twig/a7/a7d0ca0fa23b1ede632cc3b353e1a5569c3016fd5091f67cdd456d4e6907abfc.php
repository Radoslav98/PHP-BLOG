<?php

/* user/profile.html.twig */
class __TwigTemplate_4eba0c585dc6f901be8deb2cdd4f03fb3ad6e7e61df9480922810df551a7ca78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_830e14104d719dad840ca2b77830b35b8fde23ab0653811b3573076374c07b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830e14104d719dad840ca2b77830b35b8fde23ab0653811b3573076374c07b67->enter($__internal_830e14104d719dad840ca2b77830b35b8fde23ab0653811b3573076374c07b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_830e14104d719dad840ca2b77830b35b8fde23ab0653811b3573076374c07b67->leave($__internal_830e14104d719dad840ca2b77830b35b8fde23ab0653811b3573076374c07b67_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_16a2bed7c4b70b3af938b9bb440fbadde50427d31004ac26c44d5506aaa4e5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a2bed7c4b70b3af938b9bb440fbadde50427d31004ac26c44d5506aaa4e5fc->enter($__internal_16a2bed7c4b70b3af938b9bb440fbadde50427d31004ac26c44d5506aaa4e5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_16a2bed7c4b70b3af938b9bb440fbadde50427d31004ac26c44d5506aaa4e5fc->leave($__internal_16a2bed7c4b70b3af938b9bb440fbadde50427d31004ac26c44d5506aaa4e5fc_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_13605cbe26825e195f702e6325fd5adaaa73ec303ba517bfe25d417e2b798685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13605cbe26825e195f702e6325fd5adaaa73ec303ba517bfe25d417e2b798685->enter($__internal_13605cbe26825e195f702e6325fd5adaaa73ec303ba517bfe25d417e2b798685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
";
        
        $__internal_13605cbe26825e195f702e6325fd5adaaa73ec303ba517bfe25d417e2b798685->leave($__internal_13605cbe26825e195f702e6325fd5adaaa73ec303ba517bfe25d417e2b798685_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.email }}
        <br>
        {{ user.fullName }}
    </div>
{% endblock %}
";
    }
}
