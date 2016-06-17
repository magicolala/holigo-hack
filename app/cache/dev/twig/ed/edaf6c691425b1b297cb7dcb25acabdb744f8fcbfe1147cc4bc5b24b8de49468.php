<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_2abd3aaf76b16f38473342cc72833b1785d68ef88fb0357b8a3f589e69c43878 extends Twig_Template
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
        $__internal_29260cb96a74aa10754a1e0f0cd2346bf0392576e0ad453346c94918a2253234 = $this->env->getExtension("native_profiler");
        $__internal_29260cb96a74aa10754a1e0f0cd2346bf0392576e0ad453346c94918a2253234->enter($__internal_29260cb96a74aa10754a1e0f0cd2346bf0392576e0ad453346c94918a2253234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_29260cb96a74aa10754a1e0f0cd2346bf0392576e0ad453346c94918a2253234->leave($__internal_29260cb96a74aa10754a1e0f0cd2346bf0392576e0ad453346c94918a2253234_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
