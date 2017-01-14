angular.module('steamApp')

.controller('gamesCtrl', ['$scope', 'GmService', function ($scope, GmService) {
	
	GmService.getGames()
		.then(function() {
			$scope.games = GmService.games;
		});

	$scope.$on('searchGames', function(event, filter) {
		$scope.games = GmService.filterGames(filter);
	});

}]);
