<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b1726eb29aa9128ca4e03d2178941d9876c3df63a8ae936bcfb6666cb23a4145 extends Twig_Template
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
        $__internal_a5ef03656bec7b0a0c85b7d791a8f35de53653d82531d6a0d3dbf2fa6df61b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ef03656bec7b0a0c85b7d791a8f35de53653d82531d6a0d3dbf2fa6df61b81->enter($__internal_a5ef03656bec7b0a0c85b7d791a8f35de53653d82531d6a0d3dbf2fa6df61b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a5ef03656bec7b0a0c85b7d791a8f35de53653d82531d6a0d3dbf2fa6df61b81->leave($__internal_a5ef03656bec7b0a0c85b7d791a8f35de53653d82531d6a0d3dbf2fa6df61b81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
