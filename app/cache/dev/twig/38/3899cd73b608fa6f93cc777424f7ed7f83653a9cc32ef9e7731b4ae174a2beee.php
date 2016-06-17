<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3f25e816c15a671f9c6bf62500473af01a8f06017ffdbdc96d975fcf00392313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1715533eada7efc477a230be3930ae5f9d60cb96ae49666f2d4ba4118a20470 = $this->env->getExtension("native_profiler");
        $__internal_a1715533eada7efc477a230be3930ae5f9d60cb96ae49666f2d4ba4118a20470->enter($__internal_a1715533eada7efc477a230be3930ae5f9d60cb96ae49666f2d4ba4118a20470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1715533eada7efc477a230be3930ae5f9d60cb96ae49666f2d4ba4118a20470->leave($__internal_a1715533eada7efc477a230be3930ae5f9d60cb96ae49666f2d4ba4118a20470_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73d23b2fd18529b5e3ecd0338a9a8174bec5fd90b8978680a815f7370c4ad1f0 = $this->env->getExtension("native_profiler");
        $__internal_73d23b2fd18529b5e3ecd0338a9a8174bec5fd90b8978680a815f7370c4ad1f0->enter($__internal_73d23b2fd18529b5e3ecd0338a9a8174bec5fd90b8978680a815f7370c4ad1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_73d23b2fd18529b5e3ecd0338a9a8174bec5fd90b8978680a815f7370c4ad1f0->leave($__internal_73d23b2fd18529b5e3ecd0338a9a8174bec5fd90b8978680a815f7370c4ad1f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cf02bca3bd54b65b14bcc53464c442696c75a7eb66d578b34a50501d508c3fb = $this->env->getExtension("native_profiler");
        $__internal_8cf02bca3bd54b65b14bcc53464c442696c75a7eb66d578b34a50501d508c3fb->enter($__internal_8cf02bca3bd54b65b14bcc53464c442696c75a7eb66d578b34a50501d508c3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8cf02bca3bd54b65b14bcc53464c442696c75a7eb66d578b34a50501d508c3fb->leave($__internal_8cf02bca3bd54b65b14bcc53464c442696c75a7eb66d578b34a50501d508c3fb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f3cecd4ec81b02345e4020cc32b15509ae7c9f426e6723ab2ea3bd9f0de0646 = $this->env->getExtension("native_profiler");
        $__internal_1f3cecd4ec81b02345e4020cc32b15509ae7c9f426e6723ab2ea3bd9f0de0646->enter($__internal_1f3cecd4ec81b02345e4020cc32b15509ae7c9f426e6723ab2ea3bd9f0de0646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1f3cecd4ec81b02345e4020cc32b15509ae7c9f426e6723ab2ea3bd9f0de0646->leave($__internal_1f3cecd4ec81b02345e4020cc32b15509ae7c9f426e6723ab2ea3bd9f0de0646_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
