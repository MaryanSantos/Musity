const CACHE = 'CACHE-MUSITY';
const CACHE_DINAMICO = 'DIMANICO-MUSITY';
const CACHE_INMUTABLE = 'INMUTABLE-MUSITY';

self.addEventListener('install', evento => {
    const promesa = caches.open(CACHE)
        .then(cache => {
            return cache.addAll([
                '/',
                'manifest.json',
                'css/stylesOFFLINE.css',
                'css/bootstrap.css',
                'css/fontawesome-all.css',
                'css/magnific-popup.css',
                'css/styles.css',
                'css/stylesUsuarios_2.css',
                'css/stylesUsuarios.css',
                'css/swiper.css',
                'css/UsersStyles.css',
                'assets/img/bg-masthead.jpg',
                'images/SI.svg',
                'images/V2.svg',
                'images/V3.svg',
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
                'images/no-img.png',
                'images/luisr.png',
                'images/details-lightbox1.png',
                'images/details-lightbox2.svg',
                'images/fav_musity.png',
                'images/logo_musity.svg',
                'images/logo3_musity.svg',
                'images/mision.png',
                'images/testimonial-1.jpg',
                'images/testimonial-2.jpg',
                'images/testimonial-3.jpg',
                'images/testimonial-4.jpg',
                'images/valores.png',
                'images/video-image.png',
                'images/vision.png',
                'images/up-arrow.png',
                'index.php',
                'js/app.js',
                'offline.html',
                'js/bootstrap.min.js',
                'js/jquery.easing.min.js',
                'js/jquery.magnific-popup.js',
                'js/jquery.min.js',
                'js/popper.min.js',
                'js/scripts.js',
                'js/swiper.min.js',
                'js/validator.min.js',
                'webfonts/fa-brands-400.woff2',
                'webfonts/fa-solid-900.woff2'
            ]);
        });

    const cacheInmutable = caches.open(CACHE_INMUTABLE)
        .then(cache => {
            cache.add('css/bootstrap.css');
        });

    evento.waitUntil(Promise.all([promesa, cacheInmutable]));
});

self.addEventListener('activate', evento => {
    const respuesta = caches.keys().then(keys => {
        keys.forEach(key => {
            if (key !== CACHE && key.includes('cache')) {
                return caches.delete(key);
            }
        });
    });
    evento.waitUntil(respuesta);
});

self.addEventListener('fetch', evento => {
    const respuesta = caches.match(evento.request)
        .then(res => {
            if (res) {
                return res;
            }

            console.log('No existe', evento.request.url);

            return fetch(evento.request)
                .then(resWeb => {
                    if (evento.request.url.includes('/images/luisr.png')) {
                        // Si la solicitud es para la imagen "luisr.png" (ósea la imagen que elegí) y no está en caché,
                        // se devuelve la imagen de reemplazo ("/images/no-img.jpg").
                        return caches.open(CACHE_DINAMICO)
                            .then(cache => {
                                cache.put(evento.request, resWeb.clone());
                                limpiarCache(CACHE_DINAMICO, 100);
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
                                limpiarCache(CACHE_DINAMICO, 100);
                            });
                        return resWeb.clone();
                    }
                })
                .catch(error => {
                    console.error('Error al obtener la respuesta de la red:', error);
                    if (evento.request.headers.get('accept').includes('text/html')) {
                        return caches.match('offline.html');
                    } else if (evento.request.headers.get('accept').includes('image')) {
                        return caches.match('images/no-img.png');
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

//La razón por la cuál se eligió la estrategia anterior fué por que es la que más se adapta a la implemetación de los 
//requerimientos que se solicitarón.

//La ventaja es que puede almacenar información para posteriormente mostrarla sin la necesidad de tener conexión a internet

//La desventaja es que tiene muy límitado la cantidad de archivos que se pueden almacenar en la memoria CACHE Dinamica.