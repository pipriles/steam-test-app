angular.module('steamApp', ['ngRoute', 'ngCookies']) /* Cookies and routes */

.config(function($routeProvider) {

	$routeProvider
	.when('/', {
		templateUrl: '/app/home/index.html',
		controller: 'homeCtrl'
	})
	.otherwise('/');

});
