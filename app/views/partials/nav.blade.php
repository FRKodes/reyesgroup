<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			{{ link_to('/', '', ['class'=>'navbar-brand'], $secure = null) }}
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				@if(Request::path() == "franquicias")
					<li><a href="/">Home</a></li>
					<li><a href="/#filosofia">Filosofía</a></li>
					<li><a href="/#nuestros-platillos">Concepto</a></li>
					<li class="unidades"><a href="/#unidades">Unidades</a></li>
					<li><a href="/#contacto">Contacto</a></li>
					<li><a href="/franquicias">Franquicias</a></li>
				@else
					<li><a href="#home">Home</a></li>
					<li><a href="#filosofia">Filosofía</a></li>
					<li><a href="#nuestros-platillos">Concepto</a></li>
					<li class="unidades"><a href="#unidades">Unidades</a></li>
					<li><a href="#contacto">Contacto</a></li>
					<li><a href="/franquicias">Franquicias</a></li>
				@endif
			</ul>
		</div>
	</div>
</nav>