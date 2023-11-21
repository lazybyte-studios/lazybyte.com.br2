// gera o cache 
// aqui é só adicionar os caches
const CACHE_NAME = 'V0';

const STATIC_CACHE_URLS = [
  '/',
  '/index.html'
];

/*
self.addEventListener('activate', (event) => {
  const currentCacheVersion = CACHE_NAME; 
  const cacheWhitelist = [currentCacheVersion];

  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (!cacheWhitelist.includes(cacheName)) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});*/

self.addEventListener('install', event => {
  console.log('Service Worker installing.');
  event.waitUntil(
    caches.open(CACHE_NAME)
    .then(cache => cache.addAll(STATIC_CACHE_URLS))  
  )
});

self.addEventListener('activate', event => {
  console.log('Service Worker activating.');
  // delete any unexpected caches
  event.waitUntil(
    caches.keys()
    .then(keys => keys.filter(key => key !== CACHE_NAME))
    .then(keys => Promise.all(keys.map(key => {
        console.log(`Deleting cache ${key}`);
        return caches.delete(key)
    })))
  );
});

if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('_sw.js').then(registration => {
    registration.update(); // Isso força a atualização do Service Worker
  });
}

self.addEventListener('fetch', event => {
    // Cache-First Strategy 
    event.respondWith(
      caches.match(event.request) // check if the request has already been cached
      .then(cached => cached || fetch(event.request)) // otherwise request network
    );
});

