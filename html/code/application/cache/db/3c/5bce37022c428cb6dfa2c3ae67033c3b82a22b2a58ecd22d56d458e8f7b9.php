<?php

/* home.html */
class __TwigTemplate_db3c5bce37022c428cb6dfa2c3ae67033c3b82a22b2a58ecd22d56d458e8f7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.html");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
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
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">

      <div class=\"row row-offcanvas row-offcanvas-right\">

        <div class=\"col-xs-12 col-sm-9\">
          <p class=\"pull-right visible-xs\">
            <button type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"offcanvas\">Toggle nav</button>
          </p>
          <div class=\"jumbotron\">
            <h1>Hello, world!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
          </div>
          <div class=\"row\">
            <div class=\"col-xs-6 col-lg-4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn btn-default\" href=\"http://v3.bootcss.com/examples/offcanvas/#\" role=\"button\">View details »</a></p>
            </div><!--/span-->
            <div class=\"col-xs-6 col-lg-4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn btn-default\" href=\"http://v3.bootcss.com/examples/offcanvas/#\" role=\"button\">View details »</a></p>
            </div><!--/span-->
            <div class=\"col-xs-6 col-lg-4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn btn-default\" href=\"http://v3.bootcss.com/examples/offcanvas/#\" role=\"button\">View details »</a></p>
            </div><!--/span-->
            <div class=\"col-xs-6 col-lg-4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn btn-default\" href=\"http://v3.bootcss.com/examples/offcanvas/#\" role=\"button\">View details »</a></p>
            </div><!--/span-->
            <div class=\"col-xs-6 col-lg-4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn btn-default\" href=\"http://v3.bootcss.com/examples/offcanvas/#\" role=\"button\">View details »</a></p>
            </div><!--/span-->
            <div class=\"col-xs-6 col-lg-4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn btn-default\" href=\"http://v3.bootcss.com/examples/offcanvas/#\" role=\"button\">View details »</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
    ";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
