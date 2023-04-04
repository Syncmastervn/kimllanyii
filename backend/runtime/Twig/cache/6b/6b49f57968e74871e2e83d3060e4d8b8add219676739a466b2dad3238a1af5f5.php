<?php

/* render.twig */
class __TwigTemplate_d03b171de454b928a72933005c8557548d43c3f780c40b6dd0a93039ef28ae90 extends Twig_Template
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
        echo "<h1 class=\"header-test\">This is twig</h1>

";
        // line 3
        $context["greeting"] = "Hello ";
        // line 4
        $context["name"] = "Fabien";
        // line 5
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " 

";
        // line 8
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "

<br/>";
        // line 10
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "render.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  35 => 8,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "render.twig", "C:\\wamp64\\www\\kimlanyii\\backend\\views\\dashboard\\render.twig");
    }
}
