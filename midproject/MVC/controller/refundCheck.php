<?php

    $refundRequest ="";
    $refundErr="";
    $refundSuccessful="";
    $myfile = fopen("../asset/data/refundRequest.txt", "r") or die("Unable to open file!");

    while ($line = fgets($myfile)) {
        $words = explode(",",$line);
        if(strcmp("1",$words[1]) == 0 ) {
            $refundRequest =$words[0];
        }
        else{
            $refundRequest = "No refund is requested ";
        }
    }
    fclose($myfile);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $myfile = fopen("../asset/data/refundRequest.txt", "r") or die("Unable to open file!");

        while ($line = fgets($myfile)) {
            $words = explode(",",$line);
            if(strcmp("1",$words[1]) == 0 ) {
                $user = fopen("../asset/data/refundRequest.txt", "w") or die("Unable to open file!");
                fwrite($user, "0". "," . "0");
                fclose($user);
                $refundSuccessful = "Refunded Successfully";
                break;
            }
            else{
                $refundErr = "No request is found.";
                break;
            }
        }
    }


?>