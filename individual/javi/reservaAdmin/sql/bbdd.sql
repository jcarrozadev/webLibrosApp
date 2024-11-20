-- Insertar datos en la tabla Administradores
INSERT INTO Administradores (nombre, correo, contrasenia)
VALUES 
('Administrador1', 'admin1@app.com', 'password1'),
('Administrador2', 'admin2@app.com', 'password2');

-- Insertar datos en la tabla Tutores
INSERT INTO Tutores (nombre, correo)
VALUES 
('Juan Pérez', 'juan.perez@gmail.com'),
('Ana García', 'ana.garcia@gmail.com'),
('Luis Martínez', 'luis.martinez@gmail.com');

-- Insertar datos en la tabla Editoriales
INSERT INTO Editoriales (nombre, correo, telefono) 
VALUES 
('Planeta', 'contacto@planeta.com', '912345678'),
('Santillana', 'info@santillana.com', '934567891'),
('Anaya', 'editorial@anaya.com', '987654321'),
('Alfaguara', 'soporte@alfaguara.com', '910111213');

-- Insertar datos en la tabla Cursos
INSERT INTO Cursos (nombre)
VALUES 
('1ESO'),
('2ESO'),
('3ESO'),
('4ESO'),
('SMR'),
('DAW');

-- Insertar datos en la tabla Clases
INSERT INTO Clases (idCurso, letraClase, nombre)
VALUES 
('1', 'A', '1ESO A'),
('2', 'B', '2ESO B'),
('3', 'A', '3ESO A'),
('4', 'B', '4ESO B'),
('5', '1', '1SMR'),
('5', '2', '2SMR'),
('6', '1', '1DAW'),
('6', '2', '2DAW');

-- Insertar datos en la tabla Asignaturas
INSERT INTO Asignaturas (nombre)
VALUES 
('Matemáticas'),
('Lengua Española'),
('Historia'),
('Ciencias Naturales'),
('FOL'),
('Inglés');

-- Insertar datos en la tabla clases_asignaturas
INSERT INTO clases_asignaturas (idCurso, letraClase, idAsignatura)
VALUES 
('1', 'A', 1),
('1', 'A', 2),
('2', 'B', 1),
('3', 'A', 3),
('4', 'B', 4),
('5', '1', 5),
('5', '2', 6),
('6', '1', 5),
('6', '2', 6);

-- Insertar datos en la tabla Libros
INSERT INTO Libros (ISBN, nombre, precio, idEditorial, idAsignatura) 
VALUES 
('9788498387087', 'El Principito', 19.99, 1, 1),
('9780451524935', '1984', 15.50, 2, 2),
('9780307474728', 'Cien Años de Soledad', 25.00, 1, 3),
('9788467037016', 'Don Quijote de la Mancha', 30.00, 3, 4);

-- Insertar datos en la tabla Libros_Cursos
INSERT INTO Libros_Cursos (ISBN, idCurso)
VALUES 
('9788498387087', '1'),
('9780451524935', '2'),
('9780307474728', '3'),
('9788467037016', '4');

-- Insertar datos en la tabla Reservas
INSERT INTO Reservas (dni, nombreTutor, correo, nombreAlumno, documento, apta, fecha_reserva, coste_total, fecha_registro, idCurso, letraClase) 
VALUES 
('12345678A', 'Juan Pérez', 'juan.perez@gmail.com', 'Carlos Pérez', 'reserva_curso1.pdf', TRUE, '2024-11-01', 120, '2024-10-15', 'CUR001', 'A'),
('87654321B', 'Ana García', 'ana.garcia@gmail.com', 'Lucía García', 'reserva_curso2.pdf', TRUE, '2024-11-05', 150, '2024-10-20', 'CUR002', 'B'),
('12348765C', 'Luis Martínez', 'luis.martinez@gmail.com', 'Miguel Martínez', 'reserva_curso3.pdf', FALSE, '2024-11-10', 200, 'CUR003', 'A');

-- Insertar datos en la tabla Reservas_Libros
INSERT INTO Reservas_Libros (ISBN, idReserva, entregado)
VALUES 
('9788498387087', 1, TRUE),
('9780451524935', 2, FALSE),
('9780307474728', 3, TRUE);
