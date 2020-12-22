<?php
$mysqli = new mysqli('localhost', 'root', '', 'finaltestdb') or die(mysqli_error($mysqli));

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Username = $_POST['username'];
    $Password = $_POST['pwd'];
    $City = $_POST['city'];
    $tUser = $_POST['tuser'];

    require_once "controller.php";
    require_once "dbh.class.php";
    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if(emptyInput($Name, $Username, $Password, $City) !== false){
        header("location: index.php?error=emptyinput" );
        //Exit() is to stop the script from running
        exit();
    }

    
        createSubmition($Name, $Username, $Password, $City, $tUser);

}