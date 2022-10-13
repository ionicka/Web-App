<?php
require 'conectare.php';
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

if ('parola' == $_POST['password_txt'] & 'nume' == $_POST['login_txt'])  {

	header("Location: index.php");
}
else {
	function_alert("Welcome to Geeks for Geeks");
	header("Location: conect.php");
}
