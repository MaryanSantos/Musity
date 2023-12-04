importScripts("js/sw-utils.js");
const CACHE="CACHE-MUSITY";
const CACHE_DINAMICO="CACHE-DINAMICO";
const CACHE_INMUTABLE="CACHE-INMUTABLE";

const APP_SHEL = [
    '/',
    'index.html',
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
    'images/no-img.png',
    'images/luisr.png',
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
    'webfonts/fa-brands-400.woff2'    
];

const APP_SHEL_INMUTABLE = [
    'css/bootstrap.css'
]

self.addEventListener('install', evento => {
    const cacheEstatico = caches.open(CACHE)
        .then(cache=>{
            cache.addAll(APP_SHEL);
        });
    const cacheInmutable = caches.open(CACHE_INMUTABLE)
        .then(cache =>{
            cache.addAll(APP_SHEL_INMUTABLE);
        });    
        evento.waitUntil(Promise.all([cacheEstatico, cacheInmutable]));
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