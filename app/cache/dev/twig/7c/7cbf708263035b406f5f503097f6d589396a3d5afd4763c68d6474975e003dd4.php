<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_adb93badea570b75cbd4e6b2ee5f1660c0e9904e8c72938947304d29e99efad8 extends Twig_Template
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
        $__internal_ef0a0c0acea0bd3d4ee69a795ef803f29c4f4a3a4da0822432c1ce6f02c69976 = $this->env->getExtension("native_profiler");
        $__internal_ef0a0c0acea0bd3d4ee69a795ef803f29c4f4a3a4da0822432c1ce6f02c69976->enter($__internal_ef0a0c0acea0bd3d4ee69a795ef803f29c4f4a3a4da0822432c1ce6f02c69976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ef0a0c0acea0bd3d4ee69a795ef803f29c4f4a3a4da0822432c1ce6f02c69976->leave($__internal_ef0a0c0acea0bd3d4ee69a795ef803f29c4f4a3a4da0822432c1ce6f02c69976_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
