# Portfolio
This is my portfolio website. It uses [Twill](https://twillcms.com/), which is a CMS package for [Laravel](https://laravel.com/).

## Contribution
1. Install dependencies: `composer install && npm install`
2. Generate Laravel Keys: `php artisan key:generate`
3. Create the `.env` file with database credentials
4. Setup the database: `php artisan migrate` 
5. Install and start any webserver (e.g. [Laravel Valet](https://github.com/laravel/valet))
6. Optional: Use the domain [svenfinger.test](https://svenfinger.test) with SSL on the project path
7. Run [Vite](https://vitejs.dev/) with `vite dev`
8. After all changes are done, pre-build the assets for deployment: `vite build`
9. Push the changes to GitHub and deploy
