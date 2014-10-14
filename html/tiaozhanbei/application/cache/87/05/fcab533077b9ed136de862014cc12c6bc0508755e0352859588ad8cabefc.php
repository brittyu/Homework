<?php

/* left.html */
class __TwigTemplate_8705fcab533077b9ed136de862014cc12c6bc0508755e0352859588ad8cabefc extends Twig_Template
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
        echo "<div class=\"left_brief left_special left_list\" id=\"leftNav\">
            <ul id=\"leftNav\">
\t\t\t\t";
        // line 3
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_list_);
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 4
            echo "\t\t\t\t<li><a ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            if (($this->getAttribute($_category_, "id") == $this->getAttribute($_c_, "id"))) {
                echo " class=\"bac_blue\" ";
            }
            echo "href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("list")), "html", null, true);
            echo "/";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "category"), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "            </ul>
       </div>

";
    }

    public function getTemplateName()
    {
        return "left.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  28 => 4,  23 => 3,  57 => 15,  44 => 11,  38 => 9,  24 => 4,  19 => 1,  62 => 14,  56 => 12,  51 => 13,  48 => 12,  45 => 8,  42 => 7,  39 => 6,  32 => 7,  29 => 6,);
    }
}
