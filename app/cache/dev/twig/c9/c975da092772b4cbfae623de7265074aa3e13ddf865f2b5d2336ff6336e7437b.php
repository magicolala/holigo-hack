<?php

/* @holigo/Default/register.html */
class __TwigTemplate_eda0d47781ddbc80a686e02e4a0d56c523061af97ec86b7e66e94ea1ff597b02 extends Twig_Template
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
        $__internal_4a883831d30e90ddc78b113416922a215b6c7c97642d24e597662e0267b689e8 = $this->env->getExtension("native_profiler");
        $__internal_4a883831d30e90ddc78b113416922a215b6c7c97642d24e597662e0267b689e8->enter($__internal_4a883831d30e90ddc78b113416922a215b6c7c97642d24e597662e0267b689e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@holigo/Default/register.html"));

        // line 1
        echo "<div class=\"row\">
  <div class=\"col l8 block-reg push-l2\">
    <div class=\"row\">
      <div class=\"input-field col l6\">
        <input id=\"last_name\" type=\"text\" ng-model=\"data.prenom\"/>
        <label for=\"prenom\">Prénom</label>
      </div>
      <div class=\"input-field col l6\">
        <input type=\"text\" name=\"nom\" ng-model=\"data.nom\"/>
        <label for=\"nom\">Nom</label>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"input-field col l6\">
        <input id=\"last_name\" type=\"text\" ng-model=\"data.mail\"/>
        <label for=\"mail\">Mail</label>
      </div>
      <div class=\"input-field col l6\">
        <input type=\"text\" name=\"nom\" ng-model=\"data.password\"/>
        <label for=\"pseudo\">Mot de passe</label>
      </div>
    </div>
    <div class=\"row\">
      <div class=\" input-field col l6 push-l6\">
        <input type=\"text\" name=\"retapez votre mot de passe\" ng-model=\"data.passwordConfirmation\"/>
        <label for=\"mot_de_passe\">Resaissez votre mot de passe</label>
      </div>
    </div>
    <button type=\"button\" class=\"btn\" ng-click=\"register()\">Valider</button>
  </div>
</div>
";
        
        $__internal_4a883831d30e90ddc78b113416922a215b6c7c97642d24e597662e0267b689e8->leave($__internal_4a883831d30e90ddc78b113416922a215b6c7c97642d24e597662e0267b689e8_prof);

    }

    public function getTemplateName()
    {
        return "@holigo/Default/register.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="row">*/
/*   <div class="col l8 block-reg push-l2">*/
/*     <div class="row">*/
/*       <div class="input-field col l6">*/
/*         <input id="last_name" type="text" ng-model="data.prenom"/>*/
/*         <label for="prenom">Prénom</label>*/
/*       </div>*/
/*       <div class="input-field col l6">*/
/*         <input type="text" name="nom" ng-model="data.nom"/>*/
/*         <label for="nom">Nom</label>*/
/*       </div>*/
/*     </div>*/
/*     <div class="row">*/
/*       <div class="input-field col l6">*/
/*         <input id="last_name" type="text" ng-model="data.mail"/>*/
/*         <label for="mail">Mail</label>*/
/*       </div>*/
/*       <div class="input-field col l6">*/
/*         <input type="text" name="nom" ng-model="data.password"/>*/
/*         <label for="pseudo">Mot de passe</label>*/
/*       </div>*/
/*     </div>*/
/*     <div class="row">*/
/*       <div class=" input-field col l6 push-l6">*/
/*         <input type="text" name="retapez votre mot de passe" ng-model="data.passwordConfirmation"/>*/
/*         <label for="mot_de_passe">Resaissez votre mot de passe</label>*/
/*       </div>*/
/*     </div>*/
/*     <button type="button" class="btn" ng-click="register()">Valider</button>*/
/*   </div>*/
/* </div>*/
/* */
