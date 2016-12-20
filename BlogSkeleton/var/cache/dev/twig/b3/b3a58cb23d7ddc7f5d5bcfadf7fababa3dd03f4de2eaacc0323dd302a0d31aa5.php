<?php

/* blog/index.html.twig */
class __TwigTemplate_afee6c2eb700293d724ba8056363a0224fd53e96a0936fd554a8baee913dc4d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
        $__internal_1b44aa0afe7000e8f11127e81ca7ada6780a3761b37dc74730fb6c7d530ba62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b44aa0afe7000e8f11127e81ca7ada6780a3761b37dc74730fb6c7d530ba62b->enter($__internal_1b44aa0afe7000e8f11127e81ca7ada6780a3761b37dc74730fb6c7d530ba62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b44aa0afe7000e8f11127e81ca7ada6780a3761b37dc74730fb6c7d530ba62b->leave($__internal_1b44aa0afe7000e8f11127e81ca7ada6780a3761b37dc74730fb6c7d530ba62b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7e7bb7f6988cd4386811569710126fcdb2647a5d817a16294ae51848dcae3760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7bb7f6988cd4386811569710126fcdb2647a5d817a16294ae51848dcae3760->enter($__internal_7e7bb7f6988cd4386811569710126fcdb2647a5d817a16294ae51848dcae3760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">
        <div class=\"row\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h2>
                        </header>

                        <p>
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "summary", array()), "html", null, true);
            echo "
                        </p>
                        <p>
                            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 18
                echo "                                <a class=\"btn btn-default btn-xs\"
                                   href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articles_in_tag", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                        </p>

                        <small class=\"author\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "
                        </small>

                        <footer>
                            <div class=\"pull-right\">
                                <a class=\"btn btn-default btn-xs\"
                                   href=\"";
            // line 30
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
        // line 36
        echo "        </div>
    </div>
";
        
        $__internal_7e7bb7f6988cd4386811569710126fcdb2647a5d817a16294ae51848dcae3760->leave($__internal_7e7bb7f6988cd4386811569710126fcdb2647a5d817a16294ae51848dcae3760_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  97 => 30,  88 => 24,  83 => 21,  73 => 19,  70 => 18,  66 => 17,  60 => 14,  53 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content\">
        <div class=\"row\">
            {% for article in articles %}
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
