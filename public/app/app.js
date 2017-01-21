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
