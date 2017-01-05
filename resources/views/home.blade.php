<!DOCTYPE html>
<html ng-app="steamApp">
<head>
	<title>Steam app</title>
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/w3.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/cover.css') }}">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>

	<ng-view>
		<p>Loading</p>
	</ng-view>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-route.min.js"></script>

	<!-- Maybe would not be used -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-css/1.0.8/angular-css.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-cookies.min.js"></script>
	<!-- END -->

	<!-- Steam App -->
	<script type="text/javascript" src="{{ url('/app/app.js') }}"></script>
	<script type="text/javascript" src="{{ url('/app/home/controller.js') }}"></script>
	<script type="text/javascript" src="{{ url('/app/cover/controller.js') }}"></script>
	<!-- END -->
</body>
</html>