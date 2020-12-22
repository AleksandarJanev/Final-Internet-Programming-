<?php

include "dbh.class.php";

class Functions extends Dbh{
    
protected function setSubmittionStmt($Name, $Username, $Password, $City, $tUser){
           
            $sql = "INSERT INTO reservation(Name, Username, Password, City, tUser) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$Name, $Username, $Password, $City, $tUser]);

    }
}