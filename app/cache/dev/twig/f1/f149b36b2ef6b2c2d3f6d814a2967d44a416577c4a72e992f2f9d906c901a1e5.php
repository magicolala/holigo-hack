<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0b668fe054ed81b1917717b9629546d2fb22e7646db1fc5d6b74a3fda4177d79 extends Twig_Template
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
        $__internal_a47e4fa14d9022cdfdcc3872a768e34b59be6ccd0650eb6f68156f4d5994e635 = $this->env->getExtension("native_profiler");
        $__internal_a47e4fa14d9022cdfdcc3872a768e34b59be6ccd0650eb6f68156f4d5994e635->enter($__internal_a47e4fa14d9022cdfdcc3872a768e34b59be6ccd0650eb6f68156f4d5994e635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a47e4fa14d9022cdfdcc3872a768e34b59be6ccd0650eb6f68156f4d5994e635->leave($__internal_a47e4fa14d9022cdfdcc3872a768e34b59be6ccd0650eb6f68156f4d5994e635_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
