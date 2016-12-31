angular.module('steamApp', ['ngRoute', 'ngCookies']) /* Cookies and routes */

.config(function($routeProvider) {

	$routeProvider
	.when('/', {
		templateUrl: '/app/profile/index.html',
		controller: 'profileCtrl'
	})
	.otherwise('/');
});
