<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d39bc7af44dc8342c2d91efac998aca17248ac52c1c04f502a5bea2acc31aa92 extends Twig_Template
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
        $__internal_5dc52c1f5123f4d4f72a7604ea3a3192a3a6f57e84fbb3f92af1c08613b6af32 = $this->env->getExtension("native_profiler");
        $__internal_5dc52c1f5123f4d4f72a7604ea3a3192a3a6f57e84fbb3f92af1c08613b6af32->enter($__internal_5dc52c1f5123f4d4f72a7604ea3a3192a3a6f57e84fbb3f92af1c08613b6af32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5dc52c1f5123f4d4f72a7604ea3a3192a3a6f57e84fbb3f92af1c08613b6af32->leave($__internal_5dc52c1f5123f4d4f72a7604ea3a3192a3a6f57e84fbb3f92af1c08613b6af32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
