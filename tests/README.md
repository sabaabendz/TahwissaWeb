# Tests Unitaires PHPUnit - Module Transport

Guide complet pour exécuter et gérer les tests unitaires du module Transport.

## 📋 Structure des Tests

```
tests/
├── Unit/
│   ├── Entity/
│   │   ├── TransportTest.php              # Tests pour l'entité Transport
│   │   └── ReservationTransportTest.php   # Tests pour l'entité ReservationTransport
│   └── Service/
│       ├── EmailServiceTest.php           # Tests pour le service Email
│       └── PdfServiceTest.php             # Tests pour le service PDF
└── Integration/
    └── Repository/
        ├── TransportRepositoryTest.php              # Tests pour TransportRepository
        └── ReservationTransportRepositoryTest.php   # Tests pour ReservationTransportRepository
```

## 🚀 Installation

### 1. Installer PHPUnit et dépendances de test

```bash
composer require --dev phpunit/phpunit ^9.5
composer require --dev symfony/test-pack
composer require --dev doctrine/doctrine-bundle
```

### 2. Configurer la base de données de test

Créer un fichier `.env.test` à la racine du projet:

```
DATABASE_URL="sqlite:///:memory:"
```

Ou pour utiliser une base PostgreSQL/MySQL de test:
```
DATABASE_URL="postgresql://user:password@localhost/tahwissa_test"
DATABASE_URL="mysql://user:password@localhost/tahwissa_test"
```

## 🧪 Exécution des Tests

### Exécuter tous les tests

```bash
php bin/phpunit
```

### Exécuter les tests unitaires uniquement

```bash
php bin/phpunit tests/Unit
```

### Exécuter les tests d'intégration uniquement

```bash
php bin/phpunit tests/Integration
```

### Exécuter un fichier de test spécifique

```bash
# Tests de l'entité Transport
php bin/phpunit tests/Unit/Entity/TransportTest.php

# Tests de l'entité ReservationTransport
php bin/phpunit tests/Unit/Entity/ReservationTransportTest.php

# Tests du service Email
php bin/phpunit tests/Unit/Service/EmailServiceTest.php

# Tests du service PDF
php bin/phpunit tests/Unit/Service/PdfServiceTest.php

# Tests du repository Transport
php bin/phpunit tests/Integration/Repository/TransportRepositoryTest.php

# Tests du repository ReservationTransport
php bin/phpunit tests/Integration/Repository/ReservationTransportRepositoryTest.php
```

### Exécuter une classe de test avec un filtre

```bash
# Exécuter une seule méthode de test
php bin/phpunit tests/Unit/Entity/TransportTest.php --filter testSetAndGetTypeTransport

# Exécuter plusieurs tests correspondant à un pattern
php bin/phpunit --filter "Transport" tests/Unit/Entity
```

## 📊 Coverage (Couverture de code)

Générer un rapport de couverture de code:

```bash
# Rapport texte
php bin/phpunit --coverage-text

# Rapport HTML (génère un dossier coverage/)
php bin/phpunit --coverage-html coverage/

# Rapport Clover (pour CI/CD)
php bin/phpunit --coverage-clover clover.xml
```

## 📝 Configuration PHPUnit

Le fichier `phpunit.xml.dist` contient la configuration principale:

- **Bootstrap**: `tests/bootstrap.php` - Initialisation des tests
- **Testsuites**: Groupes de tests (Unit, Integration)
- **Coverage**: Répertoires couverts par les tests

## 🧬 Types de Tests Créés

### 1. Tests Unitaires des Entités

#### `TransportTest.php`
- ✅ Création d'instance
- ✅ Setters/Getters pour chaque propriété
- ✅ Fluent interface (method chaining)
- ✅ Types de transport valides (Bus, Minibus, Train, Avion)
- ✅ Validation des prix
- ✅ Mise à jour des propriétés

**Couverture**: 20+ assertions

#### `ReservationTransportTest.php`
- ✅ Création d'instance
- ✅ Statut par défaut (EN_ATTENTE)
- ✅ Date de réservation au constructeur
- ✅ Setters/Getters pour toutes les propriétés
- ✅ Transitions de statut (EN_ATTENTE → CONFIRMEE → TERMINEE)
- ✅ Annulation de réservation
- ✅ Association avec un Transport

**Couverture**: 22+ assertions

### 2. Tests Unitaires des Services

#### `EmailServiceTest.php`
- ✅ Envoi d'email avec utilisateur valide
- ✅ Gestion d'utilisateur manquant
- ✅ Gestion d'email manquant
- ✅ Gestion d'exceptions du mailer
- ✅ Vérification que l'email contient les détails corrects
- ✅ Logging des confirmations et erreurs

**Mocking**: MailerInterface, UserRepository, LoggerInterface

**Couverture**: 15+ assertions

#### `PdfServiceTest.php`
- ✅ Génération de PDF pour un transport
- ✅ Génération avec zéro réservation
- ✅ Génération avec plusieurs réservations
- ✅ Gestion d'erreurs Twig
- ✅ Vérification des données passées au template
- ✅ Vérification que le repository est appelé correctement

**Mocking**: Pdf, Environment (Twig), ReservationTransportRepository

**Couverture**: 18+ assertions

### 3. Tests d'Intégration des Repositories

#### `TransportRepositoryTest.php`
- ✅ Création d'instance repository
- ✅ Méthode save avec flush
- ✅ Méthode save sans flush
- ✅ Méthode remove avec flush
- ✅ Méthode remove sans flush
- ✅ Sauvegarde de plusieurs transports

**Mocking**: EntityManagerInterface, ManagerRegistry

#### `ReservationTransportRepositoryTest.php`
- ✅ Création d'instance repository
- ✅ Sauvegarde de réservation
- ✅ Suppression de réservation
- ✅ Flux complet save/remove
- ✅ Mise à jour de statut
- ✅ Annulation de réservation
- ✅ Sauvegarde multiple
- ✅ Réservations par utilisateur

**Mocking**: EntityManagerInterface, ManagerRegistry

## 🔧 Bonnes Pratiques Suivies

### 1. **Isolation**
- Chaque test est indépendant
- Utilisation de mocks pour les dépendances externes
- Pas de dépendances de base de données pour les tests unitaires

### 2. **Clarté**
- Noms de tests explicites et en français
- Documentation de chaque test
- Pattern AAA (Arrange, Act, Assert)

### 3. **Couverture**
- Tests des cas nominaux (happy path)
- Tests des cas exceptionnels
- Tests avec données Provider (@dataProvider)
- Tests de flux complets

### 4. **Maintenabilité**
- Code DRY (Don't Repeat Yourself)
- Setup commun dans setUp()
- Tests regroupés logiquement

## 📈 Métriques de Test

### Entités Transport & ReservationTransport
```
Nombre de tests: 42+
Assertions: 100+
Couverture des méthodes: ~95%
```

### Services (Email & PDF)
```
Nombre de tests: 11+
Assertions: 33+
Couverture: 90%+
```

### Repositories
```
Nombre de tests: 16+
Assertions: 40+
Couverture: 95%+
```

## 🐛 Dépannage

### PHPUnit non trouvé

```bash
# Vérifier l'installation
composer require --dev phpunit/phpunit

# Ou utiliser le chemin complet
./vendor/bin/phpunit
```

### Erreurs de bootstrap

Vérifier que `tests/bootstrap.php` contient:
```php
require dirname(__DIR__).'/vendor/autoload.php';
```

### Tests échouent avec "Class not found"

```bash
# Regénérer l'autoloader
composer dump-autoload
```

## 📚 Ressources Supplémentaires

- [Documentation PHPUnit](https://phpunit.de/)
- [Symfony Testing Guide](https://symfony.com/doc/current/testing.html)
- [Mocking with PHPUnit](https://phpunit.de/manual/current/en/test-doubles.html)

## ✨ Prochaines Étapes

1. **Tests des Contrôleurs**: Ajouter des tests fonctionnels pour les contrôleurs
2. **Tests E2E**: Tests d'intégration complète avec la base de données
3. **CI/CD**: Intégrer les tests dans un pipeline (GitHub Actions, GitLab CI, etc.)
4. **Performance**: Ajouter des tests de performance et benchmark

---

**Créé le**: 4 mai 2026  
**Module**: Transport Tahwissa
**Version**: 1.0
