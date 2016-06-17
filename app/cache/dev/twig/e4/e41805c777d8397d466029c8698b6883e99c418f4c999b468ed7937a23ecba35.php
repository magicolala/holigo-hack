<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_cb52f1a5e3afcae2d4a71f194665d7e786ab4549f6ccad2da841887de3cdcc13 extends Twig_Template
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
        $__internal_a60a75e36dca910009ee22324360d0baeb818bea9509d028c6eb62217b68f67b = $this->env->getExtension("native_profiler");
        $__internal_a60a75e36dca910009ee22324360d0baeb818bea9509d028c6eb62217b68f67b->enter($__internal_a60a75e36dca910009ee22324360d0baeb818bea9509d028c6eb62217b68f67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a60a75e36dca910009ee22324360d0baeb818bea9509d028c6eb62217b68f67b->leave($__internal_a60a75e36dca910009ee22324360d0baeb818bea9509d028c6eb62217b68f67b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
