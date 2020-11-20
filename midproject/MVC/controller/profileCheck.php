<?php

    $myfile = fopen("../asset/data/mobileNumber.txt", "r") or die("Unable to open file!");

    $mobileNumber = fgets($myfile);

    fclose($myfile);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/MVC/view/profileUpdate.php',true,303);
        exit;
    }
?>