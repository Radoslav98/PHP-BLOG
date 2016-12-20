<?php

/* blog/index.html.twig */
class __TwigTemplate_98c1cc24a7b33a059cf3e669d22f3762a24cc7c4fbc76c09c539351b19c72110 extends Twig_Template
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
        $__internal_8552820eb0d69f59cc2f1c5f0ce8d1780f33ce274fc7f6b2f5ae6ce3f0661a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8552820eb0d69f59cc2f1c5f0ce8d1780f33ce274fc7f6b2f5ae6ce3f0661a8d->enter($__internal_8552820eb0d69f59cc2f1c5f0ce8d1780f33ce274fc7f6b2f5ae6ce3f0661a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8552820eb0d69f59cc2f1c5f0ce8d1780f33ce274fc7f6b2f5ae6ce3f0661a8d->leave($__internal_8552820eb0d69f59cc2f1c5f0ce8d1780f33ce274fc7f6b2f5ae6ce3f0661a8d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_6acb6feca31d683e98d4d7579370ac826f03dcd7e92f0d9fb0b2693c36e75454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acb6feca31d683e98d4d7579370ac826f03dcd7e92f0d9fb0b2693c36e75454->enter($__internal_6acb6feca31d683e98d4d7579370ac826f03dcd7e92f0d9fb0b2693c36e75454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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

                        <small class=\"author\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "
                        </small>

                        <footer>
                            <div class=\"pull-right\">
                                <a class=\"btn btn-default btn-xs\"
                                   href=\"";
            // line 24
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
        // line 30
        echo "        </div>
    </div>
";
        
        $__internal_6acb6feca31d683e98d4d7579370ac826f03dcd7e92f0d9fb0b2693c36e75454->leave($__internal_6acb6feca31d683e98d4d7579370ac826f03dcd7e92f0d9fb0b2693c36e75454_prof);

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
        return array (  88 => 30,  76 => 24,  67 => 18,  60 => 14,  53 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
