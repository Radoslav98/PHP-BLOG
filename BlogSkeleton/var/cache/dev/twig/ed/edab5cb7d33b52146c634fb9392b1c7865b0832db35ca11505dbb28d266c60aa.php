<?php

/* admin/category/edit.html.twig */
class __TwigTemplate_758472d1393619173d4367e60aba5e9bbfa41dba0c1851bdf7537b1d557a747c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/edit.html.twig", 1);
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
        $__internal_d85f52ff1eaf4fa881b3af7db36ed2f7a52ddcb33a34156bec9e93b131429cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85f52ff1eaf4fa881b3af7db36ed2f7a52ddcb33a34156bec9e93b131429cdd->enter($__internal_d85f52ff1eaf4fa881b3af7db36ed2f7a52ddcb33a34156bec9e93b131429cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d85f52ff1eaf4fa881b3af7db36ed2f7a52ddcb33a34156bec9e93b131429cdd->leave($__internal_d85f52ff1eaf4fa881b3af7db36ed2f7a52ddcb33a34156bec9e93b131429cdd_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4e5d87798f148449394a1bd273684a0b81dd09f5635cfc7855a784675befc341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5d87798f148449394a1bd273684a0b81dd09f5635cfc7855a784675befc341->enter($__internal_4e5d87798f148449394a1bd273684a0b81dd09f5635cfc7855a784675befc341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "edit_category";
        
        $__internal_4e5d87798f148449394a1bd273684a0b81dd09f5635cfc7855a784675befc341->leave($__internal_4e5d87798f148449394a1bd273684a0b81dd09f5635cfc7855a784675befc341_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_0d5ec50f67c4208fec53e75f9ef7fb5f3f9da24621de7deff1de510f87b8ac2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5ec50f67c4208fec53e75f9ef7fb5f3f9da24621de7deff1de510f87b8ac2d->enter($__internal_0d5ec50f67c4208fec53e75f9ef7fb5f3f9da24621de7deff1de510f87b8ac2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Edit Category</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"category_name\" placeholder=\"Email\" name=\"category[name]\" required type=\"text\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_all");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                        </div>
                    </div>


                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_0d5ec50f67c4208fec53e75f9ef7fb5f3f9da24621de7deff1de510f87b8ac2d->leave($__internal_0d5ec50f67c4208fec53e75f9ef7fb5f3f9da24621de7deff1de510f87b8ac2d_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  74 => 19,  66 => 14,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'edit_category' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('admin_category_edit', {id:category.id}) }}\" method=\"post\">
                <fieldset>
                    <legend>Edit Category</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input value=\"{{ category.name }}\" class=\"form-control\" id=\"category_name\" placeholder=\"Email\" name=\"category[name]\" required type=\"text\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('admin_category_all') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Save</button>
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
