<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_3d18513dc58f5d6fe1bfbb73685e0f6e372e1560c086f1c2ab331f8bd4db4d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b192b0ce3d125c953374b3e2dfe7e58bbf3e22d48127ad2e7cc259709182498d = $this->env->getExtension("native_profiler");
        $__internal_b192b0ce3d125c953374b3e2dfe7e58bbf3e22d48127ad2e7cc259709182498d->enter($__internal_b192b0ce3d125c953374b3e2dfe7e58bbf3e22d48127ad2e7cc259709182498d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b192b0ce3d125c953374b3e2dfe7e58bbf3e22d48127ad2e7cc259709182498d->leave($__internal_b192b0ce3d125c953374b3e2dfe7e58bbf3e22d48127ad2e7cc259709182498d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02359d9ce3896304c57d038b29eb166ad5266717c8188529dd06c01b84f5afb1 = $this->env->getExtension("native_profiler");
        $__internal_02359d9ce3896304c57d038b29eb166ad5266717c8188529dd06c01b84f5afb1->enter($__internal_02359d9ce3896304c57d038b29eb166ad5266717c8188529dd06c01b84f5afb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_02359d9ce3896304c57d038b29eb166ad5266717c8188529dd06c01b84f5afb1->leave($__internal_02359d9ce3896304c57d038b29eb166ad5266717c8188529dd06c01b84f5afb1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee895b029c047ef6347f7f146b3dc41c862eb2f61ffb539cd2505bba5a2ffbef = $this->env->getExtension("native_profiler");
        $__internal_ee895b029c047ef6347f7f146b3dc41c862eb2f61ffb539cd2505bba5a2ffbef->enter($__internal_ee895b029c047ef6347f7f146b3dc41c862eb2f61ffb539cd2505bba5a2ffbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ee895b029c047ef6347f7f146b3dc41c862eb2f61ffb539cd2505bba5a2ffbef->leave($__internal_ee895b029c047ef6347f7f146b3dc41c862eb2f61ffb539cd2505bba5a2ffbef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
