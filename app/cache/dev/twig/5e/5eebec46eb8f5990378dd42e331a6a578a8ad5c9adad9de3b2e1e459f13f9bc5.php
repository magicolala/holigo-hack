<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_19890952bfecf06b0a1a5eb844ab9d447df2d9a37b9265b598c77ab4c25a70fb extends Twig_Template
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
        $__internal_462068a3b9d55508069070d582895a285ddf07029b31a02c0955b7cfc7efd481 = $this->env->getExtension("native_profiler");
        $__internal_462068a3b9d55508069070d582895a285ddf07029b31a02c0955b7cfc7efd481->enter($__internal_462068a3b9d55508069070d582895a285ddf07029b31a02c0955b7cfc7efd481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_462068a3b9d55508069070d582895a285ddf07029b31a02c0955b7cfc7efd481->leave($__internal_462068a3b9d55508069070d582895a285ddf07029b31a02c0955b7cfc7efd481_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
