<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_71e2996cb7bf8a49523e325c392a6e51043a8e18aa9153e6892bd8a42deeb902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8987443177bc330df0027e12f52dc3a60d81b2609e09f357ae47926378f8993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8987443177bc330df0027e12f52dc3a60d81b2609e09f357ae47926378f8993->enter($__internal_f8987443177bc330df0027e12f52dc3a60d81b2609e09f357ae47926378f8993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f8987443177bc330df0027e12f52dc3a60d81b2609e09f357ae47926378f8993->leave($__internal_f8987443177bc330df0027e12f52dc3a60d81b2609e09f357ae47926378f8993_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->widget(\$form) ?>
";
    }
}
