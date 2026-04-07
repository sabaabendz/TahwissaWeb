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

/* security/register.html.twig */
class __TwigTemplate_3b55e71c2433af52fa4d724548043bcd extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent = $this->load("base_auth.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"auth-card\">
    <div class=\"auth-logo\">
        <h1><i class=\"fas fa-plane-departure\"></i> Tahwissa</h1>
        <p>Créez votre compte</p>
    </div>

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
    ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        ";
        // line 23
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23)) > 0)) {
            // line 24
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), 'errors');
            yield "
            </div>
        ";
        }
        // line 28
        yield "
        <div class=\"form-floating\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
            <label><i class=\"fas fa-envelope me-1\"></i> Email</label>
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'errors');
        yield "
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "firstName", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        yield "
                    <label><i class=\"fas fa-user me-1\"></i> Prénom</label>
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "firstName", [], "any", false, false, false, 40), 'errors');
        yield "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "lastName", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        yield "
                    <label><i class=\"fas fa-user me-1\"></i> Nom</label>
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "lastName", [], "any", false, false, false, 47), 'errors');
        yield "
                </div>
            </div>
        </div>

        <div class=\"form-floating\">
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "phone", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone"]]);
        yield "
            <label><i class=\"fas fa-phone me-1\"></i> Téléphone</label>
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "phone", [], "any", false, false, false, 55), 'errors');
        yield "
        </div>

        <div class=\"form-floating\">
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), "first", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        yield "
            <label><i class=\"fas fa-lock me-1\"></i> Mot de passe</label>
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "plainPassword", [], "any", false, false, false, 61), "first", [], "any", false, false, false, 61), 'errors');
        yield "
        </div>

        <div class=\"form-floating\">
            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "plainPassword", [], "any", false, false, false, 65), "second", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirmer"]]);
        yield "
            <label><i class=\"fas fa-lock me-1\"></i> Confirmer le mot de passe</label>
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "plainPassword", [], "any", false, false, false, 67), "second", [], "any", false, false, false, 67), 'errors');
        yield "
        </div>

        <div class=\"form-check mb-3\">
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "agreeTerms", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
            <label class=\"form-check-label\">J'accepte les conditions d'utilisation</label>
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "agreeTerms", [], "any", false, false, false, 73), 'errors');
        yield "
        </div>

        <button type=\"submit\" class=\"btn-auth\">
            <i class=\"fas fa-user-plus me-2\"></i>S'inscrire
        </button>

    ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), 'form_end');
        yield "

    <div class=\"auth-divider\">
        <span>ou</span>
    </div>

    <div class=\"auth-links\">
        <p style=\"color:#64748b;font-size:0.9rem;\">Vous avez déjà un compte ?</p>
        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"><i class=\"fas fa-sign-in-alt me-1\"></i>Se connecter</a>
    </div>
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
        return "security/register.html.twig";
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
        return array (  249 => 88,  238 => 80,  228 => 73,  223 => 71,  216 => 67,  211 => 65,  204 => 61,  199 => 59,  192 => 55,  187 => 53,  178 => 47,  173 => 45,  165 => 40,  160 => 38,  151 => 32,  146 => 30,  142 => 28,  136 => 25,  133 => 24,  131 => 23,  126 => 21,  123 => 20,  117 => 19,  107 => 15,  102 => 14,  97 => 13,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_auth.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
<div class=\"auth-card\">
    <div class=\"auth-logo\">
        <h1><i class=\"fas fa-plane-departure\"></i> Tahwissa</h1>
        <p>Créez votre compte</p>
    </div>

    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    {{ form_start(registrationForm, {'attr': {'novalidate': 'novalidate'}}) }}

        {% if registrationForm.vars.errors|length > 0 %}
            <div class=\"alert alert-danger\">
                {{ form_errors(registrationForm) }}
            </div>
        {% endif %}

        <div class=\"form-floating\">
            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
            <label><i class=\"fas fa-envelope me-1\"></i> Email</label>
            {{ form_errors(registrationForm.email) }}
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(registrationForm.firstName, {'attr': {'class': 'form-control', 'placeholder': 'Prénom'}}) }}
                    <label><i class=\"fas fa-user me-1\"></i> Prénom</label>
                    {{ form_errors(registrationForm.firstName) }}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating\">
                    {{ form_widget(registrationForm.lastName, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
                    <label><i class=\"fas fa-user me-1\"></i> Nom</label>
                    {{ form_errors(registrationForm.lastName) }}
                </div>
            </div>
        </div>

        <div class=\"form-floating\">
            {{ form_widget(registrationForm.phone, {'attr': {'class': 'form-control', 'placeholder': 'Téléphone'}}) }}
            <label><i class=\"fas fa-phone me-1\"></i> Téléphone</label>
            {{ form_errors(registrationForm.phone) }}
        </div>

        <div class=\"form-floating\">
            {{ form_widget(registrationForm.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder': 'Mot de passe'}}) }}
            <label><i class=\"fas fa-lock me-1\"></i> Mot de passe</label>
            {{ form_errors(registrationForm.plainPassword.first) }}
        </div>

        <div class=\"form-floating\">
            {{ form_widget(registrationForm.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder': 'Confirmer'}}) }}
            <label><i class=\"fas fa-lock me-1\"></i> Confirmer le mot de passe</label>
            {{ form_errors(registrationForm.plainPassword.second) }}
        </div>

        <div class=\"form-check mb-3\">
            {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
            <label class=\"form-check-label\">J'accepte les conditions d'utilisation</label>
            {{ form_errors(registrationForm.agreeTerms) }}
        </div>

        <button type=\"submit\" class=\"btn-auth\">
            <i class=\"fas fa-user-plus me-2\"></i>S'inscrire
        </button>

    {{ form_end(registrationForm) }}

    <div class=\"auth-divider\">
        <span>ou</span>
    </div>

    <div class=\"auth-links\">
        <p style=\"color:#64748b;font-size:0.9rem;\">Vous avez déjà un compte ?</p>
        <a href=\"{{ path('app_login') }}\"><i class=\"fas fa-sign-in-alt me-1\"></i>Se connecter</a>
    </div>
</div>
{% endblock %}
", "security/register.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\security\\register.html.twig");
    }
}
