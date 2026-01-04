# 🚀 Laravel Bootstrap Landing Page

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap)](https://getbootstrap.com/)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php)](https://php.net/)
[![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](LICENSE)

> A modern, responsive landing page built with Laravel and Bootstrap 5. Perfect for startups, products, or services showcase.

## ✨ Features

- 🎨 **Modern Design** - Clean and professional Bootstrap 5 UI
- 📱 **Fully Responsive** - Works perfectly on all devices
- ⚡ **Fast Loading** - Optimized assets and lazy loading
- 📧 **Contact Form** - Built-in contact form with validation
- 🔒 **Secure** - Laravel security features and CSRF protection
- 🌐 **SEO Friendly** - Optimized meta tags and structure
- 📊 **Analytics Ready** - Easy Google Analytics integration
- 🎯 **Call-to-Action** - Strategic CTAs for conversion

## 🛠️ Tech Stack

### Backend
- **Framework**: Laravel 11.x
- **Language**: PHP 8.2+
- **Database**: MySQL / PostgreSQL / SQLite
- **Mail**: SMTP / Mailgun / SendGrid

### Frontend
- **CSS Framework**: Bootstrap 5.3
- **Icons**: Bootstrap Icons / Font Awesome
- **JavaScript**: Vanilla JS / jQuery (optional)
- **Animations**: AOS (Animate On Scroll)

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL >= 5.7 or PostgreSQL or SQLite

## 🚀 Installation

### 1. Clone Repository

```bash
git clone https://github.com/yourusername/laravel-landing-page.git
cd laravel-landing-page
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Configure Database

Edit `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Run Migrations

```bash
php artisan migrate
```

### 6. Build Assets

```bash
# Development
npm run dev

# Production
npm run build
```

### 7. Start Development Server

```bash
php artisan serve
```

Visit: [http://localhost:8000](http://localhost:8000)

## 📂 Project Structure

```
laravel-landing-page/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php      # Landing page controller
│   │   │   └── ContactController.php   # Contact form handler
│   │   └── Requests/
│   │       └── ContactRequest.php      # Contact form validation
│   └── Mail/
│       └── ContactMail.php             # Contact email
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php           # Main layout
│   │   ├── sections/
│   │   │   ├── hero.blade.php          # Hero section
│   │   │   ├── features.blade.php      # Features section
│   │   │   ├── about.blade.php         # About section
│   │   │   ├── services.blade.php      # Services section
│   │   │   ├── pricing.blade.php       # Pricing section
│   │   │   ├── testimonials.blade.php  # Testimonials
│   │   │   ├── faq.blade.php           # FAQ section
│   │   │   └── contact.blade.php       # Contact form
│   │   └── welcome.blade.php           # Main landing page
│   ├── css/
│   │   └── app.css                     # Custom styles
│   └── js/
│       └── app.js                      # Custom scripts
├── public/
│   ├── images/                         # Images
│   └── assets/                         # Static assets
├── routes/
│   └── web.php                         # Web routes
└── database/
    └── migrations/                     # Database migrations
```

## 🎨 Customization

### 1. Update Content

Edit the Blade files in `resources/views/sections/`:

```blade
<!-- resources/views/sections/hero.blade.php -->
<section class="hero">
    <h1>Your Amazing Headline</h1>
    <p>Your compelling subheadline</p>
    <a href="#contact" class="btn btn-primary">Get Started</a>
</section>
```

### 2. Customize Styles

Edit `resources/css/app.css`:

```css
:root {
    --primary-color: #007bff;
    --secondary-color: #6c757d;
    --accent-color: #28a745;
}

/* Your custom styles */
```

### 3. Configure Mail

Edit `.env` for email settings:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yoursite.com
MAIL_FROM_NAME="${APP_NAME}"
```

### 4. Add/Remove Sections

Edit `resources/views/welcome.blade.php`:

```blade
@extends('layouts.app')

@section('content')
    @include('sections.hero')
    @include('sections.features')
    @include('sections.about')
    {{-- Add or remove sections as needed --}}
@endsection
```

## 📧 Contact Form Setup

### 1. Create Contact Controller

```php
// app/Http/Controllers/ContactController.php
public function store(ContactRequest $request)
{
    // Send email
    Mail::to('admin@yoursite.com')->send(new ContactMail($request->validated()));
    
    return back()->with('success', 'Message sent successfully!');
}
```

### 2. Form Validation

```php
// app/Http/Requests/ContactRequest.php
public function rules()
{
    return [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ];
}
```

## 🎯 Key Sections

### 1. Hero Section
- Eye-catching headline
- Compelling call-to-action
- Background image/video support

### 2. Features Section
- Highlight key features
- Icon-based grid layout
- Responsive cards

### 3. About Section
- Company/product story
- Mission and vision
- Team showcase

### 4. Services Section
- Service offerings
- Detailed descriptions
- Pricing information (optional)

### 5. Testimonials
- Customer reviews
- Star ratings
- Carousel/grid layout

### 6. FAQ Section
- Common questions
- Accordion layout
- Easy to update

### 7. Contact Section
- Contact form
- Location map (Google Maps)
- Social media links

## 🌐 Deployment

### Shared Hosting

1. Build assets:
```bash
npm run build
```

2. Upload files via FTP/SFTP

3. Configure `.htaccess`:
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

### VPS/Cloud (DigitalOcean, AWS, etc.)

```bash
# Clone repository
git clone your-repo.git

# Install dependencies
composer install --optimize-autoloader --no-dev
npm install && npm run build

# Set permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Configure web server (Nginx/Apache)
# Set document root to /public
```

### Laravel Forge

1. Connect your server
2. Deploy from Git repository
3. Configure environment variables
4. Enable SSL certificate

### Vercel/Netlify (Static Export)

```bash
# Generate static pages
php artisan export

# Deploy to Vercel/Netlify
```

## 🔧 Configuration

### SEO Settings

Edit `resources/views/layouts/app.blade.php`:

```blade
<title>{{ $title ?? 'Your Site Title' }}</title>
<meta name="description" content="Your site description">
<meta name="keywords" content="your, keywords, here">

<!-- Open Graph -->
<meta property="og:title" content="Your Site Title">
<meta property="og:description" content="Your description">
<meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
```

### Analytics

Add to `resources/views/layouts/app.blade.php` before `</head>`:

```blade
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

## 🧪 Testing

```bash
# Run tests
php artisan test

# Run specific test
php artisan test --filter ContactTest
```

## 📚 Bootstrap Components Used

- Navbar (responsive)
- Cards
- Buttons
- Forms
- Accordion
- Carousel
- Modal
- Grid System
- Utilities

## 🎨 Color Schemes

Default Bootstrap colors can be customized in `resources/css/app.css`:

```css
/* Primary Brand Colors */
$primary: #0d6efd;
$secondary: #6c757d;
$success: #198754;
$info: #0dcaf0;
$warning: #ffc107;
$danger: #dc3545;
```

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 👤 Author

**Your Name**
- Website: [yourwebsite.com](https://yourwebsite.com)
- GitHub: [@yourusername](https://github.com/yourusername)
- Email: your.email@example.com

## 🙏 Acknowledgments

- [Laravel](https://laravel.com/) - The PHP Framework
- [Bootstrap](https://getbootstrap.com/) - CSS Framework
- [Bootstrap Icons](https://icons.getbootstrap.com/) - Icon Library
- [AOS](https://michalsnik.github.io/aos/) - Animate On Scroll Library

## 📞 Support

For support, email your.email@example.com or create an issue in the repository.

---

Built with ❤️ using Laravel and Bootstrap
