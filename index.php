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
    <title>Musity</title>
    
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
    <style>
        hr {
        height: 1px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 2px;
        margin-bottom: 2px;
        border-width: 2px;
        border-color: #79c5b2;

}

.header {
	background-image: url('images/SI.svg');
	background-color: #79c5b2;
    background-repeat: no-repeat;
	border-radius: 0% 0% 10% 10%;
}
    </style>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
<script>
    // Función para inicializar y abrir la base de datos
    function initDatabase() {
      var request = window.indexedDB.open("Musity", 1);  // 1 es la versión de la base de datos
    
      request.onupgradeneeded = function(event) {
        var db = event.target.result;
    
        // Crea una nueva tabla si no existe
        if (!db.objectStoreNames.contains("miTabla")) {
          var objectStore = db.createObjectStore("opiniones", { keyPath: "id", autoIncrement: true });
          objectStore.createIndex("correo", "correo", { unique: false });
          objectStore.createIndex("nombre", "nombre", { unique: false });
          objectStore.createIndex("opinion", "opinion", { unique: false });
        }
      };
    
      request.onsuccess = function(event) {
        console.log("Base de datos abierta con éxito");
        var db = event.target.result;
    
        // Aquí puedes realizar operaciones con la base de datos, si es necesario
    
        // Cierra la base de datos cuando hayas terminado de usarla
        // db.close();
      };
    
      request.onerror = function(event) {
        console.error("Error al abrir la base de datos:", event.target.error);
      };
    }
    
    // Llama a la función al cargar la página
    document.addEventListener("DOMContentLoaded", function() {
      initDatabase();
    });
    </script>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
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
            <a class="navbar-brand logo-image" href="index.php"><img src="./images/logo3_musity.svg" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">INICIO <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">BENEFICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">CONTRATACIONES</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">PROBLEMA -SOLUCIÓN</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="article-details.html"><span class="item-text">Segmento vulnerable</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Términos y condiciones</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Política de privacidad</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">FORMAR PARTE</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="log-in.php">Iniciar sesión</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-container">  <!-- Inicio contenedor texto-botón banner -->
                            <h1>Llevar tus servicios musicales a domicilio</h1>
                            <p class="p-large">en todo el estado y aumentar tus ingresos en el lugar ideal para mostrar tu talento.</p>
                            <a class="btn-solid-lg page-scroll" href="regmusico.php">¡Iniciar ahora!</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-md-4">
                        <div class="text-container">  <!-- Inicio contenedor texto-botón banner -->
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-md-4">
                        <div class="text-container">  <!-- Inicio contenedor texto-botón banner -->
                            <h1>Animar tus eventos o momentos especiales</h1>
                            <p class="p-large">eligiendo entre un variado catálogo de servicios musicales contratando de manera rápida, fácil y segura.</p>
                            <a class="btn-solid-lg page-scroll" href="sign-up.php">¡Registrarme ya!</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
   <!---- <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#bc4ed8;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/></svg> -->
    <!-- end of header -->


    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/banda_1.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/banda_2.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/banda_3.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/banda_4.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/banda_5.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/banda_6.png" alt="alternative">
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="topcards">El medio que une al talento musical con la oportunidad</h2>
                </div> <!-- end of col -->
                <div class="col-lg-12 card-image">
                    <img class="img-fluid" src="images/Logo_01.png" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/mision.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Misión</h4>
                            <p>Ofrecer una solución tecnológica que impulse la calidad de vida y la carrera de cualquier proveedor de servicios musicales en Michoacán, por medio de herramientas que le permitan acercarse a sus clientes potenciales de manera rápida, fácil y directa.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/vision.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Visión</h4>
                            <p>Posicionarnos como una de las Aplicaciones multiplataforma que representen un potencial impulso en el crecimiento económico y profesional de cualquier músico a nivel nacional, sin ninguna distinción. </p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/valores.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Valores</h4>
                            <ul class= "list-unstyled li-space-lg">
                                <li class="nav-item">Solidaridad</li>
                                <li class="nav-item">Honestidad</li>
                                <li class="nav-item">Colaboración</li>
                                <li class="nav-item">Pasión</li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->


    <!-- Features -->
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">BENEFICIOS</div>
                    <h2 class="h2-heading">Como proveedor de servicios musicales</h2>
                    <p class="p-heading">Musity es una Aplicación que le brinda a cualquier músico las herramientas esenciales para:</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Tabs Links -->
                    <ul class="nav nav-tabs" id="argoTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-list"></i>Aumentar tus ingresos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-envelope-open-text"></i>Promocionar tu servicio </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-chart-bar"></i>Herramientas que impulsen tu servicio</a>
                        </li>
                    </ul>
                    <!-- end of tabs links -->

                    <!-- Tabs Content -->
                    <div class="tab-content" id="argoTabsContent">

                        <!-- Tab -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="./images/beneficiom1.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Haz de tu talento un negocio</h3>
                                        <!--<p>It's very easy to start using Tivo. You just need to fill out and submit the <a class="blue page-scroll" href="sign-up.html">Sign Up Form</a> and you will receive access to the app and all of its features in no more than 24h.</p>-->
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Retira tus ganancias semanalmente.</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Ofrece servicios extra para aumentar tus ingresos.</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Tu cartera de clientes crecerá de manera exponencial</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">Saber más</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="images/beneficiom2.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Crea o exhibe tu marca como artista</h3>
                                        <!-- <p>Campaigns monitoring is a feature we've developed since the beginning because it's at the core of Tivo and basically to any marketing activity focused on results.</p> -->
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Podrás demostrar tu talento, trayectoria y experiencia.</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Permite que todos conozcan a detalle tu servicio musical.</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Obtén reconocimiento con la calificación de tus clientes.</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">Me interesa</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->

                        <!-- Tab -->
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="image-container">
                                        <img class="img-fluid" src="images/beneficiom3.png" alt="alternative">
                                    </div> <!-- end of image-container -->
                                </div> <!-- end of col -->
                                <div class="col-lg-6">
                                    <div class="text-container">
                                        <h3>Obtén el control total de tu negocio</h3>
                                        <!-- <p>Analytics control  panel is important for every marketing team so it's beed implemented from the begging and designed to produce reports based on very little input information.</p> -->
                                        <ul class="list-unstyled li-space-lg">
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Organiza de manera fácil y práctica tus contrataciones.</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Analiza las estadísticas de rendimiento de tu servicio.</div>
                                            </li>
                                            <li class="media">
                                                <i class="fas fa-square"></i>
                                                <div class="media-body">Obtén más y mejores beneficios subiendo de nivel en la App.</div>
                                            </li>
                                        </ul>
                                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3">Saber más</a>
                                    </div> <!-- end of text-container -->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of tab-pane -->
                        <!-- end of tab -->
                        
                    </div> <!-- end of tab content -->
                    <!-- end of tabs content -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->


    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox2.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Aumenta tus ingresos</h3>
                    <hr>
                    <h5>La tecnología a tu servicio</h5>
                    <p> Aumenta tu visibilidad y alcance entre clientes potenciales que buscan música en vivo para sus eventos</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Recibe pagos seguros y rápidos a través de la plataforma, sin intermediarios ni comisiones</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Elige los géneros, horarios y zonas que más te convengan para ofrecer tus servicios</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Recibe calificaciones y comentarios de tus clientes que te ayudarán a mejorar tu reputación y atractivo</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body"> Disfruta de una comunidad de músicos profesionales que comparten experiencias, consejos y oportunidades</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close" href="log-in.php">Iniciar ahora</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Regresar</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/V2.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Promociona tu servicio</h3>
                    <p>Puedes crear un perfil personalizado con tu estilo, género, repertorio y tarifas.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Puedes recibir valoraciones y comentarios de tus clientes que te ayuden a mejorar tu reputación y visibilidad.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body"> Puedes acceder a una red de contactos y oportunidades de trabajo en diferentes eventos y lugares.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Puedes gestionar tu agenda, tus pagos y tus contratos de forma fácil y segura.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Puedes disfrutar de descuentos y beneficios exclusivos en servicios relacionados con la música, como instrumentos, equipos, estudios, etc.</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close" href="log-in.php">Iniciar ahora</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Regresar</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->

    <!-- Details Lightbox 3 -->
	<div id="details-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/V3.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>¿Eres músico en Michoacán y quieres aumentar tus ingresos y tu visibilidad?</h3>
                    <hr>
                    <h5>¡Entonces esta aplicación es para ti! Con esta app podrás:</h5>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Ofrecer tus servicios musicales a una amplia red de clientes potenciales.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Gestionar tu agenda de forma fácil y rápida, sin perder ninguna oportunidad de trabajo.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Recibir pagos seguros y transparentes por cada contratación.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body"> Recibir valoraciones y comentarios de tus clientes, que te ayudarán a mejorar tu reputación y tu calidad.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body"> Acceder a beneficios exclusivos, como descuentos, capacitaciones y eventos para músicos.</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close" href="log-in.php">Iniciar ahora</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Regresar</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 3 -->
    <!-- end of details lightboxes -->


    <!-- Details -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Quiero conocer la variedad de servicios musicales que puedo contratar</h2>
                        <p>Sabemos que la música es un medio que conecta todos los sentidos para generar deleite, alegría, motivación, energía, unión.
                            Es por ello que representa el alma de la fiesta, la celebración o de ese momento especial para los seres queridos.</p>
                        <p>Así que, si necesitas darle vida a ese evento o simplemente llevar una experiencia inolvidable a cualquier lugar, en Musity encontrarás:</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Extenso catálogo de servicios musicales.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Disponibilidad a cualquier hora y en cualquier lugar.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Servicios que se ajustan a cualquier presupuesto.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Toda la información que necesitas saber antes de contratar.</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg page-scroll" href="sign-up.php">Iniciar ahora</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/beneficiosC.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details -->


    <!-- Video -->
    <div id="video" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://youtu.be/XLnivSSUXxs" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video-image.png" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <div class="p-heading">Una luz en el camino del músico, un segmento laboralmente desprotegido.</div>        
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of video -->


    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">PASOS</div>
                    <h2 class="h2-heading">¿Cómo iniciar en Musity siendo músico solista o agrupación?</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">PASO 1</div>
                            <div class="price"><!--<span class="currency">$</span>--><span class="value">Registro</span></div>
                            <br>
                            <div class="frequency">¡Es gratis!</div>
                            <div class="divider"></div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Coloca los datos esenciales de tu servicio.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">En pocos minutos miles de personas podrán conocer a detalle tu trayectoria y experiencia.</div>
                                </li>
                                <!-- <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">Planning And Evaluation</div>
                                </li> -->
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="log-in.php">Registrarme ahora</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">PASO 2</div>
                            <div class="price"><span class="value">Inicia sesión</span></div>
                            <!-- <div class="frequency">monthly</div> -->
                            <div class="divider"></div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Una vez que te registres podrás ingresar a tu perfil.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Dentro de Musity podrás encontrar las herramientas necesarias para impulsar tu talento.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">La App ¡Es muy fácil de utilizar!</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="sign-up.php">Iniciar sesión</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <!--<div class="label">
                            <p class="best-value">Best Value</p>
                        </div> -->
                        <div class="card-body">
                            <div class="card-title">PASO 3</div>
                            <div class="price"><span class="value">Mejora tu perfil</span></div>
                            <div class="divider"></div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Si omitiste algunos datos en el registro podrás completarlos en tu perfil.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Asegúrate de que la información de tu servicio este completa así podrás atraer más clientes.</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="regmusico.php">¡Quiero iniciar ahora!</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

<hr>
        <!-- Pricing -->
        <div id="pricing" class="cards-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="above-heading">PASOS</div> -->
                        <h2 class="h2-heading">Me interesa contratar servicios musicales en Musity</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
    
                        <!-- Card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">PASO 1</div>
                                <div class="price"><!--<span class="currency">$</span>--><span class="value">Registro</span></div>
                                <div class="divider"></div>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-check"></i><div class="media-body">Te tomará menos de un minuto.</div>
                                    </li>
                                    <!-- <li class="media">
                                        <i class="fas fa-times"></i><div class="media-body">Planning And Evaluation</div>
                                    </li> -->
                                </ul>
                                <div class="button-wrapper">
                                    <a class="btn-solid-reg page-scroll" href="log-in.php">Registrarme ahora</a>
                                </div>
                            </div>
                        </div> <!-- end of card -->
                        <!-- end of card -->
    
                        <!-- Card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">PASO 2</div>
                                <div class="price"><span class="value">Inicia sesión</span></div>
                                <!-- <div class="frequency">monthly</div> -->
                                <div class="divider"></div>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-check"></i><div class="media-body">Coloca tus datos de acceso.</div>
                                    </li>
                                </ul>
                                <div class="button-wrapper">
                                    <a class="btn-solid-reg page-scroll" href="log-in.php">Iniciar sesión</a>
                                </div>
                            </div>
                        </div> <!-- end of card -->
                        <!-- end of card -->
    
                        <!-- Card-->
                        <div class="card">
                            <!--<div class="label">
                                <p class="best-value">Best Value</p>
                            </div> -->
                            <div class="card-body">
                                <div class="card-title">PASO 3</div>
                                <div class="price"><span class="value">¡Y listo!</span></div>
                                <div class="frequency">accede a un extenso catálogo de servicios musicales</div>
                                <div class="divider"></div>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-check"></i><div class="media-body">Recibe en la puerta de tu casa, evento o negocio una experiencia musical inolvidable.</div>
                                    </li>
                                </ul>
                                <div class="button-wrapper">
                                    <a class="btn-solid-reg page-scroll" href="log-in.php">¡Iniciar ahora!</a>
                                </div>
                            </div>
                        </div> <!-- end of card -->
                        <!-- end of card -->
    
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->



    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">      
                    
                    <!-- Text Slider -->
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-1.jpg" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">"Me encanta esta aplicación porque me permite disfrutar de la música en vivo sin salir de casa. Puedo elegir entre diferentes géneros, artistas y precios, y reservar el servicio con solo unos clics. La calidad del sonido es excelente y los músicos son muy profesionales y simpáticos. Es una forma genial de animar una fiesta, una cena romántica o un día cualquiera."</div>
                                        <div class="testimonial-author">America Farías - Contratante de Musity</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-2.jpg" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">"Esta aplicación es una maravilla para los amantes de la música. Tengo la oportunidad de descubrir nuevos talentos locales y apoyarlos con mis propinas. Además, puedo interactuar con ellos y pedirles canciones personalizadas. Es como tener un concierto privado en mi sala de estar. La aplicación es muy fácil de usar y tiene un servicio de atención al cliente muy eficiente."</div>
                                        <div class="testimonial-author">Roy Smith - Comerciante</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-3.jpg" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">"No hay nada como la música en vivo para crear un ambiente especial. Con esta aplicación, puedo sorprender a mis amigos y familiares con un regalo original y divertido. Puedo seleccionar el tipo de música que más les gusta, el horario que mejor les convenga y el presupuesto que más se ajuste a mi bolsillo. Los músicos llegan puntuales, son muy amables y tocan de maravilla. La aplicación es una pasada."</div>
                                        <div class="testimonial-author">Marsha Singer - Usuario de Musity</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="images/testimonial-4.jpg" alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">"Antes usaba el teléfono o el correo electrónico para contactar con mis clientes, pero era muy lento y complicado. Desde que descubrí esta aplicación, todo ha cambiado para mejor. Ahora puedo gestionar mis reservas, cobros y facturas desde mi móvil, con solo unos toques. Además, la aplicación me ayuda a promocionar mi trabajo y a encontrar nuevos clientes en mi zona. Estoy muy contento con esta aplicación, la recomiendo a todos los músicos que quieran llevar sus servicios musicales a domicilio."</div>
                                        <div class="testimonial-author">Ronda Louis - Cantante de agrupación La Fuerza</div>
                                    </div> <!-- end of text-wrapper -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->
                            
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- Newsletter -->
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="above-heading">Queremos saber tu opinión</div>
                        <h2>En Musity nos gustaría saber tu opinión para así ofrecerte un mejor servicio</h2>

                        <!-- Newsletter Form -->
                        <form id="newsletterForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="correo" required>
                                <label class="label-control" for="correo">Correo</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="nombre" required>
                                <label class="label-control" for="nombre">Nombre completo</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="opinion" required>
                                <label class="label-control" for="opinion">Opinión</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="nterms" value="Agreed-to-Terms" required>He leído y estoy de acuerdo con los términos y condiciones de Musity <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="form-control-submit-button" onclick="guardarDatos()">Enviar opinión</button>
                            </div>
                            <div class="form-message">
                                <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                        <!-- end of newsletter form -->
                        <table id="datosTable" class="hidden">
                            <thead>
                                <tr>
                                    <th>Correo</th>
                                    <th>Nombre completo</th>
                                    <th>Opinión</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <script>
                function guardarDatos() {
                    // Obtiene los valores del formulario
                    var correo = document.getElementById("correo").value;
                    var nombre = document.getElementById("nombre").value;
                    var opinion = document.getElementById("opinion").value;
            
                    // Abre la conexión con IndexedDB
                    var request = window.indexedDB.open("Musity", 1);
            
                    request.onerror = function(event) {
                        console.log("Error al abrir la base de datos:", event.target.errorCode);
                    };
            
                    request.onupgradeneeded = function(event) {
                        var db = event.target.result;
            
                        // Crea un almacén de objetos llamado "opiniones"
                        var store = db.createObjectStore("opiniones", { keyPath: "id", autoIncrement: true });
            
                        // Define los índices si es necesario
                         store.createIndex("correo", "correo", { unique: false });
                         store.createIndex("nombre", "nombre", { unique: false });
                         store.createIndex("opinion", "opinion", { unique: false });
                    };
            
                    request.onsuccess = function(event) {
                        var db = event.target.result;
            
                        // Abre una transacción y obtiene el almacén de objetos
                        var transaction = db.transaction(["opiniones"], "readwrite");
                        var store = transaction.objectStore("opiniones");
            
                        // Agrega un nuevo objeto con los datos del formulario
                        var nuevoRegistro = { correo: correo, nombre: nombre, opinion: opinion };
                        var addRequest = store.add(nuevoRegistro);
                       
            
                        addRequest.onsuccess = function(event) {
                            console.log("Datos almacenados correctamente en IndexedDB");
                            alert("¡Los datos se han almacenado correctamente!");
                        }; window.location.reload();
            
                        addRequest.onerror = function(event) {
                            console.log("Error al almacenar los datos en IndexedDB:", event.target.errorCode);
                        };
            
                        // Cierra la transacción
                        transaction.oncomplete = function() {
                            db.close();
                        };
                    };
                }
            </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Abre la conexión con IndexedDB
            var request = window.indexedDB.open("Musity", true);

            request.onerror = function (event) {
                console.log("Error al abrir la base de datos:", event.target.errorCode);
            };

            request.onsuccess = function (event) {
                var db = event.target.result;

                // Abre una transacción y obtiene el almacén de objetos
                var transaction = db.transaction(["opiniones"], "readonly");
                var store = transaction.objectStore("opiniones");

                // Abre un cursor para recorrer los objetos almacenados
                var cursorRequest = store.openCursor();

                cursorRequest.onsuccess = function (event) {
                    var cursor = event.target.result;
                    if (cursor) {
                        // Agrega una fila a la tabla por cada registro
                        agregarFilaATabla(cursor.value);
                        cursor.continue();
                    }
                };

                cursorRequest.onerror = function (event) {
                    console.log("Error al abrir el cursor:", event.target.errorCode);
                };

                // Cierra la transacción
                transaction.oncomplete = function () {
                    db.close();
                };
            };

            function agregarFilaATabla(datos) {
                // Obtiene la referencia de la tabla y del cuerpo
                var tabla = document.getElementById("datosTable");
                var cuerpoTabla = tabla.getElementsByTagName("tbody")[0];

                // Crea una nueva fila y las celdas
                var nuevaFila = cuerpoTabla.insertRow();
                var celdaCorreo = nuevaFila.insertCell(0);
                var celdaNombre = nuevaFila.insertCell(1);
                var celdaOpinion = nuevaFila.insertCell(2);

                // Asigna los valores a las celdas
                celdaCorreo.textContent = datos.correo;
                celdaNombre.textContent = datos.nombre;
                celdaOpinion.textContent = datos.opinion;

                // Muestra la tabla si estaba oculta
                tabla.classList.remove("hidden");
            }
        });
    </script>
            <div class="row">
                <div class="col-lg-12">
                    <div class="icon-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of newsletter -->


    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#bc4ed8;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>Sobre Musity</h4>
                        <p class="p-small">Nos enfocamos en crear soluciones innovadoras y accesibles para los músicos, que les ayuden a expresar su arte y vivir de su pasión en la era digital. Nuestra tecnología les facilita la adaptación y el crecimiento.</p>
                        <p>¡Ven con nosotros y transformemos el mundo con la música!</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Información adicional</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Nuestros colaboradores <a class="white" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Lee nuestros <a class="white" href="terms-conditions.html">Términos y Condiciones</a>, <a class="white" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Contáctanos</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">22 Innovative, San Francisco, CA 94043, US</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white" href="tecnovacion@gmail.com">tecnovacion@gmail.com</a> <i class="fas fa-globe"></i><a class="white" href="#your-link">www.musity.com</a></div>
                            </li>
                        </ul>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2023 <a href="https://inovatik.com">Musity</a><br>
                        Distribuido por <a href="https://themewagon.com" target="_blank">Musity</a>
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/app.js"></script>
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