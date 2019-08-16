# 1 App 4 Frameworks Laravel + Vue
The Laravel + Vue version of the app

## Approach
A fairly simple Laravel application using MySQL database

## Usage
Run composer
`composer install`

Install node modules
`npm i`

Change the `.env.example` to `.env` with your database credentials.

Create the tables
`php artisan migrate`

Seed database with genres and some actors
`php artisan db:seed`