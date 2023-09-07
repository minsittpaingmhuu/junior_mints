<?php
session_start();
if(isset($_SESSION['userid'])){
    header('location: /profile');
    exit();
}


require 'views/signup.view.php';
