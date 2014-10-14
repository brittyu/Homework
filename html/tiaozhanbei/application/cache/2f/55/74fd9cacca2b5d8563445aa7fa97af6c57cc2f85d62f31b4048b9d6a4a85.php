<?php

/* url.html */
class __TwigTemplate_2f5574fd9cacca2b5d8563445aa7fa97af6c57cc2f85d62f31b4048b9d6a4a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <div id=\"content\">
       <p class=\"position\">
            您现在的位置：
\t    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("")), "html", null, true);
        echo "\">首页 </a>
\t    <span>&gt;&gt;</span>
\t\t";
        // line 6
        if (isset($context["page_name"])) { $_page_name_ = $context["page_name"]; } else { $_page_name_ = null; }
        if (twig_in_filter($_page_name_, array(0 => "news", 1 => "inform", 2 => "new_post", 3 => "list"))) {
            // line 7
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("news")), "html", null, true);
            echo "\">新闻宣传</a>
\t\t";
        } else {
            // line 9
            echo "\t    <a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p/9/28")), "html", null, true);
            echo "\">走进挑战杯</a>
\t\t";
        }
        // line 11
        echo "\t\t";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if ($_category_) {
            // line 12
            echo "\t    <span>&gt;&gt;</span>
\t    <a class='red' href='#'>";
            // line 13
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "category"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 15
        echo "       </p>
";
    }

    public function getTemplateName()
    {
        return "url.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  44 => 11,  38 => 9,  24 => 4,  19 => 1,  62 => 14,  56 => 12,  51 => 13,  48 => 12,  45 => 8,  42 => 7,  39 => 6,  32 => 7,  29 => 6,);
    }
}
