USE appLibros;

-- Insertar datos en la tabla Editoriales
INSERT INTO Editoriales (nombre, correo, telefono) 
VALUES 
('Planeta', 'contacto@planeta.com', '912345678'),
('Santillana', 'info@santillana.com', '934567891'),
('Anaya', 'editorial@anaya.com', '987654321'),
('Alfaguara', 'soporte@alfaguara.com', '910111213');

-- Insertar datos en la tabla Libros
INSERT INTO Libros (nombre, precio, idEditorial) 
VALUES 
('El Principito', 19.99, 1),
('1984', 15.50, 2),
('Cien Años de Soledad', 25.00, 1),
('Don Quijote de la Mancha', 30.00, 3);

-- Insertar datos en la tabla Reservas
INSERT INTO Reservas (dni, nombreTutor, correo, nombreAlumno, documento, apta, fecha_reserva, coste_total, fecha_registro, idCurso, letraClase) 
VALUES 
('12345678A', 'Juan Pérez', 'juanperez@gmail.com', 'Carlos Pérez', 'reserva_curso1.pdf', TRUE, '2024-11-01', 120, '2024-10-15', 1, 'A'),
('87654321B', 'Ana García', 'ana.garcia@gmail.com', 'Lucía García', 'reserva_curso2.pdf', TRUE, '2024-11-05', 150, '2024-10-20', 2, 'B'),
('12348765C', 'Luis Martínez', 'luis.martinez@gmail.com', 'Miguel Martínez', 'reserva_curso3.pdf', FALSE, '2024-11-10', 200, '2024-10-25', 6, '1');
