<?php

/* admin/category/all.html.twig */
class __TwigTemplate_cb3c072135655ba3b771d0807f9bbc9b4ba69d40604042ab62a1310373f39a9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/category/all.html.twig", 1);
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
        $__internal_4b845efbd2b2bbc24729ad03de5cf35f56fb12df6eae7021eb9f09340f5660a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b845efbd2b2bbc24729ad03de5cf35f56fb12df6eae7021eb9f09340f5660a0->enter($__internal_4b845efbd2b2bbc24729ad03de5cf35f56fb12df6eae7021eb9f09340f5660a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/category/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b845efbd2b2bbc24729ad03de5cf35f56fb12df6eae7021eb9f09340f5660a0->leave($__internal_4b845efbd2b2bbc24729ad03de5cf35f56fb12df6eae7021eb9f09340f5660a0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f2131d9478492dc151e419b43264ad3734434103699d574a9ec8cfbe7e2383b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2131d9478492dc151e419b43264ad3734434103699d574a9ec8cfbe7e2383b5->enter($__internal_f2131d9478492dc151e419b43264ad3734434103699d574a9ec8cfbe7e2383b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <td><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_create");
        echo "\" class=\"btn btn-xs btn-success\">Create</a></td>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\">Edit</a> </td>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\">Delete</a> </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>
";
        
        $__internal_f2131d9478492dc151e419b43264ad3734434103699d574a9ec8cfbe7e2383b5->leave($__internal_f2131d9478492dc151e419b43264ad3734434103699d574a9ec8cfbe7e2383b5_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  59 => 16,  55 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <td><a href=\"{{ path('admin_category_create')}}\" class=\"btn btn-xs btn-success\">Create</a></td>
    <table class=\"table table-striped table-hover \">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td>{{ category.id }}</td>
                <td>{{ category.name }}</td>
                <td><a href=\"{{ path('admin_category_edit', {id:category.id}) }}\" class=\"btn btn-xs btn-success\">Edit</a> </td>
                <td><a href=\"{{ path('admin_category_delete', {id:category.id}) }}\" class=\"btn btn-xs btn-danger\">Delete</a> </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}";
    }
}
