@extends('layouts.galeria')

@section('gallerytitle')
	Galería REYES Salón Cantina Guadalajara
@stop

@section('content')
	<section>	
		<div class="outer">
			<div class="inner">
				<div class="carouselcontainer" id="carouselcontainer" data-ride="carousel">
					<ol class="carousel-indicators" style="display:none">
						<li data-target="#carouselcontainer" data-slide-to="0" class="active"></li>
						<li data-target="#carouselcontainer" data-slide-to="1"></li>
						<li data-target="#carouselcontainer" data-slide-to="2"></li>
						<li data-target="#carouselcontainer" data-slide-to="3"></li>
						<li data-target="#carouselcontainer" data-slide-to="4"></li>
						<li data-target="#carouselcontainer" data-slide-to="5"></li>
						<li data-target="#carouselcontainer" data-slide-to="6"></li>
						<li data-target="#carouselcontainer" data-slide-to="7"></li>
						<li data-target="#carouselcontainer" data-slide-to="8"></li>
						<li data-target="#carouselcontainer" data-slide-to="9"></li>
						<li data-target="#carouselcontainer" data-slide-to="10"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active"><img src="images/gdl01.png" alt="REYES Salón Cantina 01"></div>
						<div class="item"><img src="images/gdl02.png" alt="REYES Salón Cantina 02"></div>
						<div class="item"><img src="images/gdl03.png" alt="REYES Salón Cantina 03"></div>
						<div class="item"><img src="images/gdl04.png" alt="REYES Salón Cantina 04"></div>
						<div class="item"><img src="images/gdl05.png" alt="REYES Salón Cantina 05"></div>
						<div class="item"><img src="images/gdl06.png" alt="REYES Salón Cantina 06"></div>
						<div class="item"><img src="images/gdl07.png" alt="REYES Salón Cantina 07"></div>
						<div class="item"><img src="images/gdl08.png" alt="REYES Salón Cantina 08"></div>
						<div class="item"><img src="images/gdl09.png" alt="REYES Salón Cantina 09"></div>
						<div class="item"><img src="images/gdl10.png" alt="REYES Salón Cantina 10"></div>
					</div>
					{{-- <a class="left carousel-control" href="#carouselcontainer" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carouselcontainer" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a> --}}
				</div>
			</div>
		</div>
	</section>

	<div class="redes-galeria">
		<ul class="social-icons">
			<li><a href="https://instagram.com/reyescantina" target="_blank" class="icon-instagram"></a></li>
			<li><a href="https://www.facebook.com/ReyesSalonCantina" target="_blank" class="icon-facebook"></a></li>
			<li><a href="https://twitter.com/reyescantina" target="_blank" class="icon-twitter"></a></li>
		</ul>
	</div>
	<footer class="galeria">
		Av. Real Acueducto 4851 <br>
		Col. Real Acueducto <br>
		Zapopan, Jalisco. <br>
		Reservaciones: 33·3499·1859 <br>
		Horario: M-I 14:00-2:00  <br>
		J-S 14:00-3:00 <br>
	</footer>
@stop