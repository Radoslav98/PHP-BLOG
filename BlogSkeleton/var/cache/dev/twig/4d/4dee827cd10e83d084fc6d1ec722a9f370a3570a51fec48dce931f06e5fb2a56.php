<?php

/* :user:register.html.twig */
class __TwigTemplate_4466bc588f703deb0120080246ee8179c0051ad4bed306cc66f48c70cd22f539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:register.html.twig", 1);
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
        $__internal_eb333b0462efe9a0110a1781696ba2afcdb0d9b618f9a46c894a6c0c510c3039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb333b0462efe9a0110a1781696ba2afcdb0d9b618f9a46c894a6c0c510c3039->enter($__internal_eb333b0462efe9a0110a1781696ba2afcdb0d9b618f9a46c894a6c0c510c3039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb333b0462efe9a0110a1781696ba2afcdb0d9b618f9a46c894a6c0c510c3039->leave($__internal_eb333b0462efe9a0110a1781696ba2afcdb0d9b618f9a46c894a6c0c510c3039_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_48dc53261b2e173df98b96ecfdd39f6475f744bde9c97f3290db205e518a7ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dc53261b2e173df98b96ecfdd39f6475f744bde9c97f3290db205e518a7ef0->enter($__internal_48dc53261b2e173df98b96ecfdd39f6475f744bde9c97f3290db205e518a7ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "register";
        
        $__internal_48dc53261b2e173df98b96ecfdd39f6475f744bde9c97f3290db205e518a7ef0->leave($__internal_48dc53261b2e173df98b96ecfdd39f6475f744bde9c97f3290db205e518a7ef0_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_8fa7368d03f833ee6ebc3ddb6804b058ff4c0a90efe5bb5bc2ae59d3861fbd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa7368d03f833ee6ebc3ddb6804b058ff4c0a90efe5bb5bc2ae59d3861fbd89->enter($__internal_8fa7368d03f833ee6ebc3ddb6804b058ff4c0a90efe5bb5bc2ae59d3861fbd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_8fa7368d03f833ee6ebc3ddb6804b058ff4c0a90efe5bb5bc2ae59d3861fbd89->leave($__internal_8fa7368d03f833ee6ebc3ddb6804b058ff4c0a90efe5bb5bc2ae59d3861fbd89_prof);

    }

    public function getTemplateName()
    {
        return ":user:register.html.twig";
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
