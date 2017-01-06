angular.module('steamApp', ['ngRoute', 'angularCSS']) /* Cookies and routes */

.config(function($routeProvider) {

	$routeProvider
	.when('/', {
		templateUrl: '/app/cover/index.html',
		controller: 'coverCtrl',
		css: '/assets/css/cover.css'
	})
	.when('/home', {
		templateUrl: '/app/home/index.html',
		controller: 'homeCtrl'
	})
	.otherwise('/');

});
