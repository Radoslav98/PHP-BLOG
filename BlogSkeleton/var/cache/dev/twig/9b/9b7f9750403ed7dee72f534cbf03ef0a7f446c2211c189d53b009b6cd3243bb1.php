<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a5ba58b63a702745e73aaf93928e4a037965d16ed741952f3788ac3a45f57882 extends Twig_Template
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
        $__internal_85afe9474d5ad164501c81f1db14a755b646716bce1257dc29e70788970ef5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85afe9474d5ad164501c81f1db14a755b646716bce1257dc29e70788970ef5ab->enter($__internal_85afe9474d5ad164501c81f1db14a755b646716bce1257dc29e70788970ef5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_85afe9474d5ad164501c81f1db14a755b646716bce1257dc29e70788970ef5ab->leave($__internal_85afe9474d5ad164501c81f1db14a755b646716bce1257dc29e70788970ef5ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
