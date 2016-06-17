<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9fdbd880ea6574145605fa43475753410c35fef8650ae04912d006d6edae9a47 extends Twig_Template
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
        $__internal_f4ef103b9e12b9394cdb3178dc198a60bf0279ea4e18a68995b7668ac9e63ecd = $this->env->getExtension("native_profiler");
        $__internal_f4ef103b9e12b9394cdb3178dc198a60bf0279ea4e18a68995b7668ac9e63ecd->enter($__internal_f4ef103b9e12b9394cdb3178dc198a60bf0279ea4e18a68995b7668ac9e63ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f4ef103b9e12b9394cdb3178dc198a60bf0279ea4e18a68995b7668ac9e63ecd->leave($__internal_f4ef103b9e12b9394cdb3178dc198a60bf0279ea4e18a68995b7668ac9e63ecd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
