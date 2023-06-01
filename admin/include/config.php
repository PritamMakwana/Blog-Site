<?php

session_start();
session_regenerate_id(true);

$homename = "http://localhost:81/Cyberonion/admin";

$hostName = "localhost";
$userName = "root";
$userPass = "";
$DBname = "cyberonion";
$conn = mysqli_connect($hostName, $userName, $userPass, $DBname);

if (mysqli_connect_error()) {
    echo "<b>There is a connection problem with the server</b> :  " . mysqli_connect_error();
    exit();
}


?>