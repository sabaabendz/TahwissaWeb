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

/* admin/voyage/show.html.twig */
class __TwigTemplate_13589331cdd3c9253e9b09e5326b9783 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/voyage/show.html.twig"));

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

        yield "Admin - Voyage ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 2, $this->source); })()), "titre", [], "any", false, false, false, 2), "html", null, true);
        
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
        <h1><i class=\"fas fa-plane\" style=\"color:var(--primary);margin-right:10px;\"></i>Détail Voyage #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_voyage_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    ";
        // line 17
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 17, $this->source); })()), "imageUrl", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "    <div style=\"margin:-24px -24px 24px -24px;height:300px;overflow:hidden;border-radius:var(--radius) var(--radius) 0 0;\">
        <img src=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 19, $this->source); })()), "imageUrl", [], "any", false, false, false, 19), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), "html", null, true);
            yield "\" style=\"width:100%;height:100%;object-fit:cover;\">
    </div>
    ";
        }
        // line 22
        yield "
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.6rem;font-weight:800;margin-bottom:8px;\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 25, $this->source); })()), "titre", [], "any", false, false, false, 25), "html", null, true);
        yield "</h2>
            <div style=\"display:flex;gap:8px;align-items:center;\">
                <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 27, $this->source); })()), "destination", [], "any", false, false, false, 27), "html", null, true);
        yield "</span>
                <span class=\"badge ";
        // line 28
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 28, $this->source); })()), "categorie", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge-purple") : ("badge-info"));
        yield "\">";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "categorie", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 28, $this->source); })()), "categorie", [], "any", false, false, false, 28)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 28, $this->source); })()), "categorie", [], "any", false, false, false, 28), "html", null, true)) : ("Non classé"));
        yield "</span>
                <span class=\"badge ";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 29, $this->source); })()), "statut", [], "any", false, false, false, 29) == "ACTIF")) ? ("badge-success") : ("badge-danger"));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 29, $this->source); })()), "statut", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 33, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 33), 2, ",", " "), "html", null, true);
        yield " TND</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">par personne</div>
        </div>
    </div>

    ";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "    <div style=\"margin-bottom:24px;padding:16px;background:#f8fafc;border-radius:var(--radius-sm);color:#475569;font-size:0.92rem;line-height:1.7;\">
        ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true);
            yield "
    </div>
    ";
        }
        // line 43
        yield "
    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de départ</div>
            <div class=\"value\">";
        // line 47
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 47, $this->source); })()), "dateDepart", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 47, $this->source); })()), "dateDepart", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-check\"></i> Date de retour</div>
            <div class=\"value\">";
        // line 51
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 51, $this->source); })()), "dateRetour", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 51, $this->source); })()), "dateRetour", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true)) : ("Non définie"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-clock\"></i> Durée</div>
            <div class=\"value\">";
        // line 55
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 55, $this->source); })()), "duree", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 55, $this->source); })()), "duree", [], "any", false, false, false, 55) . " jours"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-chair\"></i> Places disponibles</div>
            <div class=\"value\">
                <span class=\"badge ";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 60, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 60) > 5)) ? ("badge-success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 60, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 60) > 0)) ? ("badge-warning") : ("badge-danger"))));
        yield "\" style=\"font-size:0.9rem;\">
                    ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 61, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 61), "html", null, true);
        yield " places
                </span>
            </div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-image\"></i> Image</div>
            <div class=\"value\">";
        // line 67
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["voyage"] ?? null), "imageUrl", [], "any", true, true, false, 67) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 67, $this->source); })()), "imageUrl", [], "any", false, false, false, 67)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 67, $this->source); })()), "imageUrl", [], "any", false, false, false, 67), "html", null, true)) : ("Aucune image"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-plus\"></i> Créé le</div>
            <div class=\"value\">";
        // line 71
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 71, $this->source); })()), "createdAt", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 71, $this->source); })()), "createdAt", [], "any", false, false, false, 71), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
    </div>

    ";
        // line 75
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 75, $this->source); })()), "reservations", [], "any", false, false, false, 75)) > 0)) {
            // line 76
            yield "    <div style=\"margin-top:32px;padding-top:24px;border-top:2px solid #f1f5f9;\">
        <h3 style=\"margin-bottom:16px;font-size:1.1rem;\"><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);\"></i> Réservations (";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 77, $this->source); })()), "reservations", [], "any", false, false, false, 77)), "html", null, true);
            yield ")</h3>
        <table class=\"data-table\">
            <thead><tr><th>#</th><th>Utilisateur</th><th>Personnes</th><th>Montant</th><th>Statut</th><th>Date</th></tr></thead>
            <tbody>
                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 81, $this->source); })()), "reservations", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 82
                yield "                <tr>
                    <td>#";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 83), "html", null, true);
                yield "</td>
                    <td>User #";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "idUtilisateur", [], "any", false, false, false, 84), "html", null, true);
                yield "</td>
                    <td>";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "nbrPersonnes", [], "any", false, false, false, 85), "html", null, true);
                yield "</td>
                    <td style=\"font-weight:700;\">";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "montantTotal", [], "any", false, false, false, 86), 2, ",", " "), "html", null, true);
                yield " TND</td>
                    <td><span class=\"badge badge-";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statutBadgeClass", [], "any", false, false, false, 87), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statutLabel", [], "any", false, false, false, 87), "html", null, true);
                yield "</span></td>
                    <td>";
                // line 88
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "dateReservation", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "dateReservation", [], "any", false, false, false, 88), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['res'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "            </tbody>
        </table>
    </div>
    ";
        }
        // line 95
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
        return "admin/voyage/show.html.twig";
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
        return array (  281 => 95,  275 => 91,  266 => 88,  260 => 87,  256 => 86,  252 => 85,  248 => 84,  244 => 83,  241 => 82,  237 => 81,  230 => 77,  227 => 76,  225 => 75,  218 => 71,  211 => 67,  202 => 61,  198 => 60,  190 => 55,  183 => 51,  176 => 47,  170 => 43,  164 => 40,  161 => 39,  159 => 38,  151 => 33,  142 => 29,  136 => 28,  132 => 27,  127 => 25,  122 => 22,  114 => 19,  111 => 18,  108 => 17,  100 => 11,  96 => 10,  90 => 7,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Voyage {{ voyage.titre }}{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-plane\" style=\"color:var(--primary);margin-right:10px;\"></i>Détail Voyage #{{ voyage.id }}</h1>
    </div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('admin_voyage_edit', {id: voyage.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"{{ path('admin_voyage_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>

<div class=\"detail-card\">
    {# Hero Image #}
    {% if voyage.imageUrl %}
    <div style=\"margin:-24px -24px 24px -24px;height:300px;overflow:hidden;border-radius:var(--radius) var(--radius) 0 0;\">
        <img src=\"{{ voyage.imageUrl }}\" alt=\"{{ voyage.titre }}\" style=\"width:100%;height:100%;object-fit:cover;\">
    </div>
    {% endif %}

    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.6rem;font-weight:800;margin-bottom:8px;\">{{ voyage.titre }}</h2>
            <div style=\"display:flex;gap:8px;align-items:center;\">
                <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> {{ voyage.destination }}</span>
                <span class=\"badge {{ voyage.categorie ? 'badge-purple' : 'badge-info' }}\">{{ voyage.categorie ?? 'Non classé' }}</span>
                <span class=\"badge {{ voyage.statut == 'ACTIF' ? 'badge-success' : 'badge-danger' }}\">{{ voyage.statut }}</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">{{ voyage.prixUnitaire|number_format(2, ',', ' ') }} TND</div>
            <div style=\"font-size:0.85rem;color:var(--text-muted);\">par personne</div>
        </div>
    </div>

    {% if voyage.description %}
    <div style=\"margin-bottom:24px;padding:16px;background:#f8fafc;border-radius:var(--radius-sm);color:#475569;font-size:0.92rem;line-height:1.7;\">
        {{ voyage.description }}
    </div>
    {% endif %}

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Date de départ</div>
            <div class=\"value\">{{ voyage.dateDepart ? voyage.dateDepart|date('d/m/Y') : 'Non définie' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-check\"></i> Date de retour</div>
            <div class=\"value\">{{ voyage.dateRetour ? voyage.dateRetour|date('d/m/Y') : 'Non définie' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-clock\"></i> Durée</div>
            <div class=\"value\">{{ voyage.duree ? voyage.duree ~ ' jours' : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-chair\"></i> Places disponibles</div>
            <div class=\"value\">
                <span class=\"badge {{ voyage.placesDisponibles > 5 ? 'badge-success' : (voyage.placesDisponibles > 0 ? 'badge-warning' : 'badge-danger') }}\" style=\"font-size:0.9rem;\">
                    {{ voyage.placesDisponibles }} places
                </span>
            </div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-image\"></i> Image</div>
            <div class=\"value\">{{ voyage.imageUrl ?? 'Aucune image' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-plus\"></i> Créé le</div>
            <div class=\"value\">{{ voyage.createdAt ? voyage.createdAt|date('d/m/Y H:i') : 'N/A' }}</div>
        </div>
    </div>

    {% if voyage.reservations|length > 0 %}
    <div style=\"margin-top:32px;padding-top:24px;border-top:2px solid #f1f5f9;\">
        <h3 style=\"margin-bottom:16px;font-size:1.1rem;\"><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);\"></i> Réservations ({{ voyage.reservations|length }})</h3>
        <table class=\"data-table\">
            <thead><tr><th>#</th><th>Utilisateur</th><th>Personnes</th><th>Montant</th><th>Statut</th><th>Date</th></tr></thead>
            <tbody>
                {% for res in voyage.reservations %}
                <tr>
                    <td>#{{ res.id }}</td>
                    <td>User #{{ res.idUtilisateur }}</td>
                    <td>{{ res.nbrPersonnes }}</td>
                    <td style=\"font-weight:700;\">{{ res.montantTotal|number_format(2, ',', ' ') }} TND</td>
                    <td><span class=\"badge badge-{{ res.statutBadgeClass }}\">{{ res.statutLabel }}</span></td>
                    <td>{{ res.dateReservation ? res.dateReservation|date('d/m/Y') : '-' }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    {% endif %}
</div>
{% endblock %}
", "admin/voyage/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\voyage\\show.html.twig");
    }
}
