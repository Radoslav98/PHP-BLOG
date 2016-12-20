<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1b9554f70bb971a1e3306aa1c77cc8a3d1396061f877ecf77f1df7595c070b71 extends Twig_Template
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
        $__internal_696abbd47feabccb5fc828fe2e3cb39fa34d5dea7cb3427dad5c1cd41a84b867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696abbd47feabccb5fc828fe2e3cb39fa34d5dea7cb3427dad5c1cd41a84b867->enter($__internal_696abbd47feabccb5fc828fe2e3cb39fa34d5dea7cb3427dad5c1cd41a84b867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_696abbd47feabccb5fc828fe2e3cb39fa34d5dea7cb3427dad5c1cd41a84b867->leave($__internal_696abbd47feabccb5fc828fe2e3cb39fa34d5dea7cb3427dad5c1cd41a84b867_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
