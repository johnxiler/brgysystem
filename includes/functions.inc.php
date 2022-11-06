<?php
 function emptyloginInput($username, $password){
    $result;
    if (empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
}

function invalidUsername($username){
    $result;
    if ($username){
        $result = true;
    }
    else{
        $result = false;
    }
}

function invalidPassword($password){
    $result;
    if ($username){
        $result = true;
    }
    else{
        $result = false;
    }
}

function userExists($conn, $username, $password){
    $sql = "SELECT * FROM `tbluser` WHERE `username`= `?`  and `password`= `?` ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location: ../adminloginPage.php?error=stmtfailed");
       exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)) {
       return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function loginUser($conn, $username, $password){
    $userExists = userExists($conn, $username, $username);
    if ($userExists === false){
        header("location: ../adminloginPage.php?error=wronglogin");
        exit();
    }
    $passHashed =$userExists["password"];
    $checkPwd = password_verify($password, $passHashed);

    if ($checkPwd === false){
        header("location: ../adminloginPage.php?error=wronglogin");
        exit();
    }else if($checkPwd === true){
        session_start();
        $_SESSION['username'] = $userExists["$username"];
        $_SESSION['username'] = $userExists["$username"];
        header("location: ../dashboard.php");
        exit();
    }
}
