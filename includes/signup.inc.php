<?php

if (isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordrpt = $_POST["passwordrpt"];
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //$sql = mysqli_query("SELECT * FROM users WHERE usersEmail LIKE '%$email%'") ;
    //$row = mysqli_num_rows;

    if (emptyInputSignup($name, $email, $password, $passwordrpt) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (isAvailable($email) !== true){
        header("location: ../signup.php?error=emailmatch");
        exit();
    }

    if (pwdMatch($password, $passwordrpt) !== false){
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    createUser($conn, $name, $email, $password);
    
}
else {
    header("location: ../signup.php");
    exit();
}