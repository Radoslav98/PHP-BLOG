<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_639c3f7c54c8b16bdf99f76ab8a99e5fcb7e8281e8188d6f6f3761e08f8dadbd extends Twig_Template
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
        $__internal_a966fb7c2ddc6af7a8ba6cb3d02ef91366866e9b91a76ee2d55ba4fc6e0daaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a966fb7c2ddc6af7a8ba6cb3d02ef91366866e9b91a76ee2d55ba4fc6e0daaf9->enter($__internal_a966fb7c2ddc6af7a8ba6cb3d02ef91366866e9b91a76ee2d55ba4fc6e0daaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a966fb7c2ddc6af7a8ba6cb3d02ef91366866e9b91a76ee2d55ba4fc6e0daaf9->leave($__internal_a966fb7c2ddc6af7a8ba6cb3d02ef91366866e9b91a76ee2d55ba4fc6e0daaf9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
