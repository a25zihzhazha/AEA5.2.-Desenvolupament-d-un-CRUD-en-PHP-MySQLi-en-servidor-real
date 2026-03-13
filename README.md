Este ejercicio he realizar las cuatro operaciones fundamentales en una 
base de datos utilizando PHP y  MySQLi.

Al terminar, veremos de forma práctica cómo insertar, leer, modificar y borrar información. 
Y también incorpora Bootstrap como framework para añadir un poco de estilo a la pagina.
de diseño.


Estructura de la base de dades:

CREATE TABLE videojuegos(
    id bigint unsigned not null  primary key auto_increment,
    nombre varchar(255),
    descripcion varchar(255)
);