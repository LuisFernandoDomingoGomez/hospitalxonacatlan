<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hospital Municipal Xonacatlan “Vicente Guerrero” Bicentenario </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="http://localhost:8000/hospital/public/login/css/main1.1.css">

<!--===============================================================================================-->	

<!--===============================================================================================-->

	
<!--===============================================================================================-->

<!--===============================================================================================-->	

	<link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon3.ico')}}"/>

<!--===============================================================================================-->

<link rel="stylesheet" href="styles/css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="styles/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="styles/css/style.css">
	<link rel="stylesheet" href="styles/css/responsive.css">




<script>
function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    //Add a zero in front of numbers<10
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + " : " + min + " : " + sec;
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
</script>
<style type='text/css'>
.clockdate-wrapper {
    background-color: #B9B2B2;
    padding:15px;
    max-width:300px;
    width:90%;
    text-align:center;
    border-radius:10px;
    margin:0 auto;
    margin-top:15%;
}
#clock{
    background-color:#B9B2B2;
    font-family: sans-serif;
    font-size:20px;
    text-shadow:0px 0px 1px #fff;
    color:#fff;
}
#clock span {
    color:#888;
    text-shadow:0px 0px 1px #B9B2B2;
    font-size:3px;
    position:relative;
    top:-27px;
    left:-10px;
}
</style>
</head>
<body onload="startTime()">
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
				<div class="float-left">
					<ul class="left_side">
						<li>
							<!--<a href="login.html">
								<i class="fa fa-facebook-f"></i>-->
							</a>
						</li>
						<li>
							<!--<a href="login.html">
								<i class="fa fa-twitter"></i>-->
							</a>
						</li>
						<li>
							<!--<a href="login.html">
								<i class="fa fa-dribbble"></i>-->
							</a>
						</li>

						<td width="1580" height="108"><h3><img src="images.jpg" width="150" height="60" alt=""/><img src="isem_original.png" width="90" height="40" alt=""> 
							Instituto de la Salud del Estado de México</h3></td>
						<div class="float-right">

						<li>
							<!--<a href="login.html">
								<i class="fa fa-behance"></i>-->
							</a>
						</li>
					</ul>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li></li>
								<i class="lnr lnr-phone-handset"></i>
								(017192888211) (017192888212)
							</a>
						</li>
						<li>
								<i class="lnr lnr-envelope"></i>
							    hm.xonacatlan@gmail.com
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<br><br><br><br><br><br>					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active" >
										<br>
										<a class="nav-link active"  href="index.html">Inicio</a>
									</li>

									<li class="nav-item active">
										<br>
										<a class="nav-link active"  href="acercadelhospital.html">Acerca del Hospital</a>
									</li>
										<li class="nav-item active">
										<br>
										<a class="nav-link active"  href="atencionmedica.html">Atencion Medica</a>
									</li>
									<li class="nav-item active">
										<br>
										<a class="nav-link active"  href="acciones.html">Acciones</a>
									</li>

									<li class="nav-item active ">
										<br>
										<a class="nav-link active"  href="departments.html">Información</a>
									</li>
									
									<li class="nav-item active">
										<br>
										<a class="nav-link active"  href="doctors.html">Contacto</a>
									</li>
									<li class="nav-item active">
										<br>
										<a class="nav-link active"   href="http://localhost:8000/hospital/public/index">Acceder</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
			  </div>
			</nav>
		</div>
	</header>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('login/images/img-01.png')}}" alt="IMG">
				<div id="clockdate">
  <div class="clockdate-wrapper">
    <div id="clock"></div>
    <div id="date"></div>
  </div>
</div>
				</div>




				<form class="login100-form validate-form" action = "{{route('validalogin')}}" method = 'POST' >
				{{csrf_field()}}
					<span class="login100-form-title">
						Iniciar Sesión
					</span>

		<div class="wrap-input100 validate-input" data-validate = "El usuario es requerido">
		<input class="input100" type="email" name="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Correo del usuario" value="{{ old('email') }}">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "La contraseña es requerida">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button  class="login100-form-btn" >
							<i class="fa fa-sign-in" aria-hidden="true" ></i> Entrar 
						</button>
					</div>
                    @if(Session::has('error'))
    <div align='center'>-->{{ Session::get('error') }}</div>
                       @endif
					 
					<div class="text-center p-t-12">
						<span class="txt1">
							Olvidó contraseña
						</span>
					<!-- 	<a  href="http://localhost/sistema/public/correo" > -->
							<div class="forgot">
									<a href="{{URL::action('cusuarios@email')}}">Recordar mi contraseña</a>
								</div>
						</a>
						
					</div>
<!-- //////////PASAR///////////// -->

<!-- //////////PASAR///////////// -->

					<div class="text-center p-t-12">
						
					<!-- 	<a  href="http://localhost/sistema/public/correo" > -->
								<a href="https://www.google.com/">
							<button type="button" class="btn btn-success" >
								
								Entrar a tu correo Institucional
							
							</button>
							</a>
						
					</div>

				</form>
				
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->	
	<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('login/js/main.js')}}"></script>

</body>
</html>