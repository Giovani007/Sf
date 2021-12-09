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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_35b17364fb95bff82f63d2326e62e85386a453dfcc5aae99bd01c6751d3b804b extends Template
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
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'detail_field' => [$this, 'block_detail_field'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_19aaf55147b3f923a73eaa66be4091cb7380bb8ca10f743e1f809fbf0676903a"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 7)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 7)), "html", null, true);
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-detail ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)), "html", null, true);
    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "customPageTitle", [], "any", false, false, false, 12))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["ea"] ?? null), "crud", [], "any", false, false, false, 13), "defaultPageTitle", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 13), "translationParameters", [], "any", false, false, false, 13), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["ea"] ?? null), "crud", [], "any", false, false, false, 14), "customPageTitle", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 14), "translationParameters", [], "any", false, false, false, 14),         // line 5
($context["__internal_19aaf55147b3f923a73eaa66be4091cb7380bb8ca10f743e1f809fbf0676903a"] ?? null))));
        $___internal_6bc036acf4d480470ab655b6182454da4052fda5d59adb5f7e1d7493b00d8e85_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_6bc036acf4d480470ab655b6182454da4052fda5d59adb5f7e1d7493b00d8e85_);
    }

    // line 18
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 20
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 20), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 24
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 26
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayBlock('detail_fields', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 27
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        ";
        $context["row_number"] = 0;
        // line 29
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 29));
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
            // line 30
            echo "            ";
            $context["is_decoration_field"] = twig_in_filter("field-form_panel", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 30));
            // line 31
            echo "
            ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 32) &&  !($context["is_decoration_field"] ?? null))) {
                // line 33
                echo "                ";
                $context["row_number"] = 0;
                // line 34
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_open_empty_content_panel", [$context["field"]], 34, $context, $this->getSourceContext());
                echo "
            ";
            }
            // line 36
            echo "
            ";
            // line 37
            if (($context["is_decoration_field"] ?? null)) {
                // line 38
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_close_content_panel", [], 39, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 41
                echo "
                ";
                // line 42
                $context["row_number"] = 0;
                // line 43
                echo "                ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 43)) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "help", [], "any", false, false, false, 43)))) {
                    // line 44
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_open_empty_content_panel", [$context["field"]], 44, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 46
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_open_content_panel_with_header", [$context["field"]], 46, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 48
                echo "            ";
            }
            // line 49
            echo "
            ";
            // line 50
            $this->displayBlock('detail_field', $context, $blocks);
            // line 55
            echo "
            ";
            // line 56
            $context["row_number"] = ((($context["is_decoration_field"] ?? null)) ? (($context["row_number"] ?? null)) : ((($context["row_number"] ?? null) + 1)));
            // line 57
            echo "        ";
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
        // line 58
        echo "
        ";
        // line 59
        echo twig_call_macro($macros["_self"], "macro_close_content_panel", [], 59, $context, $this->getSourceContext());
        echo "
    ";
    }

    // line 50
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                ";
        if ( !($context["is_decoration_field"] ?? null)) {
            // line 52
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_render_field", [($context["entity"] ?? null), ($context["field"] ?? null), ($context["row_number"] ?? null)], 52, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 54
        echo "            ";
    }

    // line 62
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 63)], false);
        echo "
    ";
    }

    // line 67
    public function macro_open_empty_content_panel($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 68
            echo "
<div class=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
    <div class=\"content-panel\">
        <div class=\"content-panel-body without-header without-footer without-padding\">
            <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 75
    public function macro_close_content_panel(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 76
            echo "            </dl>
        </div>
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 82
    public function macro_open_content_panel_with_header($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 83
            echo "    ";
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsible"], "method", false, false, false, 83);
            // line 84
            echo "    ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsed"], "method", false, false, false, 84);
            // line 85
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 85), "html", null, true);
            echo "\">
        <div class=\"content-panel\">
            <div class=\"content-panel-header ";
            // line 87
            echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
            echo " ";
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 87))) ? ("with-help") : (""));
            echo "\">
                ";
            // line 88
            if (($context["collapsible"] ?? null)) {
                // line 89
                echo "                    <a href=\"#content-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 89), "html", null, true);
                echo "\" data-toggle=\"collapse\" class=\"content-panel-collapse ";
                echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                echo "\" aria-expanded=\"";
                echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                echo "\" aria-controls=\"content-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 89), "html", null, true);
                echo "\">
                        <i class=\"fas fw fa-chevron-right collapse-icon\"></i>
                ";
            }
            // line 92
            echo "
                        ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "icon"], "method", false, false, false, 93)) {
                // line 94
                echo "                            <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "icon"], "method", false, false, false, 94), "html", null, true);
                echo "\"></i>
                        ";
            }
            // line 96
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 96);
            echo "

                ";
            // line 98
            if (($context["collapsible"] ?? null)) {
                // line 99
                echo "                    </a>
                ";
            }
            // line 101
            echo "
                ";
            // line 102
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 102))) {
                // line 103
                echo "                    <div class=\"content-panel-header-help\">";
                echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 103);
                echo "</div>
                ";
            }
            // line 105
            echo "            </div>

            <div id=\"content-";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 107), "html", null, true);
            echo "\" class=\"content-panel-body without-footer without-padding ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 111
    public function macro_render_field($__entity__ = null, $__field__ = null, $__row_number__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "row_number" => $__row_number__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 112
            echo "    <div class=\"data-row ";
            echo (((($context["row_number"] ?? null) % 2 == 0)) ? ("with-background") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 112), "html", null, true);
            echo "\">
        <dd>
            ";
            // line 114
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 114);
            echo "

            ";
            // line 116
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 116))) {
                // line 117
                echo "                <span class=\"data-help\">
                    <i class=\"far fa-question-circle\" data-toggle=\"tooltip\" title=\"";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 118), "html_attr");
                echo "\"></i>
                </span>
            ";
            }
            // line 121
            echo "        </dd>
        <dt>
            ";
            // line 123
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 123), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            echo "
        </dt>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 123,  462 => 121,  456 => 118,  453 => 117,  451 => 116,  446 => 114,  438 => 112,  423 => 111,  407 => 107,  403 => 105,  397 => 103,  395 => 102,  392 => 101,  388 => 99,  386 => 98,  380 => 96,  374 => 94,  372 => 93,  369 => 92,  356 => 89,  354 => 88,  348 => 87,  342 => 85,  339 => 84,  336 => 83,  323 => 82,  310 => 76,  298 => 75,  284 => 69,  281 => 68,  268 => 67,  261 => 63,  257 => 62,  253 => 54,  247 => 52,  244 => 51,  240 => 50,  234 => 59,  231 => 58,  217 => 57,  215 => 56,  212 => 55,  210 => 50,  207 => 49,  204 => 48,  198 => 46,  192 => 44,  189 => 43,  187 => 42,  184 => 41,  178 => 39,  175 => 38,  173 => 37,  170 => 36,  164 => 34,  161 => 33,  159 => 32,  156 => 31,  153 => 30,  135 => 29,  132 => 28,  128 => 27,  124 => 62,  121 => 61,  118 => 27,  114 => 26,  107 => 24,  96 => 20,  91 => 19,  87 => 18,  83 => 11,  80 => 5,  79 => 14,  78 => 13,  77 => 12,  75 => 11,  71 => 10,  64 => 8,  57 => 7,  53 => 3,  51 => 5,  44 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "C:\\wamp64\\www\\SF_CINE\\templates\\bundles\\EasyAdminBundle\\crud\\detail.html.twig");
    }
}
