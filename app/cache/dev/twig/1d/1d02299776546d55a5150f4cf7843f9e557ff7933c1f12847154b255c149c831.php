<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_618c28fb258bf9f8ca8f46d53a5ac919a6be0dfaafedf57d157d8660551abbdb extends Twig_Template
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
        $__internal_a524611edb35e70e263832bed22ebe2191690f38e6c3f2044e4e94d86254d888 = $this->env->getExtension("native_profiler");
        $__internal_a524611edb35e70e263832bed22ebe2191690f38e6c3f2044e4e94d86254d888->enter($__internal_a524611edb35e70e263832bed22ebe2191690f38e6c3f2044e4e94d86254d888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a524611edb35e70e263832bed22ebe2191690f38e6c3f2044e4e94d86254d888->leave($__internal_a524611edb35e70e263832bed22ebe2191690f38e6c3f2044e4e94d86254d888_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
