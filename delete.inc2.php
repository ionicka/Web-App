<?php
include ("conectare.php");


$numeP = $_POST['numeP'];

include('conectare.php');
    $sql="SELECT NumeClasa from profesori where NumeProfesor ='$numeP'";
    $result=mysqli_query($conectare, $sql);
      $b = is_null($result);
     if($b!="1"){
    	$sql2 = "UPDATE clase SET NrPersoane =  NrPersoane-1 where NumeClasa ='$diriginte' ";
    }

$sql = "DELETE FROM profesori WHERE NumeProfesor = '$numeP'";



$result = mysqli_query($conectare, $sql);
$result = mysqli_query($conectare, $sql2);

header("Location: index.php");
