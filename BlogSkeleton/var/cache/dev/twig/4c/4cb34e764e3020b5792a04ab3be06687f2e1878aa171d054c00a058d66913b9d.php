<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a1fa470f1741961d2396c492edbc54bb424075a6aa7186d1b69130986fa966b6 extends Twig_Template
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
        $__internal_4f54b6678406ccce8f620edd788f1923324c36c551b0687b414df39815743d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f54b6678406ccce8f620edd788f1923324c36c551b0687b414df39815743d97->enter($__internal_4f54b6678406ccce8f620edd788f1923324c36c551b0687b414df39815743d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4f54b6678406ccce8f620edd788f1923324c36c551b0687b414df39815743d97->leave($__internal_4f54b6678406ccce8f620edd788f1923324c36c551b0687b414df39815743d97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
