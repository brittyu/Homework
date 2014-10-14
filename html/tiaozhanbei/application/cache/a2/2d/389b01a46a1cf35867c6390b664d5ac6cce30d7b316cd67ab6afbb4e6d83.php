<?php

/* backend/signin.html */
class __TwigTemplate_a22d389b01a46a1cf35867c6390b664d5ac6cce30d7b316cd67ab6afbb4e6d83 extends Twig_Template
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
                    <h1>欢迎回来</h1>
                </header>
\t\t\t\t";
    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t\t<form class=\"pure-form pure-form-aligned\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/user/login")), "html", null, true);
        echo "\">
                    <div class=\"pure-control-group\">
\t\t\t\t\t\t<label for=\"username\">用户名</label>
\t\t\t\t\t\t<input type=\"text\" name=\"username\" class=\"pure-u-1-2\"/>
                    </div>
                    <div class=\"pure-control-group\">
\t\t\t\t\t\t<label for=\"password\">密码</label>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"pure-u-1-2\"/>
                    </div>
                    <div class=\"pure-controls\">
\t\t\t\t\t\t<button class=\"pure-button pure-button-primary\" type=\"submit\">登入</button>
                    </div>
\t\t\t\t</form>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/signin.html";
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
