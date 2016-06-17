<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2e70b082dcc26f8367632810e6aaf9b90ad48262a76607e5f66a5d6bd0899eb6 extends Twig_Template
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
        $__internal_0e0d04090850c8b3ce709b320562ce45d267d9870160917fd2ea1b165df0d398 = $this->env->getExtension("native_profiler");
        $__internal_0e0d04090850c8b3ce709b320562ce45d267d9870160917fd2ea1b165df0d398->enter($__internal_0e0d04090850c8b3ce709b320562ce45d267d9870160917fd2ea1b165df0d398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0e0d04090850c8b3ce709b320562ce45d267d9870160917fd2ea1b165df0d398->leave($__internal_0e0d04090850c8b3ce709b320562ce45d267d9870160917fd2ea1b165df0d398_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
