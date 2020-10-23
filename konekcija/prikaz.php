<?php 

// prikaz podataka iz baze na stranici index.php

require 'dbconnection.php';

$upit = "SELECT * FROM ucenici";

$result = mysqli_query($conn, $upit);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

    }
}else{
    echo "u bazi ne postoji nista";
}








?>