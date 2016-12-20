<?php

/* base.html.twig */
class __TwigTemplate_d554e3250ef1c807e9c996fa2ff61da11bf560c601c6e25f5be0d8adace50f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_663a93b9479e03c970ee060b6115b5a9aee0d1bc8a476cf4bd603b2a7351788d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663a93b9479e03c970ee060b6115b5a9aee0d1bc8a476cf4bd603b2a7351788d->enter($__internal_663a93b9479e03c970ee060b6115b5a9aee0d1bc8a476cf4bd603b2a7351788d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "
<div class=\"container body-container\">
    ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "</div>

";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "
</body>
</html>
";
        
        $__internal_663a93b9479e03c970ee060b6115b5a9aee0d1bc8a476cf4bd603b2a7351788d->leave($__internal_663a93b9479e03c970ee060b6115b5a9aee0d1bc8a476cf4bd603b2a7351788d_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_20c5557abe794aeba5c1dcd3aa7185b1b847dbed5f4c4c9dbffb154d269f4dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c5557abe794aeba5c1dcd3aa7185b1b847dbed5f4c4c9dbffb154d269f4dcc->enter($__internal_20c5557abe794aeba5c1dcd3aa7185b1b847dbed5f4c4c9dbffb154d269f4dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_20c5557abe794aeba5c1dcd3aa7185b1b847dbed5f4c4c9dbffb154d269f4dcc->leave($__internal_20c5557abe794aeba5c1dcd3aa7185b1b847dbed5f4c4c9dbffb154d269f4dcc_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_855fe163c18de047a4d9d0bbf94ea90dcef830098eb9726f84d5d6978433017b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855fe163c18de047a4d9d0bbf94ea90dcef830098eb9726f84d5d6978433017b->enter($__internal_855fe163c18de047a4d9d0bbf94ea90dcef830098eb9726f84d5d6978433017b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_855fe163c18de047a4d9d0bbf94ea90dcef830098eb9726f84d5d6978433017b->leave($__internal_855fe163c18de047a4d9d0bbf94ea90dcef830098eb9726f84d5d6978433017b_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f5923d0af8185977bfe73c498a54263008ac48dc940132daa27ccad7e81b476e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5923d0af8185977bfe73c498a54263008ac48dc940132daa27ccad7e81b476e->enter($__internal_f5923d0af8185977bfe73c498a54263008ac48dc940132daa27ccad7e81b476e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_f5923d0af8185977bfe73c498a54263008ac48dc940132daa27ccad7e81b476e->leave($__internal_f5923d0af8185977bfe73c498a54263008ac48dc940132daa27ccad7e81b476e_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_787de445149af8baac139fe34f0d3cc4a51ad233c9c2f3e300c90d399c3044e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787de445149af8baac139fe34f0d3cc4a51ad233c9c2f3e300c90d399c3044e6->enter($__internal_787de445149af8baac139fe34f0d3cc4a51ad233c9c2f3e300c90d399c3044e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "                            <li>
                                <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 53
            echo "                            <li>
                                <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 64
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_787de445149af8baac139fe34f0d3cc4a51ad233c9c2f3e300c90d399c3044e6->leave($__internal_787de445149af8baac139fe34f0d3cc4a51ad233c9c2f3e300c90d399c3044e6_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c03e42bf24f23f1c50fbd398759cc542298ba553824ce22e566b9351aee167e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c03e42bf24f23f1c50fbd398759cc542298ba553824ce22e566b9351aee167e->enter($__internal_7c03e42bf24f23f1c50fbd398759cc542298ba553824ce22e566b9351aee167e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 75
        $this->displayBlock('main', $context, $blocks);
        // line 76
        echo "            </div>
        </div>
    ";
        
        $__internal_7c03e42bf24f23f1c50fbd398759cc542298ba553824ce22e566b9351aee167e->leave($__internal_7c03e42bf24f23f1c50fbd398759cc542298ba553824ce22e566b9351aee167e_prof);

    }

    // line 75
    public function block_main($context, array $blocks = array())
    {
        $__internal_274e6df50583fb6ba0fb18bd49ce0690aa1910a7c3913b59c4930b88f1c9b9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274e6df50583fb6ba0fb18bd49ce0690aa1910a7c3913b59c4930b88f1c9b9c1->enter($__internal_274e6df50583fb6ba0fb18bd49ce0690aa1910a7c3913b59c4930b88f1c9b9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_274e6df50583fb6ba0fb18bd49ce0690aa1910a7c3913b59c4930b88f1c9b9c1->leave($__internal_274e6df50583fb6ba0fb18bd49ce0690aa1910a7c3913b59c4930b88f1c9b9c1_prof);

    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        $__internal_035497e086b150a27112cef94ed6e555710ec7c05b0ea9104af9d841f55610e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035497e086b150a27112cef94ed6e555710ec7c05b0ea9104af9d841f55610e5->enter($__internal_035497e086b150a27112cef94ed6e555710ec7c05b0ea9104af9d841f55610e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 82
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_035497e086b150a27112cef94ed6e555710ec7c05b0ea9104af9d841f55610e5->leave($__internal_035497e086b150a27112cef94ed6e555710ec7c05b0ea9104af9d841f55610e5_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6637c13807db9fced7aaa00c3cad1a0732c770cc8fcc487aa07f615579e3889b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6637c13807db9fced7aaa00c3cad1a0732c770cc8fcc487aa07f615579e3889b->enter($__internal_6637c13807db9fced7aaa00c3cad1a0732c770cc8fcc487aa07f615579e3889b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6637c13807db9fced7aaa00c3cad1a0732c770cc8fcc487aa07f615579e3889b->leave($__internal_6637c13807db9fced7aaa00c3cad1a0732c770cc8fcc487aa07f615579e3889b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 93,  277 => 92,  273 => 91,  268 => 90,  262 => 89,  250 => 82,  244 => 81,  233 => 75,  224 => 76,  222 => 75,  218 => 73,  212 => 72,  200 => 64,  192 => 59,  184 => 54,  181 => 53,  173 => 48,  165 => 43,  157 => 38,  154 => 37,  152 => 36,  139 => 26,  133 => 22,  127 => 21,  116 => 19,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 95,  72 => 89,  69 => 88,  67 => 81,  63 => 79,  61 => 72,  57 => 70,  55 => 21,  50 => 19,  43 => 16,  41 => 12,  37 => 11,  30 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}SoftUni Blog{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('blog_index') }}\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user %}
                            <li>
                                <a href=\"{{ path('article_create') }}\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('user_profile') }}\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_logout') }}\">
                                    Logout
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('user_register') }}\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_login') }}\">
                                    LOGIN
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
