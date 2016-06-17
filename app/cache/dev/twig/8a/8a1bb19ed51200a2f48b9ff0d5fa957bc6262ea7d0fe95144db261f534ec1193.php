<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f978d025414602c5c1b6ccb593de66f00a69c661c4af422464b2146cabbac37a extends Twig_Template
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
        $__internal_3d5fec3a521812fa2a963da0b97a4bb6cb92115f23c5a78d73a76a847326c41b = $this->env->getExtension("native_profiler");
        $__internal_3d5fec3a521812fa2a963da0b97a4bb6cb92115f23c5a78d73a76a847326c41b->enter($__internal_3d5fec3a521812fa2a963da0b97a4bb6cb92115f23c5a78d73a76a847326c41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3d5fec3a521812fa2a963da0b97a4bb6cb92115f23c5a78d73a76a847326c41b->leave($__internal_3d5fec3a521812fa2a963da0b97a4bb6cb92115f23c5a78d73a76a847326c41b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
