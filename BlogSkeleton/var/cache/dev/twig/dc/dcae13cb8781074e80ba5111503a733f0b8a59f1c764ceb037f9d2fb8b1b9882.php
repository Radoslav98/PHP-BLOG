<?php

/* :article:delete.html.twig */
class __TwigTemplate_4c14014db999c24e0a55b061a9095a677db0f0061d3ef42770d05cb26771fbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:delete.html.twig", 1);
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
        $__internal_fd64dc6a4312f213c70f82e6dc16201b7267a15efcff443dd549063fa0281553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd64dc6a4312f213c70f82e6dc16201b7267a15efcff443dd549063fa0281553->enter($__internal_fd64dc6a4312f213c70f82e6dc16201b7267a15efcff443dd549063fa0281553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd64dc6a4312f213c70f82e6dc16201b7267a15efcff443dd549063fa0281553->leave($__internal_fd64dc6a4312f213c70f82e6dc16201b7267a15efcff443dd549063fa0281553_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e565e4975f94dc218cb2f3155a57fb489dd2707ad7375741c187516e1b342558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e565e4975f94dc218cb2f3155a57fb489dd2707ad7375741c187516e1b342558->enter($__internal_e565e4975f94dc218cb2f3155a57fb489dd2707ad7375741c187516e1b342558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
                <fieldset>
                    <legend>Delete Post</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Post Title</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                                   name=\"article[title]\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "\" disabled>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"article[content]\" disabled>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</textarea>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_e565e4975f94dc218cb2f3155a57fb489dd2707ad7375741c187516e1b342558->leave($__internal_e565e4975f94dc218cb2f3155a57fb489dd2707ad7375741c187516e1b342558_prof);

    }

    public function getTemplateName()
    {
        return ":article:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  73 => 26,  66 => 22,  55 => 14,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-horizontal\" action=\"{{ path('article_delete', {id: article.id}) }}\" method=\"POST\">
                <fieldset>
                    <legend>Delete Post</legend>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_title\">Post Title</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_title\" placeholder=\"Post Title\"
                                   name=\"article[title]\" value=\"{{ article.title }}\" disabled>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_content\">Content</label>
                        <div class=\"col-sm-6\">
                            <textarea class=\"form-control\" rows=\"6\" id=\"article_content\"
                                      name=\"article[content]\" disabled>{{ article.content }}</textarea>
                        </div>
                    </div>

                    {{ form_row(form._token) }}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"{{ path('article_view', {id: article.id}) }}\">Cancel</a>
                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
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
