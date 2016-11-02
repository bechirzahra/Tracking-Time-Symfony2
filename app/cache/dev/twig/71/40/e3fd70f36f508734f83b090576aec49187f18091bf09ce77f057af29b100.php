<?php

/* MyAppCrediWireBundle:Project:new.html.twig */
class __TwigTemplate_7140e3fd70f36f508734f83b090576aec49187f18091bf09ce77f057af29b100 extends Twig_Template
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
        echo "    <style type=\"text/css\">
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
        .form-control{
            margin-bottom: 15px
        }

    </style>
";
    }

    // line 40
    public function block_container($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4\">

                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">
                        <h1>Project creation</h1>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-group form-signin")));
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "projectName"), 'widget');
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate"), 'widget');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate"), 'widget');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "owner_id"), 'widget', array("value" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row', array("attr" => array("class" => "btn btn-primary")));
        echo "
                        ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("MyApp_CrediWire_homepage");
        echo "\" class=\"btn btn-default\">
                            Back to the list
                        </a>

                    </div>
                </div>
            </div>
            <div class=\"col-md-4\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MyAppCrediWireBundle:Project:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 60,  111 => 57,  107 => 56,  103 => 55,  99 => 54,  95 => 53,  91 => 52,  87 => 51,  75 => 41,  72 => 40,  32 => 3,  29 => 2,);
    }
}
