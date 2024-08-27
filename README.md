# Sistema Administrativo de Noticias

## Descripción
El "Sistema Administrativo de Noticias" es una aplicación web diseñada para gestionar noticias de manera eficiente. Permite a los administradores crear, editar, y eliminar noticias, así como gestionar categorías y usuarios.

## Características
- Administración de noticias (crear, editar, eliminar)
- Gestión de categorías de noticias
- Gestión de usuarios (roles de administrador y editor)
- Sistema de autenticación seguro
- Interfaz de usuario amigable y receptiva

## Tecnologías Utilizadas
- PHP 7.4+
- MySQL
- HTML5, CSS3
- Bootstrap 4
- JavaScript (jQuery)

## Requisitos del Sistema
- Servidor web (Apache recomendado)
- PHP 7.4 o superior
- MySQL 5.7 o superior

## Instalación

Sigue estos pasos para instalar y configurar el proyecto en tu entorno local:

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/FaniCasco/Sistema-administrativo-de-noticias.git

2. **Navega a la carpeta del proyecto:**
cd Sistema-administrativo-de-noticias

3. **Configura la base de datos:**
Crea una base de datos MySQL en tu servidor local.
Importa el archivo db.sql (si está disponible) para configurar las tablas necesarias

mysql -u [usuario] -p [nombre_de_base_de_datos] < db.sql

4. **Configura el archivo config.php:**

Abre el archivo config.php en un editor de texto.
Modifica las credenciales de la base de datos (nombre de la base de datos, usuario, contraseña) para que coincidan con tu configuración local:

$host = 'localhost';
$db = 'nombre_de_base_de_datos';
$user = 'usuario';
$pass = 'contraseña';

5. **Ejecuta el servidor:**

Si estás utilizando XAMPP o WAMP, mueve el proyecto a la carpeta htdocs o www respectivamente.
Inicia Apache y MySQL desde el panel de control de XAMPP o WAMP.
Accede al sistema en tu navegador:

http://localhost/Sistema-administrativo-de-noticias

6. **Prueba la instalación:**

Navega por el sistema para asegurarte de que todo funciona correctamente. Si encuentras algún problema, revisa los logs o verifica los pasos anteriores.


### Puntos Clave:

- **Clonación:** Se explica cómo clonar el repositorio.
- **Configuración de la base de datos:** Instrucciones para crear la base de datos y configurar el archivo `config.php`.
- **Ejecución del servidor:** Guía para mover el proyecto a la carpeta correcta y ejecutar el servidor local.
- **Verificación:** Se incluye un paso final para asegurar que todo esté funcionando correctamente.


## Uso
1. **Inicio de Sesión:** Accede al sistema con las credenciales de administrador.
2. **Administración de Noticias:** Ve al panel de administración para gestionar las noticias.

## Contribución
¡Contribuciones son bienvenidas! Por favor, sigue estos pasos:
1. Haz un fork del proyecto.
2. Crea una nueva rama para tu funcionalidad (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz un commit (`git commit -m 'Añadir nueva funcionalidad'`).
4. Haz push a tu rama (`git push origin feature/nueva-funcionalidad`).
5. Abre un Pull Request.

## Contacto
Desarrollado por [Fani Casco](mailto:fanymar@live.com).


