<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d9cd72b6199a79fa8927a2d1f61499bfe9858dd832c42996874693397c57b8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b026bb2bfb64ebe78626780365d550e27a09d3a064bd9c228b4e1db0d9af7c9 = $this->env->getExtension("native_profiler");
        $__internal_4b026bb2bfb64ebe78626780365d550e27a09d3a064bd9c228b4e1db0d9af7c9->enter($__internal_4b026bb2bfb64ebe78626780365d550e27a09d3a064bd9c228b4e1db0d9af7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4b026bb2bfb64ebe78626780365d550e27a09d3a064bd9c228b4e1db0d9af7c9->leave($__internal_4b026bb2bfb64ebe78626780365d550e27a09d3a064bd9c228b4e1db0d9af7c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
