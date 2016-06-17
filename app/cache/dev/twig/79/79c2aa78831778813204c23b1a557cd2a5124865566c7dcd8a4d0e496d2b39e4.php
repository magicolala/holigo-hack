<?php

/* base.html.twig */
class __TwigTemplate_5caa3119ff1818a1f303dcc567d0f6258fa0ab17bc11aa6fdc53492b475eccee extends Twig_Template
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
        $__internal_7e52db4c2e217099bad2fc58de966f2a1f93491a2f62bc6c14f77ab3c8cbc947 = $this->env->getExtension("native_profiler");
        $__internal_7e52db4c2e217099bad2fc58de966f2a1f93491a2f62bc6c14f77ab3c8cbc947->enter($__internal_7e52db4c2e217099bad2fc58de966f2a1f93491a2f62bc6c14f77ab3c8cbc947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7e52db4c2e217099bad2fc58de966f2a1f93491a2f62bc6c14f77ab3c8cbc947->leave($__internal_7e52db4c2e217099bad2fc58de966f2a1f93491a2f62bc6c14f77ab3c8cbc947_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62d02aacded5fdf5e766027150d7176436116dd45d9a92a78c6f12648c2aa876 = $this->env->getExtension("native_profiler");
        $__internal_62d02aacded5fdf5e766027150d7176436116dd45d9a92a78c6f12648c2aa876->enter($__internal_62d02aacded5fdf5e766027150d7176436116dd45d9a92a78c6f12648c2aa876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_62d02aacded5fdf5e766027150d7176436116dd45d9a92a78c6f12648c2aa876->leave($__internal_62d02aacded5fdf5e766027150d7176436116dd45d9a92a78c6f12648c2aa876_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c9c417be9e528d0e8bc7d4642be11536047210a53a8cad1f621de6f5d727701a = $this->env->getExtension("native_profiler");
        $__internal_c9c417be9e528d0e8bc7d4642be11536047210a53a8cad1f621de6f5d727701a->enter($__internal_c9c417be9e528d0e8bc7d4642be11536047210a53a8cad1f621de6f5d727701a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c9c417be9e528d0e8bc7d4642be11536047210a53a8cad1f621de6f5d727701a->leave($__internal_c9c417be9e528d0e8bc7d4642be11536047210a53a8cad1f621de6f5d727701a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1861a3f6e02aca6155a9d0cfaedbb715ff985ca846557ebef05c7e5dbb8c3531 = $this->env->getExtension("native_profiler");
        $__internal_1861a3f6e02aca6155a9d0cfaedbb715ff985ca846557ebef05c7e5dbb8c3531->enter($__internal_1861a3f6e02aca6155a9d0cfaedbb715ff985ca846557ebef05c7e5dbb8c3531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1861a3f6e02aca6155a9d0cfaedbb715ff985ca846557ebef05c7e5dbb8c3531->leave($__internal_1861a3f6e02aca6155a9d0cfaedbb715ff985ca846557ebef05c7e5dbb8c3531_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1d55076693f9378a1ec7c5aef0473d3fd695dbe0c44313a970185105947e621 = $this->env->getExtension("native_profiler");
        $__internal_d1d55076693f9378a1ec7c5aef0473d3fd695dbe0c44313a970185105947e621->enter($__internal_d1d55076693f9378a1ec7c5aef0473d3fd695dbe0c44313a970185105947e621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d1d55076693f9378a1ec7c5aef0473d3fd695dbe0c44313a970185105947e621->leave($__internal_d1d55076693f9378a1ec7c5aef0473d3fd695dbe0c44313a970185105947e621_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
