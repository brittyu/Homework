<?php

/* backend/alter_project.html */
class __TwigTemplate_346cb8a2608106047864654fea4b176c3290f164e6d22be5866bf48bb748ae36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("backend/templateP.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/templateP.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "        <section id=\"dashboard\" class=\"pure-g grid\">
            <section id=\"main\" class=\"pure-u-3-4\">
\t\t\t\t<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/project_list")), "html", null, true);
        echo "\"><h1>项目展示</h1></a>
                </header>
                <!-- 模块内容 -->
                <article id=\"module-content\">
\t\t\t\t\t<form class=\"pure-form pure-form-aligned\" method=\"post\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("backend/posts/alter_pro")), "html", null, true);
        echo "/";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
        echo "\"/>
                    <div class=\"pure-control-group\">
\t\t\t\t\t\t<label for=\"title\">标题</label>
\t\t\t\t\t\t<input type=\"text\" class=\"pure-u-1-2\" value=\"";
        // line 12
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
        echo "\" name=\"title\"/>
                    </div>
\t\t\t\t\t<div class=\"pure-control-group\">
\t\t\t\t\t<label for=\"larger\">大类</label>
\t\t\t\t\t<select name=\"larger\">
\t\t\t\t\t\t<option value=\"";
        // line 17
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "larger"), "id"), "html", null, true);
        echo "\">";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "larger"), "category"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t";
        // line 18
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (($this->getAttribute($this->getAttribute($_post_, "larger"), "id") == 12)) {
            // line 19
            echo "\t\t\t\t\t\t<option value=\"13\">哲学社会科学</option>
\t\t\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t\t<option value=\"12\">自然科学</option>
\t\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<label for=\"little\">小类</label>
\t\t\t\t\t<select name=\"little\">
\t\t\t\t\t\t<option value=\"";
        // line 26
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "little"), "id"), "html", null, true);
        echo "\">";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "little"), "category"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t";
        // line 27
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (($this->getAttribute($this->getAttribute($_post_, "little"), "id") == 14)) {
            // line 28
            echo "\t\t\t\t\t\t<option value=\"14\">科学发明制作A类</option>
\t\t\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t\t\t<option value=\"15\">科学发明制作B类</option>
\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>

                    <div class=\"pure-control-group\">
\t\t\t\t\t\t<label for=\"content\">简介</label>
\t\t\t\t\t\t<textarea  name=\"intro\" cols=\"60\" rows=\"7\"/>";
        // line 37
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "intro"), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t<label for=\"detail\">详细介绍</label>
\t\t\t\t\t\t<textarea  name=\"detail\" cols=\"60\" rows=\"7\">";
        // line 39
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "detail"), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t<label for=\"award\">获奖情况</label>
\t\t\t\t\t\t<textarea name=\"award\"cols=\"60\" rows=\"7\">";
        // line 41
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "award"), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t<label for=\"pict\">图片链接</label>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 44
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_post_, "src"));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 45
            echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t<input type=\"text\" class=\"pure-u-1-2\" name=\"src";
            // line 46
            if (isset($context["picture"])) { $_picture_ = $context["picture"]; } else { $_picture_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_picture_, "src_id"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["picture"])) { $_picture_ = $context["picture"]; } else { $_picture_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_picture_, "src"), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t</div>
\t    \t\t\t</div>
                    <div class=\"pure-controls\">
\t\t\t\t\t\t<button class=\"pure-button pure-button-primary\" type=\"submit\">更新</button>
                    </div>
\t\t\t\t</form>
\t\t\t</article>
            </section>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/alter_project.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  137 => 46,  134 => 45,  129 => 44,  122 => 41,  116 => 39,  110 => 37,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  84 => 26,  79 => 23,  75 => 21,  71 => 19,  68 => 18,  60 => 17,  51 => 12,  42 => 9,  35 => 5,  31 => 3,  28 => 2,);
    }
}
