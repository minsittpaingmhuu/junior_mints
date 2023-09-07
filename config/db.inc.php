<?php

$serverName = "localhost";
$dbUserName = "minsitt";
$dbPassword = "abc123";
$dbName = "project";

$conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

if(!$conn){
    echo "Fuck Database";
    die("Conection Failed ". mysqli_connect_error());
}