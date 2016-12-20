<?php

/* user/register.html.twig */
class __TwigTemplate_31e4a13e10173ad896e1c308cc99d680c1cafd4bdfb4a51743aeb6465e020004 extends Twig_Template
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
        $__internal_41dab19374b75769dfb54b6001f5bcf2665aa49da9483b662806c917353de544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41dab19374b75769dfb54b6001f5bcf2665aa49da9483b662806c917353de544->enter($__internal_41dab19374b75769dfb54b6001f5bcf2665aa49da9483b662806c917353de544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41dab19374b75769dfb54b6001f5bcf2665aa49da9483b662806c917353de544->leave($__internal_41dab19374b75769dfb54b6001f5bcf2665aa49da9483b662806c917353de544_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2bb7b40194deedd12d70699754d99c72fd125e2bfee1fce4e87176db1ebb878d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb7b40194deedd12d70699754d99c72fd125e2bfee1fce4e87176db1ebb878d->enter($__internal_2bb7b40194deedd12d70699754d99c72fd125e2bfee1fce4e87176db1ebb878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "register";
        
        $__internal_2bb7b40194deedd12d70699754d99c72fd125e2bfee1fce4e87176db1ebb878d->leave($__internal_2bb7b40194deedd12d70699754d99c72fd125e2bfee1fce4e87176db1ebb878d_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_d56640e12f1a81d74f79fbb938a65c1531ebf99c3fcd517ee5d271b8e5f5ef24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56640e12f1a81d74f79fbb938a65c1531ebf99c3fcd517ee5d271b8e5f5ef24->enter($__internal_d56640e12f1a81d74f79fbb938a65c1531ebf99c3fcd517ee5d271b8e5f5ef24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Register</legend>
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
        
        $__internal_d56640e12f1a81d74f79fbb938a65c1531ebf99c3fcd517ee5d271b8e5f5ef24->leave($__internal_d56640e12f1a81d74f79fbb938a65c1531ebf99c3fcd517ee5d271b8e5f5ef24_prof);

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
                    <legend>Register</legend>
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
