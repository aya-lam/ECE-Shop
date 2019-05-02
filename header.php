<?php
session_start();
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>ECE Amazon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--====Modification de la taille de l'écaran en fonction de la taille de l'écran===============================================================-->	
	<link rel="icon" type="image/png" href="images/icons/ece.png"/>
<!--Le logo à la barre du titre===================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="efonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/util.css">
	<link rel="stylesheet" type="text/css" href="style/main.css">
<!--===============================================================================================-->
</head>

<body> 
<header class="header-v3">
		<!-- le menu dur la largeur de la page avec bootstrap 3 -->
		<div class="container-menu-desktop trans-03"> 
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="home-03.html">Acceuil</a>
							</li>

							<li>
								<a href="product.html">Magasin</a>
								<ul class="sub-menu">
									<li><a href='#'>Livres</a></li>
									<li><a href='#'>Musiques</a></li>
									<li><a href='#'>Vêtements</a>
										<ul class="sub-menu">
											<li><a href='#'>Femmes</a></li>
											<li><a href='#'>Hommes</a></li>
										</ul>
									</li>
									<li><a href='#'>Sport & Loisir</a></li>
								</ul>
							</li>

							<li class="label1" data-label1="hot">
								<a href="shoping-cart.html">Ventes Flash</a>
							</li>

							<li>
								<a href="about.html">A propos</a>
							</li>

							<li>
								<a href="contact.html">Contactez-nous</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">							
						<div class="flex-c-m h-full p-r-25 bor6">
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
						</div>
							
						<div class="flex-c-m h-full p-lr-19">
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
								<i class="zmdi zmdi-menu"></i>
							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div>


		
		


		

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>
</body>
</html>