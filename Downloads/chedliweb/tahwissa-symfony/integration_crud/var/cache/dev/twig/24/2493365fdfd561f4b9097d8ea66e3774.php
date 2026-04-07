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

/* client/reservation_evenement/show.html.twig */
class __TwigTemplate_98815b36600db1bac10e325e4072562d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation_evenement/show.html.twig"));

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

        yield "Réservation #";
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
        yield "<div style=\"margin-bottom:16px;\">
    <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_evenement_index");
        yield "\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;font-weight:500;\">
        <i class=\"fas fa-arrow-left\"></i> Mes réservations événements
    </a>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.5rem;font-weight:800;margin-bottom:8px;\">
                ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "evenement", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "evenement", [], "any", false, false, false, 15), "titre", [], "any", false, false, false, 15), "html", null, true);
        } else {
            yield "Événement supprimé";
        }
        // line 16
        yield "            </h2>
            <span class=\"badge badge-";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 17), "html", null, true);
        yield "\" style=\"font-size:0.9rem;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()), "statutLabel", [], "any", false, false, false, 17), "html", null, true);
        yield "</span>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 20, $this->source); })()), "nbPlacesReservees", [], "any", false, false, false, 20), "html", null, true);
        yield "</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">place(s) réservée(s)</div>
        </div>
    </div>

    ";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 25, $this->source); })()), "evenement", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "    <div style=\"margin-bottom:24px;padding:16px;background:#f8fafc;border-radius:var(--radius-sm);border-left:4px solid var(--primary);\">
        <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:16px;\">
            <div>
                <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:2px;\">Lieu</div>
                <div style=\"font-weight:600;\"><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);\"></i> ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })()), "evenement", [], "any", false, false, false, 30), "lieu", [], "any", false, false, false, 30), "html", null, true);
            yield "</div>
            </div>
            <div>
                <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:2px;\">Date de l'événement</div>
                <div style=\"font-weight:600;\">";
            // line 34
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "evenement", [], "any", false, false, false, 34), "dateEvent", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "evenement", [], "any", false, false, false, 34), "dateEvent", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield " à ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "evenement", [], "any", false, false, false, 34), "heureEvent", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "evenement", [], "any", false, false, false, 34), "heureEvent", [], "any", false, false, false, 34), "H:i"), "html", null, true)) : ("N/A"));
            yield "</div>
            </div>
            <div>
                <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:2px;\">Prix unitaire</div>
                <div style=\"font-weight:700;color:var(--primary);\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 38, $this->source); })()), "evenement", [], "any", false, false, false, 38), "prix", [], "any", false, false, false, 38), 2, ",", " "), "html", null, true);
            yield " TND</div>
            </div>
            <div>
                <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:2px;\">Catégorie</div>
                <div><span class=\"badge badge-purple\">";
            // line 42
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "evenement", [], "any", false, true, false, 42), "categorie", [], "any", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 42, $this->source); })()), "evenement", [], "any", false, false, false, 42), "categorie", [], "any", false, false, false, 42)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 42, $this->source); })()), "evenement", [], "any", false, false, false, 42), "categorie", [], "any", false, false, false, 42), "html", null, true)) : ("N/A"));
            yield "</span></div>
            </div>
        </div>
    </div>
    ";
        }
        // line 47
        yield "
    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de réservation</div>
            <div class=\"value\">";
        // line 51
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 51, $this->source); })()), "dateReservation", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 51, $this->source); })()), "dateReservation", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-info-circle\"></i> Statut</div>
            <div class=\"value\"><span class=\"badge badge-";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 55, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 55), "html", null, true);
        yield "\" style=\"font-size:0.9rem;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 55, $this->source); })()), "statutLabel", [], "any", false, false, false, 55), "html", null, true);
        yield "</span></div>
        </div>
    </div>

    ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 59, $this->source); })()), "statut", [], "any", false, false, false, 59) == "EN_ATTENTE")) {
            // line 60
            yield "    <div style=\"margin-top:24px;padding-top:24px;border-top:2px solid #f1f5f9;\">
        <form method=\"post\" action=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_evenement_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62))), "html", null, true);
            yield "\">
            <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"fas fa-times\"></i> Annuler ma réservation</button>
        </form>
    </div>
    ";
        }
        // line 67
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
        return "client/reservation_evenement/show.html.twig";
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
        return array (  204 => 67,  196 => 62,  192 => 61,  189 => 60,  187 => 59,  178 => 55,  171 => 51,  165 => 47,  157 => 42,  150 => 38,  141 => 34,  134 => 30,  128 => 26,  126 => 25,  118 => 20,  110 => 17,  107 => 16,  101 => 15,  89 => 6,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Réservation #{{ reservation.id }}{% endblock %}

{% block content %}
<div style=\"margin-bottom:16px;\">
    <a href=\"{{ path('client_reservation_evenement_index') }}\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;font-weight:500;\">
        <i class=\"fas fa-arrow-left\"></i> Mes réservations événements
    </a>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.5rem;font-weight:800;margin-bottom:8px;\">
                {% if reservation.evenement %}{{ reservation.evenement.titre }}{% else %}Événement supprimé{% endif %}
            </h2>
            <span class=\"badge badge-{{ reservation.statutBadgeClass }}\" style=\"font-size:0.9rem;\">{{ reservation.statutLabel }}</span>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">{{ reservation.nbPlacesReservees }}</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">place(s) réservée(s)</div>
        </div>
    </div>

    {% if reservation.evenement %}
    <div style=\"margin-bottom:24px;padding:16px;background:#f8fafc;border-radius:var(--radius-sm);border-left:4px solid var(--primary);\">
        <div style=\"display:grid;grid-template-columns:1fr 1fr;gap:16px;\">
            <div>
                <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:2px;\">Lieu</div>
                <div style=\"font-weight:600;\"><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);\"></i> {{ reservation.evenement.lieu }}</div>
            </div>
            <div>
                <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:2px;\">Date de l'événement</div>
                <div style=\"font-weight:600;\">{{ reservation.evenement.dateEvent ? reservation.evenement.dateEvent|date('d/m/Y') : 'N/A' }} à {{ reservation.evenement.heureEvent ? reservation.evenement.heureEvent|date('H:i') : 'N/A' }}</div>
            </div>
            <div>
                <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:2px;\">Prix unitaire</div>
                <div style=\"font-weight:700;color:var(--primary);\">{{ reservation.evenement.prix|number_format(2, ',', ' ') }} TND</div>
            </div>
            <div>
                <div style=\"font-size:0.8rem;color:var(--text-muted);margin-bottom:2px;\">Catégorie</div>
                <div><span class=\"badge badge-purple\">{{ reservation.evenement.categorie ?? 'N/A' }}</span></div>
            </div>
        </div>
    </div>
    {% endif %}

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de réservation</div>
            <div class=\"value\">{{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y') : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-info-circle\"></i> Statut</div>
            <div class=\"value\"><span class=\"badge badge-{{ reservation.statutBadgeClass }}\" style=\"font-size:0.9rem;\">{{ reservation.statutLabel }}</span></div>
        </div>
    </div>

    {% if reservation.statut == 'EN_ATTENTE' %}
    <div style=\"margin-top:24px;padding-top:24px;border-top:2px solid #f1f5f9;\">
        <form method=\"post\" action=\"{{ path('client_reservation_evenement_cancel', {id: reservation.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ reservation.id) }}\">
            <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"fas fa-times\"></i> Annuler ma réservation</button>
        </form>
    </div>
    {% endif %}
</div>
{% endblock %}
", "client/reservation_evenement/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\reservation_evenement\\show.html.twig");
    }
}
