<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_f482486b15375da4659c7595310d2c7ec6d284284589f88723957c212aa51cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8733710ae3bfb533e61a284711812a159ef053c91575606060e525f6bf174535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8733710ae3bfb533e61a284711812a159ef053c91575606060e525f6bf174535->enter($__internal_8733710ae3bfb533e61a284711812a159ef053c91575606060e525f6bf174535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 136
        echo "
";
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('form_label', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('choice_label', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('radio_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 182
        echo "
";
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('form_row', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('button_row', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('choice_row', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('date_row', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('time_row', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('radio_row', $context, $blocks);
        // line 232
        echo "
";
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8733710ae3bfb533e61a284711812a159ef053c91575606060e525f6bf174535->leave($__internal_8733710ae3bfb533e61a284711812a159ef053c91575606060e525f6bf174535_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e32fbe7590192235df22d0ca2bceaa56408fdebee09fc351a7a9cabfb9de44d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32fbe7590192235df22d0ca2bceaa56408fdebee09fc351a7a9cabfb9de44d0->enter($__internal_e32fbe7590192235df22d0ca2bceaa56408fdebee09fc351a7a9cabfb9de44d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e32fbe7590192235df22d0ca2bceaa56408fdebee09fc351a7a9cabfb9de44d0->leave($__internal_e32fbe7590192235df22d0ca2bceaa56408fdebee09fc351a7a9cabfb9de44d0_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_6c522b6d540707d2de54d01d80fee1ae82ebbcdd66856f954c0719e726be4362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c522b6d540707d2de54d01d80fee1ae82ebbcdd66856f954c0719e726be4362->enter($__internal_6c522b6d540707d2de54d01d80fee1ae82ebbcdd66856f954c0719e726be4362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6c522b6d540707d2de54d01d80fee1ae82ebbcdd66856f954c0719e726be4362->leave($__internal_6c522b6d540707d2de54d01d80fee1ae82ebbcdd66856f954c0719e726be4362_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8ae504f093ade6604cbab151f7a2ea3b543aa95d3cf616848efec558d9c2afd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae504f093ade6604cbab151f7a2ea3b543aa95d3cf616848efec558d9c2afd8->enter($__internal_8ae504f093ade6604cbab151f7a2ea3b543aa95d3cf616848efec558d9c2afd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8ae504f093ade6604cbab151f7a2ea3b543aa95d3cf616848efec558d9c2afd8->leave($__internal_8ae504f093ade6604cbab151f7a2ea3b543aa95d3cf616848efec558d9c2afd8_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e5477126d2573dd179b22757fc5ab08ab92ba33f82539c40c368d81f775b5413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5477126d2573dd179b22757fc5ab08ab92ba33f82539c40c368d81f775b5413->enter($__internal_e5477126d2573dd179b22757fc5ab08ab92ba33f82539c40c368d81f775b5413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_90ac7e2e94480f51392c46ca82593ff06c41a51dce1e3e1a4d157e509ba65c07 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_05429d3129396ddf8e8332a8493d149e31e2b6ce794cb4565fe5565960fae1d9 = "{{") && ('' === $__internal_05429d3129396ddf8e8332a8493d149e31e2b6ce794cb4565fe5565960fae1d9 || 0 === strpos($__internal_90ac7e2e94480f51392c46ca82593ff06c41a51dce1e3e1a4d157e509ba65c07, $__internal_05429d3129396ddf8e8332a8493d149e31e2b6ce794cb4565fe5565960fae1d9)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_e5477126d2573dd179b22757fc5ab08ab92ba33f82539c40c368d81f775b5413->leave($__internal_e5477126d2573dd179b22757fc5ab08ab92ba33f82539c40c368d81f775b5413_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6e9a11c269dccd93b6752cd58916161a9419e1d33c31e3307eba062e05a31355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9a11c269dccd93b6752cd58916161a9419e1d33c31e3307eba062e05a31355->enter($__internal_6e9a11c269dccd93b6752cd58916161a9419e1d33c31e3307eba062e05a31355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_6e9a11c269dccd93b6752cd58916161a9419e1d33c31e3307eba062e05a31355->leave($__internal_6e9a11c269dccd93b6752cd58916161a9419e1d33c31e3307eba062e05a31355_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2e2c7f11247c293f37d4a062c2f546283b765d8bab6dd3a00c575051489c9443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2c7f11247c293f37d4a062c2f546283b765d8bab6dd3a00c575051489c9443->enter($__internal_2e2c7f11247c293f37d4a062c2f546283b765d8bab6dd3a00c575051489c9443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_2e2c7f11247c293f37d4a062c2f546283b765d8bab6dd3a00c575051489c9443->leave($__internal_2e2c7f11247c293f37d4a062c2f546283b765d8bab6dd3a00c575051489c9443_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_01d0191a66d69e218defa418aff8da0d11367bb4400c2ac70cdd30661ce0b322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d0191a66d69e218defa418aff8da0d11367bb4400c2ac70cdd30661ce0b322->enter($__internal_01d0191a66d69e218defa418aff8da0d11367bb4400c2ac70cdd30661ce0b322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_01d0191a66d69e218defa418aff8da0d11367bb4400c2ac70cdd30661ce0b322->leave($__internal_01d0191a66d69e218defa418aff8da0d11367bb4400c2ac70cdd30661ce0b322_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ef4350b8280f670d019f4438102722255e29911ee5edce7839e596118b480059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4350b8280f670d019f4438102722255e29911ee5edce7839e596118b480059->enter($__internal_ef4350b8280f670d019f4438102722255e29911ee5edce7839e596118b480059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_ef4350b8280f670d019f4438102722255e29911ee5edce7839e596118b480059->leave($__internal_ef4350b8280f670d019f4438102722255e29911ee5edce7839e596118b480059_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4538f4599d5089ab8cb283dcd7b05c478cfc22f2bd220425295dc53e09f3d5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4538f4599d5089ab8cb283dcd7b05c478cfc22f2bd220425295dc53e09f3d5b2->enter($__internal_4538f4599d5089ab8cb283dcd7b05c478cfc22f2bd220425295dc53e09f3d5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_4538f4599d5089ab8cb283dcd7b05c478cfc22f2bd220425295dc53e09f3d5b2->leave($__internal_4538f4599d5089ab8cb283dcd7b05c478cfc22f2bd220425295dc53e09f3d5b2_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_1998ee52691598746f984409470b50a44a7d783397d1c828f3e618ee23dc7598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1998ee52691598746f984409470b50a44a7d783397d1c828f3e618ee23dc7598->enter($__internal_1998ee52691598746f984409470b50a44a7d783397d1c828f3e618ee23dc7598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 98
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 99
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 100
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 104
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 106
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 107
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 108
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "</div>";
        }
        
        $__internal_1998ee52691598746f984409470b50a44a7d783397d1c828f3e618ee23dc7598->leave($__internal_1998ee52691598746f984409470b50a44a7d783397d1c828f3e618ee23dc7598_prof);

    }

    // line 115
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0ead09ecaa4ef5acdcbb0f9ea9e175092b227eaf97b8da771d8836ab471f76fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ead09ecaa4ef5acdcbb0f9ea9e175092b227eaf97b8da771d8836ab471f76fb->enter($__internal_0ead09ecaa4ef5acdcbb0f9ea9e175092b227eaf97b8da771d8836ab471f76fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 116
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 117
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 118
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 120
            echo "<div class=\"checkbox\">";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 122
            echo "</div>";
        }
        
        $__internal_0ead09ecaa4ef5acdcbb0f9ea9e175092b227eaf97b8da771d8836ab471f76fb->leave($__internal_0ead09ecaa4ef5acdcbb0f9ea9e175092b227eaf97b8da771d8836ab471f76fb_prof);

    }

    // line 126
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6656d1a1c61c79efe06c99dc45042b2d5f4e684f9438591d383c63d85cb65481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6656d1a1c61c79efe06c99dc45042b2d5f4e684f9438591d383c63d85cb65481->enter($__internal_6656d1a1c61c79efe06c99dc45042b2d5f4e684f9438591d383c63d85cb65481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 127
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 128
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 131
            echo "<div class=\"radio\">";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 133
            echo "</div>";
        }
        
        $__internal_6656d1a1c61c79efe06c99dc45042b2d5f4e684f9438591d383c63d85cb65481->leave($__internal_6656d1a1c61c79efe06c99dc45042b2d5f4e684f9438591d383c63d85cb65481_prof);

    }

    // line 139
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ebf54c7dad958e78f34eb5562b7772bc982fc74f24bbddafe099468330b95b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf54c7dad958e78f34eb5562b7772bc982fc74f24bbddafe099468330b95b0a->enter($__internal_ebf54c7dad958e78f34eb5562b7772bc982fc74f24bbddafe099468330b95b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 140
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 141
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ebf54c7dad958e78f34eb5562b7772bc982fc74f24bbddafe099468330b95b0a->leave($__internal_ebf54c7dad958e78f34eb5562b7772bc982fc74f24bbddafe099468330b95b0a_prof);

    }

    // line 144
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_27755b9967745fb30fa9ca2664d28cb062e442040cea0ed85b32d74d2528a08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27755b9967745fb30fa9ca2664d28cb062e442040cea0ed85b32d74d2528a08a->enter($__internal_27755b9967745fb30fa9ca2664d28cb062e442040cea0ed85b32d74d2528a08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 146
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 147
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_27755b9967745fb30fa9ca2664d28cb062e442040cea0ed85b32d74d2528a08a->leave($__internal_27755b9967745fb30fa9ca2664d28cb062e442040cea0ed85b32d74d2528a08a_prof);

    }

    // line 150
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_9a3bfab66df2886896de50810ad978186df1bd89ceba115a54389595a99f79e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3bfab66df2886896de50810ad978186df1bd89ceba115a54389595a99f79e0->enter($__internal_9a3bfab66df2886896de50810ad978186df1bd89ceba115a54389595a99f79e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 151
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9a3bfab66df2886896de50810ad978186df1bd89ceba115a54389595a99f79e0->leave($__internal_9a3bfab66df2886896de50810ad978186df1bd89ceba115a54389595a99f79e0_prof);

    }

    // line 154
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4378ea0e6ecd6637eb27ffa71ac4ef29ec5150dde6789b96c0250da82bad6f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4378ea0e6ecd6637eb27ffa71ac4ef29ec5150dde6789b96c0250da82bad6f8d->enter($__internal_4378ea0e6ecd6637eb27ffa71ac4ef29ec5150dde6789b96c0250da82bad6f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4378ea0e6ecd6637eb27ffa71ac4ef29ec5150dde6789b96c0250da82bad6f8d->leave($__internal_4378ea0e6ecd6637eb27ffa71ac4ef29ec5150dde6789b96c0250da82bad6f8d_prof);

    }

    // line 158
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_9bc7d188ee1be0060881366eba2735966e6df3871d251b126e11856f2c7c2eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc7d188ee1be0060881366eba2735966e6df3871d251b126e11856f2c7c2eaf->enter($__internal_9bc7d188ee1be0060881366eba2735966e6df3871d251b126e11856f2c7c2eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 159
        echo "    ";
        // line 160
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 161
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 162
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 163
                echo "        ";
            }
            // line 164
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 165
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 166
                echo "        ";
            }
            // line 167
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 168
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 169
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 170
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 171
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 174
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 177
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 178
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 179
            echo "</label>
    ";
        }
        
        $__internal_9bc7d188ee1be0060881366eba2735966e6df3871d251b126e11856f2c7c2eaf->leave($__internal_9bc7d188ee1be0060881366eba2735966e6df3871d251b126e11856f2c7c2eaf_prof);

    }

    // line 185
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1ab1446b97f15e228d31af0ccfea3f402f09a31d72b40420a1eaee3617bb1933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab1446b97f15e228d31af0ccfea3f402f09a31d72b40420a1eaee3617bb1933->enter($__internal_1ab1446b97f15e228d31af0ccfea3f402f09a31d72b40420a1eaee3617bb1933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 186
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 190
        echo "</div>";
        
        $__internal_1ab1446b97f15e228d31af0ccfea3f402f09a31d72b40420a1eaee3617bb1933->leave($__internal_1ab1446b97f15e228d31af0ccfea3f402f09a31d72b40420a1eaee3617bb1933_prof);

    }

    // line 193
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_de114e7843118b96ae9ed3e2c7482becf6cbc18d0ae9f0803d5ae84ac1b16002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de114e7843118b96ae9ed3e2c7482becf6cbc18d0ae9f0803d5ae84ac1b16002->enter($__internal_de114e7843118b96ae9ed3e2c7482becf6cbc18d0ae9f0803d5ae84ac1b16002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 194
        echo "<div class=\"form-group\">";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 196
        echo "</div>";
        
        $__internal_de114e7843118b96ae9ed3e2c7482becf6cbc18d0ae9f0803d5ae84ac1b16002->leave($__internal_de114e7843118b96ae9ed3e2c7482becf6cbc18d0ae9f0803d5ae84ac1b16002_prof);

    }

    // line 199
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1f06cd2acb121d4d813a3b6f3ff940c87eef1dcf5aa8a28400d2ef7d7434d016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f06cd2acb121d4d813a3b6f3ff940c87eef1dcf5aa8a28400d2ef7d7434d016->enter($__internal_1f06cd2acb121d4d813a3b6f3ff940c87eef1dcf5aa8a28400d2ef7d7434d016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 200
        $context["force_error"] = true;
        // line 201
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1f06cd2acb121d4d813a3b6f3ff940c87eef1dcf5aa8a28400d2ef7d7434d016->leave($__internal_1f06cd2acb121d4d813a3b6f3ff940c87eef1dcf5aa8a28400d2ef7d7434d016_prof);

    }

    // line 204
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d94be3d0f77b7a1ddb4dedd773fb61fe562291cc1350780b800e646f078abb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94be3d0f77b7a1ddb4dedd773fb61fe562291cc1350780b800e646f078abb6d->enter($__internal_d94be3d0f77b7a1ddb4dedd773fb61fe562291cc1350780b800e646f078abb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 205
        $context["force_error"] = true;
        // line 206
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d94be3d0f77b7a1ddb4dedd773fb61fe562291cc1350780b800e646f078abb6d->leave($__internal_d94be3d0f77b7a1ddb4dedd773fb61fe562291cc1350780b800e646f078abb6d_prof);

    }

    // line 209
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_4d6012ee8101c08744cafefbb52a405c010ae50683fe82aab6cc39f76cac4384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6012ee8101c08744cafefbb52a405c010ae50683fe82aab6cc39f76cac4384->enter($__internal_4d6012ee8101c08744cafefbb52a405c010ae50683fe82aab6cc39f76cac4384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 210
        $context["force_error"] = true;
        // line 211
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4d6012ee8101c08744cafefbb52a405c010ae50683fe82aab6cc39f76cac4384->leave($__internal_4d6012ee8101c08744cafefbb52a405c010ae50683fe82aab6cc39f76cac4384_prof);

    }

    // line 214
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1a28831bde388392898ff5bfefd25073da5fdcd9fb68c7d7e952ce37fd8f0e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a28831bde388392898ff5bfefd25073da5fdcd9fb68c7d7e952ce37fd8f0e56->enter($__internal_1a28831bde388392898ff5bfefd25073da5fdcd9fb68c7d7e952ce37fd8f0e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 215
        $context["force_error"] = true;
        // line 216
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1a28831bde388392898ff5bfefd25073da5fdcd9fb68c7d7e952ce37fd8f0e56->leave($__internal_1a28831bde388392898ff5bfefd25073da5fdcd9fb68c7d7e952ce37fd8f0e56_prof);

    }

    // line 219
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e7e321fea8c44f6b010ba2968bd330cd56c5e4f587d09c0ad736adf1be4ad9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e321fea8c44f6b010ba2968bd330cd56c5e4f587d09c0ad736adf1be4ad9e0->enter($__internal_e7e321fea8c44f6b010ba2968bd330cd56c5e4f587d09c0ad736adf1be4ad9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 220
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 223
        echo "</div>";
        
        $__internal_e7e321fea8c44f6b010ba2968bd330cd56c5e4f587d09c0ad736adf1be4ad9e0->leave($__internal_e7e321fea8c44f6b010ba2968bd330cd56c5e4f587d09c0ad736adf1be4ad9e0_prof);

    }

    // line 226
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2072b439111485c1b3157a87dce1eea944c553a47f9540aede1071445b9c143c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2072b439111485c1b3157a87dce1eea944c553a47f9540aede1071445b9c143c->enter($__internal_2072b439111485c1b3157a87dce1eea944c553a47f9540aede1071445b9c143c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 227
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 230
        echo "</div>";
        
        $__internal_2072b439111485c1b3157a87dce1eea944c553a47f9540aede1071445b9c143c->leave($__internal_2072b439111485c1b3157a87dce1eea944c553a47f9540aede1071445b9c143c_prof);

    }

    // line 235
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_78c0b9fd828708b8fdd0e24aba188cd493c1c3793e0eba3dcf90bbd091fb41dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c0b9fd828708b8fdd0e24aba188cd493c1c3793e0eba3dcf90bbd091fb41dd->enter($__internal_78c0b9fd828708b8fdd0e24aba188cd493c1c3793e0eba3dcf90bbd091fb41dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 236
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 237
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 238
            echo "    <ul class=\"list-unstyled\">";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 240
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "</ul>
    ";
            // line 243
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_78c0b9fd828708b8fdd0e24aba188cd493c1c3793e0eba3dcf90bbd091fb41dd->leave($__internal_78c0b9fd828708b8fdd0e24aba188cd493c1c3793e0eba3dcf90bbd091fb41dd_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  837 => 243,  834 => 242,  826 => 240,  822 => 239,  820 => 238,  814 => 237,  812 => 236,  806 => 235,  799 => 230,  797 => 229,  795 => 228,  789 => 227,  783 => 226,  776 => 223,  774 => 222,  772 => 221,  766 => 220,  760 => 219,  753 => 216,  751 => 215,  745 => 214,  738 => 211,  736 => 210,  730 => 209,  723 => 206,  721 => 205,  715 => 204,  708 => 201,  706 => 200,  700 => 199,  693 => 196,  691 => 195,  689 => 194,  683 => 193,  676 => 190,  674 => 189,  672 => 188,  670 => 187,  664 => 186,  658 => 185,  649 => 179,  645 => 178,  630 => 177,  626 => 174,  623 => 171,  622 => 170,  621 => 169,  619 => 168,  616 => 167,  613 => 166,  610 => 165,  607 => 164,  604 => 163,  601 => 162,  598 => 161,  595 => 160,  593 => 159,  587 => 158,  580 => 155,  574 => 154,  567 => 151,  561 => 150,  554 => 147,  552 => 146,  546 => 144,  539 => 141,  537 => 140,  531 => 139,  523 => 133,  521 => 132,  519 => 131,  516 => 129,  514 => 128,  512 => 127,  506 => 126,  498 => 122,  496 => 121,  494 => 120,  491 => 118,  489 => 117,  487 => 116,  481 => 115,  473 => 111,  467 => 108,  466 => 107,  465 => 106,  461 => 105,  457 => 104,  450 => 100,  449 => 99,  448 => 98,  444 => 97,  442 => 96,  436 => 95,  429 => 92,  427 => 91,  421 => 90,  412 => 85,  409 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 235,  197 => 234,  194 => 232,  192 => 226,  189 => 225,  187 => 219,  184 => 218,  182 => 214,  179 => 213,  177 => 209,  174 => 208,  172 => 204,  169 => 203,  167 => 199,  164 => 198,  162 => 193,  159 => 192,  157 => 185,  154 => 184,  151 => 182,  149 => 158,  146 => 157,  144 => 154,  141 => 153,  139 => 150,  136 => 149,  134 => 144,  131 => 143,  129 => 139,  126 => 138,  123 => 136,  121 => 126,  118 => 125,  116 => 115,  113 => 114,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }

    public function getSource()
    {
        return "{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
";
    }
}
