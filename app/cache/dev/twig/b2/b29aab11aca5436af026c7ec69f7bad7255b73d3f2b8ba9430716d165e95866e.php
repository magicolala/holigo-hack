<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a1acb557c32395595cb7c431dc530fed06fc46d2d195d003d6a2ebe5adcc9710 extends Twig_Template
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
        $__internal_6b4dc442e4fff1a83a829ff723e4fcaefb807b42630484aad8086fe4049abfe0 = $this->env->getExtension("native_profiler");
        $__internal_6b4dc442e4fff1a83a829ff723e4fcaefb807b42630484aad8086fe4049abfe0->enter($__internal_6b4dc442e4fff1a83a829ff723e4fcaefb807b42630484aad8086fe4049abfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6b4dc442e4fff1a83a829ff723e4fcaefb807b42630484aad8086fe4049abfe0->leave($__internal_6b4dc442e4fff1a83a829ff723e4fcaefb807b42630484aad8086fe4049abfe0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
