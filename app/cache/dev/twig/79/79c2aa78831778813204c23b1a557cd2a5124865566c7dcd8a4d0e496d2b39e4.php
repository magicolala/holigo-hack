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
        $__internal_d4872ae8ebb15d93a899ae4e6b30de4cea2b525ed501b1740df211cc7fd0ac4b = $this->env->getExtension("native_profiler");
        $__internal_d4872ae8ebb15d93a899ae4e6b30de4cea2b525ed501b1740df211cc7fd0ac4b->enter($__internal_d4872ae8ebb15d93a899ae4e6b30de4cea2b525ed501b1740df211cc7fd0ac4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d4872ae8ebb15d93a899ae4e6b30de4cea2b525ed501b1740df211cc7fd0ac4b->leave($__internal_d4872ae8ebb15d93a899ae4e6b30de4cea2b525ed501b1740df211cc7fd0ac4b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_38b6ec35b3c4bcc0074f7d65e296fff497d8a5eabb6665b5148976e542f31105 = $this->env->getExtension("native_profiler");
        $__internal_38b6ec35b3c4bcc0074f7d65e296fff497d8a5eabb6665b5148976e542f31105->enter($__internal_38b6ec35b3c4bcc0074f7d65e296fff497d8a5eabb6665b5148976e542f31105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_38b6ec35b3c4bcc0074f7d65e296fff497d8a5eabb6665b5148976e542f31105->leave($__internal_38b6ec35b3c4bcc0074f7d65e296fff497d8a5eabb6665b5148976e542f31105_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1546d0a61f388ef0f07f871f09bcd8e619c2fda374db0a5960713a6b6b025733 = $this->env->getExtension("native_profiler");
        $__internal_1546d0a61f388ef0f07f871f09bcd8e619c2fda374db0a5960713a6b6b025733->enter($__internal_1546d0a61f388ef0f07f871f09bcd8e619c2fda374db0a5960713a6b6b025733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1546d0a61f388ef0f07f871f09bcd8e619c2fda374db0a5960713a6b6b025733->leave($__internal_1546d0a61f388ef0f07f871f09bcd8e619c2fda374db0a5960713a6b6b025733_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_34218c6c7857fd8c3d2e8ec933438d026c816094b401c29a4d0d8728ac7fa931 = $this->env->getExtension("native_profiler");
        $__internal_34218c6c7857fd8c3d2e8ec933438d026c816094b401c29a4d0d8728ac7fa931->enter($__internal_34218c6c7857fd8c3d2e8ec933438d026c816094b401c29a4d0d8728ac7fa931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34218c6c7857fd8c3d2e8ec933438d026c816094b401c29a4d0d8728ac7fa931->leave($__internal_34218c6c7857fd8c3d2e8ec933438d026c816094b401c29a4d0d8728ac7fa931_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80ac7b5231cce2e6bc98c3b8e0eb53749f72fe760789a0b743400773f57508b3 = $this->env->getExtension("native_profiler");
        $__internal_80ac7b5231cce2e6bc98c3b8e0eb53749f72fe760789a0b743400773f57508b3->enter($__internal_80ac7b5231cce2e6bc98c3b8e0eb53749f72fe760789a0b743400773f57508b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_80ac7b5231cce2e6bc98c3b8e0eb53749f72fe760789a0b743400773f57508b3->leave($__internal_80ac7b5231cce2e6bc98c3b8e0eb53749f72fe760789a0b743400773f57508b3_prof);

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
