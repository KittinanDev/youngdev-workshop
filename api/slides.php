<?php
// api/slides.php - Return slides for a specific course

header('Content-Type: application/json');

$course = $_GET['course'] ?? 'javascript';

// Validate course
$allowedCourses = ['javascript', 'html', 'css', 'php'];
if (!in_array($course, $allowedCourses)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid course']);
    exit;
}

// Load slides based on course
$slides = [];

if ($course === 'javascript') {
    $slides = [
        [
            'step' => 1,
            'title' => 'Variables and Strings',
            'description' => 'เรียนรู้ตัวแปรและข้อความ (Variables & Strings)',
            'difficulty' => 'เริ่มต้น',
            'language' => 'javascript',
            'content' => '
                <h3 class="text-xl font-bold mb-3">ตัวแปร (Variables) คืออะไร?</h3>
                <p class="text-gray-700 mb-4">ตัวแปร คือที่เก็บข้อมูล เหมือนกล่องที่ใส่ของไว้</p>
                
                <h4 class="text-lg font-bold mb-2">วิธีสร้างตัวแปร</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li><strong>let</strong> = เปลี่ยนค่าได้</li>
                    <li><strong>const</strong> = เปลี่ยนไม่ได้ (ใช้บ่อยที่สุด)</li>
                    <li><strong>var</strong> = แบบเก่า (ไม่แนะนำ)</li>
                </ul>
            ',
            'code' => 'let name = "YoungDev";
const age = 20;
console.log("สวัสดี " + name);
console.log("อายุ: " + age);',
            'task' => 'สร้างตัวแปรชื่อ name และ age แล้วแสดงข้อความ "สวัสดี [name], อายุ [age]"',
            'starterCode' => '// สร้างตัวแปร
let name = "YoungDev";
let age = 20;

// แสดงข้อความ (เขียนโค้ดตรงนี้)
',
            'hasEditor' => true,
            'hints' => 'ใช้ console.log() ร่วมกับ + เพื่อต่อข้อความ',
            'tests' => [
                ['description' => 'ต้องมี console.log', 'check' => 'code.includes("console.log")'],
                ['description' => 'ต้องมีตัวแปร name', 'check' => 'code.includes("name")'],
            ]
        ],
        [
            'step' => 2,
            'title' => 'Operators and Math',
            'description' => 'การคำนวณและ Operators',
            'difficulty' => 'เริ่มต้น',
            'language' => 'javascript',
            'content' => '
                <h3 class="text-xl font-bold mb-3">Operators คืออะไร?</h3>
                <p class="text-gray-700 mb-4">ใช้สำหรับคำนวณหรือเปรียบเทียบ</p>
                
                <h4 class="text-lg font-bold mb-2">Operators ที่สำคัญ</h4>
                <table class="w-full border-collapse">
                    <tr class="border">
                        <td class="border p-2 bg-gray-100"><strong>+</strong></td>
                        <td class="border p-2">บวก</td>
                    </tr>
                    <tr class="border">
                        <td class="border p-2"><strong>-</strong></td>
                        <td class="border p-2">ลบ</td>
                    </tr>
                    <tr class="border">
                        <td class="border p-2"><strong>*</strong></td>
                        <td class="border p-2">คูณ</td>
                    </tr>
                    <tr class="border">
                        <td class="border p-2"><strong>/</strong></td>
                        <td class="border p-2">หาร</td>
                    </tr>
                </table>
            ',
            'code' => 'let a = 10;
let b = 5;
console.log(a + b);  // 15
console.log(a - b);  // 5
console.log(a * b);  // 50
console.log(a / b);  // 2',
            'task' => 'สร้างตัวแปร x = 15, y = 3 แล้วแสดงผลการคำนวณทั้ง 4 แบบ',
            'starterCode' => 'let x = 15;
let y = 3;

// แสดงผลการบวก ลบ คูณ หาร
',
            'hasEditor' => true,
            'hints' => 'ใช้ console.log() 4 ครั้งเพื่อแสดงผล +, -, *, /',
            'tests' => []
        ],
        [
            'step' => 3,
            'title' => 'Functions',
            'description' => 'สร้างฟังก์ชันเพื่อใช้โค้ดซ้ำ',
            'difficulty' => 'กลาง',
            'language' => 'javascript',
            'content' => '
                <h3 class="text-xl font-bold mb-3">Functions (ฟังก์ชัน) คืออะไร?</h3>
                <p class="text-gray-700 mb-4">กล่องโค้ดที่เรียกใช้ซ้ำได้ หลายครั้ง</p>
                
                <h4 class="text-lg font-bold mb-2">วิธีสร้าง</h4>
                <ol class="list-decimal list-inside text-gray-700 space-y-2">
                    <li>ใช้ <strong>function</strong> ตามด้วยชื่อ</li>
                    <li>ใส่ parameters (ถ้าต้อง)</li>
                    <li>เขียนโค้ดข้างในปีกกา {}</li>
                    <li>Return ผลลัพธ์ (ถ้ามี)</li>
                </ol>
            ',
            'code' => 'function add(a, b) {
    return a + b;
}

let result = add(5, 3);
console.log(result);  // 8',
            'task' => 'สร้างฟังก์ชัน multiply ที่รับ 2 ตัวแปรแล้วคำนวณผลคูณ',
            'starterCode' => '// สร้างฟังก์ชัน multiply
function multiply(a, b) {
    // เขียนโค้ดตรงนี้
}

// เรียกใช้ฟังก์ชัน
let result = multiply(4, 5);
console.log(result);
',
            'hasEditor' => true,
            'hints' => 'ใช้ return a * b; เพื่อส่งผลลัพธ์กลับ',
            'tests' => []
        ],
        [
            'step' => 4,
            'title' => 'Arrays',
            'description' => 'จัดการข้อมูลหลายตัวด้วย Array',
            'difficulty' => 'กลาง',
            'language' => 'javascript',
            'content' => '
                <h3 class="text-xl font-bold mb-3">Array (อาร์เรย์) คืออะไร?</h3>
                <p class="text-gray-700 mb-4">ลิสต์เก็บข้อมูลหลายๆ ตัว โดยเรียงลำดับ</p>
                
                <h4 class="text-lg font-bold mb-2">ตัวอย่าง</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li><strong>[1, 2, 3, 4, 5]</strong> = อาร์เรย์ของตัวเลข</li>
                    <li><strong>["apple", "banana"]</strong> = อาร์เรย์ของข้อความ</li>
                    <li>ใช้ [index] เพื่อเข้าถึง (เริ่มต้นที่ 0)</li>
                </ul>
            ',
            'code' => 'let fruits = ["apple", "banana", "orange"];
console.log(fruits[0]);      // apple
console.log(fruits.length);  // 3

fruits.push("mango");        // เพิ่มท้าย
console.log(fruits);',
            'task' => 'สร้าง array ของตัวเลข แล้วแสดง index 0, 1, 2 และจำนวนทั้งหมด',
            'starterCode' => 'let numbers = [10, 20, 30, 40];

// แสดง index 0, 1, 2
console.log(numbers[0]);
// เขียนโค้ดต่อ

// แสดงจำนวนทั้งหมด
',
            'hasEditor' => true,
            'hints' => 'ใช้ .length เพื่อนับจำนวน',
            'tests' => []
        ],
        [
            'step' => 5,
            'title' => 'If Statements',
            'description' => 'ตัดสินใจด้วย If-Else',
            'difficulty' => 'กลาง',
            'language' => 'javascript',
            'content' => '
                <h3 class="text-xl font-bold mb-3">If Statement (ประโยคเงื่อนไข)</h3>
                <p class="text-gray-700 mb-4">ใช้เพื่อตัดสินใจโยน code ตามเงื่อนไข</p>
                
                <h4 class="text-lg font-bold mb-2">ตัวอย่าง</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li><strong>if (condition)</strong> = ถ้าเป็นจริง</li>
                    <li><strong>else if</strong> = หรือเป็นจริง</li>
                    <li><strong>else</strong> = ถ้าไม่เป็นจริง</li>
                </ul>
            ',
            'code' => 'let age = 20;

if (age >= 18) {
    console.log("ผู้ใหญ่");
} else {
    console.log("เด็ก");
}',
            'task' => 'สร้าง if-else เช็คว่าเลขเป็นคี่หรือคู่',
            'starterCode' => 'let num = 7;

// เช็คว่าเป็นคี่หรือคู่
if (num % 2 === 0) {
    // เขียนโค้ด
} else {
    // เขียนโค้ด
}
',
            'hasEditor' => true,
            'hints' => 'ใช้ % (modulo) เพื่อหารเอาเศษ ถ้า === 0 แสดงว่าคู่',
            'tests' => []
        ],
        [
            'step' => 6,
            'title' => 'Loops (For Loop)',
            'description' => 'ทำงานซ้ำๆ ด้วย Loop',
            'difficulty' => 'กลาง',
            'language' => 'javascript',
            'content' => '
                <h3 class="text-xl font-bold mb-3">Loops (ลูป) คืออะไร?</h3>
                <p class="text-gray-700 mb-4">ทำงานซ้ำๆ หลายรอบ โดยไม่ต้องเขียนซ้ำ</p>
                
                <h4 class="text-lg font-bold mb-2">For Loop</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li><strong>let i = 0</strong> = เริ่มต้นที่ 0</li>
                    <li><strong>i < 5</strong> = ทำจนกว่า i จะถึง 5</li>
                    <li><strong>i++</strong> = เพิ่มค่า i ทีละ 1</li>
                </ul>
            ',
            'code' => 'for (let i = 0; i < 5; i++) {
    console.log(i);
}
// แสดง: 0, 1, 2, 3, 4',
            'task' => 'ใช้ for loop แสดงเลข 1 ถึง 10',
            'starterCode' => '// ใช้ for loop แสดงเลข 1-10
for (let i = 1; i <= 10; i++) {
    // เขียนโค้ด
}
',
            'hasEditor' => true,
            'hints' => 'ใช้ console.log(i) เพื่อแสดงค่า i',
            'tests' => []
        ],
        [
            'step' => 7,
            'title' => 'Objects',
            'description' => 'จัดกลุ่มข้อมูลด้วย Object',
            'difficulty' => 'สูง',
            'language' => 'javascript',
            'content' => '
                <h3 class="text-xl font-bold mb-3">Objects (อ็อบเจกต์) คืออะไร?</h3>
                <p class="text-gray-700 mb-4">กล่องที่เก็บข้อมูลแบบคู่ (key: value)</p>
                
                <h4 class="text-lg font-bold mb-2">ตัวอย่าง</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li><strong>{name: "YoungDev"}</strong> = object มี key name</li>
                    <li><strong>object.name</strong> = เข้าถึง value</li>
                    <li>สามารถมี properties หลายตัว</li>
                </ul>
            ',
            'code' => 'let person = {
    name: "YoungDev",
    age: 20,
    city: "Bangkok"
};

console.log(person.name);   // YoungDev
console.log(person.age);    // 20',
            'task' => 'สร้าง object ของนักเรียน มี name, age, school',
            'starterCode' => '// สร้าง object student
let student = {
    name: "YoungDev",
    // เพิ่ม age และ school
};

// แสดง name
console.log(student.name);
',
            'hasEditor' => true,
            'hints' => 'ใช้ key: value คั่นด้วย , ภายในปีกกา {}',
            'tests' => []
        ]
    ];
} elseif ($course === 'html') {
    $slides = [
        [
            'step' => 1,
            'title' => 'HTML คืออะไร?',
            'description' => 'เรียนรู้พื้นฐาน HTML',
            'difficulty' => 'เริ่มต้น',
            'language' => 'html',
            'content' => '
                <h3 class="text-xl font-bold mb-3">HTML = HyperText Markup Language</h3>
                <p class="text-gray-700 mb-4">ภาษาที่ใช้สร้างโครงสร้างเว็บไซต์</p>
                
                <h4 class="text-lg font-bold mb-2">Tags พื้นฐาน</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li><strong>&lt;h1&gt; ... &lt;/h1&gt;</strong> = หัวข้อ</li>
                    <li><strong>&lt;p&gt; ... &lt;/p&gt;</strong> = ย่อหน้า</li>
                    <li><strong>&lt;a href&gt;</strong> = ลิงก์</li>
                    <li><strong>&lt;img src&gt;</strong> = รูปภาพ</li>
                </ul>
            ',
            'code' => '<!DOCTYPE html>
<html>
  <head>
    <title>หน้าเว็บแรก</title>
  </head>
  <body>
    <h1>สวัสดี YoungDev!</h1>
    <p>นี่คือเว็บไซต์แรกของฉัน</p>
  </body>
</html>',
            'task' => 'สร้างหัวข้อ "ยินดีต้อนรับ" ด้วย &lt;h1&gt;',
            'starterCode' => '<!DOCTYPE html>
<html>
  <body>
    <!-- สร้างหัวข้อ "ยินดีต้อนรับ" -->
    
  </body>
</html>',
            'hasEditor' => true,
            'hints' => 'ใช้ &lt;h1&gt;ยินดีต้อนรับ&lt;/h1&gt;',
            'tests' => []
        ]
    ];
} elseif ($course === 'css') {
    $slides = [
        [
            'step' => 1,
            'title' => 'CSS คืออะไร?',
            'description' => 'ตกแต่งเว็บด้วย CSS',
            'difficulty' => 'เริ่มต้น',
            'language' => 'css',
            'content' => '
                <h3 class="text-xl font-bold mb-3">CSS = Cascading Style Sheets</h3>
                <p class="text-gray-700 mb-4">ใช้ตกแต่งเว็บไซต์ให้สวยงาม</p>
                
                <h4 class="text-lg font-bold mb-2">สิ่งที่ทำได้</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>เปลี่ยนสี</li>
                    <li>ปรับขนาด</li>
                    <li>ปรับตำแหน่ง</li>
                    <li>เพิ่มเอฟเฟกต์</li>
                </ul>
            ',
            'code' => 'h1 {
    color: blue;
    font-size: 32px;
}',
            'task' => 'เปลี่ยนสีหัวข้อเป็นสีแดง',
            'starterCode' => '<style>
  h1 {
    /* เขียน CSS ตรงนี้ */
  }
</style>

<h1>YoungDev</h1>',
            'hasEditor' => true,
            'hints' => 'ใช้ color: red; เพื่อเปลี่ยนเป็นสีแดง',
            'tests' => []
        ]
    ];
} elseif ($course === 'php') {
    $slides = [
        [
            'step' => 1,
            'title' => 'PHP คืออะไร?',
            'description' => 'เรียนรู้ PHP ตั้งแต่เริ่มต้น',
            'difficulty' => 'เริ่มต้น',
            'language' => 'php',
            'content' => '
                <h3 class="text-xl font-bold mb-3">PHP = PHP: Hypertext Preprocessor</h3>
                <p class="text-gray-700 mb-4">ภาษาโปรแกรมสำหรับเซิร์ฟเวอร์</p>
                
                <h4 class="text-lg font-bold mb-2">ข้อดี</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>ง่ายต่อการเรียนรู้</li>
                    <li>ใช้ได้กับเว็บไซต์ส่วนใหญ่</li>
                    <li>มี Database support</li>
                </ul>
            ',
            'code' => '<?php
$name = "YoungDev";
echo "สวัสดี " . $name;
?>',
            'task' => 'แสดงข้อความ "สวัสดี PHP"',
            'starterCode' => '<?php
// สร้างตัวแปร

// แสดงข้อความ

?>',
            'hasEditor' => true,
            'hints' => 'ใช้ echo แสดงข้อความ',
            'tests' => []
        ]
    ];
}

echo json_encode($slides);
?>
