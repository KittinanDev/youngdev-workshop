# Deploy Guide - YoungDev Workshop Platform

## เตรียมความพร้อมสำหรับ Deploy

### ตัวเลือกที่ 1: Deploy บน Railway (แนะนำ 🚀)

Railway รองรับ PHP ได้ดี และใช้งานง่าย

#### ขั้นตอน:

1. **สมัครบัญชี Railway**
   - ไปที่ https://railway.app
   - Sign up ด้วย GitHub (แนะนำ)

2. **Connect GitHub Repository**
   - Push code ไปยัง GitHub
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   git branch -M main
   git remote add origin https://github.com/YOUR_USERNAME/youngdev-workshop.git
   git push -u origin main
   ```

3. **Deploy บน Railway**
   - เข้า Railway Dashboard
   - Click "New Project"
   - Select "Deploy from GitHub"
   - Choose repository
   - Railway จะ auto-detect PHP
   - Wait for deployment to complete

4. **Access Your App**
   - Railway จะให้ URL ให้คุณ
   - Example: `https://youngdev-workshop.railway.app`

---

### ตัวเลือกที่ 2: Deploy บน Heroku (ต้องมี Credit Card)

#### ขั้นตอน:

1. **Install Heroku CLI**
   ```bash
   # Windows: ดาวน์โหลดจาก https://devcenter.heroku.com/articles/heroku-cli
   ```

2. **Login to Heroku**
   ```bash
   heroku login
   ```

3. **Create Heroku App**
   ```bash
   heroku create youngdev-workshop
   ```

4. **Deploy**
   ```bash
   git push heroku main
   ```

5. **Open App**
   ```bash
   heroku open
   ```

---

### ตัวเลือกที่ 3: Deploy บน Netlify + Serverless Function

Netlify รองรับ PHP ผ่าน serverless functions

---

## โครงสร้าง Project สำหรับ Deploy

```
youngdev-workshop/
├── public/              # Root folder
│   ├── index.html       # Main page
│   └── index.php        # Router
├── api/
│   ├── courses.php      # API
│   ├── slides.php       # API
│   └── runner.php       # API
├── composer.json        # Dependencies
├── Procfile            # For Heroku
└── README.md
```

## Environment Variables

สร้างไฟล์ `.env` (ถ้าต้อง):

```
APP_ENV=production
DEBUG=false
```

## Testing Locally

หากใช้ XAMPP:

1. Copy folder ไปยัง `htdocs`
2. Start XAMPP
3. ไปที่ `http://localhost/youngdev-workshop/public`

หรือใช้ PHP Built-in Server (ถ้า PHP ติดตั้งได้):
```bash
php -S localhost:8000 -t public
```

## Troubleshooting

### 502 Bad Gateway
- ตรวจสอบ composer dependencies
- ลบ composer.lock และ reinstall

### Blank Page
- ตรวจสอบ error logs บน Railway/Heroku
- ใช้ PHP error_log()

### API Not Working
- ตรวจสอบ CORS headers
- ลองเรียก API ผ่าน curl

## Support

ติดต่อ YoungDev Team สำหรับความช่วยเหลือ
