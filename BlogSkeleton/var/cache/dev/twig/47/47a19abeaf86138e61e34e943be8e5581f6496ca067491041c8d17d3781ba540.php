<?php

/* admin/category/create.html.twig */
class __TwigTemplate_9bdaf0fda4288facaf6d18edbd26fc00d9972ce8389df05f3c4bb08d6864b453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/create.html.twig", 1);
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
        $__internal_3661eb4ad8c36b4c6b9c5b1a636197251146cb82bddf61dd31fc03d2435992f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3661eb4ad8c36b4c6b9c5b1a636197251146cb82bddf61dd31fc03d2435992f6->enter($__internal_3661eb4ad8c36b4c6b9c5b1a636197251146cb82bddf61dd31fc03d2435992f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3661eb4ad8c36b4c6b9c5b1a636197251146cb82bddf61dd31fc03d2435992f6->leave($__internal_3661eb4ad8c36b4c6b9c5b1a636197251146cb82bddf61dd31fc03d2435992f6_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a6b1684a9ce20fd752e6d4b25f02df89e314bb52df06fb1e411be47f02159405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b1684a9ce20fd752e6d4b25f02df89e314bb52df06fb1e411be47f02159405->enter($__internal_a6b1684a9ce20fd752e6d4b25f02df89e314bb52df06fb1e411be47f02159405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "edit_category";
        
        $__internal_a6b1684a9ce20fd752e6d4b25f02df89e314bb52df06fb1e411be47f02159405->leave($__internal_a6b1684a9ce20fd752e6d4b25f02df89e314bb52df06fb1e411be47f02159405_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_b43b095c15ae3f9f29ee8d2ad22e119f30108f4a78976182b4de386dd783bf68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43b095c15ae3f9f29ee8d2ad22e119f30108f4a78976182b4de386dd783bf68->enter($__internal_b43b095c15ae3f9f29ee8d2ad22e119f30108f4a78976182b4de386dd783bf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_create");
        echo "\" method=\"post\">
                <fieldset>
                    <legend>Create Category</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input  class=\"form-control\" id=\"category_name\" placeholder=\"Email\" name=\"category[name]\" required type=\"text\">
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
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_b43b095c15ae3f9f29ee8d2ad22e119f30108f4a78976182b4de386dd783bf68->leave($__internal_b43b095c15ae3f9f29ee8d2ad22e119f30108f4a78976182b4de386dd783bf68_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  71 => 19,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'edit_category' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('admin_category_create')}}\" method=\"post\">
                <fieldset>
                    <legend>Create Category</legend>
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"category_name\">Name</label>
                        <div class=\"col-sm-4 \">
                            <input  class=\"form-control\" id=\"category_name\" placeholder=\"Email\" name=\"category[name]\" required type=\"text\">
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
