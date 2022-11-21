<?php

function emptyInputSignup($name, $email, $password, $passwordrpt) {
    $result;
    if (empty($name) || empty($email) || empty($password) || empty($passwordrpt)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function isAvailable($email){

    $sql = "SELECT * FROM users WHERE usersEmail='$email'" ;

    $result = mysql_query( $sql ) ;

    if( mysql_num_rows( $result ) > 0 )
    {
        return true;
    }
    return false;
}


/*function emailMatch($conn, $email) {
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
    }
}*/


function createUser($conn, $name, $email, $password){
    $sql = "INSERT INTO users (usersName, usersEmail, usersPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }



    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");

}


