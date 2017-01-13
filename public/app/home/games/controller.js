angular.module('steamApp')

.controller('gamesCtrl', ['$scope', 'GmService', function ($scope, GmService) {
	GmService.getGames()
		.then(function() {
			$scope.games = GmService.games;
		});
}]);
