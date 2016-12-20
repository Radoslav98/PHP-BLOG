<?php

/* tags/articles.html.twig */
class __TwigTemplate_20de79c6ef8b3563a0fa975788aa99dbf6db4afb10583376c63cc95a046c29c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tags/articles.html.twig", 1);
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
        $__internal_53f8f8815610efb0b512a5d8c784d4af49364cb40b5c9f28a1fe4966d46c32d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f8f8815610efb0b512a5d8c784d4af49364cb40b5c9f28a1fe4966d46c32d6->enter($__internal_53f8f8815610efb0b512a5d8c784d4af49364cb40b5c9f28a1fe4966d46c32d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tags/articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f8f8815610efb0b512a5d8c784d4af49364cb40b5c9f28a1fe4966d46c32d6->leave($__internal_53f8f8815610efb0b512a5d8c784d4af49364cb40b5c9f28a1fe4966d46c32d6_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d481d30fbea9a1e07b41b402fdfa483c6f892af9d6270390b468ba1d537896ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d481d30fbea9a1e07b41b402fdfa483c6f892af9d6270390b468ba1d537896ce->enter($__internal_d481d30fbea9a1e07b41b402fdfa483c6f892af9d6270390b468ba1d537896ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">
        <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "name", array()), "html", null, true);
        echo "</h2>
        <div class=\"row\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "articles", array()));
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
                echo "                                <a class=\"btn btn-default btn-xs\"
                                   href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_in_tag", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
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
        
        $__internal_d481d30fbea9a1e07b41b402fdfa483c6f892af9d6270390b468ba1d537896ce->leave($__internal_d481d30fbea9a1e07b41b402fdfa483c6f892af9d6270390b468ba1d537896ce_prof);

    }

    public function getTemplateName()
    {
        return "tags/articles.html.twig";
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
        <h2>{{ tag.name }}</h2>
        <div class=\"row\">
            {% for article in tag.articles %}
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
                                   href=\"{{ path('articles_in_tag', {'name': tag.name}) }}\">{{ tag.name }}</a>
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
