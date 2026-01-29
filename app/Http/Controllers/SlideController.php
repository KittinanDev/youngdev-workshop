<?php

namespace App\Http\Controllers;

class SlideController extends Controller
{
    private function getJavaScriptSlides()
    {
        return [
            [
                'step' => 1,
                'title' => 'Variables and Strings',
                'description' => 'Learn how to store and manipulate text data',
                'difficulty' => 'Beginner',
                'language' => 'javascript',
                'content' => '<h3>Variables in JavaScript</h3><p>Variables store data values. Use <code>let</code>, <code>const</code>, or <code>var</code></p><p><strong>Best Practice:</strong> Use <code>const</code> by default, <code>let</code> if you need to reassign</p>',
                'codeExample' => "const name = 'John';\nconst greeting = 'Hello, ' + name;\nconsole.log(greeting);",
                'task' => 'Create a variable with your name and print a greeting',
                'starterCode' => "const myName = ''; // Replace with your name\nconst message = 'Hi, ' + myName;\nconsole.log(message);",
                'hints' => ['Replace the empty string with your name', 'Use console.log() to print'],
                'tests' => [
                    ['input' => '', 'expected' => 'output contains greeting']
                ]
            ],
            [
                'step' => 2,
                'title' => 'Operators and Math',
                'description' => 'Perform calculations and comparisons',
                'difficulty' => 'Beginner',
                'language' => 'javascript',
                'content' => '<h3>Basic Operators</h3><p><code>+</code> Add, <code>-</code> Subtract, <code>*</code> Multiply, <code>/</code> Divide</p><p><code>===</code> Equality, <code>&gt;</code> Greater, <code>&lt;</code> Less</p>',
                'codeExample' => "const a = 10;\nconst b = 5;\nconsole.log(a + b); // 15\nconsole.log(a > b); // true",
                'task' => 'Calculate the area of a rectangle',
                'starterCode' => "const width = 5;\nconst height = 3;\nconst area = width * height;\nconsole.log('Area: ' + area);",
                'hints' => ['Multiply width by height', 'Use console.log to display result'],
                'tests' => [['input' => '', 'expected' => 'output contains 15']]
            ],
            [
                'step' => 3,
                'title' => 'Functions',
                'description' => 'Write reusable blocks of code',
                'difficulty' => 'Beginner',
                'language' => 'javascript',
                'content' => '<h3>Function Definition</h3><p><code>function name(param) { return value; }</code></p><p>Functions accept parameters and return results</p>',
                'codeExample' => "function add(a, b) {\n  return a + b;\n}\nconsole.log(add(3, 4)); // 7",
                'task' => 'Create a function that multiplies two numbers',
                'starterCode' => "function multiply(a, b) {\n  return a * b;\n}\nconsole.log(multiply(4, 5));",
                'hints' => ['Return the product of a and b', 'Call the function with numbers'],
                'tests' => [['input' => '', 'expected' => 'output contains 20']]
            ],
            [
                'step' => 4,
                'title' => 'Arrays',
                'description' => 'Store and manage lists of data',
                'difficulty' => 'Beginner',
                'language' => 'javascript',
                'content' => '<h3>Working with Arrays</h3><p>Arrays store multiple values: <code>const arr = [1, 2, 3];</code></p><p>Access with index: <code>arr[0]</code>, Add with <code>.push()</code></p>',
                'codeExample' => "const fruits = ['apple', 'banana', 'cherry'];\nfruit.push('mango');\nconsole.log(fruits[0]); // apple",
                'task' => 'Create an array of your favorite colors',
                'starterCode' => "const colors = ['red', 'blue', 'green'];\nconsole.log('First color: ' + colors[0]);\nconsole.log('Total colors: ' + colors.length);",
                'hints' => ['Use array indexing to access elements', 'Use .length to get array size'],
                'tests' => [['input' => '', 'expected' => 'output shows red']]
            ],
            [
                'step' => 5,
                'title' => 'If Statements',
                'description' => 'Make decisions in your code',
                'difficulty' => 'Beginner',
                'language' => 'javascript',
                'content' => '<h3>Conditional Logic</h3><p><code>if (condition) { } else if { } else { }</code></p><p>Compare values and execute different code</p>',
                'codeExample' => "const age = 20;\nif (age >= 18) {\n  console.log('Adult');\n} else {\n  console.log('Minor');\n}",
                'task' => 'Check if a number is even or odd',
                'starterCode' => "const num = 7;\nif (num % 2 === 0) {\n  console.log('Even');\n} else {\n  console.log('Odd');\n}",
                'hints' => ['Use modulo operator (%) to check remainder', 'If remainder is 0, number is even'],
                'tests' => [['input' => '', 'expected' => 'output contains Odd']]
            ],
            [
                'step' => 6,
                'title' => 'Loops',
                'description' => 'Repeat code multiple times',
                'difficulty' => 'Beginner',
                'language' => 'javascript',
                'content' => '<h3>For Loop</h3><p><code>for (let i = 0; i &lt; 5; i++) { }</code></p><p>Repeat code a specific number of times</p>',
                'codeExample' => "for (let i = 1; i <= 5; i++) {\n  console.log(i);\n}",
                'task' => 'Print numbers from 1 to 10',
                'starterCode' => "for (let i = 1; i <= 10; i++) {\n  console.log(i);\n}",
                'hints' => ['Start from 1', 'Loop while i <= 10', 'Increment i by 1'],
                'tests' => [['input' => '', 'expected' => 'output contains 1']]
            ],
            [
                'step' => 7,
                'title' => 'Objects',
                'description' => 'Group related data together',
                'difficulty' => 'Beginner',
                'language' => 'javascript',
                'content' => '<h3>Object Literals</h3><p><code>const obj = { key: value };</code></p><p>Access properties with dot notation: <code>obj.key</code></p>',
                'codeExample' => "const person = {\n  name: 'John',\n  age: 25\n};\nconsole.log(person.name);",
                'task' => 'Create an object for a student with name and grade',
                'starterCode' => "const student = {\n  name: 'Alice',\n  grade: 'A'\n};\nconsole.log('Name: ' + student.name);",
                'hints' => ['Use curly braces for objects', 'Use colon to separate key and value'],
                'tests' => [['input' => '', 'expected' => 'output contains Alice']]
            ]
        ];
    }

    public function byCourse($id)
    {
        $slides = match($id) {
            1 => $this->getJavaScriptSlides(),
            default => []
        };

        return response()->json($slides);
    }

    public function show($id)
    {
        $slides = $this->getJavaScriptSlides();
        $slide = $slides[$id - 1] ?? null;

        if (!$slide) {
            return response()->json(['error' => 'Slide not found'], 404);
        }

        return response()->json($slide);
    }
}
