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
        $__internal_b1c173c3948506433ccc4f9ff5b94c0c37c367716429435af9feca47245dd016 = $this->env->getExtension("native_profiler");
        $__internal_b1c173c3948506433ccc4f9ff5b94c0c37c367716429435af9feca47245dd016->enter($__internal_b1c173c3948506433ccc4f9ff5b94c0c37c367716429435af9feca47245dd016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c173c3948506433ccc4f9ff5b94c0c37c367716429435af9feca47245dd016->leave($__internal_b1c173c3948506433ccc4f9ff5b94c0c37c367716429435af9feca47245dd016_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c63d11aa354da02a397ff713cfd9f0cf56ab50a9156d70388d1f3f450532c60e = $this->env->getExtension("native_profiler");
        $__internal_c63d11aa354da02a397ff713cfd9f0cf56ab50a9156d70388d1f3f450532c60e->enter($__internal_c63d11aa354da02a397ff713cfd9f0cf56ab50a9156d70388d1f3f450532c60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c63d11aa354da02a397ff713cfd9f0cf56ab50a9156d70388d1f3f450532c60e->leave($__internal_c63d11aa354da02a397ff713cfd9f0cf56ab50a9156d70388d1f3f450532c60e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aaa744e54d5766fe0ed02551934c42fec1c2bed0bcdf9c19acd1a0ff0f72a5d9 = $this->env->getExtension("native_profiler");
        $__internal_aaa744e54d5766fe0ed02551934c42fec1c2bed0bcdf9c19acd1a0ff0f72a5d9->enter($__internal_aaa744e54d5766fe0ed02551934c42fec1c2bed0bcdf9c19acd1a0ff0f72a5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aaa744e54d5766fe0ed02551934c42fec1c2bed0bcdf9c19acd1a0ff0f72a5d9->leave($__internal_aaa744e54d5766fe0ed02551934c42fec1c2bed0bcdf9c19acd1a0ff0f72a5d9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abe0d8199ac6a315f1e71c5db5554ec343c0fad72ec08ee728e5e27a8d04816e = $this->env->getExtension("native_profiler");
        $__internal_abe0d8199ac6a315f1e71c5db5554ec343c0fad72ec08ee728e5e27a8d04816e->enter($__internal_abe0d8199ac6a315f1e71c5db5554ec343c0fad72ec08ee728e5e27a8d04816e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_abe0d8199ac6a315f1e71c5db5554ec343c0fad72ec08ee728e5e27a8d04816e->leave($__internal_abe0d8199ac6a315f1e71c5db5554ec343c0fad72ec08ee728e5e27a8d04816e_prof);

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
