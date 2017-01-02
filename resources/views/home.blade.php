<!DOCTYPE html>
<html>
<head>
	<title>Steam app</title>
</head>
<body ng-app="steamApp">

	<div ng-view>
		<h6>Loading</h6>
	</div>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-route.min.js"></script>

	<!-- Maybe would not be used -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-cookies.min.js"></script>
	<!-- END -->

	<!-- Steam App -->
	<script type="text/javascript" src="{{ url('/app/app.js') }}"></script>
	<script type="text/javascript" src="{{ url('/app/home/controller.js') }}"></script>
	<!-- END -->
</body>
</html>