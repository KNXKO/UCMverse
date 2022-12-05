<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (isset($_POST["submit"])){

    $name = $_POST["name"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $bdate = $_POST["bdate"];
    $password = $_POST["password"];
    $passwordrpt = $_POST["passwordrpt"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $lname, $email, $bdate, $password, $passwordrpt) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }


    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (emailExists($conn,$email) !== false){
        header("location: ../signup.php?error=userexists");
        exit();
    }

    if (pwdMatch($password, $passwordrpt) !== false){
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    createUser($conn, $name, $lname, $email, $bdate, $password);
    
}
else {
    header("location: ../signup.php");
    exit();
}