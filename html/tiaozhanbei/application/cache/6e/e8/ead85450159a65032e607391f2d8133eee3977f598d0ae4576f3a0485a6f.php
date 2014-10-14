<?php

/* backend/project_list.html */
class __TwigTemplate_6ee8ead85450159a65032e607391f2d8133eee3977f598d0ae4576f3a0485a6f extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/project_list")), "html", null, true);
        echo "\"><h1>项目展示</h1></a>
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/add_project")), "html", null, true);
        echo "\">创建</a>
                        </section>
                    </div>
                    <table class=\"list pure-table pure-table-horizontal\">
                        <thead>
                            <tr>
                                <th class=\"larger\">标题</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
\t\t\t\t\t\t";
        // line 27
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 28
            echo "                            <tr>
                                <td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/project")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</a>
                                </td>
                                <td>
\t\t\t\t\t\t\t\t\t<a class=\"pure-button pure-button-primary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/alter_project")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">修改</a>
\t\t\t\t<a class=\"pure-button pure-button-error\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/del_project")), "html", null, true);
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
        // line 38
        echo "                        </tbody>
                    </table>
                </article>
\t\t    <div class=\"page_link\">
\t\t\t<ul>
\t\t\t\t";
        // line 44
        echo "\t\t\t\t";
        echo call_user_func_array($this->env->getFunction('pagination')->getCallable(), array());
        echo "
\t\t\t\t";
        // line 46
        echo "\t\t\t</ul>
\t\t    </div>
            </section>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/project_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 46,  115 => 44,  108 => 38,  95 => 34,  88 => 33,  76 => 30,  72 => 28,  67 => 27,  53 => 16,  46 => 13,  37 => 7,  31 => 3,  28 => 2,);
    }
}
