<?php

/* backend/user_list.html */
class __TwigTemplate_f67d5c3db4316944db12243f97af1b6b0f22d696eeca8c6fe7d53efe5197dfb4 extends Twig_Template
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
                <article id=\"module-content\">
                    <div class=\"inner pure-g\">
                        <div id=\"module-meta\" class=\"pure-u-2-3\">
\t\t\t\t\t\t\t<p>一共有 ";
        // line 8
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        echo twig_escape_filter($this->env, $_count_, "html", null, true);
        echo " 个用户</p>
                        </div>
                        <section id=\"module-op\" class=\"pure-u-1-3\">
\t\t\t\t\t\t\t<a class=\"pure-button pure-button-success pull-right\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('site_url')->getCallable(), array("")), "html", null, true);
        echo "\">hello~</a>
                        </section>
                    </div>
                    <table class=\"list pure-table pure-table-horizontal\">
                        <thead>
                            <tr>
                                <th class=\"larger\">编号</th>
                                <th>用户名</th>
                            </tr>
                        </thead>
                        <tbody>
\t\t\t\t\t\t";
        // line 22
        if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_username_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "                            <tr>
                                <td>
\t\t\t\t\t\t\t\t\t<a href=\"\">";
            // line 25
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "uid"), "html", null, true);
            echo "</a>
                                </td>
\t\t\t\t\t\t\t\t<td>";
            // line 27
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"), "html", null, true);
            echo "</td>
                                <td>
                                </td>
\t\t\t    </tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </tbody>
                    </table>
                </article>
            </section>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "backend/user_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  74 => 27,  68 => 25,  64 => 23,  59 => 22,  45 => 11,  38 => 8,  31 => 3,  28 => 2,);
    }
}
