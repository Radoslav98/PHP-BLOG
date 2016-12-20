<?php

/* security/login.html.twig */
class __TwigTemplate_0ea6bad2897037e932ec30a1c608c639b96cf8cd147f836e6e8dcb3152d3ced3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_0aa7398f20d4a501f3997032ef3035187e70f30c5b4cf1b1ff1f2020bbb4bc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa7398f20d4a501f3997032ef3035187e70f30c5b4cf1b1ff1f2020bbb4bc0e->enter($__internal_0aa7398f20d4a501f3997032ef3035187e70f30c5b4cf1b1ff1f2020bbb4bc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aa7398f20d4a501f3997032ef3035187e70f30c5b4cf1b1ff1f2020bbb4bc0e->leave($__internal_0aa7398f20d4a501f3997032ef3035187e70f30c5b4cf1b1ff1f2020bbb4bc0e_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_46ea9f6bb8770ca3f044181ad0b97c7fedda194ea17d472293a33c2bed862fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ea9f6bb8770ca3f044181ad0b97c7fedda194ea17d472293a33c2bed862fdc->enter($__internal_46ea9f6bb8770ca3f044181ad0b97c7fedda194ea17d472293a33c2bed862fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_46ea9f6bb8770ca3f044181ad0b97c7fedda194ea17d472293a33c2bed862fdc->leave($__internal_46ea9f6bb8770ca3f044181ad0b97c7fedda194ea17d472293a33c2bed862fdc_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_9cccd0a9d4c35a5d19c33f79cd4b1397a586a42f75801bd485003d477af71489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cccd0a9d4c35a5d19c33f79cd4b1397a586a42f75801bd485003d477af71489->enter($__internal_9cccd0a9d4c35a5d19c33f79cd4b1397a586a42f75801bd485003d477af71489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_9cccd0a9d4c35a5d19c33f79cd4b1397a586a42f75801bd485003d477af71489->leave($__internal_9cccd0a9d4c35a5d19c33f79cd4b1397a586a42f75801bd485003d477af71489_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
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
