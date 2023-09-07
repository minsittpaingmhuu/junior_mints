<?php
if(isset($_GET['error']) && isset($_GET['email'])){
require 'views/entertoken.view.php';
}else{
    header("location: /forbidden");
}