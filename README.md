 # Documentación de la API

Esta API proporciona puntos finales para gestionar datos de usuarios, específicamente para un panel de administración. Incluye autenticación utilizando Sanctum y operaciones CRUD para gestionar la información de los usuarios.

## Autenticación

Para acceder a los puntos finales relacionados con los usuarios, se requiere autenticación. Esta API utiliza Sanctum para la autenticación.
para url de api ejecutar php artisan serve, ejemplo de respuesta: [http://127.0.0.1:8000], como quedaria la url =>  http://127.0.0.1:8000/api

Endpoint:
GET /user
- Descripción: Obtiene la información del usuario autenticado.

## Gestión de Usuarios

### Listar Usuarios

Endpoint:
GET /usuarios
- Descripción: Obtiene una lista de todos los usuarios.

### Crear Usuario

Endpoint:
POST /usuario
- Descripción: Crea un nuevo usuario.

### Obtener Usuario

Endpoint:
GET /usuario/{id}
- Descripción: Obtiene información sobre un usuario específico.

### Actualizar Usuario

Endpoint:
PUT /usuario/{id}
- Descripción: Actualiza información sobre un usuario específico.

### Eliminar Usuario

Endpoint:
DELETE /usuario/{id}
- Descripción: Elimina un usuario específico.

## Controlador de Administrador

Esta clase de controlador proporciona métodos para manejar operaciones CRUD para la gestión de usuarios.

