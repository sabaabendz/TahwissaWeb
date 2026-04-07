<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/user/edit.html.twig */
class __TwigTemplate_612aa8d716363d7fca8bb74b11a92a16 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $this->parent = $this->load("admin/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Admin - Modifier ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-user-edit\" style=\"color:var(--secondary);margin-right:10px;\"></i>Modifier Utilisateur</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userEntity"]) || array_key_exists("userEntity", $context) ? $context["userEntity"] : (function () { throw new RuntimeError('Variable "userEntity" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), "html", null, true);
        yield "</p>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"dashboard-card\" style=\"max-width:700px;\">
    ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:20px;\">
        <div class=\"form-group\">
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "firstName", [], "any", false, false, false, 20), 'label');
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "firstName", [], "any", false, false, false, 21), 'widget');
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "firstName", [], "any", false, false, false, 22), 'errors');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "lastName", [], "any", false, false, false, 25), 'label');
        yield "
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "lastName", [], "any", false, false, false, 26), 'widget');
        yield "
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "lastName", [], "any", false, false, false, 27), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\" style=\"margin-top:16px;\">
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'label');
        yield "
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget');
        yield "
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors');
        yield "
    </div>

    <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:16px;\">
        <div class=\"form-group\">
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "phone", [], "any", false, false, false, 39), 'label');
        yield "
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "phone", [], "any", false, false, false, 40), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "role", [], "any", false, false, false, 43), 'label');
        yield "
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "role", [], "any", false, false, false, 44), 'widget');
        yield "
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "role", [], "any", false, false, false, 45), 'errors');
        yield "
        </div>
    </div>

    <div style=\"display:flex;gap:24px;margin-top:16px;\">
        <div class=\"form-group\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "isActive", [], "any", false, false, false, 51), 'widget');
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "isActive", [], "any", false, false, false, 52), 'label');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "isVerified", [], "any", false, false, false, 55), 'widget');
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "isVerified", [], "any", false, false, false, 56), 'label');
        yield "
        </div>
    </div>

    <div style=\"margin-top:24px;\">
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> Enregistrer</button>
    </div>

    ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        yield "
</div>

<style>
    .form-group { margin-bottom: 4px; }
    .form-group label { display:block; font-weight:600; font-size:0.85rem; margin-bottom:6px; color:var(--text-dark); }
    .form-control { width:100%; padding:10px 14px; border:2px solid #e2e8f0; border-radius:var(--radius-sm); font-family:'Poppins',sans-serif; font-size:0.9rem; transition:var(--transition); }
    .form-control:focus { outline:none; border-color:var(--primary); box-shadow:0 0 0 3px rgba(21,101,192,0.1); }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/user/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  210 => 64,  199 => 56,  195 => 55,  189 => 52,  185 => 51,  176 => 45,  172 => 44,  168 => 43,  162 => 40,  158 => 39,  150 => 34,  146 => 33,  142 => 32,  134 => 27,  130 => 26,  126 => 25,  120 => 22,  116 => 21,  112 => 20,  105 => 16,  97 => 11,  91 => 8,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Modifier {{ userEntity.name }}{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-user-edit\" style=\"color:var(--secondary);margin-right:10px;\"></i>Modifier Utilisateur</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">{{ userEntity.email }}</p>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"dashboard-card\" style=\"max-width:700px;\">
    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:20px;\">
        <div class=\"form-group\">
            {{ form_label(form.firstName) }}
            {{ form_widget(form.firstName) }}
            {{ form_errors(form.firstName) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.lastName) }}
            {{ form_widget(form.lastName) }}
            {{ form_errors(form.lastName) }}
        </div>
    </div>

    <div class=\"form-group\" style=\"margin-top:16px;\">
        {{ form_label(form.email) }}
        {{ form_widget(form.email) }}
        {{ form_errors(form.email) }}
    </div>

    <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:16px;\">
        <div class=\"form-group\">
            {{ form_label(form.phone) }}
            {{ form_widget(form.phone) }}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.role) }}
            {{ form_widget(form.role) }}
            {{ form_errors(form.role) }}
        </div>
    </div>

    <div style=\"display:flex;gap:24px;margin-top:16px;\">
        <div class=\"form-group\">
            {{ form_widget(form.isActive) }}
            {{ form_label(form.isActive) }}
        </div>
        <div class=\"form-group\">
            {{ form_widget(form.isVerified) }}
            {{ form_label(form.isVerified) }}
        </div>
    </div>

    <div style=\"margin-top:24px;\">
        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i> Enregistrer</button>
    </div>

    {{ form_end(form) }}
</div>

<style>
    .form-group { margin-bottom: 4px; }
    .form-group label { display:block; font-weight:600; font-size:0.85rem; margin-bottom:6px; color:var(--text-dark); }
    .form-control { width:100%; padding:10px 14px; border:2px solid #e2e8f0; border-radius:var(--radius-sm); font-family:'Poppins',sans-serif; font-size:0.9rem; transition:var(--transition); }
    .form-control:focus { outline:none; border-color:var(--primary); box-shadow:0 0 0 3px rgba(21,101,192,0.1); }
</style>
{% endblock %}
", "admin/user/edit.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\user\\edit.html.twig");
    }
}
