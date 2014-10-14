<?php

/* backend/templateP.html */
class __TwigTemplate_7894766e24b024ccd4216eac10189ed83ffc846e82437a1bb1e8ef08e20c027d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'script_or_stylesheet' => array($this, 'block_script_or_stylesheet'),
            'content' => array($this, 'block_content'),
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
    <!-- TODO 更换位置 -->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/vendor/font-awesome/css/font-awesome.min.css")), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/vendor/pure-min.css")), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/style.css")), "html", null, true);
        echo "\" />
\t";
        // line 10
        $this->displayBlock('script_or_stylesheet', $context, $blocks);
        // line 12
        echo "</head>
<body>
    <section class=\"container\">
        <header id=\"head\" class=\"pure-g grid\">
            <section id=\"logo\" class=\"pure-u-1-6\">
\t    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts")), "html", null, true);
        echo "\">
                    <h1>挑战杯后台</h1>
                </a>
            </section>
            <section id=\"sub-nav\" class=\"pure-u-7-12\"></section>
            <nav class=\"pure-u-1-4\" id=\"head-nav\">
\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/user/logout")), "html", null, true);
        echo "\" class=\"item\" href=\"\"><i class=\"fa fa-sign-out\"></i>注销</a>
\t\t<a class=\"item\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/user/update_pw")), "html", null, true);
        echo "\"><i class=\"fa fa-user\"></i>修改密码</a>
            </nav>
        </header>
\t\t";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo " <!-- 边栏 -->
            <nav id=\"side-nav\" class=\"pure-u-1-4\">
                <!-- 站点信息 -->
                <section id=\"site-infos\">
                    <h3>挑战杯后台</h3>
                </section>
                <ul class=\"items\">
\t\t\t\t\t<li class=\"item\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts")), "html", null, true);
        echo "\"><i class=\"fa fa-file-text-o\"></i>文章管理</a></li>
\t\t\t\t\t<li class=\"item\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/user/add_user")), "html", null, true);
        echo "\"><i class=\"fa fa-file-text-o\"></i>添加用户</a></li>
                    <li class=\"item\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/user/user_list")), "html", null, true);
        echo "\"><i class=\"fa fa-file-text-o\"></i>用户列表</a></li>
\t\t\t\t\t<li class=\"item\"><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/show_project_categories")), "html", null, true);
        echo "\"><i class=\"fa fa-file-text-o\"></i>修改项目展示大小类</a></li>
                </ul>
            </nav>
        </section>
        <footer id=\"copyleft\" class=\"grid-clean\">
            <p>&copy; 2013 <a href=\"#\">挑战杯</a> • Made by <a href=\"#\">VTM</a> with ♥ </p>
        </footer>
    </section>
</body>
<script src=\"http://code.jquery.com/jquery-2.0.2.min.js\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("scripts/vinko.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("scripts/set.js")), "html", null, true);
        echo "></script>
</html>
";
    }

    // line 10
    public function block_script_or_stylesheet($context, array $blocks = array())
    {
        // line 11
        echo "\t";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "backend/templateP.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 28,  123 => 27,  119 => 11,  116 => 10,  109 => 50,  105 => 49,  92 => 39,  88 => 38,  84 => 37,  80 => 36,  71 => 29,  69 => 27,  59 => 23,  50 => 17,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  21 => 1,  63 => 24,  48 => 14,  43 => 12,  31 => 3,  28 => 2,);
    }
}
