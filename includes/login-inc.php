<?php 
if (isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'db_conn.php';
    require_once 'functions.inc.php';
//error handlers -->
    if (emptyloginInput($username, $password) !== false){
     header("location: ../adminloginPage.php?error=emptyinput");
     exit();
    }
    if(invalidUsername($username) !==false){
     header("location: ../adminloginPage.php?error=invalidusername");
     exit();
    }
    if(invalidPassword($password) !==false){
     header("location: ../adminloginPage.php?error=invalidpassword");
     exit();
    }

    loginUser($conn, $username, $password);
    
}
else {
    header("location: ../adminloginPage.php");
    exit();
}