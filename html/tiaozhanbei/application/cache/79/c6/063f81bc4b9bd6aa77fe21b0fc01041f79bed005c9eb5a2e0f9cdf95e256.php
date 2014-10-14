<?php

/* introduce.html */
class __TwigTemplate_79c6063f81bc4b9bd6aa77fe21b0fc01041f79bed005c9eb5a2e0f9cdf95e256 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('static_url')->getCallable(), array("styles/introduce.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $this->env->loadTemplate("url.html")->display($context);
        // line 7
        $this->env->loadTemplate("intro_left.html")->display($context);
        // line 8
        echo "
       <div class=\"right_introduce\">
\t<ul id=\"circle\">
\t    <!--验证是哪篇文章-->
\t\t";
        // line 12
        $context["i"] = 1;
        // line 13
        echo "\t\t";
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 14
            echo "\t\t<li><a ";
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($this->getAttribute($_p_, "id") == $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "id"))) {
                echo "class = \"bac_blue\"";
            }
            echo "href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_category_, "id"), "html", null, true);
            echo "/";
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "cid"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>
\t\t\t<h2>";
        // line 17
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "title"), "html", null, true);
        echo "</h2>
            <p>
\t\t\t";
        // line 20
        echo "\t\t\t";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($this->getAttribute($_post_, 0, array(), "array"), "content");
        echo "
\t\t\t";
        // line 22
        echo "            </p>

       </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "introduce.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  93 => 20,  87 => 17,  84 => 16,  60 => 14,  54 => 13,  52 => 12,  46 => 8,  44 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
