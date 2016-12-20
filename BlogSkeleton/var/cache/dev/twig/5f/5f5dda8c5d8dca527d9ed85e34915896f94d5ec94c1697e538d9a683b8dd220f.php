<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fe8520aa21dc06027e62a9d180e9337603bec7e17294d029f56b1998ba7e2e1b extends Twig_Template
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
        $__internal_87356189e5948697e05a27297a170ecb7a8d9da48f120c59d384765729725a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87356189e5948697e05a27297a170ecb7a8d9da48f120c59d384765729725a0b->enter($__internal_87356189e5948697e05a27297a170ecb7a8d9da48f120c59d384765729725a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_87356189e5948697e05a27297a170ecb7a8d9da48f120c59d384765729725a0b->leave($__internal_87356189e5948697e05a27297a170ecb7a8d9da48f120c59d384765729725a0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
