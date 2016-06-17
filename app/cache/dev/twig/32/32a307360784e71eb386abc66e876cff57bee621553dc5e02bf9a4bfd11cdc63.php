<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_32dbbdddb7ef981e093b859768cbaf3d9574376e693f8eeec273fb9e1e21bb4a extends Twig_Template
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
        $__internal_35474fbfd02ce9b6b0393fcea5bfba337575dacb3f94d4e40f78b356fbb5831a = $this->env->getExtension("native_profiler");
        $__internal_35474fbfd02ce9b6b0393fcea5bfba337575dacb3f94d4e40f78b356fbb5831a->enter($__internal_35474fbfd02ce9b6b0393fcea5bfba337575dacb3f94d4e40f78b356fbb5831a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_35474fbfd02ce9b6b0393fcea5bfba337575dacb3f94d4e40f78b356fbb5831a->leave($__internal_35474fbfd02ce9b6b0393fcea5bfba337575dacb3f94d4e40f78b356fbb5831a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
