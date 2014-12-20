'use strict';

/* Page Controller */

var PageController = function($scope, $routeParams, $sce, PageService) {
  PageService.get($routeParams.page).then(function(data) {
      $scope.page = $sce.trustAsHtml(data);
    }, function(error) {
      $scope.page = error;
    }
  );
};

module.exports = PageController;