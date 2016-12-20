<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8d151b778d2bd519809d371f2595c1d178b69cf037a0365cb61fcffc319cdd27 extends Twig_Template
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
        $__internal_71dd1120f8e5c29f48f8389b1885639b238998334a4b8394e4f09608a8e264c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71dd1120f8e5c29f48f8389b1885639b238998334a4b8394e4f09608a8e264c6->enter($__internal_71dd1120f8e5c29f48f8389b1885639b238998334a4b8394e4f09608a8e264c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_71dd1120f8e5c29f48f8389b1885639b238998334a4b8394e4f09608a8e264c6->leave($__internal_71dd1120f8e5c29f48f8389b1885639b238998334a4b8394e4f09608a8e264c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
