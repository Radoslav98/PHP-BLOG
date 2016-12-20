<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e5de6be087abbeeceaaaa3fa484cdf69aa79d17b697d72c3d5db7771a8c8275c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e34654cc55f5249872492a6bbc54521b724ecdb47abf7fa7d2b93fcaaf4482f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34654cc55f5249872492a6bbc54521b724ecdb47abf7fa7d2b93fcaaf4482f7->enter($__internal_e34654cc55f5249872492a6bbc54521b724ecdb47abf7fa7d2b93fcaaf4482f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e34654cc55f5249872492a6bbc54521b724ecdb47abf7fa7d2b93fcaaf4482f7->leave($__internal_e34654cc55f5249872492a6bbc54521b724ecdb47abf7fa7d2b93fcaaf4482f7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1d0252536c64425f23891161f910d58dd1fd49c76bcb23d11d0223a1fef97c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d0252536c64425f23891161f910d58dd1fd49c76bcb23d11d0223a1fef97c6->enter($__internal_e1d0252536c64425f23891161f910d58dd1fd49c76bcb23d11d0223a1fef97c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e1d0252536c64425f23891161f910d58dd1fd49c76bcb23d11d0223a1fef97c6->leave($__internal_e1d0252536c64425f23891161f910d58dd1fd49c76bcb23d11d0223a1fef97c6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
