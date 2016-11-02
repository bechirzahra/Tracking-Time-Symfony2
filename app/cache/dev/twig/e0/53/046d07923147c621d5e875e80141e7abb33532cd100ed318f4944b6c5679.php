<?php

/* MyAppCrediWireBundle:Default:signup.html.twig */
class __TwigTemplate_e053046d07923147c621d5e875e80141e7abb33532cd100ed318f4944b6c5679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppCrediWireBundle:Default:index.html.twig");

        $this->blocks = array(
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
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\" >
    <div class=\"row\">
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\">
    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("MyApp_CrediWire_signup");
        echo "\" data-validate=\"parsley\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
        <h2>Sign Up</h2>
        </div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
        <label>Username</label>
        <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\">
         <label>Repeat Username</label>
        <input type=\"text\" id=\"usernameRe\" name=\"usernameRe\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\" data-equalto=\"#username\">
        <label>Password</label>
        <input type=\"password\" name=\"password\" class=\"form-control\" data-trigger=\"change\" data-required=\"true\">
        <div class=\"form-group\" style=\"margin-top: 3%\">
            <button class=\"btn btn-primary\" type=\"submit\" >Create Account</button>
        
<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("MyApp_CrediWire_homepage");
        echo "\" >Back to Home Page</a>
</div>
                </div>
            </div>
        </div>
    </form>
        </div>
                <div class=\"col-md-4\"></div>
    </div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "MyAppCrediWireBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  37 => 7,  31 => 3,  28 => 2,);
    }
}
