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
        $__internal_a8f2124587962cc1bffc4e93cac2300aae45e74b613d640ed0eb261de5305a96 = $this->env->getExtension("native_profiler");
        $__internal_a8f2124587962cc1bffc4e93cac2300aae45e74b613d640ed0eb261de5305a96->enter($__internal_a8f2124587962cc1bffc4e93cac2300aae45e74b613d640ed0eb261de5305a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f2124587962cc1bffc4e93cac2300aae45e74b613d640ed0eb261de5305a96->leave($__internal_a8f2124587962cc1bffc4e93cac2300aae45e74b613d640ed0eb261de5305a96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6654e978c6392cd8027ef7b2f6c5f58a10c1ba121c30aa6ba477961aadcaa2dd = $this->env->getExtension("native_profiler");
        $__internal_6654e978c6392cd8027ef7b2f6c5f58a10c1ba121c30aa6ba477961aadcaa2dd->enter($__internal_6654e978c6392cd8027ef7b2f6c5f58a10c1ba121c30aa6ba477961aadcaa2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6654e978c6392cd8027ef7b2f6c5f58a10c1ba121c30aa6ba477961aadcaa2dd->leave($__internal_6654e978c6392cd8027ef7b2f6c5f58a10c1ba121c30aa6ba477961aadcaa2dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d4757e2125c4ba790833a8cf4b633ddfe566e2e22f71a7421e7fdc5e975433d = $this->env->getExtension("native_profiler");
        $__internal_3d4757e2125c4ba790833a8cf4b633ddfe566e2e22f71a7421e7fdc5e975433d->enter($__internal_3d4757e2125c4ba790833a8cf4b633ddfe566e2e22f71a7421e7fdc5e975433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d4757e2125c4ba790833a8cf4b633ddfe566e2e22f71a7421e7fdc5e975433d->leave($__internal_3d4757e2125c4ba790833a8cf4b633ddfe566e2e22f71a7421e7fdc5e975433d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bba6c26040ed1b6c1cbc56f05e7774e8919c9cd7fb2e411c4ea72af6324644de = $this->env->getExtension("native_profiler");
        $__internal_bba6c26040ed1b6c1cbc56f05e7774e8919c9cd7fb2e411c4ea72af6324644de->enter($__internal_bba6c26040ed1b6c1cbc56f05e7774e8919c9cd7fb2e411c4ea72af6324644de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bba6c26040ed1b6c1cbc56f05e7774e8919c9cd7fb2e411c4ea72af6324644de->leave($__internal_bba6c26040ed1b6c1cbc56f05e7774e8919c9cd7fb2e411c4ea72af6324644de_prof);

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
