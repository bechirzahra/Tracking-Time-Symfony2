<?php

/* MyAppCrediWireBundle:Default:table.html.twig */
class __TwigTemplate_6ae2026edcc1d166935931ef8394ed56b740e8baefd7f47753088040102e8a88 extends Twig_Template
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
        echo "
<div class=\"panel-primary\">
    <div class=\"panel-heading\"><h2>My Projects</h2></div>
    <div class=\"panel-body\"></div>

<div class=\"container\" style=\"margin-top: 10px\">

    <div id=\"\" class=\"form-inline\" role=\"grid\">
        <div class=\"row\">
            <div class=\"span8\">
            </div>
            <div class=\"span4\">
                <div class=\"dataTables_filter\" id=\"example_filter\">
                    <label>Search: <input type=\"text\" class=\"form-control\"></label>
                    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_new", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-primary\" >Add Project</a>
                     <a class=\"btn btn-danger pull-right\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("MyApp_CrediWire_logout");
        echo "\" style=\"margin-right: 3%\">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <table class=\"table table-striped \">
        <thead>
            <tr>              
                <th>Projectname</th>
                <th>Startdate</th>
                <th>Enddate</th>               
                <th>Actions</th>
            </tr>
        </thead>     
        <tbody>
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 32
            echo "            <tr >
                
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "projectName"), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "startDate"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "endDate"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                    
                    <td>
                <ul class=\"list-inline\">
                    
                    <li>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_edit", array("id" => $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit <span class=\"glyphicon glyphicon-pencil\"></span></a>
                    </li>
                    <li>
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logonhistory_new", array("id" => $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-success\">Logon Project   <span class=\"glyphicon glyphicon-play\"></span></a>
                    </li>
                    
                </ul>
                    </td>
            </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>

</div>

       
</div>";
    }

    public function getTemplateName()
    {
        return "MyAppCrediWireBundle:Default:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 52,  88 => 45,  82 => 42,  73 => 36,  69 => 35,  65 => 34,  61 => 32,  57 => 31,  39 => 16,  35 => 15,  19 => 1,);
    }
}
