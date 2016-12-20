<?php

/* article/article.html.twig */
class __TwigTemplate_8175f2b8b88c291b3315e317480195146918be08d2552573f5cf79627a01f330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/article.html.twig", 1);
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
        $__internal_680bdf6b78073e195fd34d5e6ba4fa029ecadacdac57d6ed4551150d0e473359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680bdf6b78073e195fd34d5e6ba4fa029ecadacdac57d6ed4551150d0e473359->enter($__internal_680bdf6b78073e195fd34d5e6ba4fa029ecadacdac57d6ed4551150d0e473359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_680bdf6b78073e195fd34d5e6ba4fa029ecadacdac57d6ed4551150d0e473359->leave($__internal_680bdf6b78073e195fd34d5e6ba4fa029ecadacdac57d6ed4551150d0e473359_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_993ecccdcfa0edef055a8695cdbcaeabd48a6ca18052d17e877c04a9dea50d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993ecccdcfa0edef055a8695cdbcaeabd48a6ca18052d17e877c04a9dea50d5f->enter($__internal_993ecccdcfa0edef055a8695cdbcaeabd48a6ca18052d17e877c04a9dea50d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                    <p>
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 17
            echo "                            <a class=\"btn btn-default btn-xs\"
                               href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_in_tag", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </p>

                    <small class=\"author\">
                        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo "
                    </small>

                    <footer>
                        <div class=\"pull-right\">

                            ";
        // line 29
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAuthor", array(0 => (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method")))) {
            // line 30
            echo "                            <a class=\"btn btn-success btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
                            <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">Delete</a>
                            ";
        }
        // line 33
        echo "
                            <a class=\"btn btn-default btn-xs\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">back &raquo;</a>
                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
";
        
        $__internal_993ecccdcfa0edef055a8695cdbcaeabd48a6ca18052d17e877c04a9dea50d5f->leave($__internal_993ecccdcfa0edef055a8695cdbcaeabd48a6ca18052d17e877c04a9dea50d5f_prof);

    }

    public function getTemplateName()
    {
        return "article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  103 => 33,  98 => 31,  93 => 30,  91 => 29,  82 => 23,  77 => 20,  67 => 18,  64 => 17,  60 => 16,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
                    <p>
                        {% for tag in article.tags %}
                            <a class=\"btn btn-default btn-xs\"
                               href=\"{{ path('articles_in_tag', {'name': tag.name}) }}\">{{ tag.name }}</a>
                        {% endfor %}
                    </p>

                    <small class=\"author\">
                        {{ article.author }}
                    </small>

                    <footer>
                        <div class=\"pull-right\">

                            {% if app.getUser() and (app.getUser().isAuthor(article) or app.getUser().isAdmin())  %}
                            <a class=\"btn btn-success btn-xs\" href=\"{{ path('article_edit', {id: article.id}) }}\">Edit</a>
                            <a class=\"btn btn-danger btn-xs\" href=\"{{ path('article_delete', {id: article.id}) }}\">Delete</a>
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
