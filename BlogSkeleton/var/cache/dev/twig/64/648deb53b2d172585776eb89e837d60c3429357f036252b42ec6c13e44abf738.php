<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_96f0848a1c4144e73952d245b09946a9aa3c8f7d139b7a7980d0fa37f565372b extends Twig_Template
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
        $__internal_02b0be236c8678332ade370dd0746715be10bfb6257976751ee231808d0af905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b0be236c8678332ade370dd0746715be10bfb6257976751ee231808d0af905->enter($__internal_02b0be236c8678332ade370dd0746715be10bfb6257976751ee231808d0af905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_02b0be236c8678332ade370dd0746715be10bfb6257976751ee231808d0af905->leave($__internal_02b0be236c8678332ade370dd0746715be10bfb6257976751ee231808d0af905_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
