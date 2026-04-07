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

/* agent/voyage/edit.html.twig */
class __TwigTemplate_e00ec61635516278da9ca01a2ef50557 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/voyage/edit.html.twig"));

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

        yield "Agent - Modifier Voyage";
        
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
    <div><h1><i class=\"fas fa-edit\" style=\"color:var(--primary);margin-right:10px;\"></i>Modifier Voyage #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        yield "</h1></div>
    <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_voyage_index");
        yield "\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>
<div class=\"form-card\">
    <h2><i class=\"fas fa-plane\" style=\"color:var(--primary);\"></i> Modifier</h2>
    <p class=\"subtitle\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield " — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyage"]) || array_key_exists("voyage", $context) ? $context["voyage"] : (function () { throw new RuntimeError('Variable "voyage" does not exist.', 10, $this->source); })()), "destination", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    <div class=\"form-group\">";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), 'widget');
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 12), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
    <div class=\"form-group\">";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), 'widget');
        yield "</div>
    <div class=\"form-row\">
        <div class=\"form-group\">";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "destination", [], "any", false, false, false, 15), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "destination", [], "any", false, false, false, 15), 'widget');
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "destination", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 15), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
        <div class=\"form-group\">";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "categorie", [], "any", false, false, false, 16), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "categorie", [], "any", false, false, false, 16), 'widget');
        yield "</div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-group\">";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 19), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 19), 'widget');
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prixUnitaire", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 19), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
        <div class=\"form-group\">";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 20), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 20), 'widget');
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "placesDisponibles", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 20), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-group\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dateDepart", [], "any", false, false, false, 23), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dateDepart", [], "any", false, false, false, 23), 'widget');
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dateDepart", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 23), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
        <div class=\"form-group\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dateRetour", [], "any", false, false, false, 24), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dateRetour", [], "any", false, false, false, 24), 'widget');
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dateRetour", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            yield "<div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "message", [], "any", false, false, false, 24), "html", null, true);
            yield "</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-group\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "imageUrl", [], "any", false, false, false, 27), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "imageUrl", [], "any", false, false, false, 27), 'widget');
        yield "</div>
        <div class=\"form-group\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "statut", [], "any", false, false, false, 28), 'label');
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "statut", [], "any", false, false, false, 28), 'widget');
        yield "</div>
    </div>
    <div class=\"form-actions\">
        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_voyage_index");
        yield "\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-save\"></i> Enregistrer</button>
    </div>
    ";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
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
        return "agent/voyage/edit.html.twig";
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
        return array (  234 => 34,  228 => 31,  221 => 28,  216 => 27,  199 => 24,  184 => 23,  167 => 20,  152 => 19,  145 => 16,  130 => 15,  124 => 13,  109 => 12,  105 => 11,  99 => 10,  92 => 6,  88 => 5,  85 => 4,  75 => 3,  58 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'agent/layout.html.twig' %}
{% block title %}Agent - Modifier Voyage{% endblock %}
{% block content %}
<div class=\"top-bar\">
    <div><h1><i class=\"fas fa-edit\" style=\"color:var(--primary);margin-right:10px;\"></i>Modifier Voyage #{{ voyage.id }}</h1></div>
    <a href=\"{{ path('agent_voyage_index') }}\" class=\"btn btn-outline btn-sm\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
</div>
<div class=\"form-card\">
    <h2><i class=\"fas fa-plane\" style=\"color:var(--primary);\"></i> Modifier</h2>
    <p class=\"subtitle\">{{ voyage.titre }} — {{ voyage.destination }}</p>
    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-group\">{{ form_label(form.titre) }}{{ form_widget(form.titre) }}{% for e in form.titre.vars.errors %}<div class=\"form-error\">{{ e.message }}</div>{% endfor %}</div>
    <div class=\"form-group\">{{ form_label(form.description) }}{{ form_widget(form.description) }}</div>
    <div class=\"form-row\">
        <div class=\"form-group\">{{ form_label(form.destination) }}{{ form_widget(form.destination) }}{% for e in form.destination.vars.errors %}<div class=\"form-error\">{{ e.message }}</div>{% endfor %}</div>
        <div class=\"form-group\">{{ form_label(form.categorie) }}{{ form_widget(form.categorie) }}</div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-group\">{{ form_label(form.prixUnitaire) }}{{ form_widget(form.prixUnitaire) }}{% for e in form.prixUnitaire.vars.errors %}<div class=\"form-error\">{{ e.message }}</div>{% endfor %}</div>
        <div class=\"form-group\">{{ form_label(form.placesDisponibles) }}{{ form_widget(form.placesDisponibles) }}{% for e in form.placesDisponibles.vars.errors %}<div class=\"form-error\">{{ e.message }}</div>{% endfor %}</div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-group\">{{ form_label(form.dateDepart) }}{{ form_widget(form.dateDepart) }}{% for e in form.dateDepart.vars.errors %}<div class=\"form-error\">{{ e.message }}</div>{% endfor %}</div>
        <div class=\"form-group\">{{ form_label(form.dateRetour) }}{{ form_widget(form.dateRetour) }}{% for e in form.dateRetour.vars.errors %}<div class=\"form-error\">{{ e.message }}</div>{% endfor %}</div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-group\">{{ form_label(form.imageUrl) }}{{ form_widget(form.imageUrl) }}</div>
        <div class=\"form-group\">{{ form_label(form.statut) }}{{ form_widget(form.statut) }}</div>
    </div>
    <div class=\"form-actions\">
        <a href=\"{{ path('agent_voyage_index') }}\" class=\"btn btn-outline btn-sm\">Annuler</a>
        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-save\"></i> Enregistrer</button>
    </div>
    {{ form_end(form) }}
</div>
{% endblock %}
", "agent/voyage/edit.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\agent\\voyage\\edit.html.twig");
    }
}
