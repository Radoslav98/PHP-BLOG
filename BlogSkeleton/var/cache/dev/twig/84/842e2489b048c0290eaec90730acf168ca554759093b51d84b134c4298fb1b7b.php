<?php

/* category/articles.html.twig */
class __TwigTemplate_d50aca27f4c8be8c97839fc7df6bc5c9f773cfb9cfc0acc6de62a39855734927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/articles.html.twig", 1);
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
        $__internal_869ed418e181a3f91b060e3243533141dea54cb68798e4c284028ca286aa07fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869ed418e181a3f91b060e3243533141dea54cb68798e4c284028ca286aa07fe->enter($__internal_869ed418e181a3f91b060e3243533141dea54cb68798e4c284028ca286aa07fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_869ed418e181a3f91b060e3243533141dea54cb68798e4c284028ca286aa07fe->leave($__internal_869ed418e181a3f91b060e3243533141dea54cb68798e4c284028ca286aa07fe_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_4392d23f8b6d8eba7a7b3c1c756d79bd8850cb29c72f1f665aada46550cf46dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4392d23f8b6d8eba7a7b3c1c756d79bd8850cb29c72f1f665aada46550cf46dc->enter($__internal_4392d23f8b6d8eba7a7b3c1c756d79bd8850cb29c72f1f665aada46550cf46dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">
        ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
        echo "
        <div class=\"row\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h2>
                        </header>

                        <p>
                            ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "summary", array()), "html", null, true);
            echo "
                        </p>
                        <p>
                            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 19
                echo "                            <a class=\"btn btn-default btn-xs\"
                               href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                        </p>

                        <small class=\"author\">
                            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "
                        </small>

                        <footer>
                            <div class=\"pull-right\">
                                <a class=\"btn btn-default btn-xs\"
                                   href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Read more &raquo;</a>
                            </div>
                        </footer>
                    </article>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    </div>
";
        
        $__internal_4392d23f8b6d8eba7a7b3c1c756d79bd8850cb29c72f1f665aada46550cf46dc->leave($__internal_4392d23f8b6d8eba7a7b3c1c756d79bd8850cb29c72f1f665aada46550cf46dc_prof);

    }

    public function getTemplateName()
    {
        return "category/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  101 => 31,  92 => 25,  87 => 22,  77 => 20,  74 => 19,  70 => 18,  64 => 15,  57 => 11,  52 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content\">
        {{ category }}
        <div class=\"row\">
            {% for article in category.articles %}
                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2>{{ article.title }}</h2>
                        </header>

                        <p>
                            {{ article.summary }}
                        </p>
                        <p>
                            {% for tag in article.tags %}
                            <a class=\"btn btn-default btn-xs\"
                               href=\"{{ path('article_view', {'id': article.id}) }}\">{{ tag.name }}</a>
                            {% endfor %}
                        </p>

                        <small class=\"author\">
                            {{ article.author }}
                        </small>

                        <footer>
                            <div class=\"pull-right\">
                                <a class=\"btn btn-default btn-xs\"
                                   href=\"{{ path('article_view', {'id': article.id}) }}\">Read more &raquo;</a>
                            </div>
                        </footer>
                    </article>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

";
    }
}
