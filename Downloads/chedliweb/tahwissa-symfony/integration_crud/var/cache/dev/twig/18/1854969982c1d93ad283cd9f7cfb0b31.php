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

/* admin/user/new.html.twig */
class __TwigTemplate_bc7731c234b0939b3155e78400bd624c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/new.html.twig"));

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

        yield "Admin - Nouvel Utilisateur";
        
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
        <h1><i class=\"fas fa-user-plus\" style=\"color:var(--secondary);margin-right:10px;\"></i>Nouvel Utilisateur</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"dashboard-card\" style=\"max-width:700px;\">
    ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    
    ";
        // line 17
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)) > 0)) {
            // line 18
            yield "        <div class=\"alert alert-danger\" style=\"margin-bottom:20px;\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                yield "                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 20), "html", null, true);
                yield "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "        </div>
    ";
        }
        // line 24
        yield "
    <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:20px;\">
        <div class=\"form-group\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "firstName", [], "any", false, false, false, 27), 'label');
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28), 'widget');
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "firstName", [], "any", false, false, false, 29), 'errors');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "lastName", [], "any", false, false, false, 32), 'label');
        yield "
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "lastName", [], "any", false, false, false, 33), 'widget');
        yield "
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "lastName", [], "any", false, false, false, 34), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\" style=\"margin-top:16px;\">
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'label');
        yield "
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget');
        yield "
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'errors');
        yield "
    </div>

    <div class=\"form-group\" style=\"margin-top:16px;\">
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "plainPassword", [], "any", false, false, false, 45), 'label');
        yield "
        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "plainPassword", [], "any", false, false, false, 46), 'widget');
        yield "
    </div>

    <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:16px;\">
        <div class=\"form-group\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "phone", [], "any", false, false, false, 51), 'label');
        yield "
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52), 'widget');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "role", [], "any", false, false, false, 55), 'label');
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "role", [], "any", false, false, false, 56), 'widget');
        yield "
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "role", [], "any", false, false, false, 57), 'errors');
        yield "
        </div>
    </div>

    <div style=\"display:flex;gap:24px;margin-top:16px;\">
        <div class=\"form-group\">
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "isActive", [], "any", false, false, false, 63), 'widget');
        yield "
            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "isActive", [], "any", false, false, false, 64), 'label');
        yield "
        </div>
        <div class=\"form-group\">
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "isVerified", [], "any", false, false, false, 67), 'widget');
        yield "
            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "isVerified", [], "any", false, false, false, 68), 'label');
        yield "
        </div>
    </div>

    <div style=\"margin-top:24px;\">
        <button type=\"submit\" class=\"btn btn-accent\"><i class=\"fas fa-save\"></i> Créer l'utilisateur</button>
    </div>

    ";
        // line 76
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        yield "
</div>

<style>
    .form-group { margin-bottom: 4px; }
    .form-group label { display:block; font-weight:600; font-size:0.85rem; margin-bottom:6px; color:var(--text-dark); }
    .form-control { width:100%; padding:10px 14px; border:2px solid #e2e8f0; border-radius:var(--radius-sm); font-family:'Poppins',sans-serif; font-size:0.9rem; transition:var(--transition); }
    .form-control:focus { outline:none; border-color:var(--primary); box-shadow:0 0 0 3px rgba(21,101,192,0.1); }
    .form-group .error { color:var(--danger); font-size:0.8rem; margin-top:4px; }
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
        return "admin/user/new.html.twig";
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
        return array (  241 => 76,  230 => 68,  226 => 67,  220 => 64,  216 => 63,  207 => 57,  203 => 56,  199 => 55,  193 => 52,  189 => 51,  181 => 46,  177 => 45,  170 => 41,  166 => 40,  162 => 39,  154 => 34,  150 => 33,  146 => 32,  140 => 29,  136 => 28,  132 => 27,  127 => 24,  123 => 22,  114 => 20,  110 => 19,  107 => 18,  105 => 17,  100 => 15,  92 => 10,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Nouvel Utilisateur{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-user-plus\" style=\"color:var(--secondary);margin-right:10px;\"></i>Nouvel Utilisateur</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"dashboard-card\" style=\"max-width:700px;\">
    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    
    {% if form.vars.errors|length > 0 %}
        <div class=\"alert alert-danger\" style=\"margin-bottom:20px;\">
            {% for error in form.vars.errors %}
                <p>{{ error.message }}</p>
            {% endfor %}
        </div>
    {% endif %}

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

    <div class=\"form-group\" style=\"margin-top:16px;\">
        {{ form_label(form.plainPassword) }}
        {{ form_widget(form.plainPassword) }}
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
        <button type=\"submit\" class=\"btn btn-accent\"><i class=\"fas fa-save\"></i> Créer l'utilisateur</button>
    </div>

    {{ form_end(form) }}
</div>

<style>
    .form-group { margin-bottom: 4px; }
    .form-group label { display:block; font-weight:600; font-size:0.85rem; margin-bottom:6px; color:var(--text-dark); }
    .form-control { width:100%; padding:10px 14px; border:2px solid #e2e8f0; border-radius:var(--radius-sm); font-family:'Poppins',sans-serif; font-size:0.9rem; transition:var(--transition); }
    .form-control:focus { outline:none; border-color:var(--primary); box-shadow:0 0 0 3px rgba(21,101,192,0.1); }
    .form-group .error { color:var(--danger); font-size:0.8rem; margin-top:4px; }
</style>
{% endblock %}
", "admin/user/new.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\user\\new.html.twig");
    }
}
