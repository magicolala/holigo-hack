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
        $__internal_c3d60dec9648950f504f99303ec5e5011cf013cdcdf9542189518e0497f8966d = $this->env->getExtension("native_profiler");
        $__internal_c3d60dec9648950f504f99303ec5e5011cf013cdcdf9542189518e0497f8966d->enter($__internal_c3d60dec9648950f504f99303ec5e5011cf013cdcdf9542189518e0497f8966d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3d60dec9648950f504f99303ec5e5011cf013cdcdf9542189518e0497f8966d->leave($__internal_c3d60dec9648950f504f99303ec5e5011cf013cdcdf9542189518e0497f8966d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1cf32ede7ccd3cb0ac765b712c7ead56ceb4647b0635a415a8f3e9fa386372f2 = $this->env->getExtension("native_profiler");
        $__internal_1cf32ede7ccd3cb0ac765b712c7ead56ceb4647b0635a415a8f3e9fa386372f2->enter($__internal_1cf32ede7ccd3cb0ac765b712c7ead56ceb4647b0635a415a8f3e9fa386372f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1cf32ede7ccd3cb0ac765b712c7ead56ceb4647b0635a415a8f3e9fa386372f2->leave($__internal_1cf32ede7ccd3cb0ac765b712c7ead56ceb4647b0635a415a8f3e9fa386372f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b11015a320c31b8983efd7db46c1211f8c4fcb10bbe67f883bff35e937cdc19f = $this->env->getExtension("native_profiler");
        $__internal_b11015a320c31b8983efd7db46c1211f8c4fcb10bbe67f883bff35e937cdc19f->enter($__internal_b11015a320c31b8983efd7db46c1211f8c4fcb10bbe67f883bff35e937cdc19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b11015a320c31b8983efd7db46c1211f8c4fcb10bbe67f883bff35e937cdc19f->leave($__internal_b11015a320c31b8983efd7db46c1211f8c4fcb10bbe67f883bff35e937cdc19f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cee163dd61edcc72c783b15cc1385028532243170b4b7ef3d82feba158a7a9f = $this->env->getExtension("native_profiler");
        $__internal_1cee163dd61edcc72c783b15cc1385028532243170b4b7ef3d82feba158a7a9f->enter($__internal_1cee163dd61edcc72c783b15cc1385028532243170b4b7ef3d82feba158a7a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1cee163dd61edcc72c783b15cc1385028532243170b4b7ef3d82feba158a7a9f->leave($__internal_1cee163dd61edcc72c783b15cc1385028532243170b4b7ef3d82feba158a7a9f_prof);

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
