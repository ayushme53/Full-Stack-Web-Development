<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'csc2020';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);   
if ($conn){
}
else{
    echo mysqli_connect_error();
}
?>
