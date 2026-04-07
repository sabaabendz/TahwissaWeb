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

/* admin/reservation/show.html.twig */
class __TwigTemplate_6e9e5dfdc93b44ff2c251bf0f42a7610 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/show.html.twig"));

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

        yield "Admin - Réservation #";
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
        <h1><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);margin-right:10px;\"></i>Réservation #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"btn btn-danger btn-sm\" target=\"_blank\"><i class=\"fas fa-file-pdf\"></i> Télécharger PDF</a>
        <a href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.4rem;font-weight:800;margin-bottom:8px;\">
                ";
        // line 20
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 20, $this->source); })()), "voyage", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 21, $this->source); })()), "voyage", [], "any", false, false, false, 21), "titre", [], "any", false, false, false, 21), "html", null, true);
            yield " — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 21, $this->source); })()), "voyage", [], "any", false, false, false, 21), "destination", [], "any", false, false, false, 21), "html", null, true);
            yield "
                ";
        } else {
            // line 23
            yield "                    Voyage supprimé
                ";
        }
        // line 25
        yield "            </h2>
            <span class=\"badge badge-";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 26), "html", null, true);
        yield "\" style=\"font-size:0.9rem;padding:6px 16px;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "statutLabel", [], "any", false, false, false, 26), "html", null, true);
        yield "</span>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--accent);\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()), "montantTotal", [], "any", false, false, false, 29), 2, ",", " "), "html", null, true);
        yield " TND</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">Montant total</div>
        </div>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-user\"></i> Utilisateur</div>
            <div class=\"value\">User #";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 37), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-users\"></i> Nombre de personnes</div>
            <div class=\"value\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 41), "html", null, true);
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de réservation</div>
            <div class=\"value\">";
        // line 45
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 45, $this->source); })()), "dateReservation", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 45, $this->source); })()), "dateReservation", [], "any", false, false, false, 45), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-plus\"></i> Date de création</div>
            <div class=\"value\">";
        // line 49
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 49, $this->source); })()), "dateCreation", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 49, $this->source); })()), "dateCreation", [], "any", false, false, false, 49), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        ";
        // line 51
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 51, $this->source); })()), "voyage", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Prix unitaire</div>
            <div class=\"value\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 54, $this->source); })()), "voyage", [], "any", false, false, false, 54), "prixUnitaire", [], "any", false, false, false, 54), 2, ",", " "), "html", null, true);
            yield " TND</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-plane\"></i> Voyage</div>
            <div class=\"value\"><a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "voyage", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" style=\"color:var(--primary);text-decoration:none;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "voyage", [], "any", false, false, false, 58), "titre", [], "any", false, false, false, 58), "html", null, true);
            yield "</a></div>
        </div>
        ";
        }
        // line 61
        yield "    </div>

    ";
        // line 64
        yield "    <div style=\"margin-top:32px;padding-top:24px;border-top:2px solid #f1f5f9;\">
        <h3 style=\"margin-bottom:16px;font-size:1rem;color:var(--text-muted);\">Changer le statut :</h3>
        <div style=\"display:flex;gap:8px;flex-wrap:wrap;\">
            <a href=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67), "statut" => "EN_ATTENTE"]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-xs ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 67, $this->source); })()), "statut", [], "any", false, false, false, 67) == "EN_ATTENTE")) ? ("btn-outline") : (""));
        yield "\">🕐 En attente</a>
            <a href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68), "statut" => "CONFIRMEE"]), "html", null, true);
        yield "\" class=\"btn btn-success btn-xs ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 68, $this->source); })()), "statut", [], "any", false, false, false, 68) == "CONFIRMEE")) ? ("btn-outline") : (""));
        yield "\">✅ Confirmer</a>
            <a href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69), "statut" => "ANNULEE"]), "html", null, true);
        yield "\" class=\"btn btn-danger btn-xs ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 69, $this->source); })()), "statut", [], "any", false, false, false, 69) == "ANNULEE")) ? ("btn-outline") : (""));
        yield "\">❌ Annuler</a>
            <a href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70), "statut" => "TERMINEE"]), "html", null, true);
        yield "\" class=\"btn btn-info btn-xs ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 70, $this->source); })()), "statut", [], "any", false, false, false, 70) == "TERMINEE")) ? ("btn-outline") : (""));
        yield "\">🏁 Terminer</a>
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
        return "admin/reservation/show.html.twig";
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
        return array (  225 => 70,  219 => 69,  213 => 68,  207 => 67,  202 => 64,  198 => 61,  190 => 58,  183 => 54,  179 => 52,  177 => 51,  172 => 49,  165 => 45,  158 => 41,  151 => 37,  140 => 29,  132 => 26,  129 => 25,  125 => 23,  117 => 21,  115 => 20,  104 => 12,  100 => 11,  96 => 10,  90 => 7,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Réservation #{{ reservation.id }}{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);margin-right:10px;\"></i>Réservation #{{ reservation.id }}</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('admin_reservation_pdf', {id: reservation.id}) }}\" class=\"btn btn-danger btn-sm\" target=\"_blank\"><i class=\"fas fa-file-pdf\"></i> Télécharger PDF</a>
        <a href=\"{{ path('admin_reservation_edit', {id: reservation.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"{{ path('admin_reservation_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.4rem;font-weight:800;margin-bottom:8px;\">
                {% if reservation.voyage %}
                    {{ reservation.voyage.titre }} — {{ reservation.voyage.destination }}
                {% else %}
                    Voyage supprimé
                {% endif %}
            </h2>
            <span class=\"badge badge-{{ reservation.statutBadgeClass }}\" style=\"font-size:0.9rem;padding:6px 16px;\">{{ reservation.statutLabel }}</span>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--accent);\">{{ reservation.montantTotal|number_format(2, ',', ' ') }} TND</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">Montant total</div>
        </div>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-user\"></i> Utilisateur</div>
            <div class=\"value\">User #{{ reservation.idUtilisateur }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-users\"></i> Nombre de personnes</div>
            <div class=\"value\">{{ reservation.nbrPersonnes }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de réservation</div>
            <div class=\"value\">{{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y H:i') : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-plus\"></i> Date de création</div>
            <div class=\"value\">{{ reservation.dateCreation ? reservation.dateCreation|date('d/m/Y H:i') : 'N/A' }}</div>
        </div>
        {% if reservation.voyage %}
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Prix unitaire</div>
            <div class=\"value\">{{ reservation.voyage.prixUnitaire|number_format(2, ',', ' ') }} TND</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-plane\"></i> Voyage</div>
            <div class=\"value\"><a href=\"{{ path('admin_voyage_show', {id: reservation.voyage.id}) }}\" style=\"color:var(--primary);text-decoration:none;\">{{ reservation.voyage.titre }}</a></div>
        </div>
        {% endif %}
    </div>

    {# Quick status actions #}
    <div style=\"margin-top:32px;padding-top:24px;border-top:2px solid #f1f5f9;\">
        <h3 style=\"margin-bottom:16px;font-size:1rem;color:var(--text-muted);\">Changer le statut :</h3>
        <div style=\"display:flex;gap:8px;flex-wrap:wrap;\">
            <a href=\"{{ path('admin_reservation_status', {id: reservation.id, statut: 'EN_ATTENTE'}) }}\" class=\"btn btn-warning btn-xs {{ reservation.statut == 'EN_ATTENTE' ? 'btn-outline' : '' }}\">🕐 En attente</a>
            <a href=\"{{ path('admin_reservation_status', {id: reservation.id, statut: 'CONFIRMEE'}) }}\" class=\"btn btn-success btn-xs {{ reservation.statut == 'CONFIRMEE' ? 'btn-outline' : '' }}\">✅ Confirmer</a>
            <a href=\"{{ path('admin_reservation_status', {id: reservation.id, statut: 'ANNULEE'}) }}\" class=\"btn btn-danger btn-xs {{ reservation.statut == 'ANNULEE' ? 'btn-outline' : '' }}\">❌ Annuler</a>
            <a href=\"{{ path('admin_reservation_status', {id: reservation.id, statut: 'TERMINEE'}) }}\" class=\"btn btn-info btn-xs {{ reservation.statut == 'TERMINEE' ? 'btn-outline' : '' }}\">🏁 Terminer</a>
        </div>
    </div>
</div>
{% endblock %}
", "admin/reservation/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\reservation\\show.html.twig");
    }
}
