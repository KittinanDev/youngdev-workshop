<?php
// api/courses.php - Return list of available courses

$courses = [
    [
        'id' => 'javascript',
        'title' => 'JavaScript พื้นฐาน',
        'description' => 'เรียนรู้ JavaScript ตั้งแต่เริ่มต้น',
        'icon' => '⚡',
        'slides' => 7
    ],
    [
        'id' => 'html',
        'title' => 'HTML พื้นฐาน',
        'description' => 'สร้างโครงสร้างเว็บด้วย HTML',
        'icon' => '🌐',
        'slides' => 5
    ],
    [
        'id' => 'css',
        'title' => 'CSS Styling',
        'description' => 'ตกแต่งเว็บด้วย CSS',
        'icon' => '🎨',
        'slides' => 5
    ],
    [
        'id' => 'php',
        'title' => 'PHP พื้นฐาน',
        'description' => 'เขียนเซิร์ฟเวอร์ด้วย PHP',
        'icon' => '🐘',
        'slides' => 6
    ]
];

header('Content-Type: application/json');
echo json_encode($courses);
?>
