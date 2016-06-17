<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_178f689cc001fa743574cb9b19d96642d1d7dbbe6fa2a206d85efb57d7ec0963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6413df70f39658f6af783ff8ce4952e6f501a4809880abb165dc9f8a58d62a5c = $this->env->getExtension("native_profiler");
        $__internal_6413df70f39658f6af783ff8ce4952e6f501a4809880abb165dc9f8a58d62a5c->enter($__internal_6413df70f39658f6af783ff8ce4952e6f501a4809880abb165dc9f8a58d62a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6413df70f39658f6af783ff8ce4952e6f501a4809880abb165dc9f8a58d62a5c->leave($__internal_6413df70f39658f6af783ff8ce4952e6f501a4809880abb165dc9f8a58d62a5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_539dea3ee4be2e8d924d91f9a5fde8fbfc18a64a3373e01b80ed29b8aadd1876 = $this->env->getExtension("native_profiler");
        $__internal_539dea3ee4be2e8d924d91f9a5fde8fbfc18a64a3373e01b80ed29b8aadd1876->enter($__internal_539dea3ee4be2e8d924d91f9a5fde8fbfc18a64a3373e01b80ed29b8aadd1876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_539dea3ee4be2e8d924d91f9a5fde8fbfc18a64a3373e01b80ed29b8aadd1876->leave($__internal_539dea3ee4be2e8d924d91f9a5fde8fbfc18a64a3373e01b80ed29b8aadd1876_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa5ca55cbc9e178daaa9e3f608b26cb1dcae637d4e5904857e22e0e0fd682874 = $this->env->getExtension("native_profiler");
        $__internal_fa5ca55cbc9e178daaa9e3f608b26cb1dcae637d4e5904857e22e0e0fd682874->enter($__internal_fa5ca55cbc9e178daaa9e3f608b26cb1dcae637d4e5904857e22e0e0fd682874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fa5ca55cbc9e178daaa9e3f608b26cb1dcae637d4e5904857e22e0e0fd682874->leave($__internal_fa5ca55cbc9e178daaa9e3f608b26cb1dcae637d4e5904857e22e0e0fd682874_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a94a87b1434e7f274f6908b5881ae1deb93c69b58cce0f18a9b10b895cb288f2 = $this->env->getExtension("native_profiler");
        $__internal_a94a87b1434e7f274f6908b5881ae1deb93c69b58cce0f18a9b10b895cb288f2->enter($__internal_a94a87b1434e7f274f6908b5881ae1deb93c69b58cce0f18a9b10b895cb288f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a94a87b1434e7f274f6908b5881ae1deb93c69b58cce0f18a9b10b895cb288f2->leave($__internal_a94a87b1434e7f274f6908b5881ae1deb93c69b58cce0f18a9b10b895cb288f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
