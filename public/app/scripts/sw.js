'use strict';

importScripts('/serviceworker-cache-polyfill.js');

var CACHE_NAME = 'laraveldocsreader';
var CACHE_VERSION = '0.0.5';
var urlsToCache = ['/',
    '/styles/main.min.css',
    '/images/arrow.svg'
  ];

this.addEventListener('install', function(eve) {
    var urls = urlsToCache.map(function(url) {
        return new Request(url, {
            credentials: 'include'
        });
    });
    eve.waitUntil(caches.open(CACHE_NAME + '-v' + CACHE_VERSION).then(function(cache) {
        return cache.addAll(urls);
    }));
});

this.addEventListener('activate', function(eve) {
    var currentCacheName = CACHE_NAME + '-v' + CACHE_VERSION;
    caches.keys().then(function(cacheNames) {
        return Promise.all(cacheNames.map(function(cacheName) {
            if (cacheName != currentCacheName) {
                return caches.delete(cacheName);
            }
        }));
    });
});

this.addEventListener('fetch', function(eve) {
    var request = eve.request;
    var url = new URL(request.url);
    eve.respondWith(caches.match(request).then(function(response) {
        return response || fetch(request);
    }));
});