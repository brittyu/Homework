<?php

/* backend/update.html */
class __TwigTemplate_be133d2eb42cfd905479577dc902cbe3129b0abcd19d6868c5a103a0b3ec0be2 extends Twig_Template
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
        echo "        <script type=\"text/javascript\" src=\"";
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

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "        <section id=\"dashboard\" class=\"pure-g grid\">
            <section id=\"main\" class=\"pure-u-3-4\">
                <!-- 模块名字 -->
                <header id=\"module-name\">
\t\t\t\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/page")), "html", null, true);
        echo "/";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "category_id"), "html", null, true);
        echo "\"><h1>";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "category"), "html", null, true);
        echo "</h1></a>
                </header>
                <!-- 模块内容 -->
                <article id=\"module-content\">
\t\t\t\t\t<form class=\"pure-form pure-form-aligned\" method=\"post\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/update_post")), "html", null, true);
        echo "/";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "id"), "html", null, true);
        echo "\"/>
                    <div class=\"pure-control-group\">
\t\t\t\t\t\t<label for=\"title\">标题</label>
\t\t\t\t\t\t<input type=\"text\" class=\"pure-u-1-2\" value=\"";
        // line 24
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "title"), "html", null, true);
        echo "\" name=\"title\"/>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"zhiding\"/>置顶
                        <input type=\"checkbox\" name=\"picture\"/>图片文章?
\t\t\t\t\t\t<input type=\"hidden\" value=\"";
        // line 27
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "category_id"), "html", null, true);
        echo "\" name=\"category_id\"/>
                    </div>
                    <div class=\"pure-control-group\">
\t\t\t\t\t\t<label for=\"content\">内容</label>
                        <textarea class=\"pure-u-1-2\" id=\"editor_id\" name=\"content\" style=\"width: 700px;height:300px;\"/>";
        // line 31
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "content"), "html", null, true);
        echo "</textarea>
\t\t\t\t    </div>

                    <div class=\"pure-controls\">
\t\t\t\t\t\t<button class=\"pure-button pure-button-primary\" type=\"submit\">更新</button>
                    </div>
\t\t\t\t</form>
                </article>
            </section>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/update.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  86 => 27,  79 => 24,  70 => 21,  57 => 17,  51 => 13,  48 => 12,  37 => 4,  32 => 3,  29 => 2,);
    }
}
