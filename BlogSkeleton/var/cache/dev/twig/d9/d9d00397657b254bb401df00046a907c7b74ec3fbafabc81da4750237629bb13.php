<?php

/* form_div_layout.html.twig */
class __TwigTemplate_2939d075be0db63f5b5346275a4de5e6e8f3f46446d94c08bac83268b95bbfdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2547a5fb0b9f221e6dddb478838fdc669f1fcc35896ede512537b0b001a896ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2547a5fb0b9f221e6dddb478838fdc669f1fcc35896ede512537b0b001a896ea->enter($__internal_2547a5fb0b9f221e6dddb478838fdc669f1fcc35896ede512537b0b001a896ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 139
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 144
        $this->displayBlock('money_widget', $context, $blocks);
        // line 148
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 163
        $this->displayBlock('password_widget', $context, $blocks);
        // line 168
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 173
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        $this->displayBlock('range_widget', $context, $blocks);
        // line 183
        $this->displayBlock('button_widget', $context, $blocks);
        // line 197
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 202
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 209
        $this->displayBlock('form_label', $context, $blocks);
        // line 231
        $this->displayBlock('button_label', $context, $blocks);
        // line 235
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 243
        $this->displayBlock('form_row', $context, $blocks);
        // line 251
        $this->displayBlock('button_row', $context, $blocks);
        // line 257
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 263
        $this->displayBlock('form', $context, $blocks);
        // line 269
        $this->displayBlock('form_start', $context, $blocks);
        // line 282
        $this->displayBlock('form_end', $context, $blocks);
        // line 289
        $this->displayBlock('form_errors', $context, $blocks);
        // line 299
        $this->displayBlock('form_rest', $context, $blocks);
        // line 306
        echo "
";
        // line 309
        $this->displayBlock('form_rows', $context, $blocks);
        // line 315
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 331
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 345
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 359
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_2547a5fb0b9f221e6dddb478838fdc669f1fcc35896ede512537b0b001a896ea->leave($__internal_2547a5fb0b9f221e6dddb478838fdc669f1fcc35896ede512537b0b001a896ea_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_7f83ec6a535897ee70a0ed049d12e9edae0b46e005955f1b5661fa2353d523ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f83ec6a535897ee70a0ed049d12e9edae0b46e005955f1b5661fa2353d523ec->enter($__internal_7f83ec6a535897ee70a0ed049d12e9edae0b46e005955f1b5661fa2353d523ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_7f83ec6a535897ee70a0ed049d12e9edae0b46e005955f1b5661fa2353d523ec->leave($__internal_7f83ec6a535897ee70a0ed049d12e9edae0b46e005955f1b5661fa2353d523ec_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5e4ab1a4b10dbf461860cd28362ef93c507632577041e0fa448c906af237c33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4ab1a4b10dbf461860cd28362ef93c507632577041e0fa448c906af237c33d->enter($__internal_5e4ab1a4b10dbf461860cd28362ef93c507632577041e0fa448c906af237c33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_5e4ab1a4b10dbf461860cd28362ef93c507632577041e0fa448c906af237c33d->leave($__internal_5e4ab1a4b10dbf461860cd28362ef93c507632577041e0fa448c906af237c33d_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_49f74d3526227aa533529d10797b913be70e4efd5f01a32ce484ad9459769c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f74d3526227aa533529d10797b913be70e4efd5f01a32ce484ad9459769c25->enter($__internal_49f74d3526227aa533529d10797b913be70e4efd5f01a32ce484ad9459769c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_49f74d3526227aa533529d10797b913be70e4efd5f01a32ce484ad9459769c25->leave($__internal_49f74d3526227aa533529d10797b913be70e4efd5f01a32ce484ad9459769c25_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_029ae299655dba6e16fb546168515712d017e3f345d704a87fed1c934089e1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029ae299655dba6e16fb546168515712d017e3f345d704a87fed1c934089e1c6->enter($__internal_029ae299655dba6e16fb546168515712d017e3f345d704a87fed1c934089e1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_029ae299655dba6e16fb546168515712d017e3f345d704a87fed1c934089e1c6->leave($__internal_029ae299655dba6e16fb546168515712d017e3f345d704a87fed1c934089e1c6_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9c6e9f301f0c5ca908176529bc21fec59dce8c25455e746240f80f87f9e0750d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6e9f301f0c5ca908176529bc21fec59dce8c25455e746240f80f87f9e0750d->enter($__internal_9c6e9f301f0c5ca908176529bc21fec59dce8c25455e746240f80f87f9e0750d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_9c6e9f301f0c5ca908176529bc21fec59dce8c25455e746240f80f87f9e0750d->leave($__internal_9c6e9f301f0c5ca908176529bc21fec59dce8c25455e746240f80f87f9e0750d_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_efa9d08c85df35949e154ac691f69da42992e3629b5e0b7e429b1a3ee7187368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa9d08c85df35949e154ac691f69da42992e3629b5e0b7e429b1a3ee7187368->enter($__internal_efa9d08c85df35949e154ac691f69da42992e3629b5e0b7e429b1a3ee7187368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_efa9d08c85df35949e154ac691f69da42992e3629b5e0b7e429b1a3ee7187368->leave($__internal_efa9d08c85df35949e154ac691f69da42992e3629b5e0b7e429b1a3ee7187368_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2d757f6b593e71626a81afcd100c01ab6c6c0f00eafd535248edb9cc1b4576c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d757f6b593e71626a81afcd100c01ab6c6c0f00eafd535248edb9cc1b4576c0->enter($__internal_2d757f6b593e71626a81afcd100c01ab6c6c0f00eafd535248edb9cc1b4576c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_2d757f6b593e71626a81afcd100c01ab6c6c0f00eafd535248edb9cc1b4576c0->leave($__internal_2d757f6b593e71626a81afcd100c01ab6c6c0f00eafd535248edb9cc1b4576c0_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_608e282e71a2d7c13ad50b72f6d0089a6dbd89e19ebd45b3a5800c4f6cb9df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608e282e71a2d7c13ad50b72f6d0089a6dbd89e19ebd45b3a5800c4f6cb9df53->enter($__internal_608e282e71a2d7c13ad50b72f6d0089a6dbd89e19ebd45b3a5800c4f6cb9df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_608e282e71a2d7c13ad50b72f6d0089a6dbd89e19ebd45b3a5800c4f6cb9df53->leave($__internal_608e282e71a2d7c13ad50b72f6d0089a6dbd89e19ebd45b3a5800c4f6cb9df53_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_f0e7c83cd78e6fe405bc00c10235b7a3b132ada883fc08190bf2d80da9a0a210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e7c83cd78e6fe405bc00c10235b7a3b132ada883fc08190bf2d80da9a0a210->enter($__internal_f0e7c83cd78e6fe405bc00c10235b7a3b132ada883fc08190bf2d80da9a0a210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f0e7c83cd78e6fe405bc00c10235b7a3b132ada883fc08190bf2d80da9a0a210->leave($__internal_f0e7c83cd78e6fe405bc00c10235b7a3b132ada883fc08190bf2d80da9a0a210_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c21a754381d214b077d20d925283fb821c0d5675ba6211d0e452a2d96b0db399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21a754381d214b077d20d925283fb821c0d5675ba6211d0e452a2d96b0db399->enter($__internal_c21a754381d214b077d20d925283fb821c0d5675ba6211d0e452a2d96b0db399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_c21a754381d214b077d20d925283fb821c0d5675ba6211d0e452a2d96b0db399->leave($__internal_c21a754381d214b077d20d925283fb821c0d5675ba6211d0e452a2d96b0db399_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ef6c39e3f38da8352ee7044f7570f677958a2aca0213e5201d80f26d8f79d2b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6c39e3f38da8352ee7044f7570f677958a2aca0213e5201d80f26d8f79d2b5->enter($__internal_ef6c39e3f38da8352ee7044f7570f677958a2aca0213e5201d80f26d8f79d2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_ef6c39e3f38da8352ee7044f7570f677958a2aca0213e5201d80f26d8f79d2b5->leave($__internal_ef6c39e3f38da8352ee7044f7570f677958a2aca0213e5201d80f26d8f79d2b5_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_92623eeefce6a6f040a843db2eb341dff7e6cd78e2f22c6f4ee59cbbe76ebfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92623eeefce6a6f040a843db2eb341dff7e6cd78e2f22c6f4ee59cbbe76ebfbb->enter($__internal_92623eeefce6a6f040a843db2eb341dff7e6cd78e2f22c6f4ee59cbbe76ebfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_92623eeefce6a6f040a843db2eb341dff7e6cd78e2f22c6f4ee59cbbe76ebfbb->leave($__internal_92623eeefce6a6f040a843db2eb341dff7e6cd78e2f22c6f4ee59cbbe76ebfbb_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9415e822ef19ba119c22c9e2cff1b4879c935a4ac8dd08b683902ff0a6a67eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9415e822ef19ba119c22c9e2cff1b4879c935a4ac8dd08b683902ff0a6a67eec->enter($__internal_9415e822ef19ba119c22c9e2cff1b4879c935a4ac8dd08b683902ff0a6a67eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_9415e822ef19ba119c22c9e2cff1b4879c935a4ac8dd08b683902ff0a6a67eec->leave($__internal_9415e822ef19ba119c22c9e2cff1b4879c935a4ac8dd08b683902ff0a6a67eec_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_dd28938c87b7f0b5f6f1ecbcf8ab32a4b071c67c823a8f7e9b11a1991d8ffa10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd28938c87b7f0b5f6f1ecbcf8ab32a4b071c67c823a8f7e9b11a1991d8ffa10->enter($__internal_dd28938c87b7f0b5f6f1ecbcf8ab32a4b071c67c823a8f7e9b11a1991d8ffa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_dd28938c87b7f0b5f6f1ecbcf8ab32a4b071c67c823a8f7e9b11a1991d8ffa10->leave($__internal_dd28938c87b7f0b5f6f1ecbcf8ab32a4b071c67c823a8f7e9b11a1991d8ffa10_prof);

    }

    // line 133
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_c100504668bd8e51c0e9ebc174c09b589512ef91dd19ff1464495fa11b4f5559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c100504668bd8e51c0e9ebc174c09b589512ef91dd19ff1464495fa11b4f5559->enter($__internal_c100504668bd8e51c0e9ebc174c09b589512ef91dd19ff1464495fa11b4f5559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c100504668bd8e51c0e9ebc174c09b589512ef91dd19ff1464495fa11b4f5559->leave($__internal_c100504668bd8e51c0e9ebc174c09b589512ef91dd19ff1464495fa11b4f5559_prof);

    }

    // line 139
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_f53ce35d75cb3086c1acf28468373089a330ae758468624b2cfb8ed237cc9486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53ce35d75cb3086c1acf28468373089a330ae758468624b2cfb8ed237cc9486->enter($__internal_f53ce35d75cb3086c1acf28468373089a330ae758468624b2cfb8ed237cc9486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f53ce35d75cb3086c1acf28468373089a330ae758468624b2cfb8ed237cc9486->leave($__internal_f53ce35d75cb3086c1acf28468373089a330ae758468624b2cfb8ed237cc9486_prof);

    }

    // line 144
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1e8d0d91c89cafbecd528020a73e4e4465d56ff7580f6ac136e16739cecbfa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8d0d91c89cafbecd528020a73e4e4465d56ff7580f6ac136e16739cecbfa63->enter($__internal_1e8d0d91c89cafbecd528020a73e4e4465d56ff7580f6ac136e16739cecbfa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 145
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_1e8d0d91c89cafbecd528020a73e4e4465d56ff7580f6ac136e16739cecbfa63->leave($__internal_1e8d0d91c89cafbecd528020a73e4e4465d56ff7580f6ac136e16739cecbfa63_prof);

    }

    // line 148
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_8c4fdda9e5a5b57f66c86593a5541f7113764cd87e88a712f88da333e0ab6e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4fdda9e5a5b57f66c86593a5541f7113764cd87e88a712f88da333e0ab6e2f->enter($__internal_8c4fdda9e5a5b57f66c86593a5541f7113764cd87e88a712f88da333e0ab6e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8c4fdda9e5a5b57f66c86593a5541f7113764cd87e88a712f88da333e0ab6e2f->leave($__internal_8c4fdda9e5a5b57f66c86593a5541f7113764cd87e88a712f88da333e0ab6e2f_prof);

    }

    // line 153
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_57f022acca2b2afd2a39294152888ba035be49f9c0e75d1ec5f704e1335695ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f022acca2b2afd2a39294152888ba035be49f9c0e75d1ec5f704e1335695ca->enter($__internal_57f022acca2b2afd2a39294152888ba035be49f9c0e75d1ec5f704e1335695ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_57f022acca2b2afd2a39294152888ba035be49f9c0e75d1ec5f704e1335695ca->leave($__internal_57f022acca2b2afd2a39294152888ba035be49f9c0e75d1ec5f704e1335695ca_prof);

    }

    // line 158
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_070059877e529e3f2cec1988df6b76c4b98998a78f17cc3cf18f2a9eae75e97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070059877e529e3f2cec1988df6b76c4b98998a78f17cc3cf18f2a9eae75e97d->enter($__internal_070059877e529e3f2cec1988df6b76c4b98998a78f17cc3cf18f2a9eae75e97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_070059877e529e3f2cec1988df6b76c4b98998a78f17cc3cf18f2a9eae75e97d->leave($__internal_070059877e529e3f2cec1988df6b76c4b98998a78f17cc3cf18f2a9eae75e97d_prof);

    }

    // line 163
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_954dc062da41a911a529222f26006bc4a48b52b31bd5a3c8814fe875dc126c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954dc062da41a911a529222f26006bc4a48b52b31bd5a3c8814fe875dc126c24->enter($__internal_954dc062da41a911a529222f26006bc4a48b52b31bd5a3c8814fe875dc126c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_954dc062da41a911a529222f26006bc4a48b52b31bd5a3c8814fe875dc126c24->leave($__internal_954dc062da41a911a529222f26006bc4a48b52b31bd5a3c8814fe875dc126c24_prof);

    }

    // line 168
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_ae1482c703a7a00843a19b909596ca3b4a2317632e2fbbbb68ec6f4e23df607e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1482c703a7a00843a19b909596ca3b4a2317632e2fbbbb68ec6f4e23df607e->enter($__internal_ae1482c703a7a00843a19b909596ca3b4a2317632e2fbbbb68ec6f4e23df607e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ae1482c703a7a00843a19b909596ca3b4a2317632e2fbbbb68ec6f4e23df607e->leave($__internal_ae1482c703a7a00843a19b909596ca3b4a2317632e2fbbbb68ec6f4e23df607e_prof);

    }

    // line 173
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_12eaf530a0583984967d3f470d812c88afd37192d45cf4b30cc7a6bcd58bd778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12eaf530a0583984967d3f470d812c88afd37192d45cf4b30cc7a6bcd58bd778->enter($__internal_12eaf530a0583984967d3f470d812c88afd37192d45cf4b30cc7a6bcd58bd778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_12eaf530a0583984967d3f470d812c88afd37192d45cf4b30cc7a6bcd58bd778->leave($__internal_12eaf530a0583984967d3f470d812c88afd37192d45cf4b30cc7a6bcd58bd778_prof);

    }

    // line 178
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_bf4ff0a471083f0aff989f4f73d7cfd7ea235d3bcaf0a85538a08b2dcf1d5863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4ff0a471083f0aff989f4f73d7cfd7ea235d3bcaf0a85538a08b2dcf1d5863->enter($__internal_bf4ff0a471083f0aff989f4f73d7cfd7ea235d3bcaf0a85538a08b2dcf1d5863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 179
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bf4ff0a471083f0aff989f4f73d7cfd7ea235d3bcaf0a85538a08b2dcf1d5863->leave($__internal_bf4ff0a471083f0aff989f4f73d7cfd7ea235d3bcaf0a85538a08b2dcf1d5863_prof);

    }

    // line 183
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_03b76a246bf08fd5daf22d7befdd23c59231370ebb246eb4140123911e7d91e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b76a246bf08fd5daf22d7befdd23c59231370ebb246eb4140123911e7d91e7->enter($__internal_03b76a246bf08fd5daf22d7befdd23c59231370ebb246eb4140123911e7d91e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 184
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 185
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 186
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 187
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 188
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 191
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 194
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_03b76a246bf08fd5daf22d7befdd23c59231370ebb246eb4140123911e7d91e7->leave($__internal_03b76a246bf08fd5daf22d7befdd23c59231370ebb246eb4140123911e7d91e7_prof);

    }

    // line 197
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_e9f8daed4c8bd6df87449f13a1e2f912492f69f0b6aa352b1ecf4d58a5d9618f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f8daed4c8bd6df87449f13a1e2f912492f69f0b6aa352b1ecf4d58a5d9618f->enter($__internal_e9f8daed4c8bd6df87449f13a1e2f912492f69f0b6aa352b1ecf4d58a5d9618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_e9f8daed4c8bd6df87449f13a1e2f912492f69f0b6aa352b1ecf4d58a5d9618f->leave($__internal_e9f8daed4c8bd6df87449f13a1e2f912492f69f0b6aa352b1ecf4d58a5d9618f_prof);

    }

    // line 202
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_c87032adeaa9891ecdee7087644d9e486f578dbd7815ea12a2e90d4e000f7320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87032adeaa9891ecdee7087644d9e486f578dbd7815ea12a2e90d4e000f7320->enter($__internal_c87032adeaa9891ecdee7087644d9e486f578dbd7815ea12a2e90d4e000f7320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 203
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 204
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_c87032adeaa9891ecdee7087644d9e486f578dbd7815ea12a2e90d4e000f7320->leave($__internal_c87032adeaa9891ecdee7087644d9e486f578dbd7815ea12a2e90d4e000f7320_prof);

    }

    // line 209
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_17775bd1bab368c4511f049029c099b64db94d9a799963a9299313cf0a843414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17775bd1bab368c4511f049029c099b64db94d9a799963a9299313cf0a843414->enter($__internal_17775bd1bab368c4511f049029c099b64db94d9a799963a9299313cf0a843414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 210
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 211
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 212
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 214
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 215
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 217
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 218
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 219
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 220
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 221
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 224
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 227
            echo "<label";
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
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_17775bd1bab368c4511f049029c099b64db94d9a799963a9299313cf0a843414->leave($__internal_17775bd1bab368c4511f049029c099b64db94d9a799963a9299313cf0a843414_prof);

    }

    // line 231
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_d35dbbd3cffc659b9ea13fd31c5bf952be52c96c7815ca3edd9078b0955bf234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35dbbd3cffc659b9ea13fd31c5bf952be52c96c7815ca3edd9078b0955bf234->enter($__internal_d35dbbd3cffc659b9ea13fd31c5bf952be52c96c7815ca3edd9078b0955bf234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_d35dbbd3cffc659b9ea13fd31c5bf952be52c96c7815ca3edd9078b0955bf234->leave($__internal_d35dbbd3cffc659b9ea13fd31c5bf952be52c96c7815ca3edd9078b0955bf234_prof);

    }

    // line 235
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_517bc5b20af7ee85c12dcf9831743db032c7c4026336ebfc98c4a8d679b33b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517bc5b20af7ee85c12dcf9831743db032c7c4026336ebfc98c4a8d679b33b5f->enter($__internal_517bc5b20af7ee85c12dcf9831743db032c7c4026336ebfc98c4a8d679b33b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 240
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_517bc5b20af7ee85c12dcf9831743db032c7c4026336ebfc98c4a8d679b33b5f->leave($__internal_517bc5b20af7ee85c12dcf9831743db032c7c4026336ebfc98c4a8d679b33b5f_prof);

    }

    // line 243
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d9722920b2c55aaef7951ed1bda63f2c491c9a370bb17648b6489db467043350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9722920b2c55aaef7951ed1bda63f2c491c9a370bb17648b6489db467043350->enter($__internal_d9722920b2c55aaef7951ed1bda63f2c491c9a370bb17648b6489db467043350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 244
        echo "<div>";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 248
        echo "</div>";
        
        $__internal_d9722920b2c55aaef7951ed1bda63f2c491c9a370bb17648b6489db467043350->leave($__internal_d9722920b2c55aaef7951ed1bda63f2c491c9a370bb17648b6489db467043350_prof);

    }

    // line 251
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7d7c9515792f7deb8cef9fb90db551447d4762fb0e6877b1807342478077ccc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7c9515792f7deb8cef9fb90db551447d4762fb0e6877b1807342478077ccc3->enter($__internal_7d7c9515792f7deb8cef9fb90db551447d4762fb0e6877b1807342478077ccc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 252
        echo "<div>";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 254
        echo "</div>";
        
        $__internal_7d7c9515792f7deb8cef9fb90db551447d4762fb0e6877b1807342478077ccc3->leave($__internal_7d7c9515792f7deb8cef9fb90db551447d4762fb0e6877b1807342478077ccc3_prof);

    }

    // line 257
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_339399363c14f5fb18b256e14f99f727101ac97df0466387241b59028eb549c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339399363c14f5fb18b256e14f99f727101ac97df0466387241b59028eb549c8->enter($__internal_339399363c14f5fb18b256e14f99f727101ac97df0466387241b59028eb549c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_339399363c14f5fb18b256e14f99f727101ac97df0466387241b59028eb549c8->leave($__internal_339399363c14f5fb18b256e14f99f727101ac97df0466387241b59028eb549c8_prof);

    }

    // line 263
    public function block_form($context, array $blocks = array())
    {
        $__internal_5dd79724c83ff8a219c1c7e14e2c955a98b4b235f2bdb312eb2fac7d4a8fe5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd79724c83ff8a219c1c7e14e2c955a98b4b235f2bdb312eb2fac7d4a8fe5fb->enter($__internal_5dd79724c83ff8a219c1c7e14e2c955a98b4b235f2bdb312eb2fac7d4a8fe5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 264
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 266
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_5dd79724c83ff8a219c1c7e14e2c955a98b4b235f2bdb312eb2fac7d4a8fe5fb->leave($__internal_5dd79724c83ff8a219c1c7e14e2c955a98b4b235f2bdb312eb2fac7d4a8fe5fb_prof);

    }

    // line 269
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_7525833fbafd9983000de2432c42f46602a2915dffb5e2a2b971db8490573feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7525833fbafd9983000de2432c42f46602a2915dffb5e2a2b971db8490573feb->enter($__internal_7525833fbafd9983000de2432c42f46602a2915dffb5e2a2b971db8490573feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 270
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 271
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 272
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 274
            $context["form_method"] = "POST";
        }
        // line 276
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
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
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 277
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 278
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_7525833fbafd9983000de2432c42f46602a2915dffb5e2a2b971db8490573feb->leave($__internal_7525833fbafd9983000de2432c42f46602a2915dffb5e2a2b971db8490573feb_prof);

    }

    // line 282
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_894b83d00f128b1f808d04581ae75703e9f145f36fc87fbb28b1e6d1e4d37125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894b83d00f128b1f808d04581ae75703e9f145f36fc87fbb28b1e6d1e4d37125->enter($__internal_894b83d00f128b1f808d04581ae75703e9f145f36fc87fbb28b1e6d1e4d37125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 283
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 284
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 286
        echo "</form>";
        
        $__internal_894b83d00f128b1f808d04581ae75703e9f145f36fc87fbb28b1e6d1e4d37125->leave($__internal_894b83d00f128b1f808d04581ae75703e9f145f36fc87fbb28b1e6d1e4d37125_prof);

    }

    // line 289
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_167f0ed5acad244bfb84988fb9975a5e896fb8bfd72f9ff7185fdd9e26a94b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167f0ed5acad244bfb84988fb9975a5e896fb8bfd72f9ff7185fdd9e26a94b6f->enter($__internal_167f0ed5acad244bfb84988fb9975a5e896fb8bfd72f9ff7185fdd9e26a94b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 290
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 291
            echo "<ul>";
            // line 292
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 293
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "</ul>";
        }
        
        $__internal_167f0ed5acad244bfb84988fb9975a5e896fb8bfd72f9ff7185fdd9e26a94b6f->leave($__internal_167f0ed5acad244bfb84988fb9975a5e896fb8bfd72f9ff7185fdd9e26a94b6f_prof);

    }

    // line 299
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_9be6976f0277704e72f7cecc7f2a2baa30cc4a53b30b07ae1cf0572929ae2e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be6976f0277704e72f7cecc7f2a2baa30cc4a53b30b07ae1cf0572929ae2e84->enter($__internal_9be6976f0277704e72f7cecc7f2a2baa30cc4a53b30b07ae1cf0572929ae2e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 301
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 302
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9be6976f0277704e72f7cecc7f2a2baa30cc4a53b30b07ae1cf0572929ae2e84->leave($__internal_9be6976f0277704e72f7cecc7f2a2baa30cc4a53b30b07ae1cf0572929ae2e84_prof);

    }

    // line 309
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_470c8405bf15f5c50d920d00397e285b5723dda44bfb365ae09509f4e031ec53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470c8405bf15f5c50d920d00397e285b5723dda44bfb365ae09509f4e031ec53->enter($__internal_470c8405bf15f5c50d920d00397e285b5723dda44bfb365ae09509f4e031ec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 311
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_470c8405bf15f5c50d920d00397e285b5723dda44bfb365ae09509f4e031ec53->leave($__internal_470c8405bf15f5c50d920d00397e285b5723dda44bfb365ae09509f4e031ec53_prof);

    }

    // line 315
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_dafd5168f7a74ce34b4ed64d512efc6ba1e56b710eac3ebd032f35912f37d176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafd5168f7a74ce34b4ed64d512efc6ba1e56b710eac3ebd032f35912f37d176->enter($__internal_dafd5168f7a74ce34b4ed64d512efc6ba1e56b710eac3ebd032f35912f37d176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 316
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 317
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 318
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 320
            echo " ";
            // line 321
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 322
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 323
$context["attrvalue"] === true)) {
                // line 324
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 325
$context["attrvalue"] === false)) {
                // line 326
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dafd5168f7a74ce34b4ed64d512efc6ba1e56b710eac3ebd032f35912f37d176->leave($__internal_dafd5168f7a74ce34b4ed64d512efc6ba1e56b710eac3ebd032f35912f37d176_prof);

    }

    // line 331
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_911aa7e6de5fb1dab148a411a85e21eeddc2ec598b3f7dca9cc8517bcea08e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911aa7e6de5fb1dab148a411a85e21eeddc2ec598b3f7dca9cc8517bcea08e4f->enter($__internal_911aa7e6de5fb1dab148a411a85e21eeddc2ec598b3f7dca9cc8517bcea08e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 332
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 334
            echo " ";
            // line 335
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 336
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 337
$context["attrvalue"] === true)) {
                // line 338
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 339
$context["attrvalue"] === false)) {
                // line 340
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_911aa7e6de5fb1dab148a411a85e21eeddc2ec598b3f7dca9cc8517bcea08e4f->leave($__internal_911aa7e6de5fb1dab148a411a85e21eeddc2ec598b3f7dca9cc8517bcea08e4f_prof);

    }

    // line 345
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_8ed6049d7c40cb370f631443db5f174fa050f7acbd6ec6a31f111b1f25ca92e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed6049d7c40cb370f631443db5f174fa050f7acbd6ec6a31f111b1f25ca92e7->enter($__internal_8ed6049d7c40cb370f631443db5f174fa050f7acbd6ec6a31f111b1f25ca92e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 346
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 347
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 348
            echo " ";
            // line 349
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 350
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 351
$context["attrvalue"] === true)) {
                // line 352
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 353
$context["attrvalue"] === false)) {
                // line 354
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8ed6049d7c40cb370f631443db5f174fa050f7acbd6ec6a31f111b1f25ca92e7->leave($__internal_8ed6049d7c40cb370f631443db5f174fa050f7acbd6ec6a31f111b1f25ca92e7_prof);

    }

    // line 359
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_a78f166e4dc0a4185168f7787a5ba05c66fc93b8d24f4c2efaa0fd22cf8e56fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78f166e4dc0a4185168f7787a5ba05c66fc93b8d24f4c2efaa0fd22cf8e56fd->enter($__internal_a78f166e4dc0a4185168f7787a5ba05c66fc93b8d24f4c2efaa0fd22cf8e56fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 361
            echo " ";
            // line 362
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 363
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 364
$context["attrvalue"] === true)) {
                // line 365
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 366
$context["attrvalue"] === false)) {
                // line 367
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a78f166e4dc0a4185168f7787a5ba05c66fc93b8d24f4c2efaa0fd22cf8e56fd->leave($__internal_a78f166e4dc0a4185168f7787a5ba05c66fc93b8d24f4c2efaa0fd22cf8e56fd_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1268 => 367,  1266 => 366,  1261 => 365,  1259 => 364,  1254 => 363,  1252 => 362,  1250 => 361,  1246 => 360,  1240 => 359,  1225 => 354,  1223 => 353,  1218 => 352,  1216 => 351,  1211 => 350,  1209 => 349,  1207 => 348,  1203 => 347,  1194 => 346,  1188 => 345,  1173 => 340,  1171 => 339,  1166 => 338,  1164 => 337,  1159 => 336,  1157 => 335,  1155 => 334,  1151 => 333,  1145 => 332,  1139 => 331,  1124 => 326,  1122 => 325,  1117 => 324,  1115 => 323,  1110 => 322,  1108 => 321,  1106 => 320,  1102 => 319,  1098 => 318,  1094 => 317,  1088 => 316,  1082 => 315,  1071 => 311,  1067 => 310,  1061 => 309,  1049 => 302,  1047 => 301,  1043 => 300,  1037 => 299,  1029 => 295,  1021 => 293,  1017 => 292,  1015 => 291,  1013 => 290,  1007 => 289,  1000 => 286,  997 => 284,  995 => 283,  989 => 282,  979 => 278,  977 => 277,  950 => 276,  947 => 274,  944 => 272,  942 => 271,  940 => 270,  934 => 269,  927 => 266,  925 => 265,  923 => 264,  917 => 263,  910 => 258,  904 => 257,  897 => 254,  895 => 253,  893 => 252,  887 => 251,  880 => 248,  878 => 247,  876 => 246,  874 => 245,  872 => 244,  866 => 243,  859 => 240,  853 => 235,  842 => 231,  819 => 227,  815 => 224,  812 => 221,  811 => 220,  810 => 219,  808 => 218,  806 => 217,  803 => 215,  801 => 214,  798 => 212,  796 => 211,  794 => 210,  788 => 209,  781 => 204,  779 => 203,  773 => 202,  766 => 199,  764 => 198,  758 => 197,  745 => 194,  741 => 191,  738 => 188,  737 => 187,  736 => 186,  734 => 185,  732 => 184,  726 => 183,  719 => 180,  717 => 179,  711 => 178,  704 => 175,  702 => 174,  696 => 173,  689 => 170,  687 => 169,  681 => 168,  674 => 165,  672 => 164,  666 => 163,  658 => 160,  656 => 159,  650 => 158,  643 => 155,  641 => 154,  635 => 153,  628 => 150,  626 => 149,  620 => 148,  613 => 145,  607 => 144,  600 => 141,  598 => 140,  592 => 139,  585 => 136,  583 => 135,  577 => 133,  569 => 129,  559 => 128,  554 => 127,  552 => 126,  549 => 124,  547 => 123,  541 => 122,  533 => 118,  531 => 116,  530 => 115,  529 => 114,  528 => 113,  524 => 112,  521 => 110,  519 => 109,  513 => 108,  505 => 104,  503 => 103,  501 => 102,  499 => 101,  497 => 100,  493 => 99,  490 => 97,  488 => 96,  482 => 95,  465 => 92,  459 => 91,  442 => 88,  436 => 87,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 359,  150 => 345,  148 => 331,  146 => 315,  144 => 309,  141 => 306,  139 => 299,  137 => 289,  135 => 282,  133 => 269,  131 => 263,  129 => 257,  127 => 251,  125 => 243,  123 => 235,  121 => 231,  119 => 209,  117 => 202,  115 => 197,  113 => 183,  111 => 178,  109 => 173,  107 => 168,  105 => 163,  103 => 158,  101 => 153,  99 => 148,  97 => 144,  95 => 139,  93 => 133,  91 => 122,  89 => 108,  87 => 95,  85 => 91,  83 => 87,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }

    public function getSource()
    {
        return "{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
";
    }
}
