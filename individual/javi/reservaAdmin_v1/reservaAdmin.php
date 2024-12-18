<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservar Administrador | Libros</title>
        <!-- ICONO -->
        <link rel="shortcut icon" href="../assets/img/favicon.svg" type="image/x-icon">
        <!-- IMPORT -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="../assets/css/import.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/admin.css">
        <link rel="stylesheet" href="./assets/css/2reservaAdmin.css">    
    </head>
    <body>

    <?php require_once './php/header.php'; ?>

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
            <form>
                <label>Nombre:</label>
                <input type="text">
                <label>Apellidos:</label>
                <input type="text">
                <label>Correo:</label>
                <input type="email">
                <label>Clase:</label>
                <select>
                    <option selected disabled hidden></option>
                    <?php

                        require_once './php/config/conectar.php';

                        $curso = $_SESSION['curso'];

                        $sql = "SELECT * FROM clases WHERE idCurso = '$curso'";
                        
                        $resultado = $conexion->query($sql);

                        foreach ($resultado as $fila) {
                            echo "<option value=\"" . $curso . $fila['letraClase'] . "\">" . $fila['nombre'] . "</option>";
                        }
                    ?>
                </select>
                <label class="modal-label">Libro a reservar:</label>
                <div class="checkbox-group">
                    <!-- <label><input type="checkbox" name="libro1" class="modal-checkbox"> Libro</label> -->
                    <?php
                        if (isset($_SESSION['resultado'])) {
                            $resultado = $_SESSION['resultado'];
                            foreach ($resultado as $fila) {
                                echo "<label><input type=checkbox name=".$fila['libro']." class=modal-checkbox>" . $fila['libro'] . "</input></label><br>";
                            }

                            // Limpiar la sesión si ya no necesitas los datos
                            unset($_SESSION['resultado']);
                        } else {
                            echo "No hay datos para mostrar.";
                        }
                    ?>
                </div>
                <label class="modal-label" for="documento">Insertar documento de pago:</label>
                <div class="file-input-group">
                    <input type="file" id="documento" name="documento" class="modal-file-input">
                </div>
                <div class="modal-buttons">
                    <button type="button" class="modal-button modal-cancel" onclick="toggleModal()"><a href="reservaAdmin.php" style="color:black;text-decoration:none;">Cancelar</a></button>
                    <button type="submit" class="modal-button modal-reserve">Reservar</button>
                </div>
            </form>
        </div>
    </div> 

    <script>
        function toggleModal() {
            const modal = document.getElementById('modal');
            modal.classList.toggle('show');
        }
    </script>

    </body>
</html>
