@extends('layouts.galeria')

@section('gallerytitle')
	Galería REYES Salón Cantina Aguascalientes
@stop

@section('content')
	<section>	
		<div class="outer">
			<div class="inner">
				<div class="carouselcontainer" id="carouselcontainer" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active"><img src="images/ags01.jpg" alt="REYES Salón Cantina 01"></div>
						<div class="item"><img src="images/ags02.jpg" alt="REYES Salón Cantina 02"></div>
						<div class="item"><img src="images/ags03.jpg" alt="REYES Salón Cantina 03"></div>
						<div class="item"><img src="images/ags04.jpg" alt="REYES Salón Cantina 04"></div>
						<div class="item"><img src="images/ags05.jpg" alt="REYES Salón Cantina 05"></div>
						<div class="item"><img src="images/ags06.jpg" alt="REYES Salón Cantina 06"></div>
						<div class="item"><img src="images/ags07.jpg" alt="REYES Salón Cantina 07"></div>
						<div class="item"><img src="images/ags08.jpg" alt="REYES Salón Cantina 08"></div>
						<div class="item"><img src="images/ags09.jpg" alt="REYES Salón Cantina 09"></div>
						<div class="item"><img src="images/ags10.jpg" alt="REYES Salón Cantina 10"></div>
						<div class="item"><img src="images/ags11.jpg" alt="REYES Salón Cantina 11"></div>
						<div class="item"><img src="images/ags12.jpg" alt="REYES Salón Cantina 12"></div>
						<div class="item"><img src="images/ags13.jpg" alt="REYES Salón Cantina 13"></div>
						<div class="item"><img src="images/ags14.jpg" alt="REYES Salón Cantina 14"></div>
						<div class="item"><img src="images/ags15.jpg" alt="REYES Salón Cantina 15"></div>
						<div class="item"><img src="images/ags16.jpg" alt="REYES Salón Cantina 16"></div>
						<div class="item"><img src="images/ags17.jpg" alt="REYES Salón Cantina 17"></div>
						<div class="item"><img src="images/ags18.jpg" alt="REYES Salón Cantina 18"></div>
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
			<li><a href="https://instagram.com/reyescantina_ags" target="_blank" class="icon-instagram"></a></li>
			<li><a href="https://www.facebook.com/reyescantina.ags" target="_blank" class="icon-facebook"></a></li>
		</ul>
	</div>
	<footer class="galeria">
		Blvd. Luis Donaldo Colosio 511<br>
		Col. Jardines de la concepción<br>
		Ags, Aguascalientes.<br>
		Reservaciones: 44·9463·2358<br>
		Horario: I-S 13:00-3:00<br>
	</footer>
@stop