<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "banksystem";

$con = mysqli_connect($server, $username, $password, $db);

if(!$con)
{
    die("no connection".mysqli_connect_error());
}

?>