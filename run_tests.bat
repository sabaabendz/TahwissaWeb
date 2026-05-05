@echo off
REM Script d'exécution des tests PHPUnit pour Windows
REM Module Transport - Tahwissa

setlocal enabledelayedexpansion

title Tests PHPUnit - Module Transport

echo ========================================
echo Tests PHPUnit - Module Transport
echo ========================================
echo.

REM Vérifier si composer.json existe
if not exist "composer.json" (
    echo Error: composer.json not found!
    pause
    exit /b 1
)

REM Installer PHPUnit si pas présent
if not exist "vendor\phpunit\phpunit" (
    echo Installing PHPUnit...
    call composer require --dev phpunit/phpunit ^9.5
)

REM Créer .env.test s'il n'existe pas
if not exist ".env.test" (
    echo Creating .env.test...
    if exist ".env.test.dist" (
        copy .env.test.dist .env.test >nul
        echo .env.test created
    ) else (
        (
            echo APP_ENV=test
            echo APP_DEBUG=0
            echo DATABASE_URL=sqlite:///%%kernel.project_dir%%/var/test.db
            echo MAILER_DSN=null://default
        ) > .env.test
        echo .env.test created
    )
)

echo.
echo Options:
echo 1. Run all tests
echo 2. Run unit tests only
echo 3. Run integration tests only
echo 4. Run with coverage report (text)
echo 5. Run with coverage report (HTML)
echo 6. Run specific test
echo 7. Run with verbose mode
echo 8. Exit
echo.

set /p choice=Choose option (1-8): 

if "%choice%"=="1" (
    echo Running all tests...
    call vendor\bin\phpunit
) else if "%choice%"=="2" (
    echo Running unit tests...
    call vendor\bin\phpunit tests\Unit
) else if "%choice%"=="3" (
    echo Running integration tests...
    call vendor\bin\phpunit tests\Integration
) else if "%choice%"=="4" (
    echo Generating coverage report (text)...
    call vendor\bin\phpunit --coverage-text
) else if "%choice%"=="5" (
    echo Generating coverage report (HTML)...
    call vendor\bin\phpunit --coverage-html coverage\
    echo Report generated in 'coverage\' directory
) else if "%choice%"=="6" (
    set /p test_path=Enter test path or class name: 
    echo Running test: !test_path!
    call vendor\bin\phpunit !test_path!
) else if "%choice%"=="7" (
    echo Running in verbose mode...
    call vendor\bin\phpunit -v
) else if "%choice%"=="8" (
    echo Goodbye!
    exit /b 0
) else (
    echo Invalid option
    pause
    exit /b 1
)

echo.
echo Tests completed!
pause
