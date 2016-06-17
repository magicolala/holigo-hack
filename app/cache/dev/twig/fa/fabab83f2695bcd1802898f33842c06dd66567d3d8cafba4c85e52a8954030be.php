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
        $__internal_bdca5a7317767adb15c34f1782219bc62835fab0a3d35604685e3bc430f379d3 = $this->env->getExtension("native_profiler");
        $__internal_bdca5a7317767adb15c34f1782219bc62835fab0a3d35604685e3bc430f379d3->enter($__internal_bdca5a7317767adb15c34f1782219bc62835fab0a3d35604685e3bc430f379d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdca5a7317767adb15c34f1782219bc62835fab0a3d35604685e3bc430f379d3->leave($__internal_bdca5a7317767adb15c34f1782219bc62835fab0a3d35604685e3bc430f379d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24e44aba63b712bb5dc9aa00722e3dbc09a2d50a1441a571ee528ccc24575032 = $this->env->getExtension("native_profiler");
        $__internal_24e44aba63b712bb5dc9aa00722e3dbc09a2d50a1441a571ee528ccc24575032->enter($__internal_24e44aba63b712bb5dc9aa00722e3dbc09a2d50a1441a571ee528ccc24575032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_24e44aba63b712bb5dc9aa00722e3dbc09a2d50a1441a571ee528ccc24575032->leave($__internal_24e44aba63b712bb5dc9aa00722e3dbc09a2d50a1441a571ee528ccc24575032_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02754f4a0595d715a894658e748abad11aae2946152be0056252857a124f6c3d = $this->env->getExtension("native_profiler");
        $__internal_02754f4a0595d715a894658e748abad11aae2946152be0056252857a124f6c3d->enter($__internal_02754f4a0595d715a894658e748abad11aae2946152be0056252857a124f6c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02754f4a0595d715a894658e748abad11aae2946152be0056252857a124f6c3d->leave($__internal_02754f4a0595d715a894658e748abad11aae2946152be0056252857a124f6c3d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f64a314299f1946f505a80f0961012905f98915fff8805323d0e34a3aaf2160 = $this->env->getExtension("native_profiler");
        $__internal_0f64a314299f1946f505a80f0961012905f98915fff8805323d0e34a3aaf2160->enter($__internal_0f64a314299f1946f505a80f0961012905f98915fff8805323d0e34a3aaf2160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0f64a314299f1946f505a80f0961012905f98915fff8805323d0e34a3aaf2160->leave($__internal_0f64a314299f1946f505a80f0961012905f98915fff8805323d0e34a3aaf2160_prof);

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
