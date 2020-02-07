<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'CSC2020';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);   
if ($conn){
}
else{
    echo mysqli_connect_error();
}
?>
