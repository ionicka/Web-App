<?php

$conectare = mysqli_connect('localhost', 'root', '', 'scoala');

if(!$conectare){
    die(mysqli_connect_error());
}
