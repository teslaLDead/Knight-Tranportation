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
$a=$_GET['S_number'];
$b=$_GET['product'];
$c=$_GET['qunatity'];
$d=$_GET['description'];
$e=$_GET['wid'];

$SQL1="INSERT INTO production_unit (`SERIAL_NUMER`,`PRODUCT`,`QUANITY`,`DESCRIPTION`,`WID`) VALUES ($a, '$b', $c,'$d',$e);";

if ($conn->multi_query($SQL1) === TRUE) {
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
