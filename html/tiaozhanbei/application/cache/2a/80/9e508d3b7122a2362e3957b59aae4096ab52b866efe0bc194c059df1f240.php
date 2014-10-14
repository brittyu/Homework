<?php

/* inform.html */
class __TwigTemplate_2a809e508d3b7122a2362e3957b59aae4096ab52b866efe0bc194c059df1f240 extends Twig_Template
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

    // line 2
    public function block_stylesheet_or_script($context, array $blocks = array())
    {
        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/inform.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->env->loadTemplate("url.html")->display($context);
        // line 7
        echo "       <div class=\"left_inform\">
            <div></div>
            <ul class=\"same\">
\t\t\t\t";
        // line 10
        if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_result_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "                <li>
\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id"), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</a>
\t\t\t\t<span class=\"date\">[";
            // line 13
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "date"), "html", null, true);
            echo "]</span>
                </li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>
            <div class=\"left_footer\">
                <ul >
\t\t\t\t\t";
        // line 20
        echo "\t\t\t\t\t";
        echo call_user_func_array($this->env->getFunction('pagination')->getCallable(), array());
        echo "
\t\t\t\t\t";
        // line 22
        echo "                </ul>
            </div>    
       </div>         
       <div class=\"right_inform\">
             <div class=\"title\">
                    <span></span><p>项目展示</p><a href=\"\">more&gt;&gt;</a>
             </div>
\t\t\t ";
        // line 29
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_project_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 30
            echo "             <div class=\"paper\">
\t\t\t\t <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("pro")), "html", null, true);
            echo "/";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\">";
            echo "<img src=\"";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_post_, "src");
            echo "\">";
            echo "</a>
\t\t\t\t <p>";
            // line 32
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</p>
             </div>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "       </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "inform.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 35,  120 => 32,  108 => 31,  105 => 30,  100 => 29,  91 => 22,  86 => 20,  81 => 16,  71 => 13,  58 => 12,  55 => 11,  50 => 10,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
