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

/* client/reservation/new.html.twig */
class __TwigTemplate_bd40fcd823d796c0019f9a89c4709e85 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/reservation/new.html.twig"));

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

        yield "Réserver un Voyage";
        
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

<div class=\"form-card\">
    <h2><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);\"></i> Réserver un Voyage</h2>
    <p class=\"subtitle\">Sélectionnez votre voyage et le nombre de personnes. Le montant total sera calculé automatiquement.</p>

    ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    <div class=\"form-group ";
        // line 15
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "voyage", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15)) > 0)) ? ("has-error") : (""));
        yield "\">
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "voyage", [], "any", false, false, false, 16), 'label');
        yield "
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "voyage", [], "any", false, false, false, 17), 'widget');
        yield "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "voyage", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 19
            yield "            <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 19), "html", null, true);
            yield "</div>
        ";
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
            // line 28
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 28), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "        </div>
        <div class=\"form-group ";
        // line 31
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)) > 0)) ? ("has-error") : (""));
        yield "\">
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 32), 'label');
        yield "
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 33), 'widget');
        yield "
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 35
            yield "                <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 35), "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </div>
    </div>

    <div style=\"background:linear-gradient(135deg,rgba(21,101,192,0.05),rgba(124,77,255,0.05));border-radius:var(--radius-sm);padding:20px;margin:16px 0;\">
        <div style=\"display:flex;align-items:center;gap:10px;margin-bottom:8px;\">
            <i class=\"fas fa-calculator\" style=\"color:var(--primary);font-size:1.1rem;\"></i>
            <strong style=\"font-size:0.95rem;\">Calcul automatique</strong>
        </div>
        <p style=\"font-size:0.85rem;color:var(--text-muted);margin:0;\">Le montant total = Prix unitaire du voyage × Nombre de personnes. Votre réservation sera en statut \"En attente\" jusqu'à confirmation par un agent.</p>
    </div>

    <div class=\"form-actions\">
        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_voyage_index");
        yield "\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-check\"></i> Confirmer la Réservation</button>
    </div>

    ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
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
        return "client/reservation/new.html.twig";
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
        return array (  206 => 53,  199 => 49,  185 => 37,  176 => 35,  172 => 34,  168 => 33,  164 => 32,  160 => 31,  157 => 30,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  132 => 24,  127 => 21,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  97 => 13,  85 => 5,  75 => 4,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'client/layout.html.twig' %}
{% block title %}Réserver un Voyage{% endblock %}

{% block content %}
<a href=\"{{ path('client_voyage_index') }}\" style=\"color:var(--primary);text-decoration:none;font-size:0.9rem;display:inline-flex;align-items:center;gap:6px;margin-bottom:24px;\">
    <i class=\"fas fa-arrow-left\"></i> Retour au catalogue
</a>

<div class=\"form-card\">
    <h2><i class=\"fas fa-ticket-alt\" style=\"color:var(--accent);\"></i> Réserver un Voyage</h2>
    <p class=\"subtitle\">Sélectionnez votre voyage et le nombre de personnes. Le montant total sera calculé automatiquement.</p>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <div class=\"form-group {{ form.voyage.vars.errors|length > 0 ? 'has-error' : '' }}\">
        {{ form_label(form.voyage) }}
        {{ form_widget(form.voyage) }}
        {% for error in form.voyage.vars.errors %}
            <div class=\"form-error\">{{ error.message }}</div>
        {% endfor %}
    </div>

    <div class=\"form-row\">
        <div class=\"form-group {{ form.dateReservation.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.dateReservation) }}
            {{ form_widget(form.dateReservation) }}
            {% for error in form.dateReservation.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
        </div>
        <div class=\"form-group {{ form.nbrPersonnes.vars.errors|length > 0 ? 'has-error' : '' }}\">
            {{ form_label(form.nbrPersonnes) }}
            {{ form_widget(form.nbrPersonnes) }}
            {% for error in form.nbrPersonnes.vars.errors %}
                <div class=\"form-error\">{{ error.message }}</div>
            {% endfor %}
        </div>
    </div>

    <div style=\"background:linear-gradient(135deg,rgba(21,101,192,0.05),rgba(124,77,255,0.05));border-radius:var(--radius-sm);padding:20px;margin:16px 0;\">
        <div style=\"display:flex;align-items:center;gap:10px;margin-bottom:8px;\">
            <i class=\"fas fa-calculator\" style=\"color:var(--primary);font-size:1.1rem;\"></i>
            <strong style=\"font-size:0.95rem;\">Calcul automatique</strong>
        </div>
        <p style=\"font-size:0.85rem;color:var(--text-muted);margin:0;\">Le montant total = Prix unitaire du voyage × Nombre de personnes. Votre réservation sera en statut \"En attente\" jusqu'à confirmation par un agent.</p>
    </div>

    <div class=\"form-actions\">
        <a href=\"{{ path('client_voyage_index') }}\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-accent btn-sm\"><i class=\"fas fa-check\"></i> Confirmer la Réservation</button>
    </div>

    {{ form_end(form) }}
</div>
{% endblock %}
", "client/reservation/new.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\client\\reservation\\new.html.twig");
    }
}
