<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1b0222f9861b088877d2e92fe309bd7a6c78c4dd5f576c37ad8380f4e9020aaf extends Twig_Template
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
        $__internal_4197e8e62a25eaa3a0ebfa06603313eca4124d573fdbd567978b30081e3eb709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4197e8e62a25eaa3a0ebfa06603313eca4124d573fdbd567978b30081e3eb709->enter($__internal_4197e8e62a25eaa3a0ebfa06603313eca4124d573fdbd567978b30081e3eb709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4197e8e62a25eaa3a0ebfa06603313eca4124d573fdbd567978b30081e3eb709->leave($__internal_4197e8e62a25eaa3a0ebfa06603313eca4124d573fdbd567978b30081e3eb709_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
