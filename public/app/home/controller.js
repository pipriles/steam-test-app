angular.module('steamApp')

.controller('homeCtrl', ['$scope', function($scope) {

	/* Manipulate cookies or something */
	$scope.username = 'pipriles';
	$scope.jwt = localStorage.jwt;
	
}]);
