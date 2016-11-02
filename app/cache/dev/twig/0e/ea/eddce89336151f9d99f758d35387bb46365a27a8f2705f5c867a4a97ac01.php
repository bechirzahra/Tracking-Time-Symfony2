<?php

/* MyAppCrediWireBundle:Default:login.html.twig */
class __TwigTemplate_0eeaeddce89336151f9d99f758d35387bb46365a27a8f2705f5c867a4a97ac01 extends Twig_Template
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
        echo "<style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

    </style>
";
    }

    // line 37
    public function block_container($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"container\">
       
            
        <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("MyApp_CrediWire_homepage");
        echo "\" data-validate=\"parsley\">
             <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
            <h2 class=\"form-signin-heading\">Please sign in</h2>
            </div>
            <div class=\"panel-body\">
            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"username\" placeholder=\"Email address\" data-trigger=\"change\" data-required=\"true\" >
            <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" data-trigger=\"change\" data-required=\"true\">
            <div class=\"checkbox\">
            <label >
                <input type=\"checkbox\" name=\"remember\" value=\"remember-me\" > Remember me
            </label>
            </div>
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Sign in</button>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("MyApp_CrediWire_signup");
        echo "\" >Sign Up</a>
            </div>
            </div>
        </form>
        
    </div> 
    ";
        // line 61
        if (array_key_exists("name", $context)) {
            // line 62
            echo "    <div class=\"alert-info fade in\">
        <strong>";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
    </div>
   
    ";
        }
        // line 67
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MyAppCrediWireBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 67,  108 => 63,  105 => 62,  103 => 61,  94 => 55,  77 => 41,  72 => 38,  69 => 37,  32 => 3,  29 => 2,);
    }
}
