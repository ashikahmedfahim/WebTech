<?php
                    require('../Model/connection.php');
                    $id = $password = '';
                    $idF = $passwordF = false;
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["id"])) {
                        echo "An Id is required";
                    }
                    else{
                        $id=$_POST["id"];
                        $idF=true;
                    }
                    if (empty($_POST["password"])) {
                        echo "A password is required";
                    }
                    else{
                        $password=$_POST["password"];
                        $passwordF=true;
                    }
                    if($idF==true && $passwordF==true){   
                        $flag=loginCheck($id,$password);
                        if($flag){
                            session_start();
                            $_SESSION['id']=$id;
                            header('Location: http://'.$_SERVER['HTTP_HOST'].'/LabTask3(FinalTerm)/MVC/view/balance.php',true,303);
                            exit;
                        }
                        else{
                            echo "User Id or Passsword does not match";
                        }
                        
                    }
                    
                }
?>