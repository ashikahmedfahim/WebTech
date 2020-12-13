<?php
    require('../model/loginModel.php');
    $id = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $password = $_POST["password"];
        if(loginCheck($id, $password)){
            session_start();
            $_SESSION['id']=$id;
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/labtask3/MVC/view/home.php',true,303);
            exit;
        }
        else{
            echo "Error";
        }
    }