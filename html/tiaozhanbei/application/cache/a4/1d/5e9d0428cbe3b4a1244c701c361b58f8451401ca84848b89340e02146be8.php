<?php

/* backend/project.html */
class __TwigTemplate_a41d5e9d0428cbe3b4a1244c701c361b58f8451401ca84848b89340e02146be8 extends Twig_Template
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
        </div>
        <section id=\"dashboard\" class=\"pure-g grid\">
            <section id=\"main\" class=\"pure-u-3-4\">
\t\t<!-- 模块名字 -->
        \t<header id=\"module-name\">
\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/project_list")), "html", null, true);
        echo "\"><h1>项目展示</h1></a>
\t        </header>
\t        <!-- 模块内容 -->
                <article id=\"module-content\">
\t\t\t\t\t<h2 align=\"center\">";
        // line 13
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
        echo "</h2>
\t\t<p>
\t\t<h3 align=\"center\">";
        // line 15
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "larger"), "html", null, true);
        echo "</h3>
\t\t<h3 align=\"center\">";
        // line 16
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "little"), "html", null, true);
        echo "</h3>
\t\t</p>
\t\t<p>";
        // line 18
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "intro"), "html", null, true);
        echo "</p>
\t\t<p>";
        // line 19
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "detail"), "html", null, true);
        echo "</p>
\t\t<p>";
        // line 20
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "award"), "html", null, true);
        echo "</P>
\t\t    <h3>项目作品</h3>
\t\t\t";
        // line 23
        echo "\t\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_post_, "src"));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 24
            echo "\t\t\t<img src=\"";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo $this->getAttribute($_photo_, "src");
            echo "\">\";
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t";
        // line 27
        echo "                </article>
            </section>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/project.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  95 => 26,  85 => 24,  79 => 23,  73 => 20,  68 => 19,  63 => 18,  57 => 16,  52 => 15,  46 => 13,  39 => 9,  31 => 3,  28 => 2,);
    }
}
