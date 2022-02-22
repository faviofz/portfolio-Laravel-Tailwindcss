# <center>Portafolio Personal App</center>

Aplicación portafolio personal creado con Laravel, Fortify y Tailwindcss.

## Instalación

```
$ git clone https://github.com/faviofz/portfolio-Laravel-Tailwindcss.git
$ cd portfolio-Laravel-Tailwindcss
$ composer install

```

> Si deseas instalar las dependencias de desarrollo elimina `--no-dev` de la instruccion `composer install`

1. Crear el archivo .env: `cp .env.example .env`
2. Generar la clave: `php artisan key:generate`
3. Ejecutar las migraciones: `php artisan migrate`
4. Ejecutar los seeds para crear algunos registros en la base de datos: `php artisan db:seed`
5. Crear el enlace de la carpeta storage/app/public -> public/storage: `php artisan storage:link`
6. Inicia el servidor: `php artisan serve`