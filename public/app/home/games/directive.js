angular.module('steamApp')

.directive('gamesGallery', [function () {

	return {
		templateUrl: '/app/home/games/index.html',
		restrict: 'E',
		controller: 'gamesCtrl'
		/*
		controller: function($scope, $element, $attrs, $transclude, otherInjectables) {

		}*/
	};
}]);
