<?php
// Conexión a la base de datos (reemplaza los valores con tus propios datos de conexión).
$servername = "localhost";
$username = "root";
$password = "";
$database = "musity";

$conn = new mysqli($servername, $username, $password, $database);


// Verificar la conexión.
$usuarioAutenticado= $_SESSION['usuarioAutenticado'];
$rol=$_SESSION['rolUsuario'];

$id_musico= $_POST['id'];



// Recibir datos del formulario y realizar la inserción en la tabla "contratantes".
if ($conn=conecta() ){
    
    if(isset($_GET['actualizando'])){
        if (isset($_POST["nombre_completo"])){
            $nombre=$_POSTT["nombre_completo"];
        }
        if (isset($_POST["apellidos"])){
            $nombre=$_POSTT["apellidos"];
        }
        if (isset($_POST["apellidos"])){
            $nombre=$_POSTT["apellidos"];
        }
        if (isset($_POST["nombre_artistico"])){
            $nombre=$_POSTT["nombre_artistico"];
        }
        if (isset($_POST["correo_electronico"])){
            $nombre=$_POSTT["correo_electronico"];
        }
        if (isset($_POST["numero_telefono"])){
            $nombre=$_POSTT["numero_telefono"];
        }

    $sql = "UPDATE musicos SET nombre_completo='$nombre', apellidos= '$apellidos', nombre_artistico='$nombreartistico', correo_electronico='$correo', numero_telefono='$numero_telefono' WHERE id=$id_musico";

    echo "$sql";

        if (mysqli_query($conn, $sql)){
            echo "Actualización exitosa";
        } else {
            echo "Error de actualización: " . mysqli_error($conn);
            }
        }

    // Consulta SQL para la inserción de datos en la tabla "usuarios".

    // Ejecuta las dos consultas y verifica si se ejecutaron correctamente.

    $sql = "SELECT * FROM musicos WHERE id=".$id_musico;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
    }
}
?>
