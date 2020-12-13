<?php

        function signUpReg($userName , $id , $password , $email , $dob){

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
        
        $sql = "INSERT INTO userinfo (userName, id, password, email, dob)
        VALUES ('$userName', '$id', '$password', '$email', '$dob')";
        
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
        
        }