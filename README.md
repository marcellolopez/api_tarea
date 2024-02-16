# Tarea API - Laravel

Este proyecto Laravel proporciona una API simple para la gestión de tareas, permitiendo operaciones CRUD básicas.

## Funcionalidades Principales

1. **Creación de Tareas:** Permite agregar nuevas tareas.
2. **Listado de Tareas:** Muestra todas las tareas disponibles.
3. **Actualización de Tareas:** Permite modificar detalles de una tarea existente.
4. **Eliminación de Tareas:** Elimina tareas de la lista.

## Requisitos del Sistema

- PHP (7.4 o superior)
- Composer
- MySQL

## Cómo Funciona

1. **Clonar el Repositorio:**
   - `git clone <URL_DEL_REPOSITORIO>`
   - `cd tarea-api`

2. **Instalar Dependencias:**
   - `composer install`

3. **Configurar Base de Datos:**
   - Copiar `.env.example` a `.env` y configurar las credenciales de la base de datos.

4. **Ejecutar Migraciones:**
   - `php artisan migrate`

5. **Configurar Controlador y Rutas:**
   - Editar `app/Http/Controllers/TareaController.php` y `routes/api.php` según necesidades.

6. **Autenticación de Usuarios:**
   - Opcional - Configurar middleware 'auth' para proteger rutas.

7. **Ejecutar el Servidor:**
   - `php artisan serve`
   - Visitar `http://127.0.0.1:8000` en el navegador o usar herramientas como Postman.

## Contribuciones

Las contribuciones son bienvenidas. Si encuentras problemas o tienes sugerencias, abre un problema o envía una solicitud de extracción.

## Licencia

Este proyecto está bajo la Licencia MIT - consulta el archivo LICENSE para más detalles.
