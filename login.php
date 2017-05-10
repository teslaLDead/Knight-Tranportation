<!DOCTYPE html>
<html>
<head><title>Login For Employees</title>
<style>

.contact input[type="text"],
.contact input[type="email"],
.contact input[type="tel"],
.contact input[type="url"],
.contact textarea,
.contact button[type="submit"] {
font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

.contact {
background: #F9F9F9;
padding: 25px;
margin: 150px 0;
box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.contact h3 {
display: block;
font-size: 30px;
font-weight: 300;
margin-bottom: 10px;
}

.contact h4 {
margin: 5px 0 15px;
display: block;
font-size: 13px;
font-weight: 400;
}

fieldset {
border: medium none !important;
margin: 0 0 10px;
min-width: 100%;
padding: 0;
width: 100%;
}

.contact input[type="text"],
.contact input[type="email"],
.contact input[type="tel"],
.contact input[type="url"],
.contact textarea {
width: 100%;
border: 1px solid #ccc;
background: #FFF;
margin: 0 0 5px;
padding: 10px;
}

.contact input[type="text"]:hover,
.contact input[type="email"]:hover,
.contact input[type="tel"]:hover,
.contact input[type="url"]:hover,
.contact textarea:hover {
-webkit-transition: border-color 0.3s ease-in-out;
-moz-transition: border-color 0.3s ease-in-out;
transition: border-color 0.3s ease-in-out;
border: 1px solid #aaa;
}

.contact textarea {
height: 100px;
max-width: 100%;
resize: none;
}

.contact button[type="submit"] {
cursor: pointer;
width: 100%;
border: none;
background: #4CAF50;
color: #FFF;
margin: 0 0 5px;
padding: 10px;
font-size: 15px;
}

.contact button[type="submit"]:hover {
background: #43A047;
-webkit-transition: background 0.3s ease-in-out;
-moz-transition: background 0.3s ease-in-out;
transition: background-color 0.3s ease-in-out;
}

.contact button[type="submit"]:active {
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);}
</style>
</head>
<body style="text-align:center;">
<div style="width:250px; margin-right:auto; margin-left:auto;">
<form id='login' class="contact" action='login.php' method='post' accept-charset='UTF-8' style="width:250px;margin:0px;">


<fieldset><input type='hidden' name='submitted' id='submitted' value='1'/></fieldset>
<fieldset><label for='username' >UserName</label></fieldset>
<fieldset><input type='text' name='username' id='username'  maxlength="50" /></fieldset>
<fieldset><label for='password' >Password</label></fieldset>
<fieldset><input type='password' name='password' id='password' maxlength="50" /></fieldset>
<fieldset><input type='submit' name='Submit' value='Submit' /></fieldset>

</form>
</div>
<?php



function Login()
{
if(empty($_POST['username']))
{
echo "UserName is empty!";
return false;
}
if(empty($_POST['password']))
{
echo "Password is empty!";
return false;
}
$username = trim($_POST['username']);
$password = trim($_POST['password']);
if($username=="tesla" and $password=="tesla123")
{
header("Location:matrix_home.php");
session_start();
$_SESSION[$this->GetLoginSessionVar()] = $username;
return true;
exit();
}
else{
  echo "Login Failed. Check username and password. If nothing works go to IT department.";
}


}
Login();  ?>
</body>
</html>
