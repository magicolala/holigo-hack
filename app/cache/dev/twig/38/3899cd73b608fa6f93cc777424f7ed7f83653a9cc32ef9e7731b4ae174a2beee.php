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
        $__internal_b30c0ed95e669880b29055a29597898a57bef1848045b7cd25116349fcb455c5 = $this->env->getExtension("native_profiler");
        $__internal_b30c0ed95e669880b29055a29597898a57bef1848045b7cd25116349fcb455c5->enter($__internal_b30c0ed95e669880b29055a29597898a57bef1848045b7cd25116349fcb455c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b30c0ed95e669880b29055a29597898a57bef1848045b7cd25116349fcb455c5->leave($__internal_b30c0ed95e669880b29055a29597898a57bef1848045b7cd25116349fcb455c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b4ebac2707b1ce50201b03badcc0404bec34b18744c3984afe253ebafbf7104 = $this->env->getExtension("native_profiler");
        $__internal_4b4ebac2707b1ce50201b03badcc0404bec34b18744c3984afe253ebafbf7104->enter($__internal_4b4ebac2707b1ce50201b03badcc0404bec34b18744c3984afe253ebafbf7104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4b4ebac2707b1ce50201b03badcc0404bec34b18744c3984afe253ebafbf7104->leave($__internal_4b4ebac2707b1ce50201b03badcc0404bec34b18744c3984afe253ebafbf7104_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_735d00c789f1881932c5971f95d634166654d13514c7d04585974c3f22d608ec = $this->env->getExtension("native_profiler");
        $__internal_735d00c789f1881932c5971f95d634166654d13514c7d04585974c3f22d608ec->enter($__internal_735d00c789f1881932c5971f95d634166654d13514c7d04585974c3f22d608ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_735d00c789f1881932c5971f95d634166654d13514c7d04585974c3f22d608ec->leave($__internal_735d00c789f1881932c5971f95d634166654d13514c7d04585974c3f22d608ec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_39f0b32107e536bd8401fde31e2561551776c53827c089b12bf31f78f60bcd0e = $this->env->getExtension("native_profiler");
        $__internal_39f0b32107e536bd8401fde31e2561551776c53827c089b12bf31f78f60bcd0e->enter($__internal_39f0b32107e536bd8401fde31e2561551776c53827c089b12bf31f78f60bcd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_39f0b32107e536bd8401fde31e2561551776c53827c089b12bf31f78f60bcd0e->leave($__internal_39f0b32107e536bd8401fde31e2561551776c53827c089b12bf31f78f60bcd0e_prof);

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
