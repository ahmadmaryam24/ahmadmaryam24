<?php

require_once 'profile.php';



echo loginform();

if (isset($_POST['login'])) {
	$name = $_POST["fname"];
	$password = $_POST["pword"];

echo "welome". $name."to i360 I.T forum";
}


?>