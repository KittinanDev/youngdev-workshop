<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeRunnerController extends Controller
{
    public function execute(Request $request)
    {
        $code = $request->input('code', '');
        $language = $request->input('language', 'javascript');

        try {
            return match($language) {
                'javascript' => $this->executeJavaScript($code),
                'php' => $this->executePHP($code),
                'html' => $this->executeHTML($code),
                default => response()->json(['error' => 'Unsupported language'], 400)
            };
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    private function executeJavaScript($code)
    {
        // Client-side execution via frontend
        return response()->json(['message' => 'JavaScript executed on client']);
    }

    private function executePHP($code)
    {
        ob_start();
        try {
            eval('?>' . $code);
            $output = ob_get_clean();
            return response()->json(['output' => $output ?: 'No output']);
        } catch (\ParseError $e) {
            ob_end_clean();
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    private function executeHTML($code)
    {
        return response()->json(['output' => $code]);
    }
}
