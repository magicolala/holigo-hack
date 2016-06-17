<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_05d2d14c9bf6030b2d98ebe120828738dc1bd4c2f53a45b83d47ecc4667a8868 extends Twig_Template
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
        $__internal_5cff7195aab8318f2cf3576f54c0808b0ed0e8131f9e8d1ed73d85ce3d70c46b = $this->env->getExtension("native_profiler");
        $__internal_5cff7195aab8318f2cf3576f54c0808b0ed0e8131f9e8d1ed73d85ce3d70c46b->enter($__internal_5cff7195aab8318f2cf3576f54c0808b0ed0e8131f9e8d1ed73d85ce3d70c46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5cff7195aab8318f2cf3576f54c0808b0ed0e8131f9e8d1ed73d85ce3d70c46b->leave($__internal_5cff7195aab8318f2cf3576f54c0808b0ed0e8131f9e8d1ed73d85ce3d70c46b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
