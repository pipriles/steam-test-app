angular.module('steamApp')

.service('GmService', ['$http', '$log', function ($http, $log) {
	var srv = this;
	srv.games = [];
	srv.filtered = srv.games;
	srv.getGames = function() {
		return $http.get('/data/games.json')

			.then(function(resp) {
				/* Should i put all in this object ? */
				srv.filtered = srv.games = resp.data;
				srv.cachedGames = srv.games.map(function(currentValue) {
					return currentValue.title.replace(/\W+/i, '');
				});	/* These are for optimize the regex lookup */

			}, function(resp) {
				$log.warn('Error Http in Games Services!');
			});
	};
	srv.filterGames = function(search) {

		if (!search || !srv.games.length) {
			srv.filtered = srv.games;
			return;
		}

		var i, match, games = srv.games;
		var keywords = search.split(/\W+/).filter(Boolean);
		var regex = new RegExp(keywords.join('|'), 'i');
		var results = [];

		$log.debug(regex);
		for (var i=0; i < games.length; i++) {

			if (!(match = ((srv.cachedGames[i].match(regex) || []).length)))
				continue;

			results.push({
				'gameRef': games[i],
				'matches': match
			});
		}
		results.sort(function(a, b) {
			return -(a.matches - b.matches);
		});

		srv.filtered = results.map(function(currentValue) {
			return currentValue.gameRef;
		});
	}
}]);
