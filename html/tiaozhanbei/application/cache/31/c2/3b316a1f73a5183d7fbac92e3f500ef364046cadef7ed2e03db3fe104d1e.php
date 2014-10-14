<?php

/* project.html */
class __TwigTemplate_31c23b316a1f73a5183d7fbac92e3f500ef364046cadef7ed2e03db3fe104d1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.html");

        $this->blocks = array(
            'stylesheet_or_script' => array($this, 'block_stylesheet_or_script'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/project.css")), "html", null, true);
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
            <a href=\"\">首页</a>
            <span>&gt;&gt;</span>
            <a href=\"\">项目展示</a>
       </p>
        <p class=\"pro_h\">优秀作品展示</p>
\t\t";
        // line 14
        if (isset($context["result"])) { $_result_ = $context["result"]; } else { $_result_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_result_);
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 15
            echo "        <div class=\"pro\">
\t\t\t";
            // line 17
            echo "\t\t\t<img src=";
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo $this->getAttribute($_project_, "src");
            echo ">
\t\t\t";
            // line 19
            echo "\t    <div>
\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("pro")), "html", null, true);
            echo "/";
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "id"), "html", null, true);
            echo "\">
\t\t\t\t<h4>";
            // line 21
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "title"), "html", null, true);
            echo "</h4>
\t\t</a>
\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("pro")), "html", null, true);
            echo "/";
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "id"), "html", null, true);
            echo "\">
\t\t\t<p>";
            // line 24
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "intro"), "html", null, true);
            echo "</p>
\t\t</a>
\t    </div>
        </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            <div class=\"left_footer\">
                <ul >
\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t";
        echo call_user_func_array($this->env->getFunction('pagination')->getCallable(), array());
        echo "
\t\t\t\t\t";
        // line 34
        echo "                </ul>
            </div>    
\t</div>
    </div>
";
    }

    // line 39
    public function block_script($context, array $blocks = array())
    {
        // line 40
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("scripts/text_overflow.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("scripts/nav.js")), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "project.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 41,  122 => 40,  119 => 39,  111 => 34,  106 => 32,  102 => 29,  90 => 24,  83 => 23,  77 => 21,  70 => 20,  67 => 19,  61 => 17,  58 => 15,  53 => 14,  43 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
