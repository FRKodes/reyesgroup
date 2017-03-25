@extends('layouts.default')

@section('content')
	<section class="content" id="home">
		<section class="logo-slider-container">
			<figure class="logo-reyes-top"></figure>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active"><img src="../images/reyes-cantina-banner-01.jpg" width="690" height="749" alt=""></div>
					<div class="item"><img src="../images/reyes-cantina-banner-02-.jpg" width="690" height="749" alt=""></div>
					<div class="item"><img src="../images/reyes-cantina-banner-03-new.jpg" width="690" height="749" alt=""></div>
					<div class="item"><img src="../images/reyes-cantina-banner-04-new.jpg" width="690" height="749" alt=""></div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
		
		<section class="filosofia" id="filosofia">
			<div class="container">
				<fugure class="corona">
					<img src="../images/corona-reyes.png" width="556" height="465" alt="Corona Reyes Logo Filosofía">
				</fugure>
				<div class="title-container">
					<span class="item-deco left-deco"></span><h2>FILOSOFÍA REYES</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
				</div>
				<p class="text">Reyes Salón Cantina fusiona la esencia del México tradicional con el contemporáneo, logrando una mezcla única en la que el folklore de lo nuestro se respira y se siente a flor de piel, a través de sus sabores, su música y su gente, siempre en un ambiente festivo como son nuestras verdaderas celebraciones. <br><br>El mezcal y el tequila dando calor a las gargantas de los más valientes, el guacamole, arroz con leche deleitando paladares y el baile es algo que podrás encontrar cada noche en la primer cantina contemporánea de México.</p>
			</div>
		</section>
		
		<section id="slide-1" class="homeSlide">
		    <div class="bcg" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -300px;" data-anchor-target="#slide-1">
		        <div class="hsContainer">
		            <div class="hsContent" data-center="opacity: 1" data-106-top="opacity: 0" data-anchor-target="#slide-1 h2">
		                <h2>
		                	1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, quod libero animi in consequuntur, hic veritatis odio sint modi, iure provident nam. Blanditiis, eum quaerat provident. Ea dicta delectus, dignissimos.<br>
		                	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, cum saepe? Commodi laudantium quos necessitatibus! Libero voluptas aperiam aliquam sint nulla neque sapiente itaque sunt voluptatem iusto? Enim, deleniti, nulla.
		                </h2>
		            </div>
		        </div>
		    </div>
		</section>

		<section class="platillos" id="nuestros-platillos">
			<span class="item-deco left-deco large"></span><h2 class="concepto-title">CONCEPTO</h2><span class="item-deco right-deco large"></span>
			<span class="bottom-deco large"></span>
			<ul class="photos">
				<li class="show comida">
					<span class="item-deco left-deco"></span><h2>NUESTROS PLATILLOS</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
					<p class="desc-top">Comida tradicional Mexicana que fusiona platillos de diferentes regiones del país con ingredientes y recetas de diversas partes del mundo.</p>
					<div id="carousel_food" class="carousel_food slide">
						<div class="carousel-inner" role="listbox">
							<div class="item active"><img src="../images/comida-03.jpg" width="687" height="570" alt="comida 03"></div>
							<div class="item"><img src="../images/comida-esquites.jpg" width="687" height="570" alt="comida esquites"></div>
							<div class="item"><img src="../images/comida-jaula.jpg" width="687" height="570" alt="comida jaula"></div>

						</div>
					</div>
					<h3>Nuestros platillos</h3>
					<p class="desc-bottom">Comida tradicional Mexicana que fusiona platillos de diferentes regiones del país con ingredientes y recetas de diversas partes del mundo.</p>
				</li>
				<li class="bebida">
					<span class="item-deco left-deco"></span><h2>NUESTRAS BEBIDAS</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
					<p class="desc-top">El shot de mezcal con alacrán , nuestros famoso gallos y el cantarito, son algunas de las bebidas más populares entre nuestros clientes.</p>
					<div id="carousel_beberages" class="carousel_beberages slide">
						<div class="carousel-inner" role="listbox">
							<div class="item active"><img src="../images/bebida-01-shot-alacran.jpg" width="687" height="570" alt="bebida 01 shot alacran"></div>
							<div class="item"><img src="../images/bebida-02-jarrito.jpg" width="687" height="570" alt="bebida 02 jarrito"></div>
							<div class="item"><img src="../images/bebida-03-gallo.jpg" width="687" height="570" alt="bebida 03 gallo"></div>
							<div class="item"><img src="../images/bebida-04-jarrito.jpg" width="687" height="570" alt="bebida 04 jarrito"></div>
							<div class="item"><img src="../images/bebida-albaquito.jpg" width="687" height="570" alt="bebida albaquito"></div>
						</div>
					</div>
					<h3>Nuestras bebidas</h3>
					<p class="desc-bottom">El shot de mezcal con alacrán , nuestros famoso gallos y el cantarito, son algunas de las bebidas más populares entre nuestros clientes.</p>
				</li>
				<li class="musica">
					<span class="item-deco left-deco"></span><h2>NUESTRA MÚSICA</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
					<p class="desc-top">Música tradicional mexicana en fusión con diferentes géneros como, salsa, bachata y el top chart de pop del momento.</p>
					<div id="carousel_musica" class="carousel_musica slide">
						<div class="carousel-inner" role="listbox">
							<div class="item active"><img src="../images/concepto-musica-reyes-cantina.png" width="687" height="570" alt="Música tradicional mexicana en fusión con diferentes géneros como, salsa, bachata y el top chart de pop del momento."></div>
							<div class="item"><img src="../images/concepto-musica-DJ-funky-kong-reyes-cantina.png" width="687" height="570" alt="DJ Funky Kong en Reyes Salón Canitna"></div>
						</div>
					</div>
					<h3>Nuestra música</h3>
					<p class="desc-bottom">Música tradicional mexicana en fusión con diferentes géneros como, salsa, bachata y el top chart de pop del momento.</p>
				</li>
				<li class="clientes">
					<span class="item-deco left-deco"></span><h2>NUESTROS CLIENTES</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>

					{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae ipsum amet quo maxime sequi corporis nemo mollitia ipsa, molestiae alias modi optio at laborum numquam molestias harum. Itaque, molestias, ullam.</p> --}}

					<p class="desc-top"></p>
					<div class="block-clientes">
						<figure><img src="images/c1.jpg" width="186" height="186" alt="clientes reyes 01"></figure>
						<figure><img src="images/c2.jpg" width="186" height="186" alt="clientes reyes 02"></figure>
						<figure><img src="images/c3.jpg" width="186" height="186" alt="clientes reyes 03"></figure>
						<figure><img src="images/c4.jpg" width="186" height="186" alt="clientes reyes 04"></figure>
					</div>
					<h3>Nuestros clientes</h3>
					<p class="desc-bottom"></p>
				</li>
			</ul>
			<ul class="steps">
				<li class="comida"><a class="comida" href="#comida" title="Nuestros platillos"></a></li>
				<li class="bebida"><a class="bebida" href="#bebida" title="Nuestras Bebidas"></a></li>
				<li class="musica"><a class="musica" href="#musica" title="Nuestra música"></a></li>
				<li class="clientes"><a class="clientes" href="#clientes" title="Nuestros Clientes"></a></li>
			</ul>
		</section>
		
		<section class="nuestros-clientes">
			<div class="photos-container">
				<span class="item-deco left-deco-white"></span><h2 class="nuestros-platillos white">NUESTROS CLIENTES</h2><span class="item-deco right-deco-white"></span>
				<span class="bottom-deco-white"></span>

				<div class="gdl-gallery gallery-container">
					<figure><img src="images/reyes-clientes-01.jpg" width="186" height="186" alt="Diego Luna en Reyes Salón Cantina Guadalajara"></figure>
					<figure><img src="images/reyes-clientes-02.jpg" width="186" height="186" alt="El lugar perfecto para tomarse unos shots es Reyes Salón Cantina"></figure>
					<figure><img src="images/reyes-clientes-03.jpg" width="186" height="186" alt="Para pasarla bien con los amigos está el Reyes Salón Cantina"></figure>
					<figure><img src="images/reyes-clientes-14.jpg" width="186" height="186" alt="The blue man group"></figure>
					<figure><img src="images/c1.jpg" width="186" height="186" alt="clientes reyes 01"></figure>
					<figure><img src="images/c2.jpg" width="186" height="186" alt="clientes reyes 02"></figure>
					<figure><img src="images/c3.jpg" width="186" height="186" alt="clientes reyes 03"></figure>
					<figure><img src="images/c4.jpg" width="186" height="186" alt="clientes reyes 04"></figure>
					<figure><img src="images/c5.jpg" width="186" height="186" alt="clientes reyes 05"></figure>
					<figure><img src="images/c6.jpg" width="186" height="186" alt="clientes reyes 06"></figure>
					<figure><img src="images/c7.jpg" width="186" height="186" alt="clientes reyes 07"></figure>
					<figure><img src="images/c8.jpg" width="186" height="186" alt="clientes reyes 08"></figure>
					<figure><img src="images/c9.jpg" width="186" height="186" alt="clientes reyes 09"></figure>
					<figure><img src="images/c10.jpg" width="186" height="186" alt="c1lientes reyes 00"></figure>
					<figure><img src="images/c11.jpg" width="186" height="186" alt="c1lientes reyes 01"></figure>
					<figure><img src="images/c12.jpg" width="186" height="186" alt="c1lientes reyes 02"></figure>
					<figure><img src="images/c13.jpg" width="186" height="186" alt="c1lientes reyes 03"></figure>
					<figure><img src="images/c14.jpg" width="186" height="186" alt="c1lientes reyes 04"></figure>
				</div>
			</div>
			<div class="videos">
				<iframe width="372" height="212" src="https://www.youtube.com/embed/vy8M3MWg1-c?rel=0" frameborder="0" autohide="2" allowfullscreen></iframe>
				<iframe width="372" height="212" src="https://www.youtube.com/embed/aBJna8MMyuQ?rel=0" frameborder="0" autohide="2" allowfullscreen></iframe>
				<iframe width="372" height="212" src="https://www.youtube.com/embed/Lgvuj0ornvY?rel=0" frameborder="0" autohide="2" allowfullscreen></iframe>
			</div>
		</section>
		
		<section class="unidades" id="unidades">
			<span class="item-deco left-deco"></span><h2>UNIDADES</h2><span class="item-deco right-deco"></span>
			<span class="bottom-deco"></span>
			<ul class="unidades-list">
				<li><a class="gdl" href="#gdl"><span>GDL</span></a></li>
				<li><a class="ags" href="#ags"><span>AGS</span></a></li>
				<li><a class="tj" href="#tj"><span>TJ</span></a></li>
				<li><a class="cln" href="#cln"><span>CLN</span></a></li>
				<li><a class="mxl" href="#mxl"><span>MXL</span></a></li>
				<li><a class="xal" href="#xal"><span>XL</span></a></li>
				<li><a class="qro" href="#qro"><span>QRO</span></a></li>
			</ul>
			<div class="container-info">
				
				<div class="unidad gdl">
					<figure></figure>
					<p class="title">GUADALAJARA</p>
					<figure class="mapa gdl">
						<a href="https://www.google.com.mx/maps/place/Av+Acueducto+4851,+Puerta+de+Hierro,+45116+Zapopan,+JAL/@20.7127918,-103.4096523,17z/data=!3m1!4b1!4m2!3m1!1s0x8428af014f328a15:0x54ad1758c66dcfe5" target="_blank" title="Ir al mapa de Reyes Salón Cantina Guadalajara en una ventana nueva">
							<img src="images/mapa-reyes-cantina-guadalajara.jpg" alt="Mapa reyes cantina guadalajara" width="589" height="252">
						</a>
					</figure>
					<p>
						Av. Real Acueducto 4851<br>
						Col. Real Acueducto<br>
						Zapopan, Jalisco.<br>
						Reservaciones: 33·3499·1859<br>
						Horario: M-I 14:00-2:00 <br>
						J-S 14:00-3:00
					</p>
					<ul class="social-icons">
						<li><a href="https://instagram.com/reyescantina" target="_blank" class="icon-instagram"></a></li>
						<li><a href="https://www.facebook.com/ReyesSalonCantina" target="_blank" class="icon-facebook"></a></li>
						<li><a href="https://twitter.com/reyescantina" target="_blank" class="icon-twitter"></a></li>
						<li class="camera"><a href="galeria-reyes-cantina-gdl" target="_blank" class="icon-camera"></a></li>
					</ul>
				</div>
				
				<div class="unidad tj">
					<figure></figure>
					<p class="title">TIJUANA</p>
					<figure class="mapa tj">
						<a href="https://www.google.com.mx/maps/place/Blvd.+Agua+Caliente+4501,+Aviaci%C3%B3n,+22014+Tijuana,+BC/@32.5132511,-117.0069092,17z/data=!3m1!4b1!4m2!3m1!1s0x80d9481645d19231:0x93d50d2b1e64d8a5" target="_blank" title="Ir al mapa de Reyes Salón Cantina Tijuana en una ventana nueva">
							<img src="images/mapa-reyes-cantina-tijuana.jpg" alt="Mapa reyes cantina tijuana" width="589" height="252">
						</a>
					</figure>
					<p>
						Blvd. Aguacaliente 4501-B<br>
						Col. Aviación<br>
						Tijuana, B.C.<br>
						Reservaciones: 664·3678·932<br>
						Horario: M-S 14:00-3:00<br>
						&nbsp;
					</p>
					<ul class="social-icons">
						<li><a href="https://instagram.com/reyescantina_tj" target="_blank" class="icon-instagram"></a></li>
						<li><a href="https://www.facebook.com/reyesCantinaTJ" target="_blank" class="icon-facebook"></a></li>
						<li class="camera"><a href="galeria-reyes-cantina-tj" target="_blank" class="icon-camera"></a></li>
					</ul>
				</div>
				
				<div class="unidad ags">
					<figure></figure>
					<p class="title">HERMOSILLO</p>
					<figure class="mapa ags">
						<a href="https://www.google.com.mx/maps/place/29%C2%B004'53.7%22N+111%C2%B001'16.6%22W/@29.0815863,-111.0218858,18z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d29.081585!4d-111.021273" target="_blank" title="Ir al mapa de Reyes Salón Cantina Hermosillo en una ventana nueva">
							<img src="images/mapa-reyes-cantina-hermosillo.png" alt="Mapa reyes cantina Hermosillo" width="589" height="252">
						</a>
					</figure>
					<p>
						Blvd. Luis Donaldo Colosio 386 <br>
						Hermosillo, Sonora. <br>
						C.P.83200 <br>
						&nbsp;<br>
						&nbsp;<br>
						&nbsp;
					</p>
					<ul class="social-icons">
						<li><a href="https://instagram.com/reyescantina_hmo" target="_blank" class="icon-instagram"></a></li>
						<li><a href="https://www.facebook.com/reyesCantinaHMO" target="_blank" class="icon-facebook"></a></li>
					</ul>
				</div>
				
				<div class="unidad cln">
					<figure></figure>
					<p class="title">CULIACÁN</p>
					<figure class="mapa cln"><a href="https://www.google.com.mx/maps/place/Blvrd+Enrique+S%C3%A1nchez+Alonso+SN-C+LEY+TRES+RIOS,+Desarrollo+Urbano+Tres+R%C3%ADos,+80020+Culiac%C3%A1n+Rosales,+Sin./@24.8136186,-107.4208041,14z/data=!4m7!1m4!3m3!1s0x86bcda11dac6b2ad:0x628286c7f149bc73!2sBlvrd+Enrique+S%C3%A1nchez+Alonso,+Desarrollo+Urbano+Tres+R%C3%ADos,+Culiac%C3%A1n+Rosales,+Sin.!3b1!3m1!1s0x86bcda0968acde8d:0xabd7e0d5b845e1cb?hl=es-419" target="_blank"><img src="images/mapa-reyes-cantina-culiacan.jpg" alt="Mapa Reyes Culiacán" width="589" height="252"></a></figure>
					<p>
						Blvd. Enrique Sánchez Alonso 1651-5<br>
						Des. Urb. 3 Ríos C.P. 80020<br>
						Culiacán, Sin.<br>
					</p>
					<ul class="social-icons">
						<li><a href="https://instagram.com/reyescantina_cln" target="_blank" class="icon-instagram"></a></li>
						<li><a href="https://www.facebook.com/reyesCantinaCLN" target="_blank" class="icon-facebook"></a></li>
					</ul>
				</div>

				<div class="unidad mxl">
					<figure></figure>
					<p class="title">MEXICALI</p>
					<figure class="mapa mxl"><a href="https://www.google.com.mx/maps/place/Calz+Cuauht%C3%A9moc+100,+Aviaci%C3%B3n,+21230+Mexicali,+B.C./@32.6574345,-115.4517016,17z/data=!3m1!4b1!4m2!3m1!1s0x80d7706aa7f6c1f3:0xff0bb2a11495fb78?hl=es-419" target="_blank"><img src="images/mapa-reyes-cantina-mexicali.jpg" alt="Mapa Reyes Mexicali" width="589" height="252"></a></figure>
					<p>
						Calzada Cuauhtémoc No. 100 <br>
						Colonia Aviación <br>
						Mexicali, B.C.
						<br>
					</p>
					<ul class="social-icons">
						<li><a href="https://instagram.com/reyescantina_mxl" target="_blank" class="icon-instagram"></a></li>
						<li><a href="https://www.facebook.com/ReyesCantinaMXL" target="_blank" class="icon-facebook"></a></li>
					</ul>
				</div>

				<div class="unidad xal">
					<figure></figure>
					<p class="title">XALAPA</p>
					<figure class="mapa xal"><a href="https://goo.gl/maps/syoC62qm6Gq" target="_blank"><img src="images/mapa-reyes-cantina-xalapa-veracruz.jpg" alt="Mapa Reyes Xalapa Veracruz" width="589" height="252"></a></figure>
					<p>
						Power Center Xanat<br>
						Carretera Xalapa - Veracruz km 4+300<br>
						Teléfono 2288129099 <br>
					</p>
					<ul class="social-icons">
						<li><a href="https://instagram.com/reyesCantina_XL" target="_blank" class="icon-instagram"></a></li>
						<li><a href="https://www.facebook.com/reyesCantinaXL" target="_blank" class="icon-facebook"></a></li>
					</ul>
				</div>

				<div class="unidad qro">
					<figure></figure>
					<p class="title">QUERÉTARO</p>
					<figure class="mapa qro"><a href="https://goo.gl/maps/Dh2ajsx4jys" target="_blank"><img src="images/mapa-reyes-cantina-queretaro.jpg" alt="Mapa Reyes Querétaro" width="589" height="252"></a></figure>
					<p>
						Boulevard Bernardo Quintana 4195 <br>
						Alamos tercera sección <br>
						C.P. 76160 <br>
						Tel. 4424473822 <br>
					</p>
					<ul class="social-icons">
						<li><a href="https://instagram.com/reyescantina_qro" target="_blank" class="icon-instagram"></a></li>
						<li><a href="https://www.facebook.com/Reyes-Cantina-QRO-1912128149031661" target="_blank" class="icon-facebook"></a></li>
					</ul>
				</div>

			</div>
		</section>
		
		<section class="contacto" id="contacto">
			<span class="item-deco left-deco-white"></span><h2>CONTACTO</h2><span class="item-deco right-deco-white"></span>
			<span class="bottom-deco-white"></span>
			{{ Form::open(['url'=>'sendmail', 'id'=>'contactForm'])}}
				<div class="line">{{ Form::input('text', 'nombre', null, ['placeholder'=>'Nombre', 'maxlength'=>'50', 'data-validate'=>'required']) }}</div>
				<div class="line">{{ Form::input('text', 'email', null, ['placeholder'=>'Correo electrónico', 'maxlength'=>'70', 'data-validate'=>'required|email']) }}</div>
				<div class="line">{{ Form::textarea('mensaje', null, ['placeholder'=>'Mensaje', 'data-validate'=>'required']) }}</div>
				<div class="line">{{ Form::submit('Enviar mensaje', ['class'=>'submitBtn']) }}</div>
			{{ Form::close()}}
			<div class="sent_mail_alert">
				Gracias! <br>
				Tu comentario ha sido enviado exitosamente.
			</div>
		</section>
	</section>
@stop