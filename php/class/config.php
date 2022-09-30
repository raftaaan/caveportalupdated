<?php
    
    function conn() {

        $conn = new mysqli("localhost", "root", "", "caveportal");
    
        if(!$conn){
            die("Error: Cannot connect to the database");
        }
        return $conn;
    }

?>