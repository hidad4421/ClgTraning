<?php

$servername="localhost";
$username="root";
$password="";
$database="db_books";

//create the connection
$con = mysqli_connect($servername,$username,$password,$database);

// die if the connection was not successful
if(!$con){
    die("sorry we fail to connect".mysqli_connect_error());
}
else{
echo "<br/>connection was successful ";
}
$sql="SELECT * FROM `5semstudents`";
$result=mysqli_query($con,$sql);

?>