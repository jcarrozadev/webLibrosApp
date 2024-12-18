<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservar Administrador | Libros</title>
        <!-- ICONO -->
        <link rel="shortcut icon" href="../../assets/img/favicon.svg" type="image/x-icon">
        <!-- IMPORT -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="../../assets/css/import.css">
        <link rel="stylesheet" href="../../assets/css/header.css">
        <link rel="stylesheet" href="../../assets/css/footer.css">
        <link rel="stylesheet" href="../../assets/css/admin.css">
        <link rel="stylesheet" href="../assets/css/2reservaAdmin.css">
    </head>
    <body>

    <?php include '../php/vistas/header.php'; ?>
    <p id="resultado"></p>
    <main>
        <h1>Reserva de Libros</h1>
        <div class="acciones">
            <button class="btn-anadir" onclick="toggleModal()">+</button>    
            <button class="btn-filtrar">Filtrar</button>
            <button class="btn-ordenar">Ordenar</button>
            <button class="btn-pedido">Realizar pedido</button>
        </div>
        <table class="tabla-reservas">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Curso</th>
                    <th>Clase</th>
                    <th>Libros</th>
                    <th>Doc</th>
                    <th>Fecha reserva</th>
                    <th>Apto</th>
                    <th>Notificar</th>
                    <th>Gestionar</th>
                    <th>Pedido</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ángel</td>
                    <td>Guiberteau</td>
                    <td>ejemplo@mail.com</td>
                    <td>DAW</td>
                    <td>2º DAW</td>
                    <td>
                        <select>
                            <option selected disabled hidden>Libros</option>
                            <option value="libro1">Libro 1</option>
                            <option value="libro2">Libro 2</option>
                            <option value="libro3">Libro 3</option>
                        </select>
                    </td>
                    <td><button class="btn-doc">Ver</button></td>
                    <td>21/12/99</td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn-notificar">Notificar</button></td>
                    <td><button class="btn-gestionar">Gestionar</button></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Ángel</td>
                    <td>Guiberteau</td>
                    <td>ejemplo@mail.com</td>
                    <td>DAW</td>
                    <td>2º DAW</td>
                    <td>
                        <select>
                            <option selected disabled hidden>Libros</option>
                            <option value="libro1">Libro 1</option>
                            <option value="libro2">Libro 2</option>
                            <option value="libro3">Libro 3</option>
                        </select>
                    </td>
                    <td><button class="btn-doc">Ver</button></td>
                    <td>21/12/99</td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn-notificar">Notificar</button></td>
                    <td><button class="btn-gestionar">Gestionar</button></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Ángel</td>
                    <td>Guiberteau</td>
                    <td>ejemplo@mail.com</td>
                    <td>DAW</td>
                    <td>2º DAW</td>
                    <td>
                        <select>
                            <option selected disabled hidden>Libros</option>
                            <option value="libro1">Libro 1</option>
                            <option value="libro2">Libro 2</option>
                            <option value="libro3">Libro 3</option>
                        </select>
                    </td>
                    <td><button class="btn-doc">Ver</button></td>
                    <td>21/12/99</td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn-notificar">Notificar</button></td>
                    <td><button class="btn-gestionar">Gestionar</button></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Ángel</td>
                    <td>Guiberteau</td>
                    <td>ejemplo@mail.com</td>
                    <td>DAW</td>
                    <td>2º DAW</td>
                    <td>
                        <select>
                            <option selected disabled hidden>Libros</option>
                            <option value="libro1">Libro 1</option>
                            <option value="libro2">Libro 2</option>
                            <option value="libro3">Libro 3</option>
                        </select>
                    </td>
                    <td><button class="btn-doc">Ver</button></td>
                    <td>21/12/99</td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn-notificar">Notificar</button></td>
                    <td><button class="btn-gestionar">Gestionar</button></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Ángel</td>
                    <td>Guiberteau</td>
                    <td>ejemplo@mail.com</td>
                    <td>DAW</td>
                    <td>2º DAW</td>
                    <td>
                        <select>
                            <option selected disabled hidden>Libros</option>
                            <option value="libro1">Libro 1</option>
                            <option value="libro2">Libro 2</option>
                            <option value="libro3">Libro 3</option>
                        </select>
                    </td>
                    <td><button class="btn-doc">Ver</button></td>
                    <td>21/12/99</td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn-notificar">Notificar</button></td>
                    <td><button class="btn-gestionar">Gestionar</button></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Ángel</td>
                    <td>Guiberteau</td>
                    <td>ejemplo@mail.com</td>
                    <td>DAW</td>
                    <td>2º DAW</td>
                    <td>
                        <select>
                            <option selected disabled hidden>Libros</option>
                            <option value="libro1">Libro 1</option>
                            <option value="libro2">Libro 2</option>
                            <option value="libro3">Libro 3</option>
                        </select>
                    </td>
                    <td><button class="btn-doc">Ver</button></td>
                    <td>21/12/99</td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn-notificar">Notificar</button></td>
                    <td><button class="btn-gestionar">Gestionar</button></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Ángel</td>
                    <td>Guiberteau</td>
                    <td>ejemplo@mail.com</td>
                    <td>DAW</td>
                    <td>2º DAW</td>
                    <td>
                        <select>
                            <option selected disabled hidden>Libros</option>
                            <option value="libro1">Libro 1</option>
                            <option value="libro2">Libro 2</option>
                            <option value="libro3">Libro 3</option>
                        </select>
                    </td>
                    <td><button class="btn-doc">Ver</button></td>
                    <td>21/12/99</td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn-notificar">Notificar</button></td>
                    <td><button class="btn-gestionar">Gestionar</button></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Ángel</td>
                    <td>Guiberteau</td>
                    <td>ejemplo@mail.com</td>
                    <td>DAW</td>
                    <td>2º DAW</td>
                    <td>
                        <select>
                            <option selected disabled hidden>Libros</option>
                            <option value="libro1">Libro 1</option>
                            <option value="libro2">Libro 2</option>
                            <option value="libro3">Libro 3</option>
                        </select>
                    </td>
                    <td><button class="btn-doc">Ver</button></td>
                    <td>21/12/99</td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn-notificar">Notificar</button></td>
                    <td><button class="btn-gestionar">Gestionar</button></td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Ángel</td>
                    <td>Guiberteau</td>
                    <td>ejemplo@mail.com</td>
                    <td>DAW</td>
                    <td>2º DAW</td>
                    <td>
                        <select>
                            <option selected disabled hidden>Libros</option>
                            <option value="libro1">Libro 1</option>
                            <option value="libro2">Libro 2</option>
                            <option value="libro3">Libro 3</option>
                        </select>
                    </td>
                    <td><button class="btn-doc">Ver</button></td>
                    <td>21/12/99</td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn-notificar">Notificar</button></td>
                    <td><button class="btn-gestionar">Gestionar</button></td>
                    <td><input type="checkbox"></td>
                </tr>
            </tbody>
        </table>
        </div>
    </main>

    <footer>
        <div class="colaboradores">
            <b>Colaboradores</b>
            <p><a href="https://atabalfundacion.wordpress.com/">Fundacion Atabal</a></p>
            <p><a href="https://www.aytobadajoz.es/es/ayto/portada">Ayto. Badajoz</a></p>
            <p><a href="https://www.aexpainba-fmm.org/comienzo.asp">AEXPAINBA</a></p>
            <p><a href="http://www.fidesbancaetica.com/">FIDES</a></p>
        </div>
        <div class="cita">
            <p>"El examen de conciencia es siempre el mejor medio para cuidar bien el alma."</p>
            <p>"San Ignacio de Loyola"</p>
        </div>
        <div class="contacto">
            <b id="contactar">Contactar</b>
            <p><i class="fas fa-map-marker-alt"></i> C/ Corte de Peleas, 79 06009 Badajoz</p>
            <p><i class="fas fa-phone"></i> +34 924 25 17 61</p>
        </div>
    </footer>

    <!-- Ventana emergente (modal) -->
    <div id="modal" class="modal show">
        <div class="modal-content">
            <h2 class="modal-title">Reserva de Libros</h2>
            <form id="formReservar" method="post" action="./reservar.php">
                <label for="dni">DNI:</label>
                <input type="text" name="dni" placeholder="800839201A" id="dni">
                <label for="nombreTutor">Nombre Tutor:</label>
                <select name="nombreTutor" id="tutor">
                    <option selected disabled hidden>Selecciona el tutor</option>
                    <?php
                        
                        if (isset($tutores)) {
                            $resultado = $tutores;
                            foreach ($resultado as $fila) {
                                $valor = $fila['nombre'];
                                    echo "<option value=\"$valor\">" . $fila['nombre'] . "</option>";
                            }
                        } else {
                            echo '<option disabled>No hay datos</option>';
                       }
                    ?>
                </select>
                <label for="correo">Correo:</label>
                <input type="email" name="correo" placeholder="reserva@correo.com" id="correo">
                <label for="nombreAlumno">Nombre Completo Alumno:</label>
                <input type="text" name="nombreAlumno" placeholder="Introduce nombre alumno" id="nombreAlumno">
                <label for="clases">Clase:</label>
                <select name="clases" id="clases">
                    <option selected disabled hidden>Selecciona la clase perteneciente</option>
                    <?php
                        
                        if (isset($clases)) {
                            $resultado = $clases;
                            foreach ($resultado as $fila) {
                                $valorClase = $fila['letraClase'];
                                    echo "<option value=\"$valorClase\">" . $fila['nombre'] . "</option>";
                            }
                        } else {
                            echo '<option disabled>No hay datos</option>';
                       }
                    ?>
                </select>
                <label class="modal-label">Libro a reservar:</label>
                <div class="checkbox-group" id="libros">
                    <?php
                        if (isset($libros)) {
                            $resultado = $libros;
                            foreach ($resultado as $fila) {
                                echo "
                                <label>
                                    ".$fila['libro']." (".$fila['editorial'].") | ".$fila['precio']."
                                    <input type='checkbox' name='librosSeleccionados[]' value=".$fila." class='modal-checkbox'>
                                </label>";
                            }
                        } else {
                            echo "No hay datos para mostrar.";
                        }
                    ?>
                </div>
                <label class="modal-label" for="documento">Insertar documento de pago:</label>
                <div class="file-input-group">
                    <input type="file" id="documento" name="documento" class="modal-file-input">
                </div>
                <?php
                    echo '<input type="text"value='.$_POST['curso'].' name="curso" hidden>';
                ?>
                <div class="modal-buttons">
                    <button type="button" class="modal-button modal-cancel" onclick="toggleModal()"><a href="../elegirCurso.php" style="color:black;text-decoration:none;">Cancelar</a></button>
                    <button type="submit" class="modal-button modal-reserve" id="reservar">Reservar</button>
                </div>
            </form>
        </div>
    </div> 
    <script src="./js/errores.js"></script>

    </body>
</html>
