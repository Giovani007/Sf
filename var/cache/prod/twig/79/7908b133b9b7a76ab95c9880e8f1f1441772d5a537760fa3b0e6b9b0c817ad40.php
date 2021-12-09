<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_315d7bcdf7fc21a7b76516d385be74f0ccdad6a4afc384799f30820fe9b10260 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_widget' => [$this, 'block_collection_entry_widget'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_section_row' => [$this, 'block_ea_section_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 13
        echo "
";
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('date_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('time_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('file_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('form_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('collection_row', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('collection_entry_widget', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('button_row', $context, $blocks);
        // line 159
        echo "
";
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('form_label', $context, $blocks);
        // line 188
        echo "
";
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 259
        echo "
";
        // line 260
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 264
        echo "
";
        // line 265
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 323
        echo "
";
        // line 325
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 365
        echo "
";
        // line 366
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 416
        echo "
";
        // line 418
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 421
        echo "
";
        // line 422
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 426
        echo "
";
        // line 428
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 445
        echo "
";
        // line 447
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 465
        echo "
";
        // line 467
        $this->displayBlock('ea_section_row', $context, $blocks);
        // line 479
        echo "
";
        // line 481
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 545
        echo "
";
        // line 546
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 549
        echo "
";
        // line 550
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 611
        echo "
";
        // line 612
        $this->displayBlock('ea_slug_widget', $context, $blocks);
    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)), 0)) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <input type=\"hidden\" name=\"referrer\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 11), "query", [], "any", false, false, false, 11), "get", [0 => "referrer"], "method", false, false, false, 11), "html", null, true);
        echo "\">
";
    }

    // line 16
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 18
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 18), "")) : ("")))]);
        }
        // line 20
        if ((array_key_exists("type", $context) && ((0 === twig_compare(($context["type"] ?? null), "range")) || (0 === twig_compare(($context["type"] ?? null), "color"))))) {
            // line 21
            echo "        ";
            // line 22
            $context["required"] = false;
        }
        // line 24
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 27
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 29
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 30
        echo "</div>";
    }

    // line 33
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 35
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 36
        echo "</div>";
    }

    // line 39
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 41
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 42
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 44
            $this->displayParentBlock("file_widget", $context, $blocks);
            // line 46
            echo "<script>
            document.querySelector('#";
            // line 47
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').addEventListener('change', (event) => {
                const fileName = event.currentTarget.value.replace('C:\\\\fakepath\\\\', '');
                const customInputFileLabel = document.querySelector('#";
            // line 49
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " ~ .custom-file-label');
                customInputFileLabel.classList.add('selected');
                customInputFileLabel.innerHTML = fileName;
            });
        </script>
    ";
        }
    }

    // line 59
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    ";
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 61
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 61), "")) : ("")) . " form-group")]);
        // line 63
        echo "
    <div ";
        // line 64
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 64, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        echo ">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 66
        echo "<div class=\"form-widget\">
            ";
        // line 67
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 67), "prepend_html", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 67), "prepend_html", [], "any", false, false, false, 67), null)) : (null)));
        // line 68
        echo "            ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 68), "append_html", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 68), "append_html", [], "any", false, false, false, 68), null)) : (null)));
        // line 69
        echo "            ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 70
        echo "
            ";
        // line 71
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 72
        echo "                ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 73
            echo "                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">";
            // line 74
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 74), "prepend_html", [], "any", false, false, false, 74);
            echo "</span>
                    </div>
                ";
        }
        // line 77
        echo "
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                ";
        // line 80
        if (($context["has_append_html"] ?? null)) {
            // line 81
            echo "                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 82), "append_html", [], "any", false, false, false, 82);
            echo "</span>
                    </div>
                ";
        }
        // line 85
        echo "                ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 86
        echo "
            ";
        // line 87
        $context["nullable_fields_fqcn"] = [0 => "EasyCorpBundleEasyAdminBundleFieldDateTimeField", 1 => "EasyCorpBundleEasyAdminBundleFieldDateField", 2 => "EasyCorpBundleEasyAdminBundleFieldTimeField"];
        // line 92
        echo "            ";
        if ((twig_in_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 92), "ea_crud_form", [], "any", false, true, false, 92), "ea_field", [], "any", false, true, false, 92), "fieldFqcn", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 92), "ea_crud_form", [], "any", false, true, false, 92), "ea_field", [], "any", false, true, false, 92), "fieldFqcn", [], "any", false, false, false, 92), false)) : (false)), ($context["nullable_fields_fqcn"] ?? null)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 92), "nullable", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 92), "nullable", [], "any", false, false, false, 92), false)) : (false)))) {
            // line 93
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 95
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 100
        echo "
            ";
        // line 101
        if ((0 !== twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 101), "help", [], "any", true, true, false, 101)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 101), "help", [], "any", false, false, false, 101), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 101), "help", [], "any", false, false, false, 101))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 101), "help", [], "any", false, false, false, 101))), ""))) {
            // line 102
            echo "                <small class=\"form-help\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 102), "help", [], "any", true, true, false, 102)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 102), "help", [], "any", false, false, false, 102), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 102), "help", [], "any", false, false, false, 102))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 102), "help", [], "any", false, false, false, 102)));
            echo "</small>
            ";
        }
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 106
        echo "</div>
    </div>
";
    }

    // line 110
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 111))) {
            // line 112
            echo "        ";
            $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 113
            echo "    ";
        }
        // line 114
        echo "
    ";
        // line 115
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 117
($context["form"] ?? null), "vars", [], "any", false, false, false, 117), "ea_crud_form", [], "any", false, false, false, 117), "ea_field", [], "any", false, false, false, 117) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 117), "ea_crud_form", [], "any", false, false, false, 117), "ea_field", [], "any", false, false, false, 117), "customOptions", [], "any", false, false, false, 117), "get", [0 => "entryIsComplex"], "method", false, false, false, 117))) ? ("true") : ("false")), "data-allow-add" => ((        // line 118
($context["allow_add"] ?? null)) ? ("true") : ("false")), "data-allow-delete" => ((        // line 119
($context["allow_delete"] ?? null)) ? ("true") : ("false")), "data-num-items" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 120
($context["form"] ?? null), "children", [], "any", false, false, false, 120)), "data-form-type-name-placeholder" => ((        // line 121
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121)) : (""))]);
        // line 123
        echo "
    ";
        // line 124
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 127
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "

    ";
        // line 130
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 131
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
    }

    // line 138
    public function block_collection_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 139), "ea_crud_form", [], "any", false, true, false, 139), "ea_field", [], "any", false, true, false, 139), "customOptions", [], "any", false, true, false, 139), "get", [0 => "entryIsComplex"], "method", true, true, false, 139) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 139), "ea_crud_form", [], "any", false, true, false, 139), "ea_field", [], "any", false, true, false, 139), "customOptions", [], "any", false, true, false, 139), "get", [0 => "entryIsComplex"], "method", false, false, false, 139)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 139), "ea_crud_form", [], "any", false, true, false, 139), "ea_field", [], "any", false, true, false, 139), "customOptions", [], "any", false, true, false, 139), "get", [0 => "entryIsComplex"], "method", false, false, false, 139)) : (false));
        // line 140
        echo "
    <div class=\"field-collection-item ";
        // line 141
        echo ((($context["is_complex"] ?? null)) ? ("field-collection-item-complex") : (""));
        echo "\">
        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

        ";
        // line 144
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 144), "allow_delete", [], "any", true, true, false, 144)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 144), "allow_delete", [], "any", false, false, false, 144), false)) : (false))) {
            // line 145
            echo "            <button type=\"button\" class=\"btn btn-link field-collection-delete-button\"
                    title=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "\"
                    onclick=\"this.closest('.form-group').remove(); return false;\">
                <i class=\"fas fa-times\"></i>
            </button>
        ";
        }
        // line 151
        echo "    </div>
";
    }

    // line 154
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 155), "css_class", [], "any", true, true, false, 155)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 155), "css_class", [], "any", false, false, false, 155), "")) : ("")), "html", null, true);
        echo "\">";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 157
        echo "</div>";
    }

    // line 162
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        if ((($context["label"] ?? null) === false)) {
            // line 164
            echo "<label>";
            echo "</label>";
        } else {
            // line 166
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 167
                $context["element"] = "legend";
                // line 168
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 168)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 168), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 170
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 170)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 170), "")) : ("")) . " form-control-label"))]);
            }
            // line 172
            if (($context["required"] ?? null)) {
                // line 173
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 173)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 173), "")) : ("")) . " required"))]);
            }
            // line 175
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 176
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 177
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 178
($context["name"] ?? null), "%id%" =>                     // line 179
($context["id"] ?? null)]);
                } else {
                    // line 182
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 185
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 185, $this->getSourceContext());
                }
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 191
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 193
        if (twig_in_filter("collection", ($context["block_prefixes"] ?? null))) {
            // line 194
            echo "            ";
            // line 196
            echo "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
            // line 197
            echo "            ";
            if (($context["isEmptyCollection"] ?? null)) {
                // line 198
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 200
            echo "            ";
            if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 200), "prototype", [], "any", true, true, false, 200))) {
                // line 201
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 202
                echo "            ";
            }
            // line 203
            echo "        ";
        }
        // line 204
        echo "
        ";
        // line 205
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
    }

    // line 209
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 211
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "label/empty"], "method", false, false, false, 211));
        echo "
    </div>
";
    }

    // line 215
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 216
        echo "    ";
        $context["force_error"] = true;
        // line 217
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 220
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 221
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 222
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 223
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 224
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 225
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 232
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 233
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 233) &&  !(null === (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["extension_icons"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["extension_icons"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>
                ";
            // line 234
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 237
        echo "
        ";
        // line 238
        ob_start(function () { return ''; });
        // line 239
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 239), "vars", [], "any", false, false, false, 239), "id", [], "any", false, false, false, 239), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 242), "vars", [], "any", false, false, false, 242), "id", [], "any", false, false, false, 242), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 244
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 247
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 249), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 252
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 252)) {
            // line 253
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 253), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 255
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 256), "vars", [], "any", false, false, false, 256), "id", [], "any", false, false, false, 256), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 260
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 261
        echo "    ";
        $context["force_error"] = true;
        // line 262
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 265
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 266
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 266), "formTypeOptions", [], "any", true, true, false, 266)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 266), "formTypeOptions", [], "any", false, false, false, 266), "")) : (""));
        // line 267
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 268
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 269
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 270
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 271
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 271) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 271)))) {
                    // line 272
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 272)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 274
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 276
                echo "                </div>
            ";
            } else {
                // line 278
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 279
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-featherlight=\"#";
                // line 280
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    ";
                // line 281
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 281) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 281)))) {
                    // line 282
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 282)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 284
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 286
                echo "                </a>

                <div id=\"";
                // line 288
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 289
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 289) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 289)))) {
                    // line 290
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 290)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 292
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 294
                echo "                </div>
            ";
            }
            // line 296
            echo "        ";
        }
        // line 297
        echo "
        ";
        // line 298
        ob_start(function () { return ''; });
        // line 299
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 299), "vars", [], "any", false, false, false, 299), "id", [], "any", false, false, false, 299), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 302
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 302), "vars", [], "any", false, false, false, 302), "id", [], "any", false, false, false, 302), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 304
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 307
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 309), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 312
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 312)) {
            // line 313
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 313), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 315
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 316
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 316), "vars", [], "any", false, false, false, 316), "id", [], "any", false, false, false, 316), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 320
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 321
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 325
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 326)), 0))) {
            // line 327
            echo "        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 330
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ea_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 331
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 332
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 332)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["tab_config"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["tab_config"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">";
                // line 333
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 333)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 333), false)) : (false))) {
                    // line 334
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 334), "html", null, true);
                    echo "\"></i>";
                }
                // line 336
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["tab_config"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["label"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 336), "translationDomain", [], "any", false, false, false, 336)), "html", null, true);
                // line 337
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 337), 0))) {
                    // line 338
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 338)], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 339
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 339), "html", null, true);
                    // line 340
                    echo "</span>";
                }
                // line 342
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            echo "                </ul>
                <div class=\"tab-content\">
                    ";
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ea_form_tabs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 348
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["tab_config"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 348)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 348)) ? (_twig_default_filter((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["tab_config"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["css_class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
                            ";
                // line 349
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 349)) ? (_twig_default_filter((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["tab_config"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["help"] ?? null) : null), false)) : (false))) {
                    // line 350
                    echo "                                <div class=\"content-header-help tab-help\">
                                    ";
                    // line 351
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["tab_config"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 351), "translationDomain", [], "any", false, false, false, 351));
                    echo "
                                </div>
                            ";
                }
                // line 354
                echo "
                            ";
                // line 355
                $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
                echo "
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 362
            echo "        ";
            $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
            echo "
    ";
        }
    }

    // line 366
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 367
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_panels", [], "any", false, false, false, 367), function ($__panel_config__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; return ( !twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 367) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 367), ($context["tab_name"] ?? null)))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["panel_name"] => $context["panel_config"]) {
            // line 368
            echo "        ";
            $context["panel_has_header"] = (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", true, true, false, 368)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 368), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 368)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 368), false)) : (false)));
            // line 369
            echo "
        ";
            // line 370
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsible", [], "any", false, false, false, 370);
            // line 371
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsed", [], "any", false, false, false, 371);
            // line 372
            echo "
        <div class=\"";
            // line 373
            (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", true, true, false, 373) &&  !(null === twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 373)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 373), "html", null, true))) : (print ("")));
            echo "\">
            <div class=\"content-panel\">
                ";
            // line 375
            if (($context["panel_has_header"] ?? null)) {
                // line 376
                echo "                    <div class=\"content-panel-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 376)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 376), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        ";
                // line 377
                if (($context["collapsible"] ?? null)) {
                    // line 378
                    echo "                            <a href=\"#content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\" data-toggle=\"collapse\" class=\"content-panel-collapse ";
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\" aria-expanded=\"";
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\">
                                <i class=\"fas fw fa-chevron-right collapse-icon\"></i>
                        ";
                }
                // line 381
                echo "
                            ";
                // line 382
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 382)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 382), false)) : (false))) {
                    // line 383
                    echo "                                <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 383), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 385
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 385);
                echo "

                        ";
                // line 387
                if (($context["collapsible"] ?? null)) {
                    // line 388
                    echo "                            </a>
                        ";
                }
                // line 390
                echo "
                        ";
                // line 391
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 391)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 391), false)) : (false))) {
                    // line 392
                    echo "                            <div class=\"content-panel-header-help\">";
                    echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 392);
                    echo "</div>
                        ";
                }
                // line 394
                echo "                    </div>
                ";
            }
            // line 396
            echo "
                <div id=\"content-";
            // line 397
            echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
            echo "\" class=\"content-panel-body with-background ";
            echo (( !($context["panel_has_header"] ?? null)) ? ("without-header") : (""));
            echo " without-footer ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                    ";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 398), "block_prefixes", [], "any", false, false, false, 398)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 398), "ea_crud_form", [], "any", false, false, false, 398), "form_panel", [], "any", false, false, false, 398), $context["panel_name"]))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 399
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 399), "ea_crud_form", [], "any", false, false, false, 399), "form_tab", [], "any", false, false, false, 399) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 399), "ea_crud_form", [], "any", false, false, false, 399), "form_tab", [], "any", false, false, false, 399), ($context["tab_name"] ?? null))))) {
                    // line 400
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                        ";
                }
                // line 402
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 403
            echo "                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 407
            echo "        <div class=\"content-panel\">
            <div class=\"content-panel-body with-background without-header without-footer\">
                ";
            // line 409
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 409), "block_prefixes", [], "any", false, false, false, 409)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 409), "ea_crud_form", [], "any", false, false, false, 409), "form_tab", [], "any", false, false, false, 409) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 409), "ea_crud_form", [], "any", false, false, false, 409), "form_tab", [], "any", false, false, false, 409), ($context["tab_name"] ?? null))))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 410
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 412
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['panel_name'], $context['panel_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 418
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 419
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 419), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        echo "
";
    }

    // line 422
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 423
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 423), "name", [], "any", false, false, false, 423);
        // line 424
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 428
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 429
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 431
($context["form"] ?? null), "vars", [], "any", false, false, false, 431), "ea_crud_form", [], "any", false, false, false, 431), "ea_field", [], "any", false, false, false, 431), "customOptions", [], "any", false, false, false, 431), "get", [0 => "language"], "method", false, false, false, 431), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 432
($context["form"] ?? null), "vars", [], "any", false, false, false, 432), "ea_crud_form", [], "any", false, false, false, 432), "ea_field", [], "any", false, false, false, 432), "customOptions", [], "any", false, false, false, 432), "get", [0 => "tabSize"], "method", false, false, false, 432), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 433
($context["form"] ?? null), "vars", [], "any", false, false, false, 433), "ea_crud_form", [], "any", false, false, false, 433), "ea_field", [], "any", false, false, false, 433), "customOptions", [], "any", false, false, false, 433), "get", [0 => "indentWithTabs"], "method", false, false, false, 433)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 434
($context["form"] ?? null), "vars", [], "any", false, false, false, 434), "ea_crud_form", [], "any", false, false, false, 434), "ea_field", [], "any", false, false, false, 434), "customOptions", [], "any", false, false, false, 434), "get", [0 => "showLineNumbers"], "method", false, false, false, 434)) ? ("true") : ("false"))])]);
        // line 435
        echo "

    ";
        // line 437
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 437), "ea_crud_form", [], "any", false, false, false, 437), "ea_field", [], "any", false, false, false, 437), "customOptions", [], "any", false, false, false, 437), "get", [0 => "numOfRows"], "method", false, false, false, 437);
        // line 438
        echo "    ";
        if ( !(null === ($context["numOfRows"] ?? null))) {
            // line 439
            echo "        <style type=\"text/css\">
            ";
            // line 441
            echo "            #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, twig_round((21 * ($context["numOfRows"] ?? null))), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
    }

    // line 447
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 448
        echo "    ";
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 448), "ea_crud_form", [], "any", false, false, false, 448), "ea_field", [], "any", false, false, false, 448), "customOptions", [], "any", false, false, false, 448), "get", [0 => "numOfRows"], "method", false, false, false, 448);
        // line 449
        echo "
    ";
        // line 450
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["style" => "display: none", "class" => "ea-text-editor-content"])]);
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 453
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>

    ";
        // line 456
        if (($context["numOfRows"] ?? null)) {
            // line 457
            echo "        <style type=\"text/css\">
            trix-editor[input=";
            // line 458
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "].trix-content {
                ";
            // line 460
            echo "                min-height: ";
            echo twig_escape_filter($this->env, twig_round((($context["numOfRows"] ?? null) * 21)), "html", null, true);
            echo "px;
            }
        </style>
    ";
        }
    }

    // line 467
    public function block_ea_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 468
        echo "    <div class=\"form-section ";
        echo ((((0 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 468), "icon", [], "any", true, true, false, 468)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 468), "icon", [], "any", false, false, false, 468), false)) : (false)), false)) && (0 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 468), "label", [], "any", true, true, false, 468)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 468), "label", [], "any", false, false, false, 468), false)) : (false)), false)))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 468), "css_class", [], "any", true, true, false, 468)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 468), "css_class", [], "any", false, false, false, 468), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 470
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 470), "icon", [], "any", true, true, false, 470)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 470), "icon", [], "any", false, false, false, 470), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 470), "icon", [], "any", false, false, false, 470), "html", null, true);
            echo "\"></i>";
        }
        // line 471
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 471), "label", [], "any", true, true, false, 471)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 471), "label", [], "any", false, false, false, 471), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 471), "label", [], "any", true, true, false, 471)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 471), "label", [], "any", false, false, false, 471), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 471), "translationDomain", [], "any", false, false, false, 471));
        }
        echo "</span>
        </h2>

        ";
        // line 474
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 474), "help", [], "any", true, true, false, 474)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 474), "help", [], "any", false, false, false, 474), false)) : (false))) {
            // line 475
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 475), "help", [], "any", false, false, false, 475), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 475), "translationDomain", [], "any", false, false, false, 475));
            echo "</p>
        ";
        }
        // line 477
        echo "    </div>
";
    }

    // line 481
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 482
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 482), "query", [], "any", false, true, false, 482), "get", [0 => "filters"], "method", true, true, false, 482)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 482), "query", [], "any", false, true, false, 482), "get", [0 => "filters"], "method", false, false, false, 482), [])) : ([])));
        // line 483
        echo "
    ";
        // line 484
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 485
            echo "        <div class=\"filter-field ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 485)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 485)) {
                echo "pb-2";
            }
            echo "\" data-filter-property=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 485), "name", [], "any", false, false, false, 485), "html", null, true);
            echo "\">
            <div class=\"filter-heading\" id=\"filter-heading-";
            // line 486
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 486), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 487
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 487), "name", [], "any", false, false, false, 487), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                <a data-toggle=\"collapse\" href=\"#filter-content-";
            // line 488
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 488), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 488), "name", [], "any", false, false, false, 488), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 488), "html", null, true);
            echo "\">
                    ";
            // line 489
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 489), "label", [], "any", true, true, false, 489)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 489), "label", [], "any", false, false, false, 489), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 489), "name", [], "any", false, false, false, 489)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 489), "name", [], "any", false, false, false, 489)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 489), "translationDomain", [], "any", false, false, false, 489)), "html", null, true);
            echo "
                </a>
            </div>
            <div id=\"filter-content-";
            // line 492
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 492), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 492), "name", [], "any", false, false, false, 492), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 492), "html", null, true);
            echo "\">
                <div class=\"form-widget my-2\">
                    ";
            // line 494
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                </div>
            </div>
        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 499
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach((filterCheckbox) => {
            filterCheckbox.addEventListener('change', () => {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        document.querySelector('form#";
        // line 514
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 514), "id", [], "any", false, false, false, 514), "html", null, true);
        echo "').addEventListener('change', (event) => {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            const filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>

    ";
        // line 526
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_select2_widget.html.twig");
        echo "
";
    }

    // line 529
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 530
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 531
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 531), 'row');
        echo "
        ";
        // line 532
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 532), 'row');
        echo "
        <div id=\"wrapper_";
        // line 533
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 533), "vars", [], "any", false, false, false, 533), "id", [], "any", false, false, false, 533), "html", null, true);
        echo "\" ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 533), "vars", [], "any", false, false, false, 533), "value", [], "any", false, false, false, 533), "between"))) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 534
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 534), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 537
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 537), "vars", [], "any", false, false, false, 537), "id", [], "any", false, false, false, 537), "html", null, true);
        echo "').addEventListener('change', (event) => {
                const input = document.querySelector('#wrapper_";
        // line 538
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 538), "vars", [], "any", false, false, false, 538), "id", [], "any", false, false, false, 538), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 546
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 547
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
    }

    // line 550
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 551
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 553
        $context["placeholder"] = "";
        // line 554
        echo "            ";
        $context["title"] = "";
        // line 555
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 556
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 557
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 558
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 559
                echo "                ";
            } else {
                // line 560
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 560);
                // line 561
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 561));
                // line 562
                echo "                ";
            }
            // line 563
            echo "            ";
        }
        // line 564
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 564), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 564), "vars", [], "any", false, false, false, 564), "attr", [], "any", false, false, false, 564), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null)])]);
        echo "
            <div class=\"input-group-append\">
                <span class=\"input-group-text\" ";
        // line 566
        if (twig_test_empty(($context["currentFiles"] ?? null))) {
            echo "style=\"display: none\"";
        }
        echo ">";
        // line 567
        if (($context["currentFiles"] ?? null)) {
            // line 568
            if (($context["multiple"] ?? null)) {
                // line 569
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 569)); })), "html", null, true);
                echo "
                        ";
            } else {
                // line 571
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 571)), "html", null, true);
                echo "
                        ";
            }
        }
        // line 574
        echo "</span>
                ";
        // line 575
        if (($context["allow_delete"] ?? null)) {
            // line 576
            echo "                    <label class=\"btn ea-fileupload-delete-btn\" ";
            if (twig_test_empty(($context["currentFiles"] ?? null))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 576), "vars", [], "any", false, false, false, 576), "id", [], "any", false, false, false, 576), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 580
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 580), "vars", [], "any", false, false, false, 580), "id", [], "any", false, false, false, 580), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 585
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 586
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 589
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 590
                echo "                        <tr>
                            <td>
                                ";
                // line 592
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 592))), "html", null, true);
                    echo "\">";
                }
                // line 593
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 593)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 594
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 594), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 596
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 597
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 598
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 598)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 601
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 605
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 606
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 606), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 608
        echo "    </div>
    ";
        // line 609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 609), 'errors');
        echo "
";
    }

    // line 612
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 613
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 615
($context["form"] ?? null), "parent", [], "any", false, false, false, 615), "children", [], "any", false, false, false, 615)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["target"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 615), "id", [], "any", false, false, false, 615)]);
        // line 617
        echo "
    <div class=\"input-group\">
        ";
        // line 619
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <div class=\"input-group-append\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">
                <i class=\"fas fa-lock fa-fw\"></i>
            </button>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1756 => 619,  1752 => 617,  1750 => 615,  1748 => 613,  1744 => 612,  1738 => 609,  1735 => 608,  1729 => 606,  1726 => 605,  1720 => 601,  1711 => 598,  1708 => 597,  1704 => 596,  1699 => 594,  1694 => 593,  1688 => 592,  1684 => 590,  1680 => 589,  1675 => 586,  1673 => 585,  1664 => 580,  1652 => 576,  1650 => 575,  1647 => 574,  1640 => 571,  1634 => 569,  1632 => 568,  1630 => 567,  1625 => 566,  1619 => 564,  1616 => 563,  1613 => 562,  1610 => 561,  1607 => 560,  1604 => 559,  1601 => 558,  1598 => 557,  1595 => 556,  1592 => 555,  1589 => 554,  1587 => 553,  1583 => 551,  1579 => 550,  1572 => 547,  1568 => 546,  1564 => 543,  1557 => 538,  1553 => 537,  1547 => 534,  1539 => 533,  1535 => 532,  1531 => 531,  1528 => 530,  1524 => 529,  1518 => 526,  1503 => 514,  1486 => 499,  1467 => 494,  1456 => 492,  1450 => 489,  1442 => 488,  1436 => 487,  1432 => 486,  1419 => 485,  1402 => 484,  1399 => 483,  1396 => 482,  1392 => 481,  1387 => 477,  1381 => 475,  1379 => 474,  1370 => 471,  1364 => 470,  1356 => 468,  1352 => 467,  1342 => 460,  1338 => 458,  1335 => 457,  1333 => 456,  1327 => 453,  1321 => 450,  1318 => 449,  1315 => 448,  1311 => 447,  1300 => 441,  1297 => 439,  1294 => 438,  1292 => 437,  1288 => 435,  1286 => 434,  1285 => 433,  1284 => 432,  1283 => 431,  1281 => 429,  1277 => 428,  1270 => 424,  1267 => 423,  1263 => 422,  1256 => 419,  1252 => 418,  1242 => 412,  1233 => 410,  1229 => 409,  1225 => 407,  1217 => 403,  1211 => 402,  1205 => 400,  1202 => 399,  1198 => 398,  1188 => 397,  1185 => 396,  1181 => 394,  1175 => 392,  1173 => 391,  1170 => 390,  1166 => 388,  1164 => 387,  1158 => 385,  1152 => 383,  1150 => 382,  1147 => 381,  1134 => 378,  1132 => 377,  1125 => 376,  1123 => 375,  1118 => 373,  1115 => 372,  1112 => 371,  1110 => 370,  1107 => 369,  1104 => 368,  1098 => 367,  1094 => 366,  1086 => 362,  1080 => 358,  1063 => 355,  1060 => 354,  1054 => 351,  1051 => 350,  1049 => 349,  1038 => 348,  1021 => 347,  1017 => 345,  1009 => 342,  1006 => 340,  1004 => 339,  1000 => 338,  998 => 337,  996 => 336,  991 => 334,  989 => 333,  980 => 332,  977 => 331,  973 => 330,  968 => 327,  965 => 326,  961 => 325,  954 => 321,  950 => 320,  943 => 316,  940 => 315,  934 => 313,  932 => 312,  926 => 309,  922 => 308,  919 => 307,  915 => 304,  910 => 302,  903 => 299,  901 => 298,  898 => 297,  895 => 296,  891 => 294,  885 => 292,  879 => 290,  877 => 289,  873 => 288,  869 => 286,  863 => 284,  857 => 282,  855 => 281,  851 => 280,  848 => 279,  845 => 278,  841 => 276,  835 => 274,  829 => 272,  827 => 271,  824 => 270,  821 => 269,  819 => 268,  816 => 267,  813 => 266,  809 => 265,  802 => 262,  799 => 261,  795 => 260,  788 => 256,  785 => 255,  779 => 253,  777 => 252,  771 => 249,  767 => 248,  764 => 247,  760 => 244,  755 => 242,  748 => 239,  746 => 238,  743 => 237,  737 => 234,  733 => 233,  728 => 232,  725 => 225,  722 => 224,  719 => 223,  717 => 222,  714 => 221,  710 => 220,  703 => 217,  700 => 216,  696 => 215,  689 => 211,  686 => 210,  682 => 209,  675 => 205,  672 => 204,  669 => 203,  666 => 202,  663 => 201,  660 => 200,  654 => 198,  651 => 197,  648 => 196,  646 => 194,  644 => 193,  641 => 192,  637 => 191,  615 => 185,  611 => 182,  608 => 179,  607 => 178,  606 => 177,  604 => 176,  602 => 175,  599 => 173,  597 => 172,  594 => 170,  591 => 168,  589 => 167,  587 => 166,  583 => 164,  581 => 163,  577 => 162,  573 => 157,  571 => 156,  565 => 155,  561 => 154,  556 => 151,  548 => 146,  545 => 145,  543 => 144,  538 => 142,  534 => 141,  531 => 140,  528 => 139,  524 => 138,  516 => 133,  512 => 131,  510 => 130,  504 => 128,  500 => 127,  494 => 124,  491 => 123,  489 => 121,  488 => 120,  487 => 119,  486 => 118,  485 => 117,  484 => 115,  481 => 114,  478 => 113,  475 => 112,  472 => 111,  468 => 110,  462 => 106,  460 => 105,  454 => 102,  452 => 101,  449 => 100,  442 => 96,  436 => 95,  432 => 93,  429 => 92,  427 => 87,  424 => 86,  419 => 85,  413 => 82,  410 => 81,  408 => 80,  403 => 78,  400 => 77,  394 => 74,  391 => 73,  388 => 72,  384 => 71,  381 => 70,  378 => 69,  375 => 68,  373 => 67,  370 => 66,  368 => 65,  357 => 64,  354 => 63,  352 => 61,  350 => 60,  346 => 59,  335 => 49,  330 => 47,  327 => 46,  325 => 44,  322 => 42,  320 => 41,  318 => 40,  314 => 39,  310 => 36,  308 => 35,  306 => 34,  302 => 33,  298 => 30,  296 => 29,  294 => 28,  290 => 27,  286 => 24,  283 => 22,  281 => 21,  279 => 20,  276 => 18,  274 => 17,  270 => 16,  264 => 11,  259 => 9,  256 => 8,  250 => 6,  247 => 5,  243 => 4,  239 => 612,  236 => 611,  234 => 550,  231 => 549,  229 => 546,  226 => 545,  224 => 529,  221 => 528,  219 => 481,  216 => 479,  214 => 467,  211 => 465,  209 => 447,  206 => 445,  204 => 428,  201 => 426,  199 => 422,  196 => 421,  194 => 418,  191 => 416,  189 => 366,  186 => 365,  184 => 325,  181 => 323,  179 => 320,  176 => 319,  174 => 265,  171 => 264,  169 => 260,  166 => 259,  164 => 220,  161 => 219,  159 => 215,  156 => 214,  154 => 209,  151 => 208,  149 => 191,  146 => 190,  143 => 188,  141 => 162,  138 => 161,  135 => 159,  133 => 154,  130 => 153,  128 => 138,  125 => 137,  123 => 127,  120 => 126,  118 => 110,  115 => 109,  113 => 59,  110 => 58,  107 => 56,  105 => 39,  102 => 38,  100 => 33,  97 => 32,  95 => 27,  92 => 26,  90 => 16,  87 => 15,  84 => 13,  82 => 4,  79 => 3,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "C:\\wamp64\\www\\SF_CINE\\templates\\bundles\\EasyAdminBundle\\crud\\form_theme.html.twig");
    }
}
