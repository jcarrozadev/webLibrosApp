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

-- INSERT en Cursos
INSERT INTO Cursos (idCurso, nombre) VALUES
('1Inf', '1º Infantil'),
('2Inf', '2º Infantil'),
('1BachC', '1º Bachillerato Ciencias'),
('2BachC', '2º Bachillerato Ciencias'),
('1BachL', '1º Bachillerato Letras'),
('2BachL', '2º Bachillerato Letras'),
('1DAW', '1º Desarrollo de Aplicaciones Web'),
('2DAW', '2º Desarrollo de Aplicaciones Web'),
('1SMR', '1º Sistemas Microinformáticos y Redes'),
('2SMR', '2º Sistemas Microinformáticos y Redes'),
('1EVA', '1º Electromecánica de Vehiculos Automoviles'),
('2EVA', '2º Electromecánica de Vehiculos Automoviles'),
('1GA', '1º Gestión Administrativa'),
('2GA', '2º Gestión Administrativa');

-- INSERT en Clases
INSERT INTO Clases (idCurso, letraClase, nombre)
VALUES
('1Inf', 'A', '1º Infantil Clase A'),
('1Inf', 'B', '1º Infantil Clase B'),
('2Inf', 'A', '2º Infantil Clase A'),
('2Inf', 'B', '2º Infantil Clase B'),
('1BachC', 'A', '1º Bachillerato Ciencias'),
('2BachC', 'A', '2º Bachillerato Ciencias'),
('1BachL', 'A', '1º Bachillerato Letras'),
('2BachL', 'A', '2º Bachillerato Letras'),
('1DAW', 'A', '1º Desarrollo de Aplicaciones Web'),
('2DAW', 'A', '2º Desarrollo de Aplicaciones Web'),
('1SMR', 'A', '1º Sistemas Microinformáticos y Redes'),
('2SMR', 'A', '2º Sistemas Microinformáticos y Redes'),
('1EVA', 'A', '1º Electromecánica de Vehiculos Automoviles'),
('2EVA', 'A', '2º Electromecánica de Vehiculos Automoviles'),
('1GA', 'A', '1º Gestión Administrativa'),
('2GA', 'A', '2º Gestión Administrativa');


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
('1Inf', 'A', 1),
('1Inf', 'A', 2),
('2Inf', 'B', 1),
('1BachC', 'A', 3),
('2BachC', 'A', 4),
('1DAW', 'A', 5),
('2DAW', 'A', 6),
('1SMR', 'A', 5),
('2SMR', 'A', 6);

-- Insertar datos en la tabla Libros
INSERT INTO Libros (ISBN, nombre, precio, idEditorial, idAsignatura) 
VALUES 
-- Libros existentes
('9788498387087', 'El Principito', 19.99, 1, 1), -- Matemáticas
('9780451524935', '1984', 15.50, 2, 2),         -- Lengua Española
('9780307474728', 'Cien Años de Soledad', 25.00, 1, 3), -- Historia
('9788467037016', 'Don Quijote de la Mancha', 30.00, 3, 4), -- Ciencias Naturales

-- Nuevos libros
('9788448610555', 'Manual de FOL', 35.00, 4, 5),        -- Formación y Orientación Laboral
('9780194609957', 'English for Everyone', 29.99, 2, 6), -- Inglés
('9788428330002', 'Emprender es fácil', 40.00, 3, 5),   -- Iniciativa Emprendedora
('9788428349905', 'StartUp Manual', 45.00, 1, 5);       -- Iniciativa Emprendedora


-- Insertar datos en la tabla Reservas
INSERT INTO Reservas (dni, nombreTutor, correo, nombreAlumno, documento, apta, fecha_reserva, coste_total, fecha_registro, idCurso, letraClase) 
VALUES 
('12345678A', 'Juan Pérez', 'juan.perez@gmail.com', 'Carlos Pérez', 'reserva_1Inf_A.pdf', TRUE, '2024-11-01', 120.00, '2024-10-15', '1Inf', 'A'),
('87654321B', 'Ana García', 'ana.garcia@gmail.com', 'Lucía García', 'reserva_2Inf_B.pdf', TRUE, '2024-11-05', 150.00, '2024-10-20', '2Inf', 'B'),
('12348765C', 'Luis Martínez', 'luis.martinez@gmail.com', 'Miguel Martínez', 'reserva_1BachC_A.pdf', FALSE, '2024-11-10', 200.00, '2024-10-25', '1BachC', 'A');

-- Insertar datos en la tabla Reservas_Libros
INSERT INTO Reservas_Libros (ISBN, idReserva, entregado)
VALUES 
('9788498387087', 1, TRUE),
('9780451524935', 2, FALSE),
('9780307474728', 3, TRUE);