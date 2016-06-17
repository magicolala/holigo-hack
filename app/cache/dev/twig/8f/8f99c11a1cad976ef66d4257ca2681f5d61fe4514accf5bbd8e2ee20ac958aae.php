<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e46ca54d94f38b04f0b1da8de9d9e93549fef1796196768c4625aafb830e8eed extends Twig_Template
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
        $__internal_6cc032bb01c88c055b23ced9efc3daad5e88edb946ddba326ed447cf5fe541c3 = $this->env->getExtension("native_profiler");
        $__internal_6cc032bb01c88c055b23ced9efc3daad5e88edb946ddba326ed447cf5fe541c3->enter($__internal_6cc032bb01c88c055b23ced9efc3daad5e88edb946ddba326ed447cf5fe541c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc032bb01c88c055b23ced9efc3daad5e88edb946ddba326ed447cf5fe541c3->leave($__internal_6cc032bb01c88c055b23ced9efc3daad5e88edb946ddba326ed447cf5fe541c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a92719122df0d9d5087aef1624cb4a8742c89ab1e30f6371d0ecd8795a627fc = $this->env->getExtension("native_profiler");
        $__internal_2a92719122df0d9d5087aef1624cb4a8742c89ab1e30f6371d0ecd8795a627fc->enter($__internal_2a92719122df0d9d5087aef1624cb4a8742c89ab1e30f6371d0ecd8795a627fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a92719122df0d9d5087aef1624cb4a8742c89ab1e30f6371d0ecd8795a627fc->leave($__internal_2a92719122df0d9d5087aef1624cb4a8742c89ab1e30f6371d0ecd8795a627fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46925f4bdb4d8d4700667de40050a6521e6fe0753231dd8d564c8a567a0a4a48 = $this->env->getExtension("native_profiler");
        $__internal_46925f4bdb4d8d4700667de40050a6521e6fe0753231dd8d564c8a567a0a4a48->enter($__internal_46925f4bdb4d8d4700667de40050a6521e6fe0753231dd8d564c8a567a0a4a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46925f4bdb4d8d4700667de40050a6521e6fe0753231dd8d564c8a567a0a4a48->leave($__internal_46925f4bdb4d8d4700667de40050a6521e6fe0753231dd8d564c8a567a0a4a48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dccbb603f9f8d99f9253d2b1d5a292c0a8ad08688bb833053121d3bf477462ab = $this->env->getExtension("native_profiler");
        $__internal_dccbb603f9f8d99f9253d2b1d5a292c0a8ad08688bb833053121d3bf477462ab->enter($__internal_dccbb603f9f8d99f9253d2b1d5a292c0a8ad08688bb833053121d3bf477462ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dccbb603f9f8d99f9253d2b1d5a292c0a8ad08688bb833053121d3bf477462ab->leave($__internal_dccbb603f9f8d99f9253d2b1d5a292c0a8ad08688bb833053121d3bf477462ab_prof);

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
