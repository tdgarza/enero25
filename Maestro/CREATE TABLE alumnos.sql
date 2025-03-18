CREATE TABLE alumnos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    numero_control VARCHAR(15) UNIQUE NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido_paterno VARCHAR(50) NOT NULL,
    apellido_materno VARCHAR(50),
    id_edad INT NOT NULL,
    id_colonia INT NOT NULL,
    id_especialidad INT NOT NULL,
    id_genero INT NOT NULL,
    correo VARCHAR (50) UNIQUE,
    telefono VARCHAR (20),
    fecha_ingreso DATE NOT NULL,
    FOREIGN KEY (id_edad) REFERENCES edades(id),
    FOREIGN KEY (id_colonia) REFERENCES colonias(id),
    FOREIGN KEY (id_especialidad) REFERENCES especialidades(id),
    FOREIGN KEY (id_genero) REFERENCES generos(id)
    );
CREATE TABLE edades(
    id INT PRIMARY KEY AUTO_INCREMENT,
    edad INT NOT NULL UNIQUE
);
CREATE TABLE colonias(
    id INT PRIMARY KEY AUTO_INCREMENT,
    colonias VARCHAR(50) NOT NULL UNIQUE
    );
CREATE TABLE especialidades(
    id INT PRIMARY KEY AUTO_INCREMENT,
    especialidades VARCHAR(50) NOT NULL UNIQUE
    );
CREATE TABLE generos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    generos VARCHAR(50) NOT NULL UNIQUE
    );

    INSERT INTO edades (edad) VALUES (14), (15),(16), (17), (18), (19),(20);
INSERT INTO colonias (colonia) VALUES ('Granjas'), ('San Valentin'),('Jarachina Norte'),('Jarachina Sur'),
('Fresnos'), ('Esfuerzo'), ('Bugambilias'),('Puerta Sur'), ('Loma Real'), ('Villas de Roble'),('Ventura'),
('Integracion'), ('Cumbres'), ('Juarez'), ('Puerta del Sol'), ('Puerta Grande'), ('Nuevo Mexico'), ('Vista Hermosa'),
('Villa Florida');
INSERT INTO especialidades (especialidad)