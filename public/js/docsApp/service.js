'use strict';

/* Services */

var docsAppServices = angular.module('docsAppServices', ['ngResource']);

docsAppServices.factory('Page', function($http, $q) {
        return {
                get: function(page) {
                    //Creating a deferred object
                    var deferred = $q.defer();

                    // Calling Web API to fetch shopping cart items
                    $http.get('/page/' + page).success(function(data) {
                        // Passing data to deferred's
                        // resolve function on successful completion
                        deferred.resolve(data);
                    }).error(function() {

                        //Sending a friendly error message in case of failure
                        deferred.reject(':(');
                    });

                    //Returning the promise object
                    return deferred.promise;
                }
            }
    });
