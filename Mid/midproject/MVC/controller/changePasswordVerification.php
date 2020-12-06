<?php
                    $currentPassword = $newPassword = $confirmPassword = $updatePassword = '';
                    $currentPasswordErr = $newPasswordErr = $confirmPasswordErr = "";
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["currentPassword"])) {
                        $currentPasswordErr = "Current Password is required";
                    }
                    else{
                        $currentPassword=$_POST["currentPassword"];
                    }
                    if (empty($_POST["newPassword"])) {
                        $newPasswordErr = "New Password is required";
                    }
                    else{
                        $newPassword=$_POST["newPassword"];
                    }
                    if (empty($_POST["confirmPassword"])) {
                        $confirmPasswordErr = "Confirmation is required";
                    }
                    else{
                        $confirmPassword=$_POST["confirmPassword"];
                        if (!empty($_POST["newPassword"])) {
                            $val=strcmp($newPassword,$confirmPassword);
                            if($val==0){
                                $confirmPassword=$_POST["confirmPassword"]; 
                            }
                            else{
                                $confirmPasswordErr = "Password do not match, Please Re-enter"; 
                                $confirmPassword='';      
                            }  
                        }
                        else{
                            $confirmPassword=$_POST["confirmPassword"];   
                        }
                                          
                    }
                    
                    $myfile = fopen("../asset/data/login.txt", "r") or die("Unable to open file!");

                    while ($line = fgets($myfile)) {
                        $words = explode(",",$line);
                        if(strcmp($currentPassword,$words[1]) == 0 ) {
                        $updatePassword = "Password Updated Successfully";
                        }
                        else{
                            $currentPasswordErr="Current Password does not match ";   
                        }
                    }
                    fclose($myfile);              
                }
?>