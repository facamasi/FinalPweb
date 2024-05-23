# Documentación de la Aplicación Web

Esta aplicación web fue desarrollada como parte del proceso del curso de Programación Web. La aplicación permite gestionar un inventario de productos, categorías, proveedores y transacciones utilizando Laravel en el backend y Vue.js en el frontend.

## Proceso de Desarrollo

### 1. Inicialización del Proyecto

El proyecto se inicializó siguiendo las siguientes etapas:

- Configuración inicial de Laravel.
- Configuración inicial de Vue.js utilizando Vue CLI.
- Estructura de carpetas y archivos básicos.

### 2. Desarrollo del Backend (Laravel)

El desarrollo del backend incluyó las siguientes tareas:

- Configuración de la base de datos en MySQL.
- Creación de modelos Eloquent y migraciones para las tablas de la base de datos.
- Desarrollo de controladores API para manejar las operaciones CRUD.
- Configuración de las rutas API en el archivo `routes/api.php`.
- Implementación de validaciones y pruebas.

### 3. Desarrollo del Frontend (Vue.js)

El desarrollo del frontend incluyó las siguientes tareas:

- Configuración de componentes Vue para cada funcionalidad CRUD.
- Utilización de Axios para realizar peticiones HTTP al backend.
- Diseño de una interfaz limpia y clara utilizando Vue y CSS.

### 4. Versionado con Git

El proyecto se versionó utilizando Git siguiendo las siguientes prácticas:

- Se crearon dos repositorios en GitHub, uno para el backend y otro para el frontend.
- Se utilizaron ramas individuales para cada desarrollador.
- Se implementó una rama `test` para integrar y probar características antes de pasar a `main`.

### 5. Testing y Debugging

Se realizaron pruebas en la rama `test` y se resolvieron errores antes de fusionar los cambios en `main`.

## Ejecución del Proyecto

Para ejecutar la aplicación en tu entorno local, sigue estos pasos:

1. Clona los repositorios del backend y del frontend en tu máquina local.
2. Configura la base de datos en MySQL y ajusta la configuración en el archivo `.env`.
3. Ejecuta las migraciones del backend utilizando `php artisan migrate`.
4. Inicia el servidor de desarrollo de Laravel con `php artisan serve`.
5. Navega a la carpeta del frontend y ejecuta `npm install` para instalar las dependencias.
6. Inicia el servidor de desarrollo de Vue con `npm run serve`.
7. Accede a la aplicación en tu navegador web.

## Créditos

Este proyecto fue desarrollado por [Fabian Camilo Marriaga Sierra].

## Licencia

Este proyecto está licenciado bajo [Licencia]. Para más detalles, consulta el archivo `LICENSE.md`.
