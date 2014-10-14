<?php

/* backend/post.html */
class __TwigTemplate_20ac23cda190b0a528fe49ef6af484004320ba9a81c344e0b510cbc8bcc26641 extends Twig_Template
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
        echo "        <!--Alert消息模块-->
        <section id=\"dashboard\" class=\"pure-g grid\">
            <section id=\"main\" class=\"pure-u-3-4\">
\t\t<!-- 模块名字 -->
        \t<header id=\"module-name\">
\t\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/page")), "html", null, true);
        echo "/";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "category_id"), "html", null, true);
        echo "\"><h1>";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "category"), "html", null, true);
        echo "</h1></a>
\t        </header>
\t        <!-- 模块内容 -->
                <article id=\"module-content\">
\t\t\t\t\t<h2 align=\"center\">";
        // line 12
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "title"), "html", null, true);
        echo "</h2>

\t\t\t\t\t";
        // line 15
        echo "\t\t\t\t\t<p>";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "content");
        echo "</p>
\t\t\t\t\t";
        // line 17
        echo "
\t\t\t\t\t<i>";
        // line 18
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "date"), "html", null, true);
        echo "</i>
                </article>
            </section>
\t\t";
    }

    public function getTemplateName()
    {
        return "backend/post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  63 => 17,  57 => 15,  51 => 12,  38 => 8,  31 => 3,  28 => 2,);
    }
}
