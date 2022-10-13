<?php
 include("conectare.php");
$nume = $_POST['nume'];
$nota = $_POST['nota'];
$sql = "UPDATE note SET Nota = '$nota' WHERE NumeElev ='$nume'";
$result = mysqli_query($conectare, $sql);
header("Location: index.php");


