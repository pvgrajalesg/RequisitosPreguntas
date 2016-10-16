# Requisitos
Repositorio de la APP de requisitos. IMPORTANTE: Para un uso entendible de la app, se usa MVC como patron de diseño.

## Inicio
composer update --> Actualizar dependencias<br>
composer install --> Instalar dependencias<br>
php artisan serve --> Iniciar el servidor<br>
php tinker --> Consola interactiva de php
##Laravel
NOTA: Recuerden cambiar el archivo .env.example por .env y modificar los datos para la conexion a la BD
php artisan make:migration X --> Crear migracion de nombre X<br>
php artisan make:controller X --> Crear controlador de nombre X
php artisan make:model X --> Crear modelo de nombre X<br>
php artisan migrate --> Realiza las migraciones<br>
php artisan migrate:rollback --> Devuelve las migraciones<br>
php artisan migrate:refresh --> Genera toda la BD<br>
