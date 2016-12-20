<?php

/* admin/user/delete.html.twig */
class __TwigTemplate_b47a01e371dedb0cc73ed1e777e0ee62c3820e8e71d7ac28831358bed24c8f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/delete.html.twig", 1);
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
        $__internal_7b2575202bb917915d4665ea750717b15ebe60c19a9e7a736f1d2189b62a3361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2575202bb917915d4665ea750717b15ebe60c19a9e7a736f1d2189b62a3361->enter($__internal_7b2575202bb917915d4665ea750717b15ebe60c19a9e7a736f1d2189b62a3361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b2575202bb917915d4665ea750717b15ebe60c19a9e7a736f1d2189b62a3361->leave($__internal_7b2575202bb917915d4665ea750717b15ebe60c19a9e7a736f1d2189b62a3361_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e677086011046f31aedbb0bf653dedd6e5c8412e95173e9da2bce48963b48818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e677086011046f31aedbb0bf653dedd6e5c8412e95173e9da2bce48963b48818->enter($__internal_e677086011046f31aedbb0bf653dedd6e5c8412e95173e9da2bce48963b48818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "register";
        
        $__internal_e677086011046f31aedbb0bf653dedd6e5c8412e95173e9da2bce48963b48818->leave($__internal_e677086011046f31aedbb0bf653dedd6e5c8412e95173e9da2bce48963b48818_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e292228dffc597a6df77f6a85af2d1679455ad50d07ad5975c7b38b1e65cf24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e292228dffc597a6df77f6a85af2d1679455ad50d07ad5975c7b38b1e65cf24b->enter($__internal_e292228dffc597a6df77f6a85af2d1679455ad50d07ad5975c7b38b1e65cf24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Delete user</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                        <div class=\"col-sm-4 \">
                            <input disabled=\"disabled\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"user[email]\" required type=\"email\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Full Name</label>
                        <div class=\"col-sm-4 \">
                            <input disabled=\"disabled\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Full Name\" name=\"user[fullName]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Password</label>
                        <div class=\"col-sm-4\">
                            <input disabled=\"disabled\" type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user[password][first]\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Confirm Password</label>
                        <div class=\"col-sm-4\">
                            <input disabled=\"disabled\" type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user[password][second]\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_all");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                        </div>
                    </div>
                    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_e292228dffc597a6df77f6a85af2d1679455ad50d07ad5975c7b38b1e65cf24b->leave($__internal_e292228dffc597a6df77f6a85af2d1679455ad50d07ad5975c7b38b1e65cf24b_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  95 => 37,  75 => 20,  66 => 14,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'register' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('admin_user_delete', {id:user.id}) }}\" method=\"post\">
                <fieldset>
                    <legend>Delete user</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                        <div class=\"col-sm-4 \">
                            <input disabled=\"disabled\" value=\"{{ user.email }}\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"user[email]\" required type=\"email\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Full Name</label>
                        <div class=\"col-sm-4 \">
                            <input disabled=\"disabled\" value=\"{{ user.fullName }}\" type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Full Name\" name=\"user[fullName]\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Password</label>
                        <div class=\"col-sm-4\">
                            <input disabled=\"disabled\" type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user[password][first]\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Confirm Password</label>
                        <div class=\"col-sm-4\">
                            <input disabled=\"disabled\" type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user[password][second]\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('admin_users_all') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
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
