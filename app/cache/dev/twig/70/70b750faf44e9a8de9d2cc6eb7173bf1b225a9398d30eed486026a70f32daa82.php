<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_83d407c26a3f0e902bb128ea94b2b97a58aef0ce31c8c902480c823678dc8cde extends Twig_Template
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
        $__internal_1b623c2ad82ccac063bb6470a84a91a8a30dfc968bd9e14dec4ba9437a3c8929 = $this->env->getExtension("native_profiler");
        $__internal_1b623c2ad82ccac063bb6470a84a91a8a30dfc968bd9e14dec4ba9437a3c8929->enter($__internal_1b623c2ad82ccac063bb6470a84a91a8a30dfc968bd9e14dec4ba9437a3c8929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1b623c2ad82ccac063bb6470a84a91a8a30dfc968bd9e14dec4ba9437a3c8929->leave($__internal_1b623c2ad82ccac063bb6470a84a91a8a30dfc968bd9e14dec4ba9437a3c8929_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
