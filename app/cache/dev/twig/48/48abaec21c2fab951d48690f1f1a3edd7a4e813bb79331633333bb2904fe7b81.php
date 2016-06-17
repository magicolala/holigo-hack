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
        $__internal_97ba8a82dd73be51ab9d23b11f664e67ff551b9c537e8d979686b792a8f3f9bc = $this->env->getExtension("native_profiler");
        $__internal_97ba8a82dd73be51ab9d23b11f664e67ff551b9c537e8d979686b792a8f3f9bc->enter($__internal_97ba8a82dd73be51ab9d23b11f664e67ff551b9c537e8d979686b792a8f3f9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97ba8a82dd73be51ab9d23b11f664e67ff551b9c537e8d979686b792a8f3f9bc->leave($__internal_97ba8a82dd73be51ab9d23b11f664e67ff551b9c537e8d979686b792a8f3f9bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_752b66aa4460046afe5fb430cf41bd72afa29c450b008ba0e1707ed46e50fe81 = $this->env->getExtension("native_profiler");
        $__internal_752b66aa4460046afe5fb430cf41bd72afa29c450b008ba0e1707ed46e50fe81->enter($__internal_752b66aa4460046afe5fb430cf41bd72afa29c450b008ba0e1707ed46e50fe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_752b66aa4460046afe5fb430cf41bd72afa29c450b008ba0e1707ed46e50fe81->leave($__internal_752b66aa4460046afe5fb430cf41bd72afa29c450b008ba0e1707ed46e50fe81_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea714fd96e9820529e82209494307255a6a6ccf824d769f11dc1a8baf68fb4bb = $this->env->getExtension("native_profiler");
        $__internal_ea714fd96e9820529e82209494307255a6a6ccf824d769f11dc1a8baf68fb4bb->enter($__internal_ea714fd96e9820529e82209494307255a6a6ccf824d769f11dc1a8baf68fb4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ea714fd96e9820529e82209494307255a6a6ccf824d769f11dc1a8baf68fb4bb->leave($__internal_ea714fd96e9820529e82209494307255a6a6ccf824d769f11dc1a8baf68fb4bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72c249d2c5b68a1758e2faa980ed155992966255e48a0dcccb54404e27e548f0 = $this->env->getExtension("native_profiler");
        $__internal_72c249d2c5b68a1758e2faa980ed155992966255e48a0dcccb54404e27e548f0->enter($__internal_72c249d2c5b68a1758e2faa980ed155992966255e48a0dcccb54404e27e548f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72c249d2c5b68a1758e2faa980ed155992966255e48a0dcccb54404e27e548f0->leave($__internal_72c249d2c5b68a1758e2faa980ed155992966255e48a0dcccb54404e27e548f0_prof);

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
