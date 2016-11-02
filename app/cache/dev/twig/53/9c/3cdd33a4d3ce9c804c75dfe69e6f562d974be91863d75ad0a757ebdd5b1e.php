<?php

/* MyAppCrediWireBundle:Project:show.html.twig */
class __TwigTemplate_539c3cdd33a4d3ce9c804c75dfe69e6f562d974be91863d75ad0a757ebdd5b1e extends Twig_Template
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

    </style>
";
    }

    // line 37
    public function block_container($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-primary\">
                <div class=\"panel panel-heading\"><h1>Project  ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "projectName"), "html", null, true);
        echo "</h1></div>
                <div class=\"panel-body\">
                    <div class=\"col-md-6\">
                        <p>You started your project at ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate"), "Y-m-d H:i:s"), "html", null, true);
        echo "  </p>
                        <p>Deadline is : ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate"), "Y-m-d H:i:s"), "html", null, true);
        echo "  </p>
                        <p >you spent until now  </p>
                        <p style=\"color:red;\">";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["hours"]) ? $context["hours"] : $this->getContext($context, "hours")), " H:i:s"), "html", null, true);
        echo "</p>

                                        
                                             

                                     
                                   
                       
                            
                        <div class=\"row\">
                            <div class=\"col-md-2\">
                                <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-info\">
                                    Edit
                                </a>
                            </div>
                                    <div class=\"col-md-2\">
                               
                                     ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                      
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "submit"), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
                        ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                                    ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                                    </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\"> 
                        <div class=\"panel panel-info\">
                            <div class=\"panel-heading\">
                                <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logonhistory_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-warning pull-right\" style=\"margin-top: 3%\">
                                    Logout Project
                                </a>
                                <p class=\"h3\">LogonHistory list</p>
                            
                            </div>
                            <div class=\"panel-body\">
                                <table class=\"table-striped table-bordered table\">
                                    <thead>
                                        <tr>
                                 
                                            <th>Logonproject</th>
                                            <th>Logoutproject</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 93
            echo "                                            <tr>

                                                <td>";
            // line 95
            if ($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "logonProject")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "logonProject"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                                <td>";
            // line 96
            if ($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "logoutProject")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "logoutProject"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                    </tbody>
                                      
                                </table>
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>











    </div>
";
    }

    public function getTemplateName()
    {
        return "MyAppCrediWireBundle:Project:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 100,  172 => 96,  166 => 95,  162 => 93,  158 => 92,  138 => 75,  128 => 68,  124 => 67,  120 => 66,  115 => 64,  106 => 58,  92 => 47,  87 => 45,  83 => 44,  77 => 41,  72 => 38,  69 => 37,  32 => 3,  29 => 2,);
    }
}
