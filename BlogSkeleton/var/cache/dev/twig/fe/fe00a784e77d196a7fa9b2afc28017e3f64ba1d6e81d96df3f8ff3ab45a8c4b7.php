<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6631a4793b172e537b35396b5083f83d56419766ed3f506a780d0bff65c63a12 extends Twig_Template
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
        $__internal_e7cf659da5a0b7db85c1c04ad0f0ca4d31aec9d3220824592e0369443485fce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cf659da5a0b7db85c1c04ad0f0ca4d31aec9d3220824592e0369443485fce5->enter($__internal_e7cf659da5a0b7db85c1c04ad0f0ca4d31aec9d3220824592e0369443485fce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e7cf659da5a0b7db85c1c04ad0f0ca4d31aec9d3220824592e0369443485fce5->leave($__internal_e7cf659da5a0b7db85c1c04ad0f0ca4d31aec9d3220824592e0369443485fce5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
