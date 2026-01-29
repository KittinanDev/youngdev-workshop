#!/bin/bash
# Setup script for local development

echo "🚀 YoungDev Workshop - Setup Script"
echo ""

# Check if PHP is installed
if ! command -v php &> /dev/null; then
    echo "❌ PHP is not installed"
    echo "Please install PHP from https://www.php.net/downloads"
    exit 1
fi

echo "✅ PHP found: $(php --version)"
echo ""

# Check if composer is installed
if ! command -v composer &> /dev/null; then
    echo "⚠️  Composer not found, skipping composer install"
else
    echo "✅ Installing dependencies with Composer..."
    composer install
fi

echo ""
echo "✅ Setup complete!"
echo ""
echo "To start development server:"
echo "  php -S localhost:8000 -t public"
echo ""
echo "Then open:"
echo "  http://localhost:8000"
