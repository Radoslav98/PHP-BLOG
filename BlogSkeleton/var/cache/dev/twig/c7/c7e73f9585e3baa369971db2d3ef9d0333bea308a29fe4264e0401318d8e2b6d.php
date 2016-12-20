<?php

/* security/login.html.twig */
class __TwigTemplate_a6534d9d5ee8c4f6cc153f3f036931e3541fffa1d13c44c61c0cfa82c240f55b extends Twig_Template
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
        $__internal_72a3b91a50a94f0cf40fd61fd199a5c38db46aa6acfa3960c60ad6b0f4a810e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a3b91a50a94f0cf40fd61fd199a5c38db46aa6acfa3960c60ad6b0f4a810e4->enter($__internal_72a3b91a50a94f0cf40fd61fd199a5c38db46aa6acfa3960c60ad6b0f4a810e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a3b91a50a94f0cf40fd61fd199a5c38db46aa6acfa3960c60ad6b0f4a810e4->leave($__internal_72a3b91a50a94f0cf40fd61fd199a5c38db46aa6acfa3960c60ad6b0f4a810e4_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_71fb1862fba6b5cafd5987ae1a48dce08a8ff40484a7dfb53f11beadf037ef5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fb1862fba6b5cafd5987ae1a48dce08a8ff40484a7dfb53f11beadf037ef5a->enter($__internal_71fb1862fba6b5cafd5987ae1a48dce08a8ff40484a7dfb53f11beadf037ef5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_71fb1862fba6b5cafd5987ae1a48dce08a8ff40484a7dfb53f11beadf037ef5a->leave($__internal_71fb1862fba6b5cafd5987ae1a48dce08a8ff40484a7dfb53f11beadf037ef5a_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c3a1eb21e5854a3e0c1c01bbba9b84dfc757c6f28b095f925c64fd82c68fd2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a1eb21e5854a3e0c1c01bbba9b84dfc757c6f28b095f925c64fd82c68fd2e0->enter($__internal_c3a1eb21e5854a3e0c1c01bbba9b84dfc757c6f28b095f925c64fd82c68fd2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_c3a1eb21e5854a3e0c1c01bbba9b84dfc757c6f28b095f925c64fd82c68fd2e0->leave($__internal_c3a1eb21e5854a3e0c1c01bbba9b84dfc757c6f28b095f925c64fd82c68fd2e0_prof);

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
