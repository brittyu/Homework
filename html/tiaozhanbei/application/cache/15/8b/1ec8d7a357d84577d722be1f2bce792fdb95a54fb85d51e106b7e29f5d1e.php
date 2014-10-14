<?php

/* backend/template.html */
class __TwigTemplate_158b1ec8d7a357d84577d722be1f2bce792fdb95a54fb85d51e106b7e29f5d1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta charset=\"UTF-8\">
    <title>vinko</title>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/vendor/pure-min.css")), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/style.css")), "html", null, true);
        echo "\" />
</head>
<body>
    <section class=\"container medium\">
        <div class=\"wrapper\" id=\"login\">
            <div class=\"grid\">
\t\t\t\t";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "\t\t\t\t";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "            </div>
        </div>
    </section>
</body>
<script src=\"http://code.jquery.com/jquery-2.0.2.min.js\"></script>
<script src=\"<?php echo base_url('static/scripts/vinko.js');?>\"></script>
</html>
";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "
\t\t\t\t";
    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        // line 17
        echo "
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  65 => 16,  60 => 14,  57 => 13,  46 => 19,  43 => 16,  41 => 13,  28 => 6,  21 => 1,  42 => 8,  39 => 7,  32 => 7,  29 => 2,);
    }
}
