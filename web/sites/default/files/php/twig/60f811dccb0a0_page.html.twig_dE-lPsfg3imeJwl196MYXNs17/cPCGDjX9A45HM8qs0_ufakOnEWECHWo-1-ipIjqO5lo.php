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

/* themes/gin/templates/page/page.html.twig */
class __TwigTemplate_58ea2cbe82c91762e18b697afdf885597c1c1817726d452af10e4443d1ea513a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["page_title_block"] = ($this->sandbox->ensureToStringAllowed(($context["active_admin_theme"] ?? null), 42, $this->source) . "_page_title");
        // line 43
        $context["local_actions_block"] = ($this->sandbox->ensureToStringAllowed(($context["active_admin_theme"] ?? null), 43, $this->source) . "_local_actions");
        // line 44
        echo "
<div class=\"region region-meta layout-container\">
  <div class=\"breadcrumb-wrapper\">
    ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
  </div>
  ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gin_secondary_toolbar", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
</div>

<header class=\"region region-sticky\">
  <div class=\"layout-container region-sticky__items\">
    ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 54)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["page_title_block"] ?? null)] ?? null) : null), 54, $this->source), "html", null, true);
        echo "
    ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 55)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["local_actions_block"] ?? null)] ?? null) : null), 55, $this->source), "html", null, true);
        echo "
  </div>
</header>

<div class=\"content-header clearfix\">
  <div class=\"layout-container\">
    ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 61), 61, $this->source), $this->sandbox->ensureToStringAllowed(($context["page_title_block"] ?? null), 61, $this->source)), "html", null, true);
        echo "
  </div>
</div>

<div class=\"sticky-shadow\"></div>

<div class=\"layout-container\">
  ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
  <main class=\"page-content clearfix\" role=\"main\">
    <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
    ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "
    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 72)) {
            // line 73
            echo "      <div class=\"help\">
        ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 77
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 77), 77, $this->source), $this->sandbox->ensureToStringAllowed(($context["local_actions_block"] ?? null), 77, $this->source)), "html", null, true);
        echo "
  </main>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gin/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 77,  99 => 74,  96 => 73,  94 => 72,  90 => 71,  84 => 68,  74 => 61,  65 => 55,  61 => 54,  53 => 49,  48 => 47,  43 => 44,  41 => 43,  39 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gin/templates/page/page.html.twig", "C:\\xampp\\htdocs\\neu_de24\\web\\themes\\gin\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 72);
        static $filters = array("escape" => 47, "without" => 61);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
