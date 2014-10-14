<?php

/* special.html */
class __TwigTemplate_eca6fada4981a7a413cb39d18665b093b2d4df56fca6772ea6746b9c369eff81 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/special.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"content\">
       <p class=\"position\">
            您现在的位置：
            <a href=\"\">首页 </a>
            <span>&gt;&gt;</span>
            <a class=\"red\" href=\"\">挑战特刊</a>
       </p>
\t   ";
        // line 13
        $this->env->loadTemplate("left.html")->display($context);
        // line 14
        echo "       <div class=\"middle_special\">
            <div></div>
\t    <a href=\"http://xbw.gdut.edu.cn/digitalnews/Content.aspx?id=9902\">
\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("images/news.jpg")), "html", null, true);
        echo "\">           
            </a>    
             <a href=\"http://xbw.gdut.edu.cn/digitalnews/Content.aspx?id=9976\">
\t\t\t\t <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("images/news.jpg")), "html", null, true);
        echo "\">        
            </a>   
       </div>
       <div class=\"right_special\">
             <div class=\"title\">
\t\t\t\t <span></span><p>项目展示</p><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("pro_list")), "html", null, true);
        echo "\">more&gt;&gt;</a>
             </div>
\t\t\t ";
        // line 27
        if (isset($context["projects"])) { $_projects_ = $context["projects"]; } else { $_projects_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_projects_);
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 28
            echo "             <div class=\"paper\">
\t\t\t\t <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("pro")), "html", null, true);
            echo "/";
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "id"), "html", null, true);
            echo "\">
\t\t\t\t\t <img src=\"";
            // line 30
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "src"), "html", null, true);
            echo "\">
                </a>
\t\t\t\t<p>";
            // line 32
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "title"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "       </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "special.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  98 => 32,  92 => 30,  85 => 29,  82 => 28,  77 => 27,  72 => 25,  64 => 20,  58 => 17,  53 => 14,  51 => 13,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
