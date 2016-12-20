<?php

/* admin/category/delete.html.twig */
class __TwigTemplate_c316cf7fcf4beea8f37d4360a405c5092cfdd3a7dc5ac11b187008ee6beb87cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/delete.html.twig", 1);
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
        $__internal_f671d534b230fb2d3da663693f4901560c00a1f46a8fa93c19693f5f91a9a817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f671d534b230fb2d3da663693f4901560c00a1f46a8fa93c19693f5f91a9a817->enter($__internal_f671d534b230fb2d3da663693f4901560c00a1f46a8fa93c19693f5f91a9a817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f671d534b230fb2d3da663693f4901560c00a1f46a8fa93c19693f5f91a9a817->leave($__internal_f671d534b230fb2d3da663693f4901560c00a1f46a8fa93c19693f5f91a9a817_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_92f5c9f2d5b9447304d6add1e5b35647927bef2f793b736ae358a435ac87f795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f5c9f2d5b9447304d6add1e5b35647927bef2f793b736ae358a435ac87f795->enter($__internal_92f5c9f2d5b9447304d6add1e5b35647927bef2f793b736ae358a435ac87f795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "delete_category";
        
        $__internal_92f5c9f2d5b9447304d6add1e5b35647927bef2f793b736ae358a435ac87f795->leave($__internal_92f5c9f2d5b9447304d6add1e5b35647927bef2f793b736ae358a435ac87f795_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_6b8e2b006b96a09504b0caad7a4b861a453b37f04c3f5bb24d465c564c3a6832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8e2b006b96a09504b0caad7a4b861a453b37f04c3f5bb24d465c564c3a6832->enter($__internal_6b8e2b006b96a09504b0caad7a4b861a453b37f04c3f5bb24d465c564c3a6832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_delete", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Delete Category</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input disabled=\"disabled\" value=\"";
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
                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                        </div>
                    </div>
                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_6b8e2b006b96a09504b0caad7a4b861a453b37f04c3f5bb24d465c564c3a6832->leave($__internal_6b8e2b006b96a09504b0caad7a4b861a453b37f04c3f5bb24d465c564c3a6832_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  74 => 19,  66 => 14,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'delete_category' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('admin_category_delete', {id:category.id}) }}\" method=\"post\">
                <fieldset>
                    <legend>Delete Category</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input disabled=\"disabled\" value=\"{{ category.name }}\" class=\"form-control\" id=\"category_name\" placeholder=\"Email\" name=\"category[name]\" required type=\"text\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('admin_category_all') }}\">Cancel</a>
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
