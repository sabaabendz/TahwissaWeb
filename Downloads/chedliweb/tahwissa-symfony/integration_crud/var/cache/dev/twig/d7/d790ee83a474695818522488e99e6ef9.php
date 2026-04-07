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

/* client/reservation_evenement/new.html.twig */
class __TwigTemplate_97a1a384e1f92608ea9225ed5fa33f4a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation_evenement/new.html.twig"));

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

        yield "Réserver un Événement";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_index");
        yield "\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;font-weight:500;\">
        <i class=\"fas fa-arrow-left\"></i> Retour aux événements
    </a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-calendar-check\" style=\"color:var(--primary);\"></i> Réserver un Événement</h2>
    <p class=\"subtitle\">Choisissez un événement et le nombre de places à réserver.</p>

    ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    <div class=\"form-group ";
        // line 17
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "evenement", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)) > 0)) ? ("has-error") : (""));
        yield "\">
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "evenement", [], "any", false, false, false, 18), 'label');
        yield "
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "evenement", [], "any", false, false, false, 19), 'widget');
        yield "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "evenement", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 20), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "    </div>

    <div class=\"form-row\">
        <div class=\"form-group ";
        // line 24
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dateReservation", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "dateReservation", [], "any", false, false, false, 25), 'label');
        yield "
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "dateReservation", [], "any", false, false, false, 26), 'widget');
        yield "
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "dateReservation", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 27), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "        </div>
        <div class=\"form-group ";
        // line 29
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nbPlacesReservees", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nbPlacesReservees", [], "any", false, false, false, 30), 'label');
        yield "
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nbPlacesReservees", [], "any", false, false, false, 31), 'widget');
        yield "
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nbPlacesReservees", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 32), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "        </div>
    </div>

    <div style=\"background:rgba(21,101,192,0.05);border:1px solid rgba(21,101,192,0.2);border-radius:var(--radius-sm);padding:14px 18px;font-size:0.85rem;color:#475569;margin-bottom:24px;\">
        <i class=\"fas fa-info-circle\" style=\"color:var(--primary);margin-right:6px;\"></i>
        Votre réservation sera en statut <strong>En attente</strong> jusqu'à confirmation par notre équipe.
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_evenement_index");
        yield "\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-calendar-check\"></i> Confirmer la Réservation</button>
    </div>

    ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
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
        return "client/reservation_evenement/new.html.twig";
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
        return array (  200 => 46,  193 => 42,  182 => 33,  171 => 32,  167 => 31,  163 => 30,  159 => 29,  156 => 28,  145 => 27,  141 => 26,  137 => 25,  133 => 24,  128 => 21,  117 => 20,  113 => 19,  109 => 18,  105 => 17,  100 => 15,  88 => 6,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Réserver un Événement{% endblock %}

{% block content %}
<div style=\"margin-bottom:16px;\">
    <a href=\"{{ path('client_evenement_index') }}\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;font-weight:500;\">
        <i class=\"fas fa-arrow-left\"></i> Retour aux événements
    </a>
</div>

<div class=\"form-card\">
    <h2><i class=\"fas fa-calendar-check\" style=\"color:var(--primary);\"></i> Réserver un Événement</h2>
    <p class=\"subtitle\">Choisissez un événement et le nombre de places à réserver.</p>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <div class=\"form-group {{ form.evenement.vars.errors|length > 0 ? 'has-error' : '' }}\">
        {{ form_label(form.evenement) }}
        {{ form_widget(form.evenement) }}
        {% for error in form.evenement.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
    </div>

    <div class=\"form-row\">
        <div class=\"form-group {{ form.dateReservation.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.dateReservation) }}
            {{ form_widget(form.dateReservation) }}
            {% for error in form.dateReservation.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>
        <div class=\"form-group {{ form.nbPlacesReservees.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.nbPlacesReservees) }}
            {{ form_widget(form.nbPlacesReservees) }}
            {% for error in form.nbPlacesReservees.vars.errors %}<div class=\"form-error\">{{ error.message }}</div>{% endfor %}
        </div>
    </div>

    <div style=\"background:rgba(21,101,192,0.05);border:1px solid rgba(21,101,192,0.2);border-radius:var(--radius-sm);padding:14px 18px;font-size:0.85rem;color:#475569;margin-bottom:24px;\">
        <i class=\"fas fa-info-circle\" style=\"color:var(--primary);margin-right:6px;\"></i>
        Votre réservation sera en statut <strong>En attente</strong> jusqu'à confirmation par notre équipe.
    </div>

    <div class=\"form-actions\">
        <a href=\"{{ path('client_evenement_index') }}\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-calendar-check\"></i> Confirmer la Réservation</button>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}
", "client/reservation_evenement/new.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\reservation_evenement\\new.html.twig");
    }
}
