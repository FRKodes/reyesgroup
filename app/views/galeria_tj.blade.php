@extends('layouts.galeria')

@section('gallerytitle')
	Galería REYES Salón Cantina Tijuana
@stop

@section('content')
	<section>	
		<div class="outer">
			<div class="inner">
				<div class="carouselcontainer" id="carouselcontainer" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active"><img src="images/tj01.png" alt="REYES Salón Cantina 01"></div>
						<div class="item"><img src="images/tj02.png" alt="REYES Salón Cantina 02"></div>
						<div class="item"><img src="images/tj03.png" alt="REYES Salón Cantina 03"></div>
						<div class="item"><img src="images/tj04.png" alt="REYES Salón Cantina 04"></div>
						<div class="item"><img src="images/tj05.png" alt="REYES Salón Cantina 05"></div>
						<div class="item"><img src="images/tj06.png" alt="REYES Salón Cantina 06"></div>
						<div class="item"><img src="images/tj07.png" alt="REYES Salón Cantina 07"></div>
						<div class="item"><img src="images/tj08.png" alt="REYES Salón Cantina 08"></div>
						<div class="item"><img src="images/tj09.png" alt="REYES Salón Cantina 09"></div>
						<div class="item"><img src="images/tj10.png" alt="REYES Salón Cantina 10"></div>
						<div class="item"><img src="images/tj11.png" alt="REYES Salón Cantina 11"></div>
						<div class="item"><img src="images/tj12.png" alt="REYES Salón Cantina 12"></div>
						<div class="item"><img src="images/tj13.png" alt="REYES Salón Cantina 13"></div>
						<div class="item"><img src="images/tj14.png" alt="REYES Salón Cantina 14"></div>
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
		</div>
	</section>
	<div class="redes-galeria">
		<ul class="social-icons">
			<li><a href="https://instagram.com/reyescantina_tj" target="_blank" class="icon-instagram"></a></li>
			<li><a href="https://www.facebook.com/reyesCantinaTJ" target="_blank" class="icon-facebook"></a></li>		
		</ul>
	</div>
	<footer class="galeria">
		Blvd. Aguacaliente 4501-B<br>
		Col. Aviación<br>
		Tijuana, B.C.<br>
		Reservaciones: 664·3678·932<br>
		Horario: M-S 14:00-3:00<br>
	</footer>
@stop