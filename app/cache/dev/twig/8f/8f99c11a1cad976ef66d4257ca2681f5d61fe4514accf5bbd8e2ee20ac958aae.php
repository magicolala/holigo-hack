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
        $__internal_2a5c59be9fedd9a62a21a390efc82a4e4ddb6b0129d5889a11c3d1659ef4eaf1 = $this->env->getExtension("native_profiler");
        $__internal_2a5c59be9fedd9a62a21a390efc82a4e4ddb6b0129d5889a11c3d1659ef4eaf1->enter($__internal_2a5c59be9fedd9a62a21a390efc82a4e4ddb6b0129d5889a11c3d1659ef4eaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a5c59be9fedd9a62a21a390efc82a4e4ddb6b0129d5889a11c3d1659ef4eaf1->leave($__internal_2a5c59be9fedd9a62a21a390efc82a4e4ddb6b0129d5889a11c3d1659ef4eaf1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20501c88908439b5d4376f30450ad76d353544feaf2cb2eb56fe0342806eb5d0 = $this->env->getExtension("native_profiler");
        $__internal_20501c88908439b5d4376f30450ad76d353544feaf2cb2eb56fe0342806eb5d0->enter($__internal_20501c88908439b5d4376f30450ad76d353544feaf2cb2eb56fe0342806eb5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_20501c88908439b5d4376f30450ad76d353544feaf2cb2eb56fe0342806eb5d0->leave($__internal_20501c88908439b5d4376f30450ad76d353544feaf2cb2eb56fe0342806eb5d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a3b01dad6fbc35094e7adb43ce4dda7cd8233203d96bc152f3e1e1b5636fee08 = $this->env->getExtension("native_profiler");
        $__internal_a3b01dad6fbc35094e7adb43ce4dda7cd8233203d96bc152f3e1e1b5636fee08->enter($__internal_a3b01dad6fbc35094e7adb43ce4dda7cd8233203d96bc152f3e1e1b5636fee08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a3b01dad6fbc35094e7adb43ce4dda7cd8233203d96bc152f3e1e1b5636fee08->leave($__internal_a3b01dad6fbc35094e7adb43ce4dda7cd8233203d96bc152f3e1e1b5636fee08_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66e016e889177143bf911e1bc604c8f8e6f7ba8a96565f1516a174a420a2f44a = $this->env->getExtension("native_profiler");
        $__internal_66e016e889177143bf911e1bc604c8f8e6f7ba8a96565f1516a174a420a2f44a->enter($__internal_66e016e889177143bf911e1bc604c8f8e6f7ba8a96565f1516a174a420a2f44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66e016e889177143bf911e1bc604c8f8e6f7ba8a96565f1516a174a420a2f44a->leave($__internal_66e016e889177143bf911e1bc604c8f8e6f7ba8a96565f1516a174a420a2f44a_prof);

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
