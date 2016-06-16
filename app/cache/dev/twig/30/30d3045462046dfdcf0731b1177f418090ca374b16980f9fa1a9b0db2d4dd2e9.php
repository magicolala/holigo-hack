<?php

/* holigoBundle:Default:index.html.twig */
class __TwigTemplate_1b9e734e09f2a48a9ad1db273bd6ed51f76f7a06aceef3abc5ea3e3bd32188ea extends Twig_Template
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
        $__internal_0d09dc5fc8c01b86474f57003d17359ed97e433a8aa946310f8433d54311003e = $this->env->getExtension("native_profiler");
        $__internal_0d09dc5fc8c01b86474f57003d17359ed97e433a8aa946310f8433d54311003e->enter($__internal_0d09dc5fc8c01b86474f57003d17359ed97e433a8aa946310f8433d54311003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "holigoBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"app\">
  <head>
    <meta charset=\"utf-8\">
    <title>HOLIGO</title>
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <!-- icone -->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <!-- JS -->
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js\"></script>
    <!-- AUTOCOMPLETE API GOOGLE -->
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDuG0OeQkBpLTk_ufVZVAQWxTicjPTP2Ok&libraries=places&components=country:fr\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/ngAutocomplete.js"), "html", null, true);
        echo "\"></script>
    <!-- Angular JS -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-route.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/ngAutocomplete.js"), "html", null, true);
        echo "\"></script>
    <!-- Controllers -->
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/controllers/mainController.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/controllers/registerController.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/controllers/holidayController.js"), "html", null, true);
        echo "\"></script>
    <!-- Services -->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/services/registerService.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
    <nav>
      <div class=\"nav-wrapper\">
        <a href=\"#!\" class=\"brand-logo\">Holigo</a>
        <ul class=\"right hide-on-med-and-down\">
          <li>
            <!-- Modal Trigger -->
            <a class=\"waves-effect waves-light modal-trigger btn\" href=\"#modal1\">Login</a>
          </li>
          <li>
            <a class=\"waves-effect waves-light btn\">Je m'inscris</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class=\"container-fluid\">
      <ng-view></ng-view>
    </div>
  </body>
</html>
";
        
        $__internal_0d09dc5fc8c01b86474f57003d17359ed97e433a8aa946310f8433d54311003e->leave($__internal_0d09dc5fc8c01b86474f57003d17359ed97e433a8aa946310f8433d54311003e_prof);

    }

    public function getTemplateName()
    {
        return "holigoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  57 => 22,  53 => 21,  49 => 20,  44 => 18,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="app">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title>HOLIGO</title>*/
/*     <!-- CSS -->*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">*/
/*     <link rel="stylesheet" href="{{ asset ('css/style.css')}}">*/
/*     <!-- icone -->*/
/*     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*     <!-- Font -->*/
/*     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>*/
/*     <!-- JS -->*/
/*     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>*/
/*     <!-- AUTOCOMPLETE API GOOGLE -->*/
/*     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuG0OeQkBpLTk_ufVZVAQWxTicjPTP2Ok&libraries=places&components=country:fr"></script>*/
/*     <script src="{{ asset ('js/libs/ngAutocomplete.js')}}"></script>*/
/*     <!-- Angular JS -->*/
/*     <script src="{{ asset ('js/libs/angular.min.js')}}"></script>*/
/*     <script src="{{ asset ('js/libs/angular-route.min.js')}}"></script>*/
/*     <script src="{{ asset ('js/libs/ngAutocomplete.js')}}"></script>*/
/*     <!-- Controllers -->*/
/*     <script src="{{ asset ('js/controllers/mainController.js')}}"></script>*/
/*     <script src="{{ asset ('js/controllers/registerController.js')}}"></script>*/
/*     <script src="{{ asset ('js/controllers/holidayController.js')}}"></script>*/
/*     <!-- Services -->*/
/*     <script src="{{ asset ('js/services/registerService.js')}}"></script>*/
/*     <script src="{{ asset ('js/app.js')}}"></script>*/
/*   </head>*/
/*   <body>*/
/*     <nav>*/
/*       <div class="nav-wrapper">*/
/*         <a href="#!" class="brand-logo">Holigo</a>*/
/*         <ul class="right hide-on-med-and-down">*/
/*           <li>*/
/*             <!-- Modal Trigger -->*/
/*             <a class="waves-effect waves-light modal-trigger btn" href="#modal1">Login</a>*/
/*           </li>*/
/*           <li>*/
/*             <a class="waves-effect waves-light btn">Je m'inscris</a>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/*     <div class="container-fluid">*/
/*       <ng-view></ng-view>*/
/*     </div>*/
/*   </body>*/
/* </html>*/
/* */
