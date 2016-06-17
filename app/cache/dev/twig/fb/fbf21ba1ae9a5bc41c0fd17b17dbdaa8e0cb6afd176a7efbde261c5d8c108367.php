<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7b2290c7cf6f5c696b264b233de120348f065182577a62bc3189416d8682bb58 extends Twig_Template
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
        $__internal_31811354b11883dd0dbf2113385d8ce16383a0a42870a21369330e0f9ee9fa86 = $this->env->getExtension("native_profiler");
        $__internal_31811354b11883dd0dbf2113385d8ce16383a0a42870a21369330e0f9ee9fa86->enter($__internal_31811354b11883dd0dbf2113385d8ce16383a0a42870a21369330e0f9ee9fa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_31811354b11883dd0dbf2113385d8ce16383a0a42870a21369330e0f9ee9fa86->leave($__internal_31811354b11883dd0dbf2113385d8ce16383a0a42870a21369330e0f9ee9fa86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
