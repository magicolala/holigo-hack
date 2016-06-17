<?php

/* @holigo/Default/holiday.html */
class __TwigTemplate_97ddbe17d773284fb135325dd3dd9621d1cd5c8bfb3db6c94e3caaac28dbbc1b extends Twig_Template
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
        $__internal_cb2b5fe01e470baa646bf29f01827ee2988935dcb416ecd310f963be33dd1a5e = $this->env->getExtension("native_profiler");
        $__internal_cb2b5fe01e470baa646bf29f01827ee2988935dcb416ecd310f963be33dd1a5e->enter($__internal_cb2b5fe01e470baa646bf29f01827ee2988935dcb416ecd310f963be33dd1a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@holigo/Default/holiday.html"));

        // line 1
        echo "<h1>Près à partir ?</h1>
<form class=\"col l12 holiday_form\">
  <div class=\"row\">
    <input class=\"datepicker col l3\" type=\"date\" value=\"Date de départ\">
    <input class=\"datepicker col l3\" type=\"date\" value=\"Date de retour\">
  </div>
  <div class=\"row\">
    <div class=\"input-field col l3\">
      <input id=\"email\" type=\"text\" ng-autocomplete ng-model=\"depart\">
      <label class=\"active\" for=\"email\">De (ville ou pays)</label>
    </div>
    <div class=\"input-field col l3\">
      <input id=\"email\" type=\"text\" ng-autocomplete ng-model=\"arrive\">
      <label class=\"active\" for=\"email\">À (ville ou pays)</label>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"input-field col l3\">
      <select>
        <option value=\"0\">Voiture</option>
      </select>
      <label>Moyen de transport</label>
    </div>
    <div class=\"input-field col l3\">
      <select>
        <option value=\"0\">Essence</option>
        <option value=\"1\">Gazoile</option>
      </select>
      <label>Carburant</label>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"input-field col l3\">
      <input id=\"email\" type=\"number\" value=\"80\" class=\"validate\">
      <label class=\"active\" for=\"email\">Budget hébergement / jour /pers</label>
    </div>
    <div class=\"input-field col l3\">
      <input id=\"email\" type=\"number\" value=\"22\" class=\"validate\">
      <label class=\"active\" for=\"email\">Budget nouriture / jour /pers</label>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"input-field col l3\">
      <input id=\"email\" type=\"number\" value=\"30\" class=\"validate\">
      <label class=\"active\" for=\"email\">Budget sortie / jour /pers</label>
    </div>
    <div class=\"input-field col l3\">
      <input id=\"email\" type=\"number\" class=\"validate\">
      <label class=\"active\" for=\"email\">Nombre de personne</label>
    </div>
  </div>
</form>
";
        
        $__internal_cb2b5fe01e470baa646bf29f01827ee2988935dcb416ecd310f963be33dd1a5e->leave($__internal_cb2b5fe01e470baa646bf29f01827ee2988935dcb416ecd310f963be33dd1a5e_prof);

    }

    public function getTemplateName()
    {
        return "@holigo/Default/holiday.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <h1>Près à partir ?</h1>*/
/* <form class="col l12 holiday_form">*/
/*   <div class="row">*/
/*     <input class="datepicker col l3" type="date" value="Date de départ">*/
/*     <input class="datepicker col l3" type="date" value="Date de retour">*/
/*   </div>*/
/*   <div class="row">*/
/*     <div class="input-field col l3">*/
/*       <input id="email" type="text" ng-autocomplete ng-model="depart">*/
/*       <label class="active" for="email">De (ville ou pays)</label>*/
/*     </div>*/
/*     <div class="input-field col l3">*/
/*       <input id="email" type="text" ng-autocomplete ng-model="arrive">*/
/*       <label class="active" for="email">À (ville ou pays)</label>*/
/*     </div>*/
/*   </div>*/
/*   <div class="row">*/
/*     <div class="input-field col l3">*/
/*       <select>*/
/*         <option value="0">Voiture</option>*/
/*       </select>*/
/*       <label>Moyen de transport</label>*/
/*     </div>*/
/*     <div class="input-field col l3">*/
/*       <select>*/
/*         <option value="0">Essence</option>*/
/*         <option value="1">Gazoile</option>*/
/*       </select>*/
/*       <label>Carburant</label>*/
/*     </div>*/
/*   </div>*/
/*   <div class="row">*/
/*     <div class="input-field col l3">*/
/*       <input id="email" type="number" value="80" class="validate">*/
/*       <label class="active" for="email">Budget hébergement / jour /pers</label>*/
/*     </div>*/
/*     <div class="input-field col l3">*/
/*       <input id="email" type="number" value="22" class="validate">*/
/*       <label class="active" for="email">Budget nouriture / jour /pers</label>*/
/*     </div>*/
/*   </div>*/
/*   <div class="row">*/
/*     <div class="input-field col l3">*/
/*       <input id="email" type="number" value="30" class="validate">*/
/*       <label class="active" for="email">Budget sortie / jour /pers</label>*/
/*     </div>*/
/*     <div class="input-field col l3">*/
/*       <input id="email" type="number" class="validate">*/
/*       <label class="active" for="email">Nombre de personne</label>*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* */
