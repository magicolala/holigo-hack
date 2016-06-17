<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8c5f48ea519fb4983396e94ddfd2c9cce295aab322d79231e6daf824722c96c1 extends Twig_Template
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
        $__internal_6aa068297c4127c38ab15e2c86c5b2f4bdaca6c131b93b928b48e7fbfe98a9d1 = $this->env->getExtension("native_profiler");
        $__internal_6aa068297c4127c38ab15e2c86c5b2f4bdaca6c131b93b928b48e7fbfe98a9d1->enter($__internal_6aa068297c4127c38ab15e2c86c5b2f4bdaca6c131b93b928b48e7fbfe98a9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6aa068297c4127c38ab15e2c86c5b2f4bdaca6c131b93b928b48e7fbfe98a9d1->leave($__internal_6aa068297c4127c38ab15e2c86c5b2f4bdaca6c131b93b928b48e7fbfe98a9d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
