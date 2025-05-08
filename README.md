# Pharmacy Online with LARAVEL

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Tabla de Contenidos

- [Sobre este proyecto](#sobre-este-proyecto)
- [Instalación y Configuración](#instalación-y-configuración)
  - [Requisitos Previos](#requisitos-previos)
  - [Pasos para configurar el Proyecto](#pasos-para-configurar-el-proyecto)
- [API Endpoints](#api-endpoints)
- [Créditos y contacto](#créditos-y-contacto)



## Sobre este Proyecto

Este proyecto utiliza **Laravel 12 como framework para crear el Backend**. Para este proyecto se panteó implementarentar una arquitectura separada: **Laravel para el backend (con una API REST)** y **React para el frontend**. 

## Instalación y Configuración

### Requisitos Previos

- PHP (versión compatible con tu proyecto, generalmente 8.0+).
- Composer (para gestionar dependencias).
- MySQL (o XAMPP con servicio MySQL en puerto 3306).
- Node.js (si usas herramientas como Vite, TailwindCSS, o compilación de assets).
- Git (para clonar el repositorio).

### Pasos para configurar el Proyecto

1. **Clonar el Repositorio**

    ```bash
    git clone https://github.com/erickha16/TaskManager
    cd TaskManager
    ```

2. **Instalar Dependencias de PHP (Composer)**

    ```bash
    composer install
    ```

3. **Configurar el Entorno(Archivo .env)**

    - Copia el archivo .env.example y renómbralo a .env:

    ```bash
    cp .env.example .env
    ```

    - Edita el archivo .env con tus credenciales de MySQL (asegúrate de que coincidan con tu XAMPP):

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_base_de_datos #En mi caso es: farmacia
    DB_USERNAME=root  # Usuario por defecto de XAMPP
    DB_PASSWORD=      # Contraseña de XAMPP (normalmente vacía)
    ```

4. **Generar la Clave de la Aplicación**

    ```bash
    php artisan key:generate
    ```

    - El paso de generar la clave de la aplicación es fundamental en Laravel y sirve para lo siguiente:
    1. Cifrado de datos sensibles:
            - Laravel usa esta clave para encriptar cookies, sesiones, tokens CSRF y otros datos sensibles.
            - Sin ella, la seguridad de tu aplicación se compromete (ej: usuarios podrían manipular cookies).
    2. Funcionamiento correcto de características clave:
            - La autenticación (login, registros) depende de esta clave.
            - Si no está configurada, verás errores como:

        ```plaintext
            No application encryption key has been specified.
        ```

    3. Garantiza unicidad:
            - Cada proyecto Laravel debe tener una clave única y aleatoria (nunca reutilices una de otro proyecto).

5. **Crear la Base de Datos**

    - Abre phpMyAdmin (desde XAMPP) o usa MySQL Workbench.
    - Si usas XAMPP, debes asegurarte desde el panel de control que los sercisios de Apache y MySql estén corriendo correctamente y posteriomente, en el navegador, dirigirte a la ruta http://localhost/phpmyadmin/
    - Crea una base de datos con el nombre que especificaste en .env (ej: nombre_de_tu_base_de_datos).

6. **Ejecutar migraciones y Seeders**

    - Las migraciones crean la estructura de las tablas a a tu base de datos. 
    - Los seeders son para que tu tablas ya se creen con datos y puedas probar el sistema.

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

7. **Iniciar el Servidor**

    ```bash
    php artisan serve
    ```

    - El proyecto estará disponible en: http://localhost:8000.

### Notas importantes

- **XAMPP**: Asegúrate de que el servicio MySQL esté activo en XAMPP (puerto 3306).
- **Permisos**: Si hay errores de permisos en carpetas como storage o bootstrap/cache, ejecuta:

```bash
chmod -R 775 storage bootstrap/cache
```
## NOTA: EL PROYECTO ESTÁ AÚN EN DESARROLLO. POR LO QUE AÚN NO FUNCIONA COMO DEBERÍA.

## API Endpoints

Para probar los endpoints de la API se utilizó la extensión de VisualStudio Code llamada Thunderclient, la cual es similar a Postman.

### Login (POST)

Ruta: http://127.0.0.1:8000/api/login

Headers:

```bash
Authorization: Bearer tu-token-aqui
Accept: application/json
```

Body:

```json
{
  "email": "user01@example.com",
  "password": "user0001"
}
```

EL token generado es muy improtante para poder realizar otras peticiones, por lo que es importante almacenarlo y saber como ocuparlo desde el front para consumir la API.
Ejemplo de como almacenar el token con JavaScript:

```javascript
const handleLogin = async () => {
  const response = await fetch('http://tu-api.local/api/login', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ email, password })
  });
  
  const data = await response.json();
  
  // Guardar el token en localStorage
  localStorage.setItem('authToken', data.token);
  
  // También puedes guardarlo en el estado de tu aplicación
  setUser(data.user);
};
```

### User (GET)

Ruta: http://127.0.0.1:8000/api/user

Headers:

```bash
Authorization: Bearer tu-token-aqui
Accept: application/json
Authorization: Bearer tuToken
```

## Créditos y contacto

Proyecto desarrollado por: Erick Adrián Hernández Aburto
 ¿Interesado en colaborar o reportar un bug? Contáctame en:  

- [LindekIn](https://www.linkedin.com/in/erickha16/)
- [Github](https://github.com/erickha16)
- Email: **errickha@gmail.com** (para consultas formales).