<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f54381d9e048715e1a07b76a73a8a1e155e7f643f65b4cd705e35147c667b847 extends Twig_Template
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
        $__internal_c7c18f36376b87167354ca293a7c9c1bd988645441d78a6f77257eb41360471d = $this->env->getExtension("native_profiler");
        $__internal_c7c18f36376b87167354ca293a7c9c1bd988645441d78a6f77257eb41360471d->enter($__internal_c7c18f36376b87167354ca293a7c9c1bd988645441d78a6f77257eb41360471d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c7c18f36376b87167354ca293a7c9c1bd988645441d78a6f77257eb41360471d->leave($__internal_c7c18f36376b87167354ca293a7c9c1bd988645441d78a6f77257eb41360471d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
