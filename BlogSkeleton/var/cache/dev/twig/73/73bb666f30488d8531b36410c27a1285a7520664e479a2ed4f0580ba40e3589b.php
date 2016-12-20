<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_641e652352f54aa9af1032715b908726806266f12d0118df07f18a07c59945f0 extends Twig_Template
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
        $__internal_d69b89eddeb867aeefb703d7fd8a348a9735dabd5ffb739904f29293db1cd7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69b89eddeb867aeefb703d7fd8a348a9735dabd5ffb739904f29293db1cd7e9->enter($__internal_d69b89eddeb867aeefb703d7fd8a348a9735dabd5ffb739904f29293db1cd7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d69b89eddeb867aeefb703d7fd8a348a9735dabd5ffb739904f29293db1cd7e9->leave($__internal_d69b89eddeb867aeefb703d7fd8a348a9735dabd5ffb739904f29293db1cd7e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
