<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_db42b80897f4d084ac557ee15ddd8e14d587970dd6a5a2df286ec1f4f41604c7 extends Twig_Template
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
        $__internal_24c34e630674fd8efe7880e3a93c2929210f021ede142e31ee045cab933a5a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c34e630674fd8efe7880e3a93c2929210f021ede142e31ee045cab933a5a0c->enter($__internal_24c34e630674fd8efe7880e3a93c2929210f021ede142e31ee045cab933a5a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_24c34e630674fd8efe7880e3a93c2929210f021ede142e31ee045cab933a5a0c->leave($__internal_24c34e630674fd8efe7880e3a93c2929210f021ede142e31ee045cab933a5a0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
