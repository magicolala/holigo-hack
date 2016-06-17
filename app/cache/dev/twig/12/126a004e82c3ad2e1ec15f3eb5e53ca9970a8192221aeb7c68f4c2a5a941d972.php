<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d234e937c78c1094e842215db9eb0b91318457f3f3bc2904b2420c76864fc830 extends Twig_Template
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
        $__internal_5e3c32ff9e90fac7d97db67b03d003e12c89b98a34f3a92d7970d23edb443c60 = $this->env->getExtension("native_profiler");
        $__internal_5e3c32ff9e90fac7d97db67b03d003e12c89b98a34f3a92d7970d23edb443c60->enter($__internal_5e3c32ff9e90fac7d97db67b03d003e12c89b98a34f3a92d7970d23edb443c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5e3c32ff9e90fac7d97db67b03d003e12c89b98a34f3a92d7970d23edb443c60->leave($__internal_5e3c32ff9e90fac7d97db67b03d003e12c89b98a34f3a92d7970d23edb443c60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
