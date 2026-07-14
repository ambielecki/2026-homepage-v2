# 2026 Homepage
This will serve as my homepage at https://www.andrewbielecki.com and replace the existing application.

## Basics 
- Simple Laravel 13 application running on PHP 8.5
- Will use Tailwind CSS for styling and Blade for templating. 
- The only public facing view will be the homepage
- There will be an admin area to manage content on the homepage. It will be behind simple session based auth
- The admin will be able to login through a simple form
- There will be no registration process for the admin area
- Admin users will be created through an artisan command
- Admin users will be stored in a database table
- We will include PHPUnit tests where appropriate
- Since this is not a a SPA, we will use Laravel's built in http testing for the frontend
- All code should be formatted to PER Coding standards
- The local site should be accessible at http://bielecki.test

## Tool Calls
- The application is running in docker in the 2026-php85-fpm-command container, 
necessary PHP commands should be run in the docker container by using `docker exec -it 2026-php85-fpm-command`
- Use node installed via nvm, use the 26.4.0 version

## Other
- Create a committ message after any changes
- Update the README.md after major functionality changes
