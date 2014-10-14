<?php

/* template.html */
class __TwigTemplate_1e43a2fde5a31d2adacaad931960750373726a4e7fa88e73741a3e43d9a934c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet_or_script' => array($this, 'block_stylesheet_or_script'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>第十四届“挑战杯”</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t";
        // line 7
        $this->displayBlock('stylesheet_or_script', $context, $blocks);
        // line 8
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/common.css")), "html", null, true);
        echo "\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("bootstrap/css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("bootstrap/js/jquery.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("scripts/index.js")), "html", null, true);
        echo "\"></script>
</head>
<body>
<div id=\"header\">
    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("images/header.png")), "html", null, true);
        echo "\" alt=\"\" />
    <div class=\"undertake\">
        <div>主办单位：共青团中央 中国科协 教育部 全国学联 广东省政府</div>
        <div>承办单位：广东工业大学</div>
        <div>联合承办单位：香港科技大学</div>
    </div>
</div>
<div id=\"myCarousel\" class=\"carousel slide\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>
  <!-- Carousel items -->
  <div class=\"carousel-inner\">
    <div class=\"active item\"><img class=\"aimg\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("images/banner1.jpg")), "html", null, true);
        echo "\"></div>
    <div class=\"item\"><img class=\"aimg\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("images/banner2.jpg")), "html", null, true);
        echo "\"></div>
    <div class=\"item\"><img class=\"aimg\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("images/banner3.png")), "html", null, true);
        echo "\"></div>
  </div>
  <!-- Carousel nav -->
  <a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
  <a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
</div>
    <ul id=\"nav\">
        <li><a class=\"nav_hov\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("")), "html", null, true);
        echo "\">首页</a></li>
        <li><a class=\"nav_hov\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p/9/28")), "html", null, true);
        echo "\">走进挑战杯</a></li>
        <li><a class=\"nav_hov\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("news")), "html", null, true);
        echo "\">新闻宣传</a></li>
        <li><a class=\"nav_hov\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("list/2")), "html", null, true);
        echo "\">通知公告</a></li>
        <li><a class=\"nav_hov\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("list/4")), "html", null, true);
        echo "\">媒体聚焦</a></li>
        <li><a class=\"nav_hov\" href=\"#\">影音专区</a></li>
        <li><a class=\"special nav_hov\" href=\"http://tiaozhanbei.net\">回到官网</a></li>
    </ul>
\t
\t";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "
<div id=\"footer\">
        <ul class=\"link\">
            <li><a href=\"\">隐私保护</a></li>    
            <li><a href=\"\">联系我们</a></li>
            <li><a href=\"\">网站介绍</a></li>
        </ul>
        <p>Copyright&copy;2013 All Rights Reserved. 挑战杯全国大学生课外学术科技作品竞赛 竞赛组委会 版权所有</p>
    </div>
</body>
\t";
        // line 59
        $this->displayBlock('script', $context, $blocks);
        // line 60
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("scripts/script.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("bootstrap/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
</html>
";
    }

    // line 7
    public function block_stylesheet_or_script($context, array $blocks = array())
    {
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  145 => 48,  133 => 61,  128 => 60,  126 => 59,  114 => 49,  112 => 48,  104 => 43,  100 => 42,  96 => 41,  92 => 40,  88 => 39,  78 => 32,  74 => 31,  70 => 30,  52 => 15,  45 => 11,  41 => 10,  37 => 9,  32 => 8,  22 => 1,  426 => 135,  417 => 129,  413 => 128,  408 => 126,  404 => 125,  390 => 113,  378 => 109,  372 => 107,  365 => 105,  362 => 104,  357 => 103,  351 => 100,  345 => 96,  327 => 94,  321 => 93,  307 => 90,  304 => 89,  301 => 88,  295 => 85,  289 => 81,  271 => 79,  265 => 78,  251 => 75,  248 => 74,  245 => 73,  239 => 70,  222 => 55,  212 => 52,  199 => 51,  196 => 50,  190 => 49,  176 => 46,  173 => 45,  170 => 44,  166 => 42,  156 => 39,  143 => 38,  140 => 7,  134 => 36,  119 => 33,  116 => 32,  113 => 31,  107 => 28,  99 => 22,  89 => 20,  85 => 19,  81 => 17,  75 => 16,  58 => 14,  54 => 13,  49 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 7,);
    }
}
