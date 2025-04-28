CREATE TABLE Edades (
    id INT PRIMARY KEY AUTO_INCREMENT,
    edad INT NOT NULL UNIQUE
);
CREATE TABLE Colonias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_colonia VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE Especialidades (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_especialidad VARCHAR(100) UNIQUE NOT NULL
);
CREATE TABLE Generos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_genero VARCHAR(50) UNIQUE NOT NULL
);
CREATE TABLE Alumnos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    numero_control VARCHAR(10) UNIQUE NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido_paterno VARCHAR(50) NOT NULL,
    apellido_materno VARCHAR(50),
    id_edad INT NOT NULL,
    id_colonia INT NOT NULL,
    id_especialidad INT NOT NULL,
    id_genero INT NOT NULL,
    correo VARCHAR(100) UNIQUE,
    telefono VARCHAR(15),
    fecha_ingreso DATE NOT NULL,
    FOREIGN KEY (id_edad) REFERENCES Edades(id),
    FOREIGN KEY (id_colonia) REFERENCES Colonias(id),
    FOREIGN KEY (id_especialidad) REFERENCES Especialidades(id),
    FOREIGN KEY (id_genero) REFERENCES Generos(id)
);
