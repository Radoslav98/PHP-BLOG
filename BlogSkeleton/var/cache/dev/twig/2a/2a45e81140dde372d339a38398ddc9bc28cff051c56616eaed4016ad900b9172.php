<?php

/* :article:create.html.twig */
class __TwigTemplate_9f09dfbe6e4c8e576eb983e6dad26433f2b5e8d9129be7079a72edc0f1a2bb04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:create.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65f8271df691903e888bac2681e0d4d2cbff0b4ef0aacaa89e4460105655756b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f8271df691903e888bac2681e0d4d2cbff0b4ef0aacaa89e4460105655756b->enter($__internal_65f8271df691903e888bac2681e0d4d2cbff0b4ef0aacaa89e4460105655756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f8271df691903e888bac2681e0d4d2cbff0b4ef0aacaa89e4460105655756b->leave($__internal_65f8271df691903e888bac2681e0d4d2cbff0b4ef0aacaa89e4460105655756b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_aba56d1e9d6b5a68647d5fcce8ed13e8fb663d3f00dafd4c09079d91d57b391c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba56d1e9d6b5a68647d5fcce8ed13e8fb663d3f00dafd4c09079d91d57b391c->enter($__internal_aba56d1e9d6b5a68647d5fcce8ed13e8fb663d3f00dafd4c09079d91d57b391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
        echo "\" method=\"POST\">
                <fieldset>
                    <legend>New Post</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Post Title</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                                   name=\"article[title]\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"article[content]\"></textarea>
                        </div>
                    </div>

                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_aba56d1e9d6b5a68647d5fcce8ed13e8fb663d3f00dafd4c09079d91d57b391c->leave($__internal_aba56d1e9d6b5a68647d5fcce8ed13e8fb663d3f00dafd4c09079d91d57b391c_prof);

    }

    public function getTemplateName()
    {
        return ":article:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  67 => 26,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('article_create') }}\" method=\"POST\">
                <fieldset>
                    <legend>New Post</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Post Title</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                                   name=\"article[title]\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"article[content]\"></textarea>
                        </div>
                    </div>

                    {{ form_row(form._token) }}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('blog_index') }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
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
