<?php

function loginCheck($id, $pass){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT id FROM userinfo WHERE userName='".$id."'AND pass= '".$pass."' ";
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

function balanceRetrive($id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT balance FROM userinfo WHERE userName='".$id."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()){
            $b = $row["balance"] ;
        }
        $conn->close();
    } 
    else {
        echo "0 results";
        $conn->close();
    }
    return $b;
}

function updateBalance($amount,$id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE userinfo SET balance='".$amount."' WHERE userName='".$id."'";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}

?>

