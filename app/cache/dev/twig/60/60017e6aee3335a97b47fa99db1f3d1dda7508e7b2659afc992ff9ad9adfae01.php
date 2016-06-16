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
        $__internal_8714993e78dd3ac5aae8fad21c04206cc5513d2b4675bd273970903cc2fb4f5b = $this->env->getExtension("native_profiler");
        $__internal_8714993e78dd3ac5aae8fad21c04206cc5513d2b4675bd273970903cc2fb4f5b->enter($__internal_8714993e78dd3ac5aae8fad21c04206cc5513d2b4675bd273970903cc2fb4f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8714993e78dd3ac5aae8fad21c04206cc5513d2b4675bd273970903cc2fb4f5b->leave($__internal_8714993e78dd3ac5aae8fad21c04206cc5513d2b4675bd273970903cc2fb4f5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f889a13fd1d014b327711341d17e07abd0d15cb58deb014394c36135d5a3ea9 = $this->env->getExtension("native_profiler");
        $__internal_3f889a13fd1d014b327711341d17e07abd0d15cb58deb014394c36135d5a3ea9->enter($__internal_3f889a13fd1d014b327711341d17e07abd0d15cb58deb014394c36135d5a3ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f889a13fd1d014b327711341d17e07abd0d15cb58deb014394c36135d5a3ea9->leave($__internal_3f889a13fd1d014b327711341d17e07abd0d15cb58deb014394c36135d5a3ea9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eccb5d2181263bbb359de8959823f7935e8c89e7ae72ab8099f4a2e120965183 = $this->env->getExtension("native_profiler");
        $__internal_eccb5d2181263bbb359de8959823f7935e8c89e7ae72ab8099f4a2e120965183->enter($__internal_eccb5d2181263bbb359de8959823f7935e8c89e7ae72ab8099f4a2e120965183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eccb5d2181263bbb359de8959823f7935e8c89e7ae72ab8099f4a2e120965183->leave($__internal_eccb5d2181263bbb359de8959823f7935e8c89e7ae72ab8099f4a2e120965183_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fba66420eb32bec4d011401a45e0a99d3ce8a605a0dc74664e108fd71c400d02 = $this->env->getExtension("native_profiler");
        $__internal_fba66420eb32bec4d011401a45e0a99d3ce8a605a0dc74664e108fd71c400d02->enter($__internal_fba66420eb32bec4d011401a45e0a99d3ce8a605a0dc74664e108fd71c400d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fba66420eb32bec4d011401a45e0a99d3ce8a605a0dc74664e108fd71c400d02->leave($__internal_fba66420eb32bec4d011401a45e0a99d3ce8a605a0dc74664e108fd71c400d02_prof);

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
