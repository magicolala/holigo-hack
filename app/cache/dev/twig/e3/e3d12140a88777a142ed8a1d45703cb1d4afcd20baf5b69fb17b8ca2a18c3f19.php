<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_577a215b2763a68da507268d84d72c89fb1bd229b17dbfecb947c6c160521016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_70b37c133aec00aa0dadbbbd540d1b9ac5b300e441c2a9d8b75fa9f2469d4dbc = $this->env->getExtension("native_profiler");
        $__internal_70b37c133aec00aa0dadbbbd540d1b9ac5b300e441c2a9d8b75fa9f2469d4dbc->enter($__internal_70b37c133aec00aa0dadbbbd540d1b9ac5b300e441c2a9d8b75fa9f2469d4dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b37c133aec00aa0dadbbbd540d1b9ac5b300e441c2a9d8b75fa9f2469d4dbc->leave($__internal_70b37c133aec00aa0dadbbbd540d1b9ac5b300e441c2a9d8b75fa9f2469d4dbc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_993ba3b50dcfa9100ea9a07906b4d38507b5454d0384aa36bf0372eedeb6ef66 = $this->env->getExtension("native_profiler");
        $__internal_993ba3b50dcfa9100ea9a07906b4d38507b5454d0384aa36bf0372eedeb6ef66->enter($__internal_993ba3b50dcfa9100ea9a07906b4d38507b5454d0384aa36bf0372eedeb6ef66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_993ba3b50dcfa9100ea9a07906b4d38507b5454d0384aa36bf0372eedeb6ef66->leave($__internal_993ba3b50dcfa9100ea9a07906b4d38507b5454d0384aa36bf0372eedeb6ef66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f1a95704018f0e8401c1f7befd03c148d1f848df162466d2e13b0d5f20c53d8 = $this->env->getExtension("native_profiler");
        $__internal_9f1a95704018f0e8401c1f7befd03c148d1f848df162466d2e13b0d5f20c53d8->enter($__internal_9f1a95704018f0e8401c1f7befd03c148d1f848df162466d2e13b0d5f20c53d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f1a95704018f0e8401c1f7befd03c148d1f848df162466d2e13b0d5f20c53d8->leave($__internal_9f1a95704018f0e8401c1f7befd03c148d1f848df162466d2e13b0d5f20c53d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_602fc62285ea90080161519077b7cc1bd17b48f51a6059ef5cfa437e04b54b37 = $this->env->getExtension("native_profiler");
        $__internal_602fc62285ea90080161519077b7cc1bd17b48f51a6059ef5cfa437e04b54b37->enter($__internal_602fc62285ea90080161519077b7cc1bd17b48f51a6059ef5cfa437e04b54b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_602fc62285ea90080161519077b7cc1bd17b48f51a6059ef5cfa437e04b54b37->leave($__internal_602fc62285ea90080161519077b7cc1bd17b48f51a6059ef5cfa437e04b54b37_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
