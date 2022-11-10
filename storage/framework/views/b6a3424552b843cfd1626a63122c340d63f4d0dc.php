<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hospital Municipal Xonacatlan “Vicente Guerrero” Bicentenario </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="http://localhost:8000/hospital/public/login/images/icons/favicon3.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8000/hospital/public/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8000/hospital/public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8000/hospital/public/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://localhost:8000/hospitala/public/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8000/hospital/public/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8000/hospital/public/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:8000/hospital/public/login/css/main1.1.css">
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


</style>
</head>
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
				

<table class="default">

  <tr>

    <td>
    	
    	<div class="login100-pic js-tilt" data-tilt>
					<!-- <img src="http://localhost:8000/hospital/public/login/images/f1.jpg" alt="IMG"> -->
					<img src="login/images/f1.jpg" width="300" height="250" >
				
			</div>
    </td>

    <td>

    	<div>
                    			
<form action = "<?php echo e(route('guardaemail')); ?>" method = "POST">
	<?php echo e(csrf_field()); ?>

				
					<span class="login100-form-title">
						RECUPERACIÓN DE CONTRASEÑA:
					</span>
					<div class="wrap-input100 validate-input" data-validate = "El correo es requerido">
						<input class="input100" type = 'text' name = 'correo' value="<?php echo e(old('correo')); ?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Correo del usuario">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					
					<div class="container-login100-form-btn">
						<button  class="login100-form-btn" >
							<i class="fa fa-sign-in" aria-hidden="true" ></i> Enviar
						</button>
					</div>
					<br>
                  
                  <a href="<?php echo e(('index')); ?>">
							<button type="button" class="btn btn-primary" >
								
								Regresar
							
							</button>
							</a>
                   
					 
					 
				</form>
				</div>

    </td>

    

  </tr>

  
</table>
				



		</div>
	</div>
	