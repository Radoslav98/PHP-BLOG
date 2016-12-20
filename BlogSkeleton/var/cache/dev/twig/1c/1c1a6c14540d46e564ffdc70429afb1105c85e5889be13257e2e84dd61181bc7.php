<?php

/* article/article.html.twig */
class __TwigTemplate_5fa746edc5b0d07c088a5525e42bfd4759142e4b55e322caf03d86eda2cfe41a extends Twig_Template
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
        $__internal_c6e9c5543d9acc6a4f2917d4f8ff73e9db0f1d51e33122cc1e18d27c20ed4038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e9c5543d9acc6a4f2917d4f8ff73e9db0f1d51e33122cc1e18d27c20ed4038->enter($__internal_c6e9c5543d9acc6a4f2917d4f8ff73e9db0f1d51e33122cc1e18d27c20ed4038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6e9c5543d9acc6a4f2917d4f8ff73e9db0f1d51e33122cc1e18d27c20ed4038->leave($__internal_c6e9c5543d9acc6a4f2917d4f8ff73e9db0f1d51e33122cc1e18d27c20ed4038_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_6795295501d511f36c2ec9d637a3538bf190353b4fbb662627fee0dbe28ea0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6795295501d511f36c2ec9d637a3538bf190353b4fbb662627fee0dbe28ea0b0->enter($__internal_6795295501d511f36c2ec9d637a3538bf190353b4fbb662627fee0dbe28ea0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_6795295501d511f36c2ec9d637a3538bf190353b4fbb662627fee0dbe28ea0b0->leave($__internal_6795295501d511f36c2ec9d637a3538bf190353b4fbb662627fee0dbe28ea0b0_prof);

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
