<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d017372da08838826446af5bd7bd68bde9d48e53b559368d65bb0a2ab4484c83 extends Twig_Template
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
        $__internal_7f57d52f92b46b9c5ce771791c0e246cb88a39f6befb0c1b6af4e0785d497947 = $this->env->getExtension("native_profiler");
        $__internal_7f57d52f92b46b9c5ce771791c0e246cb88a39f6befb0c1b6af4e0785d497947->enter($__internal_7f57d52f92b46b9c5ce771791c0e246cb88a39f6befb0c1b6af4e0785d497947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7f57d52f92b46b9c5ce771791c0e246cb88a39f6befb0c1b6af4e0785d497947->leave($__internal_7f57d52f92b46b9c5ce771791c0e246cb88a39f6befb0c1b6af4e0785d497947_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
