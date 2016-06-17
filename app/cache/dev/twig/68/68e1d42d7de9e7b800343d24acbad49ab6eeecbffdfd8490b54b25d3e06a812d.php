<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_83470f9370a9e1ccc8391e3d8d947e175e9b5df3437af9b4aa26ffca22e1791b extends Twig_Template
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
        $__internal_b52ac890fd3c595a4b530a49a736fa3194b79703b210ee084648c7b83ee40175 = $this->env->getExtension("native_profiler");
        $__internal_b52ac890fd3c595a4b530a49a736fa3194b79703b210ee084648c7b83ee40175->enter($__internal_b52ac890fd3c595a4b530a49a736fa3194b79703b210ee084648c7b83ee40175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_b52ac890fd3c595a4b530a49a736fa3194b79703b210ee084648c7b83ee40175->leave($__internal_b52ac890fd3c595a4b530a49a736fa3194b79703b210ee084648c7b83ee40175_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
