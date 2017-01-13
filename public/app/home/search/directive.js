angular.module('steamApp')

.directive('searchBar', [function () {
	return {
		templateUrl: '/app/home/search/index.html',
		restrict: 'E',
		controller: 'gamesCtrl'
	};
}]);
