<?php

/* form/fields.html.twig */
class __TwigTemplate_82ae075717b0a745c085cae7b509a60c21de5061dca68a2a6b096208bff39362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4d08ef408172e4e437315d1f6a60307fde9f507767676e40945db1ff598dfdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d08ef408172e4e437315d1f6a60307fde9f507767676e40945db1ff598dfdf->enter($__internal_c4d08ef408172e4e437315d1f6a60307fde9f507767676e40945db1ff598dfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_c4d08ef408172e4e437315d1f6a60307fde9f507767676e40945db1ff598dfdf->leave($__internal_c4d08ef408172e4e437315d1f6a60307fde9f507767676e40945db1ff598dfdf_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_3ad478f4e998de6909089e285f5d0ae774a6404d41306dc209b89d6a9f819867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad478f4e998de6909089e285f5d0ae774a6404d41306dc209b89d6a9f819867->enter($__internal_3ad478f4e998de6909089e285f5d0ae774a6404d41306dc209b89d6a9f819867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3ad478f4e998de6909089e285f5d0ae774a6404d41306dc209b89d6a9f819867->leave($__internal_3ad478f4e998de6909089e285f5d0ae774a6404d41306dc209b89d6a9f819867_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
