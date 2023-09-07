<?php

session_start();
if(isset($_SESSION['userid'])){
    header('location: /profile');
    exit();
}

function require_multi() {
    require_once('views/login.view.php');
};

require_multi();