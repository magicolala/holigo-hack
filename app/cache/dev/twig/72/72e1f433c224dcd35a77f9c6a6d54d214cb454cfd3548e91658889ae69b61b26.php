<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1d1e05df68413c52613df9991a62ef8c0a5b36c396f511159d436c5bb1b7744b extends Twig_Template
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
        $__internal_a29f0387b6f349e48a2b8197abc04c3f407ba05badf521689932057e4242301a = $this->env->getExtension("native_profiler");
        $__internal_a29f0387b6f349e48a2b8197abc04c3f407ba05badf521689932057e4242301a->enter($__internal_a29f0387b6f349e48a2b8197abc04c3f407ba05badf521689932057e4242301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a29f0387b6f349e48a2b8197abc04c3f407ba05badf521689932057e4242301a->leave($__internal_a29f0387b6f349e48a2b8197abc04c3f407ba05badf521689932057e4242301a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
