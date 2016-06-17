<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8121dca6f136fc2eaad403e30eaf4a95b937df400fe2efd77c583fd5b95d56cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99c07c0b1447efc5c8508fbf8bffb03a97f11e086f54a38271778c938834ab4e = $this->env->getExtension("native_profiler");
        $__internal_99c07c0b1447efc5c8508fbf8bffb03a97f11e086f54a38271778c938834ab4e->enter($__internal_99c07c0b1447efc5c8508fbf8bffb03a97f11e086f54a38271778c938834ab4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_99c07c0b1447efc5c8508fbf8bffb03a97f11e086f54a38271778c938834ab4e->leave($__internal_99c07c0b1447efc5c8508fbf8bffb03a97f11e086f54a38271778c938834ab4e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdea0661c2505e718cab0bf000cc9d4c9ae468aa0b51a08eac72d62905a0bd04 = $this->env->getExtension("native_profiler");
        $__internal_cdea0661c2505e718cab0bf000cc9d4c9ae468aa0b51a08eac72d62905a0bd04->enter($__internal_cdea0661c2505e718cab0bf000cc9d4c9ae468aa0b51a08eac72d62905a0bd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cdea0661c2505e718cab0bf000cc9d4c9ae468aa0b51a08eac72d62905a0bd04->leave($__internal_cdea0661c2505e718cab0bf000cc9d4c9ae468aa0b51a08eac72d62905a0bd04_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
