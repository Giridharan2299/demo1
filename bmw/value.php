<?php
$servername = "localhost";
$username = "root";
$password = "giri123@G";
$db_name = "submit";
$conn =  new mysqli($servername,$username,$password,$db_name,4306);
if(conn->connect_error){
    die("connection failed".$conn->connect_error);

}
echo "connection Successfully";
