<?php
require 'conectare.php';
$nume = $_POST['nume'];
$prenume = $_POST['prenume']; 
$varsta = $_POST['varsta'];
$numeClasa = $_POST['NumeClasa'];
$nota = $_POST['Nota'];
$help = '1';


include('conectare.php');
    $sql="SELECT NumeClasa from elevi where NumeClasa ='$numeClasa'";
    $result=mysqli_query($conectare, $sql);
      $b = is_null($result);
    if($b=="1"){
    	$sql2 = "INSERT INTO clase (NumeClasa, NrPersoane) VALUES ('$numeClasa','$help')";
    }else {
    	$sql2 = "UPDATE clase SET NrPersoane =  NrPersoane+1 where NumeClasa ='$numeClasa' ";
    }


$sql = "INSERT INTO elevi (NumeElev, PrenumeElev, Varsta, NumeClasa) VALUES ('$nume', '$prenume', '$varsta', '$numeClasa')";
$sql1 = "INSERT INTO note (NumeElev,Nota) VALUES ('$nume','$nota')";




$result = mysqli_query($conectare, $sql);
$result = mysqli_query($conectare, $sql1);
$result = mysqli_query($conectare, $sql2);
header("Location: index.php");





