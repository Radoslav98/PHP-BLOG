<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b3cc032df3b4a1181c72765b4b17da17ee1a238d93374af013d1643f1995a5d5 extends Twig_Template
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
        $__internal_e497ed496291b001d37ce303a9390d65b0e68dbdd45b68dae7f87958f59b64a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e497ed496291b001d37ce303a9390d65b0e68dbdd45b68dae7f87958f59b64a7->enter($__internal_e497ed496291b001d37ce303a9390d65b0e68dbdd45b68dae7f87958f59b64a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e497ed496291b001d37ce303a9390d65b0e68dbdd45b68dae7f87958f59b64a7->leave($__internal_e497ed496291b001d37ce303a9390d65b0e68dbdd45b68dae7f87958f59b64a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
