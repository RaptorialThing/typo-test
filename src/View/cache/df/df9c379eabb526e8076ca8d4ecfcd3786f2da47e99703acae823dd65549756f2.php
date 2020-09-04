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

/* personUpdate.html.twig */
class __TwigTemplate_bba0f2e1e1c855c7ab4f5bf375ed5f5e98e78776d8d5add6cd31e3f7d709dfab extends Template
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
        echo "<div class=\"container\">\t
<div class=\"row align-items-center\">
\t<div class=\"col-6\">
\t\t<form id=\"person-form\" action=\"\" method=\"get\">
\t\t\t<p><input type=\"text\" id='person-name' name=\"name\" placeholder=\"Name\"></p>
\t\t\t<p><input type=\"button\" value=\"Send\" onclick=\"generateGet();\"></p>
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
</div>
<script type=\"text/javascript\">
\tfunction generateGet() {
\t\tname = document.getElementById('person-name').value;
\t\tform = document.getElementById('person-form');
\t\tform.action = \"/person/";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "/update/\"+name;
\t\tform.submit();
}
</script>\t
</div>";
    }

    public function getTemplateName()
    {
        return "personUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  76 => 18,  70 => 17,  65 => 15,  60 => 14,  57 => 13,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">\t
<div class=\"row align-items-center\">
\t<div class=\"col-6\">
\t\t<form id=\"person-form\" action=\"\" method=\"get\">
\t\t\t<p><input type=\"text\" id='person-name' name=\"name\" placeholder=\"Name\"></p>
\t\t\t<p><input type=\"button\" value=\"Send\" onclick=\"generateGet();\"></p>
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
</div>
<script type=\"text/javascript\">
\tfunction generateGet() {
\t\tname = document.getElementById('person-name').value;
\t\tform = document.getElementById('person-form');
\t\tform.action = \"/person/{{object.id}}/update/\"+name;
\t\tform.submit();
}
</script>\t
</div>", "personUpdate.html.twig", "/home/raptor/development/ProjectLineOn/src/View/personUpdate.html.twig");
    }
}
