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
					<div class="item active">
						<img src="../images/render-sucursal-culiacan-new.png" width="690" height="749" alt="Render Sucursal Culiacan Reyes Salón Cantina">
						<div class="container">
							<div class="carousel-caption alegre">
								<span>BIENVENIDA</span><br>
								<span>SUCURSAL</span><br>
								CULIACÁN
							</div>
						</div>
					</div>
					<div class="item" id="sucursales">
						<img src="../images/bienvenidas-sucursales-tijuana-y-aguascalientes.png" width="690" height="749" alt="Bienvenidas Sucursales Tijuana y Aguascalientes">
						<div class="container">
							<div class="carousel-caption alegre">
								<span>Sucursales</span><br>
								<span class="tj">Tijuana</span><span class="ags">Aguascalientes</span>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../images/la-vitola-tuetano-reyes-salon-cantina-mas-tejuino-con-cerveza.png" width="690" height="749" alt="la vitola, tuétano en Reyes Salón Cantina más tejuino con cerveza">
						<div class="container">
							<div class="carousel-caption alegre">
								<span>#ESDEREYES</span><br>
								<span>LA CANTINA</span><br>
								GOURMET DE MÉXICO
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../images/barra-reyes-cantina-vista-frontal.png" width="690" height="749" alt="barra reyes salón cantina vista frontal">
						<div class="container">
							<div class="carousel-caption alegre">
								<span>fusión entre</span><br>
								<span>tradicional</span><br>
								y contemporáneo
							</div>
						</div>
					</div>
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
					<img src="../images/corona-reyes-logo-aplicacion.png" width="556" height="465" alt="Corona Reyes Logo Filosofía">
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
		                	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, quod libero animi in consequuntur, hic veritatis odio sint modi, iure provident nam. Blanditiis, eum quaerat provident. Ea dicta delectus, dignissimos.<br>
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
							<div class="item active"><img src="../images/comida-platillo-el-mil-amores-reyes-cantina.png" width="687" height="570" alt="Platillo 'El mil amores' en Reyes Salón Cantina"></div>
							<div class="item"><img src="../images/comida-platillo-tongolele-reyes-cantina.png" width="687" height="570" alt="Quesadilla 'tongolele' en Reyes Salón Cantina"></div>
							<div class="item"><img src="../images/la-tuzita-reyes-salon-cantina.png" width="687" height="570" alt="La tuzita, churros cubiertos en azucar, canela, cajeta y leche condensada."></div>
						</div>
					</div>
					<h3>Nuestros platillos</h3>
					<p class="desc-bottom">Comida tradicional Mexicana que fusiona platillos de diferentes regiones del país con ingredientes y recetas de diversas partes del mundo.</p>
				</li>
				<li class="bebida">
					<span class="item-deco left-deco"></span><h2>NUESTRAS BEBIDAS</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
					<p class="desc-top">El shot de mezcal con alacrán y la michelada mar y tierra o con tejuino son algunas de las bebidas más populares entre nuestros clientes.</p>
					<div id="carousel_beberages" class="carousel_beberages slide">
						<div class="carousel-inner" role="listbox">
							<div class="item active"><img src="../images/bebida-shot-de-mexcal-con-alacran.png" width="687" height="570" alt="El famoso shot de mezcal con alacrán"></div>
							<div class="item"><img src="../images/bebida-michelada-mar-y-tierra-reyes-cantina.png" width="687" height="570" alt="La michelada mar y tierra o con tejuino."></div>
							<div class="item"><img src="../images/bebida-martini-de-pepino-reyes-cantina.png" width="687" height="570" alt="Martini de pepino."></div>
						</div>
					</div>
					<h3>Nuestras bebidas</h3>
					<p class="desc-bottom">El shot de mezcal con alacrán y la michelada mar y tierra o con tejuino son algunas de las bebidas más populares entre nuestros clientes.</p>
				</li>
				<li class="musica">
					<span class="item-deco left-deco"></span><h2>NUESTRA MÚSICA</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
					<p class="desc-top">Música tradicional mexicana en fusión con diferentes géneros como salsa, merengue, bachata y el top chart de pop del momento.</p>
					<div id="carousel_musica" class="carousel_musica slide">
						<div class="carousel-inner" role="listbox">
							<div class="item active"><img src="../images/concepto-musica-reyes-cantina.png" width="687" height="570" alt="Música tradicional mexicana en fusión con diferentes géneros como salsa, merengue, bachata y el top chart de pop del momento."></div>
							<div class="item"><img src="../images/concepto-musica-trioker-reyes-cantina.png" width="687" height="570" alt="Los trioker en Reyes Salón Canitna"></div>
							<div class="item"><img src="../images/concepto-musica-DJ-funky-kong-reyes-cantina.png" width="687" height="570" alt="DJ Funky Kong en Reyes Salón Canitna"></div>
						</div>
					</div>
					<h3>Nuestra música</h3>
					<p class="desc-bottom">Música tradicional mexicana en fusión con diferentes géneros como salsa, merengue, bachata y el top chart de pop del momento.</p>
				</li>
				<li class="clientes">
					<span class="item-deco left-deco"></span><h2>NUESTROS CLIENTES</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
					<p class="desc-top"></p>
					<div class="block-clientes">
						<figure><img src="images/reyes-clientes-01.jpg" width="186" height="186" alt="Diego Luna en Reyes Salón Cantina Guadalajara"></figure>
						<figure><img src="images/reyes-clientes-06.jpg" width="186" height="186" alt="Martha Higareda tomando unos shots en Reyes Salón Cantina"></figure>
						<figure><img src="images/reyes-clientes-09.jpg" width="186" height="186" alt="Pasándola de lujo en Reyes"></figure>
						<figure><img src="images/reyes-clientes-17.jpg" width="186" height="186" alt="El Canelo en Reyes Salón Cantina"></figure>
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
				<figure><img src="images/reyes-clientes-01.jpg" width="186" height="186" alt="Diego Luna en Reyes Salón Cantina Guadalajara"></figure>
				<figure><img src="images/reyes-clientes-02.jpg" width="186" height="186" alt="El lugar perfecto para tomarse unos shots es Reyes Salón Cantina"></figure>
				<figure><img src="images/reyes-clientes-03.jpg" width="186" height="186" alt="Para pasarla bien con los amigos está el Reyes Salón Cantina"></figure>
				<figure><img src="images/reyes-clientes-04.jpg" width="186" height="186" alt="Noche de amigos en Reyes"></figure>
				<figure><img src="images/reyes-clientes-05.jpg" width="186" height="186" alt="Sebu Simonian de Capital Cities tomando un shot de alacrán en Reyes Salón Cantina"></figure>
				<figure><img src="images/reyes-clientes-06.jpg" width="186" height="186" alt="Martha Higareda tomando unos shots en Reyes Salón Cantina"></figure>
				<figure><img src="images/reyes-clientes-07.jpg" width="186" height="186" alt="Noche de amigas en Reyes Salón Cantina"></figure>
				<figure><img src="images/reyes-clientes-08.jpg" width="186" height="186" alt="Amigos de copas en Reyes"></figure>
				<figure><img src="images/reyes-clientes-09.jpg" width="186" height="186" alt="Pasándola de lujo en Reyes"></figure>
				<figure><img src="images/reyes-clientes-10.jpg" width="186" height="186" alt="Facundo Reyes img"></figure>
				<figure><img src="images/reyes-clientes-11.jpg" width="186" height="186" alt="Los amigos en Reyes la pasan mejor"></figure>
				<figure><img src="images/reyes-clientes-12.jpg" width="186" height="186" alt="Despedida de soltera en Reyes Salón Cantina"></figure>
				<figure><img src="images/reyes-clientes-13.jpg" width="186" height="186" alt="Viva México! en Reyes Salón Cantina"></figure>
				<figure><img src="images/reyes-clientes-14.jpg" width="186" height="186" alt="Pasándola bien en Reyes con Diego Luna"></figure>
				<figure><img src="images/reyes-clientes-15.jpg" width="186" height="186" alt="Lupita D'Alessio en Reyes"></figure>
				<figure><img src="images/reyes-clientes-16.jpg" width="186" height="186" alt="La foto obligada en la barra del Reyes Salón Cantina"></figure>
				<figure><img src="images/reyes-clientes-17.jpg" width="186" height="186" alt="El Canelo en Reyes Salón Cantina"></figure>
				<figure><img src="images/reyes-clientes-18.jpg" width="186" height="186" alt="Faisy de visita en Reyes Salón Cantina"></figure>
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
				</div>
				<div class="unidad ags">
					<figure></figure>
					<p class="title">AGUASCALIENTES</p>
					<figure class="mapa ags">
						<a href="https://www.google.com.mx/maps/place/Luis+Donaldo+Colosio+511,+Jardines+de+La+Concepci%C3%B3n+II,+20120+Aguascalientes,+AGS/@21.9249091,-102.3026193,17z/data=!3m1!4b1!4m2!3m1!1s0x8429ef070f7571fb:0xb3c15dc699c3c05d" target="_blank" title="Ir al mapa de Reyes Salón Cantina Aguascalientes en una ventana nueva">
							<img src="images/mapa-reyes-cantina-aguascalientes.jpg" alt="Mapa reyes cantina aguascalientes" width="589" height="252">
						</a>
					</figure>
					<p>
						Blvd. Luis Donaldo Colosio 511<br>
						Col. Jardines de la concepción<br>
						Ags, Aguascalientes.<br>
						Reservaciones: 44·9463·2358<br>
						Horario: I-S 13:00-3:00<br>
						&nbsp;
					</p>
				</div>
				<div class="unidad cln">
					<figure></figure>
					<p class="title">CULIACÁN</p>
					<p>
						Blvd. Enrique Sánchez Alonso 1651-5<br>
						Des. Urb. 3 Ríos C.P. 80020<br>
						Culiacán, Sin.<br>
					</p>
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