<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_14ff6476fab3ad12d3ec60307767099947aa97076182e504e5f1f26b51ded4fd extends Twig_Template
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
        $__internal_84f9e380a3c934adea7a58eb167d1c2d7925d8b01984af36ba25502a97365045 = $this->env->getExtension("native_profiler");
        $__internal_84f9e380a3c934adea7a58eb167d1c2d7925d8b01984af36ba25502a97365045->enter($__internal_84f9e380a3c934adea7a58eb167d1c2d7925d8b01984af36ba25502a97365045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_84f9e380a3c934adea7a58eb167d1c2d7925d8b01984af36ba25502a97365045->leave($__internal_84f9e380a3c934adea7a58eb167d1c2d7925d8b01984af36ba25502a97365045_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
