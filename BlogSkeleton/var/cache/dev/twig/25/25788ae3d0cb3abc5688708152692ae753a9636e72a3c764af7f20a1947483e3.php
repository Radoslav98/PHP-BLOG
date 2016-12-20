<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ed23755bacf7d75dd1c4b0bc6694f82f6ee839f38ac905d98949755272fd4f4f extends Twig_Template
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
        $__internal_b9a07e26bd6279f89c67a47da007872b05c795720f08677a171734df60cd7a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a07e26bd6279f89c67a47da007872b05c795720f08677a171734df60cd7a53->enter($__internal_b9a07e26bd6279f89c67a47da007872b05c795720f08677a171734df60cd7a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b9a07e26bd6279f89c67a47da007872b05c795720f08677a171734df60cd7a53->leave($__internal_b9a07e26bd6279f89c67a47da007872b05c795720f08677a171734df60cd7a53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
