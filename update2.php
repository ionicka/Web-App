<?php
 include("conectare.php");

$numeProfesor = $_POST['numeProfesor'];
$clasaPofesor = $_POST['ClasaDiriginte'];
$sql = "UPDATE profesori SET NumeClasa = '$clasaPofesor' WHERE NumeProfesor =' $numeProfesor'";
$result = mysqli_query($conectare, $sql);
header("Location: index.php");
