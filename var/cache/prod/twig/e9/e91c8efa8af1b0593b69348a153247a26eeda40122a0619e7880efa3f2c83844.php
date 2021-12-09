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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_df6b6a8b67653050034769349b8710b2b68529f04f7c94ca38fa4f78031326e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'filters' => [$this, 'block_filters'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_37d3b881dbdc645935e0e49c879fdc415d8e02cb6fcedb2047053ae4ccad91a6"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 17
        $context["has_batch_actions"] = (1 === twig_compare(twig_length_filter($this->env, ($context["batch_actions"] ?? null)), 0));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 7)), "html", null, true))) : (print ("")));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("index" . (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) ? ((" index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "defaultPageTitle", [0 => "index"], "method", false, false, false, 12), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 12), "translationParameters", [], "any", false, false, false, 12), "EasyAdminBundle");
        // line 13
        echo "        ";
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 13), "customPageTitle", [], "any", false, false, false, 13))) ? (($context["default_title"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 13), "customPageTitle", [0 => "index"], "method", false, false, false, 13), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 13), "translationParameters", [], "any", false, false, false, 13),         // line 5
($context["__internal_37d3b881dbdc645935e0e49c879fdc415d8e02cb6fcedb2047053ae4ccad91a6"] ?? null))));
        $___internal_e210b962a3ccaa06ed50d6a72593ab29ffe935f84f7df43aae3374327b80e87e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_e210b962a3ccaa06ed50d6a72593ab29ffe935f84f7df43aae3374327b80e87e_);
    }

    // line 18
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayBlock('global_actions', $context, $blocks);
        // line 26
        echo "    ";
        $this->displayBlock('batch_actions', $context, $blocks);
    }

    // line 19
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        <div class=\"global-actions\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 22
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 22), ["action" => $context["action"]], false);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
    ";
    }

    // line 26
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "        ";
        if (($context["has_batch_actions"] ?? null)) {
            // line 28
            echo "            <div class=\"batch-actions\" style=\"display: none\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 30
                echo "                    ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 30), ["action" => $context["action"]], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </div>
        ";
        }
        // line 34
        echo "    ";
    }

    // line 37
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 39), "get", [0 => "sort"], "method", false, false, false, 39)));
        // line 40
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 40), "get", [0 => "sort"], "method", false, false, false, 40));
        // line 41
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 42
        echo "    ";
        $context["has_footer"] = (0 !== twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0));
        // line 43
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 43), "isSearchEnabled", [], "any", false, false, false, 43);
        // line 44
        echo "    ";
        $context["has_filters"] = (1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0));
        // line 45
        echo "    ";
        $context["has_datagrid_tools"] = (($context["has_search"] ?? null) || ($context["has_filters"] ?? null));
        // line 46
        echo "
    ";
        // line 47
        if (($context["has_datagrid_tools"] ?? null)) {
            // line 48
            echo "        <div class=\"datagrid-header-tools\">
            ";
            // line 49
            $this->displayBlock('search', $context, $blocks);
            // line 83
            echo "
            <div class=\"datagrid-filters\">
                ";
            // line 85
            $this->displayBlock('filters', $context, $blocks);
            // line 100
            echo "            </div>
        </div>
    ";
        }
        // line 103
        echo "
    <div class=\"content-panel\">
        <div class=\"content-panel-body with-rounded-top with-min-h-250 without-padding ";
        // line 105
        echo (( !($context["has_footer"] ?? null)) ? ("without-footer") : (""));
        echo "\">
            <table class=\"table datagrid with-rounded-top ";
        // line 106
        echo (( !($context["has_footer"] ?? null)) ? ("with-rounded-bottom") : (""));
        echo "\">
                <thead>
                ";
        // line 108
        $this->displayBlock('table_head', $context, $blocks);
        // line 137
        echo "                </thead>

                <tbody>
                ";
        // line 140
        $this->displayBlock('table_body', $context, $blocks);
        // line 198
        echo "                </tbody>
            </table>
        </div>

        ";
        // line 202
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) {
            // line 203
            echo "            <div class=\"content-panel-footer without-padding without-border\">
                ";
            // line 204
            $this->displayBlock('paginator', $context, $blocks);
            // line 207
            echo "            </div>
        ";
        }
        // line 209
        echo "    </div>

    ";
        // line 211
        $this->displayBlock('delete_form', $context, $blocks);
        // line 214
        echo "
    ";
        // line 215
        if (($context["has_filters"] ?? null)) {
            // line 216
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        // line 218
        echo "
    ";
        // line 219
        if (($context["has_batch_actions"] ?? null)) {
            // line 220
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            echo "
    ";
        }
    }

    // line 49
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                ";
        if (($context["has_search"] ?? null)) {
            // line 51
            echo "                    <div class=\"datagrid-search\">
                        <div class=\"form-action form-action-search\">
                            <form method=\"get\">
                                ";
            // line 54
            $this->displayBlock('search_form', $context, $blocks);
            // line 78
            echo "                            </form>
                        </div>
                    </div>
                ";
        }
        // line 82
        echo "            ";
    }

    // line 54
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                                    ";
        // line 56
        echo "                                    ";
        $context["query_parameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 56), "query", [], "any", false, false, false, 56), "all", [], "any", false, false, false, 56), ["referrer" => null, "page" => 1]);
        // line 59
        echo "
                                    ";
        // line 62
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->flattenArray(($context["query_parameters"] ?? null)));
        foreach ($context['_seq'] as $context["paramName"] => $context["paramValue"]) {
            // line 63
            echo "                                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["paramName"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
            echo "\">
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['paramName'], $context['paramValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                                    <div class=\"form-group\">
                                        <div class=\"form-widget\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 68
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 68), "get", [0 => "query"], "method", true, true, false, 68) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 68), "get", [0 => "query"], "method", false, false, false, 68)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 68), "get", [0 => "query"], "method", false, false, false, 68), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 68), "translationParameters", [], "any", false, false, false, 68), "EasyAdminBundle"), "html", null, true);
        echo "\" spellcheck=\"false\" autocorrect=\"false\">

                                            ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "get", [0 => "query"], "method", false, false, false, 70)) {
            // line 71
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 71), "html", null, true);
            echo "\" class=\"action-search-reset\">
                                                    <i class=\"fas fa-times-circle\"></i>
                                                </a>
                                            ";
        }
        // line 75
        echo "                                        </div>
                                    </div>
                                ";
    }

    // line 85
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "                    ";
        if (($context["has_filters"] ?? null)) {
            // line 87
            echo "                        ";
            $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 87), "query", [], "any", false, true, false, 87), "all", [], "any", false, true, false, 87), "filters", [], "array", true, true, false, 87)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 87), "query", [], "any", false, true, false, 87), "all", [], "any", false, true, false, 87)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["filters"] ?? null) : null), [])) : ([])));
            // line 88
            echo "                        <div class=\"btn-group action-filters\">
                            <a href=\"#\" data-href=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 89), "includeReferrer", [], "method", false, false, false, 89), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
            echo ((($context["applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
            echo "\" data-modal=\"#modal-filters\">
                                <i class=\"fa fa-filter fa-fw\"></i> ";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 90), "translationParameters", [], "any", false, false, false, 90), "EasyAdminBundle"), "html", null, true);
            if (($context["applied_filters"] ?? null)) {
                echo " <span class=\"text-primary\">(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["applied_filters"] ?? null)), "html", null, true);
                echo ")</span>";
            }
            // line 91
            echo "                            </a>
                            ";
            // line 92
            if (($context["applied_filters"] ?? null)) {
                // line 93
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 93), "html", null, true);
                echo "\" class=\"btn btn-secondary action-filters-reset\">
                                    <i class=\"fa fa-close\"></i>
                                </a>
                            ";
            }
            // line 97
            echo "                        </div>
                    ";
        }
        // line 99
        echo "                ";
    }

    // line 108
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "                    <tr>
                        ";
        // line 110
        if (($context["has_batch_actions"] ?? null)) {
            // line 111
            echo "                            <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                        ";
        }
        // line 113
        echo "
                        ";
        // line 114
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 115
        echo "                        ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 116
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", true, true, false, 116) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 116)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 116)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 117
            echo "                            ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 117), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 117)], "method", false, false, false, 117);
            // line 118
            echo "                            ";
            $context["next_sort_direction"] = ((($context["is_sorting_field"] ?? null)) ? ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 118), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 118)], "method", false, false, false, 118), ($context["ea_sort_desc"] ?? null)))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 119
            echo "                            ";
            $context["column_icon"] = ((($context["is_sorting_field"] ?? null)) ? ((((0 === twig_compare(($context["next_sort_direction"] ?? null), ($context["ea_sort_desc"] ?? null)))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 120
            echo "
                            <th class=\"";
            // line 121
            echo ((($context["is_sorting_field"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 121)) ? ("field-virtual") : (""));
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 121), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 121), "textDirection", [], "any", false, false, false, 121), "html", null, true);
            echo "\">
                                ";
            // line 122
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 122)) {
                // line 123
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 123) => ($context["next_sort_direction"] ?? null)]]), "includeReferrer", [], "method", false, false, false, 123), "html", null, true);
                echo "\">
                                        ";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 124);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, ($context["column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                                    </a>
                                ";
            } else {
                // line 127
                echo "                                    <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 127);
                echo "</span>
                                ";
            }
            // line 129
            echo "                            </th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
                        <th ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 132), "showEntityActionsAsDropdown", [], "any", false, false, false, 132)) {
            echo "width=\"10px\"";
        }
        echo " dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 132), "textDirection", [], "any", false, false, false, 132), "html", null, true);
        echo "\">
                            <span class=\"sr-only\">";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 133), "translationParameters", [], "any", false, false, false, 133), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        </th>
                    </tr>
                ";
    }

    // line 140
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 142
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 142)) {
                // line 143
                echo "                            ";
                $context["some_results_are_hidden"] = true;
                // line 144
                echo "                        ";
            } else {
                // line 145
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 145), "html", null, true);
                echo "\">
                                ";
                // line 146
                if (($context["has_batch_actions"] ?? null)) {
                    // line 147
                    echo "                                    <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 147), "html", null, true);
                    echo "\"></td>
                                ";
                }
                // line 149
                echo "
                                ";
                // line 150
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 150));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 151
                    echo "                                    <td class=\"";
                    echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 151), ($context["sort_field_name"] ?? null)))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 151), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 151), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 151), "textDirection", [], "any", false, false, false, 151), "html", null, true);
                    echo "\">
                                        ";
                    // line 152
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 152), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "
                                ";
                // line 156
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 179
                echo "                            </tr>

                        ";
            }
            // line 182
            echo "                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 183
            echo "                        <tr>
                            <td class=\"no-results\" colspan=\"100\">
                                ";
            // line 185
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 185), "translationParameters", [], "any", false, false, false, 185), "EasyAdminBundle"), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "
                    ";
        // line 190
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 191
            echo "                        <tr class=\"datagrid-row-empty\">
                            <td class=\"text-center\" colspan=\"";
            // line 192
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 192)) + 1), "html", null, true);
            echo "\">
                                <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                            </td>
                        </tr>
                    ";
        }
        // line 197
        echo "                ";
    }

    // line 156
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                                    <td class=\"actions\">
                                        ";
        // line 158
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 158), "showEntityActionsAsDropdown", [], "any", false, false, false, 158)) {
            // line 159
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 159));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 160
                echo "                                                ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 160), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 160), "showEntityActionsAsDropdown", [], "any", false, false, false, 160)], false);
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                                        ";
        } else {
            // line 163
            echo "                                            ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 163), "count", [], "any", false, false, false, 163), 0))) {
                // line 164
                echo "                                                <div class=\"dropdown dropdown-actions\">
                                                    <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                        <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                    </a>

                                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                                        ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 170));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 171
                    echo "                                                            ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 171), ["action" => $context["action"], "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 171), "showEntityActionsAsDropdown", [], "any", false, false, false, 171)], false);
                    echo "
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                                                    </div>
                                                </div>
                                            ";
            }
            // line 176
            echo "                                        ";
        }
        // line 177
        echo "                                    </td>
                                ";
    }

    // line 204
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        echo "                    ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 205));
        echo "
                ";
    }

    // line 211
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 212,  708 => 211,  701 => 205,  697 => 204,  692 => 177,  689 => 176,  684 => 173,  675 => 171,  671 => 170,  663 => 164,  660 => 163,  657 => 162,  648 => 160,  643 => 159,  641 => 158,  638 => 157,  634 => 156,  630 => 197,  623 => 193,  619 => 192,  616 => 191,  614 => 190,  611 => 189,  601 => 185,  597 => 183,  584 => 182,  579 => 179,  577 => 156,  574 => 155,  565 => 152,  554 => 151,  550 => 150,  547 => 149,  541 => 147,  539 => 146,  534 => 145,  531 => 144,  528 => 143,  525 => 142,  506 => 141,  502 => 140,  494 => 133,  486 => 132,  483 => 131,  476 => 129,  470 => 127,  462 => 124,  457 => 123,  455 => 122,  445 => 121,  442 => 120,  439 => 119,  436 => 118,  433 => 117,  428 => 116,  425 => 115,  423 => 114,  420 => 113,  416 => 111,  414 => 110,  411 => 109,  407 => 108,  403 => 99,  399 => 97,  391 => 93,  389 => 92,  386 => 91,  379 => 90,  373 => 89,  370 => 88,  367 => 87,  364 => 86,  360 => 85,  354 => 75,  346 => 71,  344 => 70,  337 => 68,  332 => 65,  321 => 63,  316 => 62,  313 => 59,  310 => 56,  308 => 55,  304 => 54,  300 => 82,  294 => 78,  292 => 54,  287 => 51,  284 => 50,  280 => 49,  272 => 220,  270 => 219,  267 => 218,  261 => 216,  259 => 215,  256 => 214,  254 => 211,  250 => 209,  246 => 207,  244 => 204,  241 => 203,  239 => 202,  233 => 198,  231 => 140,  226 => 137,  224 => 108,  219 => 106,  215 => 105,  211 => 103,  206 => 100,  204 => 85,  200 => 83,  198 => 49,  195 => 48,  193 => 47,  190 => 46,  187 => 45,  184 => 44,  181 => 43,  178 => 42,  175 => 41,  172 => 40,  169 => 39,  167 => 38,  163 => 37,  159 => 34,  155 => 32,  146 => 30,  142 => 29,  139 => 28,  136 => 27,  132 => 26,  127 => 24,  118 => 22,  114 => 21,  111 => 20,  107 => 19,  102 => 26,  99 => 19,  95 => 18,  91 => 11,  88 => 5,  86 => 13,  84 => 12,  82 => 11,  78 => 10,  71 => 8,  64 => 7,  60 => 4,  58 => 17,  56 => 5,  49 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\SF_CINE\\templates\\bundles\\EasyAdminBundle\\crud\\index.html.twig");
    }
}
