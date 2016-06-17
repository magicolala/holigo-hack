<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a2a77fa344e783d25638e375ab61d17a2bb83339a2d095ccf5be1bdd5e549c5b extends Twig_Template
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
        $__internal_c3ad4b9a92fe681ae59e906bca1b0e56bac266bdff435c0866b9fb437f0163bf = $this->env->getExtension("native_profiler");
        $__internal_c3ad4b9a92fe681ae59e906bca1b0e56bac266bdff435c0866b9fb437f0163bf->enter($__internal_c3ad4b9a92fe681ae59e906bca1b0e56bac266bdff435c0866b9fb437f0163bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c3ad4b9a92fe681ae59e906bca1b0e56bac266bdff435c0866b9fb437f0163bf->leave($__internal_c3ad4b9a92fe681ae59e906bca1b0e56bac266bdff435c0866b9fb437f0163bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
