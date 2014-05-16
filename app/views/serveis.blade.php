@extends('plantilla_background')
@section('content')

{{ HTML::style("../app/views/css/serveis.css") }}

<?php // Variables de la vista
$num_localitzacions = 5;
$num_categories = 5;
?>


<div id="content-central">

	<div id="llistar-per-localitzacio" class="btn-group">
	  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
	 	Serveis per localització <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
	  	@for ($j = 0; $j < $num_localitzacions; $j++)
	    	<li><a href="#">Localització {{ $j }}</a></li>
	    @endfor
	  </ul>
	</div>

	<div id="llistar-per-categoria" class="btn-group">
	  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
	 	Serveis per categoria<span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
	  	@for ($j = 0; $j < $num_categories; $j++) 
	    	<li><a href="#">Categoria {{ $j }}</a></li>
	    @endfor
	  </ul>
	</div>


</div>

@stop