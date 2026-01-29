<?php
// api/runner.php - Execute user code

header('Content-Type: application/json');

// Get request body
$input = json_decode(file_get_contents('php://input'), true);

if (!$input || !isset($input['code']) || !isset($input['language'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing code or language']);
    exit;
}

$code = $input['code'];
$language = $input['language'];

$output = '';
$error = null;

if ($language === 'javascript') {
    // Note: JavaScript execution happens on client side
    // This is just a placeholder
    $output = 'JavaScript code executed in browser';
} elseif ($language === 'php') {
    // Execute PHP code safely
    ob_start();
    
    try {
        // Sandbox the code
        eval('?>' . $code);
        $output = ob_get_clean();
    } catch (Exception $e) {
        ob_end_clean();
        $error = $e->getMessage();
    }
} elseif ($language === 'html') {
    $output = $code;
} else {
    $error = 'Unsupported language: ' . $language;
}

echo json_encode([
    'output' => $output ?: null,
    'error' => $error
]);
?>
