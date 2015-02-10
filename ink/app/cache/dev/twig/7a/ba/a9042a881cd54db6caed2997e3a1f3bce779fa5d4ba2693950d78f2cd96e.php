<?php

/* ::base.html.twig */
class __TwigTemplate_7abaa9042a881cd54db6caed2997e3a1f3bce779fa5d4ba2693950d78f2cd96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - Home</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/semantic.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/my.css"), "html", null, true);
        echo "\"/>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/semantic.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>
<body>

";
        // line 17
        $this->displayBlock('nav', $context, $blocks);
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_nav($context, array $blocks = array())
    {
        $this->env->loadTemplate("::nav.html.twig")->display($context);
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  85 => 18,  79 => 17,  74 => 13,  69 => 7,  63 => 20,  61 => 19,  59 => 18,  57 => 17,  52 => 14,  50 => 13,  46 => 12,  40 => 9,  36 => 8,  32 => 7,  24 => 1,);
    }
}
