<?php

/* backend/alter_pw.html */
class __TwigTemplate_2bbdac8dad65bc2505714fcd5ded97242c49135a52a86f10159f920f764f1629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("backend/templateP.html");

        $this->blocks = array(
            'script_or_stylesheet' => array($this, 'block_script_or_stylesheet'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/templateP.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_script_or_stylesheet($context, array $blocks = array())
    {
        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("scripts/password.js")), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "        <section id=\"dashboard\" class=\"pure-g grid\">
            <section id=\"main\" class=\"pure-u-3-4\">
                <!-- 模块名字 -->
                <header id=\"module-name\">
                    <h1>管理猿 的信息</h1>
                </header>
                <!-- 模块内容 -->
                <article id=\"module-content\">
                    <form class=\"pure-form pure-form-stacked\" method=\"post\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/user/alter_pw")), "html", null, true);
        echo "\">
                        <div class=\"pure-control-group\">
                            <label for=\"new_pw\">新密码</label>
                            <input type=\"password\" name=\"new_pw\" id=\"new_pw\"/>
                        </div>
                        <div class=\"pure-control-group\">
                            <label for=\"conf_pw\">重复密码</label>
                            <input type=\"password\" name=\"conf_pw\" id=\"conf_pw\"/>
                        </div>
                        <div class=\"pure-control-group\">
                            <label for=\"ord_pw\">原密码</label>
                            <input type=\"password\" name=\"ord_pw\" />
                        </div>
                        <div class=\"pure-controls\">
                            <button class=\"pure-button pure-button-primary\" type=\"submit\">修改密码</button>
                        </div>
                    </form>
                    <p id=\"validation\" style=\"color: red;\"></p>
                </article>
            </section>
    ";
    }

    public function getTemplateName()
    {
        return "backend/alter_pw.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
