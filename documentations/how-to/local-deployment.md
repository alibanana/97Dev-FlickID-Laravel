## Description
Down below are steps that needs to be taken in order to deploy flick software web application on local computer.

## Step 1
Clone github project from [FlickID Github](https://github.com/alibanana/97Dev-FlickID-Laravel) to the *xampp>htdocs* folder.

## Step 2
Turn on Apache and MYSQL from XAMPP

## Step 3
Open terminal on the project folder

## Step 4
Create a new database in phpmyadmin

## Step 5
Rename .env.example to .env

## Step 6
Type:
 - composer update
 - php artisan key:generate

## Step 7
Set environment variable values:
 - DB_DATABASE = *NewlyCreatedDatabase*
 - DB_USERNAME = *mysqlUsername*
 - DB_PASSWORD = *mysqlPassword*

## Step 8
Open your terminal (CMD, gitbash, etc) and type:
 - php artisan migrate:fresh --seed
 - php artisan serve

## Step 9
Open this [link](http:://127.0.0.1:8000/) or 127.0.0.1:8000/ on your browser.
