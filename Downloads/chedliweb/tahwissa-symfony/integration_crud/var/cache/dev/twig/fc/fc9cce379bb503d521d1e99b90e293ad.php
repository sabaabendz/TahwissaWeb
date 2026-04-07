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

/* admin/reservation_evenement/show.html.twig */
class __TwigTemplate_9159afdd95cf59e40a12435b950b76e2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation_evenement/show.html.twig"));

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

        yield "Admin - Réservation Événement #";
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
        <h1><i class=\"fas fa-calendar-check\" style=\"color:var(--primary);margin-right:10px;\"></i>Réservation Événement #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_evenement_index");
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
            // line 20
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 20, $this->source); })()), "evenement", [], "any", false, false, false, 20), "titre", [], "any", false, false, false, 20), "html", null, true);
            yield "
                ";
        } else {
            // line 22
            yield "                    Événement supprimé
                ";
        }
        // line 24
        yield "            </h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "evenement", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                    <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "evenement", [], "any", false, false, false, 27), "lieu", [], "any", false, false, false, 27), "html", null, true);
            yield "</span>
                ";
        }
        // line 29
        yield "                <span class=\"badge badge-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 29), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()), "statutLabel", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 33, $this->source); })()), "nbPlacesReservees", [], "any", false, false, false, 33), "html", null, true);
        yield "</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">place(s) réservée(s)</div>
        </div>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-user\"></i> Utilisateur</div>
            <div class=\"value\">";
        // line 41
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["usersById"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "idUser", [], "any", false, false, false, 41), [], "array", true, true, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["usersById"]) || array_key_exists("usersById", $context) ? $context["usersById"] : (function () { throw new RuntimeError('Variable "usersById" does not exist.', 41, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "idUser", [], "any", false, false, false, 41), [], "array", false, false, false, 41), "nom", [], "any", false, false, false, 41), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("User #" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "idUser", [], "any", false, false, false, 41)), "html", null, true)));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de réservation</div>
            <div class=\"value\">";
        // line 45
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 45, $this->source); })()), "dateReservation", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 45, $this->source); })()), "dateReservation", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 47, $this->source); })()), "evenement", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-day\"></i> Date de l'événement</div>
            <div class=\"value\">";
            // line 50
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 50, $this->source); })()), "evenement", [], "any", false, false, false, 50), "dateEvent", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 50, $this->source); })()), "evenement", [], "any", false, false, false, 50), "dateEvent", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-coins\"></i> Prix unitaire</div>
            <div class=\"value\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "evenement", [], "any", false, false, false, 54), "prix", [], "any", false, false, false, 54), 2, ",", " "), "html", null, true);
            yield " TND</div>
        </div>
        ";
        }
        // line 57
        yield "    </div>

    <div style=\"margin-top:24px;padding-top:24px;border-top:2px solid #f1f5f9;display:flex;gap:10px;flex-wrap:wrap;\">
        ";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 60, $this->source); })()), "statut", [], "any", false, false, false, 60) == "EN_ATTENTE")) {
            // line 61
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_evenement_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61), "statut" => "CONFIRMEE"]), "html", null, true);
            yield "\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-check\"></i> Confirmer</a>
            <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_evenement_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62), "statut" => "ANNULEE"]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-times\"></i> Annuler</a>
        ";
        }
        // line 64
        yield "    </div>
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
        return "admin/reservation_evenement/show.html.twig";
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
        return array (  204 => 64,  199 => 62,  194 => 61,  192 => 60,  187 => 57,  181 => 54,  174 => 50,  170 => 48,  168 => 47,  163 => 45,  156 => 41,  145 => 33,  135 => 29,  129 => 27,  127 => 26,  123 => 24,  119 => 22,  113 => 20,  111 => 19,  100 => 11,  96 => 10,  90 => 7,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Réservation Événement #{{ reservation.id }}{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-calendar-check\" style=\"color:var(--primary);margin-right:10px;\"></i>Réservation Événement #{{ reservation.id }}</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('admin_reservation_evenement_edit', {id: reservation.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"{{ path('admin_reservation_evenement_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.4rem;font-weight:800;margin-bottom:8px;\">
                {% if reservation.evenement %}
                    {{ reservation.evenement.titre }}
                {% else %}
                    Événement supprimé
                {% endif %}
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
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">place(s) réservée(s)</div>
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

    <div style=\"margin-top:24px;padding-top:24px;border-top:2px solid #f1f5f9;display:flex;gap:10px;flex-wrap:wrap;\">
        {% if reservation.statut == 'EN_ATTENTE' %}
            <a href=\"{{ path('admin_reservation_evenement_status', {id: reservation.id, statut: 'CONFIRMEE'}) }}\" class=\"btn btn-success btn-sm\"><i class=\"fas fa-check\"></i> Confirmer</a>
            <a href=\"{{ path('admin_reservation_evenement_status', {id: reservation.id, statut: 'ANNULEE'}) }}\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-times\"></i> Annuler</a>
        {% endif %}
    </div>
</div>
{% endblock %}
", "admin/reservation_evenement/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\reservation_evenement\\show.html.twig");
    }
}
