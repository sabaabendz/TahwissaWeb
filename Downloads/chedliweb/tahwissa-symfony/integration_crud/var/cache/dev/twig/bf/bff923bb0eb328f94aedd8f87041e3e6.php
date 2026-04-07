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

/* admin/reservation/pdf.html.twig */
class __TwigTemplate_2f02c03c16470fff67433cb10d0c711e extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Réservation #";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        yield " - Tahwissa</title>
    <style>
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; }
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #1a1a2e; background: #f0f4f8; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #1565C0, #7C4DFF); color: white; padding: 32px 40px; }
        .header h1 { font-size: 1.8rem; font-weight: 800; margin-bottom: 4px; }
        .header p { opacity: 0.85; font-size: 0.95rem; }
        .badge { display: inline-block; padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; margin-top: 10px; }
        .badge-warning { background: #FFF3CD; color: #856404; }
        .badge-success { background: #D4EDDA; color: #155724; }
        .badge-danger { background: #F8D7DA; color: #721C24; }
        .badge-info { background: #D1ECF1; color: #0C5460; }
        .content { padding: 40px; }
        .section { margin-bottom: 28px; }
        .section-title { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1.5px; color: #94a3b8; margin-bottom: 16px; font-weight: 700; border-bottom: 2px solid #f1f5f9; padding-bottom: 8px; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .field-label { font-size: 0.8rem; color: #94a3b8; margin-bottom: 4px; }
        .field-value { font-size: 1rem; font-weight: 600; }
        .total-box { background: linear-gradient(135deg, #FF6D00, #FF9100); color: white; padding: 24px 32px; border-radius: 12px; text-align: center; margin-top: 24px; }
        .total-box .amount { font-size: 2.5rem; font-weight: 900; }
        .total-box .label { font-size: 0.9rem; opacity: 0.9; }
        .footer { text-align: center; padding: 20px; color: #94a3b8; font-size: 0.8rem; border-top: 1px solid #f1f5f9; }
        .print-btn { display: inline-flex; align-items: center; gap: 8px; padding: 12px 28px; background: linear-gradient(135deg, #1565C0, #7C4DFF); color: white; border: none; border-radius: 50px; font-size: 0.95rem; font-weight: 600; cursor: pointer; text-decoration: none; margin: 20px auto; }
        .print-btn:hover { opacity: 0.9; }
        .actions { text-align: center; padding: 20px; }
    </style>
</head>
<body>
    <div class=\"actions no-print\">
        <button onclick=\"window.print()\" class=\"print-btn\"><span>🖨️</span> Imprimer / Télécharger PDF</button>
        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
        yield "\" class=\"print-btn\" style=\"background:linear-gradient(135deg, #64748b, #94a3b8);margin-left:10px;\">← Retour aux réservations</a>
    </div>

    <div class=\"container\">
        <div class=\"header\">
            <h1>✈️ Tahwissa - Confirmation de Réservation</h1>
            <p>Réservation #";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "html", null, true);
        yield "</p>
            <span class=\"badge badge-";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 47, $this->source); })()), "statutBadgeClass", [], "any", false, false, false, 47), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 47, $this->source); })()), "statutLabel", [], "any", false, false, false, 47), "html", null, true);
        yield "</span>
        </div>

        <div class=\"content\">
            <div class=\"section\">
                <div class=\"section-title\">Informations du Voyage</div>
                <div class=\"grid\">
                    <div>
                        <div class=\"field-label\">Voyage</div>
                        <div class=\"field-value\">";
        // line 56
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), "voyage", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()), "voyage", [], "any", false, false, false, 56), "titre", [], "any", false, false, false, 56), "html", null, true);
        } else {
            yield "Voyage supprimé";
        }
        yield "</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Destination</div>
                        <div class=\"field-value\">";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 60, $this->source); })()), "voyage", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 60, $this->source); })()), "voyage", [], "any", false, false, false, 60), "destination", [], "any", false, false, false, 60), "html", null, true);
        } else {
            yield "N/A";
        }
        yield "</div>
                    </div>
                    ";
        // line 62
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 62, $this->source); })()), "voyage", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "                    <div>
                        <div class=\"field-label\">Date de départ</div>
                        <div class=\"field-value\">";
            // line 65
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 65, $this->source); })()), "voyage", [], "any", false, false, false, 65), "dateDepart", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 65, $this->source); })()), "voyage", [], "any", false, false, false, 65), "dateDepart", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Date de retour</div>
                        <div class=\"field-value\">";
            // line 69
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 69, $this->source); })()), "voyage", [], "any", false, false, false, 69), "dateRetour", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 69, $this->source); })()), "voyage", [], "any", false, false, false, 69), "dateRetour", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Prix unitaire</div>
                        <div class=\"field-value\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 73, $this->source); })()), "voyage", [], "any", false, false, false, 73), "prixUnitaire", [], "any", false, false, false, 73), 2, ",", " "), "html", null, true);
            yield " TND</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Catégorie</div>
                        <div class=\"field-value\">";
            // line 77
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reservation"] ?? null), "voyage", [], "any", false, true, false, 77), "categorie", [], "any", true, true, false, 77) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 77, $this->source); })()), "voyage", [], "any", false, false, false, 77), "categorie", [], "any", false, false, false, 77)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 77, $this->source); })()), "voyage", [], "any", false, false, false, 77), "categorie", [], "any", false, false, false, 77), "html", null, true)) : ("N/A"));
            yield "</div>
                    </div>
                    ";
        }
        // line 80
        yield "                </div>
            </div>

            <div class=\"section\">
                <div class=\"section-title\">Détails de la Réservation</div>
                <div class=\"grid\">
                    <div>
                        <div class=\"field-label\">ID Utilisateur</div>
                        <div class=\"field-value\">User #";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 88, $this->source); })()), "idUtilisateur", [], "any", false, false, false, 88), "html", null, true);
        yield "</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Nombre de personnes</div>
                        <div class=\"field-value\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 92, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 92), "html", null, true);
        yield "</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Date de réservation</div>
                        <div class=\"field-value\">";
        // line 96
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 96, $this->source); })()), "dateReservation", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 96, $this->source); })()), "dateReservation", [], "any", false, false, false, 96), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Date de création</div>
                        <div class=\"field-value\">";
        // line 100
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 100, $this->source); })()), "dateCreation", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 100, $this->source); })()), "dateCreation", [], "any", false, false, false, 100), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</div>
                    </div>
                </div>
            </div>

            <div class=\"total-box\">
                <div class=\"label\">Montant Total</div>
                <div class=\"amount\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 107, $this->source); })()), "montantTotal", [], "any", false, false, false, 107), 2, ",", " "), "html", null, true);
        yield " TND</div>
                <div class=\"label\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 108, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 108), "html", null, true);
        yield " personne";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 108, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 108) > 1)) ? ("s") : (""));
        yield "</div>
            </div>
        </div>

        <div class=\"footer\">
            Tahwissa &copy; ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " — Document généré le ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "
        </div>
    </div>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/reservation/pdf.html.twig";
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
        return array (  224 => 113,  214 => 108,  210 => 107,  200 => 100,  193 => 96,  186 => 92,  179 => 88,  169 => 80,  163 => 77,  156 => 73,  149 => 69,  142 => 65,  138 => 63,  136 => 62,  127 => 60,  116 => 56,  102 => 47,  98 => 46,  89 => 40,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Réservation #{{ reservation.id }} - Tahwissa</title>
    <style>
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; }
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #1a1a2e; background: #f0f4f8; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #1565C0, #7C4DFF); color: white; padding: 32px 40px; }
        .header h1 { font-size: 1.8rem; font-weight: 800; margin-bottom: 4px; }
        .header p { opacity: 0.85; font-size: 0.95rem; }
        .badge { display: inline-block; padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; margin-top: 10px; }
        .badge-warning { background: #FFF3CD; color: #856404; }
        .badge-success { background: #D4EDDA; color: #155724; }
        .badge-danger { background: #F8D7DA; color: #721C24; }
        .badge-info { background: #D1ECF1; color: #0C5460; }
        .content { padding: 40px; }
        .section { margin-bottom: 28px; }
        .section-title { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1.5px; color: #94a3b8; margin-bottom: 16px; font-weight: 700; border-bottom: 2px solid #f1f5f9; padding-bottom: 8px; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .field-label { font-size: 0.8rem; color: #94a3b8; margin-bottom: 4px; }
        .field-value { font-size: 1rem; font-weight: 600; }
        .total-box { background: linear-gradient(135deg, #FF6D00, #FF9100); color: white; padding: 24px 32px; border-radius: 12px; text-align: center; margin-top: 24px; }
        .total-box .amount { font-size: 2.5rem; font-weight: 900; }
        .total-box .label { font-size: 0.9rem; opacity: 0.9; }
        .footer { text-align: center; padding: 20px; color: #94a3b8; font-size: 0.8rem; border-top: 1px solid #f1f5f9; }
        .print-btn { display: inline-flex; align-items: center; gap: 8px; padding: 12px 28px; background: linear-gradient(135deg, #1565C0, #7C4DFF); color: white; border: none; border-radius: 50px; font-size: 0.95rem; font-weight: 600; cursor: pointer; text-decoration: none; margin: 20px auto; }
        .print-btn:hover { opacity: 0.9; }
        .actions { text-align: center; padding: 20px; }
    </style>
</head>
<body>
    <div class=\"actions no-print\">
        <button onclick=\"window.print()\" class=\"print-btn\"><span>🖨️</span> Imprimer / Télécharger PDF</button>
        <a href=\"{{ path('admin_reservation_index') }}\" class=\"print-btn\" style=\"background:linear-gradient(135deg, #64748b, #94a3b8);margin-left:10px;\">← Retour aux réservations</a>
    </div>

    <div class=\"container\">
        <div class=\"header\">
            <h1>✈️ Tahwissa - Confirmation de Réservation</h1>
            <p>Réservation #{{ reservation.id }}</p>
            <span class=\"badge badge-{{ reservation.statutBadgeClass }}\">{{ reservation.statutLabel }}</span>
        </div>

        <div class=\"content\">
            <div class=\"section\">
                <div class=\"section-title\">Informations du Voyage</div>
                <div class=\"grid\">
                    <div>
                        <div class=\"field-label\">Voyage</div>
                        <div class=\"field-value\">{% if reservation.voyage %}{{ reservation.voyage.titre }}{% else %}Voyage supprimé{% endif %}</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Destination</div>
                        <div class=\"field-value\">{% if reservation.voyage %}{{ reservation.voyage.destination }}{% else %}N/A{% endif %}</div>
                    </div>
                    {% if reservation.voyage %}
                    <div>
                        <div class=\"field-label\">Date de départ</div>
                        <div class=\"field-value\">{{ reservation.voyage.dateDepart ? reservation.voyage.dateDepart|date('d/m/Y') : 'N/A' }}</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Date de retour</div>
                        <div class=\"field-value\">{{ reservation.voyage.dateRetour ? reservation.voyage.dateRetour|date('d/m/Y') : 'N/A' }}</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Prix unitaire</div>
                        <div class=\"field-value\">{{ reservation.voyage.prixUnitaire|number_format(2, ',', ' ') }} TND</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Catégorie</div>
                        <div class=\"field-value\">{{ reservation.voyage.categorie ?? 'N/A' }}</div>
                    </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"section\">
                <div class=\"section-title\">Détails de la Réservation</div>
                <div class=\"grid\">
                    <div>
                        <div class=\"field-label\">ID Utilisateur</div>
                        <div class=\"field-value\">User #{{ reservation.idUtilisateur }}</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Nombre de personnes</div>
                        <div class=\"field-value\">{{ reservation.nbrPersonnes }}</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Date de réservation</div>
                        <div class=\"field-value\">{{ reservation.dateReservation ? reservation.dateReservation|date('d/m/Y H:i') : 'N/A' }}</div>
                    </div>
                    <div>
                        <div class=\"field-label\">Date de création</div>
                        <div class=\"field-value\">{{ reservation.dateCreation ? reservation.dateCreation|date('d/m/Y H:i') : 'N/A' }}</div>
                    </div>
                </div>
            </div>

            <div class=\"total-box\">
                <div class=\"label\">Montant Total</div>
                <div class=\"amount\">{{ reservation.montantTotal|number_format(2, ',', ' ') }} TND</div>
                <div class=\"label\">{{ reservation.nbrPersonnes }} personne{{ reservation.nbrPersonnes > 1 ? 's' : '' }}</div>
            </div>
        </div>

        <div class=\"footer\">
            Tahwissa &copy; {{ 'now'|date('Y') }} — Document généré le {{ 'now'|date('d/m/Y à H:i') }}
        </div>
    </div>
</body>
</html>
", "admin/reservation/pdf.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\admin\\reservation\\pdf.html.twig");
    }
}
