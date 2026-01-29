<?php

namespace App\Http\Controllers;

class CourseController extends Controller
{
    public function index()
    {
        $courses = [
            [
                'id' => 1,
                'title' => 'JavaScript',
                'description' => 'Learn programming fundamentals with JavaScript',
                'icon' => '📘',
                'slideCount' => 7
            ],
            [
                'id' => 2,
                'title' => 'HTML',
                'description' => 'Master HTML - The foundation of web development',
                'icon' => '🏗️',
                'slideCount' => 5
            ],
            [
                'id' => 3,
                'title' => 'CSS',
                'description' => 'Create beautiful designs with CSS',
                'icon' => '🎨',
                'slideCount' => 5
            ],
            [
                'id' => 4,
                'title' => 'PHP',
                'description' => 'Server-side programming with PHP',
                'icon' => '🐘',
                'slideCount' => 6
            ]
        ];

        return response()->json($courses);
    }
}
