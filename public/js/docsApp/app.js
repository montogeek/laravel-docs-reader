'use strict';

var docsApp = angular.module('docsApp', ['ngRoute', 'docsAppControllers', 'docsAppServices']);

docsApp.config(['$routeProvider', '$locationProvider', '$httpProvider',
    function($routeProvider, $locationProvider, $httpProvider) {
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest"
        $routeProvider
            .when('/page/:page', {
                templateUrl: app + 'partials/page.html',
                controller: 'PageCtrl'
            }).
            otherwise({
                redirectTo: '/page/introduction'
            });
            $locationProvider.html5Mode(true).hashPrefix('#');
    }]);
