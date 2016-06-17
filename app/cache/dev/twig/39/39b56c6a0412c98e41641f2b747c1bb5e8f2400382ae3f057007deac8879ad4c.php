<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_5eaa82e0a89ba2ca70de0d3273b91d69b0720fe63e38a84425a30ca16ad9ae32 extends Twig_Template
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
        $__internal_7aea1b0c623c7567ef032849ddddadc9af15b9feb9541a1e7a82b0e28c754999 = $this->env->getExtension("native_profiler");
        $__internal_7aea1b0c623c7567ef032849ddddadc9af15b9feb9541a1e7a82b0e28c754999->enter($__internal_7aea1b0c623c7567ef032849ddddadc9af15b9feb9541a1e7a82b0e28c754999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7aea1b0c623c7567ef032849ddddadc9af15b9feb9541a1e7a82b0e28c754999->leave($__internal_7aea1b0c623c7567ef032849ddddadc9af15b9feb9541a1e7a82b0e28c754999_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
