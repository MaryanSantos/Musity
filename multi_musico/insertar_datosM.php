<?php
// Conexión a la base de datos (reemplaza los valores con tus propios datos de conexión).
$servername = "localhost";
$username = "root";
$password = "";
$database = "musity";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión.
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario y realizar la inserción en la tabla "contratantes".
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre_completo']);
    $apellidos = $conn->real_escape_string($_POST['apellidos']);
    $nombreartistico = $conn->real_escape_string($_POST['nombre_artistico']);
    $correo = $conn->real_escape_string($_POST['correo_electronico']);
    $contrasena = $conn->real_escape_string($_POST['contrasena']); // Hashear la contraseña para seguridad.

    // Consulta SQL para la inserción de datos en la tabla "contratantes".
    $sql = "INSERT INTO musicos (nombre_completo, apellidos, nombre_artistico, correo_electronico, contrasena)
            VALUES ('$nombre', '$apellidos', '$nombreartistico', '$correo', '$contrasena')";

    // Consulta SQL para la inserción de datos en la tabla "usuarios".
    $consulta2 = "INSERT INTO usuarios (id_usuario, usuario, contrasena, correo, id_roles) VALUES (0, '$nombre', '$contrasena', '$correo', 2)";

    // Ejecuta las dos consultas y verifica si se ejecutaron correctamente.
    if ($conn->query($sql) === TRUE && $conn->query($consulta2) === TRUE) {
        header("Location: seguimiento2.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos.
$conn->close();
?>
