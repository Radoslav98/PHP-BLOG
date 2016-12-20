<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_32dacaffd870febb89c0d03ec7c43b2405d0d51e36a2f1e917d60e124fa063d3 extends Twig_Template
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
        $__internal_32b21545b9a3cfcc450438e86c918345205aecac20225fd65d2f21d4d647f207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b21545b9a3cfcc450438e86c918345205aecac20225fd65d2f21d4d647f207->enter($__internal_32b21545b9a3cfcc450438e86c918345205aecac20225fd65d2f21d4d647f207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_32b21545b9a3cfcc450438e86c918345205aecac20225fd65d2f21d4d647f207->leave($__internal_32b21545b9a3cfcc450438e86c918345205aecac20225fd65d2f21d4d647f207_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1fb49648cec82a0b8a662e8c5a7a626fa6139d4cf3066be17b6e3dcac526eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1fb49648cec82a0b8a662e8c5a7a626fa6139d4cf3066be17b6e3dcac526eec->enter($__internal_c1fb49648cec82a0b8a662e8c5a7a626fa6139d4cf3066be17b6e3dcac526eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c1fb49648cec82a0b8a662e8c5a7a626fa6139d4cf3066be17b6e3dcac526eec->leave($__internal_c1fb49648cec82a0b8a662e8c5a7a626fa6139d4cf3066be17b6e3dcac526eec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
