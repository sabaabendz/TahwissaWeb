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

/* client/reclamation/show.html.twig */
class __TwigTemplate_d04ef79de2d656ce63d18f0dc9dd0f9f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reclamation/show.html.twig"));

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

        yield "Réclamation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reclamation_index");
        yield "\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;font-weight:500;\">
        <i class=\"fas fa-arrow-left\"></i> Mes réclamations
    </a>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.5rem;font-weight:800;margin-bottom:8px;\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), "html", null, true);
        yield "</h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                <span class=\"badge badge-info\">";
        // line 16
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["reclamation"] ?? null), "type", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16), "html", null, true)) : ("Non classé"));
        yield "</span>
                <span class=\"badge badge-";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 17, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 17), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 17, $this->source); })()), "statutLabel", [], "any", false, false, false, 17), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div style=\"text-align:right;color:var(--text-muted);font-size:0.85rem;\">
            Soumise le<br><strong>";
        // line 21
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 21, $this->source); })()), "dateCreation", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 21, $this->source); })()), "dateCreation", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</strong>
        </div>
    </div>

    <div style=\"margin-bottom:28px;padding:20px;background:#f8fafc;border-radius:var(--radius-sm);border-left:4px solid var(--danger);\">
        <div style=\"font-size:0.8rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--text-muted);margin-bottom:8px;\">Description</div>
        <p style=\"color:#475569;font-size:0.95rem;line-height:1.8;\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        yield "</p>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Type</div>
            <div class=\"value\">";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["reclamation"] ?? null), "type", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), "html", null, true)) : ("Non défini"));
        yield "</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-info-circle\"></i> Statut</div>
            <div class=\"value\"><span class=\"badge badge-";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 37, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 37), "html", null, true);
        yield "\" style=\"font-size:0.9rem;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 37, $this->source); })()), "statutLabel", [], "any", false, false, false, 37), "html", null, true);
        yield "</span></div>
        </div>
    </div>

    ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 41, $this->source); })()), "statut", [], "any", false, false, false, 41) == "TRAITEE")) {
            // line 42
            yield "    <div class=\"alert alert-success\" style=\"margin-top:20px;\"><i class=\"fas fa-check-circle\"></i> Votre réclamation a été traitée par notre équipe.</div>
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 43
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 43, $this->source); })()), "statut", [], "any", false, false, false, 43) == "REJETEE")) {
            // line 44
            yield "    <div class=\"alert alert-danger\" style=\"margin-top:20px;\"><i class=\"fas fa-times-circle\"></i> Votre réclamation a été rejetée.</div>
    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 45
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 45, $this->source); })()), "statut", [], "any", false, false, false, 45) == "EN_COURS")) {
            // line 46
            yield "    <div class=\"alert alert-info\" style=\"margin-top:20px;\"><i class=\"fas fa-spinner fa-spin\"></i> Votre réclamation est en cours de traitement.</div>
    ";
        } else {
            // line 48
            yield "    <div class=\"alert alert-warning\" style=\"margin-top:20px;\"><i class=\"fas fa-clock\"></i> Votre réclamation est en attente de traitement.</div>
    ";
        }
        // line 50
        yield "
    ";
        // line 51
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 51, $this->source); })()), "statut", [], "any", false, false, false, 51) == "EN_ATTENTE")) {
            // line 52
            yield "    <div style=\"margin-top:16px;\">
        <form method=\"post\" action=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer cette réclamation définitivement ?')\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54))), "html", null, true);
            yield "\">
            <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"fas fa-trash\"></i> Supprimer ma réclamation</button>
        </form>
    </div>
    ";
        }
        // line 59
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
        return "client/reclamation/show.html.twig";
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
        return array (  192 => 59,  184 => 54,  180 => 53,  177 => 52,  175 => 51,  172 => 50,  168 => 48,  164 => 46,  162 => 45,  159 => 44,  157 => 43,  154 => 42,  152 => 41,  143 => 37,  136 => 33,  127 => 27,  118 => 21,  109 => 17,  105 => 16,  100 => 14,  89 => 6,  86 => 5,  76 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Réclamation #{{ reclamation.id }}{% endblock %}

{% block content %}
<div style=\"margin-bottom:16px;\">
    <a href=\"{{ path('client_reclamation_index') }}\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;font-weight:500;\">
        <i class=\"fas fa-arrow-left\"></i> Mes réclamations
    </a>
</div>

<div class=\"detail-card\">
    <div class=\"detail-header\">
        <div>
            <h2 style=\"font-size:1.5rem;font-weight:800;margin-bottom:8px;\">{{ reclamation.titre }}</h2>
            <div style=\"display:flex;gap:8px;align-items:center;flex-wrap:wrap;\">
                <span class=\"badge badge-info\">{{ reclamation.type ?? 'Non classé' }}</span>
                <span class=\"badge badge-{{ reclamation.statutBadgeClass }}\">{{ reclamation.statutLabel }}</span>
            </div>
        </div>
        <div style=\"text-align:right;color:var(--text-muted);font-size:0.85rem;\">
            Soumise le<br><strong>{{ reclamation.dateCreation ? reclamation.dateCreation|date('d/m/Y') : 'N/A' }}</strong>
        </div>
    </div>

    <div style=\"margin-bottom:28px;padding:20px;background:#f8fafc;border-radius:var(--radius-sm);border-left:4px solid var(--danger);\">
        <div style=\"font-size:0.8rem;text-transform:uppercase;letter-spacing:0.5px;color:var(--text-muted);margin-bottom:8px;\">Description</div>
        <p style=\"color:#475569;font-size:0.95rem;line-height:1.8;\">{{ reclamation.description }}</p>
    </div>

    <div class=\"detail-grid\">
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-tag\"></i> Type</div>
            <div class=\"value\">{{ reclamation.type ?? 'Non défini' }}</div>
        </div>
        <div class=\"detail-item\">
            <div class=\"label\"><i class=\"fas fa-info-circle\"></i> Statut</div>
            <div class=\"value\"><span class=\"badge badge-{{ reclamation.statutBadgeClass }}\" style=\"font-size:0.9rem;\">{{ reclamation.statutLabel }}</span></div>
        </div>
    </div>

    {% if reclamation.statut == 'TRAITEE' %}
    <div class=\"alert alert-success\" style=\"margin-top:20px;\"><i class=\"fas fa-check-circle\"></i> Votre réclamation a été traitée par notre équipe.</div>
    {% elseif reclamation.statut == 'REJETEE' %}
    <div class=\"alert alert-danger\" style=\"margin-top:20px;\"><i class=\"fas fa-times-circle\"></i> Votre réclamation a été rejetée.</div>
    {% elseif reclamation.statut == 'EN_COURS' %}
    <div class=\"alert alert-info\" style=\"margin-top:20px;\"><i class=\"fas fa-spinner fa-spin\"></i> Votre réclamation est en cours de traitement.</div>
    {% else %}
    <div class=\"alert alert-warning\" style=\"margin-top:20px;\"><i class=\"fas fa-clock\"></i> Votre réclamation est en attente de traitement.</div>
    {% endif %}

    {% if reclamation.statut == 'EN_ATTENTE' %}
    <div style=\"margin-top:16px;\">
        <form method=\"post\" action=\"{{ path('client_reclamation_delete', {id: reclamation.id}) }}\" onsubmit=\"return confirm('Supprimer cette réclamation définitivement ?')\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
            <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\"><i class=\"fas fa-trash\"></i> Supprimer ma réclamation</button>
        </form>
    </div>
    {% endif %}
</div>
{% endblock %}
", "client/reclamation/show.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\reclamation\\show.html.twig");
    }
}
