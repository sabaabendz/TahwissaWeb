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

/* client/reservation/index.html.twig */
class __TwigTemplate_b393d44161d60d8e71d4c4a6af40221a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/index.html.twig"));

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

        yield "Mes Réservations";
        
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
        yield "<div style=\"display:flex;justify-content:space-between;align-items:center;margin-bottom:32px;flex-wrap:wrap;gap:16px;\">
    <div>
        <h1 style=\"font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;\">🎫 Mes Réservations</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Suivez et gérez vos réservations de voyage</p>
    </div>
    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_voyage_index");
        yield "\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvelle Réservation</a>
</div>

";
        // line 13
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "    <div class=\"dashboard-card\">
        <div class=\"empty-state\">
            <i class=\"fas fa-ticket-alt\" style=\"font-size:4rem;\"></i>
            <h3>Vous n'avez pas encore de réservations</h3>
            <p>Parcourez notre catalogue et réservez votre prochain voyage !</p>
            <a href=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_voyage_index");
            yield "\" class=\"btn btn-primary btn-sm\" style=\"margin-top:20px;\"><i class=\"fas fa-plane\"></i> Explorer les voyages</a>
        </div>
    </div>
";
        } else {
            // line 23
            yield "    <div style=\"display:grid;gap:20px;\">
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 24, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["res"]) {
                // line 25
                yield "        <div class=\"dashboard-card\" style=\"animation-delay:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25) * 0.1), "html", null, true);
                yield "s\">
            <div style=\"display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:16px;\">
                <div style=\"display:flex;gap:20px;align-items:center;\">
                    <div style=\"width:64px;height:64px;border-radius:16px;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;font-size:1.8rem;color:white;\">
                        ✈️
                    </div>
                    <div>
                        <h3 style=\"font-size:1.1rem;font-weight:700;margin-bottom:4px;\">
                            ";
                // line 33
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "voyage", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["res"], "voyage", [], "any", false, false, false, 33), "titre", [], "any", false, false, false, 33), "html", null, true);
                } else {
                    yield "Voyage supprimé";
                }
                // line 34
                yield "                        </h3>
                        ";
                // line 35
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "voyage", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "                        <div style=\"display:flex;gap:12px;color:var(--text-muted);font-size:0.82rem;\">
                            <span><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);\"></i> ";
                    // line 37
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["res"], "voyage", [], "any", false, false, false, 37), "destination", [], "any", false, false, false, 37), "html", null, true);
                    yield "</span>
                            <span><i class=\"fas fa-calendar\"></i> ";
                    // line 38
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["res"], "dateReservation", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "dateReservation", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true)) : ("-"));
                    yield "</span>
                            <span><i class=\"fas fa-users\"></i> ";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "nbrPersonnes", [], "any", false, false, false, 39), "html", null, true);
                    yield " pers.</span>
                        </div>
                        ";
                }
                // line 42
                yield "                    </div>
                </div>
                <div style=\"text-align:right;\">
                    <div style=\"font-size:1.4rem;font-weight:800;color:var(--primary);margin-bottom:6px;\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "montantTotal", [], "any", false, false, false, 45), 2, ",", " "), "html", null, true);
                yield " TND</div>
                    <span class=\"badge badge-";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statutBadgeClass", [], "any", false, false, false, 46), "html", null, true);
                yield "\" style=\"font-size:0.82rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statutLabel", [], "any", false, false, false, 46), "html", null, true);
                yield "</span>
                </div>
            </div>

            <div style=\"display:flex;gap:8px;margin-top:16px;padding-top:12px;border-top:1px solid #f1f5f9;justify-content:flex-end;\">
                <a href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\" class=\"btn btn-outline btn-xs\"><i class=\"fas fa-eye\"></i> Détails</a>
                ";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["res"], "statut", [], "any", false, false, false, 52) == "EN_ATTENTE")) {
                    // line 53
                    yield "                    <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, $context["res"], "id", [], "any", false, false, false, 54))), "html", null, true);
                    yield "\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-xs\"><i class=\"fas fa-times\"></i> Annuler</button>
                    </form>
                ";
                }
                // line 58
                yield "            </div>
        </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['res'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/reservation/index.html.twig";
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
        return array (  227 => 61,  211 => 58,  204 => 54,  199 => 53,  197 => 52,  193 => 51,  183 => 46,  179 => 45,  174 => 42,  168 => 39,  164 => 38,  160 => 37,  157 => 36,  155 => 35,  152 => 34,  146 => 33,  134 => 25,  117 => 24,  114 => 23,  107 => 19,  100 => 14,  98 => 13,  92 => 10,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Mes Réservations{% endblock %}

{% block content %}
<div style=\"display:flex;justify-content:space-between;align-items:center;margin-bottom:32px;flex-wrap:wrap;gap:16px;\">
    <div>
        <h1 style=\"font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;\">🎫 Mes Réservations</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Suivez et gérez vos réservations de voyage</p>
    </div>
    <a href=\"{{ path('client_voyage_index') }}\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-plus\"></i> Nouvelle Réservation</a>
</div>

{% if reservations is empty %}
    <div class=\"dashboard-card\">
        <div class=\"empty-state\">
            <i class=\"fas fa-ticket-alt\" style=\"font-size:4rem;\"></i>
            <h3>Vous n'avez pas encore de réservations</h3>
            <p>Parcourez notre catalogue et réservez votre prochain voyage !</p>
            <a href=\"{{ path('client_voyage_index') }}\" class=\"btn btn-primary btn-sm\" style=\"margin-top:20px;\"><i class=\"fas fa-plane\"></i> Explorer les voyages</a>
        </div>
    </div>
{% else %}
    <div style=\"display:grid;gap:20px;\">
        {% for res in reservations %}
        <div class=\"dashboard-card\" style=\"animation-delay:{{ loop.index * 0.1 }}s\">
            <div style=\"display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:16px;\">
                <div style=\"display:flex;gap:20px;align-items:center;\">
                    <div style=\"width:64px;height:64px;border-radius:16px;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;font-size:1.8rem;color:white;\">
                        ✈️
                    </div>
                    <div>
                        <h3 style=\"font-size:1.1rem;font-weight:700;margin-bottom:4px;\">
                            {% if res.voyage %}{{ res.voyage.titre }}{% else %}Voyage supprimé{% endif %}
                        </h3>
                        {% if res.voyage %}
                        <div style=\"display:flex;gap:12px;color:var(--text-muted);font-size:0.82rem;\">
                            <span><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);\"></i> {{ res.voyage.destination }}</span>
                            <span><i class=\"fas fa-calendar\"></i> {{ res.dateReservation ? res.dateReservation|date('d/m/Y') : '-' }}</span>
                            <span><i class=\"fas fa-users\"></i> {{ res.nbrPersonnes }} pers.</span>
                        </div>
                        {% endif %}
                    </div>
                </div>
                <div style=\"text-align:right;\">
                    <div style=\"font-size:1.4rem;font-weight:800;color:var(--primary);margin-bottom:6px;\">{{ res.montantTotal|number_format(2, ',', ' ') }} TND</div>
                    <span class=\"badge badge-{{ res.statutBadgeClass }}\" style=\"font-size:0.82rem;\">{{ res.statutLabel }}</span>
                </div>
            </div>

            <div style=\"display:flex;gap:8px;margin-top:16px;padding-top:12px;border-top:1px solid #f1f5f9;justify-content:flex-end;\">
                <a href=\"{{ path('client_reservation_show', {id: res.id}) }}\" class=\"btn btn-outline btn-xs\"><i class=\"fas fa-eye\"></i> Détails</a>
                {% if res.statut == 'EN_ATTENTE' %}
                    <form method=\"post\" action=\"{{ path('client_reservation_cancel', {id: res.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ res.id) }}\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-xs\"><i class=\"fas fa-times\"></i> Annuler</button>
                    </form>
                {% endif %}
            </div>
        </div>
        {% endfor %}
    </div>
{% endif %}
{% endblock %}
", "client/reservation/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\reservation\\index.html.twig");
    }
}
