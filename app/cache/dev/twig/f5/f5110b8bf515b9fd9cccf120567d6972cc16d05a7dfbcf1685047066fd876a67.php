<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c12d5710c5da1a2714e7e776279a35aff66a0dffa74dc4a27352cd22c759a7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_2efd65660cd35da2c60f1c7dd3d8f1a977f7ae9be161c12d7d2ef97eedea4e76 = $this->env->getExtension("native_profiler");
        $__internal_2efd65660cd35da2c60f1c7dd3d8f1a977f7ae9be161c12d7d2ef97eedea4e76->enter($__internal_2efd65660cd35da2c60f1c7dd3d8f1a977f7ae9be161c12d7d2ef97eedea4e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2efd65660cd35da2c60f1c7dd3d8f1a977f7ae9be161c12d7d2ef97eedea4e76->leave($__internal_2efd65660cd35da2c60f1c7dd3d8f1a977f7ae9be161c12d7d2ef97eedea4e76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4332cea1a8d9a2baf0ebf0fc6d5f4e016db34e9b6a8ed67940f349dce27d4e20 = $this->env->getExtension("native_profiler");
        $__internal_4332cea1a8d9a2baf0ebf0fc6d5f4e016db34e9b6a8ed67940f349dce27d4e20->enter($__internal_4332cea1a8d9a2baf0ebf0fc6d5f4e016db34e9b6a8ed67940f349dce27d4e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4332cea1a8d9a2baf0ebf0fc6d5f4e016db34e9b6a8ed67940f349dce27d4e20->leave($__internal_4332cea1a8d9a2baf0ebf0fc6d5f4e016db34e9b6a8ed67940f349dce27d4e20_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d58ac5adfbd25cc1973c9a233be30c2e3eca0bcd9bcf29a2e8c2785437368c4 = $this->env->getExtension("native_profiler");
        $__internal_9d58ac5adfbd25cc1973c9a233be30c2e3eca0bcd9bcf29a2e8c2785437368c4->enter($__internal_9d58ac5adfbd25cc1973c9a233be30c2e3eca0bcd9bcf29a2e8c2785437368c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d58ac5adfbd25cc1973c9a233be30c2e3eca0bcd9bcf29a2e8c2785437368c4->leave($__internal_9d58ac5adfbd25cc1973c9a233be30c2e3eca0bcd9bcf29a2e8c2785437368c4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
