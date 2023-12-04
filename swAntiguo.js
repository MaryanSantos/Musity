

// Indicamos que durante el proceso de instalación
self.addEventListener('install', evento => {
    /* Promesa que crea el proceso de creación del espacio
    en la caché y agrega los archivos necesarios para cargar nuestra
    aplicación */
    const promesa = caches.open('Caché Musity')
      .then(cache => {
        return cache.addAll([
          '/',
          'css/bootstrap.css',
          'css/fontawesome-all.css',
          'css/magnific-popup.css',
          'css/styles.css',
          'css/swiper.css',
          'images/Logo_01.png',
          'images/banda_1.png',
          'images/banda_2.png',
          'images/banda_3.png',
          'images/banda_4.png',
          'images/banda_5.png',
          'images/banda_6.png',
          'images/beneficiom1.png',
          'images/beneficiom2.png',
          'images/beneficiom3.png',
          'images/beneficiosC.png',
          'images/bg_04.jpg',
          'images/details-lightbox.png',
          'images/fav_musity.png',
          'images/logo_musity.svg',
          'images/mision.png',
          'images/testimonial-1.jpg',
          'images/testimonial-2.jpg',
          'images/testimonial-3.jpg',
          'images/testimonial-4.jpg',
          'images/valores.png',
          'images/video-image.png',
          'images/vision.png',
          'index.html',
          'js/app.js',
          'js/bootstrap.min.js',
          'js/jquery.easing.min.js',
          'js/jquery.magnific-popup.js',
          'js/jquery.min.js',
          'js/popper.min.js',
          'js/scripts.js',
          'js/swiper.min.js',
          'js/validator.min.js',
          'offline.html',
          'webfonts/fa-brands-400.woff2'
  
        ]);
      });
    // Indicamos que la instalación espere hasta que la promesa se cumpla
    evento.waitUntil(promesa);
  });
  
  self.addEventListener('fetch', evento =>{
    // COMIENZO DE ESTRATEGIA 1 CACHE ONLY
    /*busca en el dominio del almacenamiento cache el archivo que coincide
    con la petición que hace nuestro sitio, es decir, siempre regresaremos
    como respuesta el archivo de cache */
   // evento.respondWith(caches.match(evento.request));

    //FINAL DE ESTRATEGIA 1
    
    //COMIENZO DE ESTRATEGIA 2
    const respuesta=caches.match(evento.request)
    .then(res=>{
    //si el archivo existe en cache retornarlo
    if (res) return res;
    //si no existe deberá ir a la web
    //Imprimos en consola para saber que no se encontro en cache
    console.log('No existe', evento.request.url);
    //Procesamos la respuesta a la petición localizada en la web
    return fetch(evento.request)
    .then(resWeb=>{//el archivo recuperado se almacena en resWeb
    //se abre nuestro cache
    caches.open("Caché Musity")
    .then(cache=>{
    //se sube el archivo descargado de la web
    cache.put(evento.request,resWeb);
    })
    //se retorna el archivo recuperado para visualizar la página
    return resWeb.clone();
    });
    });
    evento.respondWith(respuesta);
    });
  
  //
  self.addEventListener('fetch', evento => {
    const respuesta = caches.match(evento.request)
        .then(res => {
            if (res) {
              actualizaCacheStatico( CACHE, evento.request, APP_SHEL_INMUTABLE);
                return res;
            } else{
              return fetch(evento.request)
                .then(resWeb =>{
                  return actualizaCacheDinamico (CACHE_DINAMICO, evento.request, resWeb);
                });
            }


            return fetch(evento.request)
                .then(resWeb => {
                    if (evento.request.url.includes('/images/luisr.png')) {
                        // Si la solicitud es para la imagen "luisr.png" (ósea la imagen que elegí) y no está en caché,
                        // se devuelve la imagen de reemplazo ("/images/no-img.jpg").
                        return caches.open(CACHE_DINAMICO)
                            .then(cache => {
                                cache.put(evento.request, resWeb.clone());
                                limpiarCache(CACHE_DINAMICO, 5);
                                return resWeb.clone();
                            })
                            .catch(error => {
                                console.error('Error al agregar la imagen de reemplazo a la caché:', error);
                                return resWeb.clone();
                            });
                    } else {
                        // Si la solicitud no es para "luisr.png" (ósea la imagen que elegí), se almacena en caché dinámico.
                        caches.open(CACHE_DINAMICO)
                            .then(cache => {
                                cache.put(evento.request, resWeb.clone());
                                limpiarCache(CACHE_DINAMICO, 5);
                            });
                        return resWeb.clone();
                    }
                })
                .catch(error => {
                    console.error('Error al obtener la respuesta de la red:', error);
                    if (evento.request.headers.get('accept').includes('text/html')) {
                        return caches.match('/offline.html');
                    } else if (evento.request.headers.get('accept').includes('image')) {
                        return caches.match('/images/no-img.png');
                    }
                });
        });

    evento.respondWith(respuesta);
});

function limpiarCache(nombreCache, numeroItems) {
    caches.open(nombreCache)
        .then(cache => {
            return cache.keys()
                .then(keys => {
                    if (keys.length > numeroItems) {
                        cache.delete(keys[0])
                            .then(() => limpiarCache(nombreCache, numeroItems));
                    }
                });
        });
}