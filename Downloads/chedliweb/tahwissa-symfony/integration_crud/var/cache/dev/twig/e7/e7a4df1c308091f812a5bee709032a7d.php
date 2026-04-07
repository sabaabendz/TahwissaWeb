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

/* admin/reservation/edit.html.twig */
class __TwigTemplate_576759f316581ae5154065fb8b8e638e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/edit.html.twig"));

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

        yield "Admin - Modifier Réservation";
        
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
        <h1><i class=\"fas fa-edit\" style=\"color:var(--primary);margin-right:10px;\"></i>Modifier Réservation #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    </div>
    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);\"></i> Modifier la Réservation</h2>
    <p class=\"subtitle\">Voyage actuel : ";
        // line 14
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "voyage", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "voyage", [], "any", false, false, false, 14), "titre", [], "any", false, false, false, 14) . " — ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "voyage", [], "any", false, false, false, 14), "destination", [], "any", false, false, false, 14)), "html", null, true)) : ("N/A"));
        yield "</p>

    ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    ";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "idUtilisateur", [], "any", true, true, false, 18)) {
            // line 19
            yield "    <div class=\"form-group ";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19)) > 0)) ? ("has-error") : (""));
            yield "\">
        ";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 20), 'label');
            yield "
        ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 21), 'widget');
            yield "
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                yield "<div class=\"form-error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 22), "html", null, true);
                yield "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "    </div>
    ";
        }
        // line 25
        yield "
    <div class=\"form-group ";
        // line 26
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "voyage", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)) > 0)) ? ("has-error") : (""));
        yield "\">
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "voyage", [], "any", false, false, false, 27), 'label');
        yield "
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "voyage", [], "any", false, false, false, 28), 'widget');
        yield "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "voyage", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 29), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "dateReservation", [], "any", false, false, false, 34), 'label');
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dateReservation", [], "any", false, false, false, 35), 'widget');
        yield "
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "dateReservation", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "errors", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 36), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </div>
        <div class=\"form-group\">
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 39), 'label');
        yield "
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 40), 'widget');
        yield "
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 41), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </div>
    </div>

    ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", true, true, false, 45)) {
            // line 46
            yield "    <div class=\"form-group\">
        ";
            // line 47
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "statut", [], "any", false, false, false, 47), 'label');
            yield "
        ";
            // line 48
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "statut", [], "any", false, false, false, 48), 'widget');
            yield "
    </div>
    ";
        }
        // line 51
        yield "
    <div style=\"background:#f0f4f8;border-radius:var(--radius-sm);padding:16px;margin-top:8px;\">
        <p style=\"font-size:0.85rem;color:var(--text-muted);\"><i class=\"fas fa-calculator\" style=\"color:var(--primary);\"></i> Montant actuel : <strong>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 53, $this->source); })()), "montantTotal", [], "any", false, false, false, 53), 2, ",", " "), "html", null, true);
        yield " TND</strong> — Le montant sera recalculé automatiquement.</p>
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-save\"></i> Enregistrer</button>
    </div>

    ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        yield "
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
        return "admin/reservation/edit.html.twig";
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
        return array (  254 => 61,  247 => 57,  240 => 53,  236 => 51,  230 => 48,  226 => 47,  223 => 46,  221 => 45,  216 => 42,  205 => 41,  201 => 40,  197 => 39,  193 => 37,  182 => 36,  178 => 35,  174 => 34,  168 => 30,  157 => 29,  153 => 28,  149 => 27,  145 => 26,  142 => 25,  138 => 23,  127 => 22,  123 => 21,  119 => 20,  114 => 19,  112 => 18,  107 => 16,  102 => 14,  94 => 9,  89 => 7,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Modifier Réservation{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-edit\" style=\"color:var(--primary);margin-right:10px;\"></i>Modifier Réservation #{{ reservation.id }}</h1>
    </div>
    <a href=\"{{ path('admin_reservation_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);\"></i> Modifier la Réservation</h2>
    <p class=\"subtitle\">Voyage actuel : {{ reservation.voyage ? reservation.voyage.titre ~ ' — ' ~ reservation.voyage.destination : 'N/A' }}</p>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    {% if form.idUtilisateur is defined %}
    <div class=\"form-group {{ form.idUtilisateur.vars.errors|length > 0 ? 'has-error' : '' }}\">
        {{ form_label(form.idUtilisateur) }}
        {{ form_widget(form.idUtilisateur) }}
        {% for error in form.idUtilisateur.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
    </div>
    {% endif %}

    <div class=\"form-group {{ form.voyage.vars.errors|length > 0 ? 'has-error' : '' }}\">
        {{ form_label(form.voyage) }}
        {{ form_widget(form.voyage) }}
        {% for error in form.voyage.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
    </div>

    <div class=\"form-row\">
        <div class=\"form-group\">
            {{ form_label(form.dateReservation) }}
            {{ form_widget(form.dateReservation) }}
            {% for error in form.dateReservation.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>
        <div class=\"form-group\">
            {{ form_label(form.nbrPersonnes) }}
            {{ form_widget(form.nbrPersonnes) }}
            {% for error in form.nbrPersonnes.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>
    </div>

    {% if form.statut is defined %}
    <div class=\"form-group\">
        {{ form_label(form.statut) }}
        {{ form_widget(form.statut) }}
    </div>
    {% endif %}

    <div style=\"background:#f0f4f8;border-radius:var(--radius-sm);padding:16px;margin-top:8px;\">
        <p style=\"font-size:0.85rem;color:var(--text-muted);\"><i class=\"fas fa-calculator\" style=\"color:var(--primary);\"></i> Montant actuel : <strong>{{ reservation.montantTotal|number_format(2, ',', ' ') }} TND</strong> — Le montant sera recalculé automatiquement.</p>
    </div>

    <div class=\"form-actions\">
        <a href=\"{{ path('admin_reservation_index') }}\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-save\"></i> Enregistrer</button>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}
", "admin/reservation/edit.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\reservation\\edit.html.twig");
    }
}
