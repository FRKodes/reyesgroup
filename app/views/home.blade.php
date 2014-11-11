@extends('layouts.default')

@section('content')
	<section class="content">
		<section class="logo-slider-container">
			<figure class="logo-reyes-top"></figure>
			<ul class="slider-top">
				<li>
					<img src="../images/local-reyes-aguascalientes.png" alt="Reyes Salón Cantina Aguascalientes">
					<p class="alegre">
						<span>Bienvenida</span><br>
						<span>sucursal</span><br>
						Aguascalientes
					</p>
				</li>
			</ul>
			<ul class="steps">
				<li><a href="#"></a></li>
				<li class="active"><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
		</section>
		<section class="filosofia">
			<fugure class="corona">
				<img src="../images/corona-reyes-logo-aplicacion.png" alt="Corona Reyes Logo Filosofía">
			</fugure>
			<div class="title-container">
				<span class="item-deco left-deco"></span><h2>FILOSOFÍA REYES</h2><span class="item-deco right-deco"></span>
				<span class="bottom-deco"></span>
			</div>
			<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, animi laudantium provident corporis necessitatibus sequi. Sunt officiis quisquam, tempore. Commodi id autem labore porro tempore assumenda cumque recusandae perspiciatis similique.</p>
		</section>
		<section class="platillos">
			<span class="item-deco left-deco"></span><h2>NUESTROS PLATILLOS</h2><span class="item-deco right-deco"></span>
			<span class="bottom-deco"></span>
			<p class="text">Comida tradicional Mexicana que fusiona platillos de diferentes regiones del país con ingredientes y recetas de diversas partes del mundo.</p>
			<ul class="photos">
				<li class="show"><img src="../images/concepto-comida-reyes-cantina.png" alt="concepto comida reyes cantina"></li>
				<li><img src="../images/concepto-bebida-reyes-cantina.png" alt="concepto bebida reyes cantina"></li>
				<li><img src="../images/concepto-musica-reyes-cantina.png" alt="Platillo 3"></li>
			</ul>
			<ul class="steps">
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
		</section>
		<section class="unidades">
			<span class="item-deco left-deco"></span><h2>UNIDADES</h2><span class="item-deco right-deco"></span>
			<ul class="unidades-list">
				<li><a class="gdl" href="#gdl"><span>GDL</span></a></li>
				<li><a class="ags" href="#ags"><span>AGS</span></a></li>
				<li><a class="tj" href="#tj"><span>TJ</span></a></li>
				<li><a class="df" href="#df"><span>DF</span></a></li>
				<li><a class="pc" href="#pc"><span>PC</span></a></li>
			</ul>
			<div class="container-info">
				<div class="unidad gdl">
					<p class="title">GUADALAJARA</p>
					<figure class="mapa gdl"></figure>
					<p>
						Av. Real Acueducto 1234. <br>
						Col. Real Acueducto. <br>
						Zapopan, Jalisco. <br>
						Reservaciones: 333·1234·5678. <br>
						Horario: L-S 1:00 P.M.-2:00 AM. <br>
					</p>
				</div>
				<div class="unidad tj">
					<p class="title">TIJUANA</p>
					<figure class="mapa tj"></figure>
					<p>
						Av. Real Acueducto 1234. <br>
						Col. Real Acueducto. <br>
						Zapopan, Jalisco. <br>
						Reservaciones: 333·1234·5678. <br>
						Horario: L-S 1:00 P.M.-2:00 AM. <br>
					</p>
				</div>
				<div class="unidad ags">
					<p class="title">AGUASCALIENTES</p>
					<figure class="mapa ags"></figure>
					<p>
						Boulevard Luis DonaldoColosio 511 <br>
						Col. Jardines de la Concepción. <br>
						Aguascalientes, Aguascalientes. <br>
						Reservaciones: ??? <br>
						Horarios: M-D
					</p>
				</div>
				<div class="unidad df">
					<p class="title">DF</p>
					<figure class="mapa df"></figure>
					<p>
						Av. Real Acueducto 1234. <br>
						Col. Real Acueducto. <br>
						Zapopan, Jalisco. <br>
						Reservaciones: 333·1234·5678. <br>
						Horario: L-S 1:00 P.M.-2:00 AM. <br>
					</p>
				</div>
				<div class="unidad pc">
					<p class="title">PLAYA DEL CARMEN</p>
					<figure class="mapa pc"></figure>
					<p>
						Av. Real Acueducto 1234. <br>
						Col. Real Acueducto. <br>
						Zapopan, Jalisco. <br>
						Reservaciones: 333·1234·5678. <br>
						Horario: L-S 1:00 P.M.-2:00 AM. <br>
					</p>
				</div>

			</div>
		</section>
		<section class="contacto">
			<span class="item-deco left-deco"></span><h2>CONTACTO</h2><span class="item-deco right-deco"></span>
			{{ Form::open()}}
				<div class="line">{{ Form::input('text', 'nombre', null, ['placeholder'=>'Nombre', 'maxlength'=>'50']) }}</div>
				<div class="line">{{ Form::input('text', 'email', null, ['placeholder'=>'Correo electrónico', 'maxlength'=>'70']) }}</div>
				<div class="line">{{ Form::textarea('mensaje', null, ['placeholder'=>'Mensaje']) }}</div>
				<div class="line">{{ Form::submit('Enviar mensaje', ['class'=>'submitBtn']) }}</div>
			{{ Form::close()}}
		</section>
	</section>
@stop
