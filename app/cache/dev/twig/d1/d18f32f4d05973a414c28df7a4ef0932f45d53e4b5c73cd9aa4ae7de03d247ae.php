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
        $__internal_68b9f003d26f3f9b61ff87b761ab319eebd8344ae6a5eb3dc7c8ce8567c5c0ff = $this->env->getExtension("native_profiler");
        $__internal_68b9f003d26f3f9b61ff87b761ab319eebd8344ae6a5eb3dc7c8ce8567c5c0ff->enter($__internal_68b9f003d26f3f9b61ff87b761ab319eebd8344ae6a5eb3dc7c8ce8567c5c0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68b9f003d26f3f9b61ff87b761ab319eebd8344ae6a5eb3dc7c8ce8567c5c0ff->leave($__internal_68b9f003d26f3f9b61ff87b761ab319eebd8344ae6a5eb3dc7c8ce8567c5c0ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_089300512e45efdba965f4bfc44ec68f7040e58e7c97d3878f9371756eb1e7c7 = $this->env->getExtension("native_profiler");
        $__internal_089300512e45efdba965f4bfc44ec68f7040e58e7c97d3878f9371756eb1e7c7->enter($__internal_089300512e45efdba965f4bfc44ec68f7040e58e7c97d3878f9371756eb1e7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_089300512e45efdba965f4bfc44ec68f7040e58e7c97d3878f9371756eb1e7c7->leave($__internal_089300512e45efdba965f4bfc44ec68f7040e58e7c97d3878f9371756eb1e7c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64f9d18d66926ff6322b26518edbeeb688bd583ac08b02f15193ca8697c3ec23 = $this->env->getExtension("native_profiler");
        $__internal_64f9d18d66926ff6322b26518edbeeb688bd583ac08b02f15193ca8697c3ec23->enter($__internal_64f9d18d66926ff6322b26518edbeeb688bd583ac08b02f15193ca8697c3ec23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64f9d18d66926ff6322b26518edbeeb688bd583ac08b02f15193ca8697c3ec23->leave($__internal_64f9d18d66926ff6322b26518edbeeb688bd583ac08b02f15193ca8697c3ec23_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_330f01593c8514f9ed67724dac30cdc72ddf5fc1e85680ecf67b2153811b2735 = $this->env->getExtension("native_profiler");
        $__internal_330f01593c8514f9ed67724dac30cdc72ddf5fc1e85680ecf67b2153811b2735->enter($__internal_330f01593c8514f9ed67724dac30cdc72ddf5fc1e85680ecf67b2153811b2735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_330f01593c8514f9ed67724dac30cdc72ddf5fc1e85680ecf67b2153811b2735->leave($__internal_330f01593c8514f9ed67724dac30cdc72ddf5fc1e85680ecf67b2153811b2735_prof);

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
