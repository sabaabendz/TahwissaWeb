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

/* agent/voyage/show.html.twig */
class __TwigTemplate_e9c711ed19b2d0a6fc37068d984a677b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/voyage/show.html.twig"));

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

        yield "Agent - Voyage ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 2, $this->source); })()), "titre", [], "any", false, false, false, 2), "html", null, true);
        
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
    <div><h1><i class=\"fas fa-plane\" style=\"color:var(--primary);margin-right:10px;\"></i>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        yield "</h1></div>
    <div class=\"top-bar-right\">
        <a href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_voyage_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_voyage_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>
<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.5rem;font-weight:800;margin-bottom:8px;\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), "html", null, true);
        yield "</h2>
            <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 15, $this->source); })()), "destination", [], "any", false, false, false, 15), "html", null, true);
        yield "</span>
            <span class=\"badge ";
        // line 16
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 16, $this->source); })()), "statut", [], "any", false, false, false, 16) == "ACTIF")) ? ("badge-success") : ("badge-danger"));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 16, $this->source); })()), "statut", [], "any", false, false, false, 16), "html", null, true);
        yield "</span>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 19, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 19), 2, ",", " "), "html", null, true);
        yield " TND</div>
        </div>
    </div>
    ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p style=\"color:#475569;margin-bottom:24px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>";
        }
        // line 23
        yield "    <div class=\"detail-grid\">
        <div class=\"detail-item\"><div class=\"label\">Date départ</div><div class=\"value\">";
        // line 24
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 24, $this->source); })()), "dateDepart", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 24, $this->source); })()), "dateDepart", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</div></div>
        <div class=\"detail-item\"><div class=\"label\">Date retour</div><div class=\"value\">";
        // line 25
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 25, $this->source); })()), "dateRetour", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 25, $this->source); })()), "dateRetour", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</div></div>
        <div class=\"detail-item\"><div class=\"label\">Durée</div><div class=\"value\">";
        // line 26
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 26, $this->source); })()), "duree", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 26, $this->source); })()), "duree", [], "any", false, false, false, 26) . " jours"), "html", null, true)) : ("-"));
        yield "</div></div>
        <div class=\"detail-item\"><div class=\"label\">Places</div><div class=\"value\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 27, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 27), "html", null, true);
        yield "</div></div>
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
        return "agent/voyage/show.html.twig";
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
        return array (  150 => 27,  146 => 26,  142 => 25,  138 => 24,  135 => 23,  129 => 22,  123 => 19,  115 => 16,  111 => 15,  107 => 14,  98 => 8,  94 => 7,  89 => 5,  86 => 4,  76 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'agent/layout.html.twig' %}
{% block title %}Agent - Voyage {{ voyage.titre }}{% endblock %}
{% block content %}
<div class=\"top-bar\">
    <div><h1><i class=\"fas fa-plane\" style=\"color:var(--primary);margin-right:10px;\"></i>{{ voyage.titre }}</h1></div>
    <div class=\"top-bar-right\">
        <a href=\"{{ path('agent_voyage_edit', {id: voyage.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-pen\"></i> Modifier</a>
        <a href=\"{{ path('agent_voyage_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    </div>
</div>
<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.5rem;font-weight:800;margin-bottom:8px;\">{{ voyage.titre }}</h2>
            <span class=\"badge badge-primary\"><i class=\"fas fa-map-marker-alt\"></i> {{ voyage.destination }}</span>
            <span class=\"badge {{ voyage.statut == 'ACTIF' ? 'badge-success' : 'badge-danger' }}\">{{ voyage.statut }}</span>
        </div>
        <div style=\"text-align:right;\">
            <div style=\"font-size:2rem;font-weight:800;color:var(--primary);\">{{ voyage.prixUnitaire|number_format(2, ',', ' ') }} TND</div>
        </div>
    </div>
    {% if voyage.description %}<p style=\"color:#475569;margin-bottom:24px;\">{{ voyage.description }}</p>{% endif %}
    <div class=\"detail-grid\">
        <div class=\"detail-item\"><div class=\"label\">Date départ</div><div class=\"value\">{{ voyage.dateDepart ? voyage.dateDepart|date('d/m/Y') : '-' }}</div></div>
        <div class=\"detail-item\"><div class=\"label\">Date retour</div><div class=\"value\">{{ voyage.dateRetour ? voyage.dateRetour|date('d/m/Y') : '-' }}</div></div>
        <div class=\"detail-item\"><div class=\"label\">Durée</div><div class=\"value\">{{ voyage.duree ? voyage.duree ~ ' jours' : '-' }}</div></div>
        <div class=\"detail-item\"><div class=\"label\">Places</div><div class=\"value\">{{ voyage.placesDisponibles }}</div></div>
    </div>
</div>
{% endblock %}
", "agent/voyage/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\voyage\\show.html.twig");
    }
}
