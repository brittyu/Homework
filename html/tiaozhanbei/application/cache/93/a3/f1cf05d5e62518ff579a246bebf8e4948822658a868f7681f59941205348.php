<?php

/* brief.html */
class __TwigTemplate_93a3f1cf05d5e62518ff579a246bebf8e4948822658a868f7681f59941205348 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/brief.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        $this->env->loadTemplate("url.html")->display($context);
        // line 9
        $this->env->loadTemplate("intro_left.html")->display($context);
        // line 10
        echo "       <div class=\"right_brief\">
\t\t   <h2>";
        // line 11
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "title"), "html", null, true);
        echo "</h2>
\t\t   ";
        // line 13
        echo "\t\t   <p>";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "content");
        echo "</p>
\t\t   ";
        // line 15
        echo "       </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "brief.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  54 => 13,  49 => 11,  46 => 10,  44 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
