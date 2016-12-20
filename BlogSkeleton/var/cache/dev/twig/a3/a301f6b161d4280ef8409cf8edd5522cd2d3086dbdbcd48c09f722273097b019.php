<?php

/* :user:profile.html.twig */
class __TwigTemplate_28d23398bbc5c687a2b12cae9e128e49136f34585d0826011daabbb68978371f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:profile.html.twig", 1);
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
        $__internal_56086e8cda64ed58ea03a6e87273e742f4cd1ce7e44fd043f551b5b66822fcaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56086e8cda64ed58ea03a6e87273e742f4cd1ce7e44fd043f551b5b66822fcaf->enter($__internal_56086e8cda64ed58ea03a6e87273e742f4cd1ce7e44fd043f551b5b66822fcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56086e8cda64ed58ea03a6e87273e742f4cd1ce7e44fd043f551b5b66822fcaf->leave($__internal_56086e8cda64ed58ea03a6e87273e742f4cd1ce7e44fd043f551b5b66822fcaf_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_85726a819f03f78da4297cab4e7a3d83c682bdd1e26b2954007258cf8c76c604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85726a819f03f78da4297cab4e7a3d83c682bdd1e26b2954007258cf8c76c604->enter($__internal_85726a819f03f78da4297cab4e7a3d83c682bdd1e26b2954007258cf8c76c604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_85726a819f03f78da4297cab4e7a3d83c682bdd1e26b2954007258cf8c76c604->leave($__internal_85726a819f03f78da4297cab4e7a3d83c682bdd1e26b2954007258cf8c76c604_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_944d87780815c73159095486eb4e1b0390b60353fe3f02103f5cc9af51d0bdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944d87780815c73159095486eb4e1b0390b60353fe3f02103f5cc9af51d0bdfe->enter($__internal_944d87780815c73159095486eb4e1b0390b60353fe3f02103f5cc9af51d0bdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_944d87780815c73159095486eb4e1b0390b60353fe3f02103f5cc9af51d0bdfe->leave($__internal_944d87780815c73159095486eb4e1b0390b60353fe3f02103f5cc9af51d0bdfe_prof);

    }

    public function getTemplateName()
    {
        return ":user:profile.html.twig";
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
