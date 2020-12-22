<?php
include "functions.class.php";
class SubmittionContr  extends Functions{
    public function createSubmittion($Name, $Username, $Password, $City, $tUser){
        $this->setSubmittionStmt($Name, $Username, $Password, $City, $tUser);
    }
}