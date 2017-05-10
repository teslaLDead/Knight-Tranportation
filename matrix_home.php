<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perspective Page View Navigation</title>
		<meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
		<meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
		<script src="js/modernizr.custom.25376.js"></script>
	</head>
	<body>
		<div id="perspective" class="perspective effect-airbnb">
			<div class="container">
				<div class="wrapper"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->

					<header class="codrops-header">
            <img src="img/menu.png" id="showMenu" style="float:right;cursor:pointer">
						<h1>Welcome To The Matrix <span>Control panel for all your needs.</span></h1>
					<!--	<h1>Welcome To The Control Panel <span>Control panel for all your needs.</span></h1>-->
					</header>
					<div class="main clearfix">
						<div class="column">
							
						</div>


					</div><!-- /main -->
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav left vertical">

				<a href="matrix_production.php" class="icon-news">Production</a>
				<a href="matrix_stores.php" class="icon-image">Stores</a>
				<a href="matrix_warehouses.php" class="icon-star">Warehouses</a>
				<a href="matrix_transportation.php" class="icon-mail">Transportation</a>
				<a href="matrix_ingredients.php" class="icon-mail">Ingredients</a>
				<a href="matrix_trips.php" class="icon-lock">Trips</a>
			</nav>
		</div><!-- /perspective -->
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>
