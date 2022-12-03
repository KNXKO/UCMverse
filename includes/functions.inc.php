<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function emptyInputSignup($name, $lname, $email, $bdate, $password, $passwordrpt) {
    $result;
    if (empty($name) || empty($lname) || empty($email) || empty($bdate) || empty($password) || empty($passwordrpt)){
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

function pwdMatch($password, $passwordrpt) {
    $result;
    if ($password !== $passwordrpt){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emailExists($conn, $email){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
} 

function createUser($conn, $name, $lname, $email, $bdate, $password){
    $sql = "INSERT INTO users (usersName, usersLastname, usersEmail, usersBdate, usersPwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $lname, $email, $bdate, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php");

}

function emptyInputLogin($email, $password) {
    $result;
    if (empty($email) || empty($password)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password){
    $emailExists = emailExists($conn, $email);

    if ($emailExists === false) {
        header("location: ../index.php?error=wronglogin");
        exit();
    }

    $passwordhashed = $emailExists["usersPwd"];
    $checkpassword = password_verify($password, $passwordhashed);

    if ($checkpassword === false) {
        header("location: ../index.php?error=wronglogin");
        exit();
    }
    else if ($checkpassword === true) {
        session_start();
        $_SESSION["userid"] = $emailExists["usersId"];
        header("location: ../home.php");
        exit();
    }
}

function check_login($conn)
{

	if(isset($_SESSION['userid']))
	{

		$id = $_SESSION['userid'];
		$query = "select * from users where usersId = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: index.php");
	die;

}


