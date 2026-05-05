#!/bin/bash

# Script d'installation et d'exécution des tests PHPUnit
# Pour le module Transport - Tahwissa

set -e

# Couleurs pour l'output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

echo -e "${BLUE}========================================${NC}"
echo -e "${BLUE}Tests PHPUnit - Module Transport${NC}"
echo -e "${BLUE}========================================${NC}"
echo ""

# Fonction pour afficher les étapes
print_step() {
    echo -e "${YELLOW}→ $1${NC}"
}

# Fonction pour afficher les succès
print_success() {
    echo -e "${GREEN}✓ $1${NC}"
}

# Fonction pour afficher les erreurs
print_error() {
    echo -e "${RED}✗ $1${NC}"
}

# Étape 1: Vérifier si composer.json existe
print_step "Vérification du projet Symfony..."
if [ ! -f "composer.json" ]; then
    print_error "composer.json non trouvé!"
    exit 1
fi
print_success "composer.json trouvé"

# Étape 2: Installer PHPUnit si pas présent
print_step "Installation des dépendances de test..."
if [ ! -d "vendor/phpunit/phpunit" ]; then
    composer require --dev phpunit/phpunit ^9.5
    print_success "PHPUnit installé"
else
    print_success "PHPUnit déjà installé"
fi

# Étape 3: Créer .env.test s'il n'existe pas
print_step "Configuration de l'environnement de test..."
if [ ! -f ".env.test" ]; then
    if [ -f ".env.test.dist" ]; then
        cp .env.test.dist .env.test
        print_success ".env.test créé à partir de .env.test.dist"
    else
        echo 'APP_ENV=test
APP_DEBUG=0
DATABASE_URL="sqlite:///:memory:"
MAILER_DSN=null://default' > .env.test
        print_success ".env.test créé"
    fi
else
    print_success ".env.test déjà existant"
fi

# Étape 4: Afficher le menu des options
echo ""
echo -e "${BLUE}Options disponibles:${NC}"
echo "  1. Exécuter tous les tests"
echo "  2. Exécuter uniquement les tests unitaires"
echo "  3. Exécuter uniquement les tests d'intégration"
echo "  4. Exécuter avec rapport de couverture (texte)"
echo "  5. Exécuter avec rapport de couverture (HTML)"
echo "  6. Exécuter un test spécifique"
echo "  7. Exécuter avec le mode verbose"
echo "  8. Quitter"
echo ""
read -p "Choisir une option (1-8): " choice

case $choice in
    1)
        print_step "Exécution de tous les tests..."
        ./vendor/bin/phpunit
        ;;
    2)
        print_step "Exécution des tests unitaires..."
        ./vendor/bin/phpunit tests/Unit
        ;;
    3)
        print_step "Exécution des tests d'intégration..."
        ./vendor/bin/phpunit tests/Integration
        ;;
    4)
        print_step "Génération du rapport de couverture (texte)..."
        ./vendor/bin/phpunit --coverage-text
        ;;
    5)
        print_step "Génération du rapport de couverture (HTML)..."
        ./vendor/bin/phpunit --coverage-html coverage/
        print_success "Rapport généré dans le dossier 'coverage/'"
        ;;
    6)
        read -p "Entrez le chemin du test ou le nom de la classe: " test_path
        print_step "Exécution du test: $test_path"
        ./vendor/bin/phpunit "$test_path"
        ;;
    7)
        print_step "Exécution en mode verbose..."
        ./vendor/bin/phpunit -v
        ;;
    8)
        echo "Au revoir!"
        exit 0
        ;;
    *)
        print_error "Option invalide"
        exit 1
        ;;
esac

echo ""
echo -e "${GREEN}Tests terminés!${NC}"
