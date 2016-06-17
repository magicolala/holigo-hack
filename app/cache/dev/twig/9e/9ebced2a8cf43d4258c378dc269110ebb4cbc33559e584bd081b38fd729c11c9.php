<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a8e69be2fb75d4247d3388d2b9161e4a24ea47188db86f06a39986dab57460a2 extends Twig_Template
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
        $__internal_11f2e462c52d5a2c8c979ebede60c2428248a1d68ef32a1333b274bd5abbefa4 = $this->env->getExtension("native_profiler");
        $__internal_11f2e462c52d5a2c8c979ebede60c2428248a1d68ef32a1333b274bd5abbefa4->enter($__internal_11f2e462c52d5a2c8c979ebede60c2428248a1d68ef32a1333b274bd5abbefa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_11f2e462c52d5a2c8c979ebede60c2428248a1d68ef32a1333b274bd5abbefa4->leave($__internal_11f2e462c52d5a2c8c979ebede60c2428248a1d68ef32a1333b274bd5abbefa4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
