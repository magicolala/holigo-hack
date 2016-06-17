<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3c0c4ffe38436cb11f0ae52e9f23016e2641c8c7b5de28b30b348120f9bf19f8 extends Twig_Template
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
        $__internal_4f4f6ab0e80cd9826539bacf8906446f7c14af40a79b4a34c74279104bfd46bb = $this->env->getExtension("native_profiler");
        $__internal_4f4f6ab0e80cd9826539bacf8906446f7c14af40a79b4a34c74279104bfd46bb->enter($__internal_4f4f6ab0e80cd9826539bacf8906446f7c14af40a79b4a34c74279104bfd46bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4f4f6ab0e80cd9826539bacf8906446f7c14af40a79b4a34c74279104bfd46bb->leave($__internal_4f4f6ab0e80cd9826539bacf8906446f7c14af40a79b4a34c74279104bfd46bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
