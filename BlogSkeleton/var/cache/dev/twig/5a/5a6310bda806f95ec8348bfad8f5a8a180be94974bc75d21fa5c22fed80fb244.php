<?php

/* admin/user/edit.html.twig */
class __TwigTemplate_ce6f0f9f0646fc8441400c1c96375f82369f507b766f64ac4c9b0d7ca1354846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/edit.html.twig", 1);
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
        $__internal_2f50e595f36cb5a54d9e168378693951e284eb7f41e123eee57812c358b8e3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f50e595f36cb5a54d9e168378693951e284eb7f41e123eee57812c358b8e3cb->enter($__internal_2f50e595f36cb5a54d9e168378693951e284eb7f41e123eee57812c358b8e3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f50e595f36cb5a54d9e168378693951e284eb7f41e123eee57812c358b8e3cb->leave($__internal_2f50e595f36cb5a54d9e168378693951e284eb7f41e123eee57812c358b8e3cb_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_20b49e710c035b2a0a4e38fc43bcaadef2886bf85bdd1d855313037a38a1f1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b49e710c035b2a0a4e38fc43bcaadef2886bf85bdd1d855313037a38a1f1ce->enter($__internal_20b49e710c035b2a0a4e38fc43bcaadef2886bf85bdd1d855313037a38a1f1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "register";
        
        $__internal_20b49e710c035b2a0a4e38fc43bcaadef2886bf85bdd1d855313037a38a1f1ce->leave($__internal_20b49e710c035b2a0a4e38fc43bcaadef2886bf85bdd1d855313037a38a1f1ce_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_4e263b661fae297fec4fff0b1bf134c8c38390a5e1ffdcf434a2e9d6f04c3d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e263b661fae297fec4fff0b1bf134c8c38390a5e1ffdcf434a2e9d6f04c3d29->enter($__internal_4e263b661fae297fec4fff0b1bf134c8c38390a5e1ffdcf434a2e9d6f04c3d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "   <div class=\"container body-content span=8 offset=2\">
      <div class=\"well\">
         <form class=\"form-horizontal\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <fieldset>
               <legend>Edit user</legend>
               <div class=\"form-group\">
                  <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                  <div class=\"col-sm-4 \">
                     <input value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"user_edit[email]\" required type=\"email\">
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Full Name</label>
                  <div class=\"col-sm-4 \">
                     <input value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Full Name\" name=\"user_edit[fullName]\" required>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Password</label>
                  <div class=\"col-sm-4\">
                     <input type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user_edit[password][first]\">
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Confirm Password</label>
                  <div class=\"col-sm-4\">
                     <input type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user_edit[password][second]\">
                  </div>
               </div>
               <div class=\"form-group\">
                  <div class=\"col-sm-4 col-sm-offset-4\">
                     <a class=\"btn btn-default\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_all");
        echo "\">Cancel</a>
                     <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                  </div>
               </div>
               ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget');
        echo "

               ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
            </fieldset>
         </form>
      </div>
   </div>
";
        
        $__internal_4e263b661fae297fec4fff0b1bf134c8c38390a5e1ffdcf434a2e9d6f04c3d29->leave($__internal_4e263b661fae297fec4fff0b1bf134c8c38390a5e1ffdcf434a2e9d6f04c3d29_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 43,  102 => 41,  95 => 37,  75 => 20,  66 => 14,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'register' %}

{% block main %}
   <div class=\"container body-content span=8 offset=2\">
      <div class=\"well\">
         <form class=\"form-horizontal\" action=\"{{ path('admin_user_edit', {id:user.id}) }}\" method=\"post\">
            <fieldset>
               <legend>Edit user</legend>
               <div class=\"form-group\">
                  <label class=\"col-sm-4 control-label\" for=\"user_email\">Email</label>
                  <div class=\"col-sm-4 \">
                     <input value=\"{{ user.email }}\" class=\"form-control\" id=\"user_email\" placeholder=\"Email\" name=\"user_edit[email]\" required type=\"email\">
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-4 control-label\" for=\"user_fullName\">Full Name</label>
                  <div class=\"col-sm-4 \">
                     <input value=\"{{ user.fullName }}\" type=\"text\" class=\"form-control\" id=\"user_fullName\" placeholder=\"Full Name\" name=\"user_edit[fullName]\" required>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-4 control-label\" for=\"user_password_first\">Password</label>
                  <div class=\"col-sm-4\">
                     <input type=\"password\" class=\"form-control\" id=\"user_password_first\" placeholder=\"Password\" name=\"user_edit[password][first]\">
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-4 control-label\" for=\"user_password_second\">Confirm Password</label>
                  <div class=\"col-sm-4\">
                     <input type=\"password\" class=\"form-control\" id=\"user_password_second\" placeholder=\"Password\" name=\"user_edit[password][second]\">
                  </div>
               </div>
               <div class=\"form-group\">
                  <div class=\"col-sm-4 col-sm-offset-4\">
                     <a class=\"btn btn-default\" href=\"{{ path('admin_users_all') }}\">Cancel</a>
                     <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                  </div>
               </div>
               {{ form_widget(form.roles) }}

               {{  form_row(form._token) }}
            </fieldset>
         </form>
      </div>
   </div>
{% endblock %}
";
    }
}
