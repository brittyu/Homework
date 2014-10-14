<?php

/* news_post.html */
class __TwigTemplate_6b73d4de1768532b1fe38030a0a7cab935993725d5468e5f6d2a7a5e57921ebb extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/brief.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->env->loadTemplate("url.html")->display($context);
        // line 8
        echo "\t";
        $this->env->loadTemplate("left.html")->display($context);
        // line 9
        echo "       <div class=\"right_brief\">
\t\t   <h2>";
        // line 10
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "title"), "html", null, true);
        echo "</h2>
\t\t   ";
        // line 12
        echo "\t\t   <p>";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "content");
        echo "</p>
\t\t   ";
        // line 14
        echo "       </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "news_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  56 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
