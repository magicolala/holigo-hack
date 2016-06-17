<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b11fc8a0b2226aa05cebc71772976e8765d6859793919036804557bb53948070 extends Twig_Template
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
        $__internal_73091d90673284b702d585a146de360b988192e9fa769eb4f047737e8c73b18a = $this->env->getExtension("native_profiler");
        $__internal_73091d90673284b702d585a146de360b988192e9fa769eb4f047737e8c73b18a->enter($__internal_73091d90673284b702d585a146de360b988192e9fa769eb4f047737e8c73b18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_73091d90673284b702d585a146de360b988192e9fa769eb4f047737e8c73b18a->leave($__internal_73091d90673284b702d585a146de360b988192e9fa769eb4f047737e8c73b18a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
