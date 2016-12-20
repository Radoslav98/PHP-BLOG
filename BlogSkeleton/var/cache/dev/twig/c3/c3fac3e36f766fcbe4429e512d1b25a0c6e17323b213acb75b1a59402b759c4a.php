<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fabc503b04ffebd7356275a792a56866f0667a82c3ea3c4b88513a68d9908653 extends Twig_Template
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
        $__internal_c749cf7fac5d3290e9165ffd313817d489f065ec982ce680778adad2b9d94130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c749cf7fac5d3290e9165ffd313817d489f065ec982ce680778adad2b9d94130->enter($__internal_c749cf7fac5d3290e9165ffd313817d489f065ec982ce680778adad2b9d94130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c749cf7fac5d3290e9165ffd313817d489f065ec982ce680778adad2b9d94130->leave($__internal_c749cf7fac5d3290e9165ffd313817d489f065ec982ce680778adad2b9d94130_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
