# Paso 1: Crear un nuevo proyecto Laravel
composer create-project --prefer-dist laravel/laravel tarea-api

# Paso 2: Acceder al directorio del proyecto
cd tarea-api

# Paso 3: Instalar dependencias
composer install

# Paso 4: Editar el archivo .env para configurar la base de datos
# Asegúrate de crear una base de datos y configurar las credenciales
cp .env.example .env
# Abre .env con tu editor de texto y configura DB_DATABASE, DB_USERNAME y DB_PASSWORD

# Paso 5: Crear migración, modelo y controlador
php artisan make:model Tarea -mcr

# Paso 6: Editar la migración (database/migrations/xxxx_xx_xx_create_tareas_table.php)
# Define la estructura de la tabla 'tareas'

# Paso 7: Ejecutar migraciones
php artisan migrate

# Paso 8: Configurar el controlador (app/Http/Controllers/TareaController.php)
# Agregar el middleware 'auth' en el constructor o en los métodos según sea necesario

# Paso 9: Configurar las rutas (routes/api.php)
# Utiliza Route::middleware(['auth']) para proteger las rutas por autenticación

# Paso 10: Ejecutar el servidor
php artisan serve

# Mensaje final
echo "¡Proyecto configurado y servidor en ejecución! Visita http://127.0.0.1:8000"