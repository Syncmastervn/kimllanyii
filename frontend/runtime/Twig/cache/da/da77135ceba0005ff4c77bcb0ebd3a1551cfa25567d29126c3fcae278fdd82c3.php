<?php

/* layout.twig */
class __TwigTemplate_8dad82649f1a297ccb24f709105d7703e206ae767b8b75dbe2805478aee9be62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'asset' => array($this, 'block_asset'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('yii\twig\Extension')->addUses("yii/helpers/Html");
        echo "
";
        // line 2
        $this->env->getExtension('yii\twig\Extension')->addUses("yii/widgets/ActiveForm");
        echo "
";
        // line 3
        $this->env->getExtension('yii\twig\Extension')->addUses("yii/web/JqueryAsset");
        echo "

";
        // line 5
        $this->displayBlock('asset', $context, $blocks);
        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "beginPage", array(), "method"), "html", null, true);
        echo "



    ";
        // line 13
        echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "beginBody", array(), "method"), "html", null, true);
        echo "

        ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "endBody", array(), "method"), "html", null, true);
        echo "


";
        // line 30
        echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "endPage", array(), "method"), "html", null, true);
    }

    // line 5
    public function block_asset($context, array $blocks = array())
    {
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        // line 16
        echo "
        ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo " 
        ";
    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        // line 24
        echo "            ";
        // line 25
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  103 => 24,  100 => 23,  95 => 20,  92 => 19,  87 => 16,  84 => 15,  79 => 5,  75 => 30,  69 => 27,  66 => 26,  64 => 23,  61 => 22,  59 => 19,  56 => 18,  54 => 15,  49 => 13,  42 => 9,  38 => 7,  36 => 5,  31 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.twig", "C:\\wamp64\\www\\kimlanyii\\frontend\\views\\site\\layout.twig");
    }
}
