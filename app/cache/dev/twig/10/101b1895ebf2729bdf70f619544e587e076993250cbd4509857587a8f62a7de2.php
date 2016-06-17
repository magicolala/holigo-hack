<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_067fffe05752efd5758dab3e513ad0bbfcb339e82a34e39363c070cabcf082ad extends Twig_Template
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
        $__internal_6d5ec4ab8dbb7a26b876cfacf27acb247ec390c8cef7037d9e8550718cf7732e = $this->env->getExtension("native_profiler");
        $__internal_6d5ec4ab8dbb7a26b876cfacf27acb247ec390c8cef7037d9e8550718cf7732e->enter($__internal_6d5ec4ab8dbb7a26b876cfacf27acb247ec390c8cef7037d9e8550718cf7732e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6d5ec4ab8dbb7a26b876cfacf27acb247ec390c8cef7037d9e8550718cf7732e->leave($__internal_6d5ec4ab8dbb7a26b876cfacf27acb247ec390c8cef7037d9e8550718cf7732e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
