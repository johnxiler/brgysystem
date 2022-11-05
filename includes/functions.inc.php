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