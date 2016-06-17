<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cd06d509810e43db471fffa73b187d348df08497b16e201171e6ef4b183aa266 extends Twig_Template
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
        $__internal_cc5e14740f330abaf353435ef3d6261b1e51516eed82b191de81d18642c0d47f = $this->env->getExtension("native_profiler");
        $__internal_cc5e14740f330abaf353435ef3d6261b1e51516eed82b191de81d18642c0d47f->enter($__internal_cc5e14740f330abaf353435ef3d6261b1e51516eed82b191de81d18642c0d47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cc5e14740f330abaf353435ef3d6261b1e51516eed82b191de81d18642c0d47f->leave($__internal_cc5e14740f330abaf353435ef3d6261b1e51516eed82b191de81d18642c0d47f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
