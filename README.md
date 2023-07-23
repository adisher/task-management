# Task Management Application

This is a task management application built using Laravel, Vue.js, Vuex and Axios.

## Prerequisites

Make sure you have installed all of the following prerequisites on your development machine:

- PHP >= 7.4
- Composer - [Download & Install Composer](https://getcomposer.org/download/)
- Node.js & npm - [Download & Install Node.js](https://nodejs.org/en/download/) and npm comes with it.
- A database (MySQL, SQLite, PostgreSQL)

## Quick Install

Once you've downloaded the repository and installed all the prerequisites, you're just a few steps away from starting the Task Management application. The installation process is straightforward. Here are the steps:

1. Clone the repository:
    ```sh
    git clone https://github.com/adisher/task-management.git
    ```
2. Change directory to the app's directory:
    ```sh
    cd task-management
    ```
3. Install the dependencies with composer:
    ```sh
    composer install
    ```
4. Install the dependencies with npm:
    ```sh
    npm install
    ```
5. Copy `.env.example` to create `.env`:
    ```sh
    cp .env.example .env
    ```
6. Generate an application key:
    ```sh
    php artisan key:generate
    ```
7. Create an empty database and update `.env` file with your database credentials.
8. Run the migrations to create the tables in your database:
    ```sh
    php artisan migrate
    ```
9. Run the server:
    ```sh
    php artisan serve
    ```

## Running the Tests

Unit tests can be run by executing the following command:

```sh
./vendor/bin/phpunit
```
## Running the Vue.js Frontend
 ```sh
    cd frontend
    ```
Install the dependencies with npm:
```sh
    npm install
    ```
To start the development server, run:
```sh
    npm run serve
    ```
