'use strict';

var docsApp = angular.module('docsApp', ['ngRoute', 'docsAppControllers', 'docsAppServices']);

docsApp.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
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

docsApp.directive('page', function() {
    return {
        restrict: 'E',
        replace: true,
        template: function(tElement, tAttrs) {
            var isClickable = angular.isDefined(tAttrs.isClickable) && eval(tAttrs.isClickable) === true ? true : false;

            var clickAttr = isClickable ? 'ng-click="onHandleClick()"' : '';

            return '<div ' + clickAttr + ' ng-transclude></div>';
        },
        transclude: true,
        link: function(scope, element, attrs) {
            scope.onHandleClick = function() {
                console.log('onHandleClick');
            };
        }
    };
});
