<?php

/* article/create.html.twig */
class __TwigTemplate_a908c18090c25aa4123e693eb32182d28fb6d2ddabd751e518ecab185f2edbc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/create.html.twig", 1);
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
        $__internal_9c359e14728ecc1185c39c1ce5558e7c467b166a0b07d0bb6568df346bba0bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c359e14728ecc1185c39c1ce5558e7c467b166a0b07d0bb6568df346bba0bd0->enter($__internal_9c359e14728ecc1185c39c1ce5558e7c467b166a0b07d0bb6568df346bba0bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c359e14728ecc1185c39c1ce5558e7c467b166a0b07d0bb6568df346bba0bd0->leave($__internal_9c359e14728ecc1185c39c1ce5558e7c467b166a0b07d0bb6568df346bba0bd0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f73f2e11630638d6adbfcc64f532f25197fdebe03660cdb8bc72bf250c345e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73f2e11630638d6adbfcc64f532f25197fdebe03660cdb8bc72bf250c345e66->enter($__internal_f73f2e11630638d6adbfcc64f532f25197fdebe03660cdb8bc72bf250c345e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tags\">Tags</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_tags\"
                                   name=\"tags\">
                        </div>
                    </div>

                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <a class=\"btn btn-default\" href=\"";
        // line 37
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
        
        $__internal_f73f2e11630638d6adbfcc64f532f25197fdebe03660cdb8bc72bf250c345e66->leave($__internal_f73f2e11630638d6adbfcc64f532f25197fdebe03660cdb8bc72bf250c345e66_prof);

    }

    public function getTemplateName()
    {
        return "article/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 37,  74 => 33,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
                    <div class=\"form-group\">
                        <label class=\"col-sm-4 control-label\" for=\"article_tags\">Tags</label>
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"article_tags\"
                                   name=\"tags\">
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
