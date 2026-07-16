# 2026 Homepage

This project is a simple personal homepage for
`https://www.andrewbielecki.com`.

The goal is to replace the existing site with a lightweight Laravel application
that presents a professional profile, selected personal projects, hobbies, and
contact links.

## Technology

- Laravel
- PHP
- Blade
- Tailwind CSS
- Vite
- PHPUnit / Pest

## Local Development

The site is intended to run in the local Docker environment at:

```text
http://bielecki.test
```

Frontend assets are built with Vite, and PHP code is tested with Laravel's HTTP
testing tools.

## Admin Area

The admin area is available at:

```text
http://bielecki.test/admin
```

Admin users log in at `/login` with email and password. There is no public
registration flow and no web password reset flow.

Create an admin user from the project directory inside the PHP container:

```bash
docker exec -it -w /var/www/html/2026-homepage-v2 2026-php85-fpm-command php artisan admin:create
```

Reset an admin password with:

```bash
docker exec -it -w /var/www/html/2026-homepage-v2 2026-php85-fpm-command php artisan admin:reset-password
```

### Image Uploads

Authenticated admins can manage uploaded images at:

```text
http://bielecki.test/admin/images
```

Uploaded images are stored on the public disk and processed into WebP sizes for
large, medium, and small displays. Reprocess an uploaded image manually with:

```bash
docker exec -it -w /var/www/html/2026-homepage-v2 2026-php85-fpm-command php artisan images:process {image_id}
```
