<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0ebfe56a67372c1b6608a1670702a8f6f9095e49e7d6ac222dd8545d05a6d96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f128306468ef02a34eb028d4f06aa8e5d7d8d98e5409f4ffb7a2f9fb879c03b = $this->env->getExtension("native_profiler");
        $__internal_2f128306468ef02a34eb028d4f06aa8e5d7d8d98e5409f4ffb7a2f9fb879c03b->enter($__internal_2f128306468ef02a34eb028d4f06aa8e5d7d8d98e5409f4ffb7a2f9fb879c03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f128306468ef02a34eb028d4f06aa8e5d7d8d98e5409f4ffb7a2f9fb879c03b->leave($__internal_2f128306468ef02a34eb028d4f06aa8e5d7d8d98e5409f4ffb7a2f9fb879c03b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be2e2cc1b24b658c76d1cf20cbdbd5817ed036c115181c0a327d087f2304eb68 = $this->env->getExtension("native_profiler");
        $__internal_be2e2cc1b24b658c76d1cf20cbdbd5817ed036c115181c0a327d087f2304eb68->enter($__internal_be2e2cc1b24b658c76d1cf20cbdbd5817ed036c115181c0a327d087f2304eb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_be2e2cc1b24b658c76d1cf20cbdbd5817ed036c115181c0a327d087f2304eb68->leave($__internal_be2e2cc1b24b658c76d1cf20cbdbd5817ed036c115181c0a327d087f2304eb68_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f7e161969efdfdbaf4b8272c0e834eda3bdef7dc4da0cb1f6be774a038bac9a = $this->env->getExtension("native_profiler");
        $__internal_4f7e161969efdfdbaf4b8272c0e834eda3bdef7dc4da0cb1f6be774a038bac9a->enter($__internal_4f7e161969efdfdbaf4b8272c0e834eda3bdef7dc4da0cb1f6be774a038bac9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f7e161969efdfdbaf4b8272c0e834eda3bdef7dc4da0cb1f6be774a038bac9a->leave($__internal_4f7e161969efdfdbaf4b8272c0e834eda3bdef7dc4da0cb1f6be774a038bac9a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1816e274ce094e4ed3bd4dfdef4b1985e7de5cedf1724c1ebf1d3b4ded76a603 = $this->env->getExtension("native_profiler");
        $__internal_1816e274ce094e4ed3bd4dfdef4b1985e7de5cedf1724c1ebf1d3b4ded76a603->enter($__internal_1816e274ce094e4ed3bd4dfdef4b1985e7de5cedf1724c1ebf1d3b4ded76a603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1816e274ce094e4ed3bd4dfdef4b1985e7de5cedf1724c1ebf1d3b4ded76a603->leave($__internal_1816e274ce094e4ed3bd4dfdef4b1985e7de5cedf1724c1ebf1d3b4ded76a603_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
