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

/* home/index.html.twig */
class __TwigTemplate_34cc314fbb9cd4fa828af873262f0439 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
    body { background: linear-gradient(180deg, #87CEEB 0%, #5BA3E6 30%, #1565C0 70%, #0D47A1 100%); min-height: 100vh; }
    .navbar {
        position: fixed; top: 0; left: 0; right: 0;
        padding: 16px 40px;
        display: flex; align-items: center; justify-content: space-between;
        z-index: 1000; background: rgba(255,255,255,0.1);
        backdrop-filter: blur(20px);
    }
    .navbar-brand { display: flex; align-items: center; gap: 12px; text-decoration: none; font-weight: 800; font-size: 1.5rem; color: white; }
    .navbar-brand span { background: linear-gradient(135deg, #FFD600, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    .nav-links { display: flex; align-items: center; gap: 24px; list-style: none; }
    .nav-links a { color: rgba(255,255,255,0.85); text-decoration: none; font-weight: 500; font-size: 0.95rem; transition: var(--transition); }
    .nav-links a:hover { color: white; }
    .hero { min-height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 120px 20px 80px; }
    .hero h1 { font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: 900; color: white; margin-bottom: 20px; }
    .hero h1 .highlight { background: linear-gradient(135deg, #FFD600, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    .hero p { font-size: 1.15rem; color: rgba(255,255,255,0.85); margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto; }
    .hero-buttons { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
    .role-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; max-width: 900px; margin: 40px auto 0; }
    .role-card {
        background: rgba(255,255,255,0.12); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.25);
        border-radius: var(--radius-lg); padding: 32px; text-align: center; transition: var(--transition); text-decoration: none;
    }
    .role-card:hover { background: rgba(255,255,255,0.22); transform: translateY(-5px); }
    .role-card .icon { font-size: 2.5rem; margin-bottom: 16px; }
    .role-card h3 { color: white; font-size: 1.2rem; margin-bottom: 8px; }
    .role-card p { color: rgba(255,255,255,0.7); font-size: 0.85rem; }
    .stats-section { background: rgba(255,255,255,0.08); padding: 60px 40px; margin-top: 60px; border-radius: var(--radius-lg); max-width: 1000px; margin-left: auto; margin-right: auto; backdrop-filter: blur(10px); }
    .stats-section .stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center; }
    .stats-section .stat-val { font-size: 2.5rem; font-weight: 800; color: white; }
    .stats-section .stat-label { font-size: 0.85rem; color: rgba(255,255,255,0.7); }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 42
        yield "<nav class=\"navbar\">
    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand\">
        <div style=\"width:42px;height:42px;background:linear-gradient(135deg,var(--primary),var(--secondary));border-radius:12px;display:flex;align-items:center;justify-content:center;\">✈️</div>
        <span>Tahwissa</span>
    </a>
    <ul class=\"nav-links\">
        ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "            <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\"><i class=\"fas fa-tachometer-alt\"></i> Mon Espace</a></li>
            <li><a href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" style=\"background:rgba(255,255,255,0.15);padding:8px 20px;border-radius:50px;\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a></li>
        ";
        } else {
            // line 52
            yield "            <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" style=\"background:rgba(255,255,255,0.15);padding:8px 20px;border-radius:50px;\"><i class=\"fas fa-sign-in-alt\"></i> Connexion</a></li>
            <li><a href=\"";
            // line 53
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\"><i class=\"fas fa-user-plus\"></i> Inscription</a></li>
        ";
        }
        // line 55
        yield "    </ul>
</nav>

<section class=\"hero\">
    <div>
        <h1 class=\"animate-fade-up\">Explorez le Monde avec <span class=\"highlight\">Tahwissa</span></h1>
        <p class=\"animate-fade-up\" style=\"animation-delay:0.2s\">Plateforme de gestion de réservations de voyages. Connectez-vous pour commencer.</p>

        ";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "            <div class=\"role-cards\" id=\"roles\">
                <a href=\"";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\" class=\"role-card animate-fade-up\" style=\"animation-delay:0.3s\">
                    <div class=\"icon\">🚀</div>
                    <h3>Mon Espace</h3>
                    <p>Bienvenue ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
            yield " ! Accédez à votre tableau de bord.</p>
                    <div style=\"margin-top:16px\"><span class=\"btn btn-accent btn-sm\">Accéder</span></div>
                </a>
            </div>
        ";
        } else {
            // line 73
            yield "            <div class=\"hero-buttons animate-fade-up\" style=\"animation-delay:0.3s\">
                <a href=\"";
            // line 74
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"role-card\" style=\"padding:24px 40px;min-width:200px;\">
                    <div class=\"icon\">🔐</div>
                    <h3>Se Connecter</h3>
                    <p>Accédez à votre espace personnel</p>
                </a>
                <a href=\"";
            // line 79
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"role-card\" style=\"padding:24px 40px;min-width:200px;\">
                    <div class=\"icon\">📝</div>
                    <h3>S'inscrire</h3>
                    <p>Créez votre compte gratuitement</p>
                </a>
            </div>
        ";
        }
        // line 86
        yield "
        <div class=\"stats-section animate-fade-up\" style=\"animation-delay:0.6s\" id=\"stats\">
            <div class=\"stats\">
                <div><div class=\"stat-val\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 89, $this->source); })()), "total", [], "any", false, false, false, 89), "html", null, true);
        yield "</div><div class=\"stat-label\">Réservations</div></div>
                <div><div class=\"stat-val\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 90, $this->source); })()), "confirmees", [], "any", false, false, false, 90), "html", null, true);
        yield "</div><div class=\"stat-label\">Confirmées</div></div>
                <div><div class=\"stat-val\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voyageStats"]) || array_key_exists("voyageStats", $context) ? $context["voyageStats"] : (function () { throw new RuntimeError('Variable "voyageStats" does not exist.', 91, $this->source); })()), "total", [], "any", false, false, false, 91), "html", null, true);
        yield "</div><div class=\"stat-label\">Voyages</div></div>
                <div><div class=\"stat-val\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 92, $this->source); })()), "revenu", [], "any", false, false, false, 92), 0, ",", " "), "html", null, true);
        yield "</div><div class=\"stat-label\">TND Revenue</div></div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  237 => 92,  233 => 91,  229 => 90,  225 => 89,  220 => 86,  210 => 79,  202 => 74,  199 => 73,  191 => 68,  185 => 65,  182 => 64,  180 => 63,  170 => 55,  165 => 53,  160 => 52,  155 => 50,  150 => 49,  148 => 48,  140 => 43,  137 => 42,  127 => 41,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block stylesheets %}
<style>
    body { background: linear-gradient(180deg, #87CEEB 0%, #5BA3E6 30%, #1565C0 70%, #0D47A1 100%); min-height: 100vh; }
    .navbar {
        position: fixed; top: 0; left: 0; right: 0;
        padding: 16px 40px;
        display: flex; align-items: center; justify-content: space-between;
        z-index: 1000; background: rgba(255,255,255,0.1);
        backdrop-filter: blur(20px);
    }
    .navbar-brand { display: flex; align-items: center; gap: 12px; text-decoration: none; font-weight: 800; font-size: 1.5rem; color: white; }
    .navbar-brand span { background: linear-gradient(135deg, #FFD600, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    .nav-links { display: flex; align-items: center; gap: 24px; list-style: none; }
    .nav-links a { color: rgba(255,255,255,0.85); text-decoration: none; font-weight: 500; font-size: 0.95rem; transition: var(--transition); }
    .nav-links a:hover { color: white; }
    .hero { min-height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 120px 20px 80px; }
    .hero h1 { font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: 900; color: white; margin-bottom: 20px; }
    .hero h1 .highlight { background: linear-gradient(135deg, #FFD600, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    .hero p { font-size: 1.15rem; color: rgba(255,255,255,0.85); margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto; }
    .hero-buttons { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
    .role-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; max-width: 900px; margin: 40px auto 0; }
    .role-card {
        background: rgba(255,255,255,0.12); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.25);
        border-radius: var(--radius-lg); padding: 32px; text-align: center; transition: var(--transition); text-decoration: none;
    }
    .role-card:hover { background: rgba(255,255,255,0.22); transform: translateY(-5px); }
    .role-card .icon { font-size: 2.5rem; margin-bottom: 16px; }
    .role-card h3 { color: white; font-size: 1.2rem; margin-bottom: 8px; }
    .role-card p { color: rgba(255,255,255,0.7); font-size: 0.85rem; }
    .stats-section { background: rgba(255,255,255,0.08); padding: 60px 40px; margin-top: 60px; border-radius: var(--radius-lg); max-width: 1000px; margin-left: auto; margin-right: auto; backdrop-filter: blur(10px); }
    .stats-section .stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center; }
    .stats-section .stat-val { font-size: 2.5rem; font-weight: 800; color: white; }
    .stats-section .stat-label { font-size: 0.85rem; color: rgba(255,255,255,0.7); }
</style>
{% endblock %}

{% block body %}
<nav class=\"navbar\">
    <a href=\"{{ path('app_home') }}\" class=\"navbar-brand\">
        <div style=\"width:42px;height:42px;background:linear-gradient(135deg,var(--primary),var(--secondary));border-radius:12px;display:flex;align-items:center;justify-content:center;\">✈️</div>
        <span>Tahwissa</span>
    </a>
    <ul class=\"nav-links\">
        {% if app.user %}
            <li><a href=\"{{ path('app_dashboard') }}\"><i class=\"fas fa-tachometer-alt\"></i> Mon Espace</a></li>
            <li><a href=\"{{ path('app_logout') }}\" style=\"background:rgba(255,255,255,0.15);padding:8px 20px;border-radius:50px;\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a></li>
        {% else %}
            <li><a href=\"{{ path('app_login') }}\" style=\"background:rgba(255,255,255,0.15);padding:8px 20px;border-radius:50px;\"><i class=\"fas fa-sign-in-alt\"></i> Connexion</a></li>
            <li><a href=\"{{ path('app_register') }}\"><i class=\"fas fa-user-plus\"></i> Inscription</a></li>
        {% endif %}
    </ul>
</nav>

<section class=\"hero\">
    <div>
        <h1 class=\"animate-fade-up\">Explorez le Monde avec <span class=\"highlight\">Tahwissa</span></h1>
        <p class=\"animate-fade-up\" style=\"animation-delay:0.2s\">Plateforme de gestion de réservations de voyages. Connectez-vous pour commencer.</p>

        {% if app.user %}
            <div class=\"role-cards\" id=\"roles\">
                <a href=\"{{ path('app_dashboard') }}\" class=\"role-card animate-fade-up\" style=\"animation-delay:0.3s\">
                    <div class=\"icon\">🚀</div>
                    <h3>Mon Espace</h3>
                    <p>Bienvenue {{ app.user.name }} ! Accédez à votre tableau de bord.</p>
                    <div style=\"margin-top:16px\"><span class=\"btn btn-accent btn-sm\">Accéder</span></div>
                </a>
            </div>
        {% else %}
            <div class=\"hero-buttons animate-fade-up\" style=\"animation-delay:0.3s\">
                <a href=\"{{ path('app_login') }}\" class=\"role-card\" style=\"padding:24px 40px;min-width:200px;\">
                    <div class=\"icon\">🔐</div>
                    <h3>Se Connecter</h3>
                    <p>Accédez à votre espace personnel</p>
                </a>
                <a href=\"{{ path('app_register') }}\" class=\"role-card\" style=\"padding:24px 40px;min-width:200px;\">
                    <div class=\"icon\">📝</div>
                    <h3>S'inscrire</h3>
                    <p>Créez votre compte gratuitement</p>
                </a>
            </div>
        {% endif %}

        <div class=\"stats-section animate-fade-up\" style=\"animation-delay:0.6s\" id=\"stats\">
            <div class=\"stats\">
                <div><div class=\"stat-val\">{{ stats.total }}</div><div class=\"stat-label\">Réservations</div></div>
                <div><div class=\"stat-val\">{{ stats.confirmees }}</div><div class=\"stat-label\">Confirmées</div></div>
                <div><div class=\"stat-val\">{{ voyageStats.total }}</div><div class=\"stat-label\">Voyages</div></div>
                <div><div class=\"stat-val\">{{ stats.revenu|number_format(0, ',', ' ') }}</div><div class=\"stat-label\">TND Revenue</div></div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\home\\index.html.twig");
    }
}
