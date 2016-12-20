<?php

/* article/edit.html.twig */
class __TwigTemplate_b37c7070dee993500f80f1a30fab679b51d885389c716f8bb405115a631fb967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/edit.html.twig", 1);
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
        $__internal_ee125a19d280f628e9c9064ed1c047df3e398d5608f44a65dbb18c72ab9af400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee125a19d280f628e9c9064ed1c047df3e398d5608f44a65dbb18c72ab9af400->enter($__internal_ee125a19d280f628e9c9064ed1c047df3e398d5608f44a65dbb18c72ab9af400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee125a19d280f628e9c9064ed1c047df3e398d5608f44a65dbb18c72ab9af400->leave($__internal_ee125a19d280f628e9c9064ed1c047df3e398d5608f44a65dbb18c72ab9af400_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_63967cfe06b0ba940c8477f8d5a1374e350d771b26da6c053bee666ce586c2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63967cfe06b0ba940c8477f8d5a1374e350d771b26da6c053bee666ce586c2c4->enter($__internal_63967cfe06b0ba940c8477f8d5a1374e350d771b26da6c053bee666ce586c2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <fieldset>
                    <legend>Edit Post</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Post Title</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                                   name=\"article[title]\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"article[content]\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tags\">Tags</label>
                        <div class=\"col-sm-4 \">
                            <input value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags", array()), ", "), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" id=\"article_tags\"
                                   name=\"tags\">
                        </div>
                    </div>

                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_63967cfe06b0ba940c8477f8d5a1374e350d771b26da6c053bee666ce586c2c4->leave($__internal_63967cfe06b0ba940c8477f8d5a1374e350d771b26da6c053bee666ce586c2c4_prof);

    }

    public function getTemplateName()
    {
        return "article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  84 => 34,  76 => 29,  66 => 22,  55 => 14,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('article_edit', {id: article.id}) }}\" method=\"POST\">
                <fieldset>
                    <legend>Edit Post</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Post Title</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                                   name=\"article[title]\" value=\"{{ article.title }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"article[content]\">{{ article.content }}</textarea>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tags\">Tags</label>
                        <div class=\"col-sm-4 \">
                            <input value=\"{{ article.tags | join(\", \") }}\" type=\"text\" class=\"form-control\" id=\"article_tags\"
                                   name=\"tags\">
                        </div>
                    </div>

                    {{ form_row(form._token) }}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('article_view', {id: article.id}) }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-success\">Edit</button>
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
