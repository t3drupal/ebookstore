<?php

/* themes/drupal8_zymphonies_theme-8.x-1.0/drupal8_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_36016b596b81bf3067e4ec1c33d0bbdfbf43734a045a7c01aefac630418d24ec extends Twig_Template
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
        $tags = array("if" => 74);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 75
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 77
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 82
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 84
        echo "      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 92
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "welcome_banner_text", array()))) {
            // line 93
            echo "    <div class=\"container welcome-banner-text\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "welcome_banner_text", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 101
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Highlighted-->
  ";
        // line 108
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 109
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 117
        echo "<!--End Highlighted-->

<!--Top 5 book -->
";
        // line 120
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbooknew", array())) {
            // line 121
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"topbooknew\">
          ";
            // line 125
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbooknew", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 131
        echo "<!--EndTop 5 book -->

<!-- Last Comment Book -->
";
        // line 134
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "lastcommentbook", array())) {
            // line 135
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"lastcommentbook\">
          ";
            // line 139
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "lastcommentbook", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 145
        echo "<!-- end Last Comment Book -->

<!-- Start Top Widget -->
";
        // line 148
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 149
            echo "  ";
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()))) {
                // line 150
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">

        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 156
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 157
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array())) {
                    // line 158
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 160
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 163
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 164
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) {
                    // line 165
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 167
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 170
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_third_class"]) ? $context["topwidget_third_class"] : null), "html", null, true));
                echo ">
            ";
                // line 171
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) {
                    // line 172
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 174
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 181
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 185
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 186
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 190
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 195
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">

    <!--Content top-->
      ";
        // line 204
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 205
            echo "        <div class=\"row\">
          ";
            // line 206
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 209
        echo "    <!--End Content top-->

    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 213
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 218
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 219
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 220
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
            ";
            // line 221
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 225
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 228
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 229
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 230
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
            ";
            // line 231
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 235
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 238
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 239
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 240
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
            ";
            // line 241
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 245
        echo "      <!---End Right SideBar -->

    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 251
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 252
            echo "      <div class=\"row\">
        ";
            // line 253
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 256
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->

<!--Top Theme-->
";
        // line 262
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "toptheme", array()) && (isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 263
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"blocktheme\">
          ";
            // line 267
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "toptheme", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 273
        echo "<!--End Top Theme -->

<!--Promuted Author-->
";
        // line 276
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promutedauthor", array()) && (isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 277
            echo "  <div class=\"container\">
    <div id=\"promutedauthor\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"promutedauthor\">
        ";
            // line 282
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promutedauthor", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
    </div>
  </div>
";
        }
        // line 289
        echo "<!--End Promuted Author -->

<!--Fun Facts-->
";
        // line 292
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "funfacts", array()) && (isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 293
            echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"funfacts\">
        ";
            // line 297
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "funfacts", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 303
        echo "<!--End Fun Facts -->


<!-- Start bottom -->
";
        // line 307
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 308
            echo "  ";
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()))) {
                // line 309
                echo "    <div class=\"bottom-widgets\">
      <!-- Start Container -->
      <div class=\"container\">

        <div class=\"row\">

          <!-- Start Bottom First Region -->
          <div class = ";
                // line 316
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 317
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                    // line 318
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 320
                echo "          </div>
          <!-- End Bottom First Region -->

          <!-- Start Bottom Second Region -->
          <div class = ";
                // line 324
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 325
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) {
                    // line 326
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 328
                echo "          </div>
          <!-- End Bottom Second Region -->

          <!-- Start Bottom third Region -->
          <div class = ";
                // line 332
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 333
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) {
                    // line 334
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 336
                echo "          </div>
          <!-- End Bottom Third Region -->

          <div class = ";
                // line 339
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 340
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())) {
                    // line 341
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()), "html", null, true));
                    echo "
            ";
                }
                // line 343
                echo "          </div>

        </div>
      </div>
    </div>
  ";
            }
        }
        // line 350
        echo "<!--End Bottom -->


<!-- start: Footer -->
";
        // line 354
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())))) {
            // line 355
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">

      <div class=\"row\">

        <!-- Start Footer First Region -->
        <div class = ";
            // line 361
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 362
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 363
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 365
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 369
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 370
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 371
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 373
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 377
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_third_class"]) ? $context["footer_third_class"] : null), "html", null, true));
            echo ">
          ";
            // line 378
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 379
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 381
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 387
        echo "<!--End Footer -->

<!-- Start Footer Menu -->
";
        // line 390
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 391
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 395
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 397
            if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
                // line 398
                echo "        <div class=\"col-sm-6 col-md-6\">
          <div class=\"social-media\">
            ";
                // line 400
                if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                    // line 401
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 403
                echo "            ";
                if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                    // line 404
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 406
                echo "            ";
                if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                    // line 407
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 409
                echo "            ";
                if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                    // line 410
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 412
                echo "            ";
                if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                    // line 413
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 415
                echo "            ";
                if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                    // line 416
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 418
                echo "          </div>
        </div>
        ";
            }
            // line 421
            echo "      </div>
    </div>
  </div>
";
        }
        // line 425
        echo "<!-- End Footer Menu -->

";
        // line 427
        if (((isset($context["copyright_text"]) ? $context["copyright_text"] : null) || (isset($context["show_credit_link"]) ? $context["show_credit_link"] : null))) {
            // line 428
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 434
            if ((isset($context["copyright_text"]) ? $context["copyright_text"] : null)) {
                // line 435
                echo "          <p>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_text"]) ? $context["copyright_text"] : null), "html", null, true));
                echo "</p>
        ";
            }
            // line 437
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 441
            if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
                // line 442
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 446
            echo "      <!-- End Credit link -->

    </div>
  </div>
</div>
";
        }
        // line 452
        echo "

<!-- Google map -->
";
        // line 455
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()))) {
            // line 456
            echo "  <div class=\"google_map\">
    ";
            // line 457
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 460
        echo "<!-- End Google map -->
";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme-8.x-1.0/drupal8_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  767 => 460,  761 => 457,  758 => 456,  756 => 455,  751 => 452,  743 => 446,  737 => 442,  735 => 441,  729 => 437,  723 => 435,  721 => 434,  713 => 428,  711 => 427,  707 => 425,  701 => 421,  696 => 418,  690 => 416,  687 => 415,  681 => 413,  678 => 412,  672 => 410,  669 => 409,  663 => 407,  660 => 406,  654 => 404,  651 => 403,  645 => 401,  643 => 400,  639 => 398,  637 => 397,  632 => 395,  626 => 391,  624 => 390,  619 => 387,  611 => 381,  605 => 379,  603 => 378,  599 => 377,  593 => 373,  587 => 371,  585 => 370,  581 => 369,  575 => 365,  569 => 363,  567 => 362,  563 => 361,  555 => 355,  553 => 354,  547 => 350,  538 => 343,  532 => 341,  530 => 340,  526 => 339,  521 => 336,  515 => 334,  513 => 333,  509 => 332,  503 => 328,  497 => 326,  495 => 325,  491 => 324,  485 => 320,  479 => 318,  477 => 317,  473 => 316,  464 => 309,  461 => 308,  459 => 307,  453 => 303,  444 => 297,  438 => 293,  436 => 292,  431 => 289,  421 => 282,  414 => 277,  412 => 276,  407 => 273,  398 => 267,  392 => 263,  390 => 262,  382 => 256,  376 => 253,  373 => 252,  371 => 251,  363 => 245,  356 => 241,  352 => 240,  349 => 239,  347 => 238,  342 => 235,  335 => 231,  331 => 230,  328 => 229,  326 => 228,  321 => 225,  314 => 221,  310 => 220,  307 => 219,  305 => 218,  297 => 213,  291 => 209,  285 => 206,  282 => 205,  280 => 204,  269 => 195,  261 => 190,  255 => 186,  253 => 185,  247 => 181,  238 => 174,  232 => 172,  230 => 171,  226 => 170,  221 => 167,  215 => 165,  213 => 164,  209 => 163,  204 => 160,  198 => 158,  196 => 157,  192 => 156,  184 => 150,  181 => 149,  179 => 148,  174 => 145,  165 => 139,  159 => 135,  157 => 134,  152 => 131,  143 => 125,  137 => 121,  135 => 120,  130 => 117,  122 => 112,  117 => 109,  115 => 108,  106 => 101,  98 => 96,  93 => 93,  91 => 92,  81 => 84,  75 => 82,  73 => 81,  67 => 77,  61 => 75,  59 => 74,  43 => 60,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the Navigation region.*/
/*  * - page.page_title: Used by Current page Title.*/
/*  * - page.banner: Items for the banner region.*/
/*  * - page.highlighted: Items for the highlighted top  region.*/
/*  * - page.content_top: The main content top of the current page.*/
/*  * - page.help: Item for the help region.*/
/*  * - page.breadcrumb: Item for the Breadcrumb region.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.content_bottom: Items for the bottom in content region.*/
/*  * - page.footer_top: Items for the footer top region.*/
/*  * - page.footer_first: Items for the footer first region.*/
/*  * - page.footer_second: Items for the footer Second region.*/
/*  * - page.footer_third: Items for the footer third region.*/
/*  * - page.footer_bottom: Items for the footer bottom region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* */
/* <!-- Header and Navbar -->*/
/* <header class="main-header">*/
/*   <nav class="navbar navbar-default" role="navigation">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*       <div class="navbar-header col-md-3">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">*/
/*           <span class="sr-only">Toggle navigation</span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*         </button>*/
/*         {% if page.header %}*/
/*           {{ page.header }}*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <!-- Navigation -->*/
/*       <div class="col-md-9">*/
/*         {% if page.primary_menu %}*/
/*           {{ page.primary_menu }}*/
/*         {% endif %}*/
/*       </div>*/
/*       <!--End Navigation -->*/
/* */
/*       </div>*/
/*     </div>*/
/*   </nav>*/
/* */
/*   <!-- Banner -->*/
/*   {% if is_front and page.welcome_banner_text %}*/
/*     <div class="container welcome-banner-text">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ page.welcome_banner_text }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   <!-- End Banner -->*/
/* */
/* </header>*/
/* <!--End Header & Navbar -->*/
/* */
/* */
/* <!--Highlighted-->*/
/*   {% if page.highlighted %}*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*           {{ page.highlighted }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* <!--End Highlighted-->*/
/* */
/* <!--Top 5 book -->*/
/* {% if page.topbooknew %}*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         <div class="topbooknew">*/
/*           {{ page.topbooknew }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!--EndTop 5 book -->*/
/* */
/* <!-- Last Comment Book -->*/
/* {% if page.lastcommentbook %}*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         <div class="lastcommentbook">*/
/*           {{ page.lastcommentbook }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!-- end Last Comment Book -->*/
/* */
/* <!-- Start Top Widget -->*/
/* {% if is_front %}*/
/*   {% if page.topwidget_first or page.topwidget_second or page.topwidget_third %}*/
/*     <div class="topwidget">*/
/*       <!-- start: Container -->*/
/*       <div class="container">*/
/* */
/*         <div class="row">*/
/*           <!-- Top widget first region -->*/
/*           <div class = {{ topwidget_class }}>*/
/*             {% if page.topwidget_first %}*/
/*               {{ page.topwidget_first }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End top widget third region -->*/
/*           <!-- Top widget second region -->*/
/*           <div class = {{ topwidget_class }}>*/
/*             {% if page.topwidget_second %}*/
/*               {{ page.topwidget_second }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End top widget third region -->*/
/*           <!-- Top widget third region -->*/
/*           <div class = {{ topwidget_third_class }}>*/
/*             {% if page.topwidget_third %}*/
/*               {{ page.topwidget_third }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End top widget third region -->*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* <!--End Top Widget -->*/
/* */
/* */
/* <!-- Page Title -->*/
/* {%  if page.page_title and not is_front %}*/
/*   <div id="page-title">*/
/*     <div id="page-title-inner">*/
/*       <!-- start: Container -->*/
/*       <div class="container">*/
/*         {{ page.page_title }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End Page Title ---- >*/
/* */
/* */
/* <!-- layout -->*/
/* <div id="wrapper">*/
/*   <!-- start: Container -->*/
/*   <div class="container">*/
/* */
/*     <!--Content top-->*/
/*       {% if page.content_top %}*/
/*         <div class="row">*/
/*           {{ page.content_top }}*/
/*         </div>*/
/*       {% endif %}*/
/*     <!--End Content top-->*/
/* */
/*     <!--start:content -->*/
/*     <div class="row">*/
/*       <div class="col-md-12">{{ page.breadcrumb }}</div>*/
/*     </div>*/
/* */
/*     <div class="row layout">*/
/*       <!--- Start Left SideBar -->*/
/*       {% if page.sidebar_first %}*/
/*         <div class="sidebar" >*/
/*           <div class = {{sidebarfirst}} >*/
/*             {{ page.sidebar_first }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End Right SideBar -->*/
/* */
/*       <!--- Start content -->*/
/*       {% if page.content and not is_front %}*/
/*         <div class="content_layout">*/
/*           <div class={{contentlayout}}>*/
/*             {{ page.content }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End content -->*/
/* */
/*       <!--- Start Right SideBar -->*/
/*       {% if page.sidebar_second %}*/
/*         <div class="sidebar">*/
/*           <div class={{sidebarsecond}}>*/
/*             {{ page.sidebar_second }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End Right SideBar -->*/
/* */
/*     </div>*/
/*     <!--End Content -->*/
/* */
/*     <!--Start Content Bottom-->*/
/*     {% if page.content_bottom %}*/
/*       <div class="row">*/
/*         {{ page.content_bottom }}*/
/*       </div>*/
/*     {% endif %}*/
/*     <!--End Content Bottom-->*/
/*   </div>*/
/* </div>*/
/* <!-- End layout -->*/
/* */
/* <!--Top Theme-->*/
/* {% if page.toptheme and is_front %}*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         <div class="blocktheme">*/
/*           {{ page.toptheme }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!--End Top Theme -->*/
/* */
/* <!--Promuted Author-->*/
/* {% if page.promutedauthor and is_front %}*/
/*   <div class="container">*/
/*     <div id="promutedauthor">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         <div class="promutedauthor">*/
/*         {{ page.promutedauthor }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!--End Promuted Author -->*/
/* */
/* <!--Fun Facts-->*/
/* {% if page.funfacts and is_front %}*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         <div class="funfacts">*/
/*         {{ page.funfacts }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!--End Fun Facts -->*/
/* */
/* */
/* <!-- Start bottom -->*/
/* {% if is_front %}*/
/*   {% if page.bottom_first or page.bottom_second or page.bottom_third %}*/
/*     <div class="bottom-widgets">*/
/*       <!-- Start Container -->*/
/*       <div class="container">*/
/* */
/*         <div class="row">*/
/* */
/*           <!-- Start Bottom First Region -->*/
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_first %}*/
/*               {{ page.bottom_first }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End Bottom First Region -->*/
/* */
/*           <!-- Start Bottom Second Region -->*/
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_second %}*/
/*               {{ page.bottom_second }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End Bottom Second Region -->*/
/* */
/*           <!-- Start Bottom third Region -->*/
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_third %}*/
/*               {{ page.bottom_third }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End Bottom Third Region -->*/
/* */
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_forth %}*/
/*               {{ page.bottom_forth }}*/
/*             {% endif %}*/
/*           </div>*/
/* */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* <!--End Bottom -->*/
/* */
/* */
/* <!-- start: Footer -->*/
/* {% if  is_front and (page.footer_first or page.footer_second or page.footer_third) %}*/
/*   <div class="footerwidget">*/
/*     <div class="container">*/
/* */
/*       <div class="row">*/
/* */
/*         <!-- Start Footer First Region -->*/
/*         <div class = {{ footer_class }}>*/
/*           {% if page.footer_first %}*/
/*             {{ page.footer_first }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <!-- End Footer First Region -->*/
/* */
/*         <!-- Start Footer Second Region -->*/
/*         <div class = {{ footer_class }}>*/
/*           {% if page.footer_second %}*/
/*             {{ page.footer_second }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <!-- End Footer Second Region -->*/
/* */
/*         <!-- Start Footer third Region -->*/
/*         <div class = {{ footer_third_class }}>*/
/*           {% if page.footer_third %}*/
/*             {{ page.footer_third }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <!-- End Footer Third Region -->*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!--End Footer -->*/
/* */
/* <!-- Start Footer Menu -->*/
/* {% if page.footer_menu %}*/
/*   <div class="footer-menu">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-sm-6 col-md-6">*/
/*           {{ page.footer_menu }}*/
/*         </div>*/
/*         {% if show_social_icon %}*/
/*         <div class="col-sm-6 col-md-6">*/
/*           <div class="social-media">*/
/*             {% if facebook_url %}*/
/*               <a href="{{ facebook_url }}"  class="facebook" target="_blank" ><i class="fa fa-facebook"></i></a>*/
/*             {% endif %}*/
/*             {% if google_plus_url %}*/
/*               <a href="{{ google_plus_url }}"  class="google-plus" target="_blank" ><i class="fa fa-google-plus"></i></a>*/
/*             {% endif %}*/
/*             {% if twitter_url %}*/
/*               <a href="{{ twitter_url }}" class="twitter" target="_blank" ><i class="fa fa-twitter"></i></a>*/
/*             {% endif %}*/
/*             {% if linkedin_url %}*/
/*               <a href="{{ linkedin_url }}" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>*/
/*             {% endif %}*/
/*             {% if pinterest_url %}*/
/*               <a href="{{ pinterest_url }}" class="pinterest" target="_blank" ><i class="fa fa-pinterest"></i></a>*/
/*             {% endif %}*/
/*             {% if rss_url %}*/
/*               <a href="{{ rss_url }}" class="rss" target="_blank" ><i class="fa fa-rss"></i></a>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End Footer Menu -->*/
/* */
/* {% if copyright_text or show_credit_link %}*/
/* <div class="copyright">*/
/*   <div class="container">*/
/*     <div class="row">*/
/* */
/*       <!-- Copyright -->*/
/*       <div class="col-sm-6 col-md-6">*/
/*         {% if copyright_text %}*/
/*           <p>{{copyright_text}}</p>*/
/*         {% endif %}*/
/*       </div>*/
/*       <!-- End Copyright -->*/
/* */
/*       <!-- Credit link -->*/
/*       {% if show_credit_link %}*/
/*         <div class="col-sm-6 col-md-6">*/
/*           <p class="credit-link">Designed by <a href="http://www.zymphonies.in" target="_blank">Zymphonies</a></p>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!-- End Credit link -->*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* */
/* */
/* <!-- Google map -->*/
/* {% if is_front and page.google_map %}*/
/*   <div class="google_map">*/
/*     {{ page.google_map }}*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End Google map -->*/
/* */
