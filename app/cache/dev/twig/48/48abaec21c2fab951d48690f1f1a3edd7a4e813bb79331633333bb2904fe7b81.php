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
        $__internal_abb2e2a1cd90b859ca0d013cceee395d0e6ba14f2f13d7ea1c723e132e636bf7 = $this->env->getExtension("native_profiler");
        $__internal_abb2e2a1cd90b859ca0d013cceee395d0e6ba14f2f13d7ea1c723e132e636bf7->enter($__internal_abb2e2a1cd90b859ca0d013cceee395d0e6ba14f2f13d7ea1c723e132e636bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb2e2a1cd90b859ca0d013cceee395d0e6ba14f2f13d7ea1c723e132e636bf7->leave($__internal_abb2e2a1cd90b859ca0d013cceee395d0e6ba14f2f13d7ea1c723e132e636bf7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98457c77021b0874fa86f76f334d4c6d3abf8b33e1ad2aaa8266ba67405bfc0c = $this->env->getExtension("native_profiler");
        $__internal_98457c77021b0874fa86f76f334d4c6d3abf8b33e1ad2aaa8266ba67405bfc0c->enter($__internal_98457c77021b0874fa86f76f334d4c6d3abf8b33e1ad2aaa8266ba67405bfc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98457c77021b0874fa86f76f334d4c6d3abf8b33e1ad2aaa8266ba67405bfc0c->leave($__internal_98457c77021b0874fa86f76f334d4c6d3abf8b33e1ad2aaa8266ba67405bfc0c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dca334f487da4014dd572b594a2f4c5be7db1170f90c56942666abc0344acff2 = $this->env->getExtension("native_profiler");
        $__internal_dca334f487da4014dd572b594a2f4c5be7db1170f90c56942666abc0344acff2->enter($__internal_dca334f487da4014dd572b594a2f4c5be7db1170f90c56942666abc0344acff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dca334f487da4014dd572b594a2f4c5be7db1170f90c56942666abc0344acff2->leave($__internal_dca334f487da4014dd572b594a2f4c5be7db1170f90c56942666abc0344acff2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01f7af10eb70e26a24378bd8f9eae02aa1f8688f84784ea8176ae19a0f3f870b = $this->env->getExtension("native_profiler");
        $__internal_01f7af10eb70e26a24378bd8f9eae02aa1f8688f84784ea8176ae19a0f3f870b->enter($__internal_01f7af10eb70e26a24378bd8f9eae02aa1f8688f84784ea8176ae19a0f3f870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01f7af10eb70e26a24378bd8f9eae02aa1f8688f84784ea8176ae19a0f3f870b->leave($__internal_01f7af10eb70e26a24378bd8f9eae02aa1f8688f84784ea8176ae19a0f3f870b_prof);

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
