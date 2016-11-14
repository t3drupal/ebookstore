<?php

/* modules/contrib/ds/templates/ds-2col-stacked-fluid.html.twig */
class __TwigTemplate_43ba1c79a481a0a95643da18709daa808a8d4d9f9cb8969e4d3321b85f46f1f3 extends Twig_Template
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
        $tags = array("set" => 24, "if" => 27);
        $filters = array("render" => 24);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('render'),
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

        // line 23
        echo "
";
        // line 24
        $context["left"] = $this->env->getExtension('drupal_core')->renderVar((isset($context["left"]) ? $context["left"] : null));
        // line 25
        $context["right"] = $this->env->getExtension('drupal_core')->renderVar((isset($context["right"]) ? $context["right"] : null));
        // line 26
        echo "
";
        // line 27
        if ((((isset($context["left"]) ? $context["left"] : null) &&  !(isset($context["right"]) ? $context["right"] : null)) || ((isset($context["right"]) ? $context["right"] : null) &&  !(isset($context["left"]) ? $context["left"] : null)))) {
            // line 28
            echo "  ";
            $context["layout_class"] = "group-one-column";
        }
        // line 30
        echo "
<";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["layout_class"]) ? $context["layout_class"] : null), 1 => "ds-2col-stacked-fluid", 2 => "clearfix"), "method"), "html", null, true));
        echo ">

  ";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "

  <";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_wrapper"]) ? $context["header_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["header_attributes"]) ? $context["header_attributes"] : null), "addClass", array(0 => "group-header"), "method"), "html", null, true));
        echo ">
    ";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
        echo "
  </";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_wrapper"]) ? $context["header_wrapper"] : null), "html", null, true));
        echo ">

  ";
        // line 39
        if ((isset($context["left"]) ? $context["left"] : null)) {
            // line 40
            echo "    <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left_wrapper"]) ? $context["left_wrapper"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["left_attributes"]) ? $context["left_attributes"] : null), "addClass", array(0 => "group-left"), "method"), "html", null, true));
            echo ">
      ";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left"]) ? $context["left"] : null), "html", null, true));
            echo "
    </";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left_wrapper"]) ? $context["left_wrapper"] : null), "html", null, true));
            echo ">
  ";
        }
        // line 44
        echo "
  ";
        // line 45
        if ((isset($context["right"]) ? $context["right"] : null)) {
            // line 46
            echo "    <";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right_wrapper"]) ? $context["right_wrapper"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["right_attributes"]) ? $context["right_attributes"] : null), "addClass", array(0 => "group-right"), "method"), "html", null, true));
            echo ">
      ";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right"]) ? $context["right"] : null), "html", null, true));
            echo "
    </";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right_wrapper"]) ? $context["right_wrapper"] : null), "html", null, true));
            echo ">
  ";
        }
        // line 50
        echo "
  <";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_wrapper"]) ? $context["footer_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["footer_attributes"]) ? $context["footer_attributes"] : null), "addClass", array(0 => "group-footer"), "method"), "html", null, true));
        echo ">
    ";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
        echo "
  </";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_wrapper"]) ? $context["footer_wrapper"] : null), "html", null, true));
        echo ">

</";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/ds/templates/ds-2col-stacked-fluid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 55,  136 => 53,  132 => 52,  127 => 51,  124 => 50,  119 => 48,  115 => 47,  109 => 46,  107 => 45,  104 => 44,  99 => 42,  95 => 41,  89 => 40,  87 => 39,  82 => 37,  78 => 36,  73 => 35,  68 => 33,  62 => 31,  59 => 30,  55 => 28,  53 => 27,  50 => 26,  48 => 25,  46 => 24,  43 => 23,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display Suite fluid 2 column stacked template.*/
/*  **/
/*  * Available variables:*/
/*  * - outer_wrapper: outer wrapper element*/
/*  * - header_wrapper: wrapper element around header region*/
/*  * - left_wrapper: wrapper element around left region*/
/*  * - right_wrapper: wrapper element around right region*/
/*  * - footer_wrapper: wrapper element around footer region*/
/*  * - attributes: layout attributes*/
/*  * - header_attributes: attributes for header region*/
/*  * - left_attributes: attributes for left region*/
/*  * - right_attributes: attributes for right region*/
/*  * - footer_attributes: attributes for footer region*/
/*  * - header: content of header region*/
/*  * - left: content of left region*/
/*  * - right: content of right region*/
/*  * - footer: content of footer region*/
/*  *//* */
/* #}*/
/* */
/* {% set left = left|render %}*/
/* {% set right = right|render %}*/
/* */
/* {% if (left and not right) or (right and not left) %}*/
/*   {% set layout_class = 'group-one-column' %}*/
/* {% endif %}*/
/* */
/* <{{ outer_wrapper }}{{ attributes.addClass(layout_class, 'ds-2col-stacked-fluid', 'clearfix') }}>*/
/* */
/*   {{ title_suffix.contextual_links }}*/
/* */
/*   <{{ header_wrapper }}{{ header_attributes.addClass('group-header') }}>*/
/*     {{ header }}*/
/*   </{{ header_wrapper }}>*/
/* */
/*   {% if left %}*/
/*     <{{ left_wrapper }}{{ left_attributes.addClass('group-left') }}>*/
/*       {{ left }}*/
/*     </{{ left_wrapper }}>*/
/*   {% endif %}*/
/* */
/*   {% if right %}*/
/*     <{{ right_wrapper }}{{ right_attributes.addClass('group-right') }}>*/
/*       {{ right }}*/
/*     </{{ right_wrapper }}>*/
/*   {% endif %}*/
/* */
/*   <{{ footer_wrapper }}{{ footer_attributes.addClass('group-footer') }}>*/
/*     {{ footer }}*/
/*   </{{ footer_wrapper }}>*/
/* */
/* </{{ outer_wrapper }}>*/
/* */
