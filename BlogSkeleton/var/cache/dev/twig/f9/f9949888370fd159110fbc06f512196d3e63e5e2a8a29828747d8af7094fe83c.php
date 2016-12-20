<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_28573b583cd791ce9f846ec656897607aac7c3d653156a007f9548ad1c8ce8c7 extends Twig_Template
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
        $__internal_cb81bd954d5b66092ce469c48da1b49cbbefda563c41d10221f3a98417d4d0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb81bd954d5b66092ce469c48da1b49cbbefda563c41d10221f3a98417d4d0b8->enter($__internal_cb81bd954d5b66092ce469c48da1b49cbbefda563c41d10221f3a98417d4d0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cb81bd954d5b66092ce469c48da1b49cbbefda563c41d10221f3a98417d4d0b8->leave($__internal_cb81bd954d5b66092ce469c48da1b49cbbefda563c41d10221f3a98417d4d0b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
