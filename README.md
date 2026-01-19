# Ofertas Pizzería Básico

Una aplicación web simple desarrollada en PHP para gestionar ofertas de una pizzería. Utiliza una arquitectura MVC básica para organizar el código.

## Descripción

Esta aplicación permite crear, editar, borrar y listar ofertas de productos de una pizzería. Incluye un formulario para agregar nuevas ofertas y un listado para visualizarlas.

## Instalación

1. Clona este repositorio en tu directorio de proyectos web (por ejemplo, `htdocs` de XAMPP):
   ```
   git clone https://github.com/tu-usuario/OfertasPizzeriaBasico.git
   ```

2. Importa el archivo `oferta.sql` a tu base de datos MySQL para crear la tabla necesaria.

3. Configura la conexión a la base de datos en el archivo `Model/PizzeriaDB.php` con tus credenciales de MySQL.

4. Asegúrate de que XAMPP esté ejecutándose y accede a la aplicación a través de `http://localhost/OfertasPizzeriaBasico/index.php`.

## Uso

- **Página principal**: Accede a `index.php` para ver el listado de ofertas.
- **Nueva oferta**: Usa el enlace para crear una nueva oferta.
- **Editar/Borrar**: Desde el listado, puedes editar o eliminar ofertas existentes.

## Estructura del Proyecto

```
OfertasPizzeriaBasico/
├── index.php                 # Punto de entrada principal
├── Controller/               # Controladores para manejar la lógica
│   ├── borrarOferta.php
│   ├── grabarOferta.php
│   ├── index.php
│   └── nuevaOferta.php
├── Model/                    # Modelos de datos
│   ├── Oferta.php
│   └── PizzeriaDB.php
├── View/                     # Vistas y plantillas
│   ├── formularioOferta.php
│   └── listado.php
├── css/                      # Estilos CSS
│   └── styles.css
├── images/                   # Imágenes del proyecto
└── oferta.sql                # Script SQL para la base de datos
```

## Tecnologías Utilizadas

- **PHP**: Lenguaje de programación del lado del servidor.
- **MySQL**: Sistema de gestión de base de datos.
- **HTML/CSS**: Para la estructura y estilos de la interfaz.
- **XAMPP**: Entorno de desarrollo local (Apache, MySQL, PHP).

## Autor

Antony Jampol Aquino Rumualdo
