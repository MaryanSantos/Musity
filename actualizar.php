<?php
  if(isset($_POST['sbmEnviar'])) {
    $nombre = $_POST['nombre_completo'];
    $apellidos = $_POST['apellidos'];
    $nombreart = $_POST['nombre_artistico'];
    $email = $_POST['correo_electronico'];
    $telefono = $_POST['numero_telefono'];
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Registrarte - Musity</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="manifest" href="manifest.json" />
	
	<!-- Favicon  -->
    <link rel="icon" href="images/fav_musity.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

<?php
//Inicio la sesión
session_start();


if (!isset($_SESSION["usuarioAutenticado"])){

    
  //echo "no existe";
 //  echo "si no existe, envio a la página de autentificacion";
    header("Location: log-in.php");
    //ademas salgo de este script
    exit();
}else {
    //autenticado, hacemos tooodo lo que se requiere
    $usuarioAutenticado= $_SESSION["usuarioAutenticado"];
    $rol=$_SESSION["rolUsuario"];
   // echo "<a href='salir.php'> Salir </a> <br>";
  //  echo "usuario autenticado";
    //echo  "<br> Bienvenido $usuarioAutenticado tu eres $rol ";
}?>
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#header">INICIO <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="log-in.html">INICIAR SESIÓN</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Actualizar datos</h1>
                    <!-- Sign Up Form -->
                    <div class="form-container">

<?php
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


        $sql = "SELECT * FROM musicos WHERE id=".$id_musico;
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
    
            $row = mysqli_fetch_assoc($result);
        }
    }
?>

            <form   action="actualizar.php" method="post" >
                            <div class="form-group">
                                <input type="text"  name="nombre_completo" class="form-control-input"  required>
                                <label class="label-control" >Nombre</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text"  name="apellidos" class="form-control-input"  required>
                                <label class="label-control" >Apellidos</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text"  name="nombre_artistico" class="form-control-input"  required>
                                <label class="label-control" >Nombre artístico</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="correo_electronico" class="form-control-input" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                                <label class="label-control">Correo electrónico</label>
                                <div class="help-block with-errors"></div>
                            </div>                                                                                                                        
                            <div class="form-group">
                                <input type="text" name="numero_telefono" class="form-control-input" pattern="\d{10}" title="El número de teléfono debe tener 10 dígitos" required oninput="mostrarMensajeError(this)">
                                <label class="label-control">Número de teléfono</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            
                            <script>
                                function mostrarMensajeError(input) {
                                    input.setCustomValidity('');
                                    if (!input.validity.valid) {
                                        input.setCustomValidity(input.title);
                                    }
                                }
                            </script>
                            <input type="hidden" name="actualizando"/>
                            <input type="hidden" name="id_musico" value="<?php echo $row["id"]; ?>" />
                            <input id="inputPassword" type="submit" name="sbmEnviar" value="Actualizar">                                                        
                            <!--<div class="form-group">
                                <button type="actualizando" class="form-control-submit-button">Actualizar</button>
                            </div>
                            <div class="form-message">
                                <div  class="h3 text-center hidden"></div>
                            </div>-->
                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>