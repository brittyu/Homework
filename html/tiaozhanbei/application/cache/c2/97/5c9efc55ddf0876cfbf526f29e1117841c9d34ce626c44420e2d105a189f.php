<?php

/* index.html */
class __TwigTemplate_c2975c9efc55ddf0876cfbf526f29e1117841c9d34ce626c44420e2d105a189f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.html");

        $this->blocks = array(
            'stylesheet_or_script' => array($this, 'block_stylesheet_or_script'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet_or_script($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/index.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"content\">
        <div id=\"display\">
            <div id=\"box\">
                <ul class=\"news\">
\t\t\t\t\t";
        // line 12
        if (isset($context["picture"])) { $_picture_ = $context["picture"]; } else { $_picture_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_picture_);
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 13
            echo "\t\t\t\t\t\t";
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            if ($this->getAttribute($_p_, "src")) {
                // line 14
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
                echo "/";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_p_, "category_id"), "html", null, true);
                echo "/";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_p_, "id"), "html", null, true);
                echo "\">";
                echo "<img ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo $this->getAttribute($this->getAttribute($_p_, "src"), 0, array(), "array");
                echo ">";
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </ul>
                <ul class=\"count\">
\t\t\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 20
            echo "\t\t\t\t\t<li>";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </ul>
            </div>    
            <div class=\"message\">
                <div class=\"pre\">
                   <a class=\"pre_inone\" href=\"\">最新资讯</a>
                   <a class=\"pre_intwo\" href=\"\">通知公告</a>
\t\t\t\t   <a class=\"right\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("news")), "html", null, true);
        echo "\">more>></a>
                </div>
                <ul class=\"same\">
\t\t\t\t\t";
        // line 31
        if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
        if ($this->getAttribute($_top_, "kuaixun")) {
            // line 32
            echo "\t\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "kuaixun"), "category_id"), "html", null, true);
            echo "/";
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "kuaixun"), "id"), "html", null, true);
            echo "\"><span>[置顶]</span>";
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "kuaixun"), "title"), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t";
        if (isset($context["kuaixun"])) { $_kuaixun_ = $context["kuaixun"]; } else { $_kuaixun_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_kuaixun_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 37
            echo "                    <li>
\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "category_id"), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</a>
\t\t\t\t\t<span class=\"date\">";
            // line 39
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "date"), "html", null, true);
            echo "</span>
                    </li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </ul>
                 <ul class=\"same message_in\">
\t\t\t\t\t";
        // line 44
        if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
        if ($this->getAttribute($_top_, "inform")) {
            // line 45
            echo "\t\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "inform"), "category_id"), "html", null, true);
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "inform"), "id"), "html", null, true);
            echo "\"><span>[置顶]</span>";
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "inform"), "title"), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t ";
        if (isset($context["inform"])) { $_inform_ = $context["inform"]; } else { $_inform_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_inform_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 50
            echo "                    <li>
\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "category_id"), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</a>
\t\t\t\t\t<span class=\"date\">";
            // line 52
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "date"), "html", null, true);
            echo "</span>
                    </li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </ul>
            </div>
            <div class=\"relevance\">
                <div class=\"title\">
                    <span></span><p>相关链接</p>
                </div>
                <ul class=\"same\">
        <li><a href=\"http://tiaozhanbei.net\">挑战杯官网</a></li>
                    <li><a href=\"http://www.gdut.edu.cn/\">广东工业大学官网</a></li>
                    <li><a href=\"http://www.ust.hk/gb/\">香港科技大学官网</a></li>
                </ul>
            </div>    
        </div>
        <div id=\"medium\">
            <div class=\"title\">
\t\t\t\t<span></span><p>媒体聚焦</p><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("list/4")), "html", null, true);
        echo "\">more&gt;&gt;</a>
            </div>
            <ul class=\"same\">
\t\t\t\t";
        // line 73
        if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
        if ($this->getAttribute($_top_, "medium")) {
            // line 74
            echo "\t\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 75
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "medium"), "category_id"), "html", null, true);
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "medium"), "id"), "html", null, true);
            echo "\"><span>[置顶]</span>";
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "medium"), "title"), "html", null, true);
            echo "</a>
\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t";
        if (isset($context["medium"])) { $_medium_ = $context["medium"]; } else { $_medium_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_medium_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 79
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "category_id"), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </ul>
        </div>
        <div id=\"contest\">
            <div class=\"title\">
\t\t\t\t<span></span><p>竞赛花絮</p><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("list/5")), "html", null, true);
        echo "\">more&gt;&gt;</a>
            </div>
            <ul class=\"same\">
\t\t\t\t";
        // line 88
        if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
        if ($this->getAttribute($_top_, "competition")) {
            // line 89
            echo "\t\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 90
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "competition"), "category_id"), "html", null, true);
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "competition"), "id"), "html", null, true);
            echo "\"><span>[置顶]</span>";
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_top_, "competition"), "title"), "html", null, true);
            echo "</a>
\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t";
        if (isset($context["competition"])) { $_competition_ = $context["competition"]; } else { $_competition_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_competition_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 94
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "category_id"), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            </ul>
        </div>
        <div id=\"project\">
            <div class=\"title\">
\t\t\t\t<span></span><p>项目展示</p><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("pro_list")), "html", null, true);
        echo "\">more&gt;&gt;</a>
            </div>
        <ul>
\t\t\t";
        // line 103
        if (isset($context["projects"])) { $_projects_ = $context["projects"]; } else { $_projects_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_projects_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 104
            echo "                <li>
\t\t\t\t<a href=\"";
            // line 105
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("pro")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 107
            echo "\t\t\t\t\t<img src=";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "src");
            echo ">
\t\t\t\t\t";
            // line 109
            echo "\t\t\t    \t<p class=\"introduce\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</p>
                </a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            </ul>
        </div>
        <div id=\"video\">
            <div class=\"title\">
                <span></span><p>影音专区</p><a href=\"\">more&gt;&gt;</a>
            </div>
            <object id=\"ssss\" width=\"314px\" height=\"251px\" ><param name=\"allowScriptAccess\" value=\"always\" /><embed pluginspage=\"http://www.macromedia.com/go/getflashplayer\" src=\"http://you.video.sina.com.cn/api/sinawebApi/outplayrefer.php/vid=122893119_2791548852_aBqySHM4C2PK+l1lHz2stqlF+6xCpv2xhGizslOhIQZRUA6YJMXNb9wF4iHfA85D+HoLHcwydPwk3xQuaatR/s.swf\" type=\"application/x-shockwave-flash\" flashvars=\"autoPlay=0\" name=\"ssss\" allowFullScreen=\"true\" allowScriptAccess=\"always\" width=\"314px\"  height=\"251px\"></embed></object>
        </div>
        <div id=\"jornal\">
            <div class=\"title\">
                <span></span><p>挑战杯特刊</p><a href=\"\">more&gt;&gt;</a>
            </div>
            <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("special")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("images/news.jpg")), "html", null, true);
        echo "\">
            </a>
            <a href=\"";
        // line 128
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("special")), "html", null, true);
        echo "\">
                <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("images/news.jpg")), "html", null, true);
        echo "\">
            </a>       
        </div>
    </div>
";
    }

    // line 135
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 135,  417 => 129,  413 => 128,  408 => 126,  404 => 125,  390 => 113,  378 => 109,  372 => 107,  365 => 105,  362 => 104,  357 => 103,  351 => 100,  345 => 96,  327 => 94,  321 => 93,  307 => 90,  304 => 89,  301 => 88,  295 => 85,  289 => 81,  271 => 79,  265 => 78,  251 => 75,  248 => 74,  245 => 73,  239 => 70,  222 => 55,  212 => 52,  199 => 51,  196 => 50,  190 => 49,  176 => 46,  173 => 45,  170 => 44,  166 => 42,  156 => 39,  143 => 38,  140 => 37,  134 => 36,  119 => 33,  116 => 32,  113 => 31,  107 => 28,  99 => 22,  89 => 20,  85 => 19,  81 => 17,  75 => 16,  58 => 14,  54 => 13,  49 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
