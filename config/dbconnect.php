<?php
$db_name = "vatlieuxaydung";
$host = "localhost";
$name = "root";
$password = "";

$conn = new mysqli($host, $name, $password, $db_name);

if($conn->connect_error){
    die("Connect failed!" . $conn->connect_error);
}
// else{
//     echo "Successfully";
// }