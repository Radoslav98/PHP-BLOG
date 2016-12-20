<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_50490e10b13761882f8cd80554619f896f63637cabf34c4346aad9e8e4480390 extends Twig_Template
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
        $__internal_d690802b49a0f6766c653af361087cd3f8063ba0bbc4fc89bf5ee6ee8c2865c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d690802b49a0f6766c653af361087cd3f8063ba0bbc4fc89bf5ee6ee8c2865c1->enter($__internal_d690802b49a0f6766c653af361087cd3f8063ba0bbc4fc89bf5ee6ee8c2865c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d690802b49a0f6766c653af361087cd3f8063ba0bbc4fc89bf5ee6ee8c2865c1->leave($__internal_d690802b49a0f6766c653af361087cd3f8063ba0bbc4fc89bf5ee6ee8c2865c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
