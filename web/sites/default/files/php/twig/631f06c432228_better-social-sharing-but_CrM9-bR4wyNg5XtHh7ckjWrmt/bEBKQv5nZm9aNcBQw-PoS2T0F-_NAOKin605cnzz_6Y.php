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

/* themes/custom/moldova/templates/social-buttons/better-social-sharing-buttons.html.twig */
class __TwigTemplate_d7d280ec29ac6b6d59f89d242a12a372 extends \Twig\Template
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
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("better_social_sharing_buttons/styling"), "html", null, true);
        echo "

";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 3)) {
            // line 4
            echo "  ";
            $context["width"] = ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 4)) ? ((("width=" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 4), 4, $this->source)) . "")) : (""));
            // line 5
            echo "  ";
            $context["height"] = ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 5)) ? ((("height=" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "width", [], "any", false, false, true, 5), 5, $this->source)) . "")) : (""));
        }
        // line 7
        echo "
";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 8)) {
            // line 9
            echo "  ";
            $context["radius"] = ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 9)) ? ((("style=border-radius:" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "radius", [], "any", false, false, true, 9), 9, $this->source)) . ";")) : (""));
        }
        // line 11
        echo "
";
        // line 13
        echo "<div style=\"display: none\">";
        $this->loadTemplate(($context["social_buttons_sprite"] ?? null), "themes/custom/moldova/templates/social-buttons/better-social-sharing-buttons.html.twig", 13)->display($context);
        echo "</div>

<div class=\"social-sharing-buttons\">

  ";
        // line 18
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 18), "copy", [], "any", false, false, true, 18)) {
            // line 19
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("better_social_sharing_buttons/copy-current-url"), "html", null, true);
            echo "
    <a class=\"btnCopy social-sharing-buttons__button share-copy\">
      <p class=\"share-button\">Share</p>
      <div class=\"social-sharing-buttons__popup\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Copied to clipboard"));
            echo "</div>
    </a>
  ";
        }
        // line 25
        echo "
  ";
        // line 27
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 27), "facebook", [], "any", false, false, true, 27)) {
            // line 28
            echo "    <a
      href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\"
      target=\"_blank\" title=\"";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Facebook\"
      aria-label=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Facebook\"
      class=\"social-sharing-buttons__button share-facebook\" rel=\"noopener\">
      <svg ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 33, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 33, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 33, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 34, $this->source), "html", null, true);
            echo "#facebook\"/>
      </svg>
    </a>
  ";
        }
        // line 38
        echo "
  ";
        // line 40
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 40), "twitter", [], "any", false, false, true, 40)) {
            // line 41
            echo "    <a href=\"http://twitter.com/intent/tweet?text=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "+";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\"
      target=\"_blank\" title=\"";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Twitter\"
      aria-label=\"";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Twitter\"
      class=\"social-sharing-buttons__button share-twitter\" rel=\"noopener\">
      <svg ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 45, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 45, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 45, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 46, $this->source), "html", null, true);
            echo "#twitter\"/>
      </svg>
    </a>
  ";
        }
        // line 50
        echo "
  ";
        // line 52
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 52), "whatsapp", [], "any", false, false, true, 52)) {
            // line 53
            echo "    <a href=\"https://wa.me/?text=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\" target=\"_blank\"
       title=\"";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " WhatsApp\"
       aria-label=\"";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " WhatsApp\"
       class=\"social-sharing-buttons__button share-whatsapp\" rel=\"noopener\">
      <svg ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 57, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 57, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 57, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 58, $this->source), "html", null, true);
            echo "#whatsapp\"/>
      </svg>
    </a>
  ";
        }
        // line 62
        echo "
  ";
        // line 64
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 64), "facebook_messenger", [], "any", false, false, true, 64)) {
            // line 65
            echo "    <a href=\"http://www.facebook.com/dialog/send?app_id=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "facebook_app_id", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "&link=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "&redirect_uri=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>"));
            echo "\"
      target=\"_blank\" title=\"";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Facebook Messenger\"
      aria-label=\"";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Facebook Messenger\"
      class=\"social-sharing-buttons__button share-facebook-messenger\"
      rel=\"noopener\">
      <svg ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 70, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 70, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 70, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 71, $this->source), "html", null, true);
            echo "#messenger\"/>
      </svg>
    </a>
  ";
        }
        // line 75
        echo "
  ";
        // line 77
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 77), "pinterest", [], "any", false, false, true, 77)) {
            // line 78
            echo "    <a href=\"http://pinterest.com/pin/create/link/?url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "&description=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "\"
      target=\"_blank\" title=\"";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Pinterest\"
      aria-label=\"";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Pinterest\"
      class=\"social-sharing-buttons__button share-pinterest\" rel=\"noopener\">
      <svg ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 82, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 82, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 82, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 83, $this->source), "html", null, true);
            echo "#pinterest\"/>
      </svg>
    </a>
  ";
        }
        // line 87
        echo "
  ";
        // line 89
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 89), "linkedin", [], "any", false, false, true, 89)) {
            // line 90
            echo "    <a href=\"https://www.linkedin.com/sharing/share-offsite/?url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "\"
      target=\"_blank\" title=\"";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Linkedin\"
      aria-label=\"";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Linkedin\"
      class=\"social-sharing-buttons__button share-linkedin\" rel=\"noopener\">
      <svg ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 94, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 94, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 94, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 95, $this->source), "html", null, true);
            echo "#linkedin\"/>
      </svg>
    </a>
  ";
        }
        // line 99
        echo "  ";
        // line 100
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 100), "digg", [], "any", false, false, true, 100)) {
            // line 101
            echo "    <a href=\"http://www.digg.com/submit?phase=2&url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "\"
      target=\"_blank\" title=\"";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Digg\"
      aria-label=\"";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Digg\"
      class=\"social-sharing-buttons__button share-digg\" rel=\"noopener\">
      <svg ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 105, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 105, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 105, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 106, $this->source), "html", null, true);
            echo "#digg\"/>
      </svg>
    </a>
  ";
        }
        // line 110
        echo "
  ";
        // line 112
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 112), "tumblr", [], "any", false, false, true, 112)) {
            // line 113
            echo "    <a href=\"http://www.tumblr.com/share?v=3&u=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "&t=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "\"
      target=\"_blank\" title=\"";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Tumblr\"
      aria-label=\"";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Tumblr\"
      class=\"social-sharing-buttons__button share-tumblr\" rel=\"noopener\">
      <svg ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 117, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 117, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 117, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 118, $this->source), "html", null, true);
            echo "#tumblr\"/>
      </svg>
    </a>
  ";
        }
        // line 122
        echo "
  ";
        // line 124
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 124), "reddit", [], "any", false, false, true, 124)) {
            // line 125
            echo "    <a href=\"http://www.reddit.com/submit?url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "\"
      target=\"_blank\" title=\"";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Reddit\"
      aria-label=\"";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Reddit\"
      class=\"social-sharing-buttons__button share-reddit\" rel=\"noopener\">
      <svg ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 129, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 129, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 129, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 130, $this->source), "html", null, true);
            echo "#reddit\"/>
      </svg>
    </a>
  ";
        }
        // line 134
        echo "
  ";
        // line 136
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 136), "evernote", [], "any", false, false, true, 136)) {
            // line 137
            echo "    <a href=\"http://www.evernote.com/clip.action?url=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "&title=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "\"
      target=\"_blank\" title=\"";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Evernote\"
      aria-label=\"";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Evernote\"
      class=\"social-sharing-buttons__button share-evernote\" rel=\"noopener\">
      <svg ";
            // line 141
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 141, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 141, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 141, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 142, $this->source), "html", null, true);
            echo "#evernote\"/>
      </svg>
    </a>
  ";
        }
        // line 146
        echo "
  ";
        // line 148
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 148), "email", [], "any", false, false, true, 148)) {
            // line 149
            echo "    <a href=\"mailto:?subject=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "title", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "&body=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "page_url", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "\"
       title=\"";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Email\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Share to"));
            echo " Email\"
       class=\"social-sharing-buttons__button share-email\" target=\"_blank\"
       rel=\"noopener\">
      <svg ";
            // line 153
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 153, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 153, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 153, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 154, $this->source), "html", null, true);
            echo "#email\"/>
      </svg>
    </a>
  ";
        }
        // line 158
        echo "
  ";
        // line 160
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "services", [], "any", false, false, true, 160), "print", [], "any", false, false, true, 160)) {
            // line 161
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "print_css", [], "any", false, false, true, 161)) {
                // line 162
                echo "      ";
                $context["href"] = "#";
                // line 163
                echo "      ";
                $context["rel"] = twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "print_css", [], "any", false, false, true, 163);
                // line 164
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("better_social_sharing_buttons/print-css"), "html", null, true);
                echo "
    ";
            } else {
                // line 166
                echo "      ";
                $context["href"] = "javascript:window.print()";
                // line 167
                echo "    ";
            }
            // line 168
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["href"] ?? null), 168, $this->source), "html", null, true);
            echo "\" rel=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rel"] ?? null), 168, $this->source), "html", null, true);
            echo "\" id=\"printlink\" class=\"share-print\">
      <svg ";
            // line 169
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 169, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 169, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["radius"] ?? null), 169, $this->source), "html", null, true);
            echo ">
        <use href=\"";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null), 170, $this->source), "html", null, true);
            echo "#print\"/>
      </svg>
    </a>
  ";
        }
        // line 174
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/moldova/templates/social-buttons/better-social-sharing-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 174,  537 => 170,  529 => 169,  522 => 168,  519 => 167,  516 => 166,  510 => 164,  507 => 163,  504 => 162,  501 => 161,  498 => 160,  495 => 158,  488 => 154,  480 => 153,  472 => 150,  465 => 149,  462 => 148,  459 => 146,  452 => 142,  444 => 141,  439 => 139,  435 => 138,  428 => 137,  425 => 136,  422 => 134,  415 => 130,  407 => 129,  402 => 127,  398 => 126,  391 => 125,  388 => 124,  385 => 122,  378 => 118,  370 => 117,  365 => 115,  361 => 114,  354 => 113,  351 => 112,  348 => 110,  341 => 106,  333 => 105,  328 => 103,  324 => 102,  317 => 101,  314 => 100,  312 => 99,  305 => 95,  297 => 94,  292 => 92,  288 => 91,  283 => 90,  280 => 89,  277 => 87,  270 => 83,  262 => 82,  257 => 80,  253 => 79,  246 => 78,  243 => 77,  240 => 75,  233 => 71,  225 => 70,  219 => 67,  215 => 66,  206 => 65,  203 => 64,  200 => 62,  193 => 58,  185 => 57,  180 => 55,  176 => 54,  171 => 53,  168 => 52,  165 => 50,  158 => 46,  150 => 45,  145 => 43,  141 => 42,  134 => 41,  131 => 40,  128 => 38,  121 => 34,  113 => 33,  108 => 31,  104 => 30,  98 => 29,  95 => 28,  92 => 27,  89 => 25,  83 => 22,  76 => 19,  73 => 18,  65 => 13,  62 => 11,  58 => 9,  56 => 8,  53 => 7,  49 => 5,  46 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/moldova/templates/social-buttons/better-social-sharing-buttons.html.twig", "/var/www/web/themes/custom/moldova/templates/social-buttons/better-social-sharing-buttons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 4, "include" => 13);
        static $filters = array("escape" => 1, "t" => 22);
        static $functions = array("attach_library" => 1, "url" => 65);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 't'],
                ['attach_library', 'url']
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
