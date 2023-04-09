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

/* page-not-found.html */
class __TwigTemplate_9b11ab5430258defcbac44bdab660b61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "page-not-found.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page not found";
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Sorry, we could not find that page";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<main class=\"container\" id=\"content\">
  <h1>Sorry! We cannot find that page.</h1>
  <p>Try the <a href=\"home.php\">home page</a> or email us 
  <a href=\"mailto:hello@eg.link\">hello@eg.link</a></p>
</main>
";
    }

    public function getTemplateName()
    {
        return "page-not-found.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 7,  62 => 6,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}Page not found{% endblock %}
{% block description %}Sorry, we could not find that page{% endblock %}

{% block content %}
<main class=\"container\" id=\"content\">
  <h1>Sorry! We cannot find that page.</h1>
  <p>Try the <a href=\"home.php\">home page</a> or email us 
  <a href=\"mailto:hello@eg.link\">hello@eg.link</a></p>
</main>
{% endblock %}", "page-not-found.html", "C:\\xampp\\htdocs\\phpbook\\section_d\\c15\\templates\\page-not-found.html");
    }
}
