<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d596ed2866e49f2f93ceec7f0d429e024e1459a0607917de9a2de211530ebb60 extends Twig_Template
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
        $__internal_d2597619f3298c932e49a118e10d4aaa39ddfec6d24a54aad6721382279a8a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2597619f3298c932e49a118e10d4aaa39ddfec6d24a54aad6721382279a8a50->enter($__internal_d2597619f3298c932e49a118e10d4aaa39ddfec6d24a54aad6721382279a8a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d2597619f3298c932e49a118e10d4aaa39ddfec6d24a54aad6721382279a8a50->leave($__internal_d2597619f3298c932e49a118e10d4aaa39ddfec6d24a54aad6721382279a8a50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
