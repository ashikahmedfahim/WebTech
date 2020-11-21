<?php
    $budget = $addBudget = $budgetErr = $budgetSuccessful = "";
    $expense= $addExpense = $expenseErr = $expenseSuccessful = "";

    $myfile = fopen("../asset/data/remainingBudget.txt", "r") or die("Unable to open file!");

    while ($line = fgets($myfile)) {
        $words = explode(",",$line);
        if(strcmp("1",$words[1]) == 0) {
            $budget = $words[0]; 
        }
    }
    fclose($myfile);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['addBudget'])) {
            if (empty($_POST["budget"])) {
                $budgetErr = "An amount is required";
            }
            else{
                $number=$_POST['budget'];
                $pattern = "/^[0-9]+$/";
                if(!preg_match($pattern, $number)){
                    $budgetErr = "Only Numbers are allowed";
                }
                else{
                    $addBudget=$_POST["budget"];

                    $myfile = fopen("../asset/data/remainingBudget.txt", "r") or die("Unable to open file!");

                    while ($line = fgets($myfile)) {
                        $words = explode(",",$line);
                        if(strcmp("1",$words[1]) == 0 && $words[0]>0) {
                            $budgetErr = "There is already a Budget. You can not add twice"; 
                        }
                        else{  
                            $user = fopen("../asset/data/budget.txt", "w") or die("Unable to open file!");
                            fwrite($user, $addBudget. "," . "1");
                            fclose($user);
                            $budgetSuccessful = "Budget added Successfully";

                            $user1 = fopen("../asset/data/remainingBudget.txt", "w") or die("Unable to open file!");
                            fwrite($user1, $addBudget. "," . "1");
                            fclose($user1);

                            $myfilex = fopen("../asset/data/remainingBudget.txt", "r") or die("Unable to open file!");

                            while ($line = fgets($myfilex)) {
                                $words = explode(",",$line);
                                if(strcmp("1",$words[1]) == 0) {
                                    $budget = $words[0]; 
                                }
                            }
                            fclose($myfilex);
                        }
                    }
                    fclose($myfile);

                }    
            }
        }
        if (isset($_POST['addExpense'])) {

            if (empty($_POST["expense"])) {
                $expenseErr = "An amount is required";
            }
            else{
                $number=$_POST['expense'];
                $pattern = "/^[0-9]+$/";
                if(!preg_match($pattern, $number)){
                    $expenseErr = "Only Numbers are allowed";
                }
                else{
                    if($_POST['expense']>$budget){
                        $expenseErr = "Expense can not be greater than remaining amount";
                    }
                    else{
                        $expense=$_POST['expense'];
                        $ans=$budget-$expense;
                        if($ans==0){
                            $user1 = fopen("../asset/data/remainingBudget.txt", "w") or die("Unable to open file!");
                            fwrite($user1, "0". "," . "0");
                            fclose($user1);
                            $expenseSuccessful = "Expense added successfully";

                            $myfile = fopen("../asset/data/remainingBudget.txt", "r") or die("Unable to open file!");

                            while ($line = fgets($myfile)) {
                                $words = explode(",",$line);
                                if(strcmp("1",$words[1]) == 0) {
                                    $budget = $words[0]; 
                                }
                            }
                            fclose($myfile);
                        }
                        else{
                            $user1 = fopen("../asset/data/remainingBudget.txt", "w") or die("Unable to open file!");
                            fwrite($user1, $ans. "," . "1");
                            fclose($user1);
                            $expenseSuccessful = "Expense added successfully";

                            $myfile = fopen("../asset/data/remainingBudget.txt", "r") or die("Unable to open file!");

                            while ($line = fgets($myfile)) {
                                $words = explode(",",$line);
                                $budget = $words[0]; 
                            }
                            fclose($myfile);
                        }
                        
                    }




                }
            }

        }
    }
?>

