<!DOCTYPE html>
<html ng-app="steamApp">
<head>
	<title>Steam app</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/w3.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/app.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>

	<!-- A cool navbar here -->
	<!-- -->

	<div class="steam-bg w3-display-container w3-animate-opacity w3-text-white">
		<div class="w3-padding-large w3-xlarge"
		style="float: left;">
			Steam
		</div>

		<!-- Content -->
		<ng-view></ng-view>

		<div class="w3-display-bottommiddle w3-padding-large">
	        <em>"Esto es arrechisimo"</em> - Victor
	    </div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-route.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.min.js"></script>

	<!-- Maybe would not be used -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-css/1.0.8/angular-css.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-cookies.min.js"></script>
	<!-- END -->

	<!-- Steam App -->
	<script type="text/javascript" src="{{ url('/dist/app.js') }}"></script>
	<!-- END -->
</body>
</html>
