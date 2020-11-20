<?php
                    $id = $mobileNumber = $password = $passwordText = '';
                    $idErr = $mobileNumberErr = "";
                    $idF = $mobileNumberF = false;
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["id"])) {
                        $idErr = "An Id is required";
                    }
                    else{
                        $id=$_POST["id"];
                        $idF=true;
                    }
                    if (empty($_POST["mobileNumber"])) {
                        $mobileNumberErr = "A valid Mobile Number is required";
                    }
                    else{
                        $number=$_POST['mobileNumber'];
                        $pattern = "/^[0-9]+$/";
                        if(!preg_match($pattern, $number)){
                            $mobileNumberErr = "Only Numbers are allowed";
                        }
                        elseif (strlen($_POST['mobileNumber'])!=11) {
                            $mobileNumberErr = "Mobile number must have 11 digits";
                        }
                        else{
                            $mobileNumber=$_POST["mobileNumber"];
                            $mobileNumberF=true;
                        }
                    }

                    if($idF==true && $mobileNumberF==true){
                        $myfile = fopen("../asset/data/login.txt", "r") or die("Unable to open file!");

                            while ($line = fgets($myfile)) {
                                $words = explode(",",$line);
                                if(strcmp($id,$words[0]) == 0) {
                                   $password=$words[1];
                                   $passwordText="Your password is ".$password;
                                }
                                else{
                                    $passwordText="You have entered wrong User Id or Mobile Number";
                                }
                            }
                            fclose($myfile);
                    }

                }
?>