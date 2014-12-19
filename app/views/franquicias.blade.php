@extends('layouts.default')

@section('content')
	<section class="franquicias">
		<span class="item-deco left-deco"></span><h2>Franquicias</h2><span class="item-deco right-deco"></span>
		<span class="bottom-deco"></span>
		<p class="text">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique voluptas qui, alias fuga? Distinctio porro incidunt aperiam laudantium consequatur deserunt quae maiores necessitatibus explicabo. In ipsa fugiat sit molestias!
		</p>
	</section>
	
	<section class="contacto">
		{{ Form::open(['url'=>'franquicias', 'id'=>'franquicias'])}}
			<h2 class="franquicia">información personal</h2>
			<div class="line">
				{{ Form::input('text', 'nombre', null, ['placeholder'=>'Nombre(s)', 'data-validate'=>'required']) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'apellidos', null, ['placeholder'=>'Apellidos', 'data-validate'=>'required']) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'email', null, ['placeholder'=>'Correo Electrónico', 'data-validate'=>'required|email']) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'tel', null, ['placeholder'=>'Teléfono fijo']) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'cel', null, ['placeholder'=>'Teléfono móvil']) }}
			</div>
			
			<h2 class="franquicia">información de franquicia</h2>

			<div class="line">
				{{ Form::input('text', 'ciudad', null, ['placeholder'=>'En que ciudad desea tener la franquicia?', 'data-validate'=>'required']) }}
			</div>
			<div class="line">
				{{ Form::select('local', [''=>'Cuenta con local o terreno propio?','local'=>'Local', 'terreno'=>'Terreno', 'ninguno'=>'Ninguno de los anteriores', ], null, []) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'ubicacion_local', null, ['placeholder'=>'¿Dónde esta ubicado el local/terreno?', 'style'=>'display:none']) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'porque_interes', null, ['placeholder'=>'¿Porque le interesa nuestro modelo de negocio?', 'data-validate'=>'required']) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'pertenece_franquicia', null, ['placeholder'=>'¿Pertenece o ha pertenecido a alguna franquicia?', 'data-validate'=>'required']) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'actividad_economica', null, ['placeholder'=>'¿Cual es su actividad económica personal?', 'data-validate'=>'required']) }}
			</div>
			<div class="line">
				{{ Form::select('negocio_propio', [''=>'¿Cuenta con algún negocio propio?','si'=>'Si', 'no'=>'No'], null, []) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'cual_negocio', null, ['placeholder'=>'¿Cuál?', 'style'=>'display:none']) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'quien_opera', null, ['placeholder'=>'¿Quién operará la franquicia?', 'data-validate'=>'required']) }}
			</div>
			<div class="line">
				{{ Form::select('origen_inversion', [''=>'El capital a invertir es de origen','propio'=>'Propio', 'credito'=>'Crédito'], null, []) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'cantidad_inversion', null, ['placeholder'=>'¿Que cantidad considera invertir?', 'data-validate'=>'required']) }}
			</div>
			<div class="line">
				{{ Form::select('compromiso_franquicia', [''=>'¿Esta convencido del compromiso que representa abrir una franquicia?','si'=>'Si', 'no'=>'No'], null, []) }}
			</div>
			<div class="line">
				{{ Form::input('text', 'porque_compromiso', null, ['placeholder'=>'¿Por qué?', 'style'=>'display:none']) }}
			</div>

			<div class="line line_check">
				{{ Form::checkbox('confirmacion', 'yes', 'checked', ['data-validate'=>'required']) }}
				<label for="confirmacion">He leído y acepto los términos del </label> <a href="/aviso-de-privacidad" target="_blank" title="Ver el aviso de privacidad para la solicitud de una franquicia de Reyes Salón Cantina">aviso de privacidad</a>.
				<p class="alert">Debes aceptar los terminos y condiciones del aviso de privacidad.</p>
			</div>

			<div class="line line_check">
				{{ Form::checkbox('confirmacion', 'yes', 'checked', ['data-validate'=>'required']) }}
				<label for="confirmacion">Confirmo que la información proporcionada es real.</label>			
				<p class="alert">Debes confirmar que los datos que propocionas son reales.</p>
			</div>
			
			<div class="line"><p class="alert" style="text-align:center"></p></div>

			<div class="line">
				<!-- <p class="alert" style="text-align:center">Por favor llena los campos marcados en rojo.</p> -->
				{{ Form::submit('Enviar solicitud', ['class'=>'submitBtn', 'id'=>'franquiciasBtn']) }}
			</div>

			<div class="sent_mail_alert">Gracias! <br>Tu información se envió correctamente, en breve nos pondremos en contacto contigo.</div>

		{{ Form::close()}}
	</section>

	<section>
		<p class="text">
			Esta solicitud será evaluada por Grupo Reyes quien le dará a conocer a usted los siguientes pasos, dentro del proceso de otorgamiento de la franquicia. El tiempo de respuesta será el que la empresa franquiciante determine, la información proporcionada será manejada por Grupo Reyes con absoluta discreción y confidencialidad.
		</p>
	</section>

@stop