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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_770036358e48e1b6c065739358d03c0b57b53ac46a87094673ba9b68e3467351 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'user_menu' => [$this, 'block_user_menu'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'sidebar' => [$this, 'block_sidebar'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_2b2009c0ce40590e8044df917cbca5328ca6ceb0209b78400336bf0a30035b59"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    <title>";
        // line 15
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

    ";
        // line 17
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        if ((0 === twig_compare("rtl", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 49), "textDirection", [], "any", false, false, false, 49)))) {
            // line 50
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.rtl.css"), "html", null, true);
            echo "\">
        <link rel=\"stylesheet\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app-custom-rtl.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 59
        echo "</head>

";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 221
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 17
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 21
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssFiles", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssFiles", [], "any", false, false, false, 22)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssFiles", [], "any", false, false, false, 22)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 26), "webpackEncoreEntries", [], "any", true, true, false, 26) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 26), "webpackEncoreEntries", [], "any", false, false, false, 26)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 26), "webpackEncoreEntries", [], "any", false, false, false, 26)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["webpack_encore_entry"]) {
            // line 27
            echo "            ";
            echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_link_tags", $context["webpack_encore_entry"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webpack_encore_entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    ";
    }

    // line 31
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 32)), "html", null, true);
        echo "\">
    ";
    }

    // line 35
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 39
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsFiles", [], "any", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsFiles", [], "any", false, false, false, 40)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 40), "jsFiles", [], "any", false, false, false, 40)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 41
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 44), "webpackEncoreEntries", [], "any", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 44), "webpackEncoreEntries", [], "any", false, false, false, 44)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 44), "webpackEncoreEntries", [], "any", false, false, false, 44)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["webpack_encore_entry"]) {
            // line 45
            echo "            ";
            echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_script_tags", $context["webpack_encore_entry"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webpack_encore_entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    ";
    }

    // line 54
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 55), "headContents", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 55), "headContents", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 55), "headContents", [], "any", false, false, false, 55)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 56
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    ";
    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    ";
        // line 63
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 211
        echo "
    ";
        // line 212
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 213
        echo "
    ";
        // line 214
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 219
        echo "    </body>
";
    }

    // line 62
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 63
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "        <script>
            document.body.classList.add(
                'ea-content-width-' + (localStorage.getItem('ea/content/width') || '";
        // line 66
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 66), "contentWidth", [], "any", true, true, false, 66) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 66), "contentWidth", [], "any", false, false, false, 66)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 66), "contentWidth", [], "any", false, false, false, 66)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 66) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 66)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 66)) : ("normal")))), "html", null, true);
        echo "'),
                'ea-sidebar-width-' + (localStorage.getItem('ea/sidebar/width') || '";
        // line 67
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 67), "sidebarWidth", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 67), "sidebarWidth", [], "any", false, false, false, 67)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 67), "sidebarWidth", [], "any", false, false, false, 67)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 67)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 67)) : ("normal")))), "html", null, true);
        echo "')
            );
        </script>
    ";
    }

    // line 72
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 76
        echo "
        <div class=\"wrapper\">
            ";
        // line 78
        $this->displayBlock('wrapper', $context, $blocks);
        // line 209
        echo "        </div>
    ";
    }

    // line 73
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 74));
        echo "
        ";
    }

    // line 78
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                <header class=\"main-header\">
                    ";
        // line 80
        $this->displayBlock('header', $context, $blocks);
        // line 146
        echo "                </header>

                <aside class=\"main-sidebar\">
                    ";
        // line 149
        $this->displayBlock('sidebar', $context, $blocks);
        // line 157
        echo "                </aside>

                <div class=\"content-wrapper\">
                    <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>

                    ";
        // line 162
        $this->displayBlock('content', $context, $blocks);
        // line 205
        echo "
                    <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                </div>
            ";
    }

    // line 80
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                        <nav class=\"navbar\" role=\"navigation\">
                            ";
        // line 82
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 95
        echo "                        </nav>

                        ";
        // line 97
        ob_start(function () { return ''; });
        // line 98
        echo "                            <div class=\"popover-content-section user-details ";
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 98), "items", [], "any", false, false, false, 98)), 0))) ? ("user-has-actions") : (""));
        echo "\">
                                <p class=\"small text-muted mb-0\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                                <p class=\"user-details-name\">
                                    ";
        // line 101
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 101))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101))), "html", null, true);
        echo "
                                </p>
                            </div>

                            ";
        // line 105
        $this->displayBlock('user_menu', $context, $blocks);
        // line 121
        echo "                        ";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        echo "
                        <div class=\"content-top navbar-custom-menu\">
                            ";
        // line 124
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 144
        echo "                        </div>
                    ";
    }

    // line 82
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                                <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                                    <i class=\"fa fa-fw fa-bars\"></i>
                                </button>

                                <div id=\"header-logo\">
                                    ";
        // line 88
        $this->displayBlock('header_logo', $context, $blocks);
        // line 93
        echo "                                </div>
                            ";
    }

    // line 88
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                                        <a class=\"logo ";
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 89)), 14))) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 89)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 89));
        echo "\">
                                            ";
        // line 90
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 90);
        echo "
                                        </a>
                                    ";
    }

    // line 105
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "                                ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 106), "items", [], "any", false, false, false, 106)), 0))) {
            // line 107
            echo "                                    <div class=\"popover-content-section user-menu\">
                                        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 108), "items", [], "any", false, false, false, 108));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 109
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "                                                <hr class=\"m-0\" />
                                            ";
                } else {
                    // line 112
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 112), "html", null, true);
                    echo "\" class=\"user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 112), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 112), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 112), "html", null, true);
                    echo "\" referrerpolicy=\"origin-when-cross-origin\">
                                                    ";
                    // line 113
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 113))) {
                        echo "<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 113), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 114
                    echo "                                                    <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 114), "html", null, true);
                    echo "</span>
                                                </a>
                                            ";
                }
                // line 117
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                                    </div>
                                ";
        }
        // line 120
        echo "                            ";
    }

    // line 124
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "                                ";
        if (twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) {
            // line 126
            echo "                                    ";
            $context["impersonator_permission"] = "IS_IMPERSONATOR";
            // line 127
            echo "                                ";
        } else {
            // line 128
            echo "                                    ";
            $context["impersonator_permission"] = "ROLE_PREVIOUS_ADMIN";
            // line 129
            echo "                                ";
        }
        // line 130
        echo "
                                <div class=\"user user-menu-wrapper ";
        // line 131
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\" data-toggle=\"popover\" data-placement=\"bottom\" data-container=\".user-menu-wrapper\" data-content=\"";
        echo twig_escape_filter($this->env, ($context["_user_menu_content"] ?? null), "html_attr");
        echo "\" data-html=\"true\">
                                    ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 132), "isAvatarDisplayed", [], "any", false, false, false, 132)) {
            // line 133
            echo "                                        ";
            if ((0 === twig_compare(null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 133), "avatarUrl", [], "any", false, false, false, 133)))) {
                // line 134
                echo "                                            <i class=\"fa fa-fw ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 134))) ? ("fa-user-circle") : ("fa-user-times"));
                echo " user-avatar\"></i>
                                        ";
            } else {
                // line 136
                echo "                                            <img class=\"user-avatar\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 136), "avatarUrl", [], "any", false, false, false, 136), "html", null, true);
                echo "\" />
                                        ";
            }
            // line 138
            echo "                                    ";
        }
        // line 139
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 139), "isNameDisplayed", [], "any", false, false, false, 139)) {
            // line 140
            echo "                                        <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 142
        echo "                                </div>
                            ";
    }

    // line 149
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "                        <section class=\"sidebar\">
                            ";
        // line 151
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 154
        echo "                        </section>

                    ";
    }

    // line 151
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 152));
        echo "
                            ";
    }

    // line 162
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "                        <div class=\"content\">
                            ";
        // line 164
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 190
        echo "
                            <section id=\"main\" class=\"content-body\">
                                ";
        // line 192
        $this->displayBlock('main', $context, $blocks);
        // line 193
        echo "                            </section>

                            ";
        // line 195
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 203
        echo "                        </div>
                    ";
    }

    // line 164
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "                                ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 165), "helpMessage", [], "any", true, true, false, 165) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 165), "helpMessage", [], "any", false, false, false, 165)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 165), "helpMessage", [], "any", false, false, false, 165)) : ("")));
        // line 166
        echo "                                <section class=\"content-header\">
                                    ";
        // line 167
        $this->displayBlock('content_header', $context, $blocks);
        // line 188
        echo "                                </section>
                            ";
    }

    // line 167
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "                                        <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 171
        $this->displayBlock('content_title', $context, $blocks);
        // line 172
        echo "
                                                    ";
        // line 173
        $this->displayBlock('content_help', $context, $blocks);
        // line 180
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 183
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 186
        echo "                                        </div>
                                    ";
    }

    // line 171
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 173
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 175
            echo "                                                            <span class=\"content-header-help\">
                                                                <i class=\"far fa-question-circle\" data-toggle=\"tooltip\" title=\"";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 176), "helpMessage", [], "any", false, false, false, 176), "html_attr");
            echo "\"></i>
                                                            </span>
                                                        ";
        }
        // line 179
        echo "                                                    ";
    }

    // line 183
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 192
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 195
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 196
        echo "                                ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 197
        echo "                                ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 198
            echo "                                    <section class=\"content-footer\">
                                        ";
            // line 199
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                    </section>
                                ";
        }
        // line 202
        echo "                            ";
    }

    // line 212
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 214
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 215), "bodyContents", [], "any", true, true, false, 215) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 215), "bodyContents", [], "any", false, false, false, 215)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 215), "bodyContents", [], "any", false, false, false, 215)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 216
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  821 => 218,  812 => 216,  807 => 215,  803 => 214,  797 => 212,  793 => 202,  787 => 199,  784 => 198,  781 => 197,  778 => 196,  774 => 195,  768 => 192,  756 => 184,  752 => 183,  748 => 179,  742 => 176,  739 => 175,  736 => 174,  732 => 173,  726 => 171,  721 => 186,  719 => 183,  714 => 180,  712 => 173,  709 => 172,  707 => 171,  702 => 168,  698 => 167,  693 => 188,  691 => 167,  688 => 166,  685 => 165,  681 => 164,  676 => 203,  674 => 195,  670 => 193,  668 => 192,  664 => 190,  662 => 164,  659 => 163,  655 => 162,  648 => 152,  644 => 151,  638 => 154,  636 => 151,  633 => 150,  629 => 149,  624 => 142,  618 => 140,  615 => 139,  612 => 138,  606 => 136,  600 => 134,  597 => 133,  595 => 132,  589 => 131,  586 => 130,  583 => 129,  580 => 128,  577 => 127,  574 => 126,  571 => 125,  567 => 124,  563 => 120,  559 => 118,  553 => 117,  546 => 114,  540 => 113,  529 => 112,  525 => 110,  522 => 109,  518 => 108,  515 => 107,  512 => 106,  508 => 105,  501 => 90,  492 => 89,  488 => 88,  483 => 93,  481 => 88,  474 => 83,  470 => 82,  465 => 144,  463 => 124,  459 => 122,  456 => 121,  454 => 105,  447 => 101,  442 => 99,  437 => 98,  435 => 97,  431 => 95,  429 => 82,  426 => 81,  422 => 80,  415 => 205,  413 => 162,  406 => 157,  404 => 149,  399 => 146,  397 => 80,  394 => 79,  390 => 78,  383 => 74,  379 => 73,  374 => 209,  372 => 78,  368 => 76,  365 => 73,  361 => 72,  353 => 67,  349 => 66,  345 => 64,  341 => 63,  330 => 62,  325 => 219,  323 => 214,  320 => 213,  318 => 212,  315 => 211,  313 => 72,  310 => 71,  308 => 63,  301 => 62,  297 => 61,  293 => 58,  284 => 56,  279 => 55,  275 => 54,  271 => 47,  262 => 45,  258 => 44,  255 => 43,  246 => 41,  241 => 40,  237 => 39,  230 => 36,  226 => 35,  219 => 32,  215 => 31,  211 => 29,  202 => 27,  198 => 26,  195 => 25,  186 => 23,  181 => 22,  177 => 21,  170 => 18,  166 => 17,  159 => 15,  150 => 8,  146 => 7,  141 => 221,  139 => 61,  135 => 59,  133 => 54,  130 => 53,  125 => 51,  120 => 50,  118 => 49,  115 => 48,  113 => 39,  110 => 38,  108 => 35,  105 => 34,  103 => 31,  100 => 30,  98 => 21,  95 => 20,  93 => 17,  88 => 15,  85 => 14,  83 => 7,  76 => 5,  72 => 3,  70 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "C:\\wamp64\\www\\SF_CINE\\templates\\bundles\\EasyAdminBundle\\layout.html.twig");
    }
}
