# SUSTAIN 2026 — Malaysia Sustainability & ESG Conference

SUSTAIN 2026 is an international conference, exhibition, and symposium focused on sustainability and ESG initiatives in Malaysia.

## Technology Stack

- **Framework**: Laravel 11.x / PHP 8.2+
- **Frontend / Bundler**: Vite, Vanilla CSS, JavaScript
- **Database**: MySQL / MariaDB (or SQLite for local testing)

## Getting Started

### 1. Prerequisites
- PHP >= 8.2 with OpenSSL, PDO, Mbstring, XML extensions
- Composer
- Node.js & npm

### 2. Installation

Clone the repository and install dependencies:

```bash
composer install
npm install
```

Copy the environment file and generate application key:

```bash
cp .env.example .env
php artisan key:generate
```

Run database migrations:

```bash
php artisan migrate
```

### 3. Development Server

Start Vite asset watcher and the Laravel dev server:

```bash
npm run dev
php artisan serve
```

### 4. Production Build

```bash
npm run build
```

Ensure the compiled assets in `public/build/` are deployed, and ensure no `public/hot` file is present in production environments.
