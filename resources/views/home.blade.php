<!DOCTYPE html>
<html>
<head>
	<title>Steam App</title>
</head>
<body ng-app="steamApp">

	<div ng-view>
		<span>Loading...</span>
	</div>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-cookies.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-route.min.js"></script>
	<script type="text/javascript" src="{{ url('/app/app.js') }}"></script>
	<script type="text/javascript" src="{{ url('/app/profile/controller.js') }}"></script>
</body>
</html>