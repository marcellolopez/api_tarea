Tarea API - Laravel
Este proyecto Laravel proporciona una API simple para la gestión de tareas, permitiendo operaciones CRUD básicas.

Funcionalidades Principales
Creación de Tareas: Permite agregar nuevas tareas.
Listado de Tareas: Muestra todas las tareas disponibles.
Actualización de Tareas: Permite modificar detalles de una tarea existente.
Eliminación de Tareas: Elimina tareas de la lista.
Requisitos del Sistema
PHP (7.4 o superior)
Composer
MySQL
Cómo Funciona
Clonar el Repositorio:

git clone <URL_DEL_REPOSITORIO>
cd tarea-api
Instalar Dependencias:

composer install
Configurar Base de Datos:

Copiar .env.example a .env y configurar las credenciales de la base de datos.
Ejecutar Migraciones:

php artisan migrate
Configurar Controlador y Rutas:

Editar app/Http/Controllers/TareaController.php y routes/api.php según necesidades.
Autenticación de Usuarios:

Opcional - Configurar middleware 'auth' para proteger rutas.
Ejecutar el Servidor Laravel:

php artisan serve
Visitar http://127.0.0.1:8000 en el navegador o usar herramientas como Postman.
Iniciar Docker (Opcional):

Si prefieres utilizar Docker para ejecutar la aplicación, sigue estos pasos:
Asegúrate de tener Docker y Docker Compose instalados.
Ejecuta docker-compose up -d --build para construir y levantar los contenedores.
La aplicación estará disponible en http://localhost. Asegúrate de ajustar las configuraciones en docker-compose.yml según sea necesario.
Contribuciones
Las contribuciones son bienvenidas. Si encuentras problemas o tienes sugerencias, abre un problema o envía una solicitud de extracción.

Licencia
Este proyecto está bajo la Licencia MIT - consulta el archivo LICENSE para más detalles.
