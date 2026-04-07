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

/* agent/reservation_evenement/show.html.twig */
class __TwigTemplate_78f653cc13c5cd4700aff64b4162ca1b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/reservation_evenement/show.html.twig"));

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
        <h1><i class=\"fas fa-calendar-check\" style=\"color:var(--primary);margin-right:10px;\"></i>Réservation #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.4rem;font-weight:800;margin-bottom:8px;\">
                ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "evenement", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "evenement", [], "any", false, false, false, 19), "titre", [], "any", false, false, false, 19), "html", null, true);
        } else {
            yield "Événement supprimé";
        }
        // line 20
        yield "            </h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 22, $this->source); })()), "evenement", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                    <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "evenement", [], "any", false, false, false, 23), "lieu", [], "any", false, false, false, 23), "html", null, true);
            yield "</span>
                ";
        }
        // line 25
        yield "                <span class=\"badge badge-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 25, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 25), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 25, $this->source); })()), "statutLabel", [], "any", false, false, false, 25), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()), "nbPlacesReservees", [], "any", false, false, false, 29), "html", null, true);
        yield "</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">place(s)</div>
        </div>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-user\"></i> Utilisateur</div>
            <div class=\"value\">";
        // line 37
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["usersById"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), "idUser", [], "any", false, false, false, 37), [], "array", true, true, false, 37)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usersById"]) || array_key_exists("usersById", $context) ? $context["usersById"] : (function () { throw new RuntimeError('Variable "usersById" does not exist.', 37, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), "idUser", [], "any", false, false, false, 37), [], "array", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("User #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), "idUser", [], "any", false, false, false, 37)), "html", null, true)));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de réservation</div>
            <div class=\"value\">";
        // line 41
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "dateReservation", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "dateReservation", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        ";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 43, $this->source); })()), "evenement", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-day\"></i> Date de l'événement</div>
            <div class=\"value\">";
            // line 46
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "evenement", [], "any", false, false, false, 46), "dateEvent", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "evenement", [], "any", false, false, false, 46), "dateEvent", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-coins\"></i> Prix unitaire</div>
            <div class=\"value\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 50, $this->source); })()), "evenement", [], "any", false, false, false, 50), "prix", [], "any", false, false, false, 50), 2, ",", " "), "html", null, true);
            yield " TND</div>
        </div>
        ";
        }
        // line 53
        yield "    </div>

    ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 55, $this->source); })()), "statut", [], "any", false, false, false, 55) == "EN_ATTENTE")) {
            // line 56
            yield "    <div style=\"margin-top:24px;padding-top:24px;border-top:2px solid #f1f5f9;display:flex;gap:10px;\">
        <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "statut" => "CONFIRMEE"]), "html", null, true);
            yield "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-check\"></i> Confirmer</a>
        <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_reservation_evenement_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "statut" => "ANNULEE"]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-times\"></i> Annuler</a>
    </div>
    ";
        }
        // line 61
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "agent/reservation_evenement/show.html.twig";
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
        return array (  200 => 61,  194 => 58,  190 => 57,  187 => 56,  185 => 55,  181 => 53,  175 => 50,  168 => 46,  164 => 44,  162 => 43,  157 => 41,  150 => 37,  139 => 29,  129 => 25,  123 => 23,  121 => 22,  117 => 20,  111 => 19,  100 => 11,  96 => 10,  90 => 7,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'agent/layout.html.twig' %}
{% block title %}Agent - Réservation #{{ reservation.id }}{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-calendar-check\" style=\"color:var(--primary);margin-right:10px;\"></i>Réservation #{{ reservation.id }}</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('agent_reservation_evenement_edit', {id: reservation.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"{{ path('agent_reservation_evenement_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.4rem;font-weight:800;margin-bottom:8px;\">
                {% if reservation.evenement %}{{ reservation.evenement.titre }}{% else %}Événement supprimé{% endif %}
            </h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                {% if reservation.evenement %}
                    <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> {{ reservation.evenement.lieu }}</span>
                {% endif %}
                <span class=\"badge badge-{{ reservation.statutBadgeClass }}\">{{ reservation.statutLabel }}</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">{{ reservation.nbPlacesReservees }}</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">place(s)</div>
        </div>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-user\"></i> Utilisateur</div>
            <div class=\"value\">{{ usersById[reservation.idUser] is defined ? usersById[reservation.idUser].nom : 'User #' ~ reservation.idUser }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de réservation</div>
            <div class=\"value\">{{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y') : 'N/A' }}</div>
        </div>
        {% if reservation.evenement %}
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-day\"></i> Date de l'événement</div>
            <div class=\"value\">{{ reservation.evenement.dateEvent ? reservation.evenement.dateEvent|date('d/m/Y') : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-coins\"></i> Prix unitaire</div>
            <div class=\"value\">{{ reservation.evenement.prix|number_format(2, ',', ' ') }} TND</div>
        </div>
        {% endif %}
    </div>

    {% if reservation.statut == 'EN_ATTENTE' %}
    <div style=\"margin-top:24px;padding-top:24px;border-top:2px solid #f1f5f9;display:flex;gap:10px;\">
        <a href=\"{{ path('agent_reservation_evenement_status', {id: reservation.id, statut: 'CONFIRMEE'}) }}\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-check\"></i> Confirmer</a>
        <a href=\"{{ path('agent_reservation_evenement_status', {id: reservation.id, statut: 'ANNULEE'}) }}\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-times\"></i> Annuler</a>
    </div>
    {% endif %}
</div>
{% endblock %}
", "agent/reservation_evenement/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\reservation_evenement\\show.html.twig");
    }
}
