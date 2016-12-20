<?php

/* user/register.html.twig */
class __TwigTemplate_1edf6be2654e527d49940580c06bced962c1ea507687fcbf639b9d032c0c6b8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
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
        $__internal_be6dfc22a244c9d3c2eb79fb47f9d60b5c71e00c5bf4737ca5b19fd21f7fdfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6dfc22a244c9d3c2eb79fb47f9d60b5c71e00c5bf4737ca5b19fd21f7fdfcd->enter($__internal_be6dfc22a244c9d3c2eb79fb47f9d60b5c71e00c5bf4737ca5b19fd21f7fdfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be6dfc22a244c9d3c2eb79fb47f9d60b5c71e00c5bf4737ca5b19fd21f7fdfcd->leave($__internal_be6dfc22a244c9d3c2eb79fb47f9d60b5c71e00c5bf4737ca5b19fd21f7fdfcd_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_401d71f13ebefe7afbae6ba166e186428e5aa3fc7a70223be04514e5c2750de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401d71f13ebefe7afbae6ba166e186428e5aa3fc7a70223be04514e5c2750de7->enter($__internal_401d71f13ebefe7afbae6ba166e186428e5aa3fc7a70223be04514e5c2750de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "register";
        
        $__internal_401d71f13ebefe7afbae6ba166e186428e5aa3fc7a70223be04514e5c2750de7->leave($__internal_401d71f13ebefe7afbae6ba166e186428e5aa3fc7a70223be04514e5c2750de7_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_3ce6efae1bfd0f2b5d5fdd66135ab3575890aa89205bfaa67f0fb158c4c735c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce6efae1bfd0f2b5d5fdd66135ab3575890aa89205bfaa67f0fb158c4c735c7->enter($__internal_3ce6efae1bfd0f2b5d5fdd66135ab3575890aa89205bfaa67f0fb158c4c735c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                        <div class=\"col-sm-4 \">
                            <input class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"user[email]\" required type=\"email\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Full Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Full Name\" name=\"user[fullName]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user[password][first]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Confirm Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user[password][second]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        </div>
                    </div>

                    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_3ce6efae1bfd0f2b5d5fdd66135ab3575890aa89205bfaa67f0fb158c4c735c7->leave($__internal_3ce6efae1bfd0f2b5d5fdd66135ab3575890aa89205bfaa67f0fb158c4c735c7_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 42,  89 => 37,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'register' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('user_register') }}\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                        <div class=\"col-sm-4 \">
                            <input class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"user[email]\" required type=\"email\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Full Name</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Full Name\" name=\"user[fullName]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user[password][first]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Confirm Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user[password][second]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('blog_index') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        </div>
                    </div>

                    {{  form_row(form._token) }}
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
