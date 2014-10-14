<?php

/* backend/posts.html */
class __TwigTemplate_e3358d564848874bf854c899210edb2672170179676a3e931fc025406112cad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("backend/templateP.html");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "        <section id=\"dashboard\" class=\"pure-g grid\">
            <section id=\"main\" class=\"pure-u-3-4\">
                <!-- 模块名字 -->
                <header id=\"module-name\">
\t\t\t\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/page")), "html", null, true);
        echo "/";
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_posts_, 0, array(), "array"), "category_id"), "html", null, true);
        echo "\"><h1>";
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_posts_, 0, array(), "array"), "category"), "html", null, true);
        echo "</h1></a>
                </header>
                <!-- 模块内容 -->
                <article id=\"module-content\">
                    <div class=\"inner pure-g\">
                        <div id=\"module-meta\" class=\"pure-u-2-3\">
\t\t\t\t\t\t\t<p>一共有 ";
        // line 13
        if (isset($context["posts_sum"])) { $_posts_sum_ = $context["posts_sum"]; } else { $_posts_sum_ = null; }
        echo twig_escape_filter($this->env, $_posts_sum_, "html", null, true);
        echo " 篇文章</p>
                        </div>
                        <section id=\"module-op\" class=\"pure-u-1-3\">
\t\t\t\t\t\t\t<a class=\"pure-button pure-button-success pull-right\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/add")), "html", null, true);
        echo "/";
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_posts_, 0, array(), "array"), "category_id"), "html", null, true);
        echo "\">创建</a>
                        </section>
                    </div>
                    <table class=\"list pure-table pure-table-horizontal\">
                        <thead>
                            <tr>
                                <th class=\"larger\">标题</th>
                                <th>发表日期</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
\t\t\t\t\t\t";
        // line 28
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 29
            echo "                            <tr>
                                <td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/post")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</a>
                                </td>
\t\t\t\t\t\t\t\t<td>";
            // line 33
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "date"), "html", null, true);
            echo "</td>
                                <td>
\t\t\t\t\t\t\t\t\t<a class=\"pure-button pure-button-primary\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/update")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">修改</a>
\t\t\t\t\t\t\t\t\t<a class=\"pure-button pure-button-error\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/del_post")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "category_id"), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">删除</a>
                                </td>
\t\t\t    </tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </tbody>
                    </table>
                </article>
\t\t    <div class=\"page_link\">
\t\t\t<ul>
\t\t\t\t";
        // line 46
        echo "\t\t\t\t";
        echo call_user_func_array($this->env->getFunction('pagination')->getCallable(), array());
        echo "
\t\t\t\t";
        // line 48
        echo "\t\t\t</ul>
\t\t    </div>
            </section>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/posts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  133 => 46,  126 => 40,  110 => 36,  103 => 35,  97 => 33,  86 => 31,  82 => 29,  77 => 28,  59 => 16,  52 => 13,  37 => 7,  31 => 3,  28 => 2,);
    }
}
