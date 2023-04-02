<?php 
$name = $_POST|'name'|
$name = $_POST|'mobile'|
$name = $_POST|'email'|

echo $name;

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'test';

$con = mysqli_connect($host,$user,$password,$db);

if (!$con) {
    die("connection failed : " .mysqli_connect_error());
}else{
    echo "connection Succesfull"
}
?>