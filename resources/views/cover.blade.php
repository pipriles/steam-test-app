<!DOCTYPE html>
<html>
<head>
    <title>Steam App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/w3.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style type="text/css">

    body, h1   { font-family: "Raleway", sans-serif }
    body, html { height: 100% }
    .bgimg {
        min-height: 100%;
        background-image: url('/assets/img/background.jpg');
        background-position: center;
        background-size: cover;
    }

    .log-in-url {
        text-decoration: none;
    }

    #log-in-url:hover {
        text-decoration: none;
        color: #cccccc;
    }

    </style>
</head>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
    <div class="w3-display-topleft w3-padding-large w3-xlarge">
        Steam
    </div>
    <div class="w3-display-middle">
        <h1 class="w3-center w3-jumbo w3-animate-top"><a class="log-in-url" href="{{ url('/auth') }}">Log in</a></h1>
        <hr class="w3-border-grey" style="margin:auto;width:40%">
        <p class="w3-large w3-center">This site not associated with Valve Corp.</p>
    </div>
    <div class="w3-display-bottommiddle w3-padding-large">
        <em>"Esto es arrechisimo"</em> - Victor
    </div>
</div>

</body>
</html>
