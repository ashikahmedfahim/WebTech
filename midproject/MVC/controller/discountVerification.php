<?php
    $addDiscount = '';
    $addDiscountErr = "";
    $removeDiscount = '';
    $removeDiscountErr = "";
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
                }    
            }
        }
        if (isset($_POST['removeDiscount'])) {
            if (0) {
                $removeDiscountErr = "No previous discount is found";
                
            }
        }
}
?>

