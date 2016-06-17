<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b780c4043e258a1dcb73e461c1865e9aceaf128845f3d4521f86a9027ebeb77a extends Twig_Template
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
        $__internal_8c7a27c1a36bbbb18300284463eac1dd1003e367f4f40353625731e4cf5c7598 = $this->env->getExtension("native_profiler");
        $__internal_8c7a27c1a36bbbb18300284463eac1dd1003e367f4f40353625731e4cf5c7598->enter($__internal_8c7a27c1a36bbbb18300284463eac1dd1003e367f4f40353625731e4cf5c7598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8c7a27c1a36bbbb18300284463eac1dd1003e367f4f40353625731e4cf5c7598->leave($__internal_8c7a27c1a36bbbb18300284463eac1dd1003e367f4f40353625731e4cf5c7598_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
