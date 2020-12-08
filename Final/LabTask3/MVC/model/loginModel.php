<?php

    function loginCheck($id, $password){
        $servername = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "userdata";

        // Create connection
        $conn = new mysqli($servername, $username, $pass, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }


        $sql = "SELECT id FROM userinfo WHERE id='".$id."'AND password= '".$password."' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            $conn->close();
            return true;
        } 
        else {
            $conn->close();
            echo "0 results";
            return false; 
        }
    }