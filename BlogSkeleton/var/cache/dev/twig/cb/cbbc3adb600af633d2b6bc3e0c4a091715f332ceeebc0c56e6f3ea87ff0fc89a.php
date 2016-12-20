<?php

/* :security:login.html.twig */
class __TwigTemplate_c5c066ecb37abfe11fa771989915cf12549379b9c507ae6bfe15416d7571be86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 1);
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
        $__internal_788da40b84de61fe27cdad2fc61fed2e1b8b3df07ffc7c4d7d6d5e885d4af672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788da40b84de61fe27cdad2fc61fed2e1b8b3df07ffc7c4d7d6d5e885d4af672->enter($__internal_788da40b84de61fe27cdad2fc61fed2e1b8b3df07ffc7c4d7d6d5e885d4af672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_788da40b84de61fe27cdad2fc61fed2e1b8b3df07ffc7c4d7d6d5e885d4af672->leave($__internal_788da40b84de61fe27cdad2fc61fed2e1b8b3df07ffc7c4d7d6d5e885d4af672_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_86323767f49f415849ed72602f923817a5267b2871dfa2c5029a251613f1e63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86323767f49f415849ed72602f923817a5267b2871dfa2c5029a251613f1e63b->enter($__internal_86323767f49f415849ed72602f923817a5267b2871dfa2c5029a251613f1e63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_86323767f49f415849ed72602f923817a5267b2871dfa2c5029a251613f1e63b->leave($__internal_86323767f49f415849ed72602f923817a5267b2871dfa2c5029a251613f1e63b_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_0dab3221bec1933e0e76a4851d8ba7465a36e6b5d765ee841f081994287e5ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dab3221bec1933e0e76a4851d8ba7465a36e6b5d765ee841f081994287e5ba6->enter($__internal_0dab3221bec1933e0e76a4851d8ba7465a36e6b5d765ee841f081994287e5ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"email\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"_username\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"password\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\">
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_0dab3221bec1933e0e76a4851d8ba7465a36e6b5d765ee841f081994287e5ba6->leave($__internal_0dab3221bec1933e0e76a4851d8ba7465a36e6b5d765ee841f081994287e5ba6_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  76 => 24,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'login' %}

{% block main %}

    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('security_login') }}\" method=\"post\">
                <fieldset>
                    <legend>Login</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"email\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"_username\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"password\">Password</label>
                        <div class=\"col-sm-4\">
                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\">
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('blog_index') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
