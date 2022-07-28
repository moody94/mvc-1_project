
[![TravisCI](https://app.travis-ci.com/moody94/mvc-1_project.svg?branch=main)](https://app.travis-ci.com/moody94/mvc-1_project)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/moody94/mvc-1_project/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/moody94/mvc-1_project/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/moody94/mvc-1_project/badges/build.png?b=main)](https://scrutinizer-ci.com/g/moody94/mvc-1_project/build-status/main)
[![CircleCI](https://circleci.com/gh/moody94/mvc-1_project/tree/main.svg?style=svg)](https://circleci.com/gh/moody94/mvc-1_project/tree/main)




# TODO List



![Landing page](https://cdn-icons-png.flaticon.com/512/1441/1441035.png)

After downloading the application from GitHub on your computer you need to run composer and npm to install the packages that you need in this app by running the commands

## Installation

`composer install`
`npm install`



The next step is creating your MySQL database and that the database information that you need to this app:
`DB_CONNECTION=mysql`
`DB_HOST=127.0.0.1`
`DB_PORT=3306`
`DB_DATABASE=laravel`
`DB_USERNAME=root`
`DB_PASSWORD=root`



Now you have a database but you need the tables that you use in the application of the database do you need to num this command to create the tables on the database

` php artisan migrate `


This Todo app is an application that help people to create notes and save the thinks that they need to remember


to use this app you need an account so if you don't have an account you can create one by clicking on the register button and start full the information name, mail and password but if already have one you can log in normally with your mail and password after moving to the login page.

after that, you will be on the page where you can create a new note by filling in the information that you need to do to the Todo item (name, date and the description for the note) after that you click on Submit to save the info in the database,
in the navbar, there is a button called (Notes) that will take you to a page have all the notes that you created before and for every one of those notes you can remove it or click on the Edit button to update the notes information 






















<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
