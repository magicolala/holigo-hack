<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_62cf8d51ec1bc62dbf9e370a9b0521911dd1c707b05bb77238cfa98bbe1812ec extends Twig_Template
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
        $__internal_5bc1ed8c1c0dba445d31ff4debfe27a697fd8d9ae41cb7bdf5c70468705700e4 = $this->env->getExtension("native_profiler");
        $__internal_5bc1ed8c1c0dba445d31ff4debfe27a697fd8d9ae41cb7bdf5c70468705700e4->enter($__internal_5bc1ed8c1c0dba445d31ff4debfe27a697fd8d9ae41cb7bdf5c70468705700e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc1ed8c1c0dba445d31ff4debfe27a697fd8d9ae41cb7bdf5c70468705700e4->leave($__internal_5bc1ed8c1c0dba445d31ff4debfe27a697fd8d9ae41cb7bdf5c70468705700e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_389c6ac2608f67dcc0073b3b4d4f87f702b469ade9575d4dab0f78016a2d49ef = $this->env->getExtension("native_profiler");
        $__internal_389c6ac2608f67dcc0073b3b4d4f87f702b469ade9575d4dab0f78016a2d49ef->enter($__internal_389c6ac2608f67dcc0073b3b4d4f87f702b469ade9575d4dab0f78016a2d49ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_389c6ac2608f67dcc0073b3b4d4f87f702b469ade9575d4dab0f78016a2d49ef->leave($__internal_389c6ac2608f67dcc0073b3b4d4f87f702b469ade9575d4dab0f78016a2d49ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d577d7fbf0d094ca6dd212928f1ae189c8c6cae7396033d036860a79ca0e8e5d = $this->env->getExtension("native_profiler");
        $__internal_d577d7fbf0d094ca6dd212928f1ae189c8c6cae7396033d036860a79ca0e8e5d->enter($__internal_d577d7fbf0d094ca6dd212928f1ae189c8c6cae7396033d036860a79ca0e8e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d577d7fbf0d094ca6dd212928f1ae189c8c6cae7396033d036860a79ca0e8e5d->leave($__internal_d577d7fbf0d094ca6dd212928f1ae189c8c6cae7396033d036860a79ca0e8e5d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3af7ea2726f3b14411db170fb96a26ed6c3eecf0c2800d6152c72dcac97573d = $this->env->getExtension("native_profiler");
        $__internal_e3af7ea2726f3b14411db170fb96a26ed6c3eecf0c2800d6152c72dcac97573d->enter($__internal_e3af7ea2726f3b14411db170fb96a26ed6c3eecf0c2800d6152c72dcac97573d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e3af7ea2726f3b14411db170fb96a26ed6c3eecf0c2800d6152c72dcac97573d->leave($__internal_e3af7ea2726f3b14411db170fb96a26ed6c3eecf0c2800d6152c72dcac97573d_prof);

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
