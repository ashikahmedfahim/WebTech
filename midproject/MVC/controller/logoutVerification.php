<?php
session_start();
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['logout'])) {
            session_destroy();
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/MVC/view/login.php',true,303);
            exit;
        }

    }                 
?>