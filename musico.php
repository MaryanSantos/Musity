<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Músico</title>
    <link href="css/usersStyles.css" rel="stylesheet">
    <link rel="icon" href="images/fav_musity.png">
    <link rel="manifest" href="manifest.json" />
    <style>

        #nav-info  {
            display: none;
            justify-content: space-between;
            font-size: 90%;
            margin-left: 10px;
            margin-bottom: 17px;
            column-count: 3;
        }

        #nav-info p{
        font-size: 15px;
        color: #3d0a47;
        }

        #nav-marca  {
            display: none;
            margin-left: 25px;
            font-size: 89%;
            margin-bottom: 10px;
            column-count: 2;
        }

        #nav-marca  p{
        font-size: 1.5em;
        color: #3d0a47;
        margin-left: -10px;
        margin-top: 25px;
        transform: translateX(-50px);
        }

        @media screen and(min-width:600px){
        #nav-marca p{
            font-size: 80%;
            transform: translateX(30px);
        }

        @media screen and(min-width:1000px){
        #nav-marca p{
            font-size: 90%;
            transform: translateX(-50px);
        }
    }
 
    }

        #nav-marca img{
        height: 160px;
        width: 160px;
        border-radius: 20%;
        margin: 10px 10;
        cursor: pointer;
        transform: translateX(60px);
        }

        #nav-formacion  {
            display: none;
            justify-content: space-between;
            font-size: 100px;
            margin-left: 25px;
            margin-bottom: 10px;
            margin-top: 10px;
            column-count: 2;
            transform: translate(auto);
        }

        #nav-formacion p{
        font-size: 16px;
        color: #3d0a47;
        transform: translateX(-50px);
        margin-left: -10px;
        margin-top: 25px;
        }

        #nav-formacion img{
            height: 180px;
            width: 180px;
            border-radius: 5%;
            margin: 15px;
            cursor: pointer;
            transform: translateX(auto);
            transform: translateY(auto);
        }

        #nav-trayectoria {
            display: none;
            justify-content: space-between;
            font-size: 100px;
            margin-left: 25px;
            margin-bottom: 10px;
        }

        #nav-trayectoria p{
        font-size: 16px;
        color: #3d0a47;
        }

        #nav-sextras {
            display: none;
            justify-content: space-between;
            font-size: 100px;
            margin-left: 25px;
            margin-bottom: 10px;
        }

        #nav-sextras p{
        font-size: 16px;
        color: #3d0a47;
        }

        #div-galery{
            display: block;
            display: grid;
            grid-template-columns: repeat(3,32%);
            grid-template-rows: repeat(5,auto);
            gap: 2%;
            height: auto;
        }

        #div-galery img{
            width: 100%;
            cursor: pointer;
        }

    </style>
</head>
<body>

<!--<form class="login100-form validate-form" action="control.php" method="GET">-->
<?php
include("control.php");

if (!isset($_SESSION["usuarioAutenticado"])){
    header("Location: log-in.php");
    exit();
}else {
    //autenticado, hacemos tooodo lo que se requiere
    $usuarioAutenticado= $_SESSION["usuarioAutenticado"];
    $rol=$_SESSION["rolUsuario"];
   // echo "<a href='salir.php'> Salir </a> <br>";
  //  echo "usuario autenticado";
    //echo  "<br> Bienvenido $usuarioAutenticado tu eres $rol ";
}?>  





<nav>
        <div class="nav-cont">
            <a class="navbar-brand logo-image " href="index.php">
            <img src="./images/logo_musity.png" alt="Logo_Musity">
            </a>
            <div class="iconos">
                <svg  aria-label="Inicio" class="x1lliihq x1n2onr6 x5n08af" fill="#c89dd1" height="24" role="img" viewBox="0 0 24 24" width="24"><title>Inicio</title><path d="M22 23h-6.001a1 1 0 0 1-1-1v-5.455a2.997 2.997 0 1 0-5.993 0V22a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V11.543a1.002 1.002 0 0 1 .31-.724l10-9.543a1.001 1.001 0 0 1 1.38 0l10 9.543a1.002 1.002 0 0 1 .31.724V22a1 1 0 0 1-1 1Z"></path></svg>
                <svg aria-label="Messenger" class="x1lliihq x1n2onr6 x5n08af" fill="#432649" height="24" role="img" viewBox="0 0 24 24" width="24"><title>Messenger</title><path d="M12.003 2.001a9.705 9.705 0 1 1 0 19.4 10.876 10.876 0 0 1-2.895-.384.798.798 0 0 0-.533.04l-1.984.876a.801.801 0 0 1-1.123-.708l-.054-1.78a.806.806 0 0 0-.27-.569 9.49 9.49 0 0 1-3.14-7.175 9.65 9.65 0 0 1 10-9.7Z" fill="#c89dd1" stroke="#c89dd1" stroke-miterlimit="10" stroke-width="1.739"></path><path d="M17.79 10.132a.659.659 0 0 0-.962-.873l-2.556 2.05a.63.63 0 0 1-.758.002L11.06 9.47a1.576 1.576 0 0 0-2.277.42l-2.567 3.98a.659.659 0 0 0 .961.875l2.556-2.049a.63.63 0 0 1 .759-.002l2.452 1.84a1.576 1.576 0 0 0 2.278-.42Z" fill-rule="evenodd"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#432649" class="bi bi-gear" stroke="#c89dd1" stroke-width="0.9" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                  </svg>
                <a class="navbar-brand logo-image " href="salir.php">
                <img  class="small-logo" src="./images/testimonial-3.jpg" alt="foto_perfil">
                </a>
            </div>
    </nav>

    <header>
        <div class="perfil-container">
            <img class="img-perfil" src="./images/testimonial-3.jpg" alt="Img_perfil">
            <!--<img class="img-portada" src="./images/testimonial-3.jpg" alt="Img_perfil">-->
            <div class="contenedor-cabecera">
                <div class="cabezera1">
                    <h1><?php echo"$usuarioAutenticado"?></h1>
                    <button>Calendario</button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-plus" viewBox="0 0 16 16">
                        <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                </div>
                <div class="cabecera2">
                    <?php
                    $usuarioAutenticado= $_SESSION["usuarioAutenticado"];
                    $consulta = "SELECT * FROM musicos WHERE nombre_completo='$usuarioAutenticado'";
                    $resultado = mysqli_query($conn,$consulta);
                    if ($resultado){
                        while ($row = $resultado->fetch_array()){
                            $genero = $row['genero'];
                            $origen = $row['ciudad_origen'];
                            $fecha_nac= $row['fecha_nacimiento'];
                            $telefono= $row['numero_telefono'];
                    ?> 
                   <h2><?php echo $genero;?></h2>
                    <p><b>Origen: </b><?php echo $origen;?></p>
                    <p><b>Fecha nacimiento: </b><?php echo $fecha_nac;?></p>
                    <p><b>Teléfono: </b><?php echo $telefono;?></p>
                    <pclass="p-siguenos">Sigueme en:</p>
                    <a href="https://support.spotify.com/mx/article/spotify-connect/" class="p-link">support.spotify.com/mx/article/spotify-connect/</a>
                <?php
                }
                    }
                ?>
               
                </div>
            </div>
        </div>
        <div class="q-somos">
            <div class="icon">
                <h2>¿Quiénes somos?</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                </svg>
                <!--<h4>4.0</h4>-->
            </div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, eos ad natus at inventore quo accusamus error beatae soluta dolorem reiciendis dolor temporibus, asperiores repellendus modi adipisci, illum earum facere!</p>
        </div>
        <hr>
        <div class="precios">
            <p><b>Precio por hora:</b>$2000</p>
            <p><b>Precio por evento</b>$1000</p>
        </div>
    </header>
    <main>
        <div class="linea"></div>
            <div class="main-nav">
                <a href="#galery" onclick="mostrarGalery(), ocultarInfo();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-aspect-ratio" viewBox="0 0 16 16">
                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                    <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"/>
                    </svg>
                GALERÍA
                </a>
                <a href="#info" onclick="mostrarInfo(), ocultarGalery(), ocultarMarca(), ocultarFormacion(), ocultarTrayectoria();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg>
                INFO
                </a>
                <a href="#marca" onclick="mostrarMarca(), ocultarInfo(), ocultarFormacion(), ocultarTrayectoria(), ocultarSExtras();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vinyl-fill" viewBox="0 0 16 16">
                        <path d="M8 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm0 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0z"/>
                    </svg>
                MARCA
                </a>
                <a href="#formacion" onclick="mostrarFormacion(), ocultarMarca(), ocultarInfo(), ocultarTrayectoria(), ocultarSExtras();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
                      </svg>
                TRAYECTORIA
                </a>
                <!--<a href="#trayectoria" onclick="mostrarTrayectoria(), ocultarMarca(), ocultarFormacion(), ocultarSExtras(), ocultarInfo();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                        <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                        <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
                        <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                        <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                TRAYECTORIA
                </a>
                <a href="#sextras" onclick="mostrarSExtras(), ocultarMarca(), ocultarInfo(), ocultarFormacion(), ocultarTrayectoria();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gift-fill" viewBox="0 0 16 16">
                        <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
                    </svg>
                SERVICIOS EXTRAS
                </a>-->
            </div>
            <div class="" id="div-galery">
                <div><img src="./images/g1.jpg" alt="Img galería1" ></div>
                <div><img src="./images/g2.jpg" alt="Img galería2" ></div>
                <div><img src="./images/g3.jpg" alt="Img galería3" ></div>
                <div><img src="./images/g1.jpg" alt="Img galería4" ></div>
                <div><img src="./images/g2.jpg" alt="Img galería5" ></div>
                <div><img src="./images/g3.jpg" alt="Img galería6" ></div>
                <div><img src="./images/g1.jpg" alt="Img galería7" ></div>
                <div><img src="./images/g2.jpg" alt="Img galería8" ></div>
                <div><img src="./images/g3.jpg" alt="Img galería9" ></div>
                <div><img src="./images/g1.jpg" alt="Img galería10" ></div>
                <div><img src="./images/g2.jpg" alt="Img galería11" ></div>
                <div><img src="./images/g3.jpg" alt="Img galería12" ></div>
                <div><img src="./images/g1.jpg" alt="Img galería13" ></div>
                <div><img src="./images/g2.jpg" alt="Img galería14" ></div>
                <div><img src="./images/g3.jpg" alt="Img galería15" ></div>
            </div>

            <div  id="nav-info" class="cabecera2">
            <?php
                $usuarioAutenticado= $_SESSION["usuarioAutenticado"];
                $consulta = "SELECT * FROM musicos WHERE nombre_completo='$usuarioAutenticado'";
                $resultado = mysqli_query($conn,$consulta);
                if ($resultado){
                        while ($row = $resultado->fetch_array()){
                            $nombreart = $row['nombre_artistico'];
                            $nombre = $row['nombre_completo'];
                            $apellidos= $row['apellidos'];
                            $correo= $row['correo_electronico'];
            ?> 
                <p><b id="fondo-b">Nombre completo:</b><?php echo $nombre;?></p>

                <p><b id="fondo-b">Apellidos: </b><?php echo $apellidos;?></p>

                <p><b id="fondo-b">Email: </b><?php echo $correo;?></p>

            <?php
                }
                    }
            ?>       
            </div>

            <div  id="nav-marca" class="raw">
                <img class="img-perfil" src="./images/testimonial-3.jpg" alt="Img_marca">
                <p><b id="fondo-b">Nombre:</b> La Crisalida</p>
                <p>    </p>
                <p><b id="fondo-b">Significado:</b> La banda pasó por un período de resguardo, pero sin dejar de preparse. Estabamos como en una crisalida compuesta de melodías, que nos protegieron hasta que llegó la hora de salir a triunfar.</p>
            </div>

            <div  id="nav-formacion" class="cabecera2">
                <img class="img-perfil" src="./images/testimonial-3.jpg" alt="Img_álbum">
                <p><b id="fondo-b">Tiempo desde lanzamiento:</b> 10 meses</p>
                <p><b id="fondo-b">Colaboraciones:</b> Dueto con Marcon Antonio Solis</p>
                <p><b id="fondo-b">Eventos importantes:</b> Viña del mar</p>
            </div>

            <!--<div  id="nav-trayectoria" class="cabecera2">
                <p><b>Tipo de servicio:</b> TRAYECTORIA</p>
                <p><b>No. de integrantes:</b> 3</p>
            </div>

            <div  id="nav-sextras" class="cabecera2">
                <p><b>Tipo de servicio:</b> SEXTRAS</p>
                <p><b>No. de integrantes:</b> 3</p>
            </div>-->
    </main>


    <script>
        function mostrarGalery(){
            document.getElementById('div-galery').style.display = 'block grid';
        }

        function ocultarGalery(){
            document.getElementById('div-galery').style.display = 'none';
        }

        function mostrarInfo(){
            document.getElementById('nav-info').style.display = 'inline-block';
        }

        function ocultarInfo(){
            document.getElementById('nav-info').style.display = 'none';
        }

        function mostrarMarca(){
            document.getElementById('nav-marca').style.display = 'inline-block';
        }

        function ocultarMarca(){
            document.getElementById('nav-marca').style.display = 'none';
        }

        function mostrarFormacion(){
            document.getElementById('nav-formacion').style.display = 'inline-block';
        }

        function ocultarFormacion(){
            document.getElementById('nav-formacion').style.display = 'none';
        }

        function mostrarTrayectoria(){
            document.getElementById('nav-trayectoria').style.display = 'inline-block';
        }

        function ocultarTrayectoria(){
            document.getElementById('nav-trayectoria').style.display = 'none';
        }

        function mostrarSExtras(){
            document.getElementById('nav-sextras').style.display = 'inline-block';
        }

        function ocultarSExtras(){
            document.getElementById('nav-sextras').style.display = 'none';
        }


    </script>
    
</body>
</html>