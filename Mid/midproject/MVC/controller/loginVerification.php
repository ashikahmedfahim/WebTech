<?php
                    $id = $password = '';
                    $idErr = $passwordErr = $loginErr = "";
                    $idF = $passwordF = false;
                    if(isset($_COOKIE['id']) && isset($_COOKIE['pass'])){
                        $id=$_COOKIE['id'];
                        $password=$_COOKIE['pass'];
                    } 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["id"])) {
                        $idErr = "An Id is required";
                    }
                    else{
                        $id=$_POST["id"];
                        $idF=true;
                    }
                    if (empty($_POST["password"])) {
                        $passwordErr = "A password is required";
                    }
                    else{
                        $password=$_POST["password"];
                        $passwordF=true;
                    }
                    if($idF==true && $passwordF==true){

                        $userFound = false;

                        $myfile = fopen("../asset/data/login.txt", "r") or die("Unable to open file!");

                            while ($line = fgets($myfile)) {
                                $words = explode(",",$line);
                                if(strcmp($id,$words[0]) == 0 && strcmp($password,$words[1]) == 0 ) {
                                   $userFound=true; 
                                }
                            }
                            fclose($myfile);
                            
                            
                       /*  $myfile = fopen("../asset/data/login.txt", "r") or die("Unable to open file!");
                        $count=0;
                        while(!feof($myfile)) {
                            if($count==0){
                                $data1=fgets($myfile);
                                $data1=substr($data1,0,5);
                                $count++;
                            }
                            else{
                                $data2=fgets($myfile);
                            }
                        }
                        fclose($myfile); */


                        /* $val1=strcmp($data1,$id);
                        $val2=strcmp($data2,$password); */
                        /* $val1==0 && $val2==0 */
                        if($userFound){
                            session_start();
                            $_SESSION['id']=$id;
                            if(isset($_POST['rm'])){
                                setcookie('id',$id,time()+86400);
                                setcookie('pass',$password,time()+86400);
                            }
                            else{
                                setcookie('id',$id,time()-1);
                                setcookie('pass',$password,time()-1);
                            }
                            header('Location: http://'.$_SERVER['HTTP_HOST'].'/midproject/MVC/view/home.php',true,303);
                            exit;
                        }
                        else{
                            $loginErr = "User Id or Passsword does not match";
                        }
                        
                    }
                    
                }
?>