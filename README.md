# Instrucciones

Bienvenido al mini proyecto del nivel 3. En este proyecto estaremos aplicando los conocimientos adquiridos a lo largo del nivel. Sigue las instrucciones de este archivo para completar el proyecto y ten en cuenta que estas mismas se tomarán en cuenta para la evaluación final del proyecto.

## Instrucciones generales

Debes crear un sistema de login. El diseño de la página web está terminado, por lo que tendrás que guiarte de lo que te indica el siguiente FIGMA: [Authentication App](https://www.figma.com/file/ZM0DPZbzK39o3rqwiaOPTD/Authentication-App?type=design&node-id=0-1&mode=design)

## Instrucciones del proyecto

Para este proyecto debes crear una plataforma que permita:

- Crear una nueva cuenta.
- Iniciar sesión con una cuenta existente
- Actualizar los datos de la cuenta con la que inicio sesión.
  - Name
  - Bio
  - Phone
  - Email
  - Password

## Carpeta `assets`

En este repositorio te hemos dejado una carpeta con algunos archivos que te servirán para el diseño. Puedes descargarlos y usarlos en tu proyecto.

## Flujo del programa

```
Acción: Registrarse -> Vista: Información Personal (Personal Info)

Acción: Iniciar sesión -> Vista: Información Personal (Personal Info)

Acción: Cerrar sesión -> Vista: Iniciar sesión

Acción: Botón "Edit" -> Vista: Editar información
```

## Consideraciones para la calificación

A continuación te presentaremos los puntos que se tomarán en cuenta para la calificacion del proyecto:

### Estructura y diseño

- El proyecto debe ser desarrollado con puro PHP (HTML incluido), CSS y JAVASCRIPT.
- El diseño debe ser lo más fiel posible al proporcionado en el archivo Figma.
  Los colores, fuentes, tamaños de letra, etc. deben ser los proporcionados en el archivo Figma.
- El proyecto debe ser estructurado de forma que sea fácil de entender y mantener (estructura de carpetas que represente órden).
- El archivo `index.php` debe estar en la carpeta raíz del proyecto.
- Debes proteger los archivos que muestran las vistas `Personal Info` y `Change Info` para que una persona que no ha iniciado sesión no pueda ingresar a estas vistas por medio de la URL sino hasta que inicie sesión.
- Procura manejar los errores de la mejor manera posible. Recuerda que tu aplicación debe ser muy amigable e intuitiva con el usuario.

### Base de datos

- La base de datos para tu proyecto debe llamarse `login_db`.
- Tu base de datos debe tener el collate: `utf8mb4_general_ci`.
- En tu repositorio en GitHub debe estar tu base de datos exportada y esta debe tener los datos de **2 cuentas**. Recuerda que sí o sí debe tener estos datos.

```
- Usuario 1:
    Email: admin@admin
    Contraseña: admin
    Photo: A tu elección
    Name: A tu elección
    Bio: A tu elección
    Phone: A tu elección

- Usuario 2:
    Email: test@test
    Contraseña: test
    Photo: A tu elección
    Name: A tu elección
    Bio: A tu elección
    Phone: A tu elección
```

- El archivo .sql en tu repositorio (base de datos exportada) debe tener el nombre que utilizaste originalmente para tu base de datos en tu programa (login_db).
- Debes guardar tu base de datos dentro de una carpeta que se llame `db_exportada`, en la carpeta raíz de tu proyecto.

```
/carpeta_raiz   --> Carpeta raíz de tu proyecto
    /db_exportada   --> Carpeta
        login_db.sql   --> Base de datos exportada (dentro)

    ... resto de carpetas y archivos
```

### Contraseñas

- Las contraseñas de cada cuenta deben estar hasheadas o encriptadas con `password_hash()`.
- Al iniciar sesión, se debe corroborar si la contraseña encriptada de la base de datos coincide con la que el usuario está intentando ingresar. Se hace con `password_verify()`.

### Repositorio

- El repositorio en GitHub debe tener más de un commit.
- El link del repositorio debe ser enviado para su revisión.
- Si existiesen requerimientos extras que se hayan realizado (de la lista de consideraciones opcionales o de tu propia iniciativa), debes dejar una nota en el archivo README.md de tu repositorio en GitHub que especifique uno a uno.

## Consideraciones OPCIONALES que suman puntos:

- El proyecto puede ser desarrollado con Bootstrap 5 u otra libreria CSS de tu preferencia (component UI, tailwind CSS, etc). Para los estilos que no se puedan lograr con alguna de estas librerias, puedes usar CSS puro.
- Hacer el modo oscuro de la aplicación.
- Cumplir con el diseño responsive que se proporcionan en el archivo Figma (para la vista mobile usa 375px, y para la vista desktop,1280px de ancho).
- Alguna otra funcionalidad que le agregues, siempre y cuando respetes el diseño y el resto de funcionalidades ya definidas, también sumarán puntos extras.

## Avances recientes:
- Actualizacion responsiva plantilla formulario Change_Info para escritorio y mobile.

![Change_Info_Desktop](https://github.com/doullorellana/MP_N3/blob/main/avances/Change_Info.png)
![Change_Info_Mobile](https://github.com/doullorellana/MP_N3/blob/main/avances/Change_Info_Mobile.png)
