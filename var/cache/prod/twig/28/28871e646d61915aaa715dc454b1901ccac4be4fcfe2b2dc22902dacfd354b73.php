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

/* @EasyAdmin/crud/new.html.twig */
class __TwigTemplate_6a828656a35656d5b26a92f32ea970e6b4486ffd432631b7860fd632969b0fba extends Template
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
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'new_form' => [$this, 'block_new_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/new.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["new_form"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 4), "formThemes", [], "any", false, false, false, 4), false);
        // line 6
        $context["__internal_19661b86fec4b122bffbcc5c81fb710986b1a0ac20173fcde9ec1ca6eab22758"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-new-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 8)), "html", null, true);
    }

    // line 9
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-new ea-new-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 9)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["new_form"] ?? null), "vars", [], "any", false, false, false, 13), "ea_crud_form", [], "any", false, false, false, 13), "assets", [], "any", false, false, false, 13), "headContents", [], "any", false, false, false, 13));
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
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["new_form"] ?? null), "vars", [], "any", false, false, false, 20), "ea_crud_form", [], "any", false, false, false, 20), "assets", [], "any", false, false, false, 20), "cssFiles", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 21
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["new_form"] ?? null), "vars", [], "any", false, false, false, 24), "ea_crud_form", [], "any", false, false, false, 24), "assets", [], "any", false, false, false, 24), "webpackEncoreEntries", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["webpack_encore_entry"]) {
            // line 25
            echo "        ";
            echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_link_tags", $context["webpack_encore_entry"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webpack_encore_entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 29
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["new_form"] ?? null), "vars", [], "any", false, false, false, 31), "ea_crud_form", [], "any", false, false, false, 31), "assets", [], "any", false, false, false, 31), "jsFiles", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 32
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["new_form"] ?? null), "vars", [], "any", false, false, false, 35), "ea_crud_form", [], "any", false, false, false, 35), "assets", [], "any", false, false, false, 35), "webpackEncoreEntries", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["webpack_encore_entry"]) {
            // line 36
            echo "        ";
            echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_script_tags", $context["webpack_encore_entry"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webpack_encore_entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 40
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        ob_start(function () { return ''; });
        // line 42
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 42), "defaultPageTitle", [0 => "new"], "method", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 42), "translationParameters", [], "any", false, false, false, 42), "EasyAdminBundle");
        // line 43
        echo "        ";
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 43), "customPageTitle", [], "any", false, false, false, 43))) ? (($context["default_title"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 43), "customPageTitle", [0 => "new"], "method", false, false, false, 43), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 43), "translationParameters", [], "any", false, false, false, 43),         // line 6
($context["__internal_19661b86fec4b122bffbcc5c81fb710986b1a0ac20173fcde9ec1ca6eab22758"] ?? null))));
        $___internal_ab98bef849d442a9491c65163a89265385aca1d51190d3f6df150ed2177ed416_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo twig_spaceless($___internal_ab98bef849d442a9491c65163a89265385aca1d51190d3f6df150ed2177ed416_);
    }

    // line 47
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 49
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 49), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 53
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    ";
        $this->displayBlock('new_form', $context, $blocks);
    }

    public function block_new_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["new_form"] ?? null), 'form');
        echo "
    ";
    }

    // line 59
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    ";
        // line 62
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 62,  237 => 60,  233 => 59,  226 => 55,  218 => 54,  214 => 53,  203 => 49,  198 => 48,  194 => 47,  190 => 41,  187 => 6,  185 => 43,  183 => 42,  181 => 41,  177 => 40,  166 => 36,  162 => 35,  159 => 34,  150 => 32,  146 => 31,  141 => 30,  137 => 29,  126 => 25,  122 => 24,  119 => 23,  110 => 21,  106 => 20,  101 => 19,  97 => 18,  86 => 14,  82 => 13,  77 => 12,  73 => 11,  66 => 9,  59 => 8,  55 => 3,  53 => 6,  51 => 4,  44 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/new.html.twig", "C:\\wamp64\\www\\SF_CINE\\templates\\bundles\\EasyAdminBundle\\crud\\new.html.twig");
    }
}
