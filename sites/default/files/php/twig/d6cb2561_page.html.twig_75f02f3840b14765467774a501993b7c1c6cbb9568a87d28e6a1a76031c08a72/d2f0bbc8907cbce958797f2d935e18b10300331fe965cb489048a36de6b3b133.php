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
        $tags = array("if" => 78);
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
        // line 78
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 79
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 81
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-6\">
        ";
        // line 85
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 86
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 88
        echo "      </div>
      <!--End Navigation -->

      <!-- Register Block -->
      ";
        // line 92
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 93
            echo "      <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-3\">
                <div class=\"btn-register-custom\"><a href=\"user/register\">Devenir membre ?</a></div>
              </div>
            </div>
      </div>
      ";
        }
        // line 101
        echo "      <!-- End Register Block -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 108
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "welcome_banner_text", array()))) {
            // line 109
            echo "    <div class=\"container welcome-banner-text\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "welcome_banner_text", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 117
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Highlighted-->
  ";
        // line 124
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 125
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 128
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 133
        echo "<!--End Highlighted-->

<!--Top 5 book -->
";
        // line 136
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbooknew", array())) {
            // line 137
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"topbooknew\">
          ";
            // line 141
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbooknew", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 147
        echo "<!--EndTop 5 book -->

<!-- Last Comment Book -->
";
        // line 150
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "lastcommentbook", array())) {
            // line 151
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"lastcommentbook\">
          ";
            // line 155
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "lastcommentbook", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 161
        echo "<!-- end Last Comment Book -->

<!-- Start Top Widget -->
";
        // line 164
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 165
            echo "  ";
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()))) {
                // line 166
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">

        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 172
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 173
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array())) {
                    // line 174
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 176
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 179
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 180
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) {
                    // line 181
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 183
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 186
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_third_class"]) ? $context["topwidget_third_class"] : null), "html", null, true));
                echo ">
            ";
                // line 187
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) {
                    // line 188
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 190
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 197
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 201
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 202
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 206
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 211
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">

    <!--Content top-->
      ";
        // line 220
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 221
            echo "        <div class=\"row\">
          ";
            // line 222
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 225
        echo "    <!--End Content top-->

    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 229
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 234
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 235
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 236
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
            ";
            // line 237
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 241
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 244
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 245
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 246
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
            ";
            // line 247
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 251
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 254
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 255
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 256
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
            ";
            // line 257
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 261
        echo "      <!---End Right SideBar -->

    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 267
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 268
            echo "      <div class=\"row\">
        ";
            // line 269
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 272
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->

<!--Top Theme-->
";
        // line 278
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "toptheme", array()) && (isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 279
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"blocktheme\">
          ";
            // line 283
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "toptheme", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 289
        echo "<!--End Top Theme -->

<!--Promuted Author-->
";
        // line 292
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promutedauthor", array()) && (isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 293
            echo "  <div class=\"container\">
    <div id=\"promutedauthor\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"promutedauthor\">
        ";
            // line 298
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promutedauthor", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
    </div>
  </div>
";
        }
        // line 305
        echo "<!--End Promuted Author -->

<!--Fun Facts-->
";
        // line 308
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "funfacts", array()) && (isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 309
            echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"funfacts\">
        ";
            // line 313
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "funfacts", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 319
        echo "<!--End Fun Facts -->


<!-- Start bottom -->
";
        // line 323
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 324
            echo "  ";
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()))) {
                // line 325
                echo "    <div class=\"bottom-widgets\">
      <!-- Start Container -->
      <div class=\"container\">

        <div class=\"row\">

          <!-- Start Bottom First Region -->
          <div class = ";
                // line 332
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 333
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                    // line 334
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 336
                echo "          </div>
          <!-- End Bottom First Region -->

          <!-- Start Bottom Second Region -->
          <div class = ";
                // line 340
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 341
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) {
                    // line 342
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 344
                echo "          </div>
          <!-- End Bottom Second Region -->

          <!-- Start Bottom third Region -->
          <div class = ";
                // line 348
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 349
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) {
                    // line 350
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 352
                echo "          </div>
          <!-- End Bottom Third Region -->

          <div class = ";
                // line 355
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 356
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())) {
                    // line 357
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()), "html", null, true));
                    echo "
            ";
                }
                // line 359
                echo "          </div>

        </div>
      </div>
    </div>
  ";
            }
        }
        // line 366
        echo "<!--End Bottom -->


<!-- start: Footer -->
";
        // line 370
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())))) {
            // line 371
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">

      <div class=\"row\">

        <!-- Start Footer First Region -->
        <div class = ";
            // line 377
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 378
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 379
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 381
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 385
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 386
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 387
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 389
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 393
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_third_class"]) ? $context["footer_third_class"] : null), "html", null, true));
            echo ">
          ";
            // line 394
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 395
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 397
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 403
        echo "<!--End Footer -->

<!-- Start Footer Menu -->
";
        // line 406
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 407
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 411
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 413
            if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
                // line 414
                echo "        <div class=\"col-sm-6 col-md-6\">
          <div class=\"social-media\">
            ";
                // line 416
                if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                    // line 417
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 419
                echo "            ";
                if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                    // line 420
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 422
                echo "            ";
                if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                    // line 423
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 425
                echo "            ";
                if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                    // line 426
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 428
                echo "            ";
                if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                    // line 429
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 431
                echo "            ";
                if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                    // line 432
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 434
                echo "          </div>
        </div>
        ";
            }
            // line 437
            echo "      </div>
    </div>
  </div>
";
        }
        // line 441
        echo "<!-- End Footer Menu -->

";
        // line 443
        if (((isset($context["copyright_text"]) ? $context["copyright_text"] : null) || (isset($context["show_credit_link"]) ? $context["show_credit_link"] : null))) {
            // line 444
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 450
            if ((isset($context["copyright_text"]) ? $context["copyright_text"] : null)) {
                // line 451
                echo "          <p>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_text"]) ? $context["copyright_text"] : null), "html", null, true));
                echo "</p>
        ";
            }
            // line 453
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 457
            if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
                // line 458
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 462
            echo "      <!-- End Credit link -->

    </div>
  </div>
</div>
";
        }
        // line 468
        echo "

<!-- Google map -->
";
        // line 471
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()))) {
            // line 472
            echo "  <div class=\"google_map\">
    ";
            // line 473
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 476
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
        return array (  788 => 476,  782 => 473,  779 => 472,  777 => 471,  772 => 468,  764 => 462,  758 => 458,  756 => 457,  750 => 453,  744 => 451,  742 => 450,  734 => 444,  732 => 443,  728 => 441,  722 => 437,  717 => 434,  711 => 432,  708 => 431,  702 => 429,  699 => 428,  693 => 426,  690 => 425,  684 => 423,  681 => 422,  675 => 420,  672 => 419,  666 => 417,  664 => 416,  660 => 414,  658 => 413,  653 => 411,  647 => 407,  645 => 406,  640 => 403,  632 => 397,  626 => 395,  624 => 394,  620 => 393,  614 => 389,  608 => 387,  606 => 386,  602 => 385,  596 => 381,  590 => 379,  588 => 378,  584 => 377,  576 => 371,  574 => 370,  568 => 366,  559 => 359,  553 => 357,  551 => 356,  547 => 355,  542 => 352,  536 => 350,  534 => 349,  530 => 348,  524 => 344,  518 => 342,  516 => 341,  512 => 340,  506 => 336,  500 => 334,  498 => 333,  494 => 332,  485 => 325,  482 => 324,  480 => 323,  474 => 319,  465 => 313,  459 => 309,  457 => 308,  452 => 305,  442 => 298,  435 => 293,  433 => 292,  428 => 289,  419 => 283,  413 => 279,  411 => 278,  403 => 272,  397 => 269,  394 => 268,  392 => 267,  384 => 261,  377 => 257,  373 => 256,  370 => 255,  368 => 254,  363 => 251,  356 => 247,  352 => 246,  349 => 245,  347 => 244,  342 => 241,  335 => 237,  331 => 236,  328 => 235,  326 => 234,  318 => 229,  312 => 225,  306 => 222,  303 => 221,  301 => 220,  290 => 211,  282 => 206,  276 => 202,  274 => 201,  268 => 197,  259 => 190,  253 => 188,  251 => 187,  247 => 186,  242 => 183,  236 => 181,  234 => 180,  230 => 179,  225 => 176,  219 => 174,  217 => 173,  213 => 172,  205 => 166,  202 => 165,  200 => 164,  195 => 161,  186 => 155,  180 => 151,  178 => 150,  173 => 147,  164 => 141,  158 => 137,  156 => 136,  151 => 133,  143 => 128,  138 => 125,  136 => 124,  127 => 117,  119 => 112,  114 => 109,  112 => 108,  103 => 101,  93 => 93,  91 => 92,  85 => 88,  79 => 86,  77 => 85,  71 => 81,  65 => 79,  63 => 78,  43 => 60,);
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
/* */
/* */
/* <header class="main-header">*/
/*   <nav class="navbar navbar-default" role="navigation">*/
/* */
/* */
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
/*       <div class="col-md-6">*/
/*         {% if page.primary_menu %}*/
/*           {{ page.primary_menu }}*/
/*         {% endif %}*/
/*       </div>*/
/*       <!--End Navigation -->*/
/* */
/*       <!-- Register Block -->*/
/*       {% if is_front %}*/
/*       <div class="container">*/
/*             <div class="row">*/
/*               <div class="col-md-3">*/
/*                 <div class="btn-register-custom"><a href="user/register">Devenir membre ?</a></div>*/
/*               </div>*/
/*             </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       <!-- End Register Block -->*/
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
