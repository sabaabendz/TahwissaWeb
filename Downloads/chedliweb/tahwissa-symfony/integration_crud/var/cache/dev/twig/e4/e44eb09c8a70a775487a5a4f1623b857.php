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

/* client/voyage/show.html.twig */
class __TwigTemplate_ab6175da511cdc1bd2b92559432bc8fb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/voyage/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 2, $this->source); })()), "titre", [], "any", false, false, false, 2), "html", null, true);
        yield " - Détails";
        
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
        yield "<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_voyage_index");
        yield "\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;display:inline-flex;align-items:center;gap:6px;margin-bottom:24px;\">
    <i class=\"fas fa-arrow-left\"></i> Retour au catalogue
</a>

<div class=\"detail-card\">
    ";
        // line 11
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 11, $this->source); })()), "imageUrl", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "    <div style=\"margin:-24px -24px 24px -24px;height:350px;overflow:hidden;border-radius:var(--radius) var(--radius) 0 0;position:relative;\">
        <img src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 13, $this->source); })()), "imageUrl", [], "any", false, false, false, 13), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
            yield "\" style=\"width:100%;height:100%;object-fit:cover;\">
        <div style=\"position:absolute;bottom:0;left:0;right:0;height:120px;background:linear-gradient(transparent,rgba(0,0,0,0.5));\"></div>
    </div>
    ";
        }
        // line 17
        yield "
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;margin-bottom:12px;\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), "html", null, true);
        yield "</h2>
            <div style=\"display:flex;gap:8px;flex-wrap:wrap;\">
                <span class=\"badge badge-primary\" style=\"font-size:0.85rem;\"><i class=\"fas fa-map-marker-alt\"></i> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 22, $this->source); })()), "destination", [], "any", false, false, false, 22), "html", null, true);
        yield "</span>
                ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 23, $this->source); })()), "categorie", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"badge badge-purple\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 23, $this->source); })()), "categorie", [], "any", false, false, false, 23), "html", null, true);
            yield "</span>";
        }
        // line 24
        yield "                <span class=\"badge ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 24, $this->source); })()), "statut", [], "any", false, false, false, 24) == "ACTIF")) ? ("badge-success") : ("badge-danger"));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 24, $this->source); })()), "statut", [], "any", false, false, false, 24), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2.5rem;font-weight:900;color:var(--primary);\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 28, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 28), 0, ",", " "), "html", null, true);
        yield "</div>
            <div style=\"font-size:0.9rem;color:var(--text-muted);\">TND / personne</div>
            ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 30, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 30) > 0)) {
            // line 31
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_new", ["voyageId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-accent btn-sm\" style=\"margin-top:12px;\"><i class=\"fas fa-ticket-alt\"></i> Réserver maintenant</a>
            ";
        } else {
            // line 33
            yield "                <span class=\"badge badge-danger\" style=\"font-size:0.9rem;margin-top:12px;\">Complet</span>
            ";
        }
        // line 35
        yield "        </div>
    </div>

    ";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "    <div style=\"padding:20px;background:linear-gradient(135deg,rgba(21,101,192,0.03),rgba(124,77,255,0.03));border-radius:var(--radius-sm);margin-bottom:24px;font-size:0.95rem;line-height:1.8;color:#475569;\">
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
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Départ</div>
            <div class=\"value\">";
        // line 47
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 47, $this->source); })()), "dateDepart", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 47, $this->source); })()), "dateDepart", [], "any", false, false, false, 47), "l d F Y"), "html", null, true)) : ("Non défini"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-check\"></i> Retour</div>
            <div class=\"value\">";
        // line 51
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 51, $this->source); })()), "dateRetour", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 51, $this->source); })()), "dateRetour", [], "any", false, false, false, 51), "l d F Y"), "html", null, true)) : ("Non défini"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-hourglass-half\"></i> Durée</div>
            <div class=\"value\" style=\"font-size:1.1rem;font-weight:700;\">";
        // line 55
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 55, $this->source); })()), "duree", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 55, $this->source); })()), "duree", [], "any", false, false, false, 55) . " jours"), "html", null, true)) : ("N/A"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-users\"></i> Places restantes</div>
            <div class=\"value\">
                <span class=\"badge ";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 60, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 60) > 5)) ? ("badge-success") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 60, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 60) > 0)) ? ("badge-warning") : ("badge-danger"))));
        yield "\" style=\"font-size:0.9rem;padding:6px 14px;\">
                    ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 61, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 61), "html", null, true);
        yield " places
                </span>
            </div>
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
        return "client/voyage/show.html.twig";
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
        return array (  205 => 61,  201 => 60,  193 => 55,  186 => 51,  179 => 47,  173 => 43,  167 => 40,  164 => 39,  162 => 38,  157 => 35,  153 => 33,  147 => 31,  145 => 30,  140 => 28,  130 => 24,  124 => 23,  120 => 22,  115 => 20,  110 => 17,  101 => 13,  98 => 12,  95 => 11,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}{{ voyage.titre }} - Détails{% endblock %}

{% block content %}
<a href=\"{{ path('client_voyage_index') }}\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;display:inline-flex;align-items:center;gap:6px;margin-bottom:24px;\">
    <i class=\"fas fa-arrow-left\"></i> Retour au catalogue
</a>

<div class=\"detail-card\">
    {# Hero Image #}
    {% if voyage.imageUrl %}
    <div style=\"margin:-24px -24px 24px -24px;height:350px;overflow:hidden;border-radius:var(--radius) var(--radius) 0 0;position:relative;\">
        <img src=\"{{ voyage.imageUrl }}\" alt=\"{{ voyage.titre }}\" style=\"width:100%;height:100%;object-fit:cover;\">
        <div style=\"position:absolute;bottom:0;left:0;right:0;height:120px;background:linear-gradient(transparent,rgba(0,0,0,0.5));\"></div>
    </div>
    {% endif %}

    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;margin-bottom:12px;\">{{ voyage.titre }}</h2>
            <div style=\"display:flex;gap:8px;flex-wrap:wrap;\">
                <span class=\"badge badge-primary\" style=\"font-size:0.85rem;\"><i class=\"fas fa-map-marker-alt\"></i> {{ voyage.destination }}</span>
                {% if voyage.categorie %}<span class=\"badge badge-purple\">{{ voyage.categorie }}</span>{% endif %}
                <span class=\"badge {{ voyage.statut == 'ACTIF' ? 'badge-success' : 'badge-danger' }}\">{{ voyage.statut }}</span>
            </div>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2.5rem;font-weight:900;color:var(--primary);\">{{ voyage.prixUnitaire|number_format(0, ',', ' ') }}</div>
            <div style=\"font-size:0.9rem;color:var(--text-muted);\">TND / personne</div>
            {% if voyage.placesDisponibles > 0 %}
                <a href=\"{{ path('client_reservation_new', {voyageId: voyage.id}) }}\" class=\"btn btn-accent btn-sm\" style=\"margin-top:12px;\"><i class=\"fas fa-ticket-alt\"></i> Réserver maintenant</a>
            {% else %}
                <span class=\"badge badge-danger\" style=\"font-size:0.9rem;margin-top:12px;\">Complet</span>
            {% endif %}
        </div>
    </div>

    {% if voyage.description %}
    <div style=\"padding:20px;background:linear-gradient(135deg,rgba(21,101,192,0.03),rgba(124,77,255,0.03));border-radius:var(--radius-sm);margin-bottom:24px;font-size:0.95rem;line-height:1.8;color:#475569;\">
        {{ voyage.description }}
    </div>
    {% endif %}

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-alt\"></i> Départ</div>
            <div class=\"value\">{{ voyage.dateDepart ? voyage.dateDepart|date('l d F Y') : 'Non défini' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-calendar-check\"></i> Retour</div>
            <div class=\"value\">{{ voyage.dateRetour ? voyage.dateRetour|date('l d F Y') : 'Non défini' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-hourglass-half\"></i> Durée</div>
            <div class=\"value\" style=\"font-size:1.1rem;font-weight:700;\">{{ voyage.duree ? voyage.duree ~ ' jours' : 'N/A' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-users\"></i> Places restantes</div>
            <div class=\"value\">
                <span class=\"badge {{ voyage.placesDisponibles > 5 ? 'badge-success' : (voyage.placesDisponibles > 0 ? 'badge-warning' : 'badge-danger') }}\" style=\"font-size:0.9rem;padding:6px 14px;\">
                    {{ voyage.placesDisponibles }} places
                </span>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "client/voyage/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\voyage\\show.html.twig");
    }
}
