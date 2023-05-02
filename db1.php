<?php

$servername = "172.16.2.3";
$username = "student";
$password = "student";
$database = "student";


$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
die("Connection Failed:".$conn->connect_error);
}

echo "Connected Successfully";

mysqli_close($conn);

?>
