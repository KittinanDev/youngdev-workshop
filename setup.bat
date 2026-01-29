@echo off
REM Windows setup script for local development

echo 🚀 YoungDev Workshop - Setup Script
echo.

REM Check if PHP is installed
php --version >nul 2>&1
if errorlevel 1 (
    echo ❌ PHP is not installed
    echo Please install PHP from https://www.php.net/downloads
    pause
    exit /b 1
)

echo ✅ PHP found:
php --version
echo.

REM Check if composer is installed
composer --version >nul 2>&1
if errorlevel 1 (
    echo ⚠️  Composer not found, skipping composer install
) else (
    echo ✅ Installing dependencies with Composer...
    call composer install
)

echo.
echo ✅ Setup complete!
echo.
echo To start development server:
echo   php -S localhost:8000 -t public
echo.
echo Then open:
echo   http://localhost:8000
echo.
pause
