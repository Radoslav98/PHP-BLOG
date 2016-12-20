<?php

/* :article:article.html.twig */
class __TwigTemplate_416cfba535e2fec8700163ab7b90f3aee9ad53d6db928c01756aaea170ea25eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:article.html.twig", 1);
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
        $__internal_8762c4a17438d1e2b66ac1af9ef63704ca40d327c50184c02fccbeeeab2fb6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8762c4a17438d1e2b66ac1af9ef63704ca40d327c50184c02fccbeeeab2fb6b2->enter($__internal_8762c4a17438d1e2b66ac1af9ef63704ca40d327c50184c02fccbeeeab2fb6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8762c4a17438d1e2b66ac1af9ef63704ca40d327c50184c02fccbeeeab2fb6b2->leave($__internal_8762c4a17438d1e2b66ac1af9ef63704ca40d327c50184c02fccbeeeab2fb6b2_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_92ca056970b3f00d41fd7cfef8ae17b8037bf8c0e20f4c1af0a9c6907f733664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ca056970b3f00d41fd7cfef8ae17b8037bf8c0e20f4c1af0a9c6907f733664->enter($__internal_92ca056970b3f00d41fd7cfef8ae17b8037bf8c0e20f4c1af0a9c6907f733664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <article>
                    <header>
                        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
                    </header>

                    <p>
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
                    </p>

                    <small class=\"author\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo "
                    </small>

                    <footer>
                        <div class=\"pull-right\">

                            ";
        // line 23
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAuthor", array(0 => (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method")))) {
            // line 24
            echo "                            <a class=\"btn btn-success btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
                            <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Delete</a>
                            ";
        }
        // line 27
        echo "
                            <a class=\"btn btn-default btn-xs\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">back &raquo;</a>
                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
";
        
        $__internal_92ca056970b3f00d41fd7cfef8ae17b8037bf8c0e20f4c1af0a9c6907f733664->leave($__internal_92ca056970b3f00d41fd7cfef8ae17b8037bf8c0e20f4c1af0a9c6907f733664_prof);

    }

    public function getTemplateName()
    {
        return ":article:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  82 => 27,  77 => 25,  72 => 24,  70 => 23,  61 => 17,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <article>
                    <header>
                        <h2>{{ article.title }}</h2>
                    </header>

                    <p>
                        {{ article.content }}
                    </p>

                    <small class=\"author\">
                        {{ article.author }}
                    </small>

                    <footer>
                        <div class=\"pull-right\">

                            {% if app.getUser() and (app.getUser().isAuthor(article) or app.getUser().isAdmin())  %}
                            <a class=\"btn btn-success btn-xs\" href=\"{{ path('article_edit', {'id': article.id}) }}\">Edit</a>
                            <a class=\"btn btn-danger btn-xs\" href=\"{{ path('article_delete', {'id': article.id}) }}\">Delete</a>
                            {% endif %}

                            <a class=\"btn btn-default btn-xs\" href=\"{{ path('blog_index') }}\">back &raquo;</a>
                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
{% endblock %}

";
    }
}
