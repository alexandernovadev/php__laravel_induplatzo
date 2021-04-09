<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

Orden Primero carga las librerias el escuchador
 Todo lo que tiene que ver con PHP

 Boostrap es encedeer nuestro framework
 Ahora acepta cualquier solitud

 GENERACION de factories

crea 12 usuarios
    factory(App\User::class,12)->create()

Genera un controllador con model
    php artisan make:controller PageController --resource --model=Page

Crear una tabla
php artisan make:migration create_pages_table

Con modelo  
php artisan make:migration create_pages_table --create=users

Crear un archivo de validacion 
php artisan make:request PostRequest

Instalr la UI que ya tiene un UI para login
composer require laravel/ui --dev

Crear la UI de auth con boostrap
--*Tambien se puede con vue react

php artisan ui vue|boostrap|react --auth

Crear un modelo y ver ayuda
php artisan make:model -h

Crear una refresh de una migracion PERO OJO BOORRA TODO
php artisan migrate:refresh 
Haga una semillero
php artisan migrate:refresh --seed