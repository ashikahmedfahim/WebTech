<?php
    $addDiscount = '';
    $addDiscountErr = "";
    $addDiscountSuccessful = "";
    $removeDiscount = '';
    $removeDiscountErr = "";
    $removeDiscountSuccessful ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['addDiscountButton'])) {
            if (empty($_POST["discount"])) {
                $addDiscountErr = "An amount is required";
            }
            else{
                $number=$_POST['discount'];
                $pattern = "/^[0-9]+$/";
                if(!preg_match($pattern, $number)){
                    $addDiscountErr = "Only Numbers are allowed";
                }
                else if ($number<=0 || $number>100) {
                    $addDiscountErr = "Enter an amount between 1 to 100";
                }
                else{
                    $addDiscount=$_POST["discount"];

                    $userFound = false;

                    $myfile = fopen("../asset/data/discount.txt", "r") or die("Unable to open file!");

                        while ($line = fgets($myfile)) {
                            $words = explode(",",$line);
                            if(strcmp("1",$words[1]) == 0 ) {
                                $addDiscountErr = "There is already a Discount. Please Remove it First"; 
                                break;
                            }
                            else{  
                                $user = fopen("../asset/data/discount.txt", "w") or die("Unable to open file!");
                                fwrite($user, $addDiscount. "," . "1");
                                fclose($user);
                                $addDiscountSuccessful = "Discount added Successfully";
                                break;
                            }
                        }
                        fclose($myfile);

                }    
            }
        }
        if (isset($_POST['removeDiscount'])) {

            $myfile = fopen("../asset/data/discount.txt", "r") or die("Unable to open file!");

            while ($line = fgets($myfile)) {
                $words = explode(",",$line);
                if(strcmp("1",$words[1]) == 0 ) {
                    $user = fopen("../asset/data/discount.txt", "w") or die("Unable to open file!");
                    fwrite($user, "0". "," . "0");
                    fclose($user);
                    $removeDiscountSuccessful = "Discount Removed Successfully";
                    break;
                }
                else{
                    $removeDiscountErr = "No previous discount is found. Please add first";
                    break;
                }
            }
        }
    }
?>

