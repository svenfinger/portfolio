<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://svenfinger.digital/assets/img/logo.svg">
  <source media="(prefers-color-scheme: light)" srcset="https://svenfinger.digital/assets/img/logo-inverted.svg">
  <img alt="Sven Finger Logo" src="https://svenfinger.digital/assets/img/logo.svg" width="120" height="48" style="max-width: 100%;">
</picture>

# About

This is my portfolio website. It uses [Twill](https://twillcms.com/), which is a CMS package for [Laravel](https://laravel.com/). Check it out at [svenfinger.digital](https://svenfinger.digital/).

## Installation
1. Install dependencies: `composer install && npm install`
2. Populate the `.env` file with details such as database credentials
3. Make sure an application key is set, otherwise create one: `php artisan key:generate`
4. Setup the database: `php artisan migrate`

### Development
If you are using macOS, I can recommend to use [Laravel Valet](https://github.com/laravel/valet) with [Vite](https://vitejs.dev/) via `vite dev` to preview changes to the portfolio locally with ease.

## License

Unauthorized copying, modification, distribution, and use of this software,
either in source or binary form, without express permission of the copyright
holder, is strictly prohibited.

@ 2023-2024 Sven Finger. All rights reserved.
