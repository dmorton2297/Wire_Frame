<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jabil</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="canvasjs.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel = "stylesheet"  type = "text/css"  href = "{{ asset('css/master.css') }}" />
    <link rel = "stylesheet"  type = "text/css"  href = "{{ asset('css/home.css') }}" />
    <link rel = "stylesheet"  type = "text/css"  href = "{{ asset('css/site.css') }}" />
    <link rel = "stylesheet"  type = "text/css"  href = "{{ asset('css/sitegrid.css') }}" />

    

    @yield('head')


</head>


<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-left" href="/"><img src="{{ asset('img/logo.png') }}" id="logo"></a>
        </div>
        <div class="collapse navbar-right navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="#">Support</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sites<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Hanover Park</a></li>
                        <li><a href="#">Chicago</a></li>
                        <li><a href="#">Gurneee</a></li>
                        <li><a href="#">Detroit</a></li>
                        <li><a href="#">London</a></li>
                        <li><a href="#">San Francisco</a></li>
                        <li><a href="#">Atlanta</a></li>
                    </ul>
                </li>

            </ul>
            <div class="time">
                <p id="timeParagraph"><?php echo date('d/m/y h:i:sa')?></p>
            </div>
        </div>
    </div>
</nav>
@yield('content')

<footer>
    <div class="footer">
        <div class="contents">Intelligent Locations LLC</div>
    </div>
</footer>
</body>


</html>
