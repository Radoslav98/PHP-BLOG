<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a3e2f4358947274f372bbc48d742bff7eee89142e8aa076534bd623ad1eda5b4 extends Twig_Template
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
        $__internal_705ebfbf5ba155e9cb0e6dbf6ed7c9ba4d91ceef65d81acd862a25344f75563e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705ebfbf5ba155e9cb0e6dbf6ed7c9ba4d91ceef65d81acd862a25344f75563e->enter($__internal_705ebfbf5ba155e9cb0e6dbf6ed7c9ba4d91ceef65d81acd862a25344f75563e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_705ebfbf5ba155e9cb0e6dbf6ed7c9ba4d91ceef65d81acd862a25344f75563e->leave($__internal_705ebfbf5ba155e9cb0e6dbf6ed7c9ba4d91ceef65d81acd862a25344f75563e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
