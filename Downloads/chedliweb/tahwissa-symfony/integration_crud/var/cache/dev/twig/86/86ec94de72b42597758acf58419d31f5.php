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

/* admin/statistiques/index.html.twig */
class __TwigTemplate_39cdf76fee6ce2391a5c5058e023a74f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistiques/index.html.twig"));

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

        yield "Admin - Statistiques";
        
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
        <h1><i class=\"fas fa-chart-line\" style=\"color:var(--accent);margin-right:10px;\"></i>Tableau de Bord & Statistiques</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Vue d'ensemble de votre activité</p>
    </div>
</div>

";
        // line 13
        yield "<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon\"><i class=\"fas fa-plane\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyageStats"]) || array_key_exists("voyageStats", $context) ? $context["voyageStats"] : (function () { throw new RuntimeError('Variable "voyageStats" does not exist.', 16, $this->source); })()), "total", [], "any", false, false, false, 16), "html", null, true);
        yield "</h3><p>Voyages</p></div>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon\"><i class=\"fas fa-ticket-alt\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationStats"]) || array_key_exists("reservationStats", $context) ? $context["reservationStats"] : (function () { throw new RuntimeError('Variable "reservationStats" does not exist.', 20, $this->source); })()), "total", [], "any", false, false, false, 20), "html", null, true);
        yield "</h3><p>Réservations</p></div>
    </div>
    <div class=\"stat-card orange\">
        <div class=\"stat-icon\"><i class=\"fas fa-coins\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationStats"]) || array_key_exists("reservationStats", $context) ? $context["reservationStats"] : (function () { throw new RuntimeError('Variable "reservationStats" does not exist.', 24, $this->source); })()), "revenu", [], "any", false, false, false, 24), 0, ",", " "), "html", null, true);
        yield " TND</h3><p>Revenu confirmé</p></div>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon\"><i class=\"fas fa-users\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "</h3><p>Utilisateurs</p></div>
    </div>
</div>

";
        // line 33
        yield "<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);margin-bottom:32px;\">
    <div class=\"stat-card green\">
        <div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationStats"]) || array_key_exists("reservationStats", $context) ? $context["reservationStats"] : (function () { throw new RuntimeError('Variable "reservationStats" does not exist.', 36, $this->source); })()), "confirmees", [], "any", false, false, false, 36), "html", null, true);
        yield "</h3><p>Confirmées</p></div>
    </div>
    <div class=\"stat-card orange\">
        <div class=\"stat-icon\"><i class=\"fas fa-clock\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationStats"]) || array_key_exists("reservationStats", $context) ? $context["reservationStats"] : (function () { throw new RuntimeError('Variable "reservationStats" does not exist.', 40, $this->source); })()), "enAttente", [], "any", false, false, false, 40), "html", null, true);
        yield "</h3><p>En attente</p></div>
    </div>
    <div class=\"stat-card red\">
        <div class=\"stat-icon\"><i class=\"fas fa-times-circle\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationStats"]) || array_key_exists("reservationStats", $context) ? $context["reservationStats"] : (function () { throw new RuntimeError('Variable "reservationStats" does not exist.', 44, $this->source); })()), "annulees", [], "any", false, false, false, 44), "html", null, true);
        yield "</h3><p>Annulées</p></div>
    </div>
    <div class=\"stat-card blue\">
        <div class=\"stat-icon\"><i class=\"fas fa-calendar-star\"></i></div>
        <div class=\"stat-info\"><h3>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalEvenements"]) || array_key_exists("totalEvenements", $context) ? $context["totalEvenements"] : (function () { throw new RuntimeError('Variable "totalEvenements" does not exist.', 48, $this->source); })()), "html", null, true);
        yield "</h3><p>Événements</p></div>
    </div>
</div>

";
        // line 53
        yield "<div style=\"display:grid;grid-template-columns:2fr 1fr;gap:24px;margin-bottom:32px;\">
    ";
        // line 55
        yield "    <div class=\"dashboard-card\">
        <h3 style=\"font-size:1.1rem;font-weight:700;margin-bottom:20px;\"><i class=\"fas fa-chart-bar\" style=\"color:var(--primary);margin-right:8px;\"></i>Réservations Mensuelles</h3>
        <canvas id=\"monthlyChart\" height=\"280\"></canvas>
    </div>

    ";
        // line 61
        yield "    <div class=\"dashboard-card\">
        <h3 style=\"font-size:1.1rem;font-weight:700;margin-bottom:20px;\"><i class=\"fas fa-chart-pie\" style=\"color:var(--secondary);margin-right:8px;\"></i>Réservations par Statut</h3>
        <canvas id=\"statusChart\" height=\"280\"></canvas>
    </div>
</div>

";
        // line 68
        yield "<div style=\"display:grid;grid-template-columns:2fr 1fr;gap:24px;\">
    ";
        // line 70
        yield "    <div class=\"dashboard-card\">
        <h3 style=\"font-size:1.1rem;font-weight:700;margin-bottom:20px;\"><i class=\"fas fa-money-bill-wave\" style=\"color:var(--success);margin-right:8px;\"></i>Revenu Mensuel (TND)</h3>
        <canvas id=\"revenueChart\" height=\"280\"></canvas>
    </div>

    ";
        // line 76
        yield "    <div class=\"dashboard-card\">
        <h3 style=\"font-size:1.1rem;font-weight:700;margin-bottom:20px;\"><i class=\"fas fa-trophy\" style=\"color:var(--accent);margin-right:8px;\"></i>Top Destinations</h3>
        ";
        // line 78
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["topDestinations"]) || array_key_exists("topDestinations", $context) ? $context["topDestinations"] : (function () { throw new RuntimeError('Variable "topDestinations" does not exist.', 78, $this->source); })()))) {
            // line 79
            yield "            <p style=\"color:var(--text-muted);text-align:center;padding:40px;\">Aucune donnée</p>
        ";
        } else {
            // line 81
            yield "            <div style=\"display:flex;flex-direction:column;gap:12px;\">
                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topDestinations"]) || array_key_exists("topDestinations", $context) ? $context["topDestinations"] : (function () { throw new RuntimeError('Variable "topDestinations" does not exist.', 82, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dest"]) {
                // line 83
                yield "                <div style=\"display:flex;align-items:center;gap:12px;padding:12px;background:#f8fafc;border-radius:var(--radius-sm);\">
                    <div style=\"width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;color:white;font-weight:800;font-size:0.85rem;\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 84), "html", null, true);
                yield "</div>
                    <div style=\"flex:1;\">
                        <div style=\"font-weight:700;font-size:0.95rem;\">";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dest"], "destination", [], "any", false, false, false, 86), "html", null, true);
                yield "</div>
                        <div style=\"font-size:0.8rem;color:var(--text-muted);\">";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dest"], "total", [], "any", false, false, false, 87), "html", null, true);
                yield " réservation";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["dest"], "total", [], "any", false, false, false, 87) > 1)) ? ("s") : (""));
                yield "</div>
                    </div>
                    <div style=\"font-weight:700;color:var(--accent);\">";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["dest"], "revenu", [], "any", false, false, false, 89), 0, ",", " "), "html", null, true);
                yield " TND</div>
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
            unset($context['_seq'], $context['_key'], $context['dest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "            </div>
        ";
        }
        // line 94
        yield "    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.6/dist/chart.umd.min.js\"></script>
<script>
    const monthLabels = ";
        // line 99
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyData"]) || array_key_exists("monthlyData", $context) ? $context["monthlyData"] : (function () { throw new RuntimeError('Variable "monthlyData" does not exist.', 99, $this->source); })()), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 99, $this->source); })()), "mois", [], "any", false, false, false, 99); }));
        yield ";
    const monthTotals = ";
        // line 100
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyData"]) || array_key_exists("monthlyData", $context) ? $context["monthlyData"] : (function () { throw new RuntimeError('Variable "monthlyData" does not exist.', 100, $this->source); })()), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 100, $this->source); })()), "total", [], "any", false, false, false, 100); }));
        yield ";
    const monthRevenu = ";
        // line 101
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyData"]) || array_key_exists("monthlyData", $context) ? $context["monthlyData"] : (function () { throw new RuntimeError('Variable "monthlyData" does not exist.', 101, $this->source); })()), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 101, $this->source); })()), "revenu", [], "any", false, false, false, 101); }));
        yield ";

    // Monthly reservations bar chart
    new Chart(document.getElementById('monthlyChart'), {
        type: 'bar',
        data: {
            labels: monthLabels,
            datasets: [{
                label: 'Réservations',
                data: monthTotals,
                backgroundColor: 'rgba(21,101,192,0.7)',
                borderRadius: 8,
                borderSkipped: false,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, ticks: { stepSize: 1 } },
                x: { grid: { display: false } }
            }
        }
    });

    // Status pie chart
    const statusLabels = ";
        // line 128
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["statusData"]) || array_key_exists("statusData", $context) ? $context["statusData"] : (function () { throw new RuntimeError('Variable "statusData" does not exist.', 128, $this->source); })()), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 128, $this->source); })()), "statut", [], "any", false, false, false, 128); }));
        yield ";
    const statusTotals = ";
        // line 129
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["statusData"]) || array_key_exists("statusData", $context) ? $context["statusData"] : (function () { throw new RuntimeError('Variable "statusData" does not exist.', 129, $this->source); })()), function ($__d__) use ($context, $macros) { $context["d"] = $__d__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 129, $this->source); })()), "total", [], "any", false, false, false, 129); }));
        yield ";
    const statusColors = statusLabels.map(s => {
        switch(s) {
            case 'EN_ATTENTE': return '#F9A825';
            case 'CONFIRMEE': return '#00C853';
            case 'ANNULEE': return '#FF1744';
            case 'TERMINEE': return '#00B0FF';
            default: return '#94a3b8';
        }
    });

    new Chart(document.getElementById('statusChart'), {
        type: 'doughnut',
        data: {
            labels: statusLabels.map(s => {
                switch(s) {
                    case 'EN_ATTENTE': return 'En attente';
                    case 'CONFIRMEE': return 'Confirmée';
                    case 'ANNULEE': return 'Annulée';
                    case 'TERMINEE': return 'Terminée';
                    default: return s;
                }
            }),
            datasets: [{
                data: statusTotals,
                backgroundColor: statusColors,
                borderWidth: 0,
                spacing: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '60%',
            plugins: {
                legend: { position: 'bottom', labels: { padding: 16, font: { size: 12 } } }
            }
        }
    });

    // Revenue line chart
    new Chart(document.getElementById('revenueChart'), {
        type: 'line',
        data: {
            labels: monthLabels,
            datasets: [{
                label: 'Revenu (TND)',
                data: monthRevenu,
                borderColor: '#00C853',
                backgroundColor: 'rgba(0,200,83,0.1)',
                fill: true,
                tension: 0.4,
                pointRadius: 5,
                pointBackgroundColor: '#00C853',
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true },
                x: { grid: { display: false } }
            }
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/statistiques/index.html.twig";
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
        return array (  307 => 129,  303 => 128,  273 => 101,  269 => 100,  265 => 99,  258 => 94,  254 => 92,  237 => 89,  230 => 87,  226 => 86,  221 => 84,  218 => 83,  201 => 82,  198 => 81,  194 => 79,  192 => 78,  188 => 76,  181 => 70,  178 => 68,  170 => 61,  163 => 55,  160 => 53,  153 => 48,  146 => 44,  139 => 40,  132 => 36,  127 => 33,  120 => 28,  113 => 24,  106 => 20,  99 => 16,  94 => 13,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Statistiques{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-chart-line\" style=\"color:var(--accent);margin-right:10px;\"></i>Tableau de Bord & Statistiques</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Vue d'ensemble de votre activité</p>
    </div>
</div>

{# KPI Cards #}
<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);\">
    <div class=\"stat-card blue\">
        <div class=\"stat-icon\"><i class=\"fas fa-plane\"></i></div>
        <div class=\"stat-info\"><h3>{{ voyageStats.total }}</h3><p>Voyages</p></div>
    </div>
    <div class=\"stat-card green\">
        <div class=\"stat-icon\"><i class=\"fas fa-ticket-alt\"></i></div>
        <div class=\"stat-info\"><h3>{{ reservationStats.total }}</h3><p>Réservations</p></div>
    </div>
    <div class=\"stat-card orange\">
        <div class=\"stat-icon\"><i class=\"fas fa-coins\"></i></div>
        <div class=\"stat-info\"><h3>{{ reservationStats.revenu|number_format(0, ',', ' ') }} TND</h3><p>Revenu confirmé</p></div>
    </div>
    <div class=\"stat-card purple\">
        <div class=\"stat-icon\"><i class=\"fas fa-users\"></i></div>
        <div class=\"stat-info\"><h3>{{ totalUsers }}</h3><p>Utilisateurs</p></div>
    </div>
</div>

{# Second row: more stats #}
<div class=\"stats-grid\" style=\"grid-template-columns:repeat(4,1fr);margin-bottom:32px;\">
    <div class=\"stat-card green\">
        <div class=\"stat-icon\"><i class=\"fas fa-check-circle\"></i></div>
        <div class=\"stat-info\"><h3>{{ reservationStats.confirmees }}</h3><p>Confirmées</p></div>
    </div>
    <div class=\"stat-card orange\">
        <div class=\"stat-icon\"><i class=\"fas fa-clock\"></i></div>
        <div class=\"stat-info\"><h3>{{ reservationStats.enAttente }}</h3><p>En attente</p></div>
    </div>
    <div class=\"stat-card red\">
        <div class=\"stat-icon\"><i class=\"fas fa-times-circle\"></i></div>
        <div class=\"stat-info\"><h3>{{ reservationStats.annulees }}</h3><p>Annulées</p></div>
    </div>
    <div class=\"stat-card blue\">
        <div class=\"stat-icon\"><i class=\"fas fa-calendar-star\"></i></div>
        <div class=\"stat-info\"><h3>{{ totalEvenements }}</h3><p>Événements</p></div>
    </div>
</div>

{# Charts Row #}
<div style=\"display:grid;grid-template-columns:2fr 1fr;gap:24px;margin-bottom:32px;\">
    {# Monthly Reservations Chart #}
    <div class=\"dashboard-card\">
        <h3 style=\"font-size:1.1rem;font-weight:700;margin-bottom:20px;\"><i class=\"fas fa-chart-bar\" style=\"color:var(--primary);margin-right:8px;\"></i>Réservations Mensuelles</h3>
        <canvas id=\"monthlyChart\" height=\"280\"></canvas>
    </div>

    {# Status Pie Chart #}
    <div class=\"dashboard-card\">
        <h3 style=\"font-size:1.1rem;font-weight:700;margin-bottom:20px;\"><i class=\"fas fa-chart-pie\" style=\"color:var(--secondary);margin-right:8px;\"></i>Réservations par Statut</h3>
        <canvas id=\"statusChart\" height=\"280\"></canvas>
    </div>
</div>

{# Revenue Chart + Top Destinations #}
<div style=\"display:grid;grid-template-columns:2fr 1fr;gap:24px;\">
    {# Revenue Chart #}
    <div class=\"dashboard-card\">
        <h3 style=\"font-size:1.1rem;font-weight:700;margin-bottom:20px;\"><i class=\"fas fa-money-bill-wave\" style=\"color:var(--success);margin-right:8px;\"></i>Revenu Mensuel (TND)</h3>
        <canvas id=\"revenueChart\" height=\"280\"></canvas>
    </div>

    {# Top Destinations #}
    <div class=\"dashboard-card\">
        <h3 style=\"font-size:1.1rem;font-weight:700;margin-bottom:20px;\"><i class=\"fas fa-trophy\" style=\"color:var(--accent);margin-right:8px;\"></i>Top Destinations</h3>
        {% if topDestinations is empty %}
            <p style=\"color:var(--text-muted);text-align:center;padding:40px;\">Aucune donnée</p>
        {% else %}
            <div style=\"display:flex;flex-direction:column;gap:12px;\">
                {% for dest in topDestinations %}
                <div style=\"display:flex;align-items:center;gap:12px;padding:12px;background:#f8fafc;border-radius:var(--radius-sm);\">
                    <div style=\"width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,var(--primary),var(--secondary));display:flex;align-items:center;justify-content:center;color:white;font-weight:800;font-size:0.85rem;\">{{ loop.index }}</div>
                    <div style=\"flex:1;\">
                        <div style=\"font-weight:700;font-size:0.95rem;\">{{ dest.destination }}</div>
                        <div style=\"font-size:0.8rem;color:var(--text-muted);\">{{ dest.total }} réservation{{ dest.total > 1 ? 's' : '' }}</div>
                    </div>
                    <div style=\"font-weight:700;color:var(--accent);\">{{ dest.revenu|number_format(0, ',', ' ') }} TND</div>
                </div>
                {% endfor %}
            </div>
        {% endif %}
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.6/dist/chart.umd.min.js\"></script>
<script>
    const monthLabels = {{ monthlyData|map(d => d.mois)|json_encode|raw }};
    const monthTotals = {{ monthlyData|map(d => d.total)|json_encode|raw }};
    const monthRevenu = {{ monthlyData|map(d => d.revenu)|json_encode|raw }};

    // Monthly reservations bar chart
    new Chart(document.getElementById('monthlyChart'), {
        type: 'bar',
        data: {
            labels: monthLabels,
            datasets: [{
                label: 'Réservations',
                data: monthTotals,
                backgroundColor: 'rgba(21,101,192,0.7)',
                borderRadius: 8,
                borderSkipped: false,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, ticks: { stepSize: 1 } },
                x: { grid: { display: false } }
            }
        }
    });

    // Status pie chart
    const statusLabels = {{ statusData|map(d => d.statut)|json_encode|raw }};
    const statusTotals = {{ statusData|map(d => d.total)|json_encode|raw }};
    const statusColors = statusLabels.map(s => {
        switch(s) {
            case 'EN_ATTENTE': return '#F9A825';
            case 'CONFIRMEE': return '#00C853';
            case 'ANNULEE': return '#FF1744';
            case 'TERMINEE': return '#00B0FF';
            default: return '#94a3b8';
        }
    });

    new Chart(document.getElementById('statusChart'), {
        type: 'doughnut',
        data: {
            labels: statusLabels.map(s => {
                switch(s) {
                    case 'EN_ATTENTE': return 'En attente';
                    case 'CONFIRMEE': return 'Confirmée';
                    case 'ANNULEE': return 'Annulée';
                    case 'TERMINEE': return 'Terminée';
                    default: return s;
                }
            }),
            datasets: [{
                data: statusTotals,
                backgroundColor: statusColors,
                borderWidth: 0,
                spacing: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '60%',
            plugins: {
                legend: { position: 'bottom', labels: { padding: 16, font: { size: 12 } } }
            }
        }
    });

    // Revenue line chart
    new Chart(document.getElementById('revenueChart'), {
        type: 'line',
        data: {
            labels: monthLabels,
            datasets: [{
                label: 'Revenu (TND)',
                data: monthRevenu,
                borderColor: '#00C853',
                backgroundColor: 'rgba(0,200,83,0.1)',
                fill: true,
                tension: 0.4,
                pointRadius: 5,
                pointBackgroundColor: '#00C853',
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true },
                x: { grid: { display: false } }
            }
        }
    });
</script>
{% endblock %}
", "admin/statistiques/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\statistiques\\index.html.twig");
    }
}
