angular.module('steamApp')

.controller('searchCtrl', ['$scope', function ($scope) {
	$scope.searchValue = '';
	$scope.searchGames = function() {
		$scope.$parent.$broadcast('searchGames', $scope.searchValue);
	};
}]);
