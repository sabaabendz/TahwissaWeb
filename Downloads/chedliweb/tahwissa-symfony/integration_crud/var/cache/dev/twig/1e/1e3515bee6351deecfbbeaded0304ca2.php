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

/* base_auth.html.twig */
class __TwigTemplate_507dc211687d788a2d70d55c49ace0d8 extends Template
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
            'title' => [$this, 'block_title'],
            'extra_css' => [$this, 'block_extra_css'],
            'body' => [$this, 'block_body'],
            'extra_js' => [$this, 'block_extra_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_auth.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " | Authentification</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        :root {
            --primary: #1565C0;
            --primary-light: #42A5F5;
            --primary-dark: #0D47A1;
            --secondary: #7C4DFF;
            --accent: #FF6D00;
            --success: #00C853;
            --danger: #FF1744;
            --text-dark: #1a1a2e;
            --text-light: #ffffff;
            --text-muted: #94a3b8;
            --bg-dark: #0f172a;
            --radius: 16px;
            --radius-sm: 8px;
            --shadow: 0 8px 32px rgba(0,0,0,0.12);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--bg-dark) 0%, #1a237e 50%, var(--primary-dark) 100%);
            color: var(--text-dark);
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(66,165,245,0.1) 0%, transparent 50%);
            animation: pulse 8s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }

        .auth-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 480px;
            padding: 15px;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 40px;
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .auth-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .auth-logo h1 {
            font-size: 2rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .auth-logo p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .form-floating {
            margin-bottom: 16px;
        }

        .form-floating .form-control {
            border: 2px solid #e2e8f0;
            border-radius: var(--radius-sm);
            padding: 16px 12px 8px 12px;
            font-size: 0.95rem;
            transition: var(--transition);
            background: #f8fafc;
        }

        .form-floating .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(21, 101, 192, 0.15);
            background: #fff;
        }

        .btn-auth {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: var(--radius-sm);
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-auth:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(21, 101, 192, 0.4);
        }

        .auth-links {
            text-align: center;
            margin-top: 20px;
        }

        .auth-links a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .auth-links a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .auth-divider {
            text-align: center;
            margin: 20px 0;
            position: relative;
        }

        .auth-divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e2e8f0;
        }

        .auth-divider span {
            background: rgba(255,255,255,0.95);
            padding: 0 15px;
            position: relative;
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        .alert {
            border-radius: var(--radius-sm);
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .form-check-label {
            font-size: 0.9rem;
            color: #64748b;
        }

        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        ";
        // line 198
        yield from $this->unwrap()->yieldBlock('extra_css', $context, $blocks);
        // line 199
        yield "    </style>
</head>
<body>
    <div class=\"auth-container\">
        ";
        // line 203
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 204
        yield "    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
    ";
        // line 207
        yield from $this->unwrap()->yieldBlock('extra_js', $context, $blocks);
        // line 208
        yield "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tahwissa";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_css"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 207
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_js"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_auth.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  327 => 207,  311 => 203,  295 => 198,  278 => 6,  268 => 208,  266 => 207,  261 => 204,  259 => 203,  253 => 199,  251 => 198,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Tahwissa{% endblock %} | Authentification</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        :root {
            --primary: #1565C0;
            --primary-light: #42A5F5;
            --primary-dark: #0D47A1;
            --secondary: #7C4DFF;
            --accent: #FF6D00;
            --success: #00C853;
            --danger: #FF1744;
            --text-dark: #1a1a2e;
            --text-light: #ffffff;
            --text-muted: #94a3b8;
            --bg-dark: #0f172a;
            --radius: 16px;
            --radius-sm: 8px;
            --shadow: 0 8px 32px rgba(0,0,0,0.12);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--bg-dark) 0%, #1a237e 50%, var(--primary-dark) 100%);
            color: var(--text-dark);
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(66,165,245,0.1) 0%, transparent 50%);
            animation: pulse 8s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }

        .auth-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 480px;
            padding: 15px;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 40px;
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .auth-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .auth-logo h1 {
            font-size: 2rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .auth-logo p {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .form-floating {
            margin-bottom: 16px;
        }

        .form-floating .form-control {
            border: 2px solid #e2e8f0;
            border-radius: var(--radius-sm);
            padding: 16px 12px 8px 12px;
            font-size: 0.95rem;
            transition: var(--transition);
            background: #f8fafc;
        }

        .form-floating .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(21, 101, 192, 0.15);
            background: #fff;
        }

        .btn-auth {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: var(--radius-sm);
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-auth:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(21, 101, 192, 0.4);
        }

        .auth-links {
            text-align: center;
            margin-top: 20px;
        }

        .auth-links a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .auth-links a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .auth-divider {
            text-align: center;
            margin: 20px 0;
            position: relative;
        }

        .auth-divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e2e8f0;
        }

        .auth-divider span {
            background: rgba(255,255,255,0.95);
            padding: 0 15px;
            position: relative;
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        .alert {
            border-radius: var(--radius-sm);
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .form-check-label {
            font-size: 0.9rem;
            color: #64748b;
        }

        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        {% block extra_css %}{% endblock %}
    </style>
</head>
<body>
    <div class=\"auth-container\">
        {% block body %}{% endblock %}
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
    {% block extra_js %}{% endblock %}
</body>
</html>
", "base_auth.html.twig", "C:\\Users\\sabso\\Downloads\\chedliweb\\tahwissa-symfony\\templates\\base_auth.html.twig");
    }
}
