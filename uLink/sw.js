/* NB: All the Cache Storage API return promises */

const staticCacheName = "site-static-v2";
const dynamicCacheName = "site-dynamic-v1";
const assets = [
    "./",
    "./index.php",
    "./fallback.php",
    "https://ulinkserver.com/images/favicon.ico",
    "https://ulinkserver.com/fonts/fonts.css",
    "https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;700&display=swap",
    "https://ulinkserver.com/scss/main.css",
    "https://ulinkserver.com/fontawesome-free-5.15.4-web/css/all.min.css",
    "https://ulinkserver.com/js/app.js",
    "https://ulinkserver.com/js/header-stu.js"
];

// install service worker
self.addEventListener("install", evt => {
    // console.log("Service worker has been installed");
    evt.waitUntil(
        caches.open(staticCacheName)
        .then(cache => {
            console.log("caching shell assets");
            cache.addAll(assets);
        })
    );
});

// activate event
self.addEventListener("activate", evt => {
    // console.log("Service worker has been activated");
    /* if we were to change a static resource, we need to change the name of the static cache AND remove the old ones in order for the browser to know which cache to use */
    evt.waitUntil(
        caches.keys()
        .then(keys => {
            console.log(keys); // array of strings corresponding to the caches names
            return Promise.all(keys // once all of the promises inside of the parentheses get resolved, the Promise.all promise gets resolved
                .filter(key => key !== staticCacheName && key !== dynamicCacheName) // if the value of the key is not equal to an existing cache name, we keep inside the keys array and return the latter...
                .map(key => caches.delete(key)) // ...in order to remove all of the old keys from the cache
            )
        })
    )
});

// fetch event
self.addEventListener("fetch", evt => {
    // console.log("Fetch event", evt);
    evt.respondWith(
        caches.match(evt.request)
        .then(cacheRes => { // look to see if we have it in cache
            /* returns the data in the cache or, if it doesn't match anything in there, forwards the request to the server and put it in our cache */
            return cacheRes || fetch(evt.request).then(fetchRes => {
                return caches.open(dynamicCacheName).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            })
        })
        .catch(() => {
            if (evt.request.url.indexOf(".html") != -1) // in case the file that is requested is not an html file, we just let a blank (for an image for example)
            {
                return caches.match("./fallback.php");
            }
        }) // if there is no connexion nor page in cache either, we redirect the user to our fallback page
    );
});