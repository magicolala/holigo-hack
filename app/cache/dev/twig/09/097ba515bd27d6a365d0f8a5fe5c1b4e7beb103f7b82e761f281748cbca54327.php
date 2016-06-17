<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bc9a0e6276e51293ce2c0c647b0f4e317122c2e80f38de78ba49756e5da1baa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_cff39cbad8ff6ba241886e1a0d0f9e6191f889423cf0b0a1b3a19dd676dc2856 = $this->env->getExtension("native_profiler");
        $__internal_cff39cbad8ff6ba241886e1a0d0f9e6191f889423cf0b0a1b3a19dd676dc2856->enter($__internal_cff39cbad8ff6ba241886e1a0d0f9e6191f889423cf0b0a1b3a19dd676dc2856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cff39cbad8ff6ba241886e1a0d0f9e6191f889423cf0b0a1b3a19dd676dc2856->leave($__internal_cff39cbad8ff6ba241886e1a0d0f9e6191f889423cf0b0a1b3a19dd676dc2856_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_448f04f49adafa8db318858787bb18b3373ef62ca6d0e0b610bd9b0750ca9f06 = $this->env->getExtension("native_profiler");
        $__internal_448f04f49adafa8db318858787bb18b3373ef62ca6d0e0b610bd9b0750ca9f06->enter($__internal_448f04f49adafa8db318858787bb18b3373ef62ca6d0e0b610bd9b0750ca9f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_448f04f49adafa8db318858787bb18b3373ef62ca6d0e0b610bd9b0750ca9f06->leave($__internal_448f04f49adafa8db318858787bb18b3373ef62ca6d0e0b610bd9b0750ca9f06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8be2b4082f7abf7da948717355792df40a51ee2ce99341967b182bde78a1f60 = $this->env->getExtension("native_profiler");
        $__internal_a8be2b4082f7abf7da948717355792df40a51ee2ce99341967b182bde78a1f60->enter($__internal_a8be2b4082f7abf7da948717355792df40a51ee2ce99341967b182bde78a1f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a8be2b4082f7abf7da948717355792df40a51ee2ce99341967b182bde78a1f60->leave($__internal_a8be2b4082f7abf7da948717355792df40a51ee2ce99341967b182bde78a1f60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d63ccecfe94ed856b15585f3b53e86847ffd0c40f8c20f48f4ab58fefc1d30e = $this->env->getExtension("native_profiler");
        $__internal_5d63ccecfe94ed856b15585f3b53e86847ffd0c40f8c20f48f4ab58fefc1d30e->enter($__internal_5d63ccecfe94ed856b15585f3b53e86847ffd0c40f8c20f48f4ab58fefc1d30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5d63ccecfe94ed856b15585f3b53e86847ffd0c40f8c20f48f4ab58fefc1d30e->leave($__internal_5d63ccecfe94ed856b15585f3b53e86847ffd0c40f8c20f48f4ab58fefc1d30e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
