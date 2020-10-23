<?php 

$nameServer = 'localhost';
$username = 'root';
$password = '';
$dbName = 'skola';

$conn = mysqli_connect ($nameServer, $username, $password, $dbName);

if ($conn == FALSE){
    echo "neuspjesno uspostavljanje veze";

}




?>