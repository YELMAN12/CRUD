#Proyecto de Gestión de Base de Datos (CRUD)
Este proyecto es una aplicación web simple que demuestra las cuatro operaciones fundamentales de gestión de datos: Crear, Leer, Actualizar y Eliminar (CRUD). Utiliza formularios HTML para la interfaz de usuario y scripts PHP para procesar las solicitudes y interactuar con una base de datos MySQL.

##Estructura del Proyecto
El proyecto está organizado en los siguientes archivos clave:

###Archivos de Lógica (PHP)
CRUD.php: Contiene la configuración de conexión a la base de datos MySQL.

registro.php: Script para insertar nuevos registros.

seleccionar.php: Script para obtener y mostrar registros.

actualizar.php: Script para modificar registros existentes.

eliminar.php: Script para borrar registros.

###Archivos de Interfaz (HTML)
formulario_r.html: Formulario para registrar un nuevo producto.

formulario_a.html: Formulario para actualizar un producto.

formulario_e.html: Formulario para eliminar un producto.

formulario_s.html: Página para seleccionar y ver registros.

###Base de Datos
Base de datos.txt: Archivo de texto con el código SQL para crear la tabla de productos y datos de ejemplo.

##Requisitos
Un servidor web con soporte para PHP (como XAMPP, WAMP o MAMP).

Una base de datos MySQL.

##Pasos para la Configuración
###Configurar la Base de Datos:

Crea una base de datos en tu servidor MySQL.

Ejecuta el código SQL que se encuentra en el archivo Base de datos.txt.

###Configurar la Conexión en PHP:

Abre el archivo CRUD.php y actualiza las credenciales de conexión con los datos de tu servidor.

###Desplegar los Archivos:

Coloca todos los archivos del proyecto en la carpeta raíz de tu servidor web.

##Uso del Proyecto
Para utilizar el proyecto, abre tu navegador y accede a los siguientes archivos:

###Operación

####Crear

http://localhost/tu_carpeta/formulario_r.html

####Leer

http://localhost/tu_carpeta/formulario_s.html

####Actualizar

http://localhost/tu_carpeta/formulario_a.html

####Eliminar

http://localhost/tu_carpeta/formulario_e.html