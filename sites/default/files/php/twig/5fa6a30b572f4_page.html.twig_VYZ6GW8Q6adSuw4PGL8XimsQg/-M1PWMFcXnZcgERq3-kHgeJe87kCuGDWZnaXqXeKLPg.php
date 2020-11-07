<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/unhabitat/templates/page.html.twig */
class __TwigTemplate_1ba6cabcdfd5f5604eceee65dc35d4dd3b072f6787c4586776309f6bb8f8a250 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'media_banner' => [$this, 'block_media_banner'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer_left' => [$this, 'block_footer_left'],
            'footer_middle' => [$this, 'block_footer_middle'],
            'footer_right' => [$this, 'block_footer_right'],
            'footer_bottom' => [$this, 'block_footer_bottom'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 56, "block" => 61];
        $filters = ["escape" => 114, "clean_class" => 66, "t" => 89];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 55
        $context["main_container"] = ($context["container"] ?? null);
        // line 56
        if ((($context["container"] ?? null) == "container-fluid")) {
            // line 57
            echo "  ";
            $context["main_container"] = "container";
        }
        // line 60
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 61
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 113
        echo "
<div class=\"";
        // line 114
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
  <div class=\"row ";
        // line 115
        if ((($context["container"] ?? null) == "container-fluid")) {
            echo " no-gutter ";
        }
        echo "\">
    ";
        // line 117
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 118
            echo "      ";
            $this->displayBlock('media_banner', $context, $blocks);
            // line 123
            echo "    ";
        }
        // line 124
        echo "  </div>
</div>
";
        // line 127
        $this->displayBlock('main', $context, $blocks);
        // line 191
        echo "
<footer class=\"footer ";
        // line 192
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
  <div class=\"row footer-columns-row\">
    <div class=\"col col-xs-12 col-sm-6 col-md-4 footer-left\">
      ";
        // line 195
        if ($this->getAttribute(($context["page"] ?? null), "footer_left", [])) {
            // line 196
            echo "        ";
            $this->displayBlock('footer_left', $context, $blocks);
            // line 199
            echo "      ";
        }
        // line 200
        echo "    </div>
    <div class=\"col col-xs-12 col-sm-6 col-md-4 footer-middle\">
      ";
        // line 202
        if ($this->getAttribute(($context["page"] ?? null), "footer_middle", [])) {
            // line 203
            echo "        ";
            $this->displayBlock('footer_middle', $context, $blocks);
            // line 206
            echo "      ";
        }
        // line 207
        echo "    </div>
    <div class=\"col col-xs-12 col-sm-6 col-md-4 footer-right\">
      ";
        // line 209
        if ($this->getAttribute(($context["page"] ?? null), "footer_right", [])) {
            // line 210
            echo "        ";
            $this->displayBlock('footer_right', $context, $blocks);
            // line 213
            echo "      ";
        }
        // line 214
        echo "    </div>
  </div>
</footer>

";
        // line 218
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 219
            echo "  ";
            $this->displayBlock('footer_bottom', $context, $blocks);
        }
    }

    // line 61
    public function block_navbar($context, array $blocks = [])
    {
        // line 62
        echo "    ";
        // line 63
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 65
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 66
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 69
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 71
        echo "      <div class=\"un-bar\">
        <div class=\"un-welcome\">
          <span class=\"hidden-xs\"><span class=\"header-pipe\">|</span>This is an old version of our website and it is no longer updated. For more updated information, please check our
            <a href=\"https://unhabitat.org/\">Our new website.</a>
            our</span>
        </div>
        <div class=\"un-languages\">

        </div>
      </div>
      ";
        // line 81
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 82
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 84
        echo "      <div class=\"navbar-header\">
        ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 87
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 88
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 89
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 95
        echo "      </div>

      ";
        // line 98
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 99
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          <form action=\"/search\" method=\"get\" id=\"views-exposed-form-solr-search-content-page-1\" accept-charset=\"UTF-8\" data-drupal-form-fields=\"edit-keys,edit-submit-solr-search-content\" class=\"navbar-form\">
            <input placeholder=\"What are you looking for?\" data-drupal-selector=\"edit-keys\" class=\"form-text form-control\" id=\"edit-keys\" name=\"keys\" value=\"\" type=\"text\">
            <span aria-hidden=\"true\" class=\"glyphicon glyphicon-search\"></span>
          </form>
          ";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 107
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 108
            echo "        </div>
      ";
        }
        // line 110
        echo "    </header>
  ";
    }

    // line 118
    public function block_media_banner($context, array $blocks = [])
    {
        // line 119
        echo "        <div class=\"col-sm-12 media-banner\">
          ";
        // line 120
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "media_banner", [])), "html", null, true);
        echo "
        </div>
      ";
    }

    // line 127
    public function block_main($context, array $blocks = [])
    {
        // line 128
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">
      ";
        // line 131
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 132
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 137
            echo "      ";
        }
        // line 138
        echo "
      ";
        // line 140
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 141
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 146
            echo "      ";
        }
        // line 147
        echo "
      ";
        // line 149
        echo "      ";
        // line 150
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 151
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 152
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 153
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 154
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 157
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 160
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 161
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 164
            echo "        ";
        }
        // line 165
        echo "
        ";
        // line 167
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 168
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 171
            echo "        ";
        }
        // line 172
        echo "
        ";
        // line 174
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 178
        echo "      </section>

      ";
        // line 181
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 182
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 187
            echo "      ";
        }
        // line 188
        echo "    </div>
  </div>
";
    }

    // line 132
    public function block_header($context, array $blocks = [])
    {
        // line 133
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 134
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 141
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 142
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 143
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 161
    public function block_highlighted($context, array $blocks = [])
    {
        // line 162
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 168
    public function block_help($context, array $blocks = [])
    {
        // line 169
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 174
    public function block_content($context, array $blocks = [])
    {
        // line 175
        echo "          <a id=\"main-content\"></a>
          ";
        // line 176
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 182
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 183
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 184
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 196
    public function block_footer_left($context, array $blocks = [])
    {
        // line 197
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_left", [])), "html", null, true);
        echo "
        ";
    }

    // line 203
    public function block_footer_middle($context, array $blocks = [])
    {
        // line 204
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_middle", [])), "html", null, true);
        echo "
        ";
    }

    // line 210
    public function block_footer_right($context, array $blocks = [])
    {
        // line 211
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_right", [])), "html", null, true);
        echo "
        ";
    }

    // line 219
    public function block_footer_bottom($context, array $blocks = [])
    {
        // line 220
        echo "    <div class=\"footer-bottom ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 221
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/unhabitat/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 221,  465 => 220,  462 => 219,  455 => 211,  452 => 210,  445 => 204,  442 => 203,  435 => 197,  432 => 196,  425 => 184,  422 => 183,  419 => 182,  413 => 176,  410 => 175,  407 => 174,  400 => 169,  397 => 168,  390 => 162,  387 => 161,  380 => 143,  377 => 142,  374 => 141,  367 => 134,  364 => 133,  361 => 132,  355 => 188,  352 => 187,  349 => 182,  346 => 181,  342 => 178,  339 => 174,  336 => 172,  333 => 171,  330 => 168,  327 => 167,  324 => 165,  321 => 164,  318 => 161,  315 => 160,  309 => 157,  307 => 154,  306 => 153,  305 => 152,  304 => 151,  303 => 150,  301 => 149,  298 => 147,  295 => 146,  292 => 141,  289 => 140,  286 => 138,  283 => 137,  280 => 132,  277 => 131,  271 => 128,  268 => 127,  261 => 120,  258 => 119,  255 => 118,  250 => 110,  246 => 108,  243 => 107,  237 => 104,  230 => 99,  227 => 98,  223 => 95,  214 => 89,  211 => 88,  208 => 87,  204 => 85,  201 => 84,  195 => 82,  193 => 81,  181 => 71,  176 => 69,  174 => 66,  173 => 65,  172 => 63,  170 => 62,  167 => 61,  161 => 219,  159 => 218,  153 => 214,  150 => 213,  147 => 210,  145 => 209,  141 => 207,  138 => 206,  135 => 203,  133 => 202,  129 => 200,  126 => 199,  123 => 196,  121 => 195,  115 => 192,  112 => 191,  110 => 127,  106 => 124,  103 => 123,  100 => 118,  97 => 117,  91 => 115,  87 => 114,  84 => 113,  80 => 61,  78 => 60,  74 => 57,  72 => 56,  70 => 55,  68 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unhabitat/templates/page.html.twig", "/Users/macbook/tony-paps/web/themes/unhabitat/templates/page.html.twig");
    }
}
