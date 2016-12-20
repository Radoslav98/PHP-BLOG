<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1124321dddf9834d743f4d4d45fff130afbab4450896ecd63dff250ee4cbe355 extends Twig_Template
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
        $__internal_e1f34495359c362af425660ecca6403ba76042ffbb340df44c11fc20a80e06ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f34495359c362af425660ecca6403ba76042ffbb340df44c11fc20a80e06ef->enter($__internal_e1f34495359c362af425660ecca6403ba76042ffbb340df44c11fc20a80e06ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e1f34495359c362af425660ecca6403ba76042ffbb340df44c11fc20a80e06ef->leave($__internal_e1f34495359c362af425660ecca6403ba76042ffbb340df44c11fc20a80e06ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
