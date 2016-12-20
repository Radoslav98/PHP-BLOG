<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4a82cce1b043d50da65215045d42873a2c916f0780b8e358c3619ef2ff8a538c extends Twig_Template
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
        $__internal_0e2533579109b685d107b31799fd69641bc3540911c804b54e23929d369b8eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2533579109b685d107b31799fd69641bc3540911c804b54e23929d369b8eee->enter($__internal_0e2533579109b685d107b31799fd69641bc3540911c804b54e23929d369b8eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0e2533579109b685d107b31799fd69641bc3540911c804b54e23929d369b8eee->leave($__internal_0e2533579109b685d107b31799fd69641bc3540911c804b54e23929d369b8eee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
