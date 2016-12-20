<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f811ddc553707b1b0a95fc4114bf79b40989c94674f6e93c5da242db22116c27 extends Twig_Template
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
        $__internal_8dddb55d320b19a0faaf66448d7652cbe9862c68b4da72a9bb3e2a58a1c91e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dddb55d320b19a0faaf66448d7652cbe9862c68b4da72a9bb3e2a58a1c91e3e->enter($__internal_8dddb55d320b19a0faaf66448d7652cbe9862c68b4da72a9bb3e2a58a1c91e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8dddb55d320b19a0faaf66448d7652cbe9862c68b4da72a9bb3e2a58a1c91e3e->leave($__internal_8dddb55d320b19a0faaf66448d7652cbe9862c68b4da72a9bb3e2a58a1c91e3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
