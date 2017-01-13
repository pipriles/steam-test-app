angular.module('steamApp', ['ngRoute', 'ngAnimate']) /* Cookies and routes */

/**
 * Summary filter
 * Makes a "summary" from a string
 */
.filter('summary', function() {
	return function(str, limit, end) {
		limit = parseInt(limit, 10);
		if (str && str.length > limit) 
			return str.substr(0, limit) + (end || '...');
		else
			return str;
	}
})

.config(function($routeProvider) {

	$routeProvider
	.when('/', {
		templateUrl: '/app/cover/index.html',
		controller: 'coverCtrl'
	})
	.when('/home', {
		templateUrl: '/app/home/index.html',
		controller: 'homeCtrl'
	})
	.otherwise('/');

});

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

angular.module('steamApp')

.controller('gamesCtrl', ['$scope', 'GmService', function ($scope, GmService) {
	GmService.getGames()
		.then(function() {
			$scope.games = GmService.games;
		});
}]);

angular.module('steamApp')

.directive('gamesGallery', [function () {
	return {
		templateUrl: '/app/home/games/index.html',
		restrict: 'E'
		/*
		controller: function($scope, $element, $attrs, $transclude, otherInjectables) {

		}*/
	};
}]);

angular.module('steamApp')

.service('GmService', ['$http', '$log', function ($http, $log) {
	var srv = this;
	srv.games = [];
	srv.getGames = function() {
		return $http.get('/data/games.json')
			.then(function(resp) {
				srv.games = resp.data;
			}, function(resp) {
				$log.warn('Error! in Games Services');
			});
	};
}]);
angular.module('steamApp')

.directive('searchBar', [function () {
	return {
		templateUrl: '/app/home/search/index.html',
		restrict: 'E',
		controller: 'gamesCtrl'
	};
}]);
