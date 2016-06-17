<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f2d68a6edc9bf6dc28cf22e9be6bb473e11a88f3e70b5c2af169f7d830fb78ac extends Twig_Template
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
        $__internal_9a9e97aa1cf754c36b3ebcb5e7fc040a0338ec3cf64705efe51b02234aa97d2f = $this->env->getExtension("native_profiler");
        $__internal_9a9e97aa1cf754c36b3ebcb5e7fc040a0338ec3cf64705efe51b02234aa97d2f->enter($__internal_9a9e97aa1cf754c36b3ebcb5e7fc040a0338ec3cf64705efe51b02234aa97d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9a9e97aa1cf754c36b3ebcb5e7fc040a0338ec3cf64705efe51b02234aa97d2f->leave($__internal_9a9e97aa1cf754c36b3ebcb5e7fc040a0338ec3cf64705efe51b02234aa97d2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
