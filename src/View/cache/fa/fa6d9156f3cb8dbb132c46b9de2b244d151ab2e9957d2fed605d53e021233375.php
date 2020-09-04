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

/* main.html */
class __TwigTemplate_f7c7d26545aa24b9d169c584e1251cfd32940f23e686c96887b7a6f8dba588cc extends Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>typo test</title>
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
</head>
<body>
<div class=\"jumbotron text-center\">
\t\t<h4>try add new Person - Alice <a id=\"link-person-insert\" href=\"\" onclick=\"\$choice = 'insert-person';changeRoutesUrs(\$choice);\" >/person/insert/Alice</a></h4>
\t\t<p>
\t\t\tshow Person by id <a id=\"link-person-show\" href=\"\" onclick=\"\$choice = 'show-person';changeRoutesUrs(\$choice);\">/person/1</a> <br/>
\t\t\tupdate Person by id <a id=\"link-person-update\" href=\"\" onclick=\"\$choice = 'update-person'; changeRoutesUrs(\$choice);\">/person/1/update</a> <br/>
\t\t\tdelete Person by id <a id=\"link-person-delete\" href=\"\" onclick=\"\$choice = 'delete-person'; changeRoutesUrs(\$choice);\">/person/1/delete</a> 
\t\t</p>
\t </div>
\t<div class=\"container\">
\t\t\t\t";
        // line 19
        $this->loadTemplate("content.html", "main.html", 19)->display($context);
        // line 20
        echo "\t</div> 
\t<script type='text/javascript'>
\t\tfunction changeRoutesUrs(\$choice) {
\t\tswitch (\$choice) {
\t\t\tcase 'insert-person':
\t\t\t\tdocument.getElementById('link-person-insert').href = '/person/insert/Alice';
\t\t\t\tbreak;
\t\t\tcase 'show-person':
\t\t\t\tdocument.getElementById('link-person-show').href = '/person/";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "';
\t\t\t\tbreak;
\t\t\tcase 'delete-person':
\t\t\t\tdocument.getElementById('link-person-delete').href = '/person/";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "/delete';
\t\t\t\tbreak;
\t\t\tcase 'update-person':
\t\t\t\tdocument.getElementById('link-person-update').href = '/person/";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "/update/Alice';\t
\t\t\t\tbreak;\t\t
\t\t}\t
\t\t
\t}

</script>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>\t\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  75 => 31,  69 => 28,  59 => 20,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>typo test</title>
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
</head>
<body>
<div class=\"jumbotron text-center\">
\t\t<h4>try add new Person - Alice <a id=\"link-person-insert\" href=\"\" onclick=\"\$choice = 'insert-person';changeRoutesUrs(\$choice);\" >/person/insert/Alice</a></h4>
\t\t<p>
\t\t\tshow Person by id <a id=\"link-person-show\" href=\"\" onclick=\"\$choice = 'show-person';changeRoutesUrs(\$choice);\">/person/1</a> <br/>
\t\t\tupdate Person by id <a id=\"link-person-update\" href=\"\" onclick=\"\$choice = 'update-person'; changeRoutesUrs(\$choice);\">/person/1/update</a> <br/>
\t\t\tdelete Person by id <a id=\"link-person-delete\" href=\"\" onclick=\"\$choice = 'delete-person'; changeRoutesUrs(\$choice);\">/person/1/delete</a> 
\t\t</p>
\t </div>
\t<div class=\"container\">
\t\t\t\t{% include 'content.html' %}
\t</div> 
\t<script type='text/javascript'>
\t\tfunction changeRoutesUrs(\$choice) {
\t\tswitch (\$choice) {
\t\t\tcase 'insert-person':
\t\t\t\tdocument.getElementById('link-person-insert').href = '/person/insert/Alice';
\t\t\t\tbreak;
\t\t\tcase 'show-person':
\t\t\t\tdocument.getElementById('link-person-show').href = '/person/{{object.id}}';
\t\t\t\tbreak;
\t\t\tcase 'delete-person':
\t\t\t\tdocument.getElementById('link-person-delete').href = '/person/{{object.id}}/delete';
\t\t\t\tbreak;
\t\t\tcase 'update-person':
\t\t\t\tdocument.getElementById('link-person-update').href = '/person/{{object.id}}/update/Alice';\t
\t\t\t\tbreak;\t\t
\t\t}\t
\t\t
\t}

</script>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script>\t\t
</body>
</html>", "main.html", "/home/raptor/development/ProjectLineOn/src/View/main.html");
    }
}
