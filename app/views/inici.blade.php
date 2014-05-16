@extends('plantilla_background')
@section('content')

    <!--nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://startbootstrap.com">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling ->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#about">About</a>
                    </li>
                    <li><a href="#services">Services</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse ->
        </div>
        <!-- /.container ->
    </nav-->

    <div id="content-central" class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">3 Col Portfolio
                    <small>Showcase Your Work</small>
                </h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 portfolio-item">
                    <div id="slider_serveis"><img class="img-responsive" src="http://placehold.it/700x400"></div>
                </div>
                <div class="col-md-4 portfolio-item">
                    <div class="thumbnail-servei-lateral"><img class="img-responsive" src="http://placehold.it/700x400"></div>
                    <div class="thumbnail-servei-lateral"><img class="img-responsive" src="http://placehold.it/700x400"></div>
                </div>
            </div>
        </div>

        <div class="container">

        @for ($j = 0; $j < 5; $j++) {{-- Columnes --}}
            <div class="row">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col-md-4 portfolio-item">
                        <div class="thumbnail-servei-sota"><img class="img-responsive" src="http://placehold.it/700x400"></div>
                    </div>
                @endfor  
            </div>
        @endfor
        </div>
    </div>

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    {{ HTML::script("../app/views/js/jquery-1.10.2.js") }}
    {{ HTML::script("../app/views/js/bootstrap.js") }}

@stop