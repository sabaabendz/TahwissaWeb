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

/* agent/reservation/new.html.twig */
class __TwigTemplate_8751e74a132d6b154bc5a4893356daec extends Template
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
        return "agent/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/reservation/new.html.twig"));

        $this->parent = $this->load("agent/layout.html.twig", 1);
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

        yield "Agent - Nouvelle Réservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "<div class=\"top-bar\">
    <div><h1><i class=\"fas fa-plus-circle\" style=\"color:var(--accent);margin-right:10px;\"></i>Nouvelle Réservation</h1></div>
    <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>
<div class=\"form-card\">
    <h2><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);\"></i> Réserver pour un Client</h2>
    <p class=\"subtitle\">Le montant total sera calculé automatiquement.</p>
    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    <div class=\"form-group\">";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "voyage", [], "any", false, false, false, 12), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "voyage", [], "any", false, false, false, 12), 'widget');
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "voyage", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 12), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
    <div class=\"form-row\">
        <div class=\"form-group\">";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "dateReservation", [], "any", false, false, false, 14), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "dateReservation", [], "any", false, false, false, 14), 'widget');
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "dateReservation", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "errors", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 14), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
        <div class=\"form-group\">";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 15), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 15), 'widget');
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 15), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
    </div>
    ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", true, true, false, 17)) {
            // line 18
            yield "    <div class=\"form-group\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "statut", [], "any", false, false, false, 18), 'label');
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "statut", [], "any", false, false, false, 18), 'widget');
            yield "</div>
    ";
        }
        // line 20
        yield "    <div class=\"form-actions\">
        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_index");
        yield "\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-check\"></i> Créer</button>
    </div>
    ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
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
        return "agent/reservation/new.html.twig";
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
        return array (  166 => 24,  160 => 21,  157 => 20,  150 => 18,  148 => 17,  132 => 15,  117 => 14,  101 => 12,  97 => 11,  89 => 6,  85 => 4,  75 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'agent/layout.html.twig' %}
{% block title %}Agent - Nouvelle Réservation{% endblock %}
{% block content %}
<div class=\"top-bar\">
    <div><h1><i class=\"fas fa-plus-circle\" style=\"color:var(--accent);margin-right:10px;\"></i>Nouvelle Réservation</h1></div>
    <a href=\"{{ path('agent_reservation_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>
<div class=\"form-card\">
    <h2><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);\"></i> Réserver pour un Client</h2>
    <p class=\"subtitle\">Le montant total sera calculé automatiquement.</p>
    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-group\">{{ form_label(form.voyage) }}{{ form_widget(form.voyage) }}{% for e in form.voyage.vars.errors %}<div class=\"form-error\">{{ e.message }}</div>{% endfor %}</div>
    <div class=\"form-row\">
        <div class=\"form-group\">{{ form_label(form.dateReservation) }}{{ form_widget(form.dateReservation) }}{% for e in form.dateReservation.vars.errors %}<div class=\"form-error\">{{ e.message }}</div>{% endfor %}</div>
        <div class=\"form-group\">{{ form_label(form.nbrPersonnes) }}{{ form_widget(form.nbrPersonnes) }}{% for e in form.nbrPersonnes.vars.errors %}<div class=\"form-error\">{{ e.message }}</div>{% endfor %}</div>
    </div>
    {% if form.statut is defined %}
    <div class=\"form-group\">{{ form_label(form.statut) }}{{ form_widget(form.statut) }}</div>
    {% endif %}
    <div class=\"form-actions\">
        <a href=\"{{ path('agent_reservation_index') }}\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-check\"></i> Créer</button>
    </div>
    {{ form_end(form) }}
</div>
{% endblock %}
", "agent/reservation/new.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\reservation\\new.html.twig");
    }
}
