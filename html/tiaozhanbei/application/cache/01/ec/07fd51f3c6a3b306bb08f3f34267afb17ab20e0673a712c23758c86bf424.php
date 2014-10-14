<?php

/* backend/alter_project_category.html */
class __TwigTemplate_01ec07fd51f3c6a3b306bb08f3f34267afb17ab20e0673a712c23758c86bf424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("backend/template.html");

        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/template.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        // line 3
        echo "                <form class=\"pure-form pure-form-aligned\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/alter_project_category")), "html", null, true);
        echo "/";
        if (isset($context["category_id"])) { $_category_id_ = $context["category_id"]; } else { $_category_id_ = null; }
        echo twig_escape_filter($this->env, $_category_id_, "html", null, true);
        echo "\">
                    <div class=\"pure-control-group\">
                        <label for=\"category\">输入新类名</label>
\t\t\t\t\t\t<input type=\"text\" name=\"category\" class=\"pure-u-1-2\"/>
                    </div>
                    <div class=\"pure-controls\">
\t\t\t\t\t\t<button class=\"pure-button pure-button-primary\" type=\"submit\">修改</button>
                    </div>
\t\t\t\t</form>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/alter_project_category.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
