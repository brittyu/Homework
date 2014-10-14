<?php

/* backend/add.html */
class __TwigTemplate_c7116d092be5f52e1348d90061ab9e6c6933a4e5a38940b335b882495cf4fdd3 extends Twig_Template
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
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("kindeditor/kindeditor.js")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("kindeditor/lang/zh_CN.js")), "html", null, true);
        echo "\"></script>
    <script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
                });
    </script>
    ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        <!--Alert消息模块-->
        <div class=\"alert alert-warning alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            <strong>Hi,管理猿!</strong> 
        </div>
        <section id=\"dashboard\" class=\"pure-g grid\">
            <section id=\"main\" class=\"pure-u-3-4\">
                <!-- 模块名字 -->
                <header id=\"module-name\">
\t\t\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/page")), "html", null, true);
        echo "/";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_category_, 0, array(), "array"), "id"), "html", null, true);
        echo "\"><h1>";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_category_, 0, array(), "array"), "category"), "html", null, true);
        echo "</h1></a>
                </header>
                <!-- 模块内容 -->
                <article id=\"module-content\">
\t\t\t\t\t<form class=\"pure-form pure-form-aligned\" method=\"post\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/add_post")), "html", null, true);
        echo "\"/>
                    <div class=\"pure-control-group\">
\t\t\t\t\t\t<label for=\"title\">标题</label>
\t\t\t\t\t\t<input type=\"text\" name=\"title\" class=\"pure-u-1-2\"/>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"zhiding\"/>置顶
                        <input type=\"checkbox\" name=\"picture\"/>图片文章?
\t\t\t\t\t\t<input type=\"hidden\" name=\"category_id\" value=\"";
        // line 31
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_category_, 0, array(), "array"), "id"), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"pure-control-group\">
\t\t\t\t\t\t<label for=\"content\">内容</label>
\t\t\t\t\t\t<textarea class=\"pure-u-1-2\" id=\"editor_id\" name=\"content\" style=\"width: 700px;height:300px;\"/></textarea>
\t\t    \t\t</div>

                    <div class=\"pure-controls\">
\t\t\t\t\t\t<button class=\"pure-button pure-button-primary\" type=\"submit\">提交</button>
                    </div>
\t\t\t\t</form>
                </article>
            </section>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  75 => 25,  62 => 21,  51 => 12,  48 => 11,  37 => 4,  32 => 3,  29 => 2,);
    }
}
