<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d9450f1faf5daea3cdc95e6197315ef09a029879607c4504f1fdcdf18b4df92c extends Twig_Template
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
        $__internal_23c3fa65192205af41c24eead54c5851da0c60d026237bd56c9f9f2b3fc63acf = $this->env->getExtension("native_profiler");
        $__internal_23c3fa65192205af41c24eead54c5851da0c60d026237bd56c9f9f2b3fc63acf->enter($__internal_23c3fa65192205af41c24eead54c5851da0c60d026237bd56c9f9f2b3fc63acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_23c3fa65192205af41c24eead54c5851da0c60d026237bd56c9f9f2b3fc63acf->leave($__internal_23c3fa65192205af41c24eead54c5851da0c60d026237bd56c9f9f2b3fc63acf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
