<?php

/* base.html.twig */
class __TwigTemplate_00c437b138390b6d384e2da798accce79425d66ff5341fb61db340708a0f6920 extends Twig_Template
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
        $__internal_abb05da0b8a413a312069689afae6b920ac65b509e086f77f9f3f8b8625efda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb05da0b8a413a312069689afae6b920ac65b509e086f77f9f3f8b8625efda6->enter($__internal_abb05da0b8a413a312069689afae6b920ac65b509e086f77f9f3f8b8625efda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 20
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "
<div class=\"container body-container\">
    ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "</div>

";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "
</body>
</html>
";
        
        $__internal_abb05da0b8a413a312069689afae6b920ac65b509e086f77f9f3f8b8625efda6->leave($__internal_abb05da0b8a413a312069689afae6b920ac65b509e086f77f9f3f8b8625efda6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cd37060f7df4f4fff010bdb54e613c51244164ec0709cfaf80593c76b2ec12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd37060f7df4f4fff010bdb54e613c51244164ec0709cfaf80593c76b2ec12a->enter($__internal_1cd37060f7df4f4fff010bdb54e613c51244164ec0709cfaf80593c76b2ec12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_1cd37060f7df4f4fff010bdb54e613c51244164ec0709cfaf80593c76b2ec12a->leave($__internal_1cd37060f7df4f4fff010bdb54e613c51244164ec0709cfaf80593c76b2ec12a_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2dcecfd7d9f30857dca8936b2abf97b02dd6729d80117df9919dcc86b78f31b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcecfd7d9f30857dca8936b2abf97b02dd6729d80117df9919dcc86b78f31b9->enter($__internal_2dcecfd7d9f30857dca8936b2abf97b02dd6729d80117df9919dcc86b78f31b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_2dcecfd7d9f30857dca8936b2abf97b02dd6729d80117df9919dcc86b78f31b9->leave($__internal_2dcecfd7d9f30857dca8936b2abf97b02dd6729d80117df9919dcc86b78f31b9_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b0e0e7a5d636708f400d265decbd189f6026cce0092c7ffcd8eb5d2bfe5f9784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e0e7a5d636708f400d265decbd189f6026cce0092c7ffcd8eb5d2bfe5f9784->enter($__internal_b0e0e7a5d636708f400d265decbd189f6026cce0092c7ffcd8eb5d2bfe5f9784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_b0e0e7a5d636708f400d265decbd189f6026cce0092c7ffcd8eb5d2bfe5f9784->leave($__internal_b0e0e7a5d636708f400d265decbd189f6026cce0092c7ffcd8eb5d2bfe5f9784_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_7247c2c0b2decc35263fba97e4d8bc5d6ab4988ddd13029c97e73ed9b4b1dfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7247c2c0b2decc35263fba97e4d8bc5d6ab4988ddd13029c97e73ed9b4b1dfd8->enter($__internal_7247c2c0b2decc35263fba97e4d8bc5d6ab4988ddd13029c97e73ed9b4b1dfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 27
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
        // line 37
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 38
            echo "                        ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
                // line 39
                echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"true\">Admin <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"";
                // line 42
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_all");
                echo "\">Users</a></li>
                            </ul>
                        </li>
                    ";
            }
            // line 46
            echo "                            <li>
                                <a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 62
            echo "                            <li>
                                <a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 73
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_7247c2c0b2decc35263fba97e4d8bc5d6ab4988ddd13029c97e73ed9b4b1dfd8->leave($__internal_7247c2c0b2decc35263fba97e4d8bc5d6ab4988ddd13029c97e73ed9b4b1dfd8_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3f026e28b54493b4e833f4fd7028b7e25cb029795206fc2ad46ea0125a915a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f026e28b54493b4e833f4fd7028b7e25cb029795206fc2ad46ea0125a915a5->enter($__internal_d3f026e28b54493b4e833f4fd7028b7e25cb029795206fc2ad46ea0125a915a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 84
        $this->displayBlock('main', $context, $blocks);
        // line 85
        echo "            </div>
        </div>
    ";
        
        $__internal_d3f026e28b54493b4e833f4fd7028b7e25cb029795206fc2ad46ea0125a915a5->leave($__internal_d3f026e28b54493b4e833f4fd7028b7e25cb029795206fc2ad46ea0125a915a5_prof);

    }

    // line 84
    public function block_main($context, array $blocks = array())
    {
        $__internal_1debe98031407737833be60d3b1eb8ac39f3c6089c3e705c1f9c005a60c9a0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1debe98031407737833be60d3b1eb8ac39f3c6089c3e705c1f9c005a60c9a0f1->enter($__internal_1debe98031407737833be60d3b1eb8ac39f3c6089c3e705c1f9c005a60c9a0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_1debe98031407737833be60d3b1eb8ac39f3c6089c3e705c1f9c005a60c9a0f1->leave($__internal_1debe98031407737833be60d3b1eb8ac39f3c6089c3e705c1f9c005a60c9a0f1_prof);

    }

    // line 90
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3410bc4328b5825c3390547809986c5786d304e83f641685b73654232a42f53f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3410bc4328b5825c3390547809986c5786d304e83f641685b73654232a42f53f->enter($__internal_3410bc4328b5825c3390547809986c5786d304e83f641685b73654232a42f53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 91
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_3410bc4328b5825c3390547809986c5786d304e83f641685b73654232a42f53f->leave($__internal_3410bc4328b5825c3390547809986c5786d304e83f641685b73654232a42f53f_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25263b6968627dc1816cc11b085482d3e55891d4c784a58f74e8528c24923c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25263b6968627dc1816cc11b085482d3e55891d4c784a58f74e8528c24923c44->enter($__internal_25263b6968627dc1816cc11b085482d3e55891d4c784a58f74e8528c24923c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_25263b6968627dc1816cc11b085482d3e55891d4c784a58f74e8528c24923c44->leave($__internal_25263b6968627dc1816cc11b085482d3e55891d4c784a58f74e8528c24923c44_prof);

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
        return array (  297 => 102,  293 => 101,  289 => 100,  284 => 99,  278 => 98,  266 => 91,  260 => 90,  249 => 84,  240 => 85,  238 => 84,  234 => 82,  228 => 81,  216 => 73,  208 => 68,  200 => 63,  197 => 62,  189 => 57,  181 => 52,  173 => 47,  170 => 46,  163 => 42,  158 => 39,  155 => 38,  153 => 37,  140 => 27,  134 => 23,  128 => 22,  117 => 20,  108 => 15,  103 => 14,  97 => 13,  85 => 11,  75 => 104,  73 => 98,  70 => 97,  68 => 90,  64 => 88,  62 => 81,  58 => 79,  56 => 22,  51 => 20,  44 => 17,  42 => 13,  37 => 11,  30 => 6,);
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
                        {% if app.user.isAdmin() %}
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"true\">Admin <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"{{ path('admin_users_all') }}\">Users</a></li>
                            </ul>
                        </li>
                    {% endif %}
                            <li>
                                <a href=\"{{ path('user_profile') }}\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('article_create') }}\">
                                    Create Article
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
