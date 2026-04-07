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

/* client/voyage/index.html.twig */
class __TwigTemplate_3841ad9582daace1a05f6dace2d30eb4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/voyage/index.html.twig"));

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

        yield "Voyages - Catalogue";
        
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
        yield "<div style=\"text-align:center;margin-bottom:40px;\">
    <h1 style=\"font-family:'Playfair Display',serif;font-size:2.5rem;font-weight:900;margin-bottom:8px;\">
        🌍 Découvrez nos <span style=\"background:linear-gradient(135deg,var(--primary),var(--secondary));-webkit-background-clip:text;-webkit-text-fill-color:transparent;\">Voyages</span>
    </h1>
    <p style=\"color:var(--text-muted);font-size:1rem;\">Trouvez le voyage parfait et réservez en quelques clics</p>
</div>

";
        // line 13
        yield "<div style=\"max-width:500px;margin:0 auto 32px;\">
    <form method=\"get\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_voyage_index");
        yield "\" class=\"search-box\" style=\"box-shadow:var(--shadow);\">
        <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
        <input type=\"text\" name=\"search\" placeholder=\"Rechercher par destination, titre...\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\" style=\"font-size:0.95rem;\">
        <button type=\"submit\" class=\"btn btn-primary btn-xs\">Chercher</button>
    </form>
</div>

";
        // line 21
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 21, $this->source); })()))) {
            // line 22
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-globe\"></i>
        <h3>Aucun voyage disponible</h3>
        <p>Revenez bientôt pour découvrir de nouvelles offres !</p>
    </div>
";
        } else {
            // line 28
            yield "    <div class=\"voyage-grid\">
        ";
            // line 29
            $context["gradients"] = ["linear-gradient(135deg, #1565C0, #42A5F5)", "linear-gradient(135deg, #FF6D00, #FF9100)", "linear-gradient(135deg, #7C4DFF, #B388FF)", "linear-gradient(135deg, #00C853, #00E676)", "linear-gradient(135deg, #FF1744, #FF5252)", "linear-gradient(135deg, #00B0FF, #40C4FF)"];
            // line 37
            yield "        ";
            $context["icons"] = ["🏖️", "🏔️", "🏜️", "🌴", "🗻", "🏝️", "🌊", "⛰️"];
            // line 38
            yield "
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 39, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
                // line 40
                yield "        <div class=\"voyage-card\" style=\"animation-delay:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40) * 0.1), "html", null, true);
                yield "s\">
            <div class=\"voyage-card-image\" style=\"";
                // line 41
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "imageUrl", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "background:url('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "imageUrl", [], "any", false, false, false, 41), "html", null, true);
                    yield "') center/cover no-repeat;";
                } else {
                    yield "background:";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["gradients"]) || array_key_exists("gradients", $context) ? $context["gradients"] : (function () { throw new RuntimeError('Variable "gradients" does not exist.', 41, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 41) % 6), [], "array", false, false, false, 41), "html", null, true);
                    yield ";";
                }
                yield "\">
                ";
                // line 42
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "imageUrl", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 42, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 42) % 8), [], "array", false, false, false, 42), "html", null, true);
                    yield "</span>";
                }
                // line 43
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "categorie", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "                    <span class=\"category-badge badge badge-primary\" style=\"background:rgba(255,255,255,0.2);color:white;backdrop-filter:blur(10px);\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "categorie", [], "any", false, false, false, 44), "html", null, true);
                    yield "</span>
                ";
                }
                // line 46
                yield "            </div>
            <div class=\"voyage-card-body\">
                <h3>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "titre", [], "any", false, false, false, 48), "html", null, true);
                yield "</h3>
                <div class=\"destination\"><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);\"></i> ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "destination", [], "any", false, false, false, 49), "html", null, true);
                yield "</div>

                ";
                // line 51
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "description", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 52
                    yield "                    <p style=\"font-size:0.82rem;color:var(--text-muted);margin-bottom:12px;line-height:1.5;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "description", [], "any", false, false, false, 52), "html", null, true);
                    yield "</p>
                ";
                }
                // line 54
                yield "
                <div class=\"info-row\">
                    <span><i class=\"fas fa-calendar\"></i> ";
                // line 56
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dateDepart", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "dateDepart", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</span>
                    <span><i class=\"fas fa-clock\"></i> ";
                // line 57
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "duree", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "duree", [], "any", false, false, false, 57) . "j"), "html", null, true)) : ("-"));
                yield "</span>
                </div>
                <div class=\"info-row\">
                    <span><i class=\"fas fa-chair\"></i> ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "placesDisponibles", [], "any", false, false, false, 60), "html", null, true);
                yield " places</span>
                    <span class=\"price\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "prixUnitaire", [], "any", false, false, false, 61), 0, ",", " "), "html", null, true);
                yield " TND</span>
                </div>
            </div>
            <div class=\"voyage-card-footer\">
                <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_voyage_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                yield "\" class=\"btn btn-outline btn-xs\"><i class=\"fas fa-eye\"></i> Détails</a>
                ";
                // line 66
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "placesDisponibles", [], "any", false, false, false, 66) > 0)) {
                    // line 67
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reservation_new", ["voyageId" => CoreExtension::getAttribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                    yield "\" class=\"btn btn-accent btn-xs\"><i class=\"fas fa-ticket-alt\"></i> Réserver</a>
                ";
                } else {
                    // line 69
                    yield "                    <span class=\"badge badge-danger\">Complet</span>
                ";
                }
                // line 71
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
            unset($context['_seq'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
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
        return "client/voyage/index.html.twig";
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
        return array (  258 => 74,  242 => 71,  238 => 69,  232 => 67,  230 => 66,  226 => 65,  219 => 61,  215 => 60,  209 => 57,  205 => 56,  201 => 54,  195 => 52,  193 => 51,  188 => 49,  184 => 48,  180 => 46,  174 => 44,  171 => 43,  165 => 42,  153 => 41,  148 => 40,  131 => 39,  128 => 38,  125 => 37,  123 => 29,  120 => 28,  112 => 22,  110 => 21,  102 => 16,  97 => 14,  94 => 13,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Voyages - Catalogue{% endblock %}

{% block content %}
<div style=\"text-align:center;margin-bottom:40px;\">
    <h1 style=\"font-family:'Playfair Display',serif;font-size:2.5rem;font-weight:900;margin-bottom:8px;\">
        🌍 Découvrez nos <span style=\"background:linear-gradient(135deg,var(--primary),var(--secondary));-webkit-background-clip:text;-webkit-text-fill-color:transparent;\">Voyages</span>
    </h1>
    <p style=\"color:var(--text-muted);font-size:1rem;\">Trouvez le voyage parfait et réservez en quelques clics</p>
</div>

{# Search bar #}
<div style=\"max-width:500px;margin:0 auto 32px;\">
    <form method=\"get\" action=\"{{ path('client_voyage_index') }}\" class=\"search-box\" style=\"box-shadow:var(--shadow);\">
        <i class=\"fas fa-search\" style=\"color:var(--text-muted);\"></i>
        <input type=\"text\" name=\"search\" placeholder=\"Rechercher par destination, titre...\" value=\"{{ search }}\" style=\"font-size:0.95rem;\">
        <button type=\"submit\" class=\"btn btn-primary btn-xs\">Chercher</button>
    </form>
</div>

{% if voyages is empty %}
    <div class=\"empty-state\">
        <i class=\"fas fa-globe\"></i>
        <h3>Aucun voyage disponible</h3>
        <p>Revenez bientôt pour découvrir de nouvelles offres !</p>
    </div>
{% else %}
    <div class=\"voyage-grid\">
        {% set gradients = [
            'linear-gradient(135deg, #1565C0, #42A5F5)',
            'linear-gradient(135deg, #FF6D00, #FF9100)',
            'linear-gradient(135deg, #7C4DFF, #B388FF)',
            'linear-gradient(135deg, #00C853, #00E676)',
            'linear-gradient(135deg, #FF1744, #FF5252)',
            'linear-gradient(135deg, #00B0FF, #40C4FF)',
        ] %}
        {% set icons = ['🏖️', '🏔️', '🏜️', '🌴', '🗻', '🏝️', '🌊', '⛰️'] %}

        {% for voyage in voyages %}
        <div class=\"voyage-card\" style=\"animation-delay:{{ loop.index * 0.1 }}s\">
            <div class=\"voyage-card-image\" style=\"{% if voyage.imageUrl %}background:url('{{ voyage.imageUrl }}') center/cover no-repeat;{% else %}background:{{ gradients[loop.index0 % 6] }};{% endif %}\">
                {% if not voyage.imageUrl %}<span>{{ icons[loop.index0 % 8] }}</span>{% endif %}
                {% if voyage.categorie %}
                    <span class=\"category-badge badge badge-primary\" style=\"background:rgba(255,255,255,0.2);color:white;backdrop-filter:blur(10px);\">{{ voyage.categorie }}</span>
                {% endif %}
            </div>
            <div class=\"voyage-card-body\">
                <h3>{{ voyage.titre }}</h3>
                <div class=\"destination\"><i class=\"fas fa-map-marker-alt\" style=\"color:var(--accent);\"></i> {{ voyage.destination }}</div>

                {% if voyage.description %}
                    <p style=\"font-size:0.82rem;color:var(--text-muted);margin-bottom:12px;line-height:1.5;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;\">{{ voyage.description }}</p>
                {% endif %}

                <div class=\"info-row\">
                    <span><i class=\"fas fa-calendar\"></i> {{ voyage.dateDepart ? voyage.dateDepart|date('d/m/Y') : '-' }}</span>
                    <span><i class=\"fas fa-clock\"></i> {{ voyage.duree ? voyage.duree ~ 'j' : '-' }}</span>
                </div>
                <div class=\"info-row\">
                    <span><i class=\"fas fa-chair\"></i> {{ voyage.placesDisponibles }} places</span>
                    <span class=\"price\">{{ voyage.prixUnitaire|number_format(0, ',', ' ') }} TND</span>
                </div>
            </div>
            <div class=\"voyage-card-footer\">
                <a href=\"{{ path('client_voyage_show', {id: voyage.id}) }}\" class=\"btn btn-outline btn-xs\"><i class=\"fas fa-eye\"></i> Détails</a>
                {% if voyage.placesDisponibles > 0 %}
                    <a href=\"{{ path('client_reservation_new', {voyageId: voyage.id}) }}\" class=\"btn btn-accent btn-xs\"><i class=\"fas fa-ticket-alt\"></i> Réserver</a>
                {% else %}
                    <span class=\"badge badge-danger\">Complet</span>
                {% endif %}
            </div>
        </div>
        {% endfor %}
    </div>
{% endif %}
{% endblock %}
", "client/voyage/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\voyage\\index.html.twig");
    }
}
