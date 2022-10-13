<?php

require 'conectare.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Introducere Elevi</h1>
<form action = "signup.inc.php" method="POST"  align="center">
    <input type="text" name="nume" placeholder="nume"><br><br>
    <input type="text" name="prenume" placeholder="prenume"><br><br>
    <input type="text" name="varsta" placeholder="varsta"><br><br>
    <input type="text" name="NumeClasa" placeholder="Nume Clasa"><br><br>
    <input type="text" name="Nota" placeholder="Nota"><br><br>
    <input type="submit" name="trimite" value="Adauga"><br><br>

</form>
<h1  align="center">Update Nota</h1>
<form action="update.inc.php" method="POST"  align="center"> 
       <input type="text" name="nume" placeholder="numeElev"><br><br>
       <input type="text" name="nota" placeholder="Nota Finala"><br><br>
       <input type="submit" name="trimite" value="Modifica"><br><br>


</form><br>
<h1  align="center">Delete Elev </h1>

<form action="delete.inc.php" method="POST"  align="center">
       <input type="text" name="nume" placeholder="Nume Elev"><br><br>
       <input type="submit" name="trimite" value="Sterge"><br><br>


</form><br>

<h1  align="center">Tabelul Elevi</h1>
<?php
    include('conectare.php');
    $sql="select * from elevi";
    $result=mysqli_query ($conectare, $sql);
?>
<table align="center" border="1px" style="width:600px; line-height:40px;">
    <t>
        <th> nume </th>
        <th> prenume </th>
        <th> varsta </th>
        <th> clasa </th>
        
    </t>
<?php
    while($rows=mysqli_fetch_assoc($result))
  {
?>
        <tr>
            <td  align="center"><?php echo $rows['NumeElev']; ?></td>
            <td  align="center"><?php echo $rows['PrenumeElev']; ?></td>
            <td  align="center"><?php echo $rows['Varsta']; ?></td>
            <td  align="center"><?php echo $rows['NumeClasa']; ?></td>
        </tr>

<?php
  }
?>

</table>
<h1  align="center">Tabelul Note</h1>
<?php
    include('conectare.php');
    $sql="select * from note";
    $result=mysqli_query ($conectare, $sql);
?>
<table align="center" border="1px" style="width:600px; line-height:40px;">
    <t>
        <th> nume </th>
        <th> nota </th>
    </t>
<?php
    while($rows=mysqli_fetch_assoc($result))
  {
?>
        <tr>
            <td  align="center"><?php echo $rows['NumeElev']; ?></td>
            <td  align="center"><?php echo $rows['Nota']; ?></td>
        </tr>

<?php
  }
?>

</table>
<h1 align="center">Introducere Profesor</h1>
<form action = "signup.inc2.php" method="POST"  align="center">
    <input type="text" name="numeP" placeholder="nume "><br><br>
    <input type="text" name="prenumeP" placeholder="prenume "><br><br>
    <input type="text" name="materie" placeholder="materie"><br><br>
    <input type="text" name="clasaDiriginte" placeholder="Clasa Diriginte"><br><br>
    <input type="submit" name="trimite" value="Adauga"><br><br>

</form>
<h1  align="center">Update Diriginte Clasa</h1>
<form action="update.inc2.php" method="POST"  align="center"> 
       <input type="text" name="numeProfesor" placeholder="numeProfesor"><br><br>
       <input type="text" name="ClasaDiriginte" placeholder="ClasaDiriginte"><br><br>
       <input type="submit" name="trimite" value="Modifica"><br><br>


</form><br>
<h1  align="center">Delete Profesori</h1>

<form action="delete.inc2.php" method="POST"  align="center">
       <input type="text" name="numeP" placeholder="nume Profesor"><br><br>
       <input type="submit" name="trimite" value="Sterge"><br><br>


</form><br>

<h1  align="center">Tabelul Profesori</h1>
<?php
    include('conectare.php');
    $sql="select * from profesori";
    $result=mysqli_query ($conectare, $sql);
?>
<table align="center" border="1px" style="width:600px; line-height:40px;">
    <t>
        <th> nume profesor </th>
        <th> prenume profesor </th>
        <th> materie </th>
        <th> clasa diriginte </th>
      
    </t>
<?php
    while($rows=mysqli_fetch_assoc($result))
  {
?>
        <tr>
            <td  align="center"><?php echo $rows['NumeProfesor']; ?></td>
            <td  align="center"><?php echo $rows['PrenumePofesor']; ?></td>
            <td  align="center"><?php echo $rows['Materie']; ?></td>
            <td  align="center"><?php echo $rows['NumeClasa']; ?></td>
        </tr>

<?php
  }
?>

</table>
<h1  align="center">Tabelul Clase</h1>
<?php
    include('conectare.php');
    $sql="select * from clase";
    $result=mysqli_query ($conectare, $sql);
?>
<table align="center" border="1px" style="width:600px; line-height:40px;">
    <t>
        <th> numeClasa </th>
        <th> nrPersoane </th>
    </t>
<?php
    while($rows=mysqli_fetch_assoc($result))
  {
?>
        <tr>
            <td  align="center"><?php echo $rows['NumeClasa']; ?></td>
            <td  align="center"><?php echo $rows['NrPersoane']; ?></td>
        </tr>

<?php
  }
?>

<table>
<h1   >Cel mai tanar elev </h1>

<?php
    include('conectare.php');
    $sql="SELECT MIN(Varsta) AS min FROM elevi";
    $result=mysqli_query ($conectare, $sql);

while($rows=mysqli_fetch_assoc($result))
  {
    ?>
   <tr>
            <td  align="center"><?php echo $rows['min']; ?></td>
            
        </tr>
        <?php
  }

?>

<h1  align="center">Tabelul Elevi sortat dupa varsta </h1>
<?php
    include('conectare.php');
    $sql="SELECT * from elevi Order by Varsta Desc ";
    $result=mysqli_query ($conectare, $sql);
?>
<table align="center" border="1px" style="width:600px; line-height:40px;">
    <t>
        <th> nume </th>
        <th> prenume </th>
        <th> varsta </th>
        <th> clasa </th>
        
    </t>
<?php
    while($rows=mysqli_fetch_assoc($result))
  {
?>
        <tr>
            <td  align="center"><?php echo $rows['NumeElev']; ?></td>
            <td  align="center"><?php echo $rows['PrenumeElev']; ?></td>
            <td  align="center"><?php echo $rows['Varsta']; ?></td>
            <td  align="center"><?php echo $rows['NumeClasa']; ?></td>
        </tr>

<?php
  }
?>

<table>
<h1   > notele elevilor </h1>

<?php
    include('conectare.php');
    $sql="SELECT elevi.NumeElev , note.Nota FROM elevi INNER JOIN note ON elevi.NumeElev = note.Nota";
    $result=mysqli_query ($conectare, $sql);
?>
<table align="center" border="1px" style="width:600px; line-height:40px;">
    <t>
        <th> nume </th>
        <th> nota </th>
    </t>
<?php
    while($rows=mysqli_fetch_assoc($result))
  {
?>
        <tr>
            <td  align="center"><?php echo $rows['NumeElev']; ?></td>
            <td  align="center"><?php echo $rows['Nota']; ?></td>
        </tr>
        <?php
  }

?>
       
</form><br>
</table>
</body>
</html>
