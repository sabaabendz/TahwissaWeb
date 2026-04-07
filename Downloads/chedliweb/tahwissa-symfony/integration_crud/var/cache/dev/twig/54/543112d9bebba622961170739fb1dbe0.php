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

/* client/reclamation/new.html.twig */
class __TwigTemplate_5f54ab3e5b9e445366071f7ebbe82c49 extends Template
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
        return "client/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reclamation/new.html.twig"));

        $this->parent = $this->load("client/layout.html.twig", 1);
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

        yield "Nouvelle Réclamation";
        
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
        yield "<div style=\"margin-bottom:16px;\">
    <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reclamation_index");
        yield "\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;font-weight:500;\">
        <i class=\"fas fa-arrow-left\"></i> Mes réclamations
    </a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-flag\" style=\"color:var(--danger);\"></i> Soumettre une Réclamation</h2>
    <p class=\"subtitle\">Décrivez votre problème et notre équipe vous répondra dans les plus brefs délais.</p>

    ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    <div class=\"form-group ";
        // line 17
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)) > 0)) ? ("has-error") : (""));
        yield "\">
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), 'label');
        yield "
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), 'widget');
        yield "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 20), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24), 'label');
        yield "
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25), 'widget');
        yield "
    </div>

    <div class=\"form-group ";
        // line 28
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28)) > 0)) ? ("has-error") : (""));
        yield "\">
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'label');
        yield "
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'widget');
        yield "
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 31), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "    </div>

    <div style=\"background:rgba(255,214,0,0.1);border:1px solid rgba(249,168,37,0.3);border-radius:var(--radius-sm);padding:14px 18px;font-size:0.85rem;color:#475569;margin-bottom:24px;\">
        <i class=\"fas fa-info-circle\" style=\"color:#F9A825;margin-right:6px;\"></i>
        Votre réclamation sera traitée par notre équipe dans un délai de 48h.
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reclamation_index");
        yield "\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-paper-plane\"></i> Soumettre</button>
    </div>

    ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/reclamation/new.html.twig";
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
        return array (  183 => 44,  176 => 40,  166 => 32,  155 => 31,  151 => 30,  147 => 29,  143 => 28,  137 => 25,  133 => 24,  128 => 21,  117 => 20,  113 => 19,  109 => 18,  105 => 17,  100 => 15,  88 => 6,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Nouvelle Réclamation{% endblock %}

{% block content %}
<div style=\"margin-bottom:16px;\">
    <a href=\"{{ path('client_reclamation_index') }}\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;font-weight:500;\">
        <i class=\"fas fa-arrow-left\"></i> Mes réclamations
    </a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-flag\" style=\"color:var(--danger);\"></i> Soumettre une Réclamation</h2>
    <p class=\"subtitle\">Décrivez votre problème et notre équipe vous répondra dans les plus brefs délais.</p>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <div class=\"form-group {{ form.titre.vars.errors|length > 0 ? 'has-error' : '' }}\">
        {{ form_label(form.titre) }}
        {{ form_widget(form.titre) }}
        {% for error in form.titre.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.type) }}
        {{ form_widget(form.type) }}
    </div>

    <div class=\"form-group {{ form.description.vars.errors|length > 0 ? 'has-error' : '' }}\">
        {{ form_label(form.description) }}
        {{ form_widget(form.description) }}
        {% for error in form.description.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
    </div>

    <div style=\"background:rgba(255,214,0,0.1);border:1px solid rgba(249,168,37,0.3);border-radius:var(--radius-sm);padding:14px 18px;font-size:0.85rem;color:#475569;margin-bottom:24px;\">
        <i class=\"fas fa-info-circle\" style=\"color:#F9A825;margin-right:6px;\"></i>
        Votre réclamation sera traitée par notre équipe dans un délai de 48h.
    </div>

    <div class=\"form-actions\">
        <a href=\"{{ path('client_reclamation_index') }}\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-paper-plane\"></i> Soumettre</button>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}
", "client/reclamation/new.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\reclamation\\new.html.twig");
    }
}
