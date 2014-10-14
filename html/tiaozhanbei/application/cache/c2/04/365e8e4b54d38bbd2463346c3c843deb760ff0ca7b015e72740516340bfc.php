<?php

/* news.html */
class __TwigTemplate_c204365e8e4b54d38bbd2463346c3c843deb760ff0ca7b015e72740516340bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.html");

        $this->blocks = array(
            'stylesheet_or_script' => array($this, 'block_stylesheet_or_script'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/news.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->env->loadTemplate("url.html")->display($context);
        // line 9
        echo "       <div class=\"left_news\">
            <div>
                <div class=\"title\">
\t\t<span></span><p>活动快讯</p><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("list/6")), "html", null, true);
        echo "\">more&gt;&gt;</a>
                </div>
                <ul class=\"same\">
\t\t\t\t\t";
        // line 15
        if (isset($context["kuaixun"])) { $_kuaixun_ = $context["kuaixun"]; } else { $_kuaixun_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_kuaixun_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            echo "\t\t\t\t\t<li><a href=\"";
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
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </ul>
            </div>
            <div>
                <div class=\"title\">
\t\t<span></span><p>媒体聚焦</p><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("list/4")), "html", null, true);
        echo "\">more&gt;&gt;</a>
                </div>
                <ul class=\"same\">
\t\t\t\t\t";
        // line 25
        if (isset($context["medium"])) { $_medium_ = $context["medium"]; } else { $_medium_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_medium_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 26
            echo "\t\t\t\t\t<li><a href=\"";
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
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </ul>
            </div>    
            <div class=\"news_contest\">
                <div class=\"title\">
\t\t<span></span><p>竞赛花絮</p><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("list/5")), "html", null, true);
        echo "\">more&gt;&gt;</a>
                </div>
                <ul class=\"same\">
\t\t\t\t\t";
        // line 35
        if (isset($context["competition"])) { $_competition_ = $context["competition"]; } else { $_competition_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_competition_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 36
            echo "\t\t\t\t\t<li><a href=\"";
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
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </ul>
            </div> 
            <div class=\"news_active\">
                <div class=\"title\">
\t\t<span></span><p>通知公告</p><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("list/2")), "html", null, true);
        echo "\">more&gt;&gt;</a>
                </div>
\t\t<ul class=\"same\">
\t\t\t";
        // line 45
        if (isset($context["inform"])) { $_inform_ = $context["inform"]; } else { $_inform_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_inform_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 46
            echo "\t\t\t<li><a href=\"";
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
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t</ul>
            </div>           
        </div>
        <div class=\"right_news\">
             <div class=\"title\">
\t     <span></span><p>挑战特刊</p><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("special")), "html", null, true);
        echo "\">more&gt;&gt;</a>
             </div>
             <div class=\"paper\">
                <a href=\"http://xbw.gdut.edu.cn/digitalnews/Content.aspx?id=9902\">
                    <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("images/news.jpg")), "html", null, true);
        echo "\">
                </a>
                <p>广东工业大学挑战杯特刊1</p>
             </div>
             <div class=\"paper\">
                 <a href=\"http://xbw.gdut.edu.cn/digitalnews/Content.aspx?id=9976\">
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("images/news.jpg")), "html", null, true);
        echo "\">
                </a>
                <p>广东工业大学挑战杯特刊2</p>
             </div>
                
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "news.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 63,  198 => 57,  191 => 53,  184 => 48,  166 => 46,  161 => 45,  155 => 42,  149 => 38,  131 => 36,  126 => 35,  120 => 32,  114 => 28,  96 => 26,  91 => 25,  85 => 22,  79 => 18,  61 => 16,  56 => 15,  50 => 12,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
