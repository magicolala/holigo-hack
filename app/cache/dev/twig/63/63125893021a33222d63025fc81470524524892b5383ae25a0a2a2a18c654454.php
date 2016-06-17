<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_39032752eded0713e4764efcd043b4c2ec74032fcd9f576b08150507a9a3a4ee extends Twig_Template
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
        $__internal_8e95e657a2b3a8dd6d526d8541b8531e1a3fb153a664b832fd13f4eaa1067b72 = $this->env->getExtension("native_profiler");
        $__internal_8e95e657a2b3a8dd6d526d8541b8531e1a3fb153a664b832fd13f4eaa1067b72->enter($__internal_8e95e657a2b3a8dd6d526d8541b8531e1a3fb153a664b832fd13f4eaa1067b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8e95e657a2b3a8dd6d526d8541b8531e1a3fb153a664b832fd13f4eaa1067b72->leave($__internal_8e95e657a2b3a8dd6d526d8541b8531e1a3fb153a664b832fd13f4eaa1067b72_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
