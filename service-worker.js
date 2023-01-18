var dataCacheName = 'mmsonu_v2';
var cacheName = 'mmsonu_v2';
caches.delete('mmsonu_v1');
var filesToCache = [
  '/',
 "./fonts",
 "./img",
 "./img/icons",
 "./img/icons/icon-72x72.png",
 "./img/icons/icon-96x96.png",
 "./img/icons/icon-128x128.png",
 "./img/icons/icon-144x144.png",
 "./img/icons/icon-152x152.png",
 "./img/icons/icon-192x192.png",
 "./img/icons/icon-256x256.png",
 "./img/icons/icon-384x384.png",
 "./img/icons/icon-512x512.png",
 "./index.html",  "./portfolio.html",  "./contact.html",  "./index.php",
 "./graphic.php",
 "./portfolio.php",
 "./portfolio2.php",
 "./contact.php",
 "./quiz.php",
 "./quiz_question.php",
 "./manifest.json",
 "./css",
 "./css/animation.css",
 "./css/aos.css",
 "./css/style.css",
 "./js",
 "./js/app.js",
 "./js/aos.js",
 "./js/customize.js",
 "./service-worker.js"
];

self.addEventListener('install', function(e) {
  console.log('[ServiceWorker] Install');
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      console.log('[ServiceWorker] Caching app shell');
      return cache.addAll(filesToCache);
    })
  );
});

self.addEventListener('activate', function(e) {
  console.log('[ServiceWorker] Activate');
  e.waitUntil(
    caches.keys().then(function(keyList) {
      return Promise.all(keyList.map(function(key) {
        if (key !== cacheName && key !== dataCacheName) {
          console.log('[ServiceWorker] Removing old cache', key);
          return caches.delete(key);
        }
      }));
    })
  );
  return self.clients.claim();
});

self.addEventListener('fetch', function(e) {
  console.log('[Service Worker] Fetch', e.request.url);
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});