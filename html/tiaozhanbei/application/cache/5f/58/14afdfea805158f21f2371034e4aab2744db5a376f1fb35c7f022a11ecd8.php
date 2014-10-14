<?php

/* example.html */
class __TwigTemplate_5f5814afdfea805158f21f2371034e4aab2744db5a376f1fb35c7f022a11ecd8 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/example.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"content\">
        <p class=\"position\">
            您现在的位置：
            <a href=\"\">首页</a>
            <span>&gt;&gt;</span>
\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("pro_list")), "html", null, true);
        echo "\">项目展示</a>
            <span>&gt;&gt;</span>
            <a  class=\"red\" href=\"\">优秀案例</a>
        </p>
        <div class=\"exa_left\">
            <p class=\"exa_h\">基本信息</p>
            <div class=\"name\">
                <h4>作品名称:</h4>
\t\t<p>";
        // line 21
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
        echo "</p>
            </div>
             <div class=\"b_str\">
                <h4>大类:</h4>
\t\t<p>";
        // line 25
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "larger"), "html", null, true);
        echo "</p>
            </div>
             <div class=\"s_str\">
                <h4>小类:</h4>
\t\t<p>";
        // line 29
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "little"), "html", null, true);
        echo "</p>
            </div>
             <div class=\"brief\">
                <h4>简介:</h4>
\t\t<p>";
        // line 33
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "intro"), "html", null, true);
        echo "</p>
            </div>
             <div class=\"detail\">
                <h4>详细介绍:</h4>
\t\t<p>";
        // line 37
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "detail"), "html", null, true);
        echo "</p>
            </div>
             <div class=\"prize\">
                <h4>获奖情况:</h4>
\t\t<p>";
        // line 41
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "award"), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"exa_right\">
            <p class=\"exa_p\">作品图片</p>
            <ul>
\t\t\t\t";
        // line 47
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_post_, "src"));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 48
            echo "\t\t\t\t";
            // line 49
            echo "\t\t\t\t<li><img src=\"";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo $this->getAttribute($_photo_, "src");
            echo "\"></li>
\t\t\t\t";
            // line 51
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </ul>
        </div>     
    </div>    
\t";
    }

    public function getTemplateName()
    {
        return "example.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 52,  123 => 51,  117 => 49,  115 => 48,  110 => 47,  100 => 41,  92 => 37,  84 => 33,  76 => 29,  68 => 25,  60 => 21,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
