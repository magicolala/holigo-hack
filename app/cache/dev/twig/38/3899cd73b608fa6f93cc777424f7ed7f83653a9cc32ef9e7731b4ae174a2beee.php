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
        $__internal_ebc7f9b7ff31eefb3aa0817f017330afd8d657c2874384e3cbd0be24359ec765 = $this->env->getExtension("native_profiler");
        $__internal_ebc7f9b7ff31eefb3aa0817f017330afd8d657c2874384e3cbd0be24359ec765->enter($__internal_ebc7f9b7ff31eefb3aa0817f017330afd8d657c2874384e3cbd0be24359ec765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebc7f9b7ff31eefb3aa0817f017330afd8d657c2874384e3cbd0be24359ec765->leave($__internal_ebc7f9b7ff31eefb3aa0817f017330afd8d657c2874384e3cbd0be24359ec765_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b1e09e157fb31e8e00f2c7312b9f71abdfee15485d1944bf3ae0c76ffed085c = $this->env->getExtension("native_profiler");
        $__internal_0b1e09e157fb31e8e00f2c7312b9f71abdfee15485d1944bf3ae0c76ffed085c->enter($__internal_0b1e09e157fb31e8e00f2c7312b9f71abdfee15485d1944bf3ae0c76ffed085c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b1e09e157fb31e8e00f2c7312b9f71abdfee15485d1944bf3ae0c76ffed085c->leave($__internal_0b1e09e157fb31e8e00f2c7312b9f71abdfee15485d1944bf3ae0c76ffed085c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_38e313c362378b328b4e744ad3d2da029c88076e3f1ea5e63343b18c70a03a47 = $this->env->getExtension("native_profiler");
        $__internal_38e313c362378b328b4e744ad3d2da029c88076e3f1ea5e63343b18c70a03a47->enter($__internal_38e313c362378b328b4e744ad3d2da029c88076e3f1ea5e63343b18c70a03a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_38e313c362378b328b4e744ad3d2da029c88076e3f1ea5e63343b18c70a03a47->leave($__internal_38e313c362378b328b4e744ad3d2da029c88076e3f1ea5e63343b18c70a03a47_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d7c19fe0318896f678d46e91212ec0cd372459d821663bfa3636689517fe9b2 = $this->env->getExtension("native_profiler");
        $__internal_0d7c19fe0318896f678d46e91212ec0cd372459d821663bfa3636689517fe9b2->enter($__internal_0d7c19fe0318896f678d46e91212ec0cd372459d821663bfa3636689517fe9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0d7c19fe0318896f678d46e91212ec0cd372459d821663bfa3636689517fe9b2->leave($__internal_0d7c19fe0318896f678d46e91212ec0cd372459d821663bfa3636689517fe9b2_prof);

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
