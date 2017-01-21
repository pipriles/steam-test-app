angular.module('steamApp')

.controller('gamesCtrl', ['$scope', 'GmService', function ($scope, GmService) {

	/* I should use "this" */
	var page = 0;

	$scope.someGames = [];

	/* Not sure if this should be here */
	$scope.incPage = function() {
		if (page < GmService.filtered.length) {
			page += 1;
			$scope.someGames = GmService.filtered.slice(page, page + 8);
		}
		console.log($scope.someGames);
	};

	$scope.decPage = function() {
		if (page > 0) {
			page -= 1;
			$scope.someGames = GmService.filtered.slice(page, page + 8);
		}
	};

	GmService.getGames()
		.then(function() {
			$scope.someGames = GmService.games;
		});

	$scope.$on('searchGames', function(event, filter) {
		GmService.filterGames(filter);
		$scope.someGames = GmService.filtered;
		page = 0;
	});

}]);
