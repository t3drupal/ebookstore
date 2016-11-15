<?php

/* themes/drupal8_zymphonies_theme-8.x-1.0/drupal8_zymphonies_theme/templates/views/views-view-unformatted--derniers_commentaires.html.twig */
class __TwigTemplate_3093b181931e95d0b146f5351c247131e86b29fd34c631a08a8b244ea1d2e5f6 extends Twig_Template
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
        $tags = array("if" => 65, "for" => 68, "set" => 70);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
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

        // line 20
        echo "

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"testimonial-slider\" class=\"owl-carousel\">
                <div class=\"testimonial\">
                    <div class=\"content\">
                        <p class=\"description\">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, repudiandae voluptas. Aliquam, amet aperiam assumenda aut dicta et excepturi exercitationem, maxime minima molestiae necessitatibus nulla odit possimus sunt voluptate voluptatibus!
                        </p>
                        <h3 class=\"testimonial-title\">
                            williamson
                            <small>Web Developer</small>
                        </h3>
                    </div>
                </div>
                <div class=\"testimonial\">
                    <div class=\"content\">
                        <p class=\"description\">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, repudiandae voluptas. Aliquam, amet aperiam assumenda aut dicta et excepturi exercitationem, maxime minima molestiae necessitatibus nulla odit possimus sunt voluptate voluptatibus!
                        </p>
                        <h3 class=\"testimonial-title\">
                            kristiana
                            <small>Web Desginer</small>
                        </h3>
                    </div>
                </div>
                <div class=\"testimonial\">
                    <div class=\"content\">
                        <p class=\"description\">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, repudiandae voluptas. Aliquam, amet aperiam assumenda aut dicta et excepturi exercitationem, maxime minima molestiae necessitatibus nulla odit possimus sunt voluptate voluptatibus!
                        </p>
                        <h3 class=\"testimonial-title\">
                            steve thomas
                            <small>Web Desginer</small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


";
        // line 65
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 66
            echo "  <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
";
        }
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 69
            echo "  ";
            // line 70
            $context["row_classes"] = array(0 => ((            // line 71
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 74
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 75
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo " TEST VUE
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme-8.x-1.0/drupal8_zymphonies_theme/templates/views/views-view-unformatted--derniers_commentaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 75,  107 => 74,  105 => 71,  104 => 70,  102 => 69,  98 => 68,  92 => 66,  90 => 65,  43 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a view of unformatted rows.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The title of this group of rows. May be empty.*/
/*  * - rows: A list of the view's row items.*/
/*  *   - attributes: The row's HTML attributes.*/
/*  *   - content: The row's content.*/
/*  * - view: The view object.*/
/*  * - default_row_class: A flag indicating whether default classes should be*/
/*  *   used on rows.*/
/*  **/
/*  * @see template_preprocess_views_view_unformatted()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div id="testimonial-slider" class="owl-carousel">*/
/*                 <div class="testimonial">*/
/*                     <div class="content">*/
/*                         <p class="description">*/
/*                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, repudiandae voluptas. Aliquam, amet aperiam assumenda aut dicta et excepturi exercitationem, maxime minima molestiae necessitatibus nulla odit possimus sunt voluptate voluptatibus!*/
/*                         </p>*/
/*                         <h3 class="testimonial-title">*/
/*                             williamson*/
/*                             <small>Web Developer</small>*/
/*                         </h3>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="testimonial">*/
/*                     <div class="content">*/
/*                         <p class="description">*/
/*                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, repudiandae voluptas. Aliquam, amet aperiam assumenda aut dicta et excepturi exercitationem, maxime minima molestiae necessitatibus nulla odit possimus sunt voluptate voluptatibus!*/
/*                         </p>*/
/*                         <h3 class="testimonial-title">*/
/*                             kristiana*/
/*                             <small>Web Desginer</small>*/
/*                         </h3>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="testimonial">*/
/*                     <div class="content">*/
/*                         <p class="description">*/
/*                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, repudiandae voluptas. Aliquam, amet aperiam assumenda aut dicta et excepturi exercitationem, maxime minima molestiae necessitatibus nulla odit possimus sunt voluptate voluptatibus!*/
/*                         </p>*/
/*                         <h3 class="testimonial-title">*/
/*                             steve thomas*/
/*                             <small>Web Desginer</small>*/
/*                         </h3>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% if title %}*/
/*   <h3>{{ title }}</h3>*/
/* {% endif %}*/
/* {% for row in rows %}*/
/*   {%*/
/*     set row_classes = [*/
/*       default_row_class ? 'views-row',*/
/*     ]*/
/*   %}*/
/*   <div{{ row.attributes.addClass(row_classes) }}>*/
/*     {{ row.content }} TEST VUE*/
/*   </div>*/
/* {% endfor %}*/
/* */
