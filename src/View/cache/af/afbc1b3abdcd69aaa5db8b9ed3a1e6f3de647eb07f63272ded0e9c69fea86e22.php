<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* person.html.twig */
class __TwigTemplate_94b493a3945d011a00e5fcceb90b511374d54e2b52077435c3f4565b19796425 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
<div class=\"row align-items-center\">
\t<div class=\"col-6\">
\t\t<form action=\"/?person/update/\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo " method=\"post\">
\t\t\t<p><input type=\"text\" name=\"name\" placeholder=\"Name\"></p>
\t\t\t<p><input type=\"submit\" value=\"Send\"></p>
\t\t</form>\t
\t</div>\t
\t<div class=\"col-6\">
\t<ul>
<!-- \t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ...[0 => ($context["object"] ?? null)]), "html", null, true);
        echo " -->
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["object"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 13
            echo "\t\t\t";
            if (twig_test_empty($context["property"])) {
                // line 14
                echo "\t\t\t";
            } else {
                echo " \t
\t\t\t<li>";
                // line 15
                echo twig_escape_filter($this->env, $context["property"], "html", null, true);
                echo "</li>
\t\t\t";
            }
            // line 17
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t</ul>
\t</div>\t
</div>\t
</div>";
    }

    public function getTemplateName()
    {
        return "person.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  73 => 17,  68 => 15,  63 => 14,  60 => 13,  56 => 12,  52 => 11,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
<div class=\"row align-items-center\">
\t<div class=\"col-6\">
\t\t<form action=\"/?person/update/\"{{ object.id }} method=\"post\">
\t\t\t<p><input type=\"text\" name=\"name\" placeholder=\"Name\"></p>
\t\t\t<p><input type=\"submit\" value=\"Send\"></p>
\t\t</form>\t
\t</div>\t
\t<div class=\"col-6\">
\t<ul>
<!-- \t\t{{ dump(object) }} -->
\t\t{% for property in object %}
\t\t\t{% if property is empty %}
\t\t\t{% else %} \t
\t\t\t<li>{{ property }}</li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</ul>
\t</div>\t
</div>\t
</div>", "person.html.twig", "/home/raptor/development/ProjectLineOn/src/View/person.html.twig");
    }
}
