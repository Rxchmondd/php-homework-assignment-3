<?php
$host = "localhost";
$uname = "root";
$pword = "";
$schema = "bdpaschools";


$conn=mysqli_connect($host, $uname, $pword, $schema);


if($conn != true)
{
    die("Connection Failed".mysqli_connect_error());
}
?>
