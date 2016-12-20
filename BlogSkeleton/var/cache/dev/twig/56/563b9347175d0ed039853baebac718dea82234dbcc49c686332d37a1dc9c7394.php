<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_fe09fe49992006294298c04702c9a7e52da345d5a61b925310243889d7b87c21 extends Twig_Template
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
        $__internal_54b33f6bd36ccd9bb69841ba13f516b23a88d7f563aaf236c5fced83a1ca02d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b33f6bd36ccd9bb69841ba13f516b23a88d7f563aaf236c5fced83a1ca02d6->enter($__internal_54b33f6bd36ccd9bb69841ba13f516b23a88d7f563aaf236c5fced83a1ca02d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_54b33f6bd36ccd9bb69841ba13f516b23a88d7f563aaf236c5fced83a1ca02d6->leave($__internal_54b33f6bd36ccd9bb69841ba13f516b23a88d7f563aaf236c5fced83a1ca02d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
