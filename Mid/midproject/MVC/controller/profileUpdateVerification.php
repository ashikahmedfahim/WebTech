<?php
     $mobile = '';
     $mobileErr = $mobileOk = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["mobile"])) {
            $mobileErr = "A Mobile Number is required";
        }
        elseif (strlen($_POST['mobile'])!=11) {
            $mobileErr = "Mobile number must have 11 digits";
        }
        else{
            $mobile=$_POST["mobile"];
            $user = fopen("../asset/data/mobileNumber.txt", "w") or die("Unable to open file!");
            fwrite($user, $mobile);
            fwrite($user, "\n");
            fclose($user);
            $mobileOk = "Update Successful";
        }
    }
?>