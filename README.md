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
3. Ediar el archivo .env con los parametros de tu gestor de base de datos: 

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=
```
4. Ejecutar las migraciones: `php artisan migrate`
5. Ejecutar los seeds para crear algunos registros en la base de datos: `php artisan db:seed`
6. Crear el enlace de la carpeta storage/app/public -> public/storage: `php artisan storage:link`
7. Inicia el servidor: `php artisan serve`
8. Visita en el navegador: `http://127.0.0.1:8000/`

## Licencia

Este proyecto está bajo la Licencia MIT - mira el archivo LICENSE.md para detalles