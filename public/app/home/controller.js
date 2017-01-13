angular.module('steamApp')

.controller('homeCtrl', ['$scope', '$log', function($scope, $log) {

	/* Manipulate cookies or something */
	$scope.username = 'pipriles';
	$scope.token = {
		'jwt': localStorage.jwt,
		'jwtMax': 50,
		'jwtLimit': 50
	}

	$scope.showToken = function() {
		var size = $scope.token.jwtLimit;
		$log.debug(localStorage.jwt);
		$scope.token.jwtLimit = (size == 0) ? $scope.token.jwt.length : 0;
	};

}]);
