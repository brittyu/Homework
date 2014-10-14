<?php

/* backend/project_categories.html */
class __TwigTemplate_513e78bf44f49f25958aa42a82ed78b8e259fbe1429cdae2c582c82815de2605 extends Twig_Template
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
                    <h1>所有项目展示分类</h1>
                </header>
                <!-- 模块内容 -->
                <article id=\"module-content\">
                    <div class=\"inner pure-g\">
                        <div id=\"module-meta\" class=\"pure-u-2-3\">
                            <p>大类</p>
                        </div>
                    </div>
                    <table class=\"list pure-table pure-table-horizontal\">
                        <thead>
                            <tr>
                                <th class=\"larger\">类名</th>
                                <th>---------</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        if (isset($context["larger"])) { $_larger_ = $context["larger"]; } else { $_larger_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_larger_);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "                            <tr>
                                <td>
                                    <a href=\"#\">";
            // line 28
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "category"), "html", null, true);
            echo "</a>
                                </td>
                                <td>---------</td>
                                <td>
                                    <a class=\"pure-button pure-button-primary\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/show_project_category")), "html", null, true);
            echo "/";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id"), "html", null, true);
            echo "\">修改</a>
                                    <a class=\"pure-button pure-button-error\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/delete_category")), "html", null, true);
            echo "/";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id"), "html", null, true);
            echo "\">删除</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </tbody>
                    </table>
                    <form method=\"POST\" class=\"pure-form pure-form-aligned\" action=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/add_project_category")), "html", null, true);
        echo "\">
                        <div class=\"pure-control-group\">
                            <label for=\"category\">分类名</label>
                            <input type=\"text\" name=\"category\" class=\"pure-u-1-2\"/>
                            <input type=\"hidden\" value=\"1\" name=\"is_larger\"/>
                        </div>
                        <div class=\"pure-controls\">
                            <button class=\"pure-button pure-button-primary\" type=\"submit\">添加大类</button>
                        </div>
                    </form>
                    <div class=\"inner pure-g\">
                        <div id=\"module-meta\" class=\"pure-u-2-3\">
                            <p>小类</p>
                        </div>
                    </div>
                    <table class=\"list pure-table pure-table-horizontal\">
                        <thead>
                            <tr>
                                <th class=\"larger\">类名</th>
                                <th>---------</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 63
        if (isset($context["little"])) { $_little_ = $context["little"]; } else { $_little_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_little_);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 64
            echo "                            <tr>
                                <td>
                                    <a href=\"#\">";
            // line 66
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "category"), "html", null, true);
            echo "</a>
                                </td>
                                <td>----------</td>
                                <td>
                                    <a class=\"pure-button pure-button-primary\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/show_project_category")), "html", null, true);
            echo "/";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id"), "html", null, true);
            echo "\">修改</a>
                                    <a class=\"pure-button pure-button-error\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/delete_category")), "html", null, true);
            echo "/";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id"), "html", null, true);
            echo "\">删除</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                        </tbody>
                    </table>
                    <form method=\"POST\" class=\"pure-form pure-form-aligned\" action=\"";
        // line 77
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/add_project_category")), "html", null, true);
        echo "\">
                        <div class=\"pure-control-group\">
                            <label for=\"category\">分类名</label>
                            <input type=\"text\" name=\"category\" class=\"pure-u-1-2\"/>
                            <input type=\"hidden\" value=\"0\"/>
                        </div>
                        <div class=\"pure-controls\">
                            <button class=\"pure-button pure-button-primary\" type=\"submit\">添加小类</button>
                        </div>
                    </form>
                </article>
            </section>
    ";
    }

    public function getTemplateName()
    {
        return "backend/project_categories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 77,  160 => 75,  147 => 71,  140 => 70,  132 => 66,  128 => 64,  123 => 63,  96 => 39,  92 => 37,  79 => 33,  72 => 32,  64 => 28,  60 => 26,  55 => 25,  31 => 3,  28 => 2,);
    }
}
