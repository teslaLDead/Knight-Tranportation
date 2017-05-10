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
						<h1>Trips</h1>
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
						$sql = "SELECT * FROM trip ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
							echo "<table align='center' style='text-align:center;'><thead style='border: solid 1px #cecccc;background: #a3a9a9;color: white;font-size: 20px;'><tr><th> Trip Number </th><th > Truck Id </th><th > Shipment Id </th></tr></thead><tbody style='    border: #cecccc 1px solid;
    background: #f9f9f9;
    font-size: 18px;'>";
							while($row = $result->fetch_assoc()) {
          echo "<tr style='zborder-bottom: solid 1px #bda7a7;box-shadow: 0px 2px 5px 2px #f1f1f1;'><td><span> ". $row["TRIP_NUMBER"]. "</span></td><td><span> " . $row["TID"]. "</span></td><td><span> " . $row["SHIPMENT_NUMBER"]."</span></td></tr>";
      }
			echo "</tbody></table>";
  } else {
      echo "0 results";
  }

						$sql2="select truck.REG_NO,ship_quantity.QUANTITY,ship_quantity.PRODUCT from trip,truck,ship_quantity where truck.TID=trip.TID and trip.SHIPMENT_NUMBER=ship_quantity.SHIPMENT_NUMBER";
						$result2 = $conn->query($sql2);
						if ($result2->num_rows > 0) {
							echo "<table align='center' style='text-align:center;'><thead style='border: solid 1px #cecccc;background: #a3a9a9;color: white;font-size: 20px;'><tr><th>Truck Reg No.</th><th >QUANTITY</th><th >PRODUCT</th></tr></thead><tbody style='    border: #cecccc 1px solid;
    background: #f9f9f9;
    font-size: 18px;'>";
							while($row = $result2->fetch_assoc()) {
          echo "<tr style='zborder-bottom: solid 1px #bda7a7;box-shadow: 0px 2px 5px 2px #f1f1f1;'><td><span> ". $row["REG_NO"]. "</span></td><td><span> " . $row["QUANTITY"]. "</span></td><td><span> " . $row["PRODUCT"]."</span></td></tr>";
      }
			echo "</tbody></table>";
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
        <a href="matrix_ingredients.php" class="icon-mail">Ingredients</a>

			</nav>
		</div><!-- /perspective -->
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>
