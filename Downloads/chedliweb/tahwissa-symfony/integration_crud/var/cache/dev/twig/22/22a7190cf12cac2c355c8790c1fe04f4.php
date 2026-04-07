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

/* client/reclamation/index.html.twig */
class __TwigTemplate_66b3a3043ac4c86fc24df09ae3346714 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reclamation/index.html.twig"));

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

        yield "Mes Réclamations";
        
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
        yield "<div style=\"margin-bottom:24px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;\">
    <div>
        <h1 style=\"font-size:1.8rem;font-weight:800;margin-bottom:4px;\">
            <i class=\"fas fa-flag\" style=\"color:var(--danger);margin-right:8px;\"></i>Mes Réclamations
        </h1>
        <p style=\"color:var(--text-muted);\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 10, $this->source); })())), "html", null, true);
        yield " réclamation(s) soumise(s)</p>
    </div>
    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reclamation_new");
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-plus\"></i> Nouvelle Réclamation</a>
</div>

";
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "    <div class=\"empty-state\" style=\"background:white;border-radius:var(--radius);padding:60px 20px;box-shadow:0 2px 10px rgba(0,0,0,0.06);\">
        <i class=\"fas fa-flag\"></i>
        <h3>Aucune réclamation</h3>
        <p>Vous n'avez soumis aucune réclamation pour le moment.</p>
        <a href=\"";
            // line 20
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reclamation_new");
            yield "\" class=\"btn btn-primary btn-sm\" style=\"margin-top:16px;\"><i class=\"fas fa-plus\"></i> Soumettre une réclamation</a>
    </div>
";
        } else {
            // line 23
            yield "    <div style=\"display:flex;flex-direction:column;gap:16px;\">
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
                // line 25
                yield "        <div style=\"background:white;border-radius:var(--radius);padding:24px;box-shadow:0 2px 10px rgba(0,0,0,0.06);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;border-left:4px solid var(--";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 25) == "TRAITEE")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 25) == "REJETEE")) ? ("danger") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 25) == "EN_COURS")) ? ("info") : ("warning"))))));
                yield ");\">
            <div style=\"flex:1;min-width:200px;\">
                <div style=\"font-weight:700;font-size:1.05rem;margin-bottom:6px;\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "titre", [], "any", false, false, false, 27), "html", null, true);
                yield "</div>
                <div style=\"color:var(--text-muted);font-size:0.85rem;margin-bottom:4px;\">
                    <span class=\"badge badge-info\">";
                // line 29
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "type", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "type", [], "any", false, false, false, 29)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "type", [], "any", false, false, false, 29), "html", null, true)) : ("N/A"));
                yield "</span>
                </div>
                <div style=\"font-size:0.82rem;color:#94a3b8;\">Soumise le ";
                // line 31
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateCreation", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateCreation", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</div>
            </div>
            <div style=\"display:flex;align-items:center;gap:16px;flex-wrap:wrap;\">
                <span class=\"badge badge-";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statutBadgeClass", [], "any", false, false, false, 34), "html", null, true);
                yield "\" style=\"font-size:0.85rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statutLabel", [], "any", false, false, false, 34), "html", null, true);
                yield "</span>
                <a href=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\" class=\"btn btn-outline btn-xs\"><i class=\"fas fa-eye\"></i> Voir</a>
                ";
                // line 36
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statut", [], "any", false, false, false, 36) == "EN_ATTENTE")) {
                    // line 37
                    yield "                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Supprimer cette réclamation ?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 38
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 38))), "html", null, true);
                    yield "\">
                    <button type=\"submit\" class=\"btn btn-outline-danger btn-xs\"><i class=\"fas fa-trash\"></i></button>
                </form>
                ";
                }
                // line 42
                yield "            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
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
        return "client/reclamation/index.html.twig";
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
        return array (  178 => 45,  170 => 42,  163 => 38,  158 => 37,  156 => 36,  152 => 35,  146 => 34,  140 => 31,  135 => 29,  130 => 27,  124 => 25,  120 => 24,  117 => 23,  111 => 20,  105 => 16,  103 => 15,  97 => 12,  92 => 10,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Mes Réclamations{% endblock %}

{% block content %}
<div style=\"margin-bottom:24px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;\">
    <div>
        <h1 style=\"font-size:1.8rem;font-weight:800;margin-bottom:4px;\">
            <i class=\"fas fa-flag\" style=\"color:var(--danger);margin-right:8px;\"></i>Mes Réclamations
        </h1>
        <p style=\"color:var(--text-muted);\">{{ reclamations|length }} réclamation(s) soumise(s)</p>
    </div>
    <a href=\"{{ path('client_reclamation_new') }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-plus\"></i> Nouvelle Réclamation</a>
</div>

{% if reclamations is empty %}
    <div class=\"empty-state\" style=\"background:white;border-radius:var(--radius);padding:60px 20px;box-shadow:0 2px 10px rgba(0,0,0,0.06);\">
        <i class=\"fas fa-flag\"></i>
        <h3>Aucune réclamation</h3>
        <p>Vous n'avez soumis aucune réclamation pour le moment.</p>
        <a href=\"{{ path('client_reclamation_new') }}\" class=\"btn btn-primary btn-sm\" style=\"margin-top:16px;\"><i class=\"fas fa-plus\"></i> Soumettre une réclamation</a>
    </div>
{% else %}
    <div style=\"display:flex;flex-direction:column;gap:16px;\">
        {% for rec in reclamations %}
        <div style=\"background:white;border-radius:var(--radius);padding:24px;box-shadow:0 2px 10px rgba(0,0,0,0.06);display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;border-left:4px solid var(--{{ rec.statut == 'TRAITEE' ? 'success' : (rec.statut == 'REJETEE' ? 'danger' : (rec.statut == 'EN_COURS' ? 'info' : 'warning')) }});\">
            <div style=\"flex:1;min-width:200px;\">
                <div style=\"font-weight:700;font-size:1.05rem;margin-bottom:6px;\">{{ rec.titre }}</div>
                <div style=\"color:var(--text-muted);font-size:0.85rem;margin-bottom:4px;\">
                    <span class=\"badge badge-info\">{{ rec.type ?? 'N/A' }}</span>
                </div>
                <div style=\"font-size:0.82rem;color:#94a3b8;\">Soumise le {{ rec.dateCreation ? rec.dateCreation|date('d/m/Y') : 'N/A' }}</div>
            </div>
            <div style=\"display:flex;align-items:center;gap:16px;flex-wrap:wrap;\">
                <span class=\"badge badge-{{ rec.statutBadgeClass }}\" style=\"font-size:0.85rem;\">{{ rec.statutLabel }}</span>
                <a href=\"{{ path('client_reclamation_show', {id: rec.id}) }}\" class=\"btn btn-outline btn-xs\"><i class=\"fas fa-eye\"></i> Voir</a>
                {% if rec.statut == 'EN_ATTENTE' %}
                <form method=\"post\" action=\"{{ path('client_reclamation_delete', {id: rec.id}) }}\" onsubmit=\"return confirm('Supprimer cette réclamation ?')\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ rec.id) }}\">
                    <button type=\"submit\" class=\"btn btn-outline-danger btn-xs\"><i class=\"fas fa-trash\"></i></button>
                </form>
                {% endif %}
            </div>
        </div>
        {% endfor %}
    </div>
{% endif %}
{% endblock %}
", "client/reclamation/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\reclamation\\index.html.twig");
    }
}
