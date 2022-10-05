<?php
    
    function conn() {

        $conn = new mysqli("localhost", "root", "", "caveportal1");
    
        if(!$conn){
            die("Error: Cannot connect to the database");
        } 
        return $conn;

    }

?>