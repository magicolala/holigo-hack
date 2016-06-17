<?php

/* ::base.html.twig */
class __TwigTemplate_fa970b1f0cef2412089b21515cacfc2f13b0f13a6c643d25bd807295ac0a77e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42e975b594171eec03f5ae15804e1012825b10aca12c641eb1c8408bcf576784 = $this->env->getExtension("native_profiler");
        $__internal_42e975b594171eec03f5ae15804e1012825b10aca12c641eb1c8408bcf576784->enter($__internal_42e975b594171eec03f5ae15804e1012825b10aca12c641eb1c8408bcf576784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_42e975b594171eec03f5ae15804e1012825b10aca12c641eb1c8408bcf576784->leave($__internal_42e975b594171eec03f5ae15804e1012825b10aca12c641eb1c8408bcf576784_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5c04d8c31ba3c27945930560308f660afe2cfa862fb0388ec2b00c5409a2df9 = $this->env->getExtension("native_profiler");
        $__internal_e5c04d8c31ba3c27945930560308f660afe2cfa862fb0388ec2b00c5409a2df9->enter($__internal_e5c04d8c31ba3c27945930560308f660afe2cfa862fb0388ec2b00c5409a2df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e5c04d8c31ba3c27945930560308f660afe2cfa862fb0388ec2b00c5409a2df9->leave($__internal_e5c04d8c31ba3c27945930560308f660afe2cfa862fb0388ec2b00c5409a2df9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0382fdb28a07354d217c9320e4c8ad705ed2cb2645abf6ebe1ce92d048c6ef2b = $this->env->getExtension("native_profiler");
        $__internal_0382fdb28a07354d217c9320e4c8ad705ed2cb2645abf6ebe1ce92d048c6ef2b->enter($__internal_0382fdb28a07354d217c9320e4c8ad705ed2cb2645abf6ebe1ce92d048c6ef2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0382fdb28a07354d217c9320e4c8ad705ed2cb2645abf6ebe1ce92d048c6ef2b->leave($__internal_0382fdb28a07354d217c9320e4c8ad705ed2cb2645abf6ebe1ce92d048c6ef2b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b870a646b604d0bfc518cc07e2b0fe0f3cd1d2fa4ded62753d1c2fab8d689fc8 = $this->env->getExtension("native_profiler");
        $__internal_b870a646b604d0bfc518cc07e2b0fe0f3cd1d2fa4ded62753d1c2fab8d689fc8->enter($__internal_b870a646b604d0bfc518cc07e2b0fe0f3cd1d2fa4ded62753d1c2fab8d689fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b870a646b604d0bfc518cc07e2b0fe0f3cd1d2fa4ded62753d1c2fab8d689fc8->leave($__internal_b870a646b604d0bfc518cc07e2b0fe0f3cd1d2fa4ded62753d1c2fab8d689fc8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_227b68be0c7405bd9ee9d431d859d039020e2aec33a04a9088b0dc263423f601 = $this->env->getExtension("native_profiler");
        $__internal_227b68be0c7405bd9ee9d431d859d039020e2aec33a04a9088b0dc263423f601->enter($__internal_227b68be0c7405bd9ee9d431d859d039020e2aec33a04a9088b0dc263423f601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_227b68be0c7405bd9ee9d431d859d039020e2aec33a04a9088b0dc263423f601->leave($__internal_227b68be0c7405bd9ee9d431d859d039020e2aec33a04a9088b0dc263423f601_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
