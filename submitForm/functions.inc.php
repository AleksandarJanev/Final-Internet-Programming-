<?php

function emptyInput($Name, $Username, $Password, $City){
    $result;

    if(empty($Name) || empty($Username) || empty($Password) || empty($City)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function createSubmition($Name, $Username, $Password, $City, $tUser){

    include_once "controller.php";

        $newSubmittion = new SubmittionContr();
        $newSubmittion->createSubmittion($Name, $Username, $Password, $City, $tUser);

        header("location: index.php?error=none");
        exit();
}

