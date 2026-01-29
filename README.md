# YoungDev Workshop Platform

Interactive PHP Workshop Platform - Learn to Code with Slides!

## Structure

```
youngdev-workshop/
├── public/
│   ├── index.php          # Main entry point
│   ├── css/
│   │   └── style.css      # Tailwind CSS
│   └── js/
│       └── app.js         # Vanilla JS
├── api/
│   ├── courses.php        # Course data API
│   ├── slides.php         # Slide data API
│   └── runner.php         # Code execution
├── data/
│   └── courses.json       # Course definitions
├── composer.json
├── Procfile
└── README.md
```

## Setup

1. Install PHP dependencies:
```bash
composer install
```

2. Run locally:
```bash
php -S localhost:8000 -t public
```

3. Open browser:
```
http://localhost:8000
```

## Deploy to Railway

1. Create Railway account: https://railway.app
2. Connect your GitHub repo
3. Deploy button will appear
4. Choose PHP runtime
5. Done! Your site is live

## Features

✅ Slide-based workshop format
✅ Interactive code editor
✅ PHP backend API
✅ Real-time code execution
✅ Progress tracking
✅ Multiple courses
