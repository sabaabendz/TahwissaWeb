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

/* agent/reservation/show.html.twig */
class __TwigTemplate_3221520d36e9ab8af5a4c48b262f3d44 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/reservation/show.html.twig"));

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

        yield "Agent - Réservation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        
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
    <div><h1><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);margin-right:10px;\"></i>Réservation #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        yield "</h1></div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>
<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.4rem;font-weight:800;\">";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "voyage", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "voyage", [], "any", false, false, false, 14), "titre", [], "any", false, false, false, 14), "html", null, true);
        } else {
            yield "N/A";
        }
        yield "</h2>
            <span class=\"badge badge-";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 15), "html", null, true);
        yield "\" style=\"font-size:0.9rem;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "statutLabel", [], "any", false, false, false, 15), "html", null, true);
        yield "</span>
        </div>
        <div style=\"text-align:right;\"><div style=\"font-size:2rem;font-weight:800;color:var(--accent);\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()), "montantTotal", [], "any", false, false, false, 17), 2, ",", " "), "html", null, true);
        yield " TND</div></div>
    </div>
    <div class=\"detail-grid\">
        <div class=\"detail-item\"><div class=\"label\">Utilisateur</div><div class=\"value\">User #";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 20, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 20), "html", null, true);
        yield "</div></div>
        <div class=\"detail-item\"><div class=\"label\">Personnes</div><div class=\"value\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 21, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 21), "html", null, true);
        yield "</div></div>
        <div class=\"detail-item\"><div class=\"label\">Date réservation</div><div class=\"value\">";
        // line 22
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 22, $this->source); })()), "dateReservation", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 22, $this->source); })()), "dateReservation", [], "any", false, false, false, 22), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</div></div>
        <div class=\"detail-item\"><div class=\"label\">Créée le</div><div class=\"value\">";
        // line 23
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "dateCreation", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "dateCreation", [], "any", false, false, false, 23), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</div></div>
    </div>
    <div style=\"margin-top:24px;padding-top:20px;border-top:2px solid #f1f5f9;\">
        <h3 style=\"font-size:0.95rem;color:var(--text-muted);margin-bottom:12px;\">Changer le statut :</h3>
        <div style=\"display:flex;gap:8px;\">
            <a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "statut" => "EN_ATTENTE"]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-xs\">🕐 En attente</a>
            <a href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "statut" => "CONFIRMEE"]), "html", null, true);
        yield "\" class=\"btn btn-success btn-xs\">✅ Confirmer</a>
            <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "statut" => "ANNULEE"]), "html", null, true);
        yield "\" class=\"btn btn-danger btn-xs\">❌ Annuler</a>
        </div>
    </div>
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
        return "agent/reservation/show.html.twig";
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
        return array (  156 => 30,  152 => 29,  148 => 28,  140 => 23,  136 => 22,  132 => 21,  128 => 20,  122 => 17,  115 => 15,  107 => 14,  98 => 8,  94 => 7,  89 => 5,  86 => 4,  76 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'agent/layout.html.twig' %}
{% block title %}Agent - Réservation #{{ reservation.id }}{% endblock %}
{% block content %}
<div class=\"top-bar\">
    <div><h1><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);margin-right:10px;\"></i>Réservation #{{ reservation.id }}</h1></div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('agent_reservation_edit', {id: reservation.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"{{ path('agent_reservation_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>
<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.4rem;font-weight:800;\">{% if reservation.voyage %}{{ reservation.voyage.titre }}{% else %}N/A{% endif %}</h2>
            <span class=\"badge badge-{{ reservation.statutBadgeClass }}\" style=\"font-size:0.9rem;\">{{ reservation.statutLabel }}</span>
        </div>
        <div style=\"text-align:right;\"><div style=\"font-size:2rem;font-weight:800;color:var(--accent);\">{{ reservation.montantTotal|number_format(2, ',', ' ') }} TND</div></div>
    </div>
    <div class=\"detail-grid\">
        <div class=\"detail-item\"><div class=\"label\">Utilisateur</div><div class=\"value\">User #{{ reservation.idUtilisateur }}</div></div>
        <div class=\"detail-item\"><div class=\"label\">Personnes</div><div class=\"value\">{{ reservation.nbrPersonnes }}</div></div>
        <div class=\"detail-item\"><div class=\"label\">Date réservation</div><div class=\"value\">{{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y H:i') : '-' }}</div></div>
        <div class=\"detail-item\"><div class=\"label\">Créée le</div><div class=\"value\">{{ reservation.dateCreation ? reservation.dateCreation|date('d/m/Y H:i') : '-' }}</div></div>
    </div>
    <div style=\"margin-top:24px;padding-top:20px;border-top:2px solid #f1f5f9;\">
        <h3 style=\"font-size:0.95rem;color:var(--text-muted);margin-bottom:12px;\">Changer le statut :</h3>
        <div style=\"display:flex;gap:8px;\">
            <a href=\"{{ path('agent_reservation_status', {id: reservation.id, statut: 'EN_ATTENTE'}) }}\" class=\"btn btn-warning btn-xs\">🕐 En attente</a>
            <a href=\"{{ path('agent_reservation_status', {id: reservation.id, statut: 'CONFIRMEE'}) }}\" class=\"btn btn-success btn-xs\">✅ Confirmer</a>
            <a href=\"{{ path('agent_reservation_status', {id: reservation.id, statut: 'ANNULEE'}) }}\" class=\"btn btn-danger btn-xs\">❌ Annuler</a>
        </div>
    </div>
</div>
{% endblock %}
", "agent/reservation/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\reservation\\show.html.twig");
    }
}
