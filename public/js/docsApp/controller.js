'use strict';

/* Controllers */

var docsAppControllers = angular.module('docsAppControllers', []);

docsAppControllers.controller('PageCtrl', ['$scope', '$routeParams', '$sce', 'Page',
    function($scope, $routeParams, $sce, Page) {
        Page.get($routeParams.page).then(function(data) {
            $scope.page = $sce.trustAsHtml(data);
        }, function(error) {
            $scope.page = error;
        });
    }]);