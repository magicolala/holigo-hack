<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2c647386cbc0175b6fbfbc7c736a1bbca6934ff81f17d5f592920928f43fbe5f extends Twig_Template
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
        $__internal_9d8f13e18eebe99bb21618c6d3ae78214f18c392eeaa1a3d47e2d874e09b8587 = $this->env->getExtension("native_profiler");
        $__internal_9d8f13e18eebe99bb21618c6d3ae78214f18c392eeaa1a3d47e2d874e09b8587->enter($__internal_9d8f13e18eebe99bb21618c6d3ae78214f18c392eeaa1a3d47e2d874e09b8587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9d8f13e18eebe99bb21618c6d3ae78214f18c392eeaa1a3d47e2d874e09b8587->leave($__internal_9d8f13e18eebe99bb21618c6d3ae78214f18c392eeaa1a3d47e2d874e09b8587_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
