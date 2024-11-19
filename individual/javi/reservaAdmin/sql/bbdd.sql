-- Crear base de datos
CREATE DATABASE appLibros;

-- Usar la base de datos
USE appLibros;

-- Crear tabla Cursos
CREATE TABLE Cursos (
    idCurso TINYINT AUTO_INCREMENT NOT NULL, 
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT pk_idCurso PRIMARY KEY (idCurso)
);

-- Crear tabla Clases
CREATE TABLE Clases (
    idCurso TINYINT NOT NULL,
    letraClase CHAR(1) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    CONSTRAINT pk_clases PRIMARY KEY (idCurso, letraClase),
    CONSTRAINT fk_idCurso FOREIGN KEY (idCurso) REFERENCES Cursos(idCurso) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Crear tabla Editoriales
CREATE TABLE Editoriales (
    idEditorial SMALLINT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL UNIQUE,
    correo VARCHAR(50) NOT NULL UNIQUE,
    telefono CHAR(9) NOT NULL
);

-- Crear tabla Libros
CREATE TABLE Libros (
    idLibro TINYINT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL, -- Cambiado a VARCHAR para nombres más descriptivos
    precio DECIMAL(10, 2) NOT NULL, -- Usar DECIMAL para almacenar precios correctamente
    idEditorial SMALLINT NOT NULL,
    CONSTRAINT fk_idEditorial FOREIGN KEY (idEditorial) REFERENCES Editoriales(idEditorial) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Crear tabla Reservas
CREATE TABLE Reservas (
    idReserva INT AUTO_INCREMENT PRIMARY KEY,
    dni CHAR(9) NOT NULL,
    nombreTutor VARCHAR(100) NOT NULL,
    correo VARCHAR(40) NOT NULL,
    nombreAlumno VARCHAR(100) NOT NULL,
    documento VARCHAR(255) NOT NULL, -- Ampliado para admitir nombres de archivos más largos
    apta BOOLEAN NOT NULL,
    fecha_reserva DATE NOT NULL,
    coste_total SMALLINT NOT NULL,
    fecha_registro DATE NOT NULL,
    idCurso TINYINT NOT NULL,
    letraClase CHAR(1) NOT NULL,
    CONSTRAINT fk_reserva_curso FOREIGN KEY (idCurso, letraClase) REFERENCES Clases(idCurso, letraClase) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Crear tabla Administradores
CREATE TABLE Administradores (
    idAdmin TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    correo VARCHAR(50) NOT NULL UNIQUE,
    contrasenia CHAR(20) NOT NULL
);
