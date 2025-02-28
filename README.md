<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Pasos para incluirlo al proyecto final



//estos son los archivos creados los que van en el proyecto principal
//si no existe el folder se crea

app/Http/Controllers/WarrantyController
app/Models/Warranty.php
database/migrations/2025_02_28_000000_create_warranties_table.php
resources/views/layouts/app.blade.php
resource/views/warranties/create.blade.php
resource/views/warranties/edit.blade.php
resource/views/warranties/index.blade.php
resource/views/warranties/show.blade.php

routes/web.php

/////////////////////////////////////////////
//////////////////////////////////////////////////////
nota: hacer las migraciones: php artisan migrate
 
nota: estoy usando xampp y mysql     
