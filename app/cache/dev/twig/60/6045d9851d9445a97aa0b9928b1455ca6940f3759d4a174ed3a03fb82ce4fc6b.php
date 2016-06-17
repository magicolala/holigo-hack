<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_462cc175cb19b7b588913950123841d22a6111f468213f63a319db4680f1ef54 extends Twig_Template
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
        $__internal_069fa5c4cab37c99854f1b80a6bd6fd1f411cdbb287dcd88bd2c0a231eb9dd94 = $this->env->getExtension("native_profiler");
        $__internal_069fa5c4cab37c99854f1b80a6bd6fd1f411cdbb287dcd88bd2c0a231eb9dd94->enter($__internal_069fa5c4cab37c99854f1b80a6bd6fd1f411cdbb287dcd88bd2c0a231eb9dd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_069fa5c4cab37c99854f1b80a6bd6fd1f411cdbb287dcd88bd2c0a231eb9dd94->leave($__internal_069fa5c4cab37c99854f1b80a6bd6fd1f411cdbb287dcd88bd2c0a231eb9dd94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
