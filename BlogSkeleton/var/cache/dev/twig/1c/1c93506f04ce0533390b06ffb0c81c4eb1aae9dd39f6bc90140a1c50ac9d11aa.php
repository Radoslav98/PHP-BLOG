<?php

/* ::base.html.twig */
class __TwigTemplate_0735efa1228bb832d6080706c623c566d763eb2c1e3a49ed225e2ea57f818428 extends Twig_Template
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
        $__internal_6e040694f07385a4c062b5fe6e0783ba13cd1ede348f8bc5e7aaae95ecc6e6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e040694f07385a4c062b5fe6e0783ba13cd1ede348f8bc5e7aaae95ecc6e6db->enter($__internal_6e040694f07385a4c062b5fe6e0783ba13cd1ede348f8bc5e7aaae95ecc6e6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6e040694f07385a4c062b5fe6e0783ba13cd1ede348f8bc5e7aaae95ecc6e6db->leave($__internal_6e040694f07385a4c062b5fe6e0783ba13cd1ede348f8bc5e7aaae95ecc6e6db_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_bed4aecff69736c8c02874d1e8bb38d1bedce207553e6706a54fe71464c4653e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed4aecff69736c8c02874d1e8bb38d1bedce207553e6706a54fe71464c4653e->enter($__internal_bed4aecff69736c8c02874d1e8bb38d1bedce207553e6706a54fe71464c4653e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_bed4aecff69736c8c02874d1e8bb38d1bedce207553e6706a54fe71464c4653e->leave($__internal_bed4aecff69736c8c02874d1e8bb38d1bedce207553e6706a54fe71464c4653e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_062b4ca5aaea0b7f672414e61edfb2833dd9006fce6fccbdce2a83c313b47ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062b4ca5aaea0b7f672414e61edfb2833dd9006fce6fccbdce2a83c313b47ffe->enter($__internal_062b4ca5aaea0b7f672414e61edfb2833dd9006fce6fccbdce2a83c313b47ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_062b4ca5aaea0b7f672414e61edfb2833dd9006fce6fccbdce2a83c313b47ffe->leave($__internal_062b4ca5aaea0b7f672414e61edfb2833dd9006fce6fccbdce2a83c313b47ffe_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2b31bd307b8b6fa13ef719e3434c5212994ab116837b88d105b65e33de4d2eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b31bd307b8b6fa13ef719e3434c5212994ab116837b88d105b65e33de4d2eec->enter($__internal_2b31bd307b8b6fa13ef719e3434c5212994ab116837b88d105b65e33de4d2eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_2b31bd307b8b6fa13ef719e3434c5212994ab116837b88d105b65e33de4d2eec->leave($__internal_2b31bd307b8b6fa13ef719e3434c5212994ab116837b88d105b65e33de4d2eec_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_a5e0101a3a0e67d950d97f1129989204d9d7419076486c1f40c558611da312ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e0101a3a0e67d950d97f1129989204d9d7419076486c1f40c558611da312ac->enter($__internal_a5e0101a3a0e67d950d97f1129989204d9d7419076486c1f40c558611da312ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_a5e0101a3a0e67d950d97f1129989204d9d7419076486c1f40c558611da312ac->leave($__internal_a5e0101a3a0e67d950d97f1129989204d9d7419076486c1f40c558611da312ac_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e4145d152f87da96a5305e6a0369d42185df726487995dd818bdba6942c831f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4145d152f87da96a5305e6a0369d42185df726487995dd818bdba6942c831f->enter($__internal_3e4145d152f87da96a5305e6a0369d42185df726487995dd818bdba6942c831f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e4145d152f87da96a5305e6a0369d42185df726487995dd818bdba6942c831f->leave($__internal_3e4145d152f87da96a5305e6a0369d42185df726487995dd818bdba6942c831f_prof);

    }

    // line 75
    public function block_main($context, array $blocks = array())
    {
        $__internal_39041182b7b5a616c30cd482362b4247d94b64c16d093a2ac24ebbfefcf3edaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39041182b7b5a616c30cd482362b4247d94b64c16d093a2ac24ebbfefcf3edaa->enter($__internal_39041182b7b5a616c30cd482362b4247d94b64c16d093a2ac24ebbfefcf3edaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_39041182b7b5a616c30cd482362b4247d94b64c16d093a2ac24ebbfefcf3edaa->leave($__internal_39041182b7b5a616c30cd482362b4247d94b64c16d093a2ac24ebbfefcf3edaa_prof);

    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        $__internal_07fe1ccaacc903d50a5baff6d0b2003dfe4e81cf167c197e65423de20e9fd6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fe1ccaacc903d50a5baff6d0b2003dfe4e81cf167c197e65423de20e9fd6ca->enter($__internal_07fe1ccaacc903d50a5baff6d0b2003dfe4e81cf167c197e65423de20e9fd6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 82
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_07fe1ccaacc903d50a5baff6d0b2003dfe4e81cf167c197e65423de20e9fd6ca->leave($__internal_07fe1ccaacc903d50a5baff6d0b2003dfe4e81cf167c197e65423de20e9fd6ca_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b1ee813eb68bad320fc86d1642bd77d363f41a914d67445192505ee57824a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1ee813eb68bad320fc86d1642bd77d363f41a914d67445192505ee57824a2e->enter($__internal_0b1ee813eb68bad320fc86d1642bd77d363f41a914d67445192505ee57824a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0b1ee813eb68bad320fc86d1642bd77d363f41a914d67445192505ee57824a2e->leave($__internal_0b1ee813eb68bad320fc86d1642bd77d363f41a914d67445192505ee57824a2e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
