<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8e4b4326a40a416f9ed89a2c23742e3eeb397f0de7085ecec869bcec41f0cc86 extends Twig_Template
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
        $__internal_09e1e050b1bbf80d25dc2797782d61c21e3f92406a747a5255e4dd4518ebb9b5 = $this->env->getExtension("native_profiler");
        $__internal_09e1e050b1bbf80d25dc2797782d61c21e3f92406a747a5255e4dd4518ebb9b5->enter($__internal_09e1e050b1bbf80d25dc2797782d61c21e3f92406a747a5255e4dd4518ebb9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e1e050b1bbf80d25dc2797782d61c21e3f92406a747a5255e4dd4518ebb9b5->leave($__internal_09e1e050b1bbf80d25dc2797782d61c21e3f92406a747a5255e4dd4518ebb9b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc314e82a3678910cde738d65a22dbdedcf4c99693dadef65c9c0430d56989ea = $this->env->getExtension("native_profiler");
        $__internal_bc314e82a3678910cde738d65a22dbdedcf4c99693dadef65c9c0430d56989ea->enter($__internal_bc314e82a3678910cde738d65a22dbdedcf4c99693dadef65c9c0430d56989ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc314e82a3678910cde738d65a22dbdedcf4c99693dadef65c9c0430d56989ea->leave($__internal_bc314e82a3678910cde738d65a22dbdedcf4c99693dadef65c9c0430d56989ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f6846fefab602168b0c5b83c2da89a3807636d558bc100351f6a423bbb7c328 = $this->env->getExtension("native_profiler");
        $__internal_8f6846fefab602168b0c5b83c2da89a3807636d558bc100351f6a423bbb7c328->enter($__internal_8f6846fefab602168b0c5b83c2da89a3807636d558bc100351f6a423bbb7c328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f6846fefab602168b0c5b83c2da89a3807636d558bc100351f6a423bbb7c328->leave($__internal_8f6846fefab602168b0c5b83c2da89a3807636d558bc100351f6a423bbb7c328_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b875e538f90f74878bd72989f2ed0e8038a1f8d527b7c2f0f4e3c6c1b9058df4 = $this->env->getExtension("native_profiler");
        $__internal_b875e538f90f74878bd72989f2ed0e8038a1f8d527b7c2f0f4e3c6c1b9058df4->enter($__internal_b875e538f90f74878bd72989f2ed0e8038a1f8d527b7c2f0f4e3c6c1b9058df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b875e538f90f74878bd72989f2ed0e8038a1f8d527b7c2f0f4e3c6c1b9058df4->leave($__internal_b875e538f90f74878bd72989f2ed0e8038a1f8d527b7c2f0f4e3c6c1b9058df4_prof);

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
