<?php

/* intro_left.html */
class __TwigTemplate_07ff60b44bf921569a368148f36da7959760e46bf217c87cf834aa0968ec8cec extends Twig_Template
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
        echo "<div class=\"left_brief left_introduce\">
            <ul id=\"leftNav\">
\t\t<!--验证是在哪个分类中,在页面上显示不同的效果-->
\t\t<!--review和其他几个选项在不同的控制器下,分开写;-->
\t\t";
        // line 5
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_list_);
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 6
            echo "\t\t<li><a ";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (($this->getAttribute($_c_, "id") == $this->getAttribute($_category_, "id"))) {
                echo "class = \"bac_blue\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("p")), "html", null, true);
            echo "/";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "category"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </ul>
       </div>
";
    }

    public function getTemplateName()
    {
        return "intro_left.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  30 => 6,  25 => 5,  19 => 1,  99 => 22,  93 => 20,  87 => 17,  84 => 16,  60 => 14,  54 => 13,  52 => 12,  46 => 8,  44 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
