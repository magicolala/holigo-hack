<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8aaee8a25726c0d17994ab9b639e54852429cc30166df35361f3da0e92e88b99 extends Twig_Template
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
        $__internal_536e7eb26247e3cac172be6e03bc22904634304b6e0925df71613f173dc0549e = $this->env->getExtension("native_profiler");
        $__internal_536e7eb26247e3cac172be6e03bc22904634304b6e0925df71613f173dc0549e->enter($__internal_536e7eb26247e3cac172be6e03bc22904634304b6e0925df71613f173dc0549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_536e7eb26247e3cac172be6e03bc22904634304b6e0925df71613f173dc0549e->leave($__internal_536e7eb26247e3cac172be6e03bc22904634304b6e0925df71613f173dc0549e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
