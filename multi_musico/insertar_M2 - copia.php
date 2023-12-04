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
    $fecha_nacimiento = $conn->real_escape_string($_POST['fecha_nacimiento']);
    $genero = $conn->real_escape_string($_POST['genero']);
    $foto_perfil = $conn->real_escape_string($_POST['foto_perfil']);
    $video = $conn->real_escape_string($_POST['video']);
    $numero_telefono = $conn->real_escape_string($_POST['numero_telefono']);
    $ciudad_origen = $conn->real_escape_string($_POST['ciudad_origen']);

    // Consulta SQL para la inserción de datos en la tabla "contratantes".
    $sql = "INSERT INTO musicos (fecha_nacimiento, foto_perfil,  numero_telefono, ciudad_origen)
            VALUES ('$fecha_nacimiento', '$foto_perfil', '$numero_telefono', '$ciudad_origen')";

    // Consulta SQL para la inserción de datos en la tabla "usuarios".

    // Ejecuta las dos consultas y verifica si se ejecutaron correctamente.
    if ($conn->query($sql) === TRUE) {
        header("Location: servicios.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos.
$conn->close();
?>
