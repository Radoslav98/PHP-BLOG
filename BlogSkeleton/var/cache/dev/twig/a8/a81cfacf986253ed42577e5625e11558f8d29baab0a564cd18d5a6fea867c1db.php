<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4582b0668abeabc6f2675bc22dbef4691da284d8dcd6a6114de5aa8635eba047 extends Twig_Template
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
        $__internal_73cd118c165b34582258def6ed348213a72f782a48c2de5de0c2f360c49ba8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73cd118c165b34582258def6ed348213a72f782a48c2de5de0c2f360c49ba8b6->enter($__internal_73cd118c165b34582258def6ed348213a72f782a48c2de5de0c2f360c49ba8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_73cd118c165b34582258def6ed348213a72f782a48c2de5de0c2f360c49ba8b6->leave($__internal_73cd118c165b34582258def6ed348213a72f782a48c2de5de0c2f360c49ba8b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
