<?php
include ("conectare.php");
$nume = $_POST['nume'];
$sql = "DELETE FROM elevi WHERE NumeElev = '$nume'";
$sql1 = "DELETE FROM note WHERE NumeElev = '$nume'";



include('conectare.php');
    $sql="SELECT NumeClasa from elevi where NumeElev ='$nume'";
    $result=mysqli_query($conectare, $sql);
      $b = is_null($result);
    if($b!="1"){
    	$sql2 = "UPDATE clase SET NrPersoane =  NrPersoane-1 where NumeClasa ='$diriginte' ";
    }
    

$result = mysqli_query($conectare, $sql);
$result = mysqli_query($conectare, $sql2);

header("Location: index.php");


