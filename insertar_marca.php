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
    $nombre = $conn->real_escape_string($_POST['nombre_marca']);
    $significado = $conn->real_escape_string($_POST['significado']);


    // Consulta SQL para la inserción de datos en la tabla "contratantes".
    $sql = "INSERT INTO marca (nombre_marca, significado)
            VALUES ('$nombre', '$significado')";

    // Consulta SQL para la inserción de datos en la tabla "usuarios".
   

    // Ejecuta las dos consultas y verifica si se ejecutaron correctamente.
    if ($conn->query($sql) === TRUE ) {
        header("Location: log-in.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos.
$conn->close();
?>
