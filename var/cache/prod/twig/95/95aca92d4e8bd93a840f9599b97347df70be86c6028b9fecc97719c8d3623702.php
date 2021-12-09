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

/* @EasyAdmin/crud/edit.html.twig */
class __TwigTemplate_6a65ed99604cfd1a1f3b9ef137ae17f08fbc750516e2b87485f26c11303289cd extends Template
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
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'edit_form' => [$this, 'block_edit_form'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/edit.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["edit_form"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 4), "formThemes", [], "any", false, false, false, 4), false);
        // line 6
        $context["__internal_6a90c10c771a71e4b127e3d5c139177a1a979241232b4f9f699ab5b500065ebd"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-edit-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 8)), "html", null, true);
    }

    // line 9
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-edit ea-edit-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 9)), "html", null, true);
    }

    // line 11
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 13), "ea_crud_form", [], "any", false, false, false, 13), "assets", [], "any", false, false, false, 13), "headContents", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 14
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 18
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 20), "ea_crud_form", [], "any", false, false, false, 20), "assets", [], "any", false, false, false, 20), "bodyContents", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 21
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 25
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 27), "ea_crud_form", [], "any", false, false, false, 27), "assets", [], "any", false, false, false, 27), "cssFiles", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 28
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 31), "ea_crud_form", [], "any", false, false, false, 31), "assets", [], "any", false, false, false, 31), "webpackEncoreEntries", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["webpack_encore_entry"]) {
            // line 32
            echo "        ";
            echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_link_tags", $context["webpack_encore_entry"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webpack_encore_entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 36
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 38), "ea_crud_form", [], "any", false, false, false, 38), "assets", [], "any", false, false, false, 38), "jsFiles", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 39
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 42), "ea_crud_form", [], "any", false, false, false, 42), "assets", [], "any", false, false, false, 42), "webpackEncoreEntries", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["webpack_encore_entry"]) {
            // line 43
            echo "        ";
            echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_script_tags", $context["webpack_encore_entry"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webpack_encore_entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 47
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        ob_start(function () { return ''; });
        // line 49
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 49), "customPageTitle", [], "any", false, false, false, 49))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["ea"] ?? null), "crud", [], "any", false, false, false, 50), "defaultPageTitle", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 50), "translationParameters", [], "any", false, false, false, 50), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
($context["ea"] ?? null), "crud", [], "any", false, false, false, 51), "customPageTitle", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 51), "translationParameters", [], "any", false, false, false, 51),         // line 6
($context["__internal_6a90c10c771a71e4b127e3d5c139177a1a979241232b4f9f699ab5b500065ebd"] ?? null))));
        $___internal_89a02f2fc4672e7f3bdd0f31385e1ad2a8f9148480be37cc49d124c580bbd6d9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo twig_spaceless($___internal_89a02f2fc4672e7f3bdd0f31385e1ad2a8f9148480be37cc49d124c580bbd6d9_);
    }

    // line 55
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 57
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 57), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 61
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    ";
        $this->displayBlock('edit_form', $context, $blocks);
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 62
    public function block_edit_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form');
        echo "
    ";
    }

    // line 66
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 67)], false);
        echo "
    ";
    }

    // line 71
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    ";
        // line 74
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 74,  279 => 72,  275 => 71,  268 => 67,  264 => 66,  257 => 63,  253 => 62,  249 => 66,  246 => 65,  243 => 62,  239 => 61,  228 => 57,  223 => 56,  219 => 55,  215 => 48,  212 => 6,  211 => 51,  210 => 50,  209 => 49,  207 => 48,  203 => 47,  192 => 43,  188 => 42,  185 => 41,  176 => 39,  172 => 38,  167 => 37,  163 => 36,  152 => 32,  148 => 31,  145 => 30,  136 => 28,  132 => 27,  127 => 26,  123 => 25,  112 => 21,  108 => 20,  103 => 19,  99 => 18,  88 => 14,  84 => 13,  79 => 12,  75 => 11,  68 => 9,  61 => 8,  57 => 3,  55 => 6,  53 => 4,  46 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/edit.html.twig", "C:\\wamp64\\www\\SF_CINE\\templates\\bundles\\EasyAdminBundle\\crud\\edit.html.twig");
    }
}
