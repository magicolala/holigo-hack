<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_394c3fe1b8b395c833fc9697917eb484b612e46ea7455a997e90b7ba0695931c extends Twig_Template
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
        $__internal_6bff66c422f1d8a68af08b44f2509789ec03e3624c77e3ebcea68f39c357c283 = $this->env->getExtension("native_profiler");
        $__internal_6bff66c422f1d8a68af08b44f2509789ec03e3624c77e3ebcea68f39c357c283->enter($__internal_6bff66c422f1d8a68af08b44f2509789ec03e3624c77e3ebcea68f39c357c283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bff66c422f1d8a68af08b44f2509789ec03e3624c77e3ebcea68f39c357c283->leave($__internal_6bff66c422f1d8a68af08b44f2509789ec03e3624c77e3ebcea68f39c357c283_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37c62221a70c66195d4385adce865b6bc5ea44bc635795742d2155f580f141a1 = $this->env->getExtension("native_profiler");
        $__internal_37c62221a70c66195d4385adce865b6bc5ea44bc635795742d2155f580f141a1->enter($__internal_37c62221a70c66195d4385adce865b6bc5ea44bc635795742d2155f580f141a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37c62221a70c66195d4385adce865b6bc5ea44bc635795742d2155f580f141a1->leave($__internal_37c62221a70c66195d4385adce865b6bc5ea44bc635795742d2155f580f141a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be94e3be1397853802d9d31cc69fe8d3d26aa233eea9f5fee77ec4072f4eb512 = $this->env->getExtension("native_profiler");
        $__internal_be94e3be1397853802d9d31cc69fe8d3d26aa233eea9f5fee77ec4072f4eb512->enter($__internal_be94e3be1397853802d9d31cc69fe8d3d26aa233eea9f5fee77ec4072f4eb512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be94e3be1397853802d9d31cc69fe8d3d26aa233eea9f5fee77ec4072f4eb512->leave($__internal_be94e3be1397853802d9d31cc69fe8d3d26aa233eea9f5fee77ec4072f4eb512_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74cfff902bd7e1992e072be8792b20ddf249d12a92296fadbe5371eee1a43fe6 = $this->env->getExtension("native_profiler");
        $__internal_74cfff902bd7e1992e072be8792b20ddf249d12a92296fadbe5371eee1a43fe6->enter($__internal_74cfff902bd7e1992e072be8792b20ddf249d12a92296fadbe5371eee1a43fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_74cfff902bd7e1992e072be8792b20ddf249d12a92296fadbe5371eee1a43fe6->leave($__internal_74cfff902bd7e1992e072be8792b20ddf249d12a92296fadbe5371eee1a43fe6_prof);

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
