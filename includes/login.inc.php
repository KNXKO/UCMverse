<?php

if (isset($_POST["submit"])) {

    $username = $_POST["email"];
    $password = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    f (emptyInputLogin($email, $password) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

}