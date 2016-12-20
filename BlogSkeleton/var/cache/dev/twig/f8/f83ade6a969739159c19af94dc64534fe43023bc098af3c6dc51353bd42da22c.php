<?php

/* admin/user/all.html.twig */
class __TwigTemplate_5ff90534af40b0402385ddd4fbf53c07db34cc80bbde9706dd71cd18d414c8e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/all.html.twig", 1);
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
        $__internal_2c10efdeddf96f67b4acb5d57a945a425352b9bff72df234e94754439426b850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c10efdeddf96f67b4acb5d57a945a425352b9bff72df234e94754439426b850->enter($__internal_2c10efdeddf96f67b4acb5d57a945a425352b9bff72df234e94754439426b850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c10efdeddf96f67b4acb5d57a945a425352b9bff72df234e94754439426b850->leave($__internal_2c10efdeddf96f67b4acb5d57a945a425352b9bff72df234e94754439426b850_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e7bcd89450f296b39b5b5c258bb23c211e26755e6d38e82f4ea1ab5024cd3b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bcd89450f296b39b5b5c258bb23c211e26755e6d38e82f4ea1ab5024cd3b92->enter($__internal_e7bcd89450f296b39b5b5c258bb23c211e26755e6d38e82f4ea1ab5024cd3b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Full name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "        <tr>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullName", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">Edit</a> </td>
            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\">Delete</a> </td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>
";
        
        $__internal_e7bcd89450f296b39b5b5c258bb23c211e26755e6d38e82f4ea1ab5024cd3b92->leave($__internal_e7bcd89450f296b39b5b5c258bb23c211e26755e6d38e82f4ea1ab5024cd3b92_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Full name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        {% for user in users %}
        <tr>
            <td>{{ user.id }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.fullName }}</td>
            <td><a href=\"{{ path('admin_user_edit', {id:user.id}) }}\" class=\"btn btn-xs btn-success\">Edit</a> </td>
            <td><a href=\"{{ path('admin_user_delete', {id:user.id}) }}\" class=\"btn btn-xs btn-danger\">Delete</a> </td>
        </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}";
    }
}
