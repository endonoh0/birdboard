# birdboard
---

Birdboard is an open source project management app based on Laracast's Build a Laravel app with TDD video series. 
Users can create, edit, and delete projects, and as well as invite other users to their project. 

# Screenshots

## New Project

![Screenshot of create a new project modal](https://github.com/endonoh0/birdboard/blob/master/docs/new-project.png)

## Project Page

![Screenshot of project page](https://github.com/endonoh0/birdboard/blob/master/docs/project-page.png)

## Dark Mode

![Screenshot of dark mode in project page](https://github.com/endonoh0/birdboard/blob/master/docs/dark-mode.png)

# Setup

> You must have PHP 7 installed as a prerequisite.

1. Clone this repository to your machine, and install all Composer dependencies.
```
git clone https://github.com/endonoh0/forum
cd forum && composer install
cp .env.example .env
php artisan key:generate
npm install && npm run dev
php artisan scout:import 'App\Thread'
```
2. Create a new database and reference its name and username/password within the project’s .env file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=
```

3. Migrate your database to create the required tables.
```
php artisan migrate:fresh --seed
```

4. Input any number of “channels” into the channels table in your database. Next, clear your server cache.
```
php artisan cache:clear
```

5. Boot up the server.
```
php artisan serve
```

Visit http://birdboard.test/ to create a new account and create your first project.

# Dependencies 

- PHP 7.x or above
- axios
- cross-env
- laravel-mix
- laravel-mix-tailwind
- resolve-url-loader
- sass
- sass-loader
- tailwindcss
- vue 2.5.x or above
- vue-template-compiler 2.5.x or above







