var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/offline',
    '/src/css/base.css',
    '/src/js/app/theme-min.js',
    '/src/js/app/lang-min.js',
    '/src/js/app/nav-min.js',
    '/src/js/app/auth/app-min.js',
    '/src/js/modules/components/components-min.js',
    '/src/js/modules/components/utils-min.js',
    '/src/js/modules/validations/utils-min.js',
    '/src/js/modules/validations/login-min.js',
    '/src/js/modules/validator/validator-min.js',
    '/images/icons/icon-72x72.png',
    '/images/icons/icon-96x96.png',
    '/images/icons/icon-128x128.png',
    '/images/icons/icon-144x144.png',
    '/images/icons/icon-152x152.png',
    '/images/icons/icon-192x192.png',
    '/images/icons/icon-384x384.png',
    '/images/icons/icon-512x512.png',
    '/images/screenshots/screenshot.png',
    '/images/screenshots/screenshot-2.png',
];
var domain = 'http://127.0.0.1:8000';

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
            .catch(console.log)
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});

// Sync
self.addEventListener('sync', event => {
    if (event.tag === 'sync-tag') {
        event.waitUntil(
            console.log('Synchronization performed')
        );
    }
});

// Push event for push notifications
self.addEventListener('push', event => {
    try {
        const data = event.data.json();

        if (Notification.permission !== 'granted') {
            console.log('Permission not granted to send a notification');
            return;
        }

        self.registration.showNotification(data.title, {
            body: data.body,
            icon: '/images/icons/icon-192x192.png',
        });
    } catch (error) {
        console.log(error);
    }
});

// Notification click
self.addEventListener('notificationclick', event => {
    event.notification.close();

    event.waitUntil(
        clients.openWindow(domain)
    );
});

// Periodic sync
self.addEventListener('periodicsync', event => {
    if (event.tag === 'sync-tag') {
        event.waitUntil(
            console.log('Synchronization performed')
        );
    }
});

// Message
self.addEventListener('message', event => {
    if (event.data.action === 'skipWaiting') {
        self.skipWaiting();
    }

    if (event.data.action === 'refresh') {
        self.clients.matchAll().then(clients => {
            clients.forEach(client => {
                client.postMessage({ action: 'skipWaiting' });
            });
        });
    }
});
