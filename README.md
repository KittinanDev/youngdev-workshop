# YoungDev Workshop Platform 🚀

Interactive slide-based workshop platform for learning to code. Built with **Laravel 12** backend and vanilla JavaScript frontend.

## Features ✨

- 📚 **Slide-based Learning** - Learn through interactive slides
- 💻 **Code Editor** - Write and execute code directly
- 📊 **Progress Tracking** - Track your learning progress
- 🎯 **Multiple Courses** - JavaScript, HTML, CSS, PHP
- 🔥 **Real Code Execution** - See results instantly
- 🎨 **Beautiful UI** - Built with Tailwind CSS

## Tech Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: HTML5, Vanilla JavaScript, Tailwind CSS
- **Database**: SQLite (no setup needed)
- **Deployment**: Railway, Heroku

## Project Structure

```
youngdev-workshop/
├── app/Http/Controllers/
│   ├── CourseController.php
│   ├── SlideController.php
│   └── CodeRunnerController.php
├── bootstrap/
│   └── app.php
├── config/
│   └── app.php
├── public/
│   ├── index.php         # Laravel entry point
│   └── index.html        # Slide UI
├── routes/
│   └── api.php
├── composer.json
├── Procfile
└── .env.example
```

## API Endpoints

- `GET /api/courses` - Get all courses
- `GET /api/courses/{id}/slides` - Get slides for a course
- `GET /api/slides/{id}` - Get specific slide
- `POST /api/runner` - Execute code

## Quick Start

### Local Development

1. **Install requirements**
   ```bash
   # PHP 8.2+
   # Composer
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run development server**
   ```bash
   php artisan serve
   ```

5. Open http://localhost:8000

### Deploy to Railway

1. Push to GitHub
2. Go to https://railway.app
3. Connect your GitHub repository
4. Select `youngdev-workshop`
5. Railway auto-detects Laravel
6. Deploy automatically! 🎉

## Available Courses

### JavaScript (7 slides)
- Variables and Strings
- Operators and Math
- Functions
- Arrays
- If Statements
- Loops
- Objects

### HTML, CSS, PHP
- Basic introductions and fundamentals

## License

MIT License
