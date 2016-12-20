<?php

/* base.html.twig */
class __TwigTemplate_3eee029aedc68b060f3bd168794340603d14278d11861587bee4b7b23eef26fb extends Twig_Template
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
        $__internal_89de19fc68697ac97aad2824e835a2a750918bf2c840679765b79a406a2a5880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89de19fc68697ac97aad2824e835a2a750918bf2c840679765b79a406a2a5880->enter($__internal_89de19fc68697ac97aad2824e835a2a750918bf2c840679765b79a406a2a5880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>

    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"favicon.png\" type=\"image/png\">
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 21
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 81
        echo "
<div class=\"container body-container\">
    ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "</div>

";
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "
</body>
</html>
";
        
        $__internal_89de19fc68697ac97aad2824e835a2a750918bf2c840679765b79a406a2a5880->leave($__internal_89de19fc68697ac97aad2824e835a2a750918bf2c840679765b79a406a2a5880_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d83c333bbec9ea41a3fb5c7659f5e8e679f2f3073348d238d7cd62201cfbf0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d83c333bbec9ea41a3fb5c7659f5e8e679f2f3073348d238d7cd62201cfbf0d->enter($__internal_4d83c333bbec9ea41a3fb5c7659f5e8e679f2f3073348d238d7cd62201cfbf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_4d83c333bbec9ea41a3fb5c7659f5e8e679f2f3073348d238d7cd62201cfbf0d->leave($__internal_4d83c333bbec9ea41a3fb5c7659f5e8e679f2f3073348d238d7cd62201cfbf0d_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d454b5c788046508143b30d8f65d8e47a27cbb7aec73b2e8caaf8a73f31771b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d454b5c788046508143b30d8f65d8e47a27cbb7aec73b2e8caaf8a73f31771b->enter($__internal_0d454b5c788046508143b30d8f65d8e47a27cbb7aec73b2e8caaf8a73f31771b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_0d454b5c788046508143b30d8f65d8e47a27cbb7aec73b2e8caaf8a73f31771b->leave($__internal_0d454b5c788046508143b30d8f65d8e47a27cbb7aec73b2e8caaf8a73f31771b_prof);

    }

    // line 21
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6b16ef7369d444f8ce6d0278ae80e7cb024224423e719d6628784d1928c2b2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b16ef7369d444f8ce6d0278ae80e7cb024224423e719d6628784d1928c2b2d7->enter($__internal_6b16ef7369d444f8ce6d0278ae80e7cb024224423e719d6628784d1928c2b2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_6b16ef7369d444f8ce6d0278ae80e7cb024224423e719d6628784d1928c2b2d7->leave($__internal_6b16ef7369d444f8ce6d0278ae80e7cb024224423e719d6628784d1928c2b2d7_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_8b7ce05d5da3974c1cacc91ef626e28617f2b303676043fe1c3f81a37be3df45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7ce05d5da3974c1cacc91ef626e28617f2b303676043fe1c3f81a37be3df45->enter($__internal_8b7ce05d5da3974c1cacc91ef626e28617f2b303676043fe1c3f81a37be3df45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 24
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\"><img style=\"width: 3ch\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\"> </a>
                    <a href=\"";
        // line 29
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
        // line 39
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 40
            echo "                            ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
                // line 41
                echo "                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"true\">Admin <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li><a href=\"";
                // line 44
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_all");
                echo "\">Users</a></li>
                                    </ul>
                                </li>
                            ";
            }
            // line 48
            echo "                            <li>
                                <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 64
            echo "                            <li>
                                <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 75
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_8b7ce05d5da3974c1cacc91ef626e28617f2b303676043fe1c3f81a37be3df45->leave($__internal_8b7ce05d5da3974c1cacc91ef626e28617f2b303676043fe1c3f81a37be3df45_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fdadf3aa0e6be5e3deba913c069ad6ebac9cd9074179feac83783dd4a91d1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdadf3aa0e6be5e3deba913c069ad6ebac9cd9074179feac83783dd4a91d1e2->enter($__internal_5fdadf3aa0e6be5e3deba913c069ad6ebac9cd9074179feac83783dd4a91d1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 86
        $this->displayBlock('main', $context, $blocks);
        // line 87
        echo "            </div>
        </div>
    ";
        
        $__internal_5fdadf3aa0e6be5e3deba913c069ad6ebac9cd9074179feac83783dd4a91d1e2->leave($__internal_5fdadf3aa0e6be5e3deba913c069ad6ebac9cd9074179feac83783dd4a91d1e2_prof);

    }

    // line 86
    public function block_main($context, array $blocks = array())
    {
        $__internal_9f5c2e7d268d05adba55afca3d0966d6ece65baae1427db7bc66db38a164973c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5c2e7d268d05adba55afca3d0966d6ece65baae1427db7bc66db38a164973c->enter($__internal_9f5c2e7d268d05adba55afca3d0966d6ece65baae1427db7bc66db38a164973c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_9f5c2e7d268d05adba55afca3d0966d6ece65baae1427db7bc66db38a164973c->leave($__internal_9f5c2e7d268d05adba55afca3d0966d6ece65baae1427db7bc66db38a164973c_prof);

    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3cb6adfc71dc6420e7bb7e2ce9831f978606a9cea578e0baeccfa15394cb8479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb6adfc71dc6420e7bb7e2ce9831f978606a9cea578e0baeccfa15394cb8479->enter($__internal_3cb6adfc71dc6420e7bb7e2ce9831f978606a9cea578e0baeccfa15394cb8479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 93
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_3cb6adfc71dc6420e7bb7e2ce9831f978606a9cea578e0baeccfa15394cb8479->leave($__internal_3cb6adfc71dc6420e7bb7e2ce9831f978606a9cea578e0baeccfa15394cb8479_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fe7ac0c2fc30f77af8d747b357e176de9226184753933665d712dd3a6002d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe7ac0c2fc30f77af8d747b357e176de9226184753933665d712dd3a6002d71->enter($__internal_0fe7ac0c2fc30f77af8d747b357e176de9226184753933665d712dd3a6002d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0fe7ac0c2fc30f77af8d747b357e176de9226184753933665d712dd3a6002d71->leave($__internal_0fe7ac0c2fc30f77af8d747b357e176de9226184753933665d712dd3a6002d71_prof);

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
        return array (  304 => 104,  300 => 103,  296 => 102,  291 => 101,  285 => 100,  273 => 93,  267 => 92,  256 => 86,  247 => 87,  245 => 86,  241 => 84,  235 => 83,  223 => 75,  215 => 70,  207 => 65,  204 => 64,  196 => 59,  188 => 54,  180 => 49,  177 => 48,  170 => 44,  165 => 41,  162 => 40,  160 => 39,  147 => 29,  141 => 28,  135 => 24,  129 => 23,  118 => 21,  109 => 16,  104 => 15,  98 => 14,  86 => 12,  76 => 106,  74 => 100,  71 => 99,  69 => 92,  65 => 90,  63 => 83,  59 => 81,  57 => 23,  52 => 21,  45 => 18,  43 => 14,  38 => 12,  30 => 6,);
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
    <link rel=\"shortcut icon\" href=\"favicon.png\" type=\"image/png\">
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
                    <a class=\"navbar-brand\" href=\"{{ path('blog_index') }}\"><img style=\"width: 3ch\" src=\"{{ asset('apple-touch-icon.png') }}\"> </a>
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
