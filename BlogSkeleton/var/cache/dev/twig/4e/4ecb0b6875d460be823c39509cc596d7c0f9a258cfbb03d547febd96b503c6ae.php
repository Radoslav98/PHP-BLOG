<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_987fd388076bd0be0cbd5b243d49b9894cfd21d50b6104f1517ff2d9da4ca52f extends Twig_Template
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
        $__internal_19f716fb205c9506b743b38fadb519162cee9fc3bd85a80f1fb0c1aeb4798081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f716fb205c9506b743b38fadb519162cee9fc3bd85a80f1fb0c1aeb4798081->enter($__internal_19f716fb205c9506b743b38fadb519162cee9fc3bd85a80f1fb0c1aeb4798081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_19f716fb205c9506b743b38fadb519162cee9fc3bd85a80f1fb0c1aeb4798081->leave($__internal_19f716fb205c9506b743b38fadb519162cee9fc3bd85a80f1fb0c1aeb4798081_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
