<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_7617e02445b0147ace390caa78cab4fdbeff2dee9c6ad497324978907a86d9a6 extends Twig_Template
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
        $__internal_6a2c20016473396df78a709290fb4063b6fa68ca29969b7d01dae7ea6900f0f5 = $this->env->getExtension("native_profiler");
        $__internal_6a2c20016473396df78a709290fb4063b6fa68ca29969b7d01dae7ea6900f0f5->enter($__internal_6a2c20016473396df78a709290fb4063b6fa68ca29969b7d01dae7ea6900f0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6a2c20016473396df78a709290fb4063b6fa68ca29969b7d01dae7ea6900f0f5->leave($__internal_6a2c20016473396df78a709290fb4063b6fa68ca29969b7d01dae7ea6900f0f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
