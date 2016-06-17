<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_46e18333c9f5d3263325f4976cab73ec22f78eaab84d4abd7330c23b9e5e47d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09b175e043be6fa4e8b6b2aa065e0d7f12c013da036b2156e0fb4d5570c5b820 = $this->env->getExtension("native_profiler");
        $__internal_09b175e043be6fa4e8b6b2aa065e0d7f12c013da036b2156e0fb4d5570c5b820->enter($__internal_09b175e043be6fa4e8b6b2aa065e0d7f12c013da036b2156e0fb4d5570c5b820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_09b175e043be6fa4e8b6b2aa065e0d7f12c013da036b2156e0fb4d5570c5b820->leave($__internal_09b175e043be6fa4e8b6b2aa065e0d7f12c013da036b2156e0fb4d5570c5b820_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
