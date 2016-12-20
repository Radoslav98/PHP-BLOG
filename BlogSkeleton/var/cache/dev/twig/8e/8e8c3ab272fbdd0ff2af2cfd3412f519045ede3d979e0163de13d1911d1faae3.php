<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c60570b43cf55cd2de2df22850a7ba886e218aa4ff3613d09e9e83c2e4f56526 extends Twig_Template
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
        $__internal_457b27e8ed341fe48e4fe115a11988f3a06b5ac07c7debd895ed1e6b9d682ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457b27e8ed341fe48e4fe115a11988f3a06b5ac07c7debd895ed1e6b9d682ff3->enter($__internal_457b27e8ed341fe48e4fe115a11988f3a06b5ac07c7debd895ed1e6b9d682ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_457b27e8ed341fe48e4fe115a11988f3a06b5ac07c7debd895ed1e6b9d682ff3->leave($__internal_457b27e8ed341fe48e4fe115a11988f3a06b5ac07c7debd895ed1e6b9d682ff3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
