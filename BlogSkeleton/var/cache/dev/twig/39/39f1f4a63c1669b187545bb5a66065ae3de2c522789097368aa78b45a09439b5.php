<?php

/* user/profile.html.twig */
class __TwigTemplate_ca3c117598ce7735a30cd34c992751083d3dec54284c6923af3343f1ac9835d8 extends Twig_Template
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
        $__internal_9310ed95d6ec0f368d9170f3df1cc5572517e2bd78e3b3c8f771c1c5fee33b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9310ed95d6ec0f368d9170f3df1cc5572517e2bd78e3b3c8f771c1c5fee33b96->enter($__internal_9310ed95d6ec0f368d9170f3df1cc5572517e2bd78e3b3c8f771c1c5fee33b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9310ed95d6ec0f368d9170f3df1cc5572517e2bd78e3b3c8f771c1c5fee33b96->leave($__internal_9310ed95d6ec0f368d9170f3df1cc5572517e2bd78e3b3c8f771c1c5fee33b96_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e8793725f571f2ff0ffb61cd7155cac96c7e7e9cb074fd9e48b010d5b777e5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8793725f571f2ff0ffb61cd7155cac96c7e7e9cb074fd9e48b010d5b777e5a3->enter($__internal_e8793725f571f2ff0ffb61cd7155cac96c7e7e9cb074fd9e48b010d5b777e5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_e8793725f571f2ff0ffb61cd7155cac96c7e7e9cb074fd9e48b010d5b777e5a3->leave($__internal_e8793725f571f2ff0ffb61cd7155cac96c7e7e9cb074fd9e48b010d5b777e5a3_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_758646c46a46eef670fbcdc2c83778b4809c96926fd5e1bd17dfb33956dc6a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758646c46a46eef670fbcdc2c83778b4809c96926fd5e1bd17dfb33956dc6a40->enter($__internal_758646c46a46eef670fbcdc2c83778b4809c96926fd5e1bd17dfb33956dc6a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_758646c46a46eef670fbcdc2c83778b4809c96926fd5e1bd17dfb33956dc6a40->leave($__internal_758646c46a46eef670fbcdc2c83778b4809c96926fd5e1bd17dfb33956dc6a40_prof);

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
