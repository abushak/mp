<?php

/* themes/marketplace/templates/page.html.twig */
class __TwigTemplate_14a8e34f1fcaea58ab704c6eb564f5fab98d018d804b96cd1e387e318d5657b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 64);
        $filters = array("raw" => 62, "t" => 75);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        echo "
<a href=\"";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
        echo "\" id=\"base-path\" style=\"display: none;\"></a>
<div id=\"page-wrapper\">
  <div id=\"page\" class=\"page\" ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["page_css"] ?? null)));
        echo ">

  \t";
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "show_skins_menu", array())) {
            // line 65
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "show_skins_menu", array())));
            echo "
 \t";
        }
        // line 67
        echo "
    ";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "headline", array())) {
            // line 69
            echo "      <section id=\"headline\" class=\"headline\">
        <div class=\"section container\">
          ";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "headline", array()), "html", null, true));
            echo "
        </div>
      </section>
    ";
        }
        // line 75
        echo "    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
      <div class=\"section container\">
\t\t  <button id=\"mobile-menu-button\" type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#block-mainnavigation\" aria-expanded=\"false\">
\t\t\t  <span class=\"sr-only\">Toggle navigation</span>
\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t  <span class=\"icon-bar\"></span>
\t\t  </button>
        ";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
        echo "
        ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
        ";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "

      </div>
    </header>
    ";
        // line 89
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 90
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section clearfix\" role=\"complementary\">
          ";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 96
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 97
            echo "        <div class=\"section-breadcrumb\">
            <div class=\"container\">
                ";
            // line 99
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
            </div>
        </div>
    ";
        }
        // line 103
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 107
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 108
            echo "\t\t\t\t\t<div id=\"sidebar-first\" class=\"column sidebar col-md-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_width"] ?? null), "html", null, true));
            echo " col-sm-12\">
\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t";
            // line 110
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</aside>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 114
        echo "
\t\t\t\t<div class=\"col-md-";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_width"] ?? null), "html", null, true));
        echo " col-sm-12\">
\t\t\t\t\t<div id=\"highlighted\" class=\"highlighted\">
\t\t\t\t\t\t<div class=\"row\" role=\"complementary\">
\t\t\t\t\t\t\t";
        // line 118
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_first", array())) {
            // line 119
            echo "\t\t\t\t\t\t\t\t<div class=\"panel-column page-highlighted-first col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 120
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_first", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_second", array())) {
            // line 124
            echo "\t\t\t\t\t\t\t\t<div class=\"panel-column page-highlighted-second col-md-8\">
\t\t\t\t\t\t\t\t\t";
            // line 125
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_second", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_third", array())) {
            // line 129
            echo "\t\t\t\t\t\t\t\t<div class=\"panel-column page-highlighted-third col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 130
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_third", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 135
        if ($this->getAttribute(($context["page"] ?? null), "panel_first", array())) {
            // line 136
            echo "\t\t\t\t\t\t<div class=\"panel-top\">
\t\t\t\t\t\t\t<aside class=\"clearfix\" role=\"complementary\">
\t\t\t\t\t\t\t\t";
            // line 138
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "panel_first", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t<main id=\"content\" class=\"column main-content\" role=\"main\">
\t\t\t\t\t\t<section class=\"section\">
\t\t\t\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t\t\t\t\t";
        // line 145
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
\t\t\t\t\t\t</section>
\t\t\t\t\t</main>
\t\t\t\t</div>

\t\t\t\t";
        // line 150
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 151
            echo "\t\t\t\t\t<div id=\"sidebar-second\" class=\"column sidebar col-md-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_width"] ?? null), "html", null, true));
            echo " col-sm-12\">
\t\t\t\t\t\t<aside class=\"section\" role=\"complementary\">
\t\t\t\t\t\t\t";
            // line 153
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</aside>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 157
        echo "\t\t\t</div>
\t\t</div>
      </div>
    </div>
    ";
        // line 161
        if (($this->getAttribute(($context["page"] ?? null), "panel_second", array()) || $this->getAttribute(($context["page"] ?? null), "panel_third", array()))) {
            // line 162
            echo "\t\t<div class=\"panel-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t";
            // line 164
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "panel_second", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t\t";
            // line 166
            if ($this->getAttribute(($context["page"] ?? null), "panel_third", array())) {
                // line 167
                echo "\t\t\t\t<div class=\"panel-third\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
                // line 169
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "panel_third", array()), "html", null, true));
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 173
            echo "\t\t</div>
    ";
        }
        // line 175
        echo "    <footer class=\"site-footer\">
      <div class=\"container\">
        ";
        // line 177
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 178
            echo "          <div class=\"site-footer__top\">
            ";
            // line 179
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
            ";
            // line 180
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
            ";
            // line 181
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
            ";
            // line 182
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 185
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 186
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 187
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 190
        echo "      </div>
    </footer>
    <a title=\"Back to Top\" class=\"btn-btt\" href=\"#Top\"></a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/marketplace/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 190,  311 => 187,  308 => 186,  305 => 185,  299 => 182,  295 => 181,  291 => 180,  287 => 179,  284 => 178,  282 => 177,  278 => 175,  274 => 173,  267 => 169,  263 => 167,  261 => 166,  256 => 164,  252 => 162,  250 => 161,  244 => 157,  237 => 153,  231 => 151,  229 => 150,  221 => 145,  216 => 142,  209 => 138,  205 => 136,  203 => 135,  199 => 133,  193 => 130,  190 => 129,  187 => 128,  181 => 125,  178 => 124,  175 => 123,  169 => 120,  166 => 119,  164 => 118,  158 => 115,  155 => 114,  148 => 110,  142 => 108,  140 => 107,  134 => 103,  127 => 99,  123 => 97,  120 => 96,  113 => 92,  109 => 90,  107 => 89,  100 => 85,  96 => 84,  92 => 83,  80 => 75,  73 => 71,  69 => 69,  67 => 68,  64 => 67,  58 => 65,  56 => 64,  51 => 62,  46 => 60,  43 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/marketplace/templates/page.html.twig", "/var/aegir/projects/mp/dev/themes/marketplace/templates/page.html.twig");
    }
}
