angular.module('steamApp')

.controller('coverCtrl', ['$scope', '$location', function($scope, $location) {

	$scope.handlePopup = function(token) {
		$scope.$apply(function() {
			localStorage.setItem('jwt', token);
			$location.path('/home');
		});
	}

	$scope.initAuth = function() {

		// Window configuration
		var conf = [];
		conf.push('width='  + 800);
		conf.push('height=' + 600);
		conf.push('left='   + (screen.width  - 800) / 2);
		conf.push('top='    + (screen.height - 600) / 2);

		var params = conf.join();
		var urlPath = '/auth';

		window.$scope = $scope;
		window.open(urlPath, 'Steam', params);
	}

}]);
