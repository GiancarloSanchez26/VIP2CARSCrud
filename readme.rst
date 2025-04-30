###################
PROYECTO VIP2CARS
###################

A realizar:
1. Elaborar el modelado de BBDD de un sistema de encuestas anónimas. 
2. Considerando que la empresa VIP2CARS es del rubro automotriz, elaborar 
un CRUD que registre los datos de los vehículos y sus contactos. Para ello 
puede usar el framework PHP de su preferencia el cual fue Codelgniter V.3 en XAMPP

*******************
# VIP2CARS - CRUD de Vehículos y Contactos (CodeIgniter 3.1.11)
*******************
## Requisitos
- PHP >= 7.2
- MySQL
- Apache (XAMPP, Laragon, etc.)

**************************
BD MySQL - phpA
**************************

Crea la base de datos vip2cars en phpMyAdmin y ejecuta sql

-- Tabla de vehículos
CREATE TABLE vehiculos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    placa VARCHAR(20) NOT NULL UNIQUE,
    marca VARCHAR(100) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    anio_fabricacion YEAR NOT NULL,
    nombre_cliente VARCHAR(100) NOT NULL,
    apellidos_cliente VARCHAR(100) NOT NULL,
    documento_cliente VARCHAR(20) NOT NULL,
    correo_cliente VARCHAR(100) NOT NULL,
    telefono_cliente VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de encuestas
CREATE TABLE encuestas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Preguntas de cada encuesta
CREATE TABLE preguntas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    encuesta_id INT NOT NULL,
    texto TEXT NOT NULL,
    tipo ENUM('texto', 'opcion_multiple', 'opcion_unica') NOT NULL,
    FOREIGN KEY (encuesta_id) REFERENCES encuestas(id) ON DELETE CASCADE
);

-- Opciones para preguntas tipo selección
CREATE TABLE opciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pregunta_id INT NOT NULL,
    texto VARCHAR(255) NOT NULL,
    FOREIGN KEY (pregunta_id) REFERENCES preguntas(id) ON DELETE CASCADE
);

-- Respuestas del usuario (anónimas)
CREATE TABLE respuestas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pregunta_id INT NOT NULL,
    opcion_id INT NULL,
    respuesta_texto TEXT,
    fecha_respuesta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (pregunta_id) REFERENCES preguntas(id) ON DELETE CASCADE,
    FOREIGN KEY (opcion_id) REFERENCES opciones(id) ON DELETE CASCADE
);



************
Installation
************
Link de descarga del framework: https://codeigniter.com/userguide3/installation/downloads.html 
la version CodeIgniter v3.1.11

Link de descarga del Visual Code: https://code.visualstudio.com/

*******
Pasos a seguir para ejecutar el proyecto
*******

1. Se dirige a la ruta de su XAMPP: C:\xampp\htdocs
2. Copia y descomprime el archivo descargado del framework
3. cambia de nombre a VIP2CARSCrud
4. Descarga los comprimido del proyecto del link: https://github.com/GiancarloSanchez26/VIP2CARSCrud.git
5. Copia los archivos en la carpeta VIP2CARSCrud
6. Dirijase al archivo  routers ubicado en la carpeta config y fijarse el siguiente comando si tiene el controlador correcto para ejecutar: $route['default_controller'] = 'Vehiculos';
7. Ejecutar el proyecto de manera local: http://localhost/VIP2CARSCrud/

*******
Pasos a seguir para ejecutar el proyecto
*******
La segunda opcion seria ejecutarlo mediante comando
1. crea una carptea en  C:\xampp\htdocs llamad a VIP2CARSCrud
2. ejecuta el gitbash y clona el proyecto el cual es: git clone https://github.com/GiancarloSanchez26/VIP2CARSCrud.git
3. abre el proyecto en visual code o su herramienta de preferencia
4. abre el link en el url y listo: http://localhost/VIP2CARSCrud/


SALUDOS.


