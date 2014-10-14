<?php

/* backend/add_user.html */
class __TwigTemplate_8e62cb9f7097f8d7449bafd9c26ade7506450d1cf345f5444072cefd92c84202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("backend/template.html");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "                <header>
                    <h1>添加用户</h1>
                </header>
\t\t\t\t";
    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t\t<form class=\"pure-form pure-form-aligned\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/user/add_u")), "html", null, true);
        echo "\">
                    <div class=\"pure-control-group\">
\t\t\t\t\t\t<label for=\"username\">用户名</label>
\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"pure-u-1-2\"/>
\t\t\t\t\t\t<label for=\"pw\">密码</label>
\t\t\t\t\t\t<input type=\"password\" name=\"pw\" class=\"pure-u-1-2\"/>
\t\t\t\t\t\t<label for=\"conf_pw\">重复密码</label>
\t\t\t\t\t\t<input type=\"password\" class=\"pure-u-1-2\" name=\"conf_pw\"/>
                    </div>
                    <div class=\"pure-controls\">
\t\t\t\t\t\t<button class=\"pure-button pure-button-primary\" type=\"submit\"/>修改</button>
                    </div>
\t\t\t\t</form>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/add_user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 3,  29 => 2,);
    }
}
