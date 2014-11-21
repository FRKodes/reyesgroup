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
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="../images/local-reyes-aguascalientes.png" alt="First slide">
						<div class="container">
							<div class="carousel-caption alegre">
								<span>Bienvenida</span><br>
								<span>sucursal</span><br>
								Aguascalientes
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../images/local-reyes-aguascalientes.png" alt="Second slide">
						<div class="container">
							<div class="carousel-caption alegre">
								<span>Bienvenida</span><br>
								<span>sucursal</span><br>
								Tijuana
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../images/local-reyes-aguascalientes.png" alt="Thrid slide">
						<div class="container">
							<div class="carousel-caption alegre">
								<span>Bienvenida</span><br>
								<span>sucursal</span><br>
								Distrito Federal
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
					<img src="../images/corona-reyes-logo-aplicacion.png" alt="Corona Reyes Logo Filosofía">
				</fugure>
				<div class="title-container">
					<span class="item-deco left-deco"></span><h2>FILOSOFÍA REYES</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
				</div>
				<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, animi laudantium provident corporis necessitatibus sequi. Sunt officiis quisquam, tempore. Commodi id autem labore porro tempore assumenda cumque recusandae perspiciatis similique.</p>
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
					<figure>
						<img src="../images/concepto-comida-reyes-cantina.png" alt="Concepto comida reyes cantina, Nuestros platillos">
					</figure>
					<h3>Nuestros platillos</h3>
					<p class="desc-bottom">Comida tradicional Mexicana que fusiona platillos de diferentes regiones del país con ingredientes y recetas de diversas partes del mundo.</p>
				</li>
				<li class="bebida">
					<span class="item-deco left-deco"></span><h2>NUESTRAS BEBIDAS</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
					<p class="desc-top">La michelada mar y tierra o con tejuino y el shot de mezcal con alacrán son algunas de las bebidas más populares entre nuestros clientes.</p>
					<figure>
						<img src="../images/concepto-bebida-reyes-cantina.png" alt="Concepto bebida reyes cantina, Nuestras bebidas">
					</figure>
					<h3>Nuestras bebidas</h3>
					<p class="desc-bottom">La michelada mar y tierra o con tejuino y el shot de mezcal con alacrán son algunas de las bebidas más populares entre nuestros clientes.</p>
				</li>
				<li class="musica">
					<span class="item-deco left-deco"></span><h2>NUESTRA MÚSICA</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
					<p class="desc-top">Música tradicional mexicana en fusión con diferentes géneros como salsa, merengue, bachata y el top chart de pop del momento.</p>
					<figure>
						<img src="../images/concepto-musica-reyes-cantina.png" alt="Concepto música reyes cantina, Nuestra música">
					</figure>
					<h3>Nuestra música</h3>
					<p class="desc-bottom">Música tradicional mexicana en fusión con diferentes géneros como salsa, merengue, bachata y el top chart de pop del momento.</p>
				</li>
				<li class="clientes">
					<span class="item-deco left-deco"></span><h2>NUESTROS CLIENTES</h2><span class="item-deco right-deco"></span>
					<span class="bottom-deco"></span>
					<p class="desc-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate veniam porro ex rem. Autem natus tenetur assumenda fugiat repellendus illum officia, dolorum exercitationem eum delectus quidem alias ducimus eligendi perferendis.</p>
					<figure>
						<img src="../images/concepto-musica-reyes-cantina.png" alt="Concepto cliente reyes cantina, Nuestros clientes">
					</figure>
					<h3>Nuestros clientes</h3>
					<p class="desc-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, architecto eligendi dolores fugit repellat nulla facere corrupti aliquam facilis. Pariatur, mollitia repellendus. Eos accusantium, ipsa inventore quas perferendis distinctio natus.</p>
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
			<span class="item-deco left-deco"></span><h2 class="nuestros-platillos">NUESTROS CLIENTES</h2><span class="item-deco right-deco"></span>
			<span class="bottom-deco"></span>
			<figure><img src="images/reyes-clientes-01.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-02.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-03.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-04.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-05.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-06.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-07.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-08.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-09.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-10.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-11.jpg" alt="Reyes img"></figure>
			<figure><img src="images/reyes-clientes-12.jpg" alt="Reyes img"></figure>
		</section>
		<section class="unidades" id="unidades">
			<span class="item-deco left-deco"></span><h2>UNIDADES</h2><span class="item-deco right-deco"></span>
			<span class="bottom-deco"></span>
			<ul class="unidades-list">
				<li><a class="gdl" href="#gdl"><span>GDL</span></a></li>
				<li><a class="ags" href="#ags"><span>AGS</span></a></li>
				<li><a class="tj" href="#tj"><span>TJ</span></a></li>
				<li><a class="df" href="#df"><span>DF</span></a></li>
				<li><a class="pc" href="#pc"><span>PC</span></a></li>
			</ul>
			<div class="container-info">
				<div class="unidad gdl">
					<figure></figure>
					<p class="title">GUADALAJARA</p>
					<figure class="mapa gdl">
						<a href="https://www.google.com.mx/maps/place/Av+Acueducto+4851,+Puerta+de+Hierro,+45116+Zapopan,+JAL/@20.7127918,-103.4096523,17z/data=!3m1!4b1!4m2!3m1!1s0x8428af014f328a15:0x54ad1758c66dcfe5" target="_blank" title="Ir al mapa de Reyes Salón Cantina Guadalajara en una ventana nueva">
							<img src="images/mapa-reyes-cantina-guadalajara.jpg" alt="Mapa reyes cantina guadalajara">
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
							<img src="images/mapa-reyes-cantina-tijuana.jpg" alt="Mapa reyes cantina tijuana">
						</a>
					</figure>
					<p>
						Blvd. Aguacaliente 4501-B<br>
						Col. Aviación<br>
						Tijuana, B.C.<br>
						Reservaciones: 12·3456·7890<br>
						Horario: M-S 14:00-3:00<br>
						&nbsp;
					</p>
				</div>
				<div class="unidad ags">
					<figure></figure>
					<p class="title">AGUASCALIENTES</p>
					<figure class="mapa ags">
						<a href="https://www.google.com.mx/maps/place/Luis+Donaldo+Colosio+511,+Jardines+de+La+Concepci%C3%B3n+II,+20120+Aguascalientes,+AGS/@21.9249091,-102.3026193,17z/data=!3m1!4b1!4m2!3m1!1s0x8429ef070f7571fb:0xb3c15dc699c3c05d" target="_blank" title="Ir al mapa de Reyes Salón Cantina Aguascalientes en una ventana nueva">
							<img src="images/mapa-reyes-cantina-aguascalientes.jpg" alt="Mapa reyes cantina aguascalientes">
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
				<div class="unidad df">
					<figure></figure>
					<p class="title">DISTRITO FEDERAL</p>
					<p class="title prox">Próximamente</p>
				</div>
				<div class="unidad pc">
					<figure></figure>
					<p class="title">PLAYA DEL CARMEN</p>
					<p class="title prox">Próximamente</p>
				</div>

			</div>
		</section>
		<section class="contacto" id="contacto">
			<span class="item-deco left-deco"></span><h2>CONTACTO</h2><span class="item-deco right-deco"></span>
			<span class="bottom-deco"></span>
			{{ Form::open(['url'=>'sendmail', 'id'=>'contactForm'])}}
				<div class="line">{{ Form::input('text', 'nombre', null, ['placeholder'=>'Nombre', 'maxlength'=>'50', 'data-validate'=>'required']) }}</div>
				<div class="line">{{ Form::input('text', 'email', null, ['placeholder'=>'Correo electrónico', 'maxlength'=>'70', 'data-validate'=>'required|email']) }}</div>
				<div class="line">{{ Form::textarea('mensaje', null, ['placeholder'=>'Mensaje', 'data-validate'=>'required']) }}</div>
				<div class="line">{{ Form::submit('Enviar mensaje', ['class'=>'submitBtn']) }}</div>
			{{ Form::close()}}
			<div class="sent_mail_alert">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			</div>
		</section>
	</section>
@stop