<?php
require 'conectare.php';

$numeP = $_POST['numeP'];
$prenumeP = $_POST['prenumeP']; 
$materie = $_POST['materie'];
$diriginte = $_POST['clasaDiriginte'];
$help = '1';

include('conectare.php');
    $sql="SELECT NumeClasa from profesori where NumeClasa ='$diriginte'";
    $result=mysqli_query($conectare, $sql);
      $b = is_null($result);
    if($b=="1"){
    	$sql2 = "INSERT INTO clase (NumeClasa, NrPersoane) VALUES ('$diriginte','$help')";
    }else {
    	$sql2 = "UPDATE clase SET NrPersoane =  NrPersoane+1 where NumeClasa ='$diriginte' ";
    }

$sql = "INSERT INTO profesori (NumeProfesor, PrenumePofesor, Materie, NumeClasa) VALUES ('$numeP', '$prenumeP', '$materie', '$diriginte')";

$result = mysqli_query($conectare, $sql);
$result = mysqli_query($conectare, $sql2);
header("Location: index.php");
