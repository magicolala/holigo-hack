<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_195a26712f4fb933fbbb34df304db1675bf67d05e0f99817da0903e88923dc94 extends Twig_Template
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
        $__internal_c811e0455b20da33aea3a97f3b5a8c5090ea4742002815077e685283e96c2a84 = $this->env->getExtension("native_profiler");
        $__internal_c811e0455b20da33aea3a97f3b5a8c5090ea4742002815077e685283e96c2a84->enter($__internal_c811e0455b20da33aea3a97f3b5a8c5090ea4742002815077e685283e96c2a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c811e0455b20da33aea3a97f3b5a8c5090ea4742002815077e685283e96c2a84->leave($__internal_c811e0455b20da33aea3a97f3b5a8c5090ea4742002815077e685283e96c2a84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
