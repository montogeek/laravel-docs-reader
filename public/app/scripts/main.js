'use strict';

var angular = require('angular');
            require('angular-route');

var PageController = require('./PageController'),
    PageService = require('./PageService');

var docsApp = angular.module('docsApp', ['ngRoute']);

docsApp.config(['$routeProvider', '$locationProvider', '$httpProvider',
    function($routeProvider, $locationProvider, $httpProvider) {
        $httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        $routeProvider
            .when('/page/:page', {
                templateUrl: './partials/page.html',
                controller: 'PageController'
            }).
            otherwise({
                redirectTo: '/page/introduction'
            });
            $locationProvider.html5Mode({
              enabled: true,
              requireBase: false
            }).hashPrefix('#');
    }]);

docsApp.factory('PageService', ['$http', '$q', PageService]);
docsApp.controller('PageController', ['$scope', '$routeParams', '$sce', 'PageService', PageController]);