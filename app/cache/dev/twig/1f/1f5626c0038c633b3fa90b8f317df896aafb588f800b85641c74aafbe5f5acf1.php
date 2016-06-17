<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4b9fa94bd6ec9727db7b721023bc4e777c1ed310fa1f27b3582bb38c604a9a1b extends Twig_Template
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
        $__internal_16c45825c3698fdaf300be8b0e192d34cd5f558752813d9e7674ce060b01e199 = $this->env->getExtension("native_profiler");
        $__internal_16c45825c3698fdaf300be8b0e192d34cd5f558752813d9e7674ce060b01e199->enter($__internal_16c45825c3698fdaf300be8b0e192d34cd5f558752813d9e7674ce060b01e199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_16c45825c3698fdaf300be8b0e192d34cd5f558752813d9e7674ce060b01e199->leave($__internal_16c45825c3698fdaf300be8b0e192d34cd5f558752813d9e7674ce060b01e199_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
