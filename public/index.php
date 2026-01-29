<?php
// Enable CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

// Simple router
$request = $_GET['action'] ?? 'index';

// Prevent directory traversal
$request = preg_replace('/[^a-zA-Z0-9_-]/', '', $request);

switch ($request) {
    case 'courses':
        require __DIR__ . '/../api/courses.php';
        break;
    case 'slides':
        require __DIR__ . '/../api/slides.php';
        break;
    case 'run':
        require __DIR__ . '/../api/runner.php';
        break;
    default:
        // Serve HTML
        require __DIR__ . '/index.html';
        break;
}
?>
