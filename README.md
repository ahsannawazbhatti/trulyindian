# Truly Indian

Truly Indian is the Laravel website for the Truly Indian restaurant in Trollhättan, Sweden. It presents restaurant information, photo galleries, catering details, and the restaurant's main, lunch, and takeaway menus. Visitors can also send a message through the contact form.

## Features

- Restaurant home, about, gallery, and catering pages
- Main, lunch, and takeaway menus backed by the database
- Menu data and restaurant details included in the application
- Downloadable menu PDF
- Contact form protected by Google reCAPTCHA and delivered through Laravel Mail
- Swedish-language page content and routes

## Requirements

- PHP 8.2 or later, with the extensions required by Laravel
- Composer
- MySQL or a compatible MariaDB server
- Node.js and npm

The commands below assume you are in the Laravel application directory (`htdocs/`). In this checkout, the sample environment file is one directory above it at `../.env.example`.

## Installation

1. **Install PHP dependencies and configure the environment.**

   ```bash
   composer install
   cp ../.env.example .env
   php artisan key:generate
   ```

   If you already have a local `.env`, keep it and update its values instead of copying over it.

2. **Create a MySQL database.** For example, from a MySQL client:

   ```sql
   CREATE DATABASE truly_indian
     CHARACTER SET utf8mb4
     COLLATE utf8mb4_unicode_ci;
   ```

   Update the database settings in `.env` to match your local database server:

   ```dotenv
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=truly_indian
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

3. **Create and seed the application tables.**

   ```bash
   php artisan migrate --seed
   ```

   The seeders populate the main, lunch, and takeaway menu categories and items, as well as the spice categories.

4. **Install and build the frontend assets.**

   ```bash
   npm ci
   npm run build
   ```

5. **Start the local web server.**

   ```bash
   php artisan serve
   ```

   Open the URL printed by Artisan (usually `http://127.0.0.1:8000`).

### Development mode

After completing the installation and database setup, you can run the app, queue listener, and Vite development server together:

```bash
composer run dev
```

This command keeps running in the terminal while you work. Stop it with `Ctrl+C`. To run only the frontend hot-reload server, use `npm run dev` in a separate terminal while `php artisan serve` is running.

## Configuration

### Contact form

The contact form requires Google reCAPTCHA keys and an administrator email address. Add these values to `.env`:

```dotenv
RECAPTCHA_SITE_KEY=your_recaptcha_site_key
RECAPTCHA_SECRET_KEY=your_recaptcha_secret_key
ADMIN_EMAIL=recipient@example.com
```

Configure Laravel Mail in `.env` as well. The sample configuration uses `MAIL_MAILER=log`, which writes messages to the application log instead of delivering them. For actual delivery, configure an SMTP mailer (or another supported Laravel mail transport) and use an appropriate `MAIL_FROM_ADDRESS`.

### Database-backed menus

Menu categories and items are stored in the `main_menu`, `lunch`, and `take_away` tables and their corresponding category tables. The seeders provide the initial menu data; there is no administrative dashboard in the application. To change menu content, update the corresponding database records or seeder files and apply the change using your normal database workflow.

## Using the website

| Page | URL |
| --- | --- |
| Home | `/` |
| About us | `/om-oss` |
| Main menu | `/alla-cart-meny` |
| Lunch menu | `/lunch-meny` |
| Takeaway menu | `/take-away-meny` |
| Gallery | `/galleri` |
| Catering | `/catering` |
| Contact | `/kontakta-oss` |
| Download menu PDF | `/download-pdf-menu` |

Visitors can browse the information and menus without an account. To send a message, open the contact page, complete the form, and pass the reCAPTCHA check. Successful submissions are sent to the configured `ADMIN_EMAIL`.

## Tests

Run the Laravel test suite with:

```bash
php artisan test
```

## Production notes

- Point the web server document root at `public/`, not the Laravel application directory.
- Set `APP_ENV=production` and `APP_DEBUG=false`, use a strong application key, and keep credentials in the server environment rather than source control.
- Build frontend assets with `npm run build` and make sure the generated `public/build` directory is deployed.
- Configure a real mail transport, `ADMIN_EMAIL`, and production reCAPTCHA keys before enabling contact submissions.
