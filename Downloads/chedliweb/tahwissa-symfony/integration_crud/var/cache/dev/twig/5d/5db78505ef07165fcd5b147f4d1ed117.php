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

/* admin/reservation/new.html.twig */
class __TwigTemplate_d48004f54f95d3147bc47f90c6128dba extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/new.html.twig"));

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

        yield "Admin - Nouvelle Réservation";
        
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
        <h1><i class=\"fas fa-plus-circle\" style=\"color:var(--accent);margin-right:10px;\"></i>Nouvelle Réservation</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Créer une réservation pour un client</p>
    </div>
    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);\"></i> Détails de la Réservation</h2>
    <p class=\"subtitle\">Remplissez les informations pour créer une nouvelle réservation.</p>

    ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "idUtilisateur", [], "any", true, true, false, 19)) {
            // line 20
            yield "    <div class=\"form-group ";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20)) > 0)) ? ("has-error") : (""));
            yield "\">
        ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 21), 'label');
            yield "
        ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 22), 'widget');
            yield "
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                yield "<div class=\"form-error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 23), "html", null, true);
                yield "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "    </div>
    ";
        }
        // line 26
        yield "
    <div class=\"form-group ";
        // line 27
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "voyage", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27)) > 0)) ? ("has-error") : (""));
        yield "\">
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "voyage", [], "any", false, false, false, 28), 'label');
        yield "
        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "voyage", [], "any", false, false, false, 29), 'widget');
        yield "
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "voyage", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 30), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "    </div>

    <div class=\"form-row\">
        <div class=\"form-group ";
        // line 34
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "dateReservation", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dateReservation", [], "any", false, false, false, 35), 'label');
        yield "
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "dateReservation", [], "any", false, false, false, 36), 'widget');
        yield "
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dateReservation", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "errors", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 37), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "        </div>
        <div class=\"form-group ";
        // line 39
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 40), 'label');
        yield "
            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 41), 'widget');
        yield "
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "errors", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 42), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "        </div>
    </div>

    ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", true, true, false, 46)) {
            // line 47
            yield "    <div class=\"form-group\">
        ";
            // line 48
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "statut", [], "any", false, false, false, 48), 'label');
            yield "
        ";
            // line 49
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "statut", [], "any", false, false, false, 49), 'widget');
            yield "
    </div>
    ";
        }
        // line 52
        yield "
    <div style=\"background:#f0f4f8;border-radius:var(--radius-sm);padding:16px;margin-top:16px;\">
        <p style=\"font-size:0.85rem;color:var(--text-muted);\"><i class=\"fas fa-info-circle\" style=\"color:var(--primary);\"></i> Le montant total sera calculé automatiquement : Prix unitaire × Nombre de personnes</p>
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-check\"></i> Créer la Réservation</button>
    </div>

    ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
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
        return "admin/reservation/new.html.twig";
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
        return array (  252 => 62,  245 => 58,  237 => 52,  231 => 49,  227 => 48,  224 => 47,  222 => 46,  217 => 43,  206 => 42,  202 => 41,  198 => 40,  194 => 39,  191 => 38,  180 => 37,  176 => 36,  172 => 35,  168 => 34,  163 => 31,  152 => 30,  148 => 29,  144 => 28,  140 => 27,  137 => 26,  133 => 24,  122 => 23,  118 => 22,  114 => 21,  109 => 20,  107 => 19,  102 => 17,  92 => 10,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %}Admin - Nouvelle Réservation{% endblock %}

{% block content %}
<div class=\"top-bar\">
    <div>
        <h1><i class=\"fas fa-plus-circle\" style=\"color:var(--accent);margin-right:10px;\"></i>Nouvelle Réservation</h1>
        <p style=\"color:var(--text-muted);font-size:0.9rem;\">Créer une réservation pour un client</p>
    </div>
    <a href=\"{{ path('admin_reservation_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);\"></i> Détails de la Réservation</h2>
    <p class=\"subtitle\">Remplissez les informations pour créer une nouvelle réservation.</p>

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
        <div class=\"form-group {{ form.dateReservation.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.dateReservation) }}
            {{ form_widget(form.dateReservation) }}
            {% for error in form.dateReservation.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>
        <div class=\"form-group {{ form.nbrPersonnes.vars.errors|length > 0 ? 'has-error' : '' }}\">
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

    <div style=\"background:#f0f4f8;border-radius:var(--radius-sm);padding:16px;margin-top:16px;\">
        <p style=\"font-size:0.85rem;color:var(--text-muted);\"><i class=\"fas fa-info-circle\" style=\"color:var(--primary);\"></i> Le montant total sera calculé automatiquement : Prix unitaire × Nombre de personnes</p>
    </div>

    <div class=\"form-actions\">
        <a href=\"{{ path('admin_reservation_index') }}\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-check\"></i> Créer la Réservation</button>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}
", "admin/reservation/new.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\reservation\\new.html.twig");
    }
}
