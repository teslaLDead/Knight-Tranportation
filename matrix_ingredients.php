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
		<style> td{padding: 10px;}</style>
	</head>
	<body>
		<div id="perspective" class="perspective effect-airbnb">
			<div class="container">
				<div class="wrapper"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->

					<header class="codrops-header">
            <img src="img/menu.png" id="showMenu" style="float:right;cursor:pointer">
						<h1>Ingredients</h1>
					<!--	<h1>Welcome To The Control Panel <span>Control panel for all your needs.</span></h1>-->
					</header>
					<div class="main clearfix">
						<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "choc_land";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
						$sql = "SELECT * FROM ingredients";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
          echo "<span>". $row["PRODUCT"]. "</span><span>" . $row["M1_QUANTITY"]. "</span><span>" ."</span><span>" . $row["M2_QUANTITY"]. "</span><span>"."</span><span>" . $row["M3_QUANTITY"]. "</span><span>"."</span><span>".$row["M4_QUANTITY"]."</span><span>".$row["M5_QUANTITY"];
					echo "</span><span>" . $row["M6_QUANTITY"]. "</span><span>"."</span><span>" . $row["M7_QUANTITY"]. "</span><span>"."</span><span>" . $row["M8_QUANTITY"]. "</span><br>";
      }
  } else {
      echo "0 results";
  }


						$conn->close();
            ?>


					</div><!-- /main -->
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav left vertical">
        <a href="matrix_home.php" class="icon-home">Home</a>
        <a href="matrix_production.php" class="icon-news">Production</a>
        <a href="matrix_stores.php" class="icon-image">Stores</a>
        <a href="matrix_warehouses.php" class="icon-star">Warehouses</a>
        <a href="matrix_transportation.php" class="icon-mail">Transportation</a>

        <a href="matrix_trips.php" class="icon-lock">Trips</a>
			</nav>
		</div><!-- /perspective -->
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>
