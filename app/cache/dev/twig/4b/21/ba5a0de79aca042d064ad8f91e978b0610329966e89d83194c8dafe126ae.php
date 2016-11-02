<?php

/* MyAppCrediWireBundle:Default:welcome.html.twig */
class __TwigTemplate_4b21ba5a0de79aca042d064ad8f91e978b0610329966e89d83194c8dafe126ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppCrediWireBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppCrediWireBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
 ";
        // line 7
        $this->env->loadTemplate("MyAppCrediWireBundle:Default:table.html.twig")->display($context);
        // line 8
        echo "</div> 


    ";
    }

    public function getTemplateName()
    {
        return "MyAppCrediWireBundle:Default:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  43 => 7,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
