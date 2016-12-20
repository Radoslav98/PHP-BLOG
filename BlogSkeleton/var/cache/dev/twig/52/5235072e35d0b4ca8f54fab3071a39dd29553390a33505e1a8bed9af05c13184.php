<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4e7adb1e9c3d65ab57898739fd27b26f32e60c36954e05daede97b46de575b5a extends Twig_Template
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
        $__internal_f61683833b5dd19fee27094d157dedf2d7b1e4d3564df653db3e38a1c8990867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61683833b5dd19fee27094d157dedf2d7b1e4d3564df653db3e38a1c8990867->enter($__internal_f61683833b5dd19fee27094d157dedf2d7b1e4d3564df653db3e38a1c8990867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f61683833b5dd19fee27094d157dedf2d7b1e4d3564df653db3e38a1c8990867->leave($__internal_f61683833b5dd19fee27094d157dedf2d7b1e4d3564df653db3e38a1c8990867_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
