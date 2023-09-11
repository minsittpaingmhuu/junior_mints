<?php

if(isset($_GET['email'])){
    if($_GET['error']){
    require 'views/changepass.view.php';
    end();
    }
    else{
        header("location: /forbidden");
    }
}else{
    header("location: /forbidden");
}
