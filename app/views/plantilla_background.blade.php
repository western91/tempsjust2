<!DOCTYPE html>

<html>
	<head>
		<title>Pàgina d'inici</title>
		<meta charset="utf-8">
		<script src="../app/views/js/jquery-1.10.2.js"></script>
		<link href="../app/views/css/bootstrap.min.css" rel="stylesheet">
		<link href="../app/views/css/bootstrap-theme.min.css" rel="stylesheet">
		<script src="../app/views/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="../app/views/js/carousel.js"></script>
		{{ HTML::style("../app/views/css/custom.css") }}
		{{ HTML::style("../app/views/css/3-col-portfolio.css") }}
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>

		<header class="top-header">
			<div id="logo" class="pull-left"></div>
			<div class="pull-right"><span class="glyphicon glyphicon-search"></span>Login</div>
		</header>

		<nav class="navbar navbar-default navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href={{ URL::to('/') }}>Inici</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#funciona">Com funciona?</a>
                    </li>
                    <li><a href="#services">Services</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                    <li><a href="#faq">FAQ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



		<div id="principal-centre">
			@yield('content')
		</div>

		<footer>Dades M3V</footer>
	</body>

</html>