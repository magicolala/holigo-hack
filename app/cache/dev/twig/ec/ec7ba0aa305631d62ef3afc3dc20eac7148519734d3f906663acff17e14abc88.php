<?php

/* holigoBundle:Default:index.html.twig */
class __TwigTemplate_397d385a6ff14a034bf7f302ee3acb583019bc2c66b305ba6b7b249180157e15 extends Twig_Template
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
        $__internal_3c831b2323baaa4a257b0487888005a90ea96b0db9554797bc948197bf063060 = $this->env->getExtension("native_profiler");
        $__internal_3c831b2323baaa4a257b0487888005a90ea96b0db9554797bc948197bf063060->enter($__internal_3c831b2323baaa4a257b0487888005a90ea96b0db9554797bc948197bf063060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "holigoBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"app\">
  <head>
    <meta charset=\"utf-8\">
    <title>HOLIGO</title>
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
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
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/ngAutocomplete.js"), "html", null, true);
        echo "\"></script>
    <!-- Angular JS -->
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-route.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/ngAutocomplete.js"), "html", null, true);
        echo "\"></script>
    <!-- Controllers -->
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/controllers/mainController.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/controllers/registerController.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/controllers/holidayController.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/controllers/dashboardController.js"), "html", null, true);
        echo "\"></script>
    <!-- Services -->
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/services/registerService.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/services/holidayService.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
    <div class=\"container-fluid\">
      <ng-view></ng-view>
    </div>
  </body>
</html>
";
        
        $__internal_3c831b2323baaa4a257b0487888005a90ea96b0db9554797bc948197bf063060->leave($__internal_3c831b2323baaa4a257b0487888005a90ea96b0db9554797bc948197bf063060_prof);

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
        return array (  88 => 32,  84 => 31,  80 => 30,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  58 => 23,  54 => 22,  50 => 21,  45 => 19,  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="app">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title>HOLIGO</title>*/
/*     <!-- CSS -->*/
/*     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">*/
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
/*     <script src="{{ asset ('js/controllers/dashboardController.js')}}"></script>*/
/*     <!-- Services -->*/
/*     <script src="{{ asset ('js/services/registerService.js')}}"></script>*/
/*     <script src="{{ asset ('js/services/holidayService.js')}}"></script>*/
/*     <script src="{{ asset ('js/app.js')}}"></script>*/
/*   </head>*/
/*   <body>*/
/*     <div class="container-fluid">*/
/*       <ng-view></ng-view>*/
/*     </div>*/
/*   </body>*/
/* </html>*/
/* */
