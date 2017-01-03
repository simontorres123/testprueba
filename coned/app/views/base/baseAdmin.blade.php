<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/packages/admin/assets/ico/favicon.png">

    <title>TESTED</title>

    <!--
    <link href="/packages/admin/assets/css/bootstrap.css" rel="stylesheet">

    <link href="/packages/admin/assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="/packages/admin/assets/css/font-awesome.min.css">

    <script src="/packages/admin/assets/js/jquery.min.js"></script>
	<script src="/packages/admin/assets/js/Chart.js"></script>
	<script src="/packages/admin/assets/js/modernizr.custom.js"></script>
 	-->
	
	{{HTML::style('/packages/admin/assets/css/bootstrap.css')}}
	{{HTML::style('/packages/admin/assets/css/main.css')}}
	{{HTML::style('/packages/admin/assets/css/font-awesome.min.css')}}
	{{HTML::script('/packages/admin/assets/js/jquery.min.js')}}
	{{HTML::script('/packages/admin/assets/js/Chart.js')}}
	{{HTML::script('/packages/admin/assets/js/modernizr.custom.js')}}
     @yield('css')
	

	
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="/">TESTED</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="/" class="smoothScroll">Inicio</a>
			<a href="" class="smoothScroll">Altas</a>
			<a href="/vRegistro"><i class="smoothScroll"></i>Personal</a>
			<a href="/vClientes" class="smoothScroll">Clientes</a>
			<a href="/vPreguntas" class="smoothScroll">Preguntas</a>
			<a href="" class="smoothScroll"></a>
			<a href="" class="smoothScroll">Actualizaciones</a>
			<a href="/inicio/cliente"><i class="smoothScroll"></i>Clientes</a>
			<a href="" class="smoothScroll">Preguntas</a>


		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>


	
	<!-- ========== HEADER SECTION ========== -->
	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<br>
			<h1>Panel</h1>
			<h2>Administración</h2>
			<div class="row">
				<br>
				<br>
				<br>
				<div class="col-lg-6 col-lg-offset-3">
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	

	
	<!-- ========== CHARTS - DARK GREY SECTION ========== -->
	<div id="dg">
		<div class="container">
			<div class="row">
				<h1>@yield('titulo')</h1>
				<br>
				
			</div>
			@yield('contenido')		
		</div><!-- /container -->
	</div><!-- /dg -->
	<!--
	<section id="portfolio" name="portfolio"></section>
	<div id="portfoliowrap">
		<div class="container">
			<div class="row">
				<h3>COOL WORKS</h3>
				<br>
				<br>
				<div class="col-lg-4 port-space">
					<a href="item.html"><img src="assets/img/work1.png"></a>
				</div>
				<div class="col-lg-4 port-space">
					<a href="item.html"><img src="assets/img/work2.png"></a>
				</div>
				<div class="col-lg-4 port-space">
					<a href="item.html"><img src="assets/img/work3.png"></a>
				</div>				
			</div>	
		</div>
	</div> /portfoliowrap -->
	
	
	
	<!-- ========== FOOTER SECTION ========== -->
	<section id="contact" name="contact"></section>
	<div id="f">
		<div class="container">
			<div class="row">
					<br>
					<h3><b>TESTED</b></h3>

					<div class="col-lg-4">

						<h4>Aplica y evalua</h4>
					</div>
					
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /f -->
	<!--
	<div id="c">
		<div class="container">
			<p>Created by <a href="http://www.blacktie.co">BLACKTIE.CO</a></p>
		
		</div>
	</div>
	-->
	
	<!--
	<script src="/packages/admin/assets/js/classie.js"></script>
    <script src="/packages/admin/assets/js/bootstrap.min.js"></script>
    <script src="/packages/admin/assets/js/smoothscroll.js"></script>
	<script src="/packages/admin/assets/js/main.js"></script> -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
	{{HTML::script('/packages/admin/assets/js/classie.js')}} 
	{{HTML::script('/packages/admin/assets/js/bootstrap.min.js')}} 
	{{HTML::script('/packages/admin/assets/js/smoothscroll.js')}} 
	{{HTML::script('/packages/admin/assets/js/main.js')}}
	{{HTML::script('/packages/jquery-validate/dist/jquery.validate.min.js')}}
    {{HTML::script('/packages/jquery-validate/dist/localization/messages_es.js')}} 
    @yield('js')
	

</body>
</html>
