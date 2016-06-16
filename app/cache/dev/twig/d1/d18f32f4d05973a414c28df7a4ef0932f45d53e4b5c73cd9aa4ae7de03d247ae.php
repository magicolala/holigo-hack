<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f604cf4247ebd3b9b6d5e3ae6d6f3466e23dd6b307d6b870e12920348423bd84 extends Twig_Template
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
        $__internal_bc5799a7f71c13173328183a32427eb868cf1c99f93651b61a6cbe27c6ebf97f = $this->env->getExtension("native_profiler");
        $__internal_bc5799a7f71c13173328183a32427eb868cf1c99f93651b61a6cbe27c6ebf97f->enter($__internal_bc5799a7f71c13173328183a32427eb868cf1c99f93651b61a6cbe27c6ebf97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc5799a7f71c13173328183a32427eb868cf1c99f93651b61a6cbe27c6ebf97f->leave($__internal_bc5799a7f71c13173328183a32427eb868cf1c99f93651b61a6cbe27c6ebf97f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3db9981eb56b0fbac9106fcdf4ea3f82b5c32519215d2924c1a71b85e5f5a61 = $this->env->getExtension("native_profiler");
        $__internal_d3db9981eb56b0fbac9106fcdf4ea3f82b5c32519215d2924c1a71b85e5f5a61->enter($__internal_d3db9981eb56b0fbac9106fcdf4ea3f82b5c32519215d2924c1a71b85e5f5a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d3db9981eb56b0fbac9106fcdf4ea3f82b5c32519215d2924c1a71b85e5f5a61->leave($__internal_d3db9981eb56b0fbac9106fcdf4ea3f82b5c32519215d2924c1a71b85e5f5a61_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88c56a62132e859957ccf5d1af23b730aec253e1c858d2da5d37722cfb0cd26f = $this->env->getExtension("native_profiler");
        $__internal_88c56a62132e859957ccf5d1af23b730aec253e1c858d2da5d37722cfb0cd26f->enter($__internal_88c56a62132e859957ccf5d1af23b730aec253e1c858d2da5d37722cfb0cd26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_88c56a62132e859957ccf5d1af23b730aec253e1c858d2da5d37722cfb0cd26f->leave($__internal_88c56a62132e859957ccf5d1af23b730aec253e1c858d2da5d37722cfb0cd26f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa6cbf220ef5fe126f133294dbc29dc27077d9a2a897a63e539969fc6d8ba8a4 = $this->env->getExtension("native_profiler");
        $__internal_fa6cbf220ef5fe126f133294dbc29dc27077d9a2a897a63e539969fc6d8ba8a4->enter($__internal_fa6cbf220ef5fe126f133294dbc29dc27077d9a2a897a63e539969fc6d8ba8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fa6cbf220ef5fe126f133294dbc29dc27077d9a2a897a63e539969fc6d8ba8a4->leave($__internal_fa6cbf220ef5fe126f133294dbc29dc27077d9a2a897a63e539969fc6d8ba8a4_prof);

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
