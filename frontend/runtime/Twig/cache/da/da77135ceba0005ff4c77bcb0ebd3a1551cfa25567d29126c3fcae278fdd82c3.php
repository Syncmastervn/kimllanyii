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
        // line 8
        echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "beginPage", array(), "method"), "html", null, true);
        echo "



    ";
        // line 12
        echo twig_escape_filter($this->env, yii\twig\Template::attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "beginBody", array(), "method"), "html", null, true);
        echo "

        ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
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

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "            ";
        // line 16
        echo "        ";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
        ";
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "            ";
        // line 24
        echo "            <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, ($context["alias_web"] ?? null), "html", null, true);
        echo "/assets/d0d08a08/jquery.js\" /> -->
        ";
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
        return array (  105 => 24,  103 => 23,  100 => 22,  95 => 19,  92 => 18,  88 => 16,  86 => 15,  83 => 14,  78 => 5,  74 => 30,  68 => 27,  65 => 26,  63 => 22,  60 => 21,  58 => 18,  55 => 17,  53 => 14,  48 => 12,  41 => 8,  38 => 7,  36 => 5,  31 => 3,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.twig", "C:\\wamp64\\www\\kimlanyii\\frontend\\views\\site\\layout.twig");
    }
}
