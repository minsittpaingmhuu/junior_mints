<?php
if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);
    $homekit = htmlspecialchars($_POST['homekit']);
    $awaykit = htmlspecialchars($_POST['awaykit']);
    $scarf = htmlspecialchars($_POST['teamscarf']);
    $cover = htmlspecialchars($_POST['phonecover']);
    $mug = htmlspecialchars($_POST['teammug']);

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    shopOrder($conn, $id, $homekit, $awaykit, $scarf, $cover, $mug);

}else{
    header("location: /forbidden");
}