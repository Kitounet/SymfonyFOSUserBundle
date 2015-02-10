<?php

/* ::nav.html.twig */
class __TwigTemplate_119ca4398c79e7d226d4d9f931c73f30a0b7ae5cc23cea6b6fc2fd4b8aa9d3d8 extends Twig_Template
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
        echo "<div class=\"ui pointing menu\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ink_general_homepage");
        echo "\" class=\"active item\">
        <i class=\"home icon\"></i> Home
    </a>
    <a class=\"item\">
        <i class=\"mail icon\"></i> Messages
    </a>
    <a class=\"item\">
        <i class=\"user icon\"></i> Friends
    </a>
    <div class=\"right menu\">
        <div class=\"item\">
            <div class=\"ui icon input\">
                <input placeholder=\"Search...\" type=\"text\">
                <i class=\"search link icon\"></i>
            </div>
        </div>
        <div class=\"ui dropdown item\">
            <i class=\"dropdown icon\"></i>
            Language
            <div class=\"menu\">
                <a class=\"item\">English</a>
                <a class=\"item\">Russian</a>
                <a class=\"item\">Spanish</a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
