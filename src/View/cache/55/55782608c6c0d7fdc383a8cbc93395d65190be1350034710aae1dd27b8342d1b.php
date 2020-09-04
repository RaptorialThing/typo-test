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

/* content.html */
class __TwigTemplate_baea7e8fd15eb503676fe2847b7f23f41750b28a2c0703f15efd7178b7091c33 extends Template
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
        echo "<div class=\"row\">
\t<div class=\"col-sm-4\">
\t<h3>this is content title</h3>
\t<p>this is content </p>
\t</div>
</div>\t";
    }

    public function getTemplateName()
    {
        return "content.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
\t<div class=\"col-sm-4\">
\t<h3>this is content title</h3>
\t<p>this is content </p>
\t</div>
</div>\t", "content.html", "/home/raptor/development/ProjectLineOn/src/View/content.html");
    }
}
