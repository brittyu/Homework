<?php

/* backend/index.html */
class __TwigTemplate_65e28e925bf51edb8b6164ea75616fd91e4b035ae27239744f2d360466bef639 extends Twig_Template
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
                <!-- 模块名字 -->
                <header id=\"module-name\">
                    <h1>欢迎, 管理猿</h1>
                </header>
                <!-- 模块内容 -->
                <article id=\"module-content\">
                    <ul class=\"badges\">
\t\t\t\t\t\t";
        // line 13
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/page")), "html", null, true);
            echo "/";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id"), "html", null, true);
            echo "\"class=\"badge\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "category"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t\t\t\t<li><a class=\"badge\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/project_list")), "html", null, true);
        echo "\">项目展示</a></li>
                    </ul>
                </article>
            </section>
\t";
    }

    public function getTemplateName()
    {
        return "backend/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  48 => 14,  43 => 13,  31 => 3,  28 => 2,);
    }
}
