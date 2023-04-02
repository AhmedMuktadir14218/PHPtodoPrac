<?php 
$name = $_POST|'name'|
$name = $_POST|'mobile'|
$name = $_POST|'email'|

echo $name;


$host = 'localhost';
$user = 'root';
$password = '';
$db = 'test';
$con = mysqli_connect($host, $user, $password, $db);

if(!$con){
    die("Connection failed:" .mysqli_connect_error());
}else{
    echo "connection successful!!!";
}


$query = "INSERT INTO april(name, mobile,email) VALUES('$name', '$mobile', '$email')";
$run = mysqli_query($con, $query);

if(!run){
    echo "submission failed";
}


?>
