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