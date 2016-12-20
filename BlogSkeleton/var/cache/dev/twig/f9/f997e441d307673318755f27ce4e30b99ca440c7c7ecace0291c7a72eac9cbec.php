<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4e4be2c69c3fe5d5611de542b872cae56b06bc69bc67daae90893a7acb36ab4a extends Twig_Template
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
        $__internal_b380248163856f035a73b999f32f0cac12f5d429c2937f72b91ac6c9f2e9ee43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b380248163856f035a73b999f32f0cac12f5d429c2937f72b91ac6c9f2e9ee43->enter($__internal_b380248163856f035a73b999f32f0cac12f5d429c2937f72b91ac6c9f2e9ee43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b380248163856f035a73b999f32f0cac12f5d429c2937f72b91ac6c9f2e9ee43->leave($__internal_b380248163856f035a73b999f32f0cac12f5d429c2937f72b91ac6c9f2e9ee43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
